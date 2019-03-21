<?php

// Exerpt text for reviews
function exerpt_text($some_text) {
  $num_of_chars = mb_strlen($some_text);

  if ($num_of_chars > 260) {
    $result = mb_substr($some_text, 0, 260);
    $result .= '...';
  }

  return $result;
}

