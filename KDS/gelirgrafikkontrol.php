 <?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","kdsproje");
$sorgu=mysqli_query($baglanti,"select semtler.semt_adi,gelir.ortalama_aylik_gelir from semtler,gelir,semt_gelir WHERE semtler.semt_id=semt_gelir.semt_id AND gelir.gelir_id=semt_gelir.gelir_id");
$data=array();
foreach($sorgu as $row){
$data[]=$row;
}
mysqli_close($baglanti);
echo json_encode($data);
?>