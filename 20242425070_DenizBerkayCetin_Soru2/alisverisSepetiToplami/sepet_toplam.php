<?php

$urunAdi = htmlspecialchars($_POST['urun_adi'] ?? "");
$urunFiyat = (float)($_POST['urun_fiyat'] ?? "");
$adet = (int)($_POST['adet'] ?? "");
$kdvOran = (float)($_POST['kdv'] ?? "");
$indKod = htmlspecialchars($_POST['indirim_kodu'] ?? "");

$araToplam = $urunFiyat * $adet;
$kdvTutari = $araToplam * ($kdvOran / 100);

$indirimYuzdesi = 0;
if($indKod === "IND20"){
    $indirimYuzdesi = 20;
}elseif($indKod === "IND50"){
        $indirimYuzdesi = 50;
    }

$indirimTutari = $araToplam * ($indirimYuzdesi / 100);
$genelToplam = $araToplam + $kdvTutari - $indirimTutari;

echo $urunAdi . " için toplam tutar: " . $genelToplam . " TL <br>";
echo "Birim Fiyat: " . $urunFiyat . " TL <br>";
echo "Adet: " . $adet . "<br><br>";

echo "Ara Toplam: " . $araToplam . " TL <br>";
echo "KDV Tutarı: " . $kdvTutari . " TL <br>";

if($indirimYuzdesi > 0){
    echo "\"" . $indKod . "\" indirim kodu uygulanmıştır ve İndirim tutarı: " . $indirimTutari . " TL <br><br>";
}
echo "Genel Toplam: " . $genelToplam . " TL <br>";


?>