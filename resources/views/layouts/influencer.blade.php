<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SALLY141 インフルエンサー管理</title>
    <link rel="stylesheet" href="/css/prototype.css">
</head>
<body>
    <div class="proto-badge">PROTOTYPE</div>

    <div class="admin-layout">
        <aside class="sidebar">
            <div class="sidebar-logo">
                SALLY141<br>
                <small>インフルエンサー管理</small>
            </div>
            <div style="padding:16px 20px;border-bottom:1px solid #5C4F44;">
                <div style="display:flex;align-items:center;gap:10px;">
                    <div style="width:40px;height:40px;border-radius:50%;overflow:hidden;">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&h=80&fit=crop&crop=face" alt="Akiko" style="width:100%;height:100%;object-fit:cover;">
                    </div>
                    <div>
                        <div style="font-size:14px;font-weight:700;color:#fff;">Akiko Style</div>
                        <div style="font-size:11px;color:#9B8E82;">インフルエンサー</div>
                    </div>
                </div>
            </div>
            <nav>
                <a href="{{ route('influencer.dashboard') }}" class="{{ request()->routeIs('influencer.dashboard') ? 'active' : '' }}">&#128202; ダッシュボード</a>

                <div class="sidebar-section">収益</div>
                <a href="{{ route('influencer.referrals') }}" class="{{ request()->routeIs('influencer.referrals') ? 'active' : '' }}">&#128279; 紹介URL管理</a>
                <a href="{{ route('influencer.courses') }}" class="{{ request()->routeIs('influencer.courses') ? 'active' : '' }}">&#128200; コース売上確認</a>

                <div class="sidebar-section">設定</div>
                <a href="{{ route('influencer.profile') }}" class="{{ request()->routeIs('influencer.profile') ? 'active' : '' }}">&#128100; プロフィール編集</a>
                <a href="{{ route('influencer.payout_settings') }}" class="{{ request()->routeIs('influencer.payout_settings') ? 'active' : '' }}">&#127974; 振込先設定</a>
                <a href="{{ route('front.influencer.show', 1) }}">&#128065; 公開ページを見る</a>
            </nav>
        </aside>

        <main class="admin-main">
            @hasSection('screen-info')
            <div class="screen-info">@yield('screen-info')</div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
