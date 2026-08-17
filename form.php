<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>フォーム</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>フォーム入力</h1>
  <form action="confirm.php" method="post">
    <label for="name">名前：</label>
    <input type="text" id="name" name="name" placeholder="例）田中　太郎"><br><br>

    <label for="age">年齢：</label>
    <input type="number" id="age" name="age" placeholder="例）20"><br><br>

    <label for="tell">電話番号：</label>
    <input type="text" id="tell" name="tell" placeholder="例）000-0000-0000 or 00000000000"><br><br>

    <label for="mail">メールアドレス：</label>
    <input type="email" id="mail" name="mail" placeholder="例）〇〇@gmail.com"><br><br>

    <label for="address">住所：</label>
    <input type="text" id="address" name="address" placeholder="都道府県から入力してください。"><br><br>

    <label for="question">質問：</label>
    <input type="text" id="question" name="question" placeholder="ご質問を入力してください。"><br><br>

    <label for="gender">性別：</label>
    <select name="gender" id="gender">
      <option value="選択してください">選択してください</option>
      <option value="男性">男性</option>
      <option value="女性">女性</option>
      <option value="その他">その他</option>
    </select>

    <button type="submit">送信</button>

  </form>
</body>
</html>
