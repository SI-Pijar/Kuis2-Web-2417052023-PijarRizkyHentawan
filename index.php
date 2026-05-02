<?php
$nama_toko = "Warung Digital Unila";

function hitungtotal($harga) {
     global $nama_toko;
     static $jumlah_transaksi = 0;
     $jumlah_transaksi++;

     echo "<h3> Selamat Datang di $nama_toko </h3>";
     echo "transaksi ke-$jumlah_transaksi:<br>";
     echo "Harga Barang: Rp. $harga<br";
     echo "<hr><hr>";
}

hitungtotal("15.000");
hitungtotal("25.000");
hitungtotal("50.000");
?>