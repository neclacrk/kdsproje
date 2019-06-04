 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","kdsproje");
$sorgu=mysqli_query($baglanti,"select semtler.semt_adi,kulturel_faaliyet.kulturel_faaliyetlere_katilim_orani from semtler,kulturel_faaliyet,semt_kultur WHERE semtler.semt_id=semt_kultur.semt_id AND kulturel_faaliyet.kultur_id=semt_kultur.kultur_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>