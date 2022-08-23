<?php

$vysledek="";
$hlaska="";
$popisObtizi="";


if(array_key_exists("bmi",$_GET)){
  $vyska=$_GET["vyska"];
  $vaha=$_GET["vaha"];
  $vysledek= $vaha/($vyska*$vyska);
  if($vysledek<18.5){
    $hlaska="Podváha";
    $popisObtizi="Jedná se o velmi nízkou váhu ve vztahu k výšce. Hodnota nižší než 18,5 je důsledkem nedostatečné výživy. Energetické a výživové požadavky organismu nejsou ve správném poměru.
    Příčinou může být špatné energetické krytí pohybových aktivit během dne. Pozor také na onemocnění, která způsobují úbytek tělesné hmotnosti.";
  }else if($vysledek>=18.5 && $vysledek <24.9){
    $hlaska="Optimální váha";
    $popisObtizi="Pokud se pohybujete v tomto rozmezí, máte ve vztahu ke své výšce optimální hmotnost. Riziko vzniku závažných onemocnění spojených s nadváhou je nízké. Z hodnoty indexu ale nezjistíte, jaké je složení vašeho těla. Jinak řečeno, kolik máte tuku oproti aktivní svalové hmotě. Do BMI kalkulačky je proto lepší zadat i obvod pasu a boků.";
  }else if ($vysledek>=25 && $vysledek <29.9){
    $hlaska="Nadváha";
    $popisObtizi="BMI v hodnotách 25–29,9 vypovídá o nadváze. Ta bývá často označována jako preobézní stav. Je spojována s mírně zvýšeným rizikem vzniku přidružených onemocnění (diabetes mellitus, kardiovaskulární onemocnění, onemocnění žlučníku), případně s rozvojem obezity při nedodržování zásad životosprávy. Počet osob s nadváhou, potažmo obezitou celosvětově rapidně narůstá.";
  }else if ($vysledek>=30 && $vysledek <34.9){
    $hlaska="Obezita I. stupně";
    $popisObtizi="Za obézního se dá považovat člověk, kterému vyšla hodnota mezi 30,0 a 34,9 body. S onemocněním obezitou I. stupně se zvyšuje riziko některých zdravotních komplikací. Jedná se především o výskyt ischemické choroby srdeční, vysokého krevního tlaku, dny, nádorových onemocnění (prsu, dělohy, tlustého střeva a konečníku), artrózy nosných kloubů.";
  }else if ($vysledek>=35 && $vysledek <39.9){
    $hlaska="Obezita II. stupně";
    $popisObtizi="Druhý stupeň je diagnostikován při dosažení výsledku od 35,0 do 39,9 bodů. Riziko závažných onemocnění je zde vyšší než u předchozích kategorií. Jako u předchozí kategorie je nutné, aby se člověk pokusil snížit svou váhu a byl schopen si ji dlouhodobě udržet.";
  }else if($vysledek>=40) {
    $hlaska="Obezita III. stupně";
    $popisObtizi="Tímto stupněm označujeme obezitu s výslednou hodnotou nad 40,0 bodů. Známá je též jako morbidní obezita. Rizika jsou u této kategorie nejvyšší. Redukce váhy je velmi obtížná a většinou se přistupuje k chirurgickému řešení pomocí bariatrické léčby";
  }else{
    $hlaska="Vyplňte správně údaje!";
  }



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <title>BMI calculator</title>
</head>
<body>
  <h1 class="uvodni-nadpis">BMI kalkulačka</h1>
    <p>BMI se obecně dá považovat pouze za statistický nástroj, u konkrétního jedince je BMI příliš jednoduchým prostředkem, který ignoruje velké množství důležitých faktorů (např. stavbu těla, množství svalstva apod.). V klinické praxi se proto obvykle používají přesnější testy jako měření tloušťky podkožního tuku, impedanční měření atd.</p>
  <form method="get">
    
  <label for="vyska">Výška v metrech:</label><br>
    <input type="text" name="vyska"> <br>

    
    <label for="vaha">Váha v kilogramech:</label><br>
    <input type="text" name="vaha" id="vaha"><br> 


    <button name ="bmi">Vypočítat BMI</button>
  </form>
  <?php
  if(array_key_exists("bmi",$_GET)){
   echo "<h2>Vaše BMI je: $vysledek</h2><br>"; 
   echo "<h3>$hlaska</h3><br>";
   echo "<p>$popisObtizi</p><br>";
 
  }
  ?>
</body>
</html>