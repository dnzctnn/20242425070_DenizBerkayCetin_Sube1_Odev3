<?php

if (($_POST['kullaniciAdi'] ?? "") === "" || ($_POST['sifre'] ?? "") === ""){
    echo "Lütfen tüm alanları doldurunuz!";
}
elseif (htmlspecialchars($_POST['kullaniciAdi'] ?? "" ) === "admin" && htmlspecialchars ($_POST['sifre'] ?? "") === "1234"){
    echo "Giriş başarılı, hoş geldiniz admin.";
}
else{
    echo "Kullanıcı adı veya şifre hatalı!";
}

?>