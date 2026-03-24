@extends('layouts.shop')
@section('title', 'ダッシュボード')
@section('screen-info')
<strong>S-02: 店舗ダッシュボード</strong> ― 店舗全体の学習状況サマリー。メンバー数・進捗率・アクティブ率を一覧表示。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128202; ダッシュボード</h1>
    <div>
        <span style="font-size:13px;color:#888;">サロン名: </span>
        <strong>SALLY141 渋谷店</strong>
    </div>
</div>

{{-- 統計カード --}}
<div class="stats-row">
    <div class="stat-card">
        <div class="stat-number">12</div>
        <div class="stat-label">&#128101; メンバー数</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">65%</div>
        <div class="stat-label">&#128200; 全体進捗率</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">83%</div>
        <div class="stat-label">&#9889; アクティブ率</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">28</div>
        <div class="stat-label">&#127891; 修了コース数</div>
    </div>
</div>

{{-- 最近のアクティビティ --}}
<div style="margin-bottom:32px;">
    <div class="section-title">
        最近のアクティビティ
    </div>
    <div class="card">
        <div class="card-body" style="padding:0;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>日時</th>
                        <th>メンバー</th>
                        <th>アクション</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="white-space:nowrap;">2026-03-24 14:30</td>
                        <td>田中 美咲</td>
                        <td><span class="badge badge-completed">修了</span> カラーリング基礎コース</td>
                    </tr>
                    <tr>
                        <td style="white-space:nowrap;">2026-03-24 12:15</td>
                        <td>佐藤 健太</td>
                        <td><span class="badge badge-status">視聴</span> カット応用テクニック #3</td>
                    </tr>
                    <tr>
                        <td style="white-space:nowrap;">2026-03-24 10:00</td>
                        <td>鈴木 花</td>
                        <td><span class="badge badge-beginner">参加</span> パーマ実践ワークショップ</td>
                    </tr>
                    <tr>
                        <td style="white-space:nowrap;">2026-03-23 18:45</td>
                        <td>山田 太郎</td>
                        <td><span class="badge badge-completed">修了</span> ヘッドスパ入門コース</td>
                    </tr>
                    <tr>
                        <td style="white-space:nowrap;">2026-03-23 16:20</td>
                        <td>高橋 雅人</td>
                        <td><span class="badge badge-status">視聴</span> 接客マナー基礎 #5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- クイックリンク --}}
<div>
    <div class="section-title">クイックリンク</div>
    <div class="grid grid-3">
        <a href="{{ route('shop.members.index') }}" class="card" style="text-decoration:none;">
            <div class="card-body" style="text-align:center;padding:24px;">
                <div style="font-size:32px;margin-bottom:8px;">&#128101;</div>
                <div style="font-weight:700;">メンバー一覧</div>
                <div style="font-size:13px;color:#888;margin-top:4px;">12名のメンバーを管理</div>
            </div>
        </a>
        <a href="{{ route('shop.invite') }}" class="card" style="text-decoration:none;">
            <div class="card-body" style="text-align:center;padding:24px;">
                <div style="font-size:32px;margin-bottom:8px;">&#128233;</div>
                <div style="font-weight:700;">メンバー招待</div>
                <div style="font-size:13px;color:#888;margin-top:4px;">招待リンクを発行</div>
            </div>
        </a>
        <a href="{{ route('shop.events') }}" class="card" style="text-decoration:none;">
            <div class="card-body" style="text-align:center;padding:24px;">
                <div style="font-size:32px;margin-bottom:8px;">&#128197;</div>
                <div style="font-weight:700;">イベント状況</div>
                <div style="font-size:13px;color:#888;margin-top:4px;">参加状況を確認</div>
            </div>
        </a>
    </div>
</div>

<div class="page-nav" style="margin-top:32px;">
    <strong>遷移先:</strong>
    <a href="{{ route('shop.members.index') }}">メンバー一覧 (S-03)</a> |
    <a href="{{ route('shop.invite') }}">メンバー招待 (S-05)</a> |
    <a href="{{ route('shop.events') }}">イベント参加状況 (S-08)</a>
</div>
@endsection
