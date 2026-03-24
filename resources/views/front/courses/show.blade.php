@extends('layouts.front')
@section('title', 'コース詳細')
@section('screen-info')
<strong>F-09: コース詳細</strong> ― 無料/有料チャプターの区分表示。有料動画は鍵マーク、クリックで課金モーダル。
@endsection

@section('content')
<div class="section">
    {{-- コース情報 --}}
    <div style="margin-bottom:32px;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px;">
            <span class="level-badge level-intermediate">中級</span>
            <span class="badge badge-premium">&#128274; 有料コース</span>
            <span style="font-size:13px;color:#888;">基礎技術</span>
        </div>
        <h1 style="font-size:26px;font-weight:800;margin-bottom:8px;">編み方マスター</h1>
        <p style="color:#6B5D52;font-size:14px;line-height:1.8;margin-bottom:16px;">
            2つ編みベースから5つ編み、フィッシュボーンなどの特殊編みまで、ヘアアレンジに不可欠な編み方テクニックを網羅的に学ぶコースです。<br>
            <strong style="color:#D8A39D;">※ 最初の1本は無料で視聴できます。</strong>全動画を視聴するには有料会員への登録が必要です。
        </p>

        {{-- 進捗バー --}}
        <div style="background:#FFFDF9;border-radius:12px;padding:20px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:24px;">
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
                <span style="font-size:14px;font-weight:600;">コース進捗</span>
                <span style="font-size:14px;font-weight:700;color:#D8A39D;">1 / 12 完了</span>
            </div>
            <div class="progress-bar" style="height:12px;"><div class="fill" style="width:8%;"></div></div>
        </div>

        <a href="{{ route('front.videos.show', 1) }}" class="btn btn-primary btn-lg btn-block" style="margin-bottom:12px;">
            &#9654; 無料動画から学習を始める
        </a>
        <button class="btn btn-outline btn-lg btn-block" onclick="openPremiumModal()" style="margin-bottom:24px;">
            &#128274; 有料会員になって全動画を見る
        </button>
    </div>

    {{-- チャプター一覧 --}}
    <div class="section-title">チャプター一覧</div>
    <div style="display:flex;gap:12px;margin-bottom:16px;font-size:13px;">
        <span class="badge badge-free">&#9989; 無料</span>
        <span class="badge badge-premium">&#128274; 有料会員限定</span>
    </div>

    <div class="chapter-list" style="margin-bottom:32px;">
        @php
        $chapters = [
            // 2つ編みベース
            ['title'=>'ロープ編み','dur'=>'8:30','status'=>'completed','free'=>true,'section'=>'2つ編みベース'],
            ['title'=>'ツイスト編み','dur'=>'9:15','status'=>'','free'=>false,'section'=>''],
            ['title'=>'片編み込み（すくい編み）','dur'=>'12:00','status'=>'','free'=>false,'section'=>''],
            ['title'=>'裏編み（クロス編み）','dur'=>'10:45','status'=>'','free'=>false,'section'=>''],
            // 3つ編みベース
            ['title'=>'3つ編み（表）','dur'=>'7:00','status'=>'','free'=>false,'section'=>'3つ編みベース'],
            ['title'=>'3つ編み（裏）','dur'=>'7:30','status'=>'','free'=>false,'section'=>''],
            ['title'=>'丸編み・変形編み','dur'=>'11:00','status'=>'','free'=>false,'section'=>''],
            ['title'=>'表編み込み・裏編み込み','dur'=>'14:00','status'=>'','free'=>false,'section'=>''],
            // 4〜5つ編み
            ['title'=>'4つ編み・5つ編み・大編み','dur'=>'13:30','status'=>'','free'=>false,'section'=>'4〜5つ編み'],
            // 特殊編み
            ['title'=>'フィッシュボーン','dur'=>'12:45','status'=>'','free'=>false,'section'=>'特殊編み'],
            ['title'=>'フィンガーエイト','dur'=>'10:00','status'=>'','free'=>false,'section'=>''],
            ['title'=>'ウォーターフォール','dur'=>'11:30','status'=>'','free'=>false,'section'=>''],
        ];
        @endphp

        @foreach ($chapters as $idx => $ch)
        {{-- セクションヘッダー --}}
        @if ($ch['section'])
        <div style="padding:10px 16px;background:#F5F0E6;font-size:12px;font-weight:700;color:#6B5D52;border-bottom:1px solid #E8DDD0;">
            {{ $ch['section'] }}
        </div>
        @endif

        <a href="{{ $ch['free'] ? route('front.videos.show', $idx+1) : '#' }}"
           class="chapter-item {{ $ch['status'] }} {{ !$ch['free'] ? 'locked card-locked' : '' }}">
            <div class="chapter-num">
                @if ($ch['status'] === 'completed')
                    &#10003;
                @elseif (!$ch['free'])
                    &#128274;
                @else
                    {{ $idx+1 }}
                @endif
            </div>
            <div class="chapter-title">
                {{ $ch['title'] }}
            </div>
            <div style="display:flex;align-items:center;gap:8px;">
                @if ($ch['free'])
                    <span class="badge badge-free" style="font-size:10px;">無料</span>
                @endif
                <span class="chapter-duration">{{ $ch['dur'] }}</span>
            </div>
        </a>
        @endforeach
    </div>

    {{-- 課金バナー --}}
    <div style="background:linear-gradient(135deg,#3D3229,#4A3F35);border-radius:12px;padding:28px;color:#fff;text-align:center;margin-bottom:32px;">
        <div style="font-size:20px;font-weight:800;margin-bottom:8px;">&#128274; 残り11本の動画を見るには</div>
        <div style="font-size:14px;color:#C9B7A7;margin-bottom:16px;">有料会員になると、このコースを含む全133本の動画が見放題</div>
        <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
            <button class="btn btn-primary btn-lg" onclick="openPremiumModal()">月額 ¥770 で今すぐ始める</button>
        </div>
    </div>

    {{-- 修了条件（固定ルール） --}}
    <div style="background:#F5F0E6;border-radius:8px;padding:14px 16px;margin-bottom:32px;font-size:13px;color:#6B5D52;">
        &#127942; <strong>修了条件:</strong> 全動画の90%以上を視聴するとコース修了（修了バッジ獲得）となります。
    </div>

    {{-- 講師情報 --}}
    <div style="background:#FFFDF9;border-radius:12px;padding:20px;box-shadow:0 2px 8px rgba(61,50,41,.06);">
        <div style="font-size:16px;font-weight:700;margin-bottom:16px;">講師情報</div>
        <div style="display:flex;align-items:center;gap:16px;">
            <div class="avatar" style="width:56px;height:56px;font-size:20px;">S</div>
            <div>
                <div style="font-size:16px;font-weight:700;">佐藤 美咲</div>
                <div style="font-size:13px;color:#888;">SALLY141 チーフスタイリスト</div>
                <div style="font-size:13px;color:#6B5D52;margin-top:4px;">ヘアセット歴15年。ブライダル・成人式を中心に年間500件以上を担当。</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.videos.show', 1) }}">動画視聴 (F-10)</a> |
<a href="{{ route('front.categories.show', 1) }}">カテゴリー詳細 (F-07)</a> |
<a href="{{ route('front.courses.index') }}">コース一覧 (F-08)</a> |
<span style="color:#D8A39D;cursor:pointer;text-decoration:underline;" onclick="openPremiumModal()">課金モーダルを開く（デモ）</span>
@endsection
