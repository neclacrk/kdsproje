<!DOCTYPE html>
<head>
	<title>En Uygun Kreş/Anaokulu Yer Seçimi</title>
	<meta charset="utf-8">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
	
	
	<script>
	$(document).ready(function(){
		showGraph();
	});
	function showGraph(){
		$.post("yenievligrafikkontrol.php",
		function(data){
			console.log(data);
			var semt_adi=[];
			var yeni_evli_cift_sayisi=[];
			for (var i in data){
				semt_adi.push(data[i].semt_adi);
				yeni_evli_cift_sayisi.push(data[i].yeni_evli_cift_sayisi);
			};
			var chartdata={
				labels:semt_adi,
				datasets:[
				{
				label:'Yeni Evli Çift Sayısı',
				data:yeni_evli_cift_sayisi,
				backgroundColor: "rgb(188 143 143)",
				borderColor: "rgba(75,192,192,1)"
				}]
			};
		var cnv=$("#myChart");
		var barGraph=new Chart(cnv,{
			type:'bar',
			data:chartdata
		});
		});
	};
	</script>
		<style>
			div{
			width:600px;
			height:600px;
			}
		</style>
	
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
			<canvas id="myChart"></canvas>
		</div>
		
		
		<div id="tablo"><p class="tabloyazisiyenievli"><b>Yeni Evli Çift Sayısı Tablosu</b></p>
		
		<?php
$con = mysqli_connect('localhost','root','') or die ("Bağlantı başarısız");
mysqli_select_db($con,'kdsproje') or die ("veritabanı hatası");
mysqli_query($con,"SET NAMES UTF8");
$bilgi=mysqli_query($con,"select semtler.semt_adi, yeni_evli_cift.yeni_evli_cift_sayisi from semtler,yeni_evli_cift,semt_yeni_evli WHERE semtler.semt_id=semt_yeni_evli.semt_id AND yeni_evli_cift.yeni_evli_cift_id=semt_yeni_evli.yeni_evli_cift_id");
echo '<table class="tablo" border="1" cellpadding="10" cellspacing="3">
	<tr>
		<td width="300" bgcolor="#bc8f8f"><b>SEMT ADI</b></td>
		<td width="300" bgcolor="#bc8f8f"><b>YENİ EVLİ ÇİFT SAYISI</b></td>

	</tr>';
while ($cek=mysqli_fetch_array($bilgi))	
{echo '	<tr>
		<td>'.$cek["semt_adi"].'</td>
		<td>'.$cek["yeni_evli_cift_sayisi"].'</td>

		
	</tr>';}
echo '</table>';


?>
	
		</div>
		
		
	
	</div>

	
	
	
</div>
</body>
</html>

