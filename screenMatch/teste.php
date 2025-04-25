<?php

$op = (string)fgets(STDIN);

$opCount = strlen($op);
$trimed[] = explode(' ', $op);

echo $op . ' tamanho: ' . $opCount . ' me trimmed: ' . $trimed;

//the steps I had in mind:
//read the number of text lines entries
//read the text lines
//trim the text lines out of spaces (if possible while maintaining the spaces between words)
//count the longest line characters
//make an array with that number counted
//reverse the position of the words in the array making the start at the last index and then fill the non utilized indexes with spaces
//give that output

//tell me my darling, can a heart still break once it's stopped beating?

//you were a mistake
class Justify {
    private int $entries;
    private string $text;

    public function __construct(int $entries, string $text)
    {
        $this->entries = $entries;
        $this->text = $text;
    }

    public static function readEntries(int $entries): array
    {
        $textArray = [];
        for ($i = 0; $i < $entries; $i++) {
            $textArray[] = (string)fgets(STDIN);
        }

        return $textArray;
    }

    public static function writeEntries(array $textEntries): array
    {
        $finalcut = [];
        foreach ($textEntries as $text) {
            $finalcut[] = explode(' ', $text);
        }

        return $finalcut;
    }

    public static function output(array $separatedWords): void
    {
        foreach ($separatedWords as $word) {
            echo $word . ' ';
        }
    }
}
