<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETメソッドのデータ</title>
</head>

<body>
    <h4><!-- ここに"出席番号 名前"を入れてください --></h4>
    GETメソッドで送られてきた複数のデータを受け取る。<br>
        <?php
        echo "出席番号:" . $_GET['course'] . $_GET['class'] . $_GET['number'] . "、氏名:" . $_GET['name'];

        //追加
        echo '<br>';
        var_dump($_GET);
        ?>
</body>

</html>