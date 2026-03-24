@extends('layouts.front')
@section('title', '完成写真から学ぶ')
@section('screen-info')
<strong>F-24: スタイル一覧</strong> ― 完成ヘアスタイル写真のギャラリー。「こんな髪型を作りたい！」から逆引きで作り方動画を見つけられる。
@endsection

@section('content')
<div class="section">
    <div style="margin-bottom:8px;">
        <div class="section-title" style="margin-bottom:4px;">&#128247; 完成写真から学ぶ</div>
        <p style="font-size:14px;color:#6B5D52;margin-bottom:0;">気になるスタイルをタップすると、作り方動画が見られます。</p>
    </div>

    <div style="display:flex;gap:12px;margin-bottom:20px;font-size:13px;align-items:center;">
        <span class="badge badge-free">&#9989; 無料</span>
        <span class="badge badge-premium">&#128274; 有料会員限定</span>
    </div>

    {{-- 髪の長さタブ --}}
    <div class="tabs">
        <div class="tab active" data-tab="style-all">すべて</div>
        <div class="tab" data-tab="style-short">ショート</div>
        <div class="tab" data-tab="style-medium">ミディアム</div>
        <div class="tab" data-tab="style-long">ロング</div>
    </div>

    <div class="tag-list" style="margin-bottom:20px;">
        <span class="tag active" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">すべて</span>
        <span class="tag" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">ダウンスタイル</span>
        <span class="tag" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">アップスタイル</span>
        <span class="tag" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">ハーフアップ</span>
        <span class="tag" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">ポニー</span>
        <span class="tag" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">編みおろし</span>
        <span class="tag" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">韓国系</span>
        <span class="tag" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">シニヨン</span>
    </div>

    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
        <div style="font-size:13px;color:#9B8E82;">18 スタイル</div>
        <select class="form-input" style="width:auto;padding:6px 12px;font-size:13px;">
            <option>おすすめ順</option>
            <option>視聴回数が多い順</option>
            <option>新着順</option>
        </select>
    </div>

    @php
    // Unsplash images — hair/beauty photos (free to use)
    $photos = [
        'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=400&h=530&fit=crop',   // 1 wave down
        'https://images.unsplash.com/photo-1519699047748-de8e457a634e?w=400&h=300&fit=crop',   // 2 half up
        'https://images.unsplash.com/photo-1595959183082-7b570b7e1e6b?w=400&h=530&fit=crop',   // 3 chignon
        'https://images.unsplash.com/photo-1554519934-e32b1629d9ee?w=400&h=400&fit=crop',      // 4 korean
        'https://images.unsplash.com/photo-1605980776566-0486c3b394f8?w=400&h=530&fit=crop',   // 5 braid
        'https://images.unsplash.com/photo-1634449571010-02389ed0f9b0?w=400&h=300&fit=crop',   // 6 short bob
        'https://images.unsplash.com/photo-1580618672591-eb180b1a973f?w=400&h=530&fit=crop',   // 7 low ponytail
        'https://images.unsplash.com/photo-1523263685509-7c200ecda958?w=400&h=400&fit=crop',   // 8 fishbone
        'https://images.unsplash.com/photo-1492106087820-71f1a00d2b11?w=400&h=300&fit=crop',   // 9 medium korean
        'https://images.unsplash.com/photo-1541795795328-f073b763494e?w=400&h=400&fit=crop',   // 10 mix curl
        'https://images.unsplash.com/photo-1596178060810-72f53ce9a65c?w=400&h=530&fit=crop',   // 11 loose updo
        'https://images.unsplash.com/photo-1620122830784-c29a955dc02e?w=400&h=300&fit=crop',   // 12 short flip
        'https://images.unsplash.com/photo-1504703395950-b89145a5425b?w=400&h=300&fit=crop',   // 13 mid ponytail
        'https://images.unsplash.com/photo-1562004760-aceed7bb0fe3?w=400&h=530&fit=crop',      // 14 rope half
        'https://images.unsplash.com/photo-1597223557154-721c1cecc4b0?w=400&h=400&fit=crop',   // 15 reverse down
        'https://images.unsplash.com/photo-1615840287214-7ff58936c4cf?w=400&h=530&fit=crop',   // 16 3braid chignon
        'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=400&h=300&fit=crop',   // 17 tight ponytail
        'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=400&fit=crop',      // 18 wave bob
    ];

    $styles = [
        ['name'=>'ナチュラルウェーブダウン','length'=>'ロング','cat'=>'ダウンスタイル','views'=>3850,'free'=>true,'shape'=>'tall','rank'=>1],
        ['name'=>'ゆるふわハーフアップ','length'=>'ミディアム','cat'=>'ハーフアップ','views'=>3200,'free'=>true,'shape'=>'wide','rank'=>2],
        ['name'=>'大人シニヨン','length'=>'ロング','cat'=>'シニヨン','views'=>2980,'free'=>false,'shape'=>'tall','rank'=>3],
        ['name'=>'韓国風ヨシンモリ','length'=>'ロング','cat'=>'韓国系','views'=>2750,'free'=>false,'shape'=>'square','rank'=>4],
        ['name'=>'編みおろしツイン','length'=>'ロング','cat'=>'編みおろし','views'=>2500,'free'=>false,'shape'=>'tall','rank'=>5],
        ['name'=>'ショートボブアレンジ','length'=>'ショート','cat'=>'ダウンスタイル','views'=>2400,'free'=>true,'shape'=>'wide','rank'=>6],
        ['name'=>'ローポニーテール','length'=>'ロング','cat'=>'ポニー','views'=>2200,'free'=>false,'shape'=>'tall','rank'=>null],
        ['name'=>'フィッシュボーン編みおろし','length'=>'ロング','cat'=>'編みおろし','views'=>2100,'free'=>false,'shape'=>'square','rank'=>null],
        ['name'=>'ミディアムカチモリ','length'=>'ミディアム','cat'=>'韓国系','views'=>1950,'free'=>false,'shape'=>'wide','rank'=>null],
        ['name'=>'ミックス巻きダウン','length'=>'ミディアム','cat'=>'ダウンスタイル','views'=>1800,'free'=>false,'shape'=>'square','rank'=>null],
        ['name'=>'ルーズアップスタイル','length'=>'ロング','cat'=>'アップスタイル','views'=>1750,'free'=>false,'shape'=>'tall','rank'=>null],
        ['name'=>'ショートヘアの外ハネ','length'=>'ショート','cat'=>'ダウンスタイル','views'=>1600,'free'=>true,'shape'=>'wide','rank'=>null],
        ['name'=>'ミドルポニー（カールベース）','length'=>'ミディアム','cat'=>'ポニー','views'=>1500,'free'=>false,'shape'=>'wide','rank'=>null],
        ['name'=>'ロープ編みハーフアップ','length'=>'ロング','cat'=>'ハーフアップ','views'=>1450,'free'=>false,'shape'=>'tall','rank'=>null],
        ['name'=>'リバースダウンスタイル','length'=>'ロング','cat'=>'ダウンスタイル','views'=>1350,'free'=>false,'shape'=>'square','rank'=>null],
        ['name'=>'3つ編みシニヨン','length'=>'ロング','cat'=>'シニヨン','views'=>1200,'free'=>false,'shape'=>'tall','rank'=>null],
        ['name'=>'タイトポニー','length'=>'ロング','cat'=>'ポニー','views'=>1100,'free'=>false,'shape'=>'wide','rank'=>null],
        ['name'=>'ウェーブボブ','length'=>'ショート','cat'=>'ダウンスタイル','views'=>1050,'free'=>false,'shape'=>'square','rank'=>null],
    ];
    @endphp

    {{-- TAB: すべて --}}
    <div class="tab-panel active" id="style-all">
        <div class="style-gallery">
            @foreach ($styles as $i => $s)
            <a href="{{ $s['free'] ? route('front.styles.show', $i+1) : '#' }}"
               class="style-card {{ $s['shape'] }} {{ $s['free'] ? '' : 'card-locked' }}">
                <div class="style-photo">
                    <img src="{{ $photos[$i] }}" alt="{{ $s['name'] }}" style="width:100%;height:100%;object-fit:cover;display:block;">
                    @if ($s['rank'])
                    <span class="style-rank">{{ $s['rank'] }}</span>
                    @endif
                    @unless ($s['free'])
                    <div class="lock-overlay">
                        <span>&#128274;</span>
                        <span class="lock-text">有料</span>
                    </div>
                    @endunless
                </div>
                <div class="style-info">
                    <div class="style-name">{{ $s['name'] }}</div>
                    <div class="style-meta">
                        <span>{{ $s['length'] }}</span>
                        <span>{{ $s['cat'] }}</span>
                        <span>&#128065; {{ number_format($s['views']) }}</span>
                    </div>
                    <div style="margin-top:6px;">
                        @if ($s['free'])
                            <span class="badge badge-free">&#9989; 無料</span>
                        @else
                            <span class="badge badge-premium">&#128274; 有料</span>
                        @endif
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    {{-- TAB: ショート --}}
    <div class="tab-panel" id="style-short" style="display:none;">
        <div class="style-gallery">
            @foreach ($styles as $i => $s)
                @if ($s['length'] === 'ショート')
                <a href="{{ $s['free'] ? route('front.styles.show', $i+1) : '#' }}"
                   class="style-card {{ $s['shape'] }} {{ $s['free'] ? '' : 'card-locked' }}">
                    <div class="style-photo">
                        <img src="{{ $photos[$i] }}" alt="{{ $s['name'] }}" style="width:100%;height:100%;object-fit:cover;display:block;">
                        @unless ($s['free'])<div class="lock-overlay"><span>&#128274;</span><span class="lock-text">有料</span></div>@endunless
                    </div>
                    <div class="style-info">
                        <div class="style-name">{{ $s['name'] }}</div>
                        <div class="style-meta"><span>ショート</span><span>{{ $s['cat'] }}</span><span>&#128065; {{ number_format($s['views']) }}</span></div>
                        <div style="margin-top:6px;">@if ($s['free'])<span class="badge badge-free">&#9989; 無料</span>@else<span class="badge badge-premium">&#128274; 有料</span>@endif</div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </div>

    {{-- TAB: ミディアム --}}
    <div class="tab-panel" id="style-medium" style="display:none;">
        <div class="style-gallery">
            @foreach ($styles as $i => $s)
                @if ($s['length'] === 'ミディアム')
                <a href="{{ $s['free'] ? route('front.styles.show', $i+1) : '#' }}"
                   class="style-card {{ $s['shape'] }} {{ $s['free'] ? '' : 'card-locked' }}">
                    <div class="style-photo">
                        <img src="{{ $photos[$i] }}" alt="{{ $s['name'] }}" style="width:100%;height:100%;object-fit:cover;display:block;">
                        @unless ($s['free'])<div class="lock-overlay"><span>&#128274;</span><span class="lock-text">有料</span></div>@endunless
                    </div>
                    <div class="style-info">
                        <div class="style-name">{{ $s['name'] }}</div>
                        <div class="style-meta"><span>ミディアム</span><span>{{ $s['cat'] }}</span><span>&#128065; {{ number_format($s['views']) }}</span></div>
                        <div style="margin-top:6px;">@if ($s['free'])<span class="badge badge-free">&#9989; 無料</span>@else<span class="badge badge-premium">&#128274; 有料</span>@endif</div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </div>

    {{-- TAB: ロング --}}
    <div class="tab-panel" id="style-long" style="display:none;">
        <div class="style-gallery">
            @foreach ($styles as $i => $s)
                @if ($s['length'] === 'ロング')
                <a href="{{ $s['free'] ? route('front.styles.show', $i+1) : '#' }}"
                   class="style-card {{ $s['shape'] }} {{ $s['free'] ? '' : 'card-locked' }}">
                    <div class="style-photo">
                        <img src="{{ $photos[$i] }}" alt="{{ $s['name'] }}" style="width:100%;height:100%;object-fit:cover;display:block;">
                        @if ($s['rank'])<span class="style-rank">{{ $s['rank'] }}</span>@endif
                        @unless ($s['free'])<div class="lock-overlay"><span>&#128274;</span><span class="lock-text">有料</span></div>@endunless
                    </div>
                    <div class="style-info">
                        <div class="style-name">{{ $s['name'] }}</div>
                        <div class="style-meta"><span>ロング</span><span>{{ $s['cat'] }}</span><span>&#128065; {{ number_format($s['views']) }}</span></div>
                        <div style="margin-top:6px;">@if ($s['free'])<span class="badge badge-free">&#9989; 無料</span>@else<span class="badge badge-premium">&#128274; 有料</span>@endif</div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </div>
</div>

<script>
document.querySelectorAll('.tabs .tab').forEach(tab => {
    tab.addEventListener('click', () => {
        tab.closest('.tabs').querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        document.querySelectorAll('.tab-panel').forEach(p => p.style.display = 'none');
        document.getElementById(tab.dataset.tab).style.display = 'block';
    });
});
</script>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.styles.show', 1) }}">スタイル詳細 (F-25)</a> |
<a href="{{ route('front.videos.index') }}">動画一覧 (F-05)</a> |
<a href="{{ route('front.courses.index') }}">コース一覧 (F-08)</a> |
<span style="color:#D8A39D;cursor:pointer;text-decoration:underline;" onclick="openPremiumModal()">課金モーダルを開く（デモ）</span>
@endsection
