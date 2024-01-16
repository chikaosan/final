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
    <title>楽曲更新</title>
</head>

<body>
    <?php
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo->prepare('update music set musicname=?,artistname=?,era=? where musicid=?');
    if (empty($_POST['musicname'])) {
        echo '曲名を入力してください。';
    } else
        if (empty($_POST['artistname'])) {
            echo 'アーティスト名を入力してください。';
        } else
            if (!preg_match('/[0-9]+/', $_POST['era'])) {
                echo '年代を整数で入力してください。';
            } else
                if ($sql->execute([htmlspecialchars($_POST['musicname']), $_POST['artistname'], $_POST['era'], $_POST['musicid']])) {
                    echo '更新に成功しました。';
                } else {
                    echo '更新に失敗しました。';
                }

    ?>
    <hr>
    <table>
        <tr>
            <th>楽曲ID</th>
            <th>曲名</th>
            <th>アーティスト名</th>
            <th>年代</th>
        </tr>

        <?php
        foreach ($pdo->query('select * from music') as $row) {
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
    <button onclick="location.href='menu.php'">メニュー画面へ戻る</button>
</body>

</html>