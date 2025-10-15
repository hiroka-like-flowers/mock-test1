<!-- 共通部分 -->
<!DOCTYPE html>
<html lang="ja">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
    @yield('css')
</head>


<body>
    <div class="app">
        <header class="header">
            <div class="header__inner">
                <span class="header__heading">
                    <img src="storage/app/public/items/logo.sng" alt="coachtechフリマ" class="header__logo" />
                </span>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>


</html>