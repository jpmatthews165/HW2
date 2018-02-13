<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br><br>";

echo "Number 2. <br>";
$date = str_replace('-', '/', $date);
echo $date;

echo "<br><br>";

echo "Number 3. <br>";
if ($date > $tar) {
	echo "the future";
}
elseif ($date < $tar) {
	echo "the past";
}
else {
	echo "Oops";
}

echo "<br><br>";

echo "Number 4. <br>";
$start = 0;
while (1) {
    $pos = strpos($date, "/", $start);
    if ($pos == FALSE) {
        break;
    } else {
        echo "$pos ";
        $start = $pos + 1;
    }
}
echo "<br><br>";

echo "Number 5. <br>";
$count = str_word_count($date);
echo $count;

echo "<br><br>";

echo "Number 6. <br>";
$string_length = strlen($date);
echo "$string_length";

echo "<br><br>";

echo "Number 7. <br>";
$sub = substr($date,0,1);
$ascii= ord($sub);
echo $ascii;

echo "<br><br>";

echo "Number 8. <br>";
$last = substr($date,-2);
echo $last;

echo "<br><br>";

echo "Number 9. <br>";
$array = explode("/", $date);
echo implode(" ", $array);

echo "<br><br>";

echo "Number 10. <br>";
$i = 0;
$arr  = array();
foreach ($year as $key => $value) {
	$test = $value % 4;
	if ((($value % 4) == 0) && ((($value % 100) != 0) || (($value % 400) == 0))) {
		$arr[$value] = 'leap year';
	} else {
		$arr[$value] = 'not leap year';
	}
}
for ($i=0; $i < count($arr); $i++) { 
	$test = $arr[array_keys($arr)[$i]];
	switch ($test) {
		case 'leap year':
			echo "True" . " ";
			break;
		default:
			echo "False" . " ";
	}
}
?>