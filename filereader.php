<?php
	// Reads the tournament.txt file
	$fp = fopen("uploads/tournament.txt", "r");
	$text = "";

	//Start checking the content file
	while(!feof($fp)) {
		
		$line = fgets($fp);
		
		//This process will identify all the values inside "[]"
		if (preg_match('/"([^"]+)"/', $line, $match)) 
		{
			$text = $text.$line; 
		} 
	}
	fclose($fp);
	
	$text = str_replace(array("[", "]", '"'), '', $text); //Formatting the text to remove "[]"
	$text = explode(',', $text); //Defining each value in a different line
?>