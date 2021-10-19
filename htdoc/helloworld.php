<title>bruh</title>
<?php
echo "hello world<br>";

$sc = array();
$student=array(
    "s1" =>array(1=>"70","80","90"),
    "s2" =>array(1=>"88","85","75"),
    "s3" =>array(1=>"75","62","99"),
    "s4" =>array(1=>"50","80","65"),
    "s5" =>array(1=>"90","91","95"),
    "s6" =>array(1=>"85","82","79"),
    "s7" =>array(1=>"61","66","71"),
    "s8" =>array(1=>"75","73","79")
);
foreach ($student as $stuff) {
    $xx=0;
    foreach ($stuff as $bruh) {
        $xx += $bruh;
    }
    $sc[] = $xx;

}
sort($sc);
echo"<br>$sc[0]";
rsort($sc);
echo"<br>$sc[0]";
