@extends('layouts.front')
@section('title', 'トップページ')
@section('screen-info')
<strong>F-01: トップページ</strong> ― 無料/有料の区分表示付き。有料動画には鍵マーク、クリックで課金モーダル表示。
@endsection

@section('content')
{{-- ヒーローセクション --}}
<section class="hero">
    <h1>プロのヘア技術を、<br>あなたのペースで学ぼう</h1>
    <p>SALLY141のスタイリストが教える、ヘアアレンジ・基礎技術の動画学習サービス。<br>基礎から応用まで段階的にスキルアップ。</p>
    <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
        <a href="{{ route('front.login') }}" class="btn btn-line btn-lg">&#128272; LINEで無料登録</a>
        <a href="{{ route('front.courses.index') }}" class="btn btn-outline btn-lg" style="border-color:#fff;color:#fff;">コースを見る</a>
    </div>
    <p style="font-size:13px;color:#C9B7A7;margin-top:16px;">月額770円（税込）で全動画見放題 ・ 一部動画は無料で視聴できます</p>
</section>

{{-- 新着動画 --}}
<div class="section">
    <div class="section-title">
        新着動画
        <a href="{{ route('front.videos.index') }}" class="more">すべて見る &rarr;</a>
    </div>
    <div class="carousel-row">
        @php
        $newVideos = [
            ['title'=>'フォワード巻きの基本','cat'=>'基礎技術','dur'=>'8:30','free'=>true],
            ['title'=>'ロープ編みの作り方','cat'=>'基礎技術','dur'=>'10:15','free'=>false],
            ['title'=>'ローシニヨン（カールベース）','cat'=>'ヘアスタイル基礎','dur'=>'15:00','free'=>false],
            ['title'=>'ストレートアイロンでウェーブ','cat'=>'基礎技術','dur'=>'12:45','free'=>false],
            ['title'=>'韓国系カチモリの作り方','cat'=>'ヘアスタイル基礎','dur'=>'18:20','free'=>false],
            ['title'=>'コームブラシの説明','cat'=>'道具の名称','dur'=>'6:30','free'=>true],
        ];
        @endphp
        @foreach ($newVideos as $i => $v)
        <a href="{{ $v['free'] ? route('front.videos.show', $i+1) : '#' }}"
           class="card {{ $v['free'] ? '' : 'card-locked' }}" style="width:260px;">
            <div class="card-img">
                &#127916; {{ $v['title'] }}
                <span class="duration">{{ $v['dur'] }}</span>
                @unless ($v['free'])
                <div class="lock-overlay">
                    <span>&#128274;</span>
                    <span class="lock-text">有料会員限定</span>
                </div>
                @endunless
            </div>
            <div class="card-body">
                <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $v['title'] }}</div>
                <div style="display:flex;align-items:center;gap:6px;">
                    @if ($v['free'])
                        <span class="badge badge-free">無料</span>
                    @else
                        <span class="badge badge-premium">&#128274; 有料</span>
                    @endif
                    <span style="font-size:12px;color:#888;">{{ $v['cat'] }}</span>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

{{-- 完成写真から学ぶ --}}
<div class="section">
    <div class="section-title">
        &#128247; 完成写真から学ぶ
        <a href="{{ route('front.styles.index') }}" class="more">すべて見る &rarr;</a>
    </div>
    <p style="font-size:14px;color:#6B5D52;margin-bottom:16px;">「こんな髪型を作りたい！」から作り方動画を見つけよう</p>
    @php
    $topStylePhotos = [
        'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=300&h=400&fit=crop',
        'https://images.unsplash.com/photo-1519699047748-de8e457a634e?w=300&h=400&fit=crop',
        'https://images.unsplash.com/photo-1595959183082-7b570b7e1e6b?w=300&h=400&fit=crop',
        'https://images.unsplash.com/photo-1554519934-e32b1629d9ee?w=300&h=400&fit=crop',
        'https://images.unsplash.com/photo-1634449571010-02389ed0f9b0?w=300&h=400&fit=crop',
        'https://images.unsplash.com/photo-1605980776566-0486c3b394f8?w=300&h=400&fit=crop',
    ];
    @endphp
    <div class="carousel-row">
        @foreach ([
            ['name'=>'ナチュラルウェーブダウン','length'=>'ロング','views'=>'3,850','free'=>true],
            ['name'=>'ゆるふわハーフアップ','length'=>'ミディアム','views'=>'3,200','free'=>true],
            ['name'=>'大人シニヨン','length'=>'ロング','views'=>'2,980','free'=>false],
            ['name'=>'韓国風ヨシンモリ','length'=>'ロング','views'=>'2,750','free'=>false],
            ['name'=>'ショートボブアレンジ','length'=>'ショート','views'=>'2,400','free'=>true],
            ['name'=>'編みおろしツイン','length'=>'ロング','views'=>'2,500','free'=>false],
        ] as $i => $s)
        <a href="{{ $s['free'] ? route('front.styles.show', $i+1) : '#' }}"
           class="card {{ $s['free'] ? '' : 'card-locked' }}" style="width:200px;">
            <div style="aspect-ratio:3/4;position:relative;overflow:hidden;">
                <img src="{{ $topStylePhotos[$i] }}" alt="{{ $s['name'] }}" style="width:100%;height:100%;object-fit:cover;display:block;">
                @unless ($s['free'])
                <div class="lock-overlay" style="font-size:20px;"><span>&#128274;</span><span class="lock-text">有料</span></div>
                @endunless
            </div>
            <div style="padding:10px;">
                <div style="font-size:13px;font-weight:600;margin-bottom:2px;">{{ $s['name'] }}</div>
                <div style="font-size:11px;color:#9B8E82;display:flex;gap:6px;">
                    <span>{{ $s['length'] }}</span>
                    <span>&#128065; {{ $s['views'] }}</span>
                </div>
                <div style="margin-top:4px;">
                    @if ($s['free']) <span class="badge badge-free" style="font-size:10px;">無料</span>
                    @else <span class="badge badge-premium" style="font-size:10px;">&#128274; 有料</span> @endif
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

{{-- 人気コース --}}
<div class="section">
    <div class="section-title">
        人気コース
        <a href="{{ route('front.courses.index') }}" class="more">すべて見る &rarr;</a>
    </div>
    <div class="grid grid-3">
        @foreach ([
            '編み方マスター' => ['beginner', '初級', 12, false],
            'ダウンスタイル完全攻略' => ['intermediate', '中級', 10, false],
            'コテの巻き方基礎' => ['beginner', '初級', 6, true],
        ] as $name => $info)
        <a href="{{ $info[3] ? route('front.courses.show', $loop->iteration) : '#' }}"
           class="card {{ $info[3] ? '' : 'card-locked' }}">
            <div class="card-img">
                &#128218; コースサムネイル
                @unless ($info[3])
                <div class="lock-overlay">
                    <span>&#128274;</span>
                    <span class="lock-text">有料会員限定</span>
                </div>
                @endunless
            </div>
            <div class="card-body">
                <div style="font-size:15px;font-weight:600;margin-bottom:6px;">{{ $name }}</div>
                <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;flex-wrap:wrap;">
                    <span class="level-badge level-{{ $info[0] }}">{{ $info[1] }}</span>
                    @if ($info[3])
                        <span class="badge badge-free">一部無料</span>
                    @else
                        <span class="badge badge-premium">&#128274; 有料</span>
                    @endif
                    <span style="font-size:12px;color:#888;">{{ $info[2] }}本の動画</span>
                </div>
                <div class="progress-bar"><div class="fill" style="width:{{ $loop->iteration * 25 }}%;"></div></div>
                <div style="font-size:11px;color:#888;margin-top:4px;">{{ $loop->iteration * 25 }}% 完了</div>
            </div>
        </a>
        @endforeach
    </div>
</div>

{{-- カテゴリーショートカット --}}
<div class="section">
    <div class="section-title">カテゴリーで学ぶ</div>
    <div class="grid grid-4">
        @foreach ([
            ['icon'=>'&#128218;','name'=>'ヘアメイクとは','count'=>'2','note'=>'無料公開中'],
            ['icon'=>'&#128295;','name'=>'道具の名称','count'=>'5','note'=>'一部無料'],
            ['icon'=>'&#9986;','name'=>'基礎技術','count'=>'10','note'=>''],
            ['icon'=>'&#128135;','name'=>'ヘアスタイル基礎アレンジ','count'=>'8','note'=>''],
        ] as $cat)
        <a href="{{ route('front.categories.show', $loop->iteration) }}" class="category-card">
            <div class="category-icon">{!! $cat['icon'] !!}</div>
            <div class="category-name">{{ $cat['name'] }}</div>
            <div class="category-count">{{ $cat['count'] }}コース</div>
            @if ($cat['note'])
                <div style="margin-top:8px;"><span class="badge badge-free">{{ $cat['note'] }}</span></div>
            @endif
        </a>
        @endforeach
    </div>
</div>

{{-- イベント告知 --}}
<div class="section">
    <div class="section-title">
        開催予定のイベント
        <a href="{{ route('front.events.index') }}" class="more">すべて見る &rarr;</a>
    </div>
    <div class="grid grid-2">
        @foreach ([
            ['month'=>'4月','day'=>'15','title'=>'プロに学ぶヘアアレンジ実践ワークショップ','place'=>'東京・表参道','cap'=>20,'left'=>8],
            ['month'=>'5月','day'=>'10','title'=>'編み込みテクニック特別講座','place'=>'大阪・心斎橋','cap'=>15,'left'=>5],
        ] as $ev)
        <a href="{{ route('front.events.show', $loop->iteration) }}" class="card" style="display:flex;">
            <div style="background:#D8A39D;color:#fff;padding:16px 20px;text-align:center;display:flex;flex-direction:column;justify-content:center;min-width:80px;">
                <div style="font-size:12px;">{{ $ev['month'] }}</div>
                <div style="font-size:28px;font-weight:800;line-height:1;">{{ $ev['day'] }}</div>
            </div>
            <div class="card-body">
                <div style="font-size:15px;font-weight:600;margin-bottom:4px;">{{ $ev['title'] }}</div>
                <div style="font-size:12px;color:#888;">{{ $ev['place'] }} / 定員{{ $ev['cap'] }}名 / 残り{{ $ev['left'] }}席</div>
            </div>
        </a>
        @endforeach
    </div>
</div>

{{-- 料金案内 --}}
<div class="section" style="text-align:center;">
    <div class="section-title" style="justify-content:center;">料金プラン</div>
    <div class="card" style="max-width:400px;margin:0 auto;padding:32px;">
        <div style="font-size:14px;color:#888;margin-bottom:4px;">月額プラン</div>
        <div style="font-size:48px;font-weight:800;color:#D8A39D;">&#165;770<span style="font-size:16px;color:#888;font-weight:400;">/月（税込）</span></div>
        <ul style="text-align:left;margin:20px 0;font-size:14px;line-height:2;">
            <li>&#10003; 全動画コンテンツ見放題</li>
            <li>&#10003; 学習進捗・修了バッジ</li>
            <li>&#10003; オフラインイベント申込</li>
            <li>&#10003; いつでも解約OK</li>
        </ul>
        <a href="{{ route('front.plan') }}" class="btn btn-primary btn-lg btn-block">今すぐ始める</a>
        <div style="font-size:12px;color:#888;margin-top:8px;">※ 一部の導入動画は無料でも視聴できます</div>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.login') }}">LINEログイン (F-02)</a> |
<a href="{{ route('front.videos.index') }}">動画一覧 (F-05)</a> |
<a href="{{ route('front.categories.index') }}">カテゴリー一覧 (F-06)</a> |
<a href="{{ route('front.courses.index') }}">コース一覧 (F-08)</a> |
<a href="{{ route('front.events.index') }}">イベント一覧 (F-14)</a> |
<span style="color:#D8A39D;cursor:pointer;text-decoration:underline;" onclick="openPremiumModal()">課金モーダルを開く（デモ）</span>
@endsection
