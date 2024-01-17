<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">

    <title>PHP最終課題</title>
</head>

<body>
    <h1>楽曲管理メニュー</h1>

    </br>
    <div class="wrapper">
        <div class="all">
            <form action="itiran.php" method="post">
                <input type="submit" value="楽曲一覧"></input>
            </form>
        </div>

        <div class="add">
            <form action="toroku-input.php" method="post">
                <input type="submit" value="楽曲登録"></input>
            </form>
        </div>

        <div class="update">
            <form action="kosin-input.php" method="post">
                <input type="submit" value="楽曲更新・削除"></input>
            </form>
        </div>
    </div>

</body>

</html>