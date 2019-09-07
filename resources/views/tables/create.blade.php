<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tables Create</title>
</head>
<body>
<form method="post" action="{{ route('tables.store') }}">
    @csrf
    <input type="text" name="name" placeholder="テーブル名を入力してください">
    <input type="submit" value="作成する">
</form>
</body>
</html>
