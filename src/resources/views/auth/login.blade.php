<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインページ</title>
</head>
<body>
    <h1>ログインページです。</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">メールアドレス</label>
            <input type="email" name="email" required autofocus>
        </div>

        <div>
            <label for="password">パスワード</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">ログイン</button>
        @if ($errors->any())
        <div style="color:red;">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
    </form>
</body>
</html>