<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="stylesheets/styles.css">
<!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<title>Rock-Paper-Scissors Game!</title>
</head>

<body>
<header>
  <div style="color:#FFF">
    <table style="color:#FFF">
      <tr>
      	<td><img src="images/hd.png" style="width:300px;"></td>
        <td><h1 align="left">Rock-Paper-Scissors Game</h1></td>
        <td><h3 style="padding-left:300px;"><a href="index.php">Home</a></h3></td>
        <td><h3>| <a href="tournament.php">Tournament</a></h3></td>
        <td><h3>| <a href="topPlayers.php">Top Players</a></h3></td>
      </tr>
    </table>
  </div>
</header>
<div id="content-wrapper">
  <div class="inner clearfix">
    <section id="main-content">
		<?php 
			include 'championship.php';
		?>
    </section>
    <aside id="sidebar">
        <div>
        	<table>
            	<tr>
                	<td><img src="images/rock.png" style="width:50px"></td>
                    <td><img src="images/paper.png" style="width:50px"></td>
                    <td><img src="images/scissors.png" style="width:50px"></td>
                </tr>
            </table>
        </div>
		<?php 
			echo "Champion: ".$Champion;
			include 'db.php';
			include 'table.php';
			include 'select.php';
			echo '<br><br>';
		?>
    <br><br>
    </aside>
    <footer>
      <div class="inner">
        <h3 align="center">Rock-Paper-Scissors Game! - Challenge 2016</h3>
      </div>
    </footer>
  </div>
</div>
</body>
</html>