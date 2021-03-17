<?php
/**
 * @Package Rainbow Text by Afid Arifin
 * @Version v1.0
 * @Created 17/03/2021
 * @Web     https://afidarifin.com
 */
require_once 'src/class.rainbow.php';
$rainbow = new Rainbow(true);

// Untuk generate teks pelangi
$text = 'Selamat datang di Upil Banteng';
echo $rainbow->generate($text);

// Untuk mendownload.
// Silahkan klik kanan pada link lalu save hasil kode html di dalam file .txt
echo $rainbow->getLink();
?>