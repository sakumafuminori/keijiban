<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php

    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
    $stmt = $pdo->query("select * from 4each_keijiban");

    ?>

    <img src="4eachblog_logo.jpg">

<header>
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>

</header>

<main>
    <div class="maincontents">

        <div class="left_block">

            <h2>プログラミングに役立つ掲示板</h2>

                <form method="post" action="insert.php">
                    <h3>入力フォーム</h3>
                    <p>ハンドルネーム<br>
                    <input type="text" name="handlename" size="40"></p>
                    <p>タイトル<br>
                    <input type="text" name="title" size="40"></p>
                    <p>コメント<br>
                    <textarea name="comments" rows="7" cols="60"></textarea></p>
                    <div class="button">
                        <input type="submit" value="投稿する">
                    </div>
                </form>

                <?php

                while ($row = $stmt->fetch()) {

                echo "<div class='hyouji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<p>".$row['comments']."</p>";
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                }

                ?>

        </div>

        <div class="right_block">

        <div class="ninkinokiji">
            <h3>人気の記事</h3>
            <p>PHPオススメ本</p>
            <p>PHP MyAdimn使い方</p>
            <p>今人気のエディター Top5</p>
            <p>HTMLの基礎</p>
        </div>

        <div class="osusumerinku">
            <h3>オススメリンク</h3>
            <p>インターノウス株式会社</p>
            <p>XAMPPのダウンロード</p>
            <p>Eclipseのダウンロード</p>
            <p>Braketsのダウンロード</p>
        </div>

        <div class="category">
            <h3>カテゴリ</h3>
            <p>HTML</p>
            <p>PHP</p>
            <p>MySQL</p>
            <P>JavaScript</P>
        </div>

    </div>
</div>        
</main>

<footer>
    <div class="box2">
        copyright © internous | 4each blog the which provides A to Z about programming.
    </div>
</footer>
</body>
</html>
