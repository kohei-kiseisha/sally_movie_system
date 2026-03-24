@extends('layouts.front')
@section('title', 'カテゴリー詳細')
@section('screen-info')
<strong>F-07: カテゴリー詳細</strong> ― カテゴリー内のコース・人気動画表示（基礎技術カテゴリーを例示）
@endsection

@section('content')
<div class="section">
    {{-- カテゴリー情報 --}}
    <div style="margin-bottom:32px;">
        <div style="font-size:48px;margin-bottom:8px;">&#9986;</div>
        <h1 style="font-size:28px;font-weight:800;margin-bottom:8px;">基礎技術</h1>
        <p style="color:#6B5D52;font-size:15px;">コテの巻き方、編み方、ピンの留め方、ブロッキング、逆毛、トップのベース作りなど、ヘアアレンジに必要な基礎技術を体系的に学べるカテゴリーです。</p>
        <div style="margin-top:12px;display:flex;gap:16px;font-size:14px;color:#888;">
            <span>&#128218; 10 コース</span>
            <span>&#127916; 58 動画</span>
        </div>
    </div>

    {{-- 初級コース --}}
    <div class="section-title">初級コース</div>
    <div class="grid grid-3" style="margin-bottom:32px;">
        @php
        $beginnerCourses = [
            ['name'=>'コテの巻き方','videos'=>6,'pct'=>80],
            ['name'=>'ピンの留め方','videos'=>3,'pct'=>100],
            ['name'=>'ゴムの結び方','videos'=>2,'pct'=>100],
            ['name'=>'ブロウの仕方','videos'=>2,'pct'=>50],
            ['name'=>'スライス・ブロッキング','videos'=>3,'pct'=>30],
        ];
        @endphp
        @foreach ($beginnerCourses as $i => $c)
        <a href="{{ route('front.courses.show', $i+1) }}" class="card">
            <div class="card-img">&#128218; コースサムネイル</div>
            <div class="card-body">
                <span class="level-badge level-beginner" style="margin-bottom:8px;">初級</span>
                <div style="font-size:14px;font-weight:600;margin-top:6px;">{{ $c['name'] }}</div>
                <div style="font-size:12px;color:#888;margin-top:4px;">{{ $c['videos'] }} 動画</div>
                <div class="progress-bar" style="margin-top:8px;"><div class="fill" style="width:{{ $c['pct'] }}%;"></div></div>
                <div style="font-size:11px;color:#999;margin-top:4px;">
                    @if ($c['pct'] === 100) &#9989; 修了 @else {{ $c['pct'] }}% 完了 @endif
                </div>
            </div>
        </a>
        @endforeach
    </div>

    {{-- 中級コース --}}
    <div class="section-title">中級コース</div>
    <div class="grid grid-3" style="margin-bottom:32px;">
        @php
        $intCourses = [
            ['name'=>'編み方マスター（2つ編み〜特殊編み）','videos'=>12,'pct'=>25],
            ['name'=>'ストレートアイロンの使用法','videos'=>2,'pct'=>0],
            ['name'=>'ホットカーラーの巻き方','videos'=>3,'pct'=>0],
        ];
        @endphp
        @foreach ($intCourses as $i => $c)
        <a href="{{ route('front.courses.show', $i+6) }}" class="card">
            <div class="card-img">&#128218; コースサムネイル</div>
            <div class="card-body">
                <span class="level-badge level-intermediate" style="margin-bottom:8px;">中級</span>
                <div style="font-size:14px;font-weight:600;margin-top:6px;">{{ $c['name'] }}</div>
                <div style="font-size:12px;color:#888;margin-top:4px;">{{ $c['videos'] }} 動画</div>
                <div class="progress-bar" style="margin-top:8px;"><div class="fill" style="width:{{ $c['pct'] }}%;"></div></div>
                <div style="font-size:11px;color:#999;margin-top:4px;">{{ $c['pct'] }}% 完了</div>
            </div>
        </a>
        @endforeach
    </div>

    {{-- 上級コース --}}
    <div class="section-title">上級コース</div>
    <div class="grid grid-3" style="margin-bottom:32px;">
        @php
        $advCourses = [
            ['name'=>'逆毛テクニック','videos'=>2,'pct'=>0],
            ['name'=>'トップのベース作り','videos'=>5,'pct'=>0],
        ];
        @endphp
        @foreach ($advCourses as $i => $c)
        <a href="{{ route('front.courses.show', $i+9) }}" class="card">
            <div class="card-img">&#128218; コースサムネイル</div>
            <div class="card-body">
                <span class="level-badge level-advanced" style="margin-bottom:8px;">上級</span>
                <div style="font-size:14px;font-weight:600;margin-top:6px;">{{ $c['name'] }}</div>
                <div style="font-size:12px;color:#888;margin-top:4px;">{{ $c['videos'] }} 動画</div>
                <div class="progress-bar" style="margin-top:8px;"><div class="fill" style="width:{{ $c['pct'] }}%;"></div></div>
                <div style="font-size:11px;color:#999;margin-top:4px;">{{ $c['pct'] }}% 完了</div>
            </div>
        </a>
        @endforeach
    </div>

    {{-- 人気動画 --}}
    <div class="section-title">人気動画 <span class="more"><a href="{{ route('front.videos.index') }}">すべて見る &rarr;</a></span></div>
    <div class="carousel-row">
        @foreach (['フォワード巻き','ロープ編み','3つ編み（表）','フィッシュボーン','ねじり留め'] as $i => $title)
        <a href="{{ route('front.videos.show', $i+1) }}" class="card">
            <div class="card-img">
                &#127916; {{ $title }}
                <span class="duration">{{ [8,10,7,12,6][$i] }}:{{ [30,15,0,45,20][$i] }}</span>
            </div>
            <div class="card-body">
                <div style="font-size:13px;font-weight:600;">{{ $title }}</div>
                <div style="font-size:12px;color:#888;margin-top:4px;">&#128065; {{ [1850,1420,1200,980,870][$i] }} 回再生</div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.courses.show', 1) }}">コース詳細 (F-09)</a> |
<a href="{{ route('front.videos.show', 1) }}">動画視聴 (F-10)</a> |
<a href="{{ route('front.categories.index') }}">カテゴリー一覧 (F-06)</a>
@endsection
