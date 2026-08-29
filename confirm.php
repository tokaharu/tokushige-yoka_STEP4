<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力内容確認</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"]==="POST") {
  $name=$_POST["name"];
  $age=$_POST["age"];
  $tell=$_POST["tell"];
  $mail=$_POST["mail"];
  $address=$_POST["address"];
  $question=$_POST["question"];
  $gender=$_POST["gender"];

 $errors = [];

  if (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z\s]+$/u",$name)) {
    $errors[]= "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
  }

  if (!is_numeric($age) || $age < 0 || $age > 150) {
    $errors[]= "<p>年齢は0から150の間で入力してください。</p>";
  }

  if (!preg_match("/^[0-9\-]+$/",$tell)) {
    $errors[]= "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
  }

  if (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
    $errors[]= "<p>メールアドレスの形式が正しくありません。</p>";
  }

  if (!preg_match("/^[ぁ-んァ-ヶ一-龠a-zA-Z0-9\-]+$/u",$address)) {
    $errors[]= "<p>住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。</p>";
  }

  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo $error;
    }
    exit;
  }
  echo "<h2>入力内容</h2>";
  echo "<p>名前：" . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
  echo "<p>年齢：" . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . "</p>";
  echo "<p>電話番号：" . htmlspecialchars($tell, ENT_QUOTES, 'UTF-8') . "</p>";
  echo "<p>メールアドレス：" . htmlspecialchars($mail, ENT_QUOTES, 'UTF-8') . "</p>";
  echo "<p>住所：" . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "</p>";
  echo "<p>質問：" . htmlspecialchars($question, ENT_QUOTES, 'UTF-8') . "</p>";
  echo "<p>性別：" . htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') . "</p>";

}
?>
</body>
</html>
