<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>

 <?php
// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10];

// sort_2way関数を定義
function sort_2way($array, $order) {
    if ($order) {
        sort($array);   // TRUEなら昇順
    } else {
        rsort($array);  // FALSEなら降順
    }
    return $array;      // ソート後の配列を返す
}

$nums = sort_2way($nums, TRUE);
echo "昇順にソートします<br>";
foreach ($nums as $num) {
    echo $num . "<br>";
}

// 降順
$nums = sort_2way($nums, FALSE);
echo "<br>降順にソートします<br>";
foreach ($nums as $num) {
    echo $num . "<br>";
}
?>
    </p>
</body>
</html>