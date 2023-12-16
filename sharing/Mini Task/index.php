<?php

$text = "As a Web programmer at the Public Service Commission in Timor-Leste, We develop a complex web-based software called SIGAP-FOUN. This system manages various data of Timor-Leste Public Service, including personal information, finances, assessments, academic qualifications, and detailed employment records of public service employees. SIGAP-FOUN incorporates advanced technology, like Employee Identity Cards with QR codes for easy data validation. Additionally, we provide Web Services and APIs to facilitate data exchange with other institutions for seamless integration. Just for information, this system serves not only to oversee the employees of this institution but extends its functionality to include all employees in Timor-Leste, totaling more than 39,000 active employees";
/*
1. Number of words from the text above
2. The number of occurrences of each word in the text
3. Number of words that only appear once
4. The number of words that appear the most and they are said
5. The fewest number of words that appear and the word
*/


// 1. Number of words from the text above
$wordCount = str_word_count($text);
echo "1. Number of words: $wordCount";
echo "<br><br>";

// 2. The number of occurrences of each word in the text
$wordOccurrences = array_count_values(str_word_count($text, 1));
echo "2. Occurrences of each word: ";
print_r($wordOccurrences);
echo "<br><br>";

// 3. Number of words that only appear once
$uniqueWords = array_keys($wordOccurrences, 1);
$uniqueWordCount = count($uniqueWords);
echo "3. Number of words that appear only once: $uniqueWordCount\n";
echo "<br><br>";

// 4. The number of words that appear the most and they are said
$maxOccurrences = max($wordOccurrences);
$mostFrequentWords = array_keys($wordOccurrences, $maxOccurrences);
echo "4. Number of words that appear the most: $maxOccurrences\n";
echo "<br>";
echo "4. The word(s) that appear the most: " . implode(', ', $mostFrequentWords) . "\n";
echo "<br><br>";

// 5. The fewest number of words that appear and the word
$minOccurrences = min($wordOccurrences);
$leastFrequentWords = array_keys($wordOccurrences, $minOccurrences);
echo "5. Number of words that appear the least: $minOccurrences\n";
echo "<br>";
echo "5. The word(s) that appear the least: " . implode(', ', $leastFrequentWords);
echo "<br><br>";
