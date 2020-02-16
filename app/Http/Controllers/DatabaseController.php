<?php

namespace App\Http\Controllers;

use App\AlphaWord;
use App\Word;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatabaseController extends Controller
{
    public function import_wordlist(Request $request)
    {
        $array = file($request->input('wordlist'));
        $alphaword_array = [];
        $word_array = [];
        $mapped_alpha_words = [];

        foreach ($array as $value) {
            $value = str_replace(array("\r\n", "\n", "\r"), '', $value);
            $sorted_word = $this->sort_word($value);

            if (!in_array($sorted_word, $alphaword_array)) {
                $alphaword_array[] = $sorted_word;
            }
        }
        $eloquent_array = array_map(function ($alpha_word) {
            return ['alpha_word' => $alpha_word];
        }, $alphaword_array);
        foreach (array_chunk($eloquent_array, 500) as $t) {
            AlphaWord::insert($t);
        }

        $alpha_words = AlphaWord::all();

        foreach ($alpha_words as $alpha_word) {
            $mapped_alpha_words[$alpha_word->alpha_word] = $alpha_word->id;
        }
        foreach ($array as $word) {
            $word = str_replace(array("\r\n", "\n", "\r"), '', $word);
            $sorted_word = $this->sort_word($word);
            $word_array[] = ['word' => $word, 'alpha_word_id' => $mapped_alpha_words[$sorted_word]];

        }
        foreach (array_chunk($word_array, 500) as $t) {
            Word::insert($t);
        }
        return 1;
    }

    public function sort_word($word)
    {
        $sorted_word = str_split($word);
        sort($sorted_word);
        $sorted_word = implode('', $sorted_word);

        return $sorted_word;
    }

}
