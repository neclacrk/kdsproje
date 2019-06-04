 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","kdsproje");
$sorgu=mysqli_query($baglanti,"select semtler.semt_adi, yeni_evli_cift.yeni_evli_cift_sayisi from semtler,yeni_evli_cift,semt_yeni_evli WHERE semtler.semt_id=semt_yeni_evli.semt_id AND yeni_evli_cift.yeni_evli_cift_id=semt_yeni_evli.yeni_evli_cift_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>