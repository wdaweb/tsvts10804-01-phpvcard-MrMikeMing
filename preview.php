<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/<?=$_SESSION['info']['layout']?>.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lilita+One|Noto+Sans+TC|Pacifico&display=swap" rel="stylesheet">
	<title>vCard產生器-<?=$_SESSION['info']['layout']?></title>
</head>
<body>
	
	<div class="card-container">
	<div class="filp-card">
	<div class="card-front">
		<img src="img/<?=$_SESSION['info']['png']?>">
	</div>
	<div class="card-back details">
		<h2><?=$_SESSION['info']['user']?></h2>
		<h4>職位名稱: 
		<?=$_SESSION['info']['title']?></h4>
		<div>E-mail: 
		<?=$_SESSION['info']['mail']?></div>
		<div>手機號碼: 
		<?=$_SESSION['info']['phone']?></div><br>
		<div><h3>自我介紹<br></h3>
		<?=$_SESSION['info']['skill']?></div><br>
		<button class="btn" onclick="window.history.go(-1)">回頁面</button>
	</div>
	</div>
	</div>
</body>
</html>


