<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SALLY141 Learning') - SALLY141 Learning</title>
    <link rel="stylesheet" href="/css/prototype.css">
</head>
<body>
    <div class="proto-badge">PROTOTYPE</div>

    {{-- ヘッダー --}}
    <header class="front-header">
        <a href="{{ route('front.top') }}" class="logo">SALLY141<span>Learning</span></a>
        <nav>
            <a href="{{ route('front.styles.index') }}" class="{{ request()->routeIs('front.styles.*') ? 'active' : '' }}">&#128247; スタイル</a>
            <a href="{{ route('front.videos.index') }}" class="{{ request()->routeIs('front.videos.*') ? 'active' : '' }}">動画</a>
            <a href="{{ route('front.courses.index') }}" class="{{ request()->routeIs('front.courses.*') ? 'active' : '' }}">コース</a>
            <a href="{{ route('front.instructors.index') }}" class="{{ request()->routeIs('front.instructors.*') || request()->routeIs('front.influencer.*') ? 'active' : '' }}">&#11088; 特別講師</a>
            <a href="{{ route('front.events.index') }}" class="{{ request()->routeIs('front.events.*') ? 'active' : '' }}">イベント</a>
        </nav>
        <div class="user-menu">
            <a href="{{ route('front.search') }}" style="color:#ccc;font-size:18px;">&#128269;</a>
            <a href="{{ route('front.mypage') }}"><div class="avatar">U</div></a>
        </div>
    </header>

    {{-- 画面情報 --}}
    @hasSection('screen-info')
    <div class="screen-info">
        @yield('screen-info')
    </div>
    @endif

    {{-- メインコンテンツ --}}
    <main>
        @yield('content')
    </main>

    {{-- モバイル用ボトムナビ --}}
    <nav class="bottom-nav">
        <ul>
            <li><a href="{{ route('front.top') }}" class="{{ request()->routeIs('front.top') ? 'active' : '' }}"><span class="nav-icon">&#127968;</span>ホーム</a></li>
            <li><a href="{{ route('front.courses.index') }}" class="{{ request()->routeIs('front.courses.*') ? 'active' : '' }}"><span class="nav-icon">&#128218;</span>コース</a></li>
            <li><a href="{{ route('front.videos.index') }}" class="{{ request()->routeIs('front.videos.*') ? 'active' : '' }}"><span class="nav-icon">&#9654;</span>動画</a></li>
            <li><a href="{{ route('front.progress') }}" class="{{ request()->routeIs('front.progress') ? 'active' : '' }}"><span class="nav-icon">&#128200;</span>進捗</a></li>
            <li><a href="{{ route('front.mypage') }}" class="{{ request()->routeIs('front.mypage') ? 'active' : '' }}"><span class="nav-icon">&#128100;</span>マイページ</a></li>
        </ul>
    </nav>

    {{-- 遷移ガイド --}}
    @hasSection('page-nav')
    <div class="page-nav">
        @yield('page-nav')
    </div>
    @endif

    {{-- ========================================= --}}
    {{-- 課金誘導モーダル（共通コンポーネント） --}}
    {{-- ========================================= --}}
    <div class="modal-backdrop" id="premiumModal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-icon">&#128274;</div>
                <h2>この動画は有料会員限定です</h2>
                <p>月額プランに登録して、すべての動画を学び放題に。</p>
            </div>
            <div class="modal-body">
                <div class="price-display">
                    <div class="price">&#165;770<span>/月（税込）</span></div>
                </div>
                <ul class="feature-list">
                    <li>全動画コンテンツが見放題</li>
                    <li>学習進捗・修了バッジ機能</li>
                    <li>オフラインイベントへの申込</li>
                    <li>いつでも解約OK・縛りなし</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="{{ route('front.plan') }}" class="btn btn-primary btn-lg btn-block">今すぐ有料会員になる</a>
                <button class="modal-close" onclick="closePremiumModal()">あとで検討する</button>
            </div>
        </div>
    </div>

    <script>
    function openPremiumModal() {
        document.getElementById('premiumModal').classList.add('show');
        document.body.style.overflow = 'hidden';
    }
    function closePremiumModal() {
        document.getElementById('premiumModal').classList.remove('show');
        document.body.style.overflow = '';
    }
    document.getElementById('premiumModal').addEventListener('click', function(e) {
        if (e.target === this) closePremiumModal();
    });
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closePremiumModal();
    });
    // .card-locked クラスのカード/リンクをクリックするとモーダル表示
    document.addEventListener('click', function(e) {
        var locked = e.target.closest('.card-locked');
        if (locked) { e.preventDefault(); openPremiumModal(); }
    });
    </script>
</body>
</html>
