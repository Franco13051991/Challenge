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
        <img src="images/start.png" style="width:100%; padding-top:15px;">
        <h3 align="center" style="color: #333">Rock, Paper, Scissors Game</h3>
    </section>
    <aside id="sidebar">
        <h2 style="padding-left:10px;">Upload your tournament</h2>
    	<form action="upload.php" method="post" enctype="multipart/form-data" style="padding-left:10px;">
      <table>
        <tr>
          <td>Filename:</td>
          <td><input type="file" name="file" id="file"></td>
          <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
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