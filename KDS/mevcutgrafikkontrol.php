 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","kdsproje");
$sorgu=mysqli_query($baglanti,"select semtler.semt_adi,mevcut_sayi.mevcut_kres_ve_anaokulu_sayisi from semtler,mevcut_sayi,semt_mevcut WHERE semtler.semt_id=semt_mevcut.semt_id AND mevcut_sayi.mevcut_sayi_id=semt_mevcut.mevcut_sayi_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>