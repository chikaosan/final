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
        $sql = $pdo->prepare('select * from music where musicid=?');
        $sql->execute([$_POST['musicid']]);
        if (empty($sql->fetchAll())) {
            $sql = $pdo->prepare('insert into music values (null,?,?,?,?,?,?)');
            $sql->execute([
                $_POST['musicid'],
                $_POST['musicname'],
                $_POST['artistname'],
                $_POST['era'],
            ]);
            echo '<div class="CustomerTable">';
            echo '楽曲名:', $_POST['musicid'];
            echo '</br>';
            echo '曲名:', $_POST['musicname'];
            echo '</br>';
            echo 'アーティスト名:', $_POST['artist'];
            echo '</br>';
            echo '年代:', $_POST['era'];
            echo '</div>';
        }
        ?>
    <div class="wrapper">

        <div class="back">
            <form action="menu.php" method="post">
                <input type="submit" value="戻る">
            </form>
        </div>


</body>

</html>