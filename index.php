<!-- <?php

    echo "Hello world"
?>

<h1><?= "Hello world 2" ?></h1> -->
<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Başlık 1</h1>

    <?php echo "<h1>Hello worlds</h1>"?>

</body>

</html> -->

<?php 

// $isim = "Burak Baloğlu";
// echo $isim;

// $a = 5;
// $b = 4;
// echo "<br>";
// echo $a;
// echo "<br>";
// echo $b;
// echo "<br>";

// define("isim2", "Burak");


// echo isim2;



// $a = 3.3;
// echo gettype($a);

// $b = true;
// echo gettype($b);


// $sayi1 = 10;
// $sayi2 = 20;
// $sayi3 = $sayi1 + $sayi2;

// echo $sayi3


// $a = true;

// var_dump($a);

// $a = 2;
// $b = "2";

// var_dump(value: $a == $b);
// var_dump(value: $a === $b);

// $c = 4;

// var_dump(value: $c > $a);

// $a = 3;

// echo $a++;
// echo "<br>";
// echo $a;

// echo ++$a;
// echo "<br>";
// echo $a;


// $a = "Hello";
// $b = "World";

// echo $a.$b;

// $modul = "<div>";
// $modul .= "<p>Lorem ipsum dolor</p>";
// $modul .= "</div>";

// echo $modul;



// $a = 1;
// $b = 2;

// $sonuc = ($a == 1) && ($b == 2) && ($a == $b);

// var_dump($sonuc);


// $kosul = true;

// $a = 5;
// $b = 10;

// if ($a == 1) {
//     echo "Koşul 1 sağlandı";
// }elseif ($a == 2) {
//     echo "Koşul 2 sağlandı";
// }elseif ($a == 5) {
//     echo "Koşul 5 sağlandı";
// }else {
//     echo "Koşullar sağlanmadı";
// }
// echo "<br>";
// echo $a == 8 ? "Eşit" : "Eşit değil";
// echo "<br>";

// if ($a = 5) :
//     echo "a = 5";
// endif;


// $a = 2;

// if ($a == 1) echo "1.koşul";
// else if($a == 2) echo "2.koşul";
// else echo "else çalıştı";


// switch ($a) {
//     case 1:
//         echo "durum 1";
//         break;
//     case 2:
//         echo "durum 2";
//         break;

//     default:
//         echo "durumlar sağlanmadı";
//         break;
// }


// $isimler = array();
// $isimler2 = [];
// $isimler = array("Şahin", "Fatma", "Ahmet");

// $kisi = [
//     "isim" => "Şahin",
//     "yas" => 28
// ];

// var_dump($kisi);

// $hayvanlar = [
//     "Uçan hayvanlar" => ["Kartal", "Güvercin"],
//     "Sürüngen hayvanlar"
// ];

// print_r($hayvanlar);
// echo "<br>";
// echo $hayvanlar["Uçan hayvanlar"][1];

// $hayvanlar = [
//     "a" => [
//         "b" => [
//             "c" => [
//                 1,2,3,4,5
//             ]
//         ]
//     ]
// ]

// print_r($hayvanlar);


// for ($i=0; $i < 10; $i++) { 
//     echo $i."<br>";
// }


// $dizi = [
//     "Ahmet",
//     "Mehmet",
//     "Şahin",
//     "Ali",
//     "Veli"
// ];

// for ($i=0; $i < 4; $i++) { 
//     echo $dizi[$i]."<br>";
// }

// $isimler = ["Ahmet", "Fatma", "Şahin"];


// foreach ($isimler as $isim) {
//     echo $isim."<br>";
// }


// $i = 0;

// while ($i <= 10) {
//     echo $i."<br>";
//     $i++;
// }


// $a = 1;

// do {
//     echo $a."<br>";
//     $a++;
// } while ($a <= 10);


// function topla(){
//     return 2+3;
// }

// echo topla();
// echo "<br>";

// function carp($sayi1, $sayi2){
//     return $sayi1 * $sayi2;
// }

// echo carp(1,2);




// $dizi = [
//     2,3,4,5,6
// ];

// $dizi2 = array_map(function($e){
//     return 2 * $e;
// }, $dizi);
// print_r($dizi2);

// $islem = [
//     "topla" => function($a, $b){ return $a + $b; },
//     "cikar" => function($a, $b){ return $a - $b; },
//     "carp" => function($a, $b){ return $a * $b; },
//     "bol" => function($a, $b){ return $a / $b; },
// ];
// echo "<br>";

// echo $islem["topla"](2,4)."<br>";
// echo $islem["cikar"](2,4)."<br>";
// echo $islem["carp"](2,4)."<br>";
// echo $islem["bol"](2,4)."<br>";

// function sayi($i){
//     echo $i;

//     if ($i < 5) {
//         $i++;
//         sayi($i);
//     }

// }


// sayi(i: 1);

// echo "<br>";

// $categories = [
//     [
//         "id" => 1,
//         "parent" => 0,
//         "name" => "Front End"
//     ],[
//         "id" => 2,
//         "parent" => 0,
//         "name" => "Back End"
//     ],[
//         "id" => 3,
//         "parent" => 2,
//         "name" => "PHP"
//     ],[
//         "id" => 4,
//         "parent" => 1,
//         "name" => "VueJS"
//     ],[
//         "id" => 5,
//         "parent" => 2,
//         "name" => "NodeJS"
//     ],[
//         "id" => 6,
//         "parent" => 5,
//         "name" => "ExpressJS"
//     ],[
//         "id" => 7,
//         "parent" => 3,
//         "name" => "Laravel"
//     ]
// ];

// function getCategories($arr, $par = 0){
//     $html = "<ul>";

//     foreach ($arr as $value) {
//         if ($value["parent"] == $par) {
//             $html .= "<li>";
//             $html .= $value["name"];
//             $html .= getCategories($arr, $value["id"]);
//             $html .= "</li>";
//         }
//     }
//     $html .= "<ul>";

//     return $html;
// }



// echo getCategories($categories);

// function say(){

//     static $sayi = 0;
//     echo $sayi;
//     $sayi++;
// }

// say();
// say();
// say();

// error_reporting(error_level: E_ALL);


// $isim = "Şahin";
// $db = "";

// function isimyaz(){
//     global $isim;
//     echo $isim;
// }


// isimyaz();


// $arr = [1,2,3,4,5,6,7,8,9];


// $dizge = implode(separator: " - ", $arr);

// print_r($dizge);

// $newArr = explode(separator: " | ", $dizge);

// print_r($newArr);

// for ($i=0; $i < count($arr) - 1; $i++) { 
//     echo $arr[$i];
// }


// echo is_array($arr);



// echo "<pre>";

// // $sayilar = range(start: 1, end: 20);

// // shuffle(array: $sayilar);

// // print_r($sayilar);

// $meyve = ["elma", "armut", "muz"];
// $harfler = ["a", "b", "c"];

// // $dizi = array_combine($meyve, $harfler), 
// $dizi = array_flip($harfler);

// print_r($dizi)

// echo "<pre>";

// $sayilar = range(start: 1, end: 10);

// $dizi = array_map(function($e){
//     return $e + 2;
// }, $sayilar);
// print_r($dizi);

// function cube($sayi){
//     return $sayi * $sayi * $sayi;
// }

// $dizi = array_map( "cube", $sayilar);
// print_r($dizi);

// $cift = array_filter($sayilar, function($e){
//     return $e % 2 == 0 ? $e : false;
// });

// print_r($cift);

// $sayilar = range(start:1, end: 10);
// $sayilar2 = range(start:11, end: 20);

// $dizi1 = array_merge($sayilar, $sayilar2);

// print_r($dizi1);


// $dizi = ["Elma", "Armut", "Muz", "Kivi"];

// // print_r(array_rand($dizi, num: 2));
// $arr = array_search( "Muz", $dizi);
// print_r($arr);



// $array = ["Şahin", "Mehmet", "Burak"];
// array_shift($array);
// array_pop($array);



// $newArray = array_slice($array, 2, 3);

// if (in_array("Fatma", $array)) echo "Değer mevcut";
// else { echo "Değer mevcut değil"; }

// $sayilar = range(1, 5);
// print_r(array_sum($sayilar));

// array_push($array, "Okan");
// print_r(array_keys($array));

// print_r($array);




// $dizi = ["bir" => "araba", "iki" => "bisiklet", "uc" => "motor"];

// echo current($dizi);
// echo next($dizi);
// echo prev($dizi);

// extract($dizi);

// echo $bir;

// $dizi = [
//     2 => 1,
//     5 => 2,
//     8 => 0,
//     1 => 20
// ];

// arsort($dizi);
// krsort($dizi);
// print_r($dizi);


// $metin = "Şahin";
// echo mb_strlen($metin);

// $metin = "Şahin Turgut Ersever";
// $array = (explode(separator: " ", $metin));

// echo implode(seperator: "#", $array);

// $metin = "  Şahin Turgut Ersever  ";
// // $array = str_split($metin, 2);
// // $array = mb_str_split($metin, 2);
// // print_r($array);

// echo strlen($metin);

// $metin = "  Şahin Turgut  ";
// $metin = ltrim($metin);
// $metin = rtrim($metin);

// $metin = "Şahin Turgut \n";
// $metin = substr($metin, 5, 5);
// $metin = strtolower($metin);
// $metin = strtoupper($metin);
// $metin = mb_strtoupper($metin, "UTF-8");
// $metin = mb_strtolower($metin, "UTF-8");

// $metin = ucfirst($metin);
// $metin = ucfirst($metin);
// $metin = str_replace("turgut", "ahmet", $metin);
// echo ml2br($metin);
// echo md5($metin);

// $db_sifre = "ewdfgrdfhfjkgewq234556457";

// if (md5(metin) == $db_sifre) {
//     echo "Şifre doğru";
// }else echo "Şifre hatalı";

// $metin = "213455";

// echo sha1($metin);
// $metin = "lorem ipsum dolor";
// echo strstr($metin, "ipsum");



// echo $metin;

?>