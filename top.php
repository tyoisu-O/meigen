<?php
$meigen = '迷言と捉えるのが悪い。私は普通のことを言っている。';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="meigen.css">
    <script type="text/javascript" src="top.js"></script>
    <title>迷言カレンダー</title>
</head>
<body>
    <header>
        <h1>迷言カレンダー</h1>
        <h2>in今野研究室</h2>
    </header>
    <div class = "main">
        <div class = "meigen_word"><?php echo $meigen; ?></div>
    </div>
    <div class = "controller">
        <input type="button" value="迷言" onclick="pickup('<?php echo $meigen; ?>')">
    </div>
</body>
</html>