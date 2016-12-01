<?php

//Port defines
$ip 			= "123.123.123.123"; 
$css_port 		= "27015";
$ts2_port 		= "8767";
$ts2wi_port 	= "14534";
$terraria_port 	= "7777";
$wow_port 		= "8085";
$cs_port 		= "2016";
$ts3_port 		= "10011";
$mc_port 		= "25565";
$mc_creative_port 	= "1337";

//Init BG
echo '<body style="background-color:black">';

//First Block 
if (! $sock = @fsockopen($ip, $css_port, $num, $error, 5))
echo '<FONT COLOR=white>CSS Server is : </FONT><B><FONT COLOR=red>Offline</b></FONT><br />'; 
else{ 
echo '<FONT COLOR=white>CSS Server is : </FONT><B><FONT COLOR=lime>Online</b></FONT><br />'; 
fclose($sock); }

echo '<br />';
//Second Block
if (! $sock = @fsockopen($ip, $terraria_port, $num, $error, 5)) 
echo '<FONT COLOR=white>Terraria Server is : </FONT><B><FONT COLOR=red>Offline</b></FONT><br />'; 
else{ 
echo '<FONT COLOR=white>Terraria Server is : </FONT><B><FONT COLOR=lime>Online</b></FONT><br />'; 
fclose($sock); } 

echo '<br />';
//
if (! $sock = @fsockopen($ip, $wow_port, $num, $error, 5)) 
echo '<FONT COLOR=white>WoW Server (wotlk 335a) is : </FONT><B><FONT COLOR=red>Offline</b></FONT><br />'; 
else{ 
echo '<FONT COLOR=white>WoW Server (wotlk 335a) is : </FONT><B><FONT COLOR=lime>Online</b></FONT><br />'; 
fclose($sock); } 

echo '<br />';
//
if (! $sock = @fsockopen($ip, $cs_port, $num, $error, 5)) 
echo '<FONT COLOR=white>CS 1.6 Server is : </FONT><B><FONT COLOR=red>Offline</b></FONT><br />'; 
else{ 
echo '<FONT COLOR=white>CS 1.6 Server is : </FONT><B><FONT COLOR=lime>Online</b></FONT><br />'; 
fclose($sock); } 

echo '<br />';
//
if (! $sock = @fsockopen($ip, $mc_port, $num, $error, 5)) 
echo '<FONT COLOR=white>Minecraft (Survival) is : </FONT><B><FONT COLOR=red>Offline</b></FONT><br />'; 
else{ 
echo '<FONT COLOR=white>Minecraft (Survival) is : </FONT><B><FONT COLOR=lime>Online</b></FONT><br />'; 
fclose($sock); } 

echo '<br />';
//
if (! $sock = @fsockopen($ip, $mc_creative_port, $num, $error, 5)) 
echo '<FONT COLOR=white>Minecraft (Creative) is : </FONT><B><FONT COLOR=red>Offline</b></FONT><br />'; 
else{ 
echo '<FONT COLOR=white>Minecraft (Creative) is : </FONT><B><FONT COLOR=lime>Online</b></FONT><br />'; 
fclose($sock); } 

echo '<br />';
//
if (! $sock = @fsockopen($ip, $ts3_port, $num, $error, 5)) 
echo '<FONT COLOR=white>TS3 Server is : </FONT><B><FONT COLOR=red>Offline</b></FONT><br />'; 
else{ 
echo '<FONT COLOR=white>TS3 Server is : </FONT><B><FONT COLOR=lime>Online</b></FONT><br />'; 
fclose($sock); } 

echo '<br />';
//
//
if (! $sock = @fsockopen($ip, $ts2wi_port, $num, $error, 5)) 
echo '<FONT COLOR=white>TS2 Server (WI) is : </FONT><B><FONT COLOR=red>Offline</b></FONT><br />'; 
else{ 
echo '<FONT COLOR=white>TS2 Server (WI) is : </FONT><B><FONT COLOR=lime>Online</b></FONT><br />'; 
fclose($sock); } 

echo '<br />';
//
if (! $sock = @fsockopen($ip, $ts2_port, $num, $error, 5)) 
echo '<FONT COLOR=white>TS2 Server is : </FONT><B><FONT COLOR=red>Offline</b></FONT><br />'; 
else{ 
echo '<FONT COLOR=white>TS2 Server is : </FONT><B><FONT COLOR=lime>Online</b></FONT><br />'; 
fclose($sock); } 

echo '<br /><br /><br /><br />';

//Footer
echo '<FONT COLOR=white>-- Server Overview Framework -- </FONT><br /> ';

?>