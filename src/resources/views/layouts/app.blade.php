<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RealEstate Co. | 不動産会社サイト</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="{{ route('home') }}">RealEstate Co.</a>
        </div>
        <nav class="nav">
                <ul>
                    <li><a href="{{ url('/#about') }}">私たちについて</a></li>
                    <li><a href="{{ route('services') }}">事業内容</a></li>
                    <li><a href="{{ route('contact') }}">お問い合わせ</a></li>
                </ul>
            </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        © 2025 RealEstate Co.
    </footer>
</body>
</html>
