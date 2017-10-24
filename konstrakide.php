<?php

require_once 'konstrak.php';

$identitas = new identitas('Nicko','Surakarta','Jl.Merdeka','28 tahun');
echo "Nama = ".$identitas->get_nama();
echo "<br />";
echo "Tempat Lahir = ".$identitas->get_tempatlahir();
echo "<br />";
echo "Alamat = ".$identitas->get_alamat();
echo "<br />";
echo "Umur = ".$identitas->get_umur();
echo "<br />";
?>