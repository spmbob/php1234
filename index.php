<!--Задание №1 -->
<!--<?php
$text = "!!! SAMPLE TEXT !!!";
var_dump($text);
$trimmed = ltrim($text, " !!! ");
$trimmed = rtrim($trimmed, " !!! ");
var_dump($trimmed);
?>-->

<!--Задание №2 -->
<!--<?php
$s="Text";
$s=strrev($s);
print $s;
?> -->

<!--Задание №3 -->
<!--<?php
$s="on nashel pticu tu";
$word=explode(' ',$s);
$word=array_reverse($word);
$s=implode(' ',$word);
print $s;
?>-->

<!--Задание №4 -->
<?php
$host="localhost";
$user="root";
$password=""; 
$dbname="aaa";
try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->exec("set names utf8");
}

    catch(PDOException $e) {
    echo $e->getMessage();
   
}

$stmt = $db->query('SELECT * FROM `sss` ORDER BY `zp`;');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch())
{
    echo "<p>" . "id: " . $row['id'] . "&nbsp;" . "ZP: " . $row['zp'] . "</p>";
}
?>