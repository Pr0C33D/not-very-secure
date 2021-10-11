<?php 
// https://www.codewars.com/kata/526dbd6c8c0eb53254000110
function alphanumeric(string $s): bool {
  if(empty($s)) return false;
  return preg_match_all('/[\W]{1}/', $s) ? false : true;
}
?>