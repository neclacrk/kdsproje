 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","kdsproje");
$sorgu=mysqli_query($baglanti,"select semtler.semt_adi, calisan_sayi.calisan_anne_sayisi from semtler,calisan_sayi,semt_calisan_sayisi WHERE semtler.semt_id=semt_calisan_sayisi.semt_id AND calisan_sayi.calisan_sayi_id=semt_calisan_sayisi.calisan_sayi_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>