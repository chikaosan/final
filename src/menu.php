<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP最終課題</title>
</head>

<body>
    <h1>楽曲管理メニュー</h1>

    <form action="itiran.php" method="post">
        <button type="submit" name="itiran">楽曲一覧</button>
    </form>

    <form action="toroku-input.php" method="post">
        <button type="submit" name="toroku">楽曲登録</button>
    </form>


    <form action="kosin.php" method="post">
        <button type="submit" name="kosin">楽曲更新</button>
    </form>

    <form action="delete-input.php" method="post">
        <button type="submit" name="delete">楽曲削除</button>
    </form>



</body>

</html>