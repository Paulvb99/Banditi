		<div class="title_bg"><div style="font-size:17px; color:#1b1a17; margin-left:10px; padding-top:4px;">Leden Lijst</div></div>
		<div style="width:100%; height:auto; background:#c3b79d; font-family:arial; font-size:12px; color:#2a190e;">
			<div style="padding:5px; padding-bottom:10px;">
			De tabel weergeeft alle leden gesorteerd op power. Wil je de lijst sorteren op geld in plaats van power? <a href="#" onclick="openTab('members_2','tab2'); return false"><u>Klik dan hier</u></a>.<br /><br />
	Zien in welke stad iemand is? Daarvoor heb je een space station of een satteliet nodig die je beide kan kopen in de shop!<br /><br />
				</div>
		</div>

		<script language="javascript">
			function openTab(pTabPage,pTab){
								document.getElementById('members_1').style.display = 'none';
								document.getElementById('members_2').style.display = 'none';
								document.getElementById('members_4').style.display = 'none';
								document.getElementById('members_3').style.display = 'none';

				document.getElementById(pTabPage).style.display = 'block';

								document.getElementById('tab1').style.background = '';
				document.getElementById('tab1').style.fontWeight = 'normal';
								document.getElementById('tab2').style.background = '';
				document.getElementById('tab2').style.fontWeight = 'normal';
								document.getElementById('tab3').style.background = '';
				document.getElementById('tab3').style.fontWeight = 'normal';
								document.getElementById('tab4').style.background = '';
				document.getElementById('tab4').style.fontWeight = 'normal';

				document.getElementById(pTab).style.background = 'url(\'images/tab_info_arrow.gif\') bottom no-repeat';
				document.getElementById(pTab).style.fontWeight = 'bold';
			}
		</script>
		<div style="width:100%; height:25px; background:url('images/tab_info_bg.jpg') repeat-x; font-family:arial; font-size:12px; color:#2a190e;">
									<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px; background:url('images/tab_info_arrow.gif') bottom no-repeat; font-weight:bold;"><a href="#" onclick="openTab('members_1','tab1'); return false">Gesorteerd op power</a></div>
												<div id="tab1" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('members_2','tab2'); return false">Gesorteerd op geld</a></div>
												<div id="tab2" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab3" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('members_4','tab3'); return false">Online leden</a></div>
												<div id="tab3" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;">|</div>
												<div id="tab4" style="float:left; height:26px; margin:0px; padding:0px; margin-left: 5px;"><a href="#" onclick="openTab('members_3','tab4'); return false">Vermoorde leden</a></div>
								</div>

		<div style="background-color:#dbd2b7; ">
		<br>
		<table cellpadding="4" cellspacing="0" width="100%" align="center"><tr><td>

	<div id="members_1">
	<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="130px"><b>Gebruikersnaam</b></td>
			<td align="center">&nbsp;</td>
			<td width="110px"><b>Power</b></td>
			<td align="center">&nbsp;</td>
			<td><b>Familie</b></td>
			<td align="center">&nbsp;</td>
			<td><b>Stad</b></td>
			<td align="center"><b>SL</b></td>
			<td align="center"><b>PB</b></td>
		</tr>
		<tr>
<?
if($_GET['x'] == ""){
$begin = ($_GET['p'] >= 0) ? $_GET['p']*30 : 0;
}else{$begin = 0;}
  $dbres				= mysql_query("SELECT * FROM `users` WHERE `vermoord`='0' ORDER BY `power` DESC LIMIT $begin,30");
  $num1				= mysql_query("SELECT * FROM `users` WHERE `vermoord`='0'");
  $num				= mysql_num_rows($num1);
$pages = floor($num/30+1);
  for($j=$begin+1; $info = mysql_fetch_object($dbres); $j++)
{
$stad1	                  	= array("","Turijn","Palermo","Milaan","Rome","Catania","Corleone");
$stad = $stad1[$info->city];
$power = number_format($info->power, 0, '.' , '.');
$schammel				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$info->login'");
$online = mysql_fetch_object($schammel);
$familie1 = mysql_query("SELECT * FROM `families` WHERE `naam`='$info->familie'");
$familie = mysql_fetch_object($familie1);
?>
<tr>
								<td>#<?echo$j;?></td>
								<td><?if($online->login == $info->login){?><img src="images/icons_gif/status_online.gif" title="Online"><?}if($online->login != $info->login){?><img src="images/icons_gif/status_offline.gif" title="Offline"><?}?></td>
								<td><a href="index.php?a=profile&x=<?echo$info->id;?>"><?if($info->admin == 1){?><FONT color='red'><?}if($info->moderator > 0){?><FONT color='#FF6600'><?}echo$info->login; if($info->admin > 0 || $info->moderator > 0){?></FONT><?}?><?if($info->vipdays > 0){?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"><?}?></a></td>
								<td align="center"><img src="images/icons_gif/star.gif" alt="Power"></td>
								<td><?echo$power;?></td>
								<td align="center"><img src="images/icons_gif/group.gif" alt="Familie"></td>
								<td><a href="index.php?a=famprofile&x=<?echo$familie->id;?>"><?echo$familie->naam;?></a></td>
								<td align="center"><img src="images/icons_gif/world.gif" alt="Locatie"></td>
								<td><?if($data->satteliet == 0 && $data->spacestation == 0){echo "Verborgen";}else{echo$stad;}?></td>
								<td align="center"><a href="index.php?a=click&x=<?echo$info->id;?>"><img src="images/icons_gif/connect.gif" alt="Secret Link" border="0px"></a></td>
								<td align="center"><a href="index.php?a=message&box=new&to=<?echo$info->login;?>"><img src="images/icons_gif/vcard.gif" border="0"></a></td>
							</tr><?}?>		<tr>
			<td colspan="11" align="center">
				<br>
<?
if($pages > 1){
$prev = $_GET['p']-1;
$next = $_GET['p']+1;
  $dbres				= mysql_query("SELECT * FROM `users` WHERE `vermoord`='0'");
  print "</table>\n\n<table width=100%>\n  <tr><td class=\"mainTxt\" align=\"center\">";
  if(mysql_num_rows($dbres) <= 0) {
    print "&#60; 1 &#62;</td></tr></table>\n";
	}
  else {
    if($begin/30 == 0) {
      print "&#60;&#60; Vorige | ";
	  }
    else {
      print "<a href=\"index.php?a=list&p=". ($begin/30-1) ."\">&#60;&#60; Vorige</a> | ";
}
    for($i=0; $i<mysql_num_rows($dbres)/30; $i++) {
$j = $i+1;
      print "<a href=\"index.php?a=list&p=$i\">$j</a> | ";
    }

    if($begin+30 >= mysql_num_rows($dbres)) {
      print "Volgende &#62;&#62; ";
	  }
    else {
      print "<a href=\"index.php?a=list&p=". ($begin/30+1) ."\">Volgende &#62;&#62;</a>";
  }
  }
  }
?>
<script language="javascript">
							function selectPage(pURL,pElement){
								document.location.href = pURL.replace("[#page]",pElement.value);
							}
					  </script>
										<br><br>
			</td>
		</tr>
	</table>
	</div>


	<div id="members_2" style="display:none;">
	<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="130px"><b>Gebruikersnaam</b></td>
			<td align="center">&nbsp;</td>
			<td width="110px"><b>Geld</b></td>
			<td align="center">&nbsp;</td>
			<td><b>Familie</b></td>
			<td align="center">&nbsp;</td>
			<td><b>Stad</b></td>
			<td align="center"><b>SL</b></td>
			<td align="center"><b>PB</b></td>
		</tr>
<?
if($_GET['x'] == geld){
$begin = ($_GET['p'] >= 0) ? $_GET['p']*30 : 0;
}else{$begin = 0;}
  $dbres				= mysql_query("SELECT * FROM `users` WHERE `vermoord`='0' ORDER BY `contant`+`bank` DESC LIMIT $begin,30");
  $num				= mysql_num_rows($dbres);
$pages = floor($num/30+1);
  for($j=$begin+1; $info = mysql_fetch_object($dbres); $j++)
{
$stad1	                  	= array("","Turijn","Palermo","Milaan","Rome","Catania","Corleone");
$stad = $stad1[$info->city];
$geld = number_format($info->contant+$info->bank, 0, '.' , '.');
$schammel				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$info->login'");
$online = mysql_fetch_object($schammel);
$familie1 = mysql_query("SELECT * FROM `families` WHERE `naam`='$info->familie'");
$familie = mysql_fetch_object($familie1);
?>
<tr>
								<td>#<?echo$j;?></td>
								<td><?if($online->login == $info->login){?><img src="images/icons_gif/status_online.gif" title="Online"><?}if($online->login != $info->login){?><img src="images/icons_gif/status_offline.gif" title="Offline"><?}?></td>
								<td><a href="index.php?a=profile&x=<?echo$info->id;?>"><?if($info->admin == 1){?><FONT color='red'><?}if($info->moderator > 0){?><FONT color='#FF6600'><?}echo$info->login; if($info->admin > 0 || $info->moderator > 0){?></FONT><?}?><?if($info->vipdays > 0){?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"><?}?></a></td>
								<td align="center"><img src="images/icons_gif/money.gif" alt="Power"></td>
								<td><?echo$geld;?></td>
								<td align="center"><img src="images/icons_gif/group.gif" alt="Familie"></td>
								<td><a href="index.php?a=famprofile&x=<?echo$familie->id;?>"><?echo$familie->naam;?></a></td>
								<td align="center"><img src="images/icons_gif/world.gif" alt="Locatie"></td>
								<td><?if($data->satteliet == 0 && $data->spacestation == 0){echo "Verborgen";}else{echo$stad;}?></td>
								<td align="center"><a href="index.php?a=click&x=<?echo$info->id;?>"><img src="images/icons_gif/connect.gif" alt="Secret Link" border="0px"></a></td>
								<td align="center"><a href="index.php?a=message&box=new&to=<?echo$info->login;?>"><img src="images/icons_gif/vcard.gif" border="0"></a></td>
							</tr><?}?>		<tr>
			<td colspan="11" align="center">
				<br>
<?
$prev = $_GET['p']-1;
$next = $_GET['p']+1;
  $dbres				= mysql_query("SELECT * FROM `users` WHERE `vermoord`='0'");
  print "</table>\n\n<table width=100%>\n  <tr><td class=\"mainTxt\" align=\"center\">";
  if(mysql_num_rows($dbres) <= -1) {
    print "&#60; 1 &#62;</td></tr></table>\n";
	}
  else {
    if($begin/30 == 0) {
      print "&#60;&#60; Vorige | ";
	  }
    else {
      print "<a href=\"index.php?a=list&x=geld&p=". ($begin/30-1) ."\">&#60;&#60; Vorige</a> | ";
}
    for($i=0; $i<mysql_num_rows($dbres)/30; $i++) {
$j = $i+1;
      print "<a href=\"index.php?a=list&x=geld&p=$i\">$j</a> | ";
    }

    if($begin+30 >= mysql_num_rows($dbres)) {
      print "Volgende &#62;&#62; ";
	  }
    else {
      print "<a href=\"index.php?a=list&x=geld&p=". ($begin/30+1) ."\">Volgende &#62;&#62;</a>";
  }
  }
?>
						<br>
						<script language="javascript">
							function selectPage(pURL,pElement){
								document.location.href = pURL.replace("[#page]",pElement.value);
							}
					  </script>
												<br><br>
				</tr>

					</table>
	</div>


	<div id="members_3" style="display:none;">
		<table width="100%">
		<tr>
			<td>
				<!--lang_getLine("Hier kan je een overzicht terug vinden van de banditi die vermoord zijn geworden")
				<br>
				<br>-->
				<table width="100%" class="mod_list">
					<tr>
						<td></td>
						<td><b>Gebruikersnaam</b></td>
						<td></td>
						<td><b>Vermoord door</b></td>
						<td></td>
						<td><b>Premie</b></td>
						<td></td>
						<td><b>Datum</b></td>
					</tr>
<?
if($_GET['x'] == dood){
$begin = ($_GET['p'] >= 0) ? $_GET['p']*30 : 0;
}else{$begin = 0;}
  $dbres				= mysql_query("SELECT * FROM `users` WHERE `vermoord`='1' ORDER BY `moorddatum` DESC LIMIT $begin,30");
  $num				= mysql_num_rows($dbres);
$pages = floor($num/30+1);
  for($j=$begin+1; $info = mysql_fetch_object($dbres); $j++)
{
$premie = number_format($info->moordpremie, 0, '.' , '.');
$schammel				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$info->login'");
$online = mysql_fetch_object($schammel);
$moordenaar1 = mysql_query("SELECT * FROM `users` WHERE `login`='$info->moordenaar'");
$moordenaar = mysql_fetch_object($moordenaar1);
$schammel2				= mysql_query("SELECT * FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300 AND `login`='$moordenaar->login'");
$online2 = mysql_fetch_object($schammel2);
?>
					<tr>
							<td><?if($online->login == $info->login){?><img src="images/icons_gif/status_online.gif" title="Online"><?}if($online->login != $info->login){?><img src="images/icons_gif/status_offline.gif" title="Offline"><?}?></td>
								<td><a href="index.php?a=profile&x=<?echo$info->id;?>"><?if($info->admin == 1){?><FONT color='red'><?}if($info->moderator > 0){?><FONT color='#FF6600'><?}echo$info->login; if($info->admin > 0 || $info->moderator > 0){?></FONT><?}?><?if($info->vipdays > 0){?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"><?}?></a></td>
							<td><?if($online2->login == $moordenaar->login){?><img src="images/icons_gif/status_online.gif" title="Online"><?}if($online2->login != $moordenaar->login){?><img src="images/icons_gif/status_offline.gif" title="Offline"><?}?></td>
                            <td><a href="index.php?a=profile&x=<?echo$moordenaar->id;?>"><?if($moordenaar->admin == 1){?><FONT color='red'><?}if($moordenaar->moderator > 0){?><FONT color='#FF6600'><?}echo$moordenaar->login; if($moordenaar->admin > 0 || $moordenaar->moderator > 0){?></FONT><?}?><?if($moordenaar->vipdays > 0){?><img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account"><?}?></a></td>
							<td><img src="images/icons_gif/money.gif"></td>
							<td>&euro; <?echo$premie;?></td>
							<td><img src="images/icons_gif/time.gif"></td>
							<td><?echo$info->moorddatum;?></td>
						</tr><?}?>				</table>
			</td>
		</tr>
		<tr>
			<td colspan="11" align="center">
				<br>
<?
$prev = $_GET['p']-1;
$next = $_GET['p']+1;
  $dbres				= mysql_query("SELECT * FROM `users` WHERE `vermoord`>'0'");
  print "</table>\n\n<table width=100%>\n  <tr><td class=\"mainTxt\" align=\"center\">";
  if(mysql_num_rows($dbres) <= -1) {
    print "&#60; 1 &#62;</td></tr></table>\n";
	}
  else {
    if($begin/30 == 0) {
      print "&#60;&#60; Vorige | ";
	  }
    else {
      print "<a href=\"index.php?a=list&x=dood&p=". ($begin/30-1) ."\">&#60;&#60; Vorige</a> | ";
}
    for($i=0; $i<mysql_num_rows($dbres)/30; $i++) {
$j = $i+1;
      print "<a href=\"index.php?a=list&x=dood&p=$i\">$j</a> | ";
    }

    if($begin+30 >= mysql_num_rows($dbres)) {
      print "Volgende &#62;&#62; ";
	  }
    else {
      print "<a href=\"index.php?a=list&x=dood&p=". ($begin/30+1) ."\">Volgende &#62;&#62;</a>";
  }
  }
?>
<script language="javascript">
							function selectPage(pURL,pElement){
								document.location.href = pURL.replace("[#page]",pElement.value);
							}
					  </script>
										<br><br>
			</td>
		</tr>
	</table>
	</div>


	<div id="members_4" style="display:none;">
					<table width="100%" border="0" cellspacing="2" cellpadding="2" class="mod_list">
		<tr>
			<td></td>
			<td></td>
			<td width="130px"><b>Gebruikersnaam</b></td>
			<td align="center">&nbsp;</td>
			<td width="110px"><b>Power</b></td>
			<td align="center">&nbsp;</td>
			<td><b>Familie</b></td>
			<td align="center">&nbsp;</td>
			<td><b>Stad</b></td>
			<td align="center"><b>SL</b></td>
			<td align="center"><b>PB</b></td>
		</tr>
<?
if($_GET['x'] == online){
$begin = ($_GET['p'] >= 0) ? $_GET['p']*30 : 0;
}else{$begin = 0;}
  $dbres				= mysql_query("SELECT `id` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300");
  $numonline				= mysql_num_rows($dbres);
$pages = floor($numonline/50+1);
    $dbres				= mysql_query("SELECT `login`,UNIX_TIMESTAMP(`signup`) AS `signup`, `vipdays`, `admin`, `power` `contant`, `moderator`, `bank`, `id`, `familie`, `rank`, `vipdays`, `login`, `city`, `power`, `vermoord` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300  ORDER BY `login` LIMIT $begin,50");
  for($j=$begin+1; $online = mysql_fetch_object($dbres); $j++)
{
$stad1	                  	= array("","Turijn","Palermo","Milaan","Rome","Catania","Corleone");
$stad = $stad1[$online->city];
$power = number_format($online->power, 0, '.' , '.');
$familie1 = mysql_query("SELECT * FROM `families` WHERE `naam`='$online->familie'");
$familie = mysql_fetch_object($familie1);
?>
								<td>#<?echo$j;?></td>
								<td><img src="images/icons_gif/status_online.gif" title="Online"></td>
								<td><a href="index.php?a=profile&x=<?echo$online->id;?>"><?if($online->admin > 0){echo "<font color='red'>";} if($online->moderator > 0){?><FONT color='#FF6600'><?}if($online->vermoord > 0){echo"<s>";}echo $online->login; if($online->vermoord > 0){echo"</s>";} if($online->admin > 0 || $online->moderator > 0){echo "</font>";}if($online->vipdays > 0){echo '<img src="images/star.gif" border="0" width="10" height="10" alt="Betaald account">';}?></a></td>
								<td align="center"><img src="images/icons_gif/star.gif" alt="Power"></td>
								<td><?echo$power;?></td>
								<td align="center"><img src="images/icons_gif/group.gif" alt="Familie"></td>
								<td><?if($online->familie != ""){?><a href="index.php?a=famprofile&x=<?echo$familie->id;?>"</a><?}?><?echo$online->familie?></td>
								<td align="center"><img src="images/icons_gif/world.gif" alt="Locatie"></td>
								<td><?if($data->satteliet == 0 && $data->spacestation == 0){echo "Verborgen";}else{echo$stad;}?></td>
								<td align="center"><a href="index.php?a=click&x=<?echo$online->id;?>"><img src="images/icons_gif/connect.gif" alt="Secret Link" border="0px"></a></td>
								<td align="center"><a href="index.php?a=message&box=new&to=<?echo$online->login;?>"><img src="images/icons_gif/vcard.gif" border="0"></a></td>
							</tr>
<?
}
$prev = $_GET['p']-1;
$next = $_GET['p']+1;
    $dbres				= mysql_query("SELECT `id` FROM `users` WHERE UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(`online`) < 300");
  print "</table>\n\n<table width=100%>\n  <tr><td class=\"mainTxt\" align=\"center\">";
  if(mysql_num_rows($dbres) <= -1) {
    print "&#60; 1 &#62;</td></tr></table>\n";
	}
  else {
    if($begin/50 == 0) {
      print "&#60;&#60; Vorige | ";
	  }
    else {
      print "<a href=\"index.php?a=list&x=online&p=". ($begin/50-1) ."\">&#60;&#60; Vorige</a> | ";
}
    for($i=0; $i<mysql_num_rows($dbres)/50; $i++) {
$j = $i+1;
      print "<a href=\"index.php?a=list&x=online&p=$i\">$j</a> | ";
    }

    if($begin+50 >= mysql_num_rows($dbres)) {
      print "Volgende &#62;&#62; ";
	  }
    else {
      print "<a href=\"index.php?a=list&x=online&p=". ($begin/50+1) ."\">Volgende &#62;&#62;</a>";
  }
  }
  ?>
<script language="javascript">
							function selectPage(pURL,pElement){
								document.location.href = pURL.replace("[#page]",pElement.value);
							}
					  </script>
										<br><br>
			</td>
		</tr>
	</table>
	</div>

	<span class="small"><i>* Dit overzicht is niet realtime en wordt eens per 30 minuten bijgwewerkt</i></span>
					<script language="javascript">
<?
if($_GET['x'] == geld){
?>
			openTab('members_2','tab2');
<?
}
if($_GET['x'] == online){
?>
			openTab('members_4','tab3');
<?
}
if($_GET['x'] == dood){
?>
			openTab('members_3','tab4');
<?
}
if($_GET['x'] == ""){
?>
            openTab('members_1','tab1')
<?
}
?>
					</script>
							</td></tr></table>
		</div>

		<table width='100%' cellspacing='2' cellpadding='2'>
			<tr>

				<td class='content_bottom'></td>
			</tr>
		</table>
				</div>
	</td>
	</tr>

	</table>
	</td>
