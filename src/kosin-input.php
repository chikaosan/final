<?php
const SERVER = 'mysql220.phy.lolipop.lan';
const DBNAME = 'LAA1517339-final';
const USER = 'LAA1517339';
const PASS = '2201394';

$connect = 'mysql:host=' . SERVER . ';dbname=' . DBNAME . ';charset=utf8';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>楽曲更新</title>
</head>

<body>
	<div class="th0">商品番号</div>
	<div class="th1">商品名</div>
	<div class="th1">商品価格</div>
	<?php
	$pdo = new PDO($connect, USER, PASS);

	foreach ($pdo->query('select * from music') as $row) {
		echo '<form action="kosin-output.php" method="post">';
		echo '<input type="hidden" name="musicid" value="', $row['musicid'], '">';
		echo '<div class="td0">', $row['musicid'], '</div>';

		echo '<div class="td1">';
		echo '<input type="text" name ="musicname" value = "', $row['musicname'], '">';
		echo '</div> ';
		echo '<div class="td1">';
		echo '<input type="text" name="artistname" value="', $row['artistname'], '">';
		echo '</div> ';
		echo '<div class="td1">';
		echo '<input type="text" name="era" value="', $row['era'], '">';
		echo '</div> ';
		echo '<div class="td2"><input type="submit" value="更新"></div>';
		echo '</form>';
		echo "\n";
	}
	?>

</body>

</html>