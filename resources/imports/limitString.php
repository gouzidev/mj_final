<?php

function limitString($s, $limit) {
  if (strlen($s) > $limit) {
    $res = substr($s, 0, $limit);
    $res .= "...";
  } else {
    $res = $s;
  }
  return $res;
}





?>
