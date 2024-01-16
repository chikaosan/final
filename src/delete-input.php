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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>楽曲削除</title>
</head>

<body>
    <table>
        <tr>
            <th>音楽ID</th>
            <th>曲名</th>
            <th>アーティスト名</th>
            <th>年代</th>
        </tr>
        <?php
        $pdo = new PDO($connect, USER, PASS);
        foreach ($pdo->query('select * from music') as $row) {
            echo '<tr>';
            echo '<td>', $row['musicid'], '</td>';
            echo '<td>', $row['musicname'], '</td>';
            echo '<td>', $row['artistname'], '</td>';
            echo '<td>', $row['era'], '</td>';
            echo '<td>';
            echo '<a href="delete-output.php?musicid=', $row['musicid'], '">削除</a>';
            echo '</td>';
            echo '</tr>';
            echo "\n";
        }


        ?>
    </table>

</body>

</html>