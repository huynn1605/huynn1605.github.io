<?php
$item = array('1' => '20', '2' => '10', '3' => '20', '4' => '20', '5' => '20', '6' => '30', '7' => '10', '8' => '30');
$mangphanqua = array();
foreach ($item as $item => $value) {
  $mangphanqua = array_merge($mangphanqua, array_fill(0, $value, $item));
}
$hoangphuc = $mangphanqua[array_rand($mangphanqua)];
echo $hoangphuc;
