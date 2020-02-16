## Nag A Ram

This is a PHP program that finds anagrams of words according to a database.

Setup:
* clone project
* run composer install
* copy .env.example to .env =>cp .env.example .env
* change database host, name, password in .env
* api endpoints:
  * /api/wordlist?wordlist=* wordlist url here *
  * /api/find-anagram?sorted_word=* word here *
