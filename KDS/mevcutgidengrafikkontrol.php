 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","kdsproje");
$sorgu=mysqli_query($baglanti,"select semtler.semt_adi,mevcut_krese_giden.mevcut_kreslere_giden_cocuk_sayisi,nufus.iki_ve_alti_yas_cocuk_sayisi from semtler,mevcut_krese_giden,semt_mevcut,nufus,semt_nufus WHERE semtler.semt_id=semt_mevcut.semt_id AND mevcut_krese_giden.mevcut_giden_id=semt_mevcut.mevcut_giden_id AND nufus.nufus_id=semt_nufus.nufus_id AND semtler.semt_id=semt_nufus.semt_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>