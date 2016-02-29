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
    <table>
      <tr>
      	<td><img src="images/hd.png" style="width:300px;"></td>
        <td><h1 align="left">Rock-Paper-Scissors Game</h1></td>
        <td><h3 style="padding-left:300px;">Home</h3></td>
        <td><h3>| Tournament</h3></td>
        <td><h3>| Top Players</h3></td>
      </tr>
    </table>
  </div>
</header>
<div id="content-wrapper">
  <div class="inner clearfix">
    <section id="main-content">
        <img src="images/start.png" style="width:100%; padding-top:15px;">
        <h3 align="center" style="color: #333">Rock, Paper, Scissors Game</h3>
    </section>
    <aside id="sidebar">
        <?php
		if ($_FILES["file"]["type"] == "text/plain" &&
			$_FILES["file"]["size"] < 65536)
		{
		  if ($_FILES["file"]["error"] > 0)
		  {
			echo "Error: " . $_FILES["file"]["error"] . "<br>";
		  }
		  else
		  {
			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			echo "Type: " . $_FILES["file"]["type"] . "<br>";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
			if (file_exists("uploads/" . $_FILES["file"]["name"]))
			{
			  echo $_FILES["file"]["name"] . " was updated. ";
			  echo '<a href="tournament.php">View the tournament</a>';
			}
			else
			{
			  move_uploaded_file($_FILES["file"]["tmp_name"],
			  "uploads/" . $_FILES["file"]["name"]);
			  echo "Saved as: " . "uploads/" . $_FILES["file"]["name"];
			  echo '</br>';
			  echo '<a href="tournament.php">View the tournament</a>';
			}
		  }
		}
		else
		{
		  if ($_FILES["file"]["type"] != "text/plain")
			echo "File is not of the permitted type.";
		  else if ($_FILES["file"]["size"] < 65536)
			echo "File exceeds permitted size.";
		}
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