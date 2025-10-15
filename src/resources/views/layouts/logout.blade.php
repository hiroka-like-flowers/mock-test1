<!-- 共通部分 -->
<!DOCTYPE html>
<html lang="ja">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>


<body>
    <div class="app">
        <header class="header">
            <div class="header__inner">
                <span class="header__heading">
                    <img src="storage/app/public/items/logo.sng" alt="coachtechフリマ" class="header__logo" />
                </span>
                <div class="search-box">
                    <form class="search-form">
                        <input class="search-form__item" type="text" name="keyword" placeholder="なにをお探しですか？" />
                    </form>
                </div>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__list-item">
                            <form class="header__form">
                                <button class="header__form--login">ログイン</button>
                            </form>
                        </li>
                        <li class="header__list-item">
                            <form class="header__form">
                                <button class="header__form--mypage">マイページ</button>
                            </form>
                        </li>
                        <li class="header__list-item">
                            <form class="header__form">
                                <button class="header__form--listing">出品</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>


</html>