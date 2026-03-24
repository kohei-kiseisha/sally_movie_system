@extends('layouts.front')
@section('title', '動画一覧')
@section('screen-info')
<strong>F-05: 動画一覧</strong> ― 無料/有料の区分表示付き。有料動画には鍵マーク。クリックで課金モーダル表示。
@endsection

@section('content')
<div class="section">
    <div class="section-title">動画一覧</div>

    {{-- 無料/有料 凡例 --}}
    <div style="display:flex;gap:12px;margin-bottom:16px;font-size:13px;align-items:center;">
        <span class="badge badge-free">&#9989; 無料</span>
        <span class="badge badge-premium">&#128274; 有料会員限定</span>
        <span style="color:#9B8E82;">※ 無料会員でも一部動画は視聴できます</span>
    </div>

    {{-- 検索バー --}}
    <div class="search-bar" style="margin-bottom:16px;max-width:100%;">
        <span>&#128269;</span>
        <input type="text" placeholder="動画を検索...">
    </div>

    {{-- フィルタ --}}
    <div class="filter-bar">
        <select class="form-input" style="width:auto;">
            <option>カテゴリー: すべて</option>
            <option>ヘアメイクとは</option>
            <option>道具の名称</option>
            <option>基礎技術</option>
            <option>ヘアスタイル基礎アレンジ</option>
        </select>
        <select class="form-input" style="width:auto;">
            <option>レベル: すべて</option>
            <option>初級</option>
            <option>中級</option>
            <option>上級</option>
        </select>
        <select class="form-input" style="width:auto;">
            <option>公開範囲: すべて</option>
            <option>無料のみ</option>
            <option>有料のみ</option>
        </select>
        <select class="form-input" style="width:auto;">
            <option>新着順</option>
            <option>人気順</option>
        </select>
    </div>

    {{-- 動画カードグリッド --}}
    <div class="grid grid-3">
        @php
        $videos = [
            ['title'=>'ヘアメイクとは（心構え）','cat'=>'ヘアメイクとは','level'=>'beginner','label'=>'初級','dur'=>'5:30','pct'=>100,'free'=>true],
            ['title'=>'コームブラシの説明','cat'=>'道具の名称','level'=>'beginner','label'=>'初級','dur'=>'6:30','pct'=>100,'free'=>true],
            ['title'=>'フォワード巻き','cat'=>'基礎技術','level'=>'beginner','label'=>'初級','dur'=>'8:30','pct'=>100,'free'=>true],
            ['title'=>'ロープ編み','cat'=>'基礎技術','level'=>'intermediate','label'=>'中級','dur'=>'10:15','pct'=>100,'free'=>false],
            ['title'=>'リバース巻き','cat'=>'基礎技術','level'=>'beginner','label'=>'初級','dur'=>'7:45','pct'=>65,'free'=>false],
            ['title'=>'ローシニヨン（カールベース）','cat'=>'ヘアスタイル基礎','level'=>'advanced','label'=>'上級','dur'=>'15:00','pct'=>0,'free'=>false],
            ['title'=>'ピン類の説明','cat'=>'道具の名称','level'=>'beginner','label'=>'初級','dur'=>'8:00','pct'=>80,'free'=>true],
            ['title'=>'3つ編み（表）','cat'=>'基礎技術','level'=>'intermediate','label'=>'中級','dur'=>'7:00','pct'=>0,'free'=>false],
            ['title'=>'韓国系カチモリの作り方','cat'=>'ヘアスタイル基礎','level'=>'advanced','label'=>'上級','dur'=>'18:20','pct'=>0,'free'=>false],
        ];
        @endphp
        @foreach ($videos as $i => $v)
        <a href="{{ $v['free'] ? route('front.videos.show', $i+1) : '#' }}"
           class="card {{ $v['free'] ? '' : 'card-locked' }}">
            <div class="card-img">
                &#127916; {{ $v['title'] }}
                <span class="duration">{{ $v['dur'] }}</span>
                @if ($v['pct'] > 0 && $v['free'])<div class="progress-overlay" style="width:{{ $v['pct'] }}%;"></div>@endif
                @unless ($v['free'])
                <div class="lock-overlay">
                    <span>&#128274;</span>
                    <span class="lock-text">有料会員限定</span>
                </div>
                @endunless
            </div>
            <div class="card-body">
                <div style="font-size:14px;font-weight:600;margin-bottom:6px;">{{ $v['title'] }}</div>
                <div style="display:flex;align-items:center;gap:6px;margin-bottom:8px;flex-wrap:wrap;">
                    <span class="level-badge level-{{ $v['level'] }}">{{ $v['label'] }}</span>
                    @if ($v['free'])
                        <span class="badge badge-free">無料</span>
                    @else
                        <span class="badge badge-premium">&#128274; 有料</span>
                    @endif
                    <span style="font-size:12px;color:#888;">{{ $v['cat'] }}</span>
                </div>
                @if ($v['free'])
                <div class="progress-bar"><div class="fill" style="width:{{ $v['pct'] }}%;"></div></div>
                <div style="font-size:11px;color:#999;margin-top:4px;">
                    @if ($v['pct'] === 100) &#9989; 視聴済み @elseif ($v['pct'] > 0) {{ $v['pct'] }}% 視聴済み @else 未視聴 @endif
                </div>
                @endif
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.videos.show', 1) }}">動画視聴 (F-10)</a> |
<a href="{{ route('front.categories.index') }}">カテゴリー一覧 (F-06)</a> |
<a href="{{ route('front.courses.index') }}">コース一覧 (F-08)</a> |
<a href="{{ route('front.search') }}">検索結果 (F-18)</a> |
<span style="color:#D8A39D;cursor:pointer;text-decoration:underline;" onclick="openPremiumModal()">課金モーダルを開く（デモ）</span>
@endsection
