<?php

namespace App\Http\Controllers;

use App\AlphaWord;
use App\Word;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnagramController extends Controller
{
    public function sort_word(Request $request)
    {
        $sorted_word = str_split($request->input('sorted_word'));
        sort($sorted_word);
        $sorted_word = implode('', $sorted_word);
        $this->find_match($sorted_word);
    }

    public function find_match($sorted_word)
    {
        $words = AlphaWord::where('alpha_word', '=', $sorted_word)->get();
        $anagrams = [];
        foreach ($words as $word) {
            $anagrams[] = Word::where('alpha_word_id', '=', $word->id)->get();
        }
        foreach ($anagrams as $anagram) {
            foreach ($anagram as $item)
            print_r($item->word."\n");
        }
    }
}
