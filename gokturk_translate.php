<?php
//Writer : ALİ CAN GONULLU
// 2020.07.10
$get = strtoupper($_POST["text"]);
$proca = str_replace("A", "𐰁", $get);
$procb = str_replace("B", "𐰉", $proca);
$procc = str_replace("C", "𐰲", $procb);
$procc2 = str_replace("Ç", "𐰲", $procc);
$procd = str_replace("D", "𐰑", $procc2);
$proce = str_replace("E", "𐰀", $procd);
$procf = str_replace("F", "𐰯", $proce);
$procg = str_replace("G", "𐰏", $procf);
$procg2 = str_replace("Ğ", "𐰏", $procg);
$proch = str_replace("H", "𐰴", $procg2);
$proci2 = str_replace("I", "𐰃", $proch);
$proci = str_replace("İ", "𐰃", $proci2);
$procj = str_replace("J", "𐰘", $proci);
$prock = str_replace("K", "𐰴", $procj);
$procl = str_replace("L", "𐰠", $prock);
$procm = str_replace("M", "𐰢", $procl);
$procn = str_replace("N", "𐰤", $procm);
$proco = str_replace("O", "𐰆", $procn);
$proco2 = str_replace("Ö", "𐰇", $proco);
$procp = str_replace("P", "𐰯", $proco2);
$procr = str_replace("R", "𐰼", $procp);
$procs = str_replace("S", "𐰾", $procr);
$procs2 = str_replace("Ş", "𐱁", $procs);
$proct = str_replace("T", "𐱅", $procs2);
$procu = str_replace("U", "𐰆", $proct);
$procu2 = str_replace("Ü", "𐰇", $procu);
$procv = str_replace("V", "𐰋", $procu2);
$procy = str_replace("Y", "𐰘", $procv);
$procz = str_replace("Z", "𐰔", $procy);
$procbosluk = str_replace(" ", ":", $procz);
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">'.$procbosluk.'';
?>