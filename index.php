<?php
    require_once 'questionnaireForm.php';
    $questionnaireForm = new questionnaireForm;
    $questionnaireForm -> insertCsv();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>アンケートフォーム</title>
</head>
<body>

<h2>アンケートフォーム</h2>
<form method="POST" action="">
    <div>
        <label for="q1">Q1 どなたLTが面白かったですか。</label>
        <p><input type="radio" name="q1" value="A">A 田中さん</p>
        <p><input type="radio" name="q1" value="B">B 山田さん</p>
        <p><input type="radio" name="q1" value="C">C 橋下さん</p>
    </div>
    <div>
        <label for="q2">Q2 どなたLTが勉強になりましたか。</label>
        <p><input type="radio" name="q2" value="A">A 田中さん</p>
        <p><input type="radio" name="q2" value="B">B 山田さん</p>
        <p><input type="radio" name="q2" value="C">C 橋下さん</p>
    </div>
    <div>
        <label for="q3">Q3 もう一度聞きたいLTはどなたですか。</label>
        <p><input type="radio" name="q3" value="A">A 田中さん</p>
        <p><input type="radio" name="q3" value="B">B 山田さん</p>
        <p><input type="radio" name="q3" value="C">C 橋下さん</p>
    </div>
    <input type="submit" value="送信">
</form>

<h2>全体結果表示</h2>

<p>Q1<span> A 5票</span><span> B 3票</span><span> C 2票</span></p>
<p>Q2<span> A 5票</span><span> B 3票</span><span> C 2票</span></p>
<p>Q3<span> A 5票</span><span> B 3票</span><span> C 2票</span></p>
