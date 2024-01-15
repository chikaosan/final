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
    <title>Document</title>
</head>

<body>
    <?php
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo->prepare('insert into music(musicname, artistname, era)values (?, ?, ?)');
    if (empty($_POST['musicname'])) {
        echo '曲名を入力してください。';
    } elseif (empty($_POST['artistname'])) {
        echo 'アーティスト名を入力してください。';
    } elseif (!preg_match('/^\d+$/', $_POST['era'])) {
        echo '年代を整数で入力してください。';
    } elseif ($sql->execute([$_POST['musicname'], $_POST['artistname'], $_POST['era']])) {
        echo '<font color="red">追加に成功しました。</font>';
    } else {
        echo '<font color="red">追加に失敗しました。</font>';
    }
    echo '<div class="CustomerTable">';
    ?>
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
            echo '</td>';
            echo '</tr>';
            echo "\n";
        }
        ?>
    </table>
    </div>
    <div class="wrapper">

        <div class="back">
            <form action="menu.php" method="post">
                <input type="submit" value="戻る">
            </form>
        </div>


</body>

</html>