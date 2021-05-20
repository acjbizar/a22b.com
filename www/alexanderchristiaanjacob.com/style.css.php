<?php

header('Content-Type: text/css; charset=utf-8');

$r1 = mt_rand(0,255);
$g1 = mt_rand(0,255);
$b1 = mt_rand(0,255);
$r2 = mt_rand(0,255);
$g2 = mt_rand(0,255);
$b2 = mt_rand(0,255);
$r3 = mt_rand(0,255);
$g3 = mt_rand(0,255);
$b3 = mt_rand(0,255);
$r4 = mt_rand(0,255);
$g4 = mt_rand(0,255);
$b4 = mt_rand(0,255);

?>

html{
background-image:-moz-linear-gradient(-45deg,rgba(<?php echo $r1; ?>,<?php echo $g1; ?>,<?php echo $b1; ?>,.5) 0%,rgba(<?php echo $r2; ?>,<?php echo $g2; ?>,<?php echo $b2; ?>,.5) 100%),-moz-linear-gradient(45deg,rgb(<?php echo $r3; ?>,<?php echo $g3; ?>,<?php echo $b3; ?>) 0%,rgb(<?php echo $r4; ?>,<?php echo $g4; ?>,<?php echo $b4; ?>) 100%);
background-image:-ms-linear-gradient(-45deg,rgba(<?php echo $r1; ?>,<?php echo $g1; ?>,<?php echo $b1; ?>,.5) 0%,rgba(<?php echo $r2; ?>,<?php echo $g2; ?>,<?php echo $b2; ?>,.5) 100%),-ms-linear-gradient(45deg,rgb(<?php echo $r3; ?>,<?php echo $g3; ?>,<?php echo $b3; ?>) 0%,rgb(<?php echo $r4; ?>,<?php echo $g4; ?>,<?php echo $b4; ?>) 100%);
background-image:-o-linear-gradient(-45deg,rgba(<?php echo $r1; ?>,<?php echo $g1; ?>,<?php echo $b1; ?>,.5) 0%,rgba(<?php echo $r2; ?>,<?php echo $g2; ?>,<?php echo $b2; ?>,.5) 100%),-o-linear-gradient(45deg,rgb(<?php echo $r3; ?>,<?php echo $g3; ?>,<?php echo $b3; ?>) 0%,rgb(<?php echo $r4; ?>,<?php echo $g4; ?>,<?php echo $b4; ?>) 100%);
background-image:-webkit-linear-gradient(-45deg,rgba(<?php echo $r1; ?>,<?php echo $g1; ?>,<?php echo $b1; ?>,.5) 0%,rgba(<?php echo $r2; ?>,<?php echo $g2; ?>,<?php echo $b2; ?>,.5) 100%),-webkit-linear-gradient(45deg,rgb(<?php echo $r3; ?>,<?php echo $g3; ?>,<?php echo $b3; ?>) 0%,rgb(<?php echo $r4; ?>,<?php echo $g4; ?>,<?php echo $b4; ?>) 100%);
background-image:linear-gradient(<?php echo $g1; ?>,<?php echo $b1; ?>,.5) 0%,rgba(<?php echo $r2; ?>,<?php echo $g2; ?>,<?php echo $b2; ?>,.5) 100%),linear-gradient(45deg,rgb(<?php echo $r3; ?>,<?php echo $g3; ?>,<?php echo $b3; ?>) 0%,rgb(<?php echo $r4; ?>,<?php echo $g4; ?>,<?php echo $b4; ?>) 100%);
background-repeat:no-repeat
}