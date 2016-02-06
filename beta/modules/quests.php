<?php
/*
{ "results": [{ 
"id":191,
"name":"Clockwork Syringe, A",
"members":true,
"qp":1,
"reqs":[{"id":2,"val":76},{"id":14,"val":74},{"id":18,"val":74},{"id":19,"val":61},{"id":23,"val":62},{"id":24,"val":65},{"id":25,"val":50}],"difficulty":3,"length":3}] }




*/

error_reporting(0);
		$searchterm = $_POST["questsearch"];
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
				echo "Twohanded: ".$p[members]."";
				echo "<br />";
				echo "Type: ".$p[qp]."";
				echo "<br />";
				echo "Slot: ".$p[reqs]."";
				echo "<br />";
				echo "Rarity: ".$p[difficulty]."";
				echo "<br />";
				echo "Featured Item: ".$p[lenfth]."";
			}
		}
?>