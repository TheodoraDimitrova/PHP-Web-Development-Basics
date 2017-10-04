<?php
//Having in mind the considerations in the Task 3, find the largest number,
// but this time the input numbers might contain negatives.
$numbers = [];
while ($num = intval(fgets(STDIN))){
      $numbers[] = $num;
}
echo "Max:".max($numbers);

