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
    <title>楽曲削除</title>
</head>

<body>
    <?php
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo->prepare('delete from music where musicid=?');
    if ($sql->execute([$_GET['musicid']])) {
        echo '削除に成功しました。';

    } else {
        echo '削除に失敗しました。';
    }
    ?>
    <br>
    <hr><br>
    <table>
        <tr>
            <th>音楽ID</th>
            <th>曲名</th>
            <th>アーティスト名</th>
            <th>年代</th>
        </tr>
        <?php
        foreach ($pdo->query('SELECT * FROM music') as $row) {
            echo '<tr>';
            echo '<td>', $row['musicid'], '</td>';
            echo '<td>', $row['musicname'], '</td>';
            echo '<td>', $row['artistname'], '</td>';
            echo '<td>', $row['era'], '</td>';
            echo '</tr>';
            echo "\n";
        }
        ?>
    </table>
    <form action="menu.php" method="post">
        <button type="submit">戻る</button>
    </form>
</body>

</html>