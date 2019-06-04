 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","kdsproje");
$sorgu=mysqli_query($baglanti,"select semtler.semt_adi,nufus.iki_ve_alti_yas_cocuk_sayisi from semtler,nufus,semt_nufus WHERE semtler.semt_id=semt_nufus.semt_id AND nufus.nufus_id=semt_nufus.nufus_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>