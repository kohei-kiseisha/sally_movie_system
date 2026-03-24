@extends('layouts.influencer')
@section('title', 'コース売上確認')
@section('screen-info')
<strong>I-02: コース売上確認</strong> ― 自分のコースの売上・受講者数を閲覧。コースの登録・編集・動画管理はSALLY141運営が行います。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128200; コース売上確認</h1>
</div>

{{-- 注意書き --}}
<div style="background:#F5F0E6;border-left:4px solid #C9B7A7;border-radius:4px;padding:14px 16px;margin-bottom:24px;font-size:13px;color:#6B5D52;">
    &#128161; コースの作成・動画の登録はSALLY141運営チームが行います。新しいコースや動画の追加をご希望の場合は、担当者までご連絡ください。
</div>

{{-- サマリー --}}
<div class="stats-row" style="margin-bottom:24px;">
    <div class="stat-card"><div class="stat-number">3</div><div class="stat-label">公開コース</div></div>
    <div class="stat-card"><div class="stat-number">24</div><div class="stat-label">総動画数</div></div>
    <div class="stat-card"><div class="stat-number">420</div><div class="stat-label">累計受講者</div></div>
    <div class="stat-card"><div class="stat-number">&yen;120,200</div><div class="stat-label">あなたの累計報酬 (50%)</div></div>
</div>

{{-- コース一覧 --}}
@php
$courses = [
    [
        'name'=>'Akikoの時短ヘアアレンジ10選','level'=>'初級','videos'=>10,'students'=>210,
        'price'=>9800,'sold'=>12,'revenue'=>58800,
        'img'=>'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=200&h=112&fit=crop',
        'created'=>'2025/10/15','status'=>'公開中',
    ],
    [
        'name'=>'韓国トレンドヘア完全攻略','level'=>'中級','videos'=>8,'students'=>145,
        'price'=>9800,'sold'=>8,'revenue'=>39200,
        'img'=>'https://images.unsplash.com/photo-1554519934-e32b1629d9ee?w=200&h=112&fit=crop',
        'created'=>'2025/12/01','status'=>'公開中',
    ],
    [
        'name'=>'特別コラボ: ブライダルヘアセット','level'=>'上級','videos'=>6,'students'=>65,
        'price'=>14800,'sold'=>3,'revenue'=>22200,
        'img'=>'https://images.unsplash.com/photo-1595959183082-7b570b7e1e6b?w=200&h=112&fit=crop',
        'created'=>'2026/02/10','status'=>'公開中',
    ],
];
@endphp

<div style="display:flex;flex-direction:column;gap:16px;margin-bottom:32px;">
    @foreach ($courses as $c)
    <div class="card" style="display:flex;align-items:stretch;">
        {{-- サムネイル --}}
        <div style="width:200px;flex-shrink:0;">
            <img src="{{ $c['img'] }}" alt="{{ $c['name'] }}" style="width:100%;height:100%;object-fit:cover;">
        </div>
        {{-- 情報 --}}
        <div style="flex:1;padding:16px;display:flex;flex-direction:column;">
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                <span class="badge" style="background:#e8f5e9;color:#2e7d32;">{{ $c['status'] }}</span>
                <span class="level-badge level-{{ $c['level'] === '初級' ? 'beginner' : ($c['level'] === '中級' ? 'intermediate' : 'advanced') }}">{{ $c['level'] }}</span>
                <span style="font-size:11px;color:#9B8E82;">公開日: {{ $c['created'] }}</span>
            </div>
            <div style="font-size:16px;font-weight:700;margin-bottom:4px;">{{ $c['name'] }}</div>
            <div style="font-size:13px;color:#9B8E82;margin-bottom:12px;">
                &#127916; {{ $c['videos'] }}本の動画 ・ &yen;{{ number_format($c['price']) }}（税込）
            </div>

            {{-- 実績 --}}
            <div style="display:flex;gap:24px;font-size:13px;margin-top:auto;">
                <div>
                    <div style="color:#9B8E82;">受講者数</div>
                    <div style="font-size:18px;font-weight:700;">{{ $c['students'] }}人</div>
                </div>
                <div>
                    <div style="color:#9B8E82;">販売数</div>
                    <div style="font-size:18px;font-weight:700;">{{ $c['sold'] }}件</div>
                </div>
                <div>
                    <div style="color:#9B8E82;">売上合計</div>
                    <div style="font-size:18px;font-weight:700;">&yen;{{ number_format($c['price'] * $c['sold']) }}</div>
                </div>
                <div>
                    <div style="color:#9B8E82;">あなたの報酬 (50%)</div>
                    <div style="font-size:18px;font-weight:800;color:#D8A39D;">&yen;{{ number_format($c['revenue']) }}</div>
                </div>
            </div>
        </div>
        {{-- 操作 --}}
        <div style="padding:16px;display:flex;flex-direction:column;gap:8px;justify-content:center;border-left:1px solid #E8DDD0;">
            <a href="{{ route('front.influencer.show', 1) }}" class="btn btn-sm btn-secondary">&#128065; 公開ページ</a>
        </div>
    </div>
    @endforeach
</div>

{{-- 直近の購入 --}}
<div class="section-title">直近の購入</div>
<table class="data-table" style="margin-bottom:24px;">
    <thead><tr><th>日時</th><th>ユーザー</th><th>コース名</th><th>金額</th><th>あなたの報酬</th></tr></thead>
    <tbody>
        <tr><td>3/23 18:42</td><td>user_***15</td><td>時短ヘアアレンジ10選</td><td>&yen;9,800</td><td style="color:#D8A39D;font-weight:600;">&yen;4,900</td></tr>
        <tr><td>3/22 10:15</td><td>user_***82</td><td>韓国トレンドヘア完全攻略</td><td>&yen;9,800</td><td style="color:#D8A39D;font-weight:600;">&yen;4,900</td></tr>
        <tr><td>3/20 21:33</td><td>user_***45</td><td>ブライダルヘアセット</td><td>&yen;14,800</td><td style="color:#D8A39D;font-weight:600;">&yen;7,400</td></tr>
        <tr><td>3/18 14:08</td><td>user_***91</td><td>時短ヘアアレンジ10選</td><td>&yen;9,800</td><td style="color:#D8A39D;font-weight:600;">&yen;4,900</td></tr>
    </tbody>
</table>

{{-- 運営への依頼 --}}
<div style="background:#FFFDF9;border-radius:12px;padding:24px;box-shadow:0 2px 8px rgba(61,50,41,.06);">
    <div style="font-size:16px;font-weight:700;margin-bottom:12px;">&#128233; コース追加・変更のご依頼</div>
    <p style="font-size:14px;color:#6B5D52;margin-bottom:16px;">
        新しいコースの追加、既存コースの動画追加・差し替え・並び替え、価格変更などのご要望はこちらからご連絡ください。
    </p>
    <div class="form-group">
        <label>ご依頼内容</label>
        <textarea class="form-input" rows="4" style="resize:vertical;" placeholder="例: 新しいコース「夏のヘアアレンジ5選」を追加したいです。動画素材は来週お送りします。"></textarea>
    </div>
    <button class="btn btn-primary">&#128233; 運営チームに送信</button>
</div>

<div class="page-nav" style="margin-top:24px;">
    <strong>遷移先:</strong>
    <a href="{{ route('influencer.dashboard') }}">ダッシュボード (I-01)</a> |
    <a href="{{ route('influencer.referrals') }}">紹介URL管理 (I-03)</a> |
    <a href="{{ route('front.influencer.show', 1) }}">公開ページ (F-23)</a>
</div>
@endsection
