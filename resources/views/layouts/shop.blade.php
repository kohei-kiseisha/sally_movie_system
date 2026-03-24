<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - 店舗管理</title>
    <link rel="stylesheet" href="/css/prototype.css">
</head>
<body>
    <div class="proto-badge">PROTOTYPE</div>

    <div class="admin-layout">
        {{-- サイドバー --}}
        <aside class="sidebar">
            <div class="sidebar-logo">
                SALLY141<br>
                <small>店舗管理画面</small>
            </div>
            <nav>
                <a href="{{ route('shop.dashboard') }}" class="{{ request()->routeIs('shop.dashboard') ? 'active' : '' }}">&#128202; ダッシュボード</a>

                <div class="sidebar-section">メンバー管理</div>
                <a href="{{ route('shop.members.index') }}" class="{{ request()->routeIs('shop.members.*') ? 'active' : '' }}">&#128101; メンバー一覧</a>
                <a href="{{ route('shop.invite') }}" class="{{ request()->routeIs('shop.invite') ? 'active' : '' }}">&#128233; メンバー招待</a>

                <div class="sidebar-section">管理</div>
                <a href="{{ route('shop.events') }}" class="{{ request()->routeIs('shop.events') ? 'active' : '' }}">&#128197; イベント参加状況</a>
                <a href="{{ route('shop.subscription') }}" class="{{ request()->routeIs('shop.subscription') ? 'active' : '' }}">&#128179; 契約管理</a>
                <a href="{{ route('shop.settings') }}" class="{{ request()->routeIs('shop.settings') ? 'active' : '' }}">&#9881; 店舗設定</a>
            </nav>
        </aside>

        <main class="admin-main">
            @hasSection('screen-info')
            <div class="screen-info">
                @yield('screen-info')
            </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
