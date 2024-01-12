<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>楽曲一覧</h1>
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
            echo '<td>', $row['artist'], '</td>';
            echo '<td>', $row['era'], '</td>';
            echo '</td>';
            echo '</tr>';
            echo "\n";
        }
        ?>

</body>

</html>