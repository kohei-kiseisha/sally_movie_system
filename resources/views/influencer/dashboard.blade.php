@extends('layouts.influencer')
@section('title', 'ダッシュボード')
@section('screen-info')
<strong>I-01: インフルエンサーダッシュボード</strong> ― 紹介アフィリエイト（永久20%）とコース販売（50%レベニューシェア）の収益サマリー。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128202; ダッシュボード</h1>
    <div style="font-size:13px;color:#888;">2026年3月</div>
</div>

{{-- 収益サマリー --}}
<div class="stats-row" style="margin-bottom:32px;">
    <div class="stat-card">
        <div class="stat-number">&yen;142,560</div>
        <div class="stat-label">今月の収益合計</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">&yen;52,360</div>
        <div class="stat-label">紹介アフィリエイト</div>
        <div style="font-size:11px;color:#D8A39D;margin-top:2px;">永久20%</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">&yen;90,200</div>
        <div class="stat-label">コース売上</div>
        <div style="font-size:11px;color:#D8A39D;margin-top:2px;">取り分50%</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">&yen;923,400</div>
        <div class="stat-label">累計収益</div>
    </div>
</div>

{{-- クイックアクション --}}
<div class="section-title">クイックアクション</div>
<div class="grid grid-4" style="margin-bottom:32px;">
    <a href="{{ route('influencer.referrals') }}" class="stat-card" style="cursor:pointer;">
        <div style="font-size:32px;margin-bottom:4px;">&#128279;</div>
        <div style="font-size:13px;font-weight:600;">紹介URLを管理</div>
    </a>
    <a href="{{ route('influencer.courses') }}" class="stat-card" style="cursor:pointer;">
        <div style="font-size:32px;margin-bottom:4px;">&#128200;</div>
        <div style="font-size:13px;font-weight:600;">コース売上を見る</div>
    </a>
    <a href="{{ route('influencer.profile') }}" class="stat-card" style="cursor:pointer;">
        <div style="font-size:32px;margin-bottom:4px;">&#128100;</div>
        <div style="font-size:13px;font-weight:600;">プロフィール編集</div>
    </a>
    <a href="{{ route('front.influencer.show', 1) }}" class="stat-card" style="cursor:pointer;">
        <div style="font-size:32px;margin-bottom:4px;">&#128065;</div>
        <div style="font-size:13px;font-weight:600;">公開ページを見る</div>
    </a>
</div>

{{-- 最近のアクティビティ --}}
<div class="section-title">最近のアクティビティ</div>
<div style="background:#FFFDF9;border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(61,50,41,.06);">
    @foreach ([
        ['time'=>'3時間前','icon'=>'&#128176;','text'=>'user_***15 さんが「時短ヘアアレンジ10選」を購入しました','amount'=>'+¥4,900'],
        ['time'=>'5時間前','icon'=>'&#128100;','text'=>'紹介URL経由で user_***82 さんが有料会員に登録しました','amount'=>'+¥154/月'],
        ['time'=>'昨日','icon'=>'&#128176;','text'=>'user_***45 さんが「韓国トレンドヘア完全攻略」を購入しました','amount'=>'+¥4,900'],
        ['time'=>'2日前','icon'=>'&#128100;','text'=>'紹介URL経由で 3名 が新規登録しました（うち有料会員 2名）','amount'=>'+¥308/月'],
        ['time'=>'3日前','icon'=>'&#128176;','text'=>'user_***91 さんが「ブライダルヘアセット」を購入しました','amount'=>'+¥7,400'],
    ] as $act)
    <div style="display:flex;align-items:center;gap:12px;padding:14px 16px;border-bottom:1px solid #E8DDD0;">
        <span style="font-size:20px;">{!! $act['icon'] !!}</span>
        <div style="flex:1;">
            <div style="font-size:13px;color:#3D3229;">{{ $act['text'] }}</div>
            <div style="font-size:11px;color:#9B8E82;">{{ $act['time'] }}</div>
        </div>
        <div style="font-size:14px;font-weight:700;color:#D8A39D;white-space:nowrap;">{{ $act['amount'] }}</div>
    </div>
    @endforeach
</div>

<div class="page-nav" style="margin-top:24px;">
    <strong>遷移先:</strong>
    <a href="{{ route('influencer.courses') }}">コース売上確認 (I-02)</a> |
    <a href="{{ route('influencer.referrals') }}">紹介URL管理 (I-03)</a> |
    <a href="{{ route('influencer.profile') }}">プロフィール編集 (I-04)</a> |
    <a href="{{ route('influencer.payout_settings') }}">振込先設定 (I-05)</a>
</div>
@endsection
