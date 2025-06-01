<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
            if ($order) {
                echo "昇順にソートします。" . PHP_EOL;
                sort($array); // 昇順ソート
        } else {
            echo "降順にソートします。" . PHP_EOL;
            rsort($array); // 降順ソート
        }

    foreach ($array as $value) {
        echo $value . PHP_EOL;
    }
}

// 使用例
$nums = [15, 4, 18, 23, 10];

sort_2way($nums, true);   // 昇順ソートの実行
sort_2way($nums, false);  // 降順ソートの実行
?>

    </p>
</body>

</html>