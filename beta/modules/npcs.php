<?php
/*
{ "results": 
[
{ 
"id":250,
"name":"Kalphite worker",
"examine":"I don't think insect repellent will work...",
"attack_style":[1],
"hp":400,
"combat":28,
"shop":0,
"members":true,
"locstring":"Kalphite lair, south-west of Shantay pass"},
{ "id":491,"name":"Kalphite soldier","examine":"I don't think insect repellent will work...","attack_style":[1],"hp":900,"combat":85,"shop":0,"members":true,"locstring":"Kalphite lair, south-west of Shantay pass"},
{ "id":586,"name":"Kalphite guardian","examine":"I don't think insect repellent will work...","attack_style":[1],"hp":1700,"combat":141,"members":true,"locstring":"Kalphite lair, south-west of Shantay pass"},
{ "id":619,"name":"Kalphite queen","examine":"I don't think insect repellent will work...","attack_style":[1,2],"hp":2550,"combat":333,"members":true,"locstring":"Kalphite lair, south-west of Shantay pass"},
{ "id":2709,"name":"Spirit kalphite","examine":"Hail to the Queen, baby.","attack_style":[1],"hp":680,"combat":39,"shop":0,"members":true,"locstring":"Players via summoning"}] }




*/

error_reporting(0);
		$searchterm = $_POST["npcsearch"];
		//TODO: URL encode
		$term = str_replace(" ", "%20", $searchterm);
		if($content = file_get_contents("http://www.zybez.net/exResults.aspx?type=2&search=name=". $term ."")) {
			$decode = json_decode($content, true);
			$json_o=json_decode($content);
			foreach($decode[results] as $p) {
				echo "<br />";
				echo "Source: ".$p[id]."";
				echo "<br />";
				echo "Price: ".$p[name]."";
				echo "<br />";
				echo "Twohanded: ".$p[examine]."";
				echo "<br />";
				echo "Type: ".$p[attack_style]."";
				echo "<br />";
				echo "Slot: ".$p[hp]."";
				echo "<br />";
				echo "Rarity: ".$p[combat]."";
				echo "<br />";
				echo "Featured Item: ".$p[shop]."";
				echo "<br />";
				echo "Item Compiled: ".$p[members]."";
				echo "<br />";
				echo "Requirements: ".$p[locstring]."";
			}
		}
?>