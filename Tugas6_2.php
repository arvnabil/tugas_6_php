<?php
$satuanJambu = 15000;
$satuanKardus = 2000;
$sisaDus = 2*$satuanKardus;
$hasilpenjualan = ($satuanJambu*(5*6))+$sisaDus; 


echo "<p>=======================================================<br>
		 Harga Jambu = Rp $satuanJambu/Kg <br>
		 Harga Kardus = Rp $satuanKardus/pcs <br>
		 Total Penjualan (Dus dan Jambu) = Rp $hasilpenjualan <br>
		 =======================================================
</p>";
?>