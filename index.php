
<link rel="stylesheet" href="style.css">

<?php

$lucky = array('大吉','中吉','小吉','吉',);
$result =$lucky[rand(0,count($lucky)-1)];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おみくじ</title>

</head>
<body>
<div class="luck">
    <h1>おみくじ</h1>
    <p>あなたの今日の運勢は　<span>[<?php echo $result; ?>]</span>です。</p>
</div>
</body>

</html>