<?php

$words = [
'evidence' => 'A discovery that helps solve a crime',
'ponder' => 'To think carefully about something',
'locate' => 'Discover the exact place or position of something or someone',
'abridge' => 'to shorten by leaving out some parts',
'regulate' => 'to make rules or laws that control something',
'modest' => 'not overly proud or confident',
'impromptu' => 'not prepared ahead of time',
'stint' => 'a period of time spent at a particular activity',
'tranquil' => 'free from disturbance or turmoil',
'mutiny' => 'a turning of a group against a person in charge'
];

function shuffle_assoc($words) {
  if (!is_array($words)) return $words;

  $keys = array_keys($words);
  shuffle($keys);
  $random = array();
  foreach ($keys as $key)
    $random[$key] = $words[$key];

  return $random; }

  #var_dump($random);

?>