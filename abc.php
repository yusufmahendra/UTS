<?php 
require("var.php");
echo $var;
$var ="2,";
echo $var;
$var ="3,";
require_once("var.php");
echo $var;
?>
<br><br>
<?php 
$i=0;
for ($i=0;$i<=10;$i++)
{
    if ($i==4)
    {continue;
    }
    echo "$i";
}
?>
<br><br>
<?php
$x =1;
do {
    echo $x."";
    $x++;
} while ($x >2);
?>
<br><br>
<?php 
$jalan =13;
$i =1;
while ($i < $jalan){
    echo "$i";
    $i +=2;
}
?>
<br><br>
<?php 
$nama = array("Satria", "Rizky", "Azaresha", "Muna", "Noviem", "Roni", "Meta");
$jml = count($nama);
for ($i =1; $i <= $jml -1; $i++){
    echo $nama[$i]. "<br>\n";
}
?>