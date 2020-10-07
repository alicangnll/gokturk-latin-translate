<?php
//Writer : ALİ CAN GONULLU
// 2020.07.10
$get = strtoupper($_POST["text"]);
$proca = str_replace("𐰁", "A", $get);
$procb = str_replace("𐰉", "B", $proca);
$procc = str_replace("𐰲", "C", $procb);
$procc2 = str_replace("𐰲", "Ç", $procc);
$procd = str_replace("𐰑", "D", $procc2);
$proce = str_replace("𐰀", "E", $procd);
$procf = str_replace("𐰯", "F", $proce);
$procg = str_replace("𐰏", "G", $procf);
$procg2 = str_replace("𐰏", "Ğ", $procg);
$proch = str_replace("𐰴", "H", $procg2);
$proci2 = str_replace("𐰃", "I", $proch);
$proci = str_replace("𐰃", "İ", $proci2);
$procj = str_replace("𐰘", "J", $proci);
$prock = str_replace("𐰴", "K", $procj);
$procl = str_replace("𐰠", "L", $prock);
$procm = str_replace("𐰢", "M", $procl);
$procn = str_replace("𐰤", "N", $procm);
$proco = str_replace("𐰆", "O", $procn);
$proco2 = str_replace("𐰇", "Ö", $proco);
$procp = str_replace("𐰯", "P", $proco2);
$procr = str_replace("𐰼", "R", $procp);
$procs = str_replace("𐰾", "S", $procr);
$procs2 = str_replace("𐱁", "Ş", $procs);
$proct = str_replace("𐱅", "T", $procs2);
$procu = str_replace("𐰆", "U", $proct);
$procu2 = str_replace("𐰇", "Ü", $procu);
$procv = str_replace("𐰋", "V", $procu2);
$procy = str_replace("𐰘", "Y", $procv);
$procz = str_replace("𐰔", "Z", $procy);
$procbosluk = str_replace(" ", ":", $procz);
echo $procbosluk;
?>