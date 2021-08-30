<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <top>
        <div class="log">
            <img src="4eachblog_logo.jpg">
        </div>
    </top>

    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>問い合わせ</li>
            <li>登録フォーム</li>
            <li>その他</li>
        </ul>
    </header>

    <main>
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            <br>
            <form method="post" action="insert.php">
                <br>
                <div class="nyuuryoku">入力フォーム</div>
                <br>
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="text" size="35" name="handlename">
                </div>
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>
                <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols="75" rows="7" name="comments"></textarea>
                </div>
                <div>
                    <input type="submit" class="submit" value="送信する">
                </div>
            </form>

            <?php
            mb_internal_encoding("utf8");
            $pdo = new PDO ("mysql:dbname=lesson01;host=localhost;","root","");
            $stmt = $pdo->query("select*from 4each_keijiban");

            while ($row = $stmt->fetch()) {

                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div clss='comments'>";
                echo $row['comments'];
                echo "<div class ='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>

        </div>
        <div class="right">
            <h2>人気の記事</h2>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP myadminの使い方</li>
                    <li>いま人気のエディタtop５</li>
                    <li>HTMLの基礎</li>
                </ul>
            <h2>オススメリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XMAPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
            <h2>カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript<li>
                </ul>
        </div>
    </main>

    <footer>
        copyright@internous|4each blog the which provides A to Z about programming.
    </footer>

</body>
</html>
