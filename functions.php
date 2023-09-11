<?php

function random_password($chars)
{
  $rest = $chars % 4;
  $random_characters = ($chars - $rest) / 4;

  $lower_case = "abcdefghijklmnopqrstuvwxyz";
  $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $numbers = "1234567890";
  $symbols = "!@#$%^&*";

  $lower_case = str_shuffle($lower_case);
  $upper_case = str_shuffle($upper_case);
  $numbers = str_shuffle($numbers);
  $symbols = str_shuffle($symbols);

  $random_password = substr($lower_case, 0, ($random_characters + $rest));
  $random_password .= substr($upper_case, 0, $random_characters);
  $random_password .= substr($numbers, 0, $random_characters);
  $random_password .= substr($symbols, 0, $random_characters);

  return  str_shuffle($random_password);
}
?>