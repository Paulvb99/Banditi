<?
$_POST['captcha'] = ereg_replace("j", "J", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("k", "K", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("l", "L", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("m", "M", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("n", "N", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("o", "O", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("p", "P", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("q", "Q", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("r", "R", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("s", "S", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("t", "T", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("u", "U", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("v", "V", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("w", "W", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("x", "X", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("y", "Y", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("z", "Z", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("a", "A", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("b", "B", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("c", "C", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("d", "D", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("e", "E", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("f", "F", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("g", "G", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("h", "H", $_POST['captcha']);
$_POST['captcha'] = ereg_replace("i", "I", $_POST['captcha']);
if($_POST['captcha'] != ""){
if($_POST['captcha'] != $_SESSION['captcha']){
$error = 3;
}
}
if($data->rank == 1){
$pr1=60;$pr2=50;$pr3=10;$pr4=20;$pr5=0;$pr6=0;$pr7=0;$pr8=0;$pr9=0;$pr10=0;$pr11=0;$pr12=0;$pr13=0;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 2){
$pr1=66;$pr2=55;$pr3=14;$pr4=26;$pr5=10;$pr6=0;$pr7=0;$pr8=0;$pr9=0;$pr10=0;$pr11=0;$pr12=0;$pr13=0;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 3){
$pr1=70;$pr2=59;$pr3=20;$pr4=30;$pr5=19;$pr6=14;$pr7=10;$pr8=6;$pr9=2;$pr10=0;$pr11=0;$pr12=0;$pr13=0;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 4){
$pr1=73;$pr2=64;$pr3=30;$pr4=30;$pr5=21;$pr6=17;$pr7=14;$pr8=9;$pr9=5;$pr10=3;$pr11=0;$pr12=0;$pr13=0;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 5){
$pr1=79;$pr2=68;$pr3=35;$pr4=33;$pr5=27;$pr6=24;$pr7=19;$pr8=14;$pr9=10;$pr10=7;$pr11=6;$pr12=0;$pr13=0;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 6){
$pr1=83;$pr2=73;$pr3=45;$pr4=42;$pr5=31;$pr6=29;$pr7=21;$pr8=18;$pr9=15;$pr10=10;$pr11=7;$pr12=5;$pr13=3;$pr14=0;$pr15=0;$pr16=0;$pr17=0;
}
if($data->rank == 7){
$pr1=89;$pr2=77;$pr3=62;$pr4=57;$pr5=53;$pr6=47;$pr7=40;$pr8=36;$pr9=31;$pr10=26;$pr11=20;$pr12=15;$pr13=13;$pr14=10;$pr15=5;$pr16=2;$pr17=1;
}
if($data->rank == 8){
$pr1=92;$pr2=83;$pr3=70;$pr4=65;$pr5=64;$pr6=55;$pr7=51;$pr8=47;$pr9=45;$pr10=39;$pr11=33;$pr12=27;$pr13=21;$pr14=16;$pr15=13;$pr16=10;$pr17=7;
}
if($data->rank == 9){
$pr1=96;$pr2=90;$pr3=87;$pr4=80;$pr5=78;$pr6=77;$pr7=73;$pr8=70;$pr9=65;$pr10=63;$pr11=60;$pr12=56;$pr13=42;$pr14=27;$pr15=25;$pr16=21;$pr17=12;
}
if($data->rank == 10){
$pr1=98;$pr2=94;$pr3=90;$pr4=87;$pr5=89;$pr6=82;$pr7=80;$pr8=75;$pr9=75;$pr10=71;$pr11=67;$pr12=63;$pr13=51;$pr14=42;$pr15=31;$pr16=23;$pr17=14;
}
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`scooterjattijd`) AS `scooterjattijd`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->scooterjatten;
	$tijdverschil1        = $data1->scooterjattijd-3600+$datijd-time();
	if($data1->scooterjattijd + $datijd < time()){
if($_POST['car'] > 0){
$rang = rand(0,2);
$vord = rand(1,5);
$kans = rand(0,100);
$bakkans = rand(0,3);
if($error != 3){
mysql_query("UPDATE `users` SET `scooterjatten`='600'");
mysql_query("UPDATE `users` SET `vordering`=`vordering`+'$vord',`rankvord`=`rankvord`+'$rang',`scooterjattijd`=NOW() WHERE `login`='$data->login'");
}
}
if($error != 3){
if($_POST['car'] == 1){
if($kans <= $pr1){
$error = niks;
$waarde = 7500;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','1')");
}
if($kans > $pr1){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 2){
if($kans <= $pr2){
$error = niks;
$waarde = 10000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','2')");
}
if($kans > $pr2){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 3){
if($kans <= $pr3){
$error = niks;
$waarde = 15000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','3')");
}
if($kans > $pr3){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 4){
if($kans <= $pr4){
$error = niks;
$waarde = 20000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','4')");
}
if($kans > $pr4){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 5){
if($kans <= $pr5){
$error = niks;
$waarde = 22500;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','5')");
}
if($kans > $pr5){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 6){
if($kans <= $pr6){
$error = niks;
$waarde = 25000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','6')");
}
if($kans > $pr6){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 7){
if($kans <= $pr7){
$error = niks;
$waarde = 37500;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','7')");
}
if($kans > $pr7){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 8){
if($kans <= $pr8){
$error = niks;
$waarde = 50000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','8')");
}
if($kans > $pr8){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 9){
if($kans <= $pr9){
$error = niks;
$waarde = 60000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','9')");
}
if($kans > $pr9){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 10){
if($kans <= $pr10){
$error = niks;
$waarde = 75000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','10')");
}
if($kans > $pr10){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 11){
if($kans <= $pr11){
$error = niks;
$waarde = 80000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','11')");
}
if($kans > $pr11){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 12){
if($kans <= $pr12){
$error = niks;
$waarde = 90000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','12')");
}
if($kans > $pr12){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 13){
if($kans <= $pr13){
$error = niks;
$waarde = 100000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','13')");
}
if($kans > $pr13){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 14){
if($kans <= $pr14){
$error = niks;
$waarde = 100000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','14')");
}
if($kans > $pr14){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 15){
if($kans <= $pr15){
$error = niks;
$waarde = 150000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','15')");
}
if($kans > $pr15){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 16){
if($kans <= $pr16){
$error = niks;
$waarde = 250000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','16')");
}
if($kans > $pr16){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
if($_POST['car'] == 17){
if($kans <= $pr17){
$error = niks;
$waarde = 500000;
$schade = rand(0,50);
mysql_query("INSERT INTO `scooters`(`owner`,`waarde`,`schade`,`soort`) values('$data->login','$waarde','$schade','17')");
}
if($kans > $pr17){
if($bakkans == 3){
$error = 2;
$tijd = rand(2,5);
}
else{
$error = 1;
}
}
}
}
}else{$error = scooterstelen;}
if($bakkans == 3 && $error == 2){
$time = $tijd*60;
mysql_query("UPDATE `users` SET `gevangenis`='$time',`baktijd`=NOW() WHERE `id`='$data->id'");
}
if(!isset($_POST['submit'])){
	$data2            = mysql_query("SELECT *,UNIX_TIMESTAMP(`scooterjattijd`) AS `scooterjattijd`,0 FROM `users` WHERE `login`='$data->login'");
	  $data1            = mysql_fetch_object($data2);
$datijd = $data->scooterjatten;
	$tijdverschil1        = $data1->scooterjattijd-3600+$datijd-time();
	if($data1->scooterjattijd + $datijd > time()){
   list($uur,$min,$sec)=explode(":",date("H:i:s",$tijdverschil1));
$error = scooterstelen;
$countdown = $data1->scooterjattijd+$datijd-time();
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						De politie zit nog achter je aan, over <font id="count_timer"></font>&nbsp; is de kust weer veilig					</td>
				</tr>
				<tr>
					<td style="color:red">
						<br><br>
						<a href="#" onclick="history.go(-1); return false" class="error_ok">OK</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	countdown('<?=$countdown?>','count_timer','index.php?a=stealcars');
</script>		</div>
	</td>
	</tr>

	</table>
	</td>

<?}}
if($error == 1){
?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Helaas, het is je niet gelukt om de scooter te stelen!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=news" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=news'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == 2){
?>

			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Het is mislukt, en je bent gepakt door de politie!				</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=news" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script language="javascript">
	setTimeout("document.location.href='index.php?a=news'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == niks){?>
			<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup" align="center">
				<tr>
					<td>
						Je hebt de scooter gestolen! Hij staat nu in je garage!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
							<a href="index.php?a=garage" class="msg_ok">Klik hier indien je niet automatisch verder gaat.</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script language="javascript">
	setTimeout("document.location.href='index.php?a=garage'",(3000*2));
</script>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == 3){
?>
<table width="100%">
	<tr>
		<td align="center">
			<br><br><br><br>
			<table class="div_popup_error" align="center">
				<tr>
					<td style="color:red">
						<b>FOUT!</b><br><br>De code was onjuist!					</td>
				</tr>
				<tr>
					<td>
						<br><br>
													<a href="#" onclick="history.go(-1); return false" class="error_ok">OK</a>
											</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
		</div>
	</td>
	</tr>

	</table>
	</td>
<?
}
if($error == ""){
?>


					<div class="title_bg">
			<div class="title">scooter's stelen</div>
		</div>

		<div style="background-color:#dbd2b7; padding:10px; padding-top:4px;">
		<table cellpadding="0" cellspacing="0" width="100%"><tr><td>
		Je hebt de mogelijkheid om scooter's te stelen. Hoe hoger je rang, hoe meer slagingskans dat je de scooter kan binnenhalen.<br>
<br>
<form method="POST" onsubmit="return checkError(this)">
	<input type="hidden" name="sel" id="sel" value="">
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="1" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Puch</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/puch.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 7.500</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr1;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>40</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>197</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="2" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Citta</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/citta.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 10.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr2;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>100</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>50</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>1 persoon</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="3" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Prima SF</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/prima sf.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 15.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr3;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>50</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>200</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="4" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Sense SD</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/sense sd.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 20.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr4;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>55</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>120</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="5" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Rusch</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/rusch.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 22.500</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr5;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>60</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>116</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="6" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Benelli</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/benelli.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 25.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr6;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>60</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>140</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="7" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Neos</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/neos.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 37.500</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr7;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>62</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>197</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="8" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Piaggio</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/piaggio.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 50.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr8;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>55</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>130</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="9" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Kymco</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/kymco.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 60.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr9;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>70</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>150</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="10" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Vespa</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/vespa.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 75.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr10;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>75</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>215</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="11" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Malaguti</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/malaguti.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 80.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr11;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>70</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>130</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="12" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Speedfighter 3</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/speedfighter 3.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 90.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr12;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>80</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>200</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="13" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Aerox</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/aerox.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 100.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr13;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>85</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>190</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="14" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Aprilia SR</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/aprilia sr.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 100.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr14;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>80</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>210</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="15" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Aprilia Area</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/area.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 150.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr15;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>90</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>190</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="16" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Runner</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/runner.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 250.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr16;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>98</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>180</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>

<br>
<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
 	<tr>
    	<td rowspan="5" width="20px" align=center><input type="radio" name="car" value="17" class="radio" onclick="document.getElementById('sel').value = 'true'"></td>
    	<td colspan="5"><font size="4" style="padding-left:7px;">Brommobiel</font></td>
  	</tr>
  	<tr>
    	<td rowspan="4" width="120px" align="center"><img src="images/scooters/45 car.jpg" width="100" height="80"></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autonieuwwaarde.png'></td>
    	<td colspan="3">Waarde: <b>&euro; 500.000</b></td>
  	</tr>
  	<tr>
	    <td width="18px" align="center"><img src='images/icons_gif/misdaadkans.png'></td>
    	<td colspan="3">Kans: <b><?echo$pr17;?> %</b></td>
  	</tr>
  	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/autotopsnelheid.png'></td>
    	<td>Topsnelheid: <b>45</b></td>
    	<td width="18px" align="center"><img src='images/icons_gif/autopaardenkrachten.png'></td>
    	<td>Paardenkracht: <b>210</b></td>
  	</tr>
   	<tr>
    	<td width="18px" align="center"><img src='images/icons_gif/group.gif'></td>
    	<td colspan="3">Aantal inzittende: <b>2 personen</b></td>
  	</tr>
</table>
<br>
<table align="center" width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
		<tr>
			<td >
				<table width="100%">
					<tr>
						<td><?
$first = rand(1, 26);
$second = rand(1, 26);
$third = rand(1, 26);
$fourth = rand(1, 26);
$captcha = ("$first  $second  $third  $fourth");
include("lib/captcha/captcha.php?code=$captcha");
                        ?><img src="lib/captcha/captcha.php?code=<?echo$captcha;
$captcha = ereg_replace("10", "J", $captcha);
$captcha = ereg_replace("11", "K", $captcha);
$captcha = ereg_replace("12", "L", $captcha);
$captcha = ereg_replace("13", "M", $captcha);
$captcha = ereg_replace("14", "N", $captcha);
$captcha = ereg_replace("15", "O", $captcha);
$captcha = ereg_replace("16", "P", $captcha);
$captcha = ereg_replace("17", "Q", $captcha);
$captcha = ereg_replace("18", "R", $captcha);
$captcha = ereg_replace("19", "S", $captcha);
$captcha = ereg_replace("20", "T", $captcha);
$captcha = ereg_replace("21", "U", $captcha);
$captcha = ereg_replace("22", "V", $captcha);
$captcha = ereg_replace("23", "W", $captcha);
$captcha = ereg_replace("24", "X", $captcha);
$captcha = ereg_replace("25", "Y", $captcha);
$captcha = ereg_replace("26", "Z", $captcha);
$captcha = ereg_replace("0", "", $captcha);
$captcha = ereg_replace("1", "A", $captcha);
$captcha = ereg_replace("2", "B", $captcha);
$captcha = ereg_replace("3", "C", $captcha);
$captcha = ereg_replace("4", "D", $captcha);
$captcha = ereg_replace("5", "E", $captcha);
$captcha = ereg_replace("6", "F", $captcha);
$captcha = ereg_replace("7", "G", $captcha);
$captcha = ereg_replace("8", "H", $captcha);
$captcha = ereg_replace("9", "I", $captcha);
                                                  $captcha 		= str_replace(" ", "",$captcha);
                                                  $_SESSION['captcha'] = $captcha;
                                                  ?>" border="1"></td>
						<td align="center"><input type="text" name="captcha"><br /><input type="submit" value="Steel de scooter..." name="submit" class="mod_submit"></td>
					</tr>
				</table>
			</td>
		</tr>
	</form>
</table>
<br />
Vul in het vakje de vierletterige code in. Deze code is ter beveiliging.<br><br>
		</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>


<script language="javascript">
	function checkError(pForm){
		var errormsg = '';

		if(pForm.captcha.value.length != 4) errormsg += 'Je hebt geen geldige code ingevuld!<br>';
		if(pForm.sel.value != 'true') errormsg += 'Je hebt geen scooter gekozen!<br>';

		if(errormsg != ''){
			showError(errormsg);
			return false;
		}
		return true;
	}
</script>		</div>
	</td>
	</tr>

	</table>
	</td>
<?}
if($error == niks){
$_SESSION['mission'] = "Steel een scooter";
}
?>
