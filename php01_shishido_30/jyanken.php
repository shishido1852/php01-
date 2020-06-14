<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>じゃんけんゲーム</title>
</head>
<body>
<h1>じゃんけんゲーム</h1>
<p class="p_text">何を出すか決めてください</p>
<div class="cp_ipselect cp_sl04">
<form action="jyanken_post2.php" method="post">
<select name="form" id="select_box">
<option value=""　hidden>choose</option>   
<option value="グー">グー</option>
<option value="チョキ">チョキ</option>
<option value="パー">パー</option>
</select>
</div>
<div class="submit_style"><input type="submit" value="送信" class="button"></div>
</form>
</body>
</html>