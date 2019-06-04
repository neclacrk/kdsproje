 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","kdsproje");
$sorgu=mysqli_query($baglanti,"select semtler.semt_adi,egitim_duzeyi.ilkokul from semtler,egitim_duzeyi,semt_egitim_duzeyi WHERE semtler.semt_id=semt_egitim_duzeyi.semt_id AND egitim_duzeyi.egitim_duzeyi_id=semt_egitim_duzeyi.egitim_duzeyi_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>