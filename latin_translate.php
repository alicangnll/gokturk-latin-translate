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
<textarea id="myInput" data-role="textarea">Bo艧 karakter girdiniz!</textarea>
<br>
<button class="button primary" onclick="kopyalaButon()">Copy text</button>
</div>');
} else {
$proca = str_replace("饜皝", "A", $get);
$procb = str_replace("饜皦", "B", $proca);
$procc = str_replace("饜安", "C", $procb);
$procc2 = str_replace("饜安", "脟", $procc);
$procd = str_replace("饜皯", "D", $procc2);
$proce = str_replace("饜皜", "E", $procd);
$procf = str_replace("饜隘", "F", $proce);
$procg = str_replace("饜皬", "G", $procf);
$procg2 = str_replace("饜皬", "臑", $procg);
$proch = str_replace("饜按", "H", $procg2);
$proci2 = str_replace("饜皟", "I", $proch);
$proci = str_replace("饜皟", "陌", $proci2);
$procj = str_replace("饜皹", "J", $proci);
$prock = str_replace("饜按", "K", $procj);
$procl = str_replace("饜盃", "L", $prock);
$procm = str_replace("饜阿", "M", $procl);
$procn = str_replace("饜挨", "N", $procm);
$proco = str_replace("饜皢", "O", $procn);
$proco2 = str_replace("饜皣", "脰", $proco);
$procp = str_replace("饜隘", "P", $proco2);
$procr = str_replace("饜凹", "R", $procp);
$procs = str_replace("饜熬", "S", $procr);
$procs2 = str_replace("饜眮", "艦", $procs);
$proct = str_replace("饜眳", "T", $procs2);
$procu = str_replace("饜皢", "U", $proct);
$procu2 = str_replace("饜皣", "脺", $procu);
$procv = str_replace("饜皨", "V", $procu2);
$procy = str_replace("饜皹", "Y", $procv);
$procz = str_replace("饜皵", "Z", $procy);
$procbosluk = str_replace(":", " ", $procz);
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
