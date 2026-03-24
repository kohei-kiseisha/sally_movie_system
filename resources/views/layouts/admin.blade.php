<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SALLY141 管理画面</title>
    <link rel="stylesheet" href="/css/prototype.css">
</head>
<body>
    <div class="proto-badge">PROTOTYPE</div>

    <div class="admin-layout">
        {{-- サイドバー --}}
        <aside class="sidebar">
            <div class="sidebar-logo">
                SALLY141<br>
                <small>運営管理画面</small>
            </div>
            <nav>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">&#128202; ダッシュボード</a>

                <div class="sidebar-section">コンテンツ管理</div>
                <a href="{{ route('admin.videos.index') }}" class="{{ request()->routeIs('admin.videos.*') ? 'active' : '' }}">&#127909; 動画管理</a>
                <a href="{{ route('admin.courses.index') }}" class="{{ request()->routeIs('admin.courses.*') ? 'active' : '' }}">&#128218; コース管理</a>
                <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">&#128193; カテゴリー管理</a>

                <div class="sidebar-section">ユーザー・店舗</div>
                <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">&#128101; ユーザー管理</a>
                <a href="{{ route('admin.organizations.index') }}" class="{{ request()->routeIs('admin.organizations.*') ? 'active' : '' }}">&#127970; 店舗管理</a>

                <div class="sidebar-section">売上・契約</div>
                <a href="{{ route('admin.subscriptions.index') }}" class="{{ request()->routeIs('admin.subscriptions.*') ? 'active' : '' }}">&#128179; 契約管理</a>
                <a href="{{ route('admin.events.index') }}" class="{{ request()->routeIs('admin.events.*') ? 'active' : '' }}">&#128197; イベント管理</a>
                <a href="{{ route('admin.influencers.index') }}" class="{{ request()->routeIs('admin.influencers.*') ? 'active' : '' }}">&#11088; インフルエンサー</a>

                <div class="sidebar-section">システム</div>
                <a href="{{ route('admin.admins.index') }}" class="{{ request()->routeIs('admin.admins.*') ? 'active' : '' }}">&#128272; 管理者管理</a>
            </nav>
        </aside>

        {{-- メインコンテンツ --}}
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
