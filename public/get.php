<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETメソッドのデータ</title>
</head>

<body>
    <h4><!-- ここに"出席番号 名前"を入れてください --></h4>
    <p>GETメソッドで送られてきたパラメータ名dataの値は、
        <?php
        echo $_GET['data'] . " です。</p>";
        ?>
</body>

</html>