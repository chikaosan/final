<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/toroku.css">
    <title>楽曲登録</title>
</head>

<body>
    <div class="aa">
        <div class="nyuryoku">
            <header>
                <h1>楽曲登録</h1>
            </header>

            <form action="toroku-output.php" method="post">
                <input type="text" name="musicname" id="musicname" placeholder="楽曲名">
                </br>
                <input type="text" name="artistname" id="artistname" placeholder="アーティスト名">
                </br>
                <input type="text" name="era" id="era" placeholder="年代">
                </br>
                <div class="wrapper">
                    <div class="toroku">
                        <input type="submit" value="登録">
                    </div>
            </form>
            <form action="menu.php" method="post">
                <div class="back">
                    <input type="submit" value="戻る">
                </div>
            </form>
        </div>
    </div>
    </div>


</body>

</html>