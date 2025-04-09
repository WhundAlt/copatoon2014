<?php
// Replacement code for Flashpoint archives

srand(mktime());

$catimgs = range(1,197);
shuffle($catimgs);

for ($x = 0; $x <= 196; $x++)
{
  $txtline = 'image' . $x . '=cats%2FCAT_' . sprintf("%'.03d", $catimgs[$x]) . '.swf&';
  echo $txtline;
}

echo "count=197";
?>
