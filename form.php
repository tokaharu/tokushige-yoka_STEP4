<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>フォーム</title>
  <link rel="stylesheet" href="style.php">
</head>
<body>
  <h1>フォーム入力</h1>
  <form action="confirm.php" method="post">
    <label for="name">名前：</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="age">年齢：</label>
    <input type="number" id="age" name="age"><br><br>

    <label for="tell">電話番号：</label>
    <input type="number" id="tell" name="tell"><br><br>

    <label for="mail">メールアドレス：</label>
    <input type="email" id="mail" name="mail"><br><br>

    <label for="address">住所：</label>
    <input type="text" id="address" name="address"><br><br>

    <label for="question">質問：</label>
    <input type="text" id="question" name="question"><br><br>

    <label for="gender">性別：</label>
    <select name="gender" id="gender">
      <option value="male">男性
      </option>
      <option value="female">女性</option>
    </select>

    <button type="submit">送信</button>

  </form>
</body>
</html>
