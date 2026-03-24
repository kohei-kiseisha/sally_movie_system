@extends('layouts.front')
@section('title', 'マイページ')
@section('screen-info')
<strong>F-04: マイページ（ダッシュボード）</strong> ― 学習状況の概要把握と各機能への導線。店舗所属ユーザーの場合は「所属店舗名」が表示される。
@endsection

@section('content')
<div class="section">
    {{-- ユーザー情報 --}}
    <div style="display:flex;align-items:center;gap:16px;margin-bottom:24px;">
        <div class="avatar" style="width:64px;height:64px;font-size:24px;">U</div>
        <div>
            <div style="font-size:20px;font-weight:700;">LINE太郎</div>
            <div style="font-size:13px;color:#888;">所属: サンプル美容室（店舗所属の場合）</div>
            <div style="display:flex;gap:8px;margin-top:4px;">
                <span class="badge badge-completed">&#127942; 2コース修了</span>
                <span class="badge badge-status">連続7日学習中</span>
            </div>
        </div>
    </div>

    {{-- 学習サマリー --}}
    <div class="stats-row">
        <div class="stat-card"><div class="stat-number">42%</div><div class="stat-label">全体進捗率</div></div>
        <div class="stat-card"><div class="stat-number">2</div><div class="stat-label">修了コース</div></div>
        <div class="stat-card"><div class="stat-number">28</div><div class="stat-label">視聴済み動画</div></div>
        <div class="stat-card"><div class="stat-number">12.5h</div><div class="stat-label">総学習時間</div></div>
    </div>

    {{-- 続きから見る --}}
    <div class="section-title">続きから見る</div>
    <div class="carousel-row" style="margin-bottom:32px;">
        @foreach ([
            ['title'=>'裏編み（クロス編み）','course'=>'編み方マスター','pct'=>50,'dur'=>'10:45'],
            ['title'=>'ナミ巻き','course'=>'コテの巻き方','pct'=>65,'dur'=>'9:00'],
            ['title'=>'ダウンスタイル（ロング）','course'=>'ダウンスタイル完全攻略','pct'=>30,'dur'=>'14:20'],
        ] as $i => $v)
        <a href="{{ route('front.videos.show', $i+1) }}" class="card" style="width:280px;">
            <div class="card-img">
                &#127916; {{ $v['title'] }}
                <span class="duration">{{ $v['dur'] }}</span>
                <div class="progress-overlay" style="width:{{ $v['pct'] }}%;"></div>
            </div>
            <div class="card-body">
                <div style="font-size:14px;font-weight:600;">{{ $v['title'] }}</div>
                <div style="font-size:12px;color:#888;">{{ $v['course'] }} / {{ $v['pct'] }}% 視聴済み</div>
            </div>
        </a>
        @endforeach
    </div>

    {{-- おすすめコース --}}
    <div class="section-title">
        おすすめコース
        <a href="{{ route('front.courses.index') }}" class="more">すべて見る &rarr;</a>
    </div>
    <div class="grid grid-3" style="margin-bottom:32px;">
        @foreach ([
            ['name'=>'ポニーアレンジ＆ハーフアップ','level'=>'intermediate','label'=>'中級'],
            ['name'=>'韓国系スタイル','level'=>'advanced','label'=>'上級'],
            ['name'=>'スライス・ブロッキング・ブロウ','level'=>'beginner','label'=>'初級'],
        ] as $c)
        <a href="{{ route('front.courses.show', $loop->iteration) }}" class="card">
            <div class="card-img">&#128218; コースサムネイル</div>
            <div class="card-body">
                <div style="font-size:14px;font-weight:600;">{{ $c['name'] }}</div>
                <span class="level-badge level-{{ $c['level'] }}">{{ $c['label'] }}</span>
            </div>
        </a>
        @endforeach
    </div>

    {{-- 修了バッジ --}}
    <div class="section-title">
        獲得バッジ
        <a href="{{ route('front.progress') }}" class="more">進捗詳細 &rarr;</a>
    </div>
    <div style="display:flex;gap:16px;margin-bottom:32px;">
        @foreach (['ヘアメイク入門','道具マスター','7日連続学習'] as $badge)
        <div style="text-align:center;width:80px;">
            <div style="width:60px;height:60px;border-radius:50%;background:linear-gradient(135deg,#D8A39D,#C9B7A7);margin:0 auto 6px;display:flex;align-items:center;justify-content:center;font-size:24px;">&#127942;</div>
            <div style="font-size:11px;">{{ $badge }}</div>
        </div>
        @endforeach
    </div>

    {{-- クイックリンク --}}
    <div class="section-title">メニュー</div>
    <div class="link-list">
        <a href="{{ route('front.favorites') }}" class="link-list-item"><span>&#10084; お気に入り一覧</span><span class="arrow">&rarr;</span></a>
        <a href="{{ route('front.history') }}" class="link-list-item"><span>&#128337; 視聴履歴</span><span class="arrow">&rarr;</span></a>
        <a href="{{ route('front.progress') }}" class="link-list-item"><span>&#128200; 学習進捗詳細</span><span class="arrow">&rarr;</span></a>
        <a href="{{ route('front.events.index') }}" class="link-list-item"><span>&#128197; イベント</span><span class="arrow">&rarr;</span></a>
        <a href="{{ route('front.plan') }}" class="link-list-item"><span>&#128179; 契約・プラン</span><span class="arrow">&rarr;</span></a>
        <a href="{{ route('front.settings') }}" class="link-list-item"><span>&#9881; 設定</span><span class="arrow">&rarr;</span></a>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.videos.show', 1) }}">動画視聴 (F-10)</a> |
<a href="{{ route('front.progress') }}">学習進捗 (F-11)</a> |
<a href="{{ route('front.favorites') }}">お気に入り (F-12)</a> |
<a href="{{ route('front.history') }}">視聴履歴 (F-13)</a> |
<a href="{{ route('front.settings') }}">設定 (F-20)</a>
@endsection
