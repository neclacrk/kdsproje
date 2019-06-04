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
			<img src="DogaKolejiYeni.png" class="image" width="90px" height="90px" ></img><h2 class="baslik"> UYGUN KREŞ YERİ SEÇİMİ KARAR DESTEK SİSTEMİ</h2>
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
	$data2 = '';
	$data3 = '';
	$data4 = '';
	$data5 = '';

	//query to get data from the table
	$sql = "SELECT egitim_duzeyi.ilkokul,egitim_duzeyi.ortaokul,egitim_duzeyi.lise, egitim_duzeyi.universite, egitim_duzeyi.doktora FROM `egitim_duzeyi` ";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data1 = $data1 . '"'. $row['ilkokul'].'",';
		$data2 = $data2 . '"'. $row['ortaokul'] .'",';
		$data3 = $data3 . '"'. $row['lise'] .'",';
		$data4 = $data4 . '"'. $row['universite'] .'",';
		$data5 = $data5 . '"'. $row['doktora'] .'",';
	}

	$data1 = trim($data1,",");
	$data2 = trim($data2,",");
	$data3 = trim($data3,",");
	$data4 = trim($data4,",");
	$data5 = trim($data5,",");
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
	     <h3><font color="006400">EĞİTİM DURUMU GRAFİĞİ</font></h3>        
			<canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>

			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'line',
		        data: {
		            labels: ['Adatepe','Bucakoop','Şirinyer','Kaynaklar','Yıldız','Evka1','Çamlıkule','Çamlık','İzkent','İnkilap','Kuruçeşme'],
		            datasets: 
		            [{
		                label: 'İlkokul',
		                data: [<?php echo $data1; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(255,99,132)',
		                borderWidth: 3
		            },

		            {
		            	label: 'Ortaokul',
		                data: [<?php echo $data2; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,255,255)',
		                borderWidth: 3	

		            },
					
					{
		            	label: 'Lise',
		                data: [<?php echo $data3; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(94,236,17)',
		                borderWidth: 3	

		            },
					
					{
		            	label: 'Üniversite',
		                data: [<?php echo $data4; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(139 101 139)',
		                borderWidth: 3	

		            },
					
					{
		            	label: 'Doktora',
		                data: [<?php echo $data5; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(255 228 19)',
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
		
				
		<div id="tablo"><p class="tabloyazisiegitim"><font color="006400"><b>Eğitim Durumu Tablosu</b></font></p>
		
		<?php
$con = mysqli_connect('localhost','root','') or die ("Bağlantı başarısız");
mysqli_select_db($con,'kdsproje') or die ("veritabanı hatası");
mysqli_query($con,"SET NAMES UTF8");
$bilgi=mysqli_query($con,"select semtler.semt_adi,egitim_duzeyi.ilkokul, egitim_duzeyi.ortaokul, egitim_duzeyi.lise, egitim_duzeyi.universite, egitim_duzeyi.doktora from semtler,egitim_duzeyi,semt_egitim_duzeyi WHERE semtler.semt_id=semt_egitim_duzeyi.semt_id AND egitim_duzeyi.egitim_duzeyi_id=semt_egitim_duzeyi.egitim_duzeyi_id");
echo '<table class="tablo" border="1" cellpadding="10" cellspacing="3">
	<tr>
		<td width="300" bgcolor="#7ccd7c"><b><font color="black">SEMT ADI</font></b></td>
		<td width="300" bgcolor="#7ccd7c"><b><font color="black">İLKOKUL</font></b></td>
		<td width="300" bgcolor="#7ccd7c"><b><font color="black">ORTAOKUL</font></b></td>
		<td width="300" bgcolor="#7ccd7c"><b><font color="black">LİSE</font></b></td>
		<td width="300" bgcolor="#7ccd7c"><b><font color="black">ÜNİVERSİTE</font></b></td>
		<td width="300" bgcolor="#7ccd7c"><b><font color="black">DOKTORA</font></b></td>
	</tr>';
while ($cek=mysqli_fetch_array($bilgi))	
{echo '	<tr>
		<td>'.$cek["semt_adi"].'</td>
		<td>'.$cek["ilkokul"].'</td>
		<td>'.$cek["ortaokul"].'</td>
		<td>'.$cek["lise"].'</td>
		<td>'.$cek["universite"].'</td>
		<td>'.$cek["doktora"].'</td>
		
	</tr>';}
echo '</table>';


?>
	
		</div>
		
		
	
	</div>
		
	
	
</div>

</body>
</html>

