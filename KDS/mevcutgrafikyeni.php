<!DOCTYPE html>
<head>
	<title>En Uygun Kreş/Anaokulu Yer Seçimi</title>
	<meta charset="utf-8">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>	
	
	
	
	
	
	
	<link href="deneme2.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
	
	<div id="elin">
		
		<div id="ustkisim">
			<h2><font color="006400"> DOĞA KOLEJİ</font></h2>
		</div>
		
		<div class="foto">
			
			<center><img src="yenilogo.png" class="yonetici" width="75px" height="90px"></img></center><center><h4><b>YÖNETİCİ</b></h4></center>
			
		</div>
		
		<div style="width:100%;height:35px">
		</div>
		
		
		<div id="menu">
			<ul>	
				<li><b>KATEGORİLER</b></li>
				<li><a href="nufusgrafik.php" title="Toplam Nüfus"><b>✓</b>&nbsp;&nbsp;&nbsp;Toplam Nüfus</a></li>
				<li><a href="gelirgrafik.php" title="Gelir Düzeyi"><b>✓</b>&nbsp;&nbsp;&nbsp;Gelir Düzeyi</a></li>
				<li><a href="egitimyenigrafik.php" title="Eğitim Durumu"><b>✓</b>&nbsp;&nbsp;&nbsp;Eğitim Durumu</a></li>
				<li><a href="mevcutgrafikyeni.php" title="Mevcut Kreşler"><b>✓</b>&nbsp;&nbsp;&nbsp;Mevcut Kreşler</a></li>
				<li><a href="kulturgrafik.php" title="Kültürel Faaliyetlere Katılım Oranı"><b>✓</b>&nbsp;&nbsp;&nbsp;Kültürel Faaliyetlere Katılım Oranı</a></li><br><br>
				<li><a href="2ve6cocuksayisigrafik.php" title="2 İle 6 Yaş Arası Çocuk Sayısı Grafiği"><b>✓</b>&nbsp;&nbsp;&nbsp;2 İle 6 Yaş Arası Çocuk Sayısı Grafiği</a></li><br><br>
				<li><a href="yenievligrafik.php" title="Yeni Evli Çift Sayısı Grafiği"><b>✓</b>&nbsp;&nbsp;&nbsp;Yeni Evli Çift Sayısı Grafiği</a></li><br>
				<li><a href="calisanannegrafik.php" title="Çalışan Anne Sayısı Grafiği"><b>✓</b>&nbsp;&nbsp;&nbsp;Çalışan Anne Sayısı Grafiği</a></li><br>
				<li><a href="hizmetguvengrafik.php" title="Hizmet Kurumlarına Güven Oranı"><b>✓</b>&nbsp;&nbsp;&nbsp;Hizmet Kurumlarına Güven Oranı</a></li><br><br>
				<li><a href="mevcutgidengrafik.php" title="Mevcut Kreşlere Giden Çocuk Sayısı"><b>✓</b>&nbsp;&nbsp;&nbsp;Mevcut Kreşlere Giden Çocuk Sayısı</a></li><br><br>
			</ul>
		</div>
	
		
	</div>
	
	
	
	<div id="ilk">
	
		<div class="kds">
			<img src="DogaKolejiYeni.png" class="image" width="90px" height="90px" ></img><h2>EN UYGUN KREŞ YERİ SEÇİMİ KARAR DESTEK SİSTEMİ</h2>
		</div><hr class="cizgi">
		
		<div class="seze">
			<img src="2119245845.png" >
			<img src="settings-481826_960_720.png">
			<img src="img_331336.png">
			<img src="search-128.png">
		</div>
		
		
		
		
		<div id="farkligrafik">
		<br><br><br></br><br></br>
		
		<?php
	/* Database connection settings */
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'kdsproje';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$data1 = '';
	


	//query to get data from the table
	$sql = "SELECT mevcut_sayi.mevcut_kres_ve_anaokulu_sayisi FROM mevcut_sayi ";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data1 = $data1 . '"'. $row['mevcut_kres_ve_anaokulu_sayisi'].'",';
		
	}

	$data1 = trim($data1,",");
	
?>

<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
		<title>Accelerometer data</title>

		<style type="text/css">			
			body{
				font-family: Arial;
			  
			    padding: 0;
			    color: black;
			    text-align: center;
			    background: #white;
		
			}

			.container {
				color: white;
				background: #white;
				
				padding: 0px;
			}
		</style>

	</head>

	<body>	   
	    <div class="container">	
	    <h3><font color="006400">MEVCUT KREŞ SAYISI GRAFİĞİ</font></h3>       
			<canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>

			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'line',
		        data: {
		            labels: ['Adatepe','Bucakoop','Şirinyer','Kaynaklar','Yıldız','Evka1','Çamlıkule','Çamlık','İzkent','İnkilap','Kuruçeşme'],
		            datasets: 
		            [{
		                label: 'Mevcut Kreş Sayısı',
		                data: [<?php echo $data1; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            }]

		            
					
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
	    </div>
		</div>
	    
	</body>
</html>
		
				
		<div id="tablo"><p class="tabloyazisimevcut"><font color="006400"><b>Mevcut Kreş Sayısı Tablosu</b></font></p>
		
		<?php
$con = mysqli_connect('localhost','root','') or die ("Bağlantı başarısız");
mysqli_select_db($con,'kdsproje') or die ("veritabanı hatası");
mysqli_query($con,"SET NAMES UTF8");
$bilgi=mysqli_query($con,"select semtler.semt_adi,mevcut_sayi.mevcut_kres_ve_anaokulu_sayisi from semtler,mevcut_sayi,semt_mevcut WHERE semtler.semt_id=semt_mevcut.semt_id AND mevcut_sayi.mevcut_sayi_id=semt_mevcut.mevcut_sayi_id");
echo '<table class="tablo" border="1" cellpadding="10" cellspacing="3">
	<tr>
		<td width="300" bgcolor="#ff6384"><b>SEMT ADI</b></td>
		<td width="300" bgcolor="#ff6384"><b>MEVCUT KREŞ SAYISI</b></td>

	</tr>';
while ($cek=mysqli_fetch_array($bilgi))	
{echo '	<tr>
		<td>'.$cek["semt_adi"].'</td>
		<td>'.$cek["mevcut_kres_ve_anaokulu_sayisi"].'</td>

		
	</tr>';}
echo '</table>';


?>
	
		</div>
		
		
	
	</div>
		
	
	
</div>

</body>
</html>



