<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css" />
    <title>Document</title>
</head>
<body>

<?php
$form = $_POST['form'];
if($form == "グー"){

$num = mt_rand(0,2);
    $remainder=$num;
    switch ($remainder) {
        case 0:
            echo'<h1>コンピューターはチョキ</h1>'."<br>";
            echo'<h1>あなたの勝ちです</h1>'."<br>";
            echo'<p><img src="img/pose_win_boy.png"></p>'."<br>";
            break;
        
        case 1:
            echo'<h1>コンピューターはグー</h1>'."<br>";
            echo'<h1>引き分けです</h1>'."<br>";
            break;
            
        default:
            echo'<h1>コンピューターはパー</h1>'."<br>";
            echo'<h1>あなたの敗けです</h1>'."<br>";
            echo'<p><img src="img/pose_lose_boy.png"></p>'."<br>";
            break;
    }
}elseif($form == "チョキ"){

    $num = mt_rand(0,2);
    $remainder=$num;
    switch ($remainder) {
        case 0:
            echo'<h1>コンピューターはパー</h1>'."<br>";
            echo'<h1>あなたの勝ちです</h1>'."<br>";
            echo'<p><img src="img/pose_win_boy.png"></p>'."<br>";
            break;
        
        case 1:
            echo'<h1>コンピューターはチョキ</h1>'."<br>";
            echo'<h1>引き分けです</h1>'."<br>";
            break;
            
        default:
            echo'<h1>コンピューターはグー</h1>'."<br>";
            echo'<h1>あなたの敗けです</h1>'."<br>";
            echo'<p><img src="img/pose_lose_boy.png"></p>'."<br>";
            break;
    }
}elseif($form == "パー"){

    $num = mt_rand(0,2);
    $remainder=$num;
    switch ($remainder) {
        case 0:
            echo'<h1>コンピューターはグー</h1>'."<br>";
            echo'<h1>あなたの勝ちです</h1>'."<br>";
            echo'<p><img src="img/pose_win_boy.png"></p>'."<br>";
            break;
        
        case 1:
            echo'<h1>コンピューターはパー</h1>'."<br>";
            echo'<h1>引き分けです</h1>'."<br>";
            break;
            
        default:
            echo'<h1>コンピューターはチョキ</h1>'."<br>";
            echo'<h1>あなたの敗けです</h1>'."<br>";
            echo'<p><img src="img/pose_lose_boy.png"></p>'."<br>";
            break;
    }
}else {
    echo'<h1>ちゃんと選んでね</h1>'."<br>";
}

?>

    <h1>あなたが選んだのは：<?=$form?></h1>
</body>