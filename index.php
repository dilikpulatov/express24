<?php
include_once "inc/ArraySum.php";

$result1 = new AppArraySum([2,4,3], [5,6,4]);
$result2 = new AppArraySum([9,9,9,9,9,9,9], [9,9,9,9]);

print_r($result1->getSum());
print_r($result2->getSum());