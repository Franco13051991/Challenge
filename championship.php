<?php
	include 'filereader.php'; // This section of the code will read the .txt content

	//Read the $text array to split it in two arrays: player and play
	$j = 0;
	for($i = 0; $i < count($text); $i++)
	{
		if($i%2==0)
		{
			$player[] = $text[$i];	
			$j++;
		}
		else
		{
			$play[] = $text[$i];
			$j++;		
		}
	}
	
	//Read and divide the player and play arrays in two, for players1 and players2
	for($i = 0; $i < count($player); $i++)
	{
		if($i%2==0)
		{
			
			$player1[] = $player[$i];
			$play1[] = $play[$i];
			$j++;
		}
		else
		{
			$player2[] = $player[$i];
			$play2[] = $play[$i];
			$j++;		
		}
	}

	// This section will print the first round of the championship
	echo "<div class='round'>";
	echo "<table>";
	echo "<tr>";
	echo "<td>Player</td><td>Play</td>";
	echo "</tr>";
	for ($i = 0 ; $i < count($player); $i++)
	{
		echo "<tr>";
		//$data = array( 'Player' => $player, 'Play' => $play, 'Scrore' => $score );
		//$gamerows = array("Player" => $player, "Play" => $play);
		echo "<td><p>".$player[$i]."</p></td><td><p align='center'>".$play[$i]."</p></td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";


	// If the number of users is not pair, an error will be displayed
	if((count($player) % 3) == 0)
	{
		echo 'Error: The number of players is not correct to proceed with the tournament,please include more players';
	}
	else
	{
		if(count($player) > 2)
		{
			do // This do while section will display the rounds of the championship except the final round
			{	
				$x = count($play1);
				for($i = 0; $i < count($play1); $i++)
				{	
					$nextStage = Match($player1, $play1, $player2, $play2);	// This function will determine which player will pass the next round base on the play
					$playerNx = array_column($nextStage, 'Player');
					$playNx = array_column($nextStage, 'Play');
					Table($play1, $nextStage, $playerNx, $playNx); // This function will display the table with the players and plays for the round
						
					for($i = 0; $i < count($playerNx); $i++)
					{
						if($i%2==0)
						{
							$pNx1[] = $playerNx[$i];
							$plNx1[] = $playNx[$i];
						}
						else
						{
							$pNx2[] = $playerNx[$i];
							$plNx2[] = $playNx[$i];
						}
					}
					
					// Establish the information for the player1, play1, player2 and play2
					$player1 = $pNx1;
					$play1 = $plNx1;
					$player2 = $pNx2;
					$play2 = $plNx2;
							
				}
				$x = $x / 2; // Reducing the count of the players
			}while($x > 1);
			
			// This section will display the final round and the Champion
			if (count($play1) == 2);
			{
				$Champion = Champion($player1, $play1, $player2, $play2);
				$Champion = trim($Champion);
			}	
		}elseif (count($player) == 2)// This section will display the final round and the Champion if the first round of the championship has two competitors
		{
			$Champion = Champion($player1, $play1, $player2, $play2);
			$Champion = trim($Champion);
		}	
	}
	
	// This function will display the table with the players and plays for the round
	function Table($play1, $nextStage, $playerNx, $playNx)
	{
		for($i = 0; $i < count($i); $i++)
		{	
			echo "<br><br>";
			echo "<div class='round'>";
			echo "<table>";
			echo "<tr>";
			echo "<td>Player</td><td>Play</td>";
			echo "</tr>";
			for ($i = 0 ; $i < count($nextStage); $i++)
			{
				echo "<tr>";
				echo "<td><p>".$playerNx[$i]."</p></td><td><p align='center'>".$playNx[$i]."</p></td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "</div>";
		}	
	}
	
	
	// Function for the final match	and displaying the information
	function Champion($player1, $play1, $player2, $play2)
	{
		$final = Match($player1, $play1, $player2, $play2);	
		$Champion = array_column($final, 'Player');
		$ChampionPlay = array_column($final, 'Play');

		echo "<br><br>";
		echo "<div class='round'>";
		echo "<table>";
		echo "<tr>";
		echo "<td>Player</td><td>Play</td>";
		echo "</tr>";
			echo "<tr>";
			echo "<td><p>".$Champion[0]."</p></td><td><p align='center'>".$ChampionPlay[0]."</p></td>";
			echo "</tr>";
		echo "</table>";
		echo "</div>";
		
		$Champion = $Champion[0]; // Declaring the Champion
	
		return $Champion;

	}

	// Function that defines which is the winner of every match
	function Match($player1, $play1, $player2, $play2)
	{
		for($i = 0; $i < count($play1); $i++)
		{
			// Player 1 plays with Rock
			if(strpos($play1[$i], 'R') == True && strpos($play2[$i], 'R') == True) $nextStage[] = array ('Player' => $player1[$i], 'Play' => $play1[$i]);
			if(strpos($play1[$i], 'R') == True && strpos($play2[$i], 'P') == True) $nextStage[] = array ('Player' => $player2[$i], 'Play' => $play2[$i]);
			if(strpos($play1[$i], 'R') == True && strpos($play2[$i], 'S') == True) $nextStage[] = array ('Player' => $player1[$i], 'Play' => $play1[$i]);
			
			// Player 1 plays with Paper
			if(strpos($play1[$i], 'P') == True && strpos($play2[$i], 'R') == True) $nextStage[] = array ('Player' => $player1[$i], 'Play' => $play1[$i]);
			if(strpos($play1[$i], 'P') == True && strpos($play2[$i], 'P') == True) $nextStage[] = array ('Player' => $player1[$i], 'Play' => $play1[$i]);
			if(strpos($play1[$i], 'P') == True && strpos($play2[$i], 'S') == True) $nextStage[] = array ('Player' => $player2[$i], 'Play' => $play2[$i]);
			
			// Player 1 plays with Scissors
			if(strpos($play1[$i], 'S') == True && strpos($play2[$i], 'R') == True) $nextStage[] = array ('Player' => $player2[$i], 'Play' => $play2[$i]);
			if(strpos($play1[$i], 'S') == True && strpos($play2[$i], 'P') == True) $nextStage[] = array ('Player' => $player1[$i], 'Play' => $play1[$i]);
			if(strpos($play1[$i], 'S') == True && strpos($play2[$i], 'S') == True) $nextStage[] = array ('Player' => $player1[$i], 'Play' => $play1[$i]);
		}
	
		return $nextStage;
	}

?>
