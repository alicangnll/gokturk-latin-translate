<?php
$get = strtoupper($_POST["text"]);
if(empty($get)) {
die('  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-rtl.min.css">
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
<style>
container {width: 100%;}

@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}

@media (min-width: 1452px) {
    .container {
        max-width: 1360px;
    }
}
</style>

<script>
function kopyalaButon() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/
  document.execCommand("copy");
  alert("Copied the text!");
}
</script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="text-center container mt-5">
<textarea id="myInput" data-role="textarea">Boş karakter girdiniz!</textarea>
<br>
<button class="button primary" onclick="kopyalaButon()">Copy text</button>
</div>');
} else {
$yeniproc1 = str_replace("ü", "U", $get);
$yeniproc2 = str_replace("Ğ", "G", $yeniproc1);
$yeniproc3 = str_replace("ş", "Ş", $yeniproc2);
$yeniproc4 = str_replace("ı", "I", $yeniproc3);
$yeniproc5 = str_replace("ö", "Ö", $yeniproc4);
$yeniproc6 = str_replace("ğ", "G", $yeniproc5);
$yeniproc7 = str_replace("ç", "Ç", $yeniproc6);
$proca = str_replace("A", "𐰁", $yeniproc7);
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
echo '  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-rtl.min.css">
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">
<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
<style>
container {width: 100%;}

@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}

@media (min-width: 1452px) {
    .container {
        max-width: 1360px;
    }
}
</style>

<script>
function kopyalaButon() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/
  document.execCommand("copy");
  alert("Copied the text!");
}
</script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="text-center container mt-5">
<textarea id="myInput" data-role="textarea">'.strip_tags($procbosluk).'</textarea>
<br>
<button class="button primary" onclick="kopyalaButon()">Copy text</button>
</div>';
}
?>
