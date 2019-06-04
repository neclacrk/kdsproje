 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","kdsproje");
$sorgu=mysqli_query($baglanti,"select semtler.semt_adi, hizmet_guven_orani.guven_orani from semtler,hizmet_guven_orani,semt_hizmet_guven WHERE semtler.semt_id=semt_hizmet_guven.semt_id AND hizmet_guven_orani.guven_orani_id=semt_hizmet_guven.guven_orani_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>