<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anagram</title>
</head>
<body>
<form method="GET" action="{{ action('AnagramController@find_match') }}">
    <input type="text" name="word">
    <input type="submit" value="Anagramify">
</form>
<br><br>
{{--{{ $words }}--}}
</body>
</html>
