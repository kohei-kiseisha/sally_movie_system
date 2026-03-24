@extends('layouts.shop')
@section('title', '契約管理')
@section('screen-info')
<strong>S-06: 店舗契約管理</strong> ― 現在のプラン情報、契約日、次回請求日、支払い方法、支払い履歴、プラン変更・解約。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128179; 契約管理</h1>
</div>

{{-- 現在のプラン --}}
<div class="card" style="margin-bottom:24px;">
    <div class="card-body" style="padding:24px;">
        <div style="display:flex;justify-content:space-between;align-items:flex-start;">
            <div>
                <h3 style="font-size:18px;font-weight:700;margin-bottom:12px;">現在のプラン</h3>
                <div style="display:flex;align-items:baseline;gap:8px;margin-bottom:16px;">
                    <span style="font-size:36px;font-weight:800;color:#D8A39D;">&#165;770</span>
                    <span style="font-size:14px;color:#888;">/ メンバー / 月（税込）</span>
                </div>
                <div style="display:grid;grid-template-columns:auto 1fr;gap:8px 16px;font-size:14px;">
                    <span style="color:#888;">現在のメンバー数:</span>
                    <span style="font-weight:600;">12名</span>
                    <span style="color:#888;">今月の利用料:</span>
                    <span style="font-weight:600;">&#165;9,240（税込）</span>
                    <span style="color:#888;">契約開始日:</span>
                    <span>2025-10-01</span>
                    <span style="color:#888;">次回請求日:</span>
                    <span style="font-weight:600;">2026-04-01</span>
                    <span style="color:#888;">支払い方法:</span>
                    <span>クレジットカード（VISA **** 4242）</span>
                </div>
            </div>
            <div>
                <span class="badge badge-beginner" style="font-size:14px;padding:6px 16px;">契約中</span>
            </div>
        </div>
    </div>
</div>

{{-- アクション --}}
<div class="grid grid-2" style="margin-bottom:32px;">
    <div class="card">
        <div class="card-body" style="padding:24px;text-align:center;">
            <div style="font-size:32px;margin-bottom:8px;">&#128179;</div>
            <h4 style="font-weight:700;margin-bottom:8px;">支払い方法を変更</h4>
            <p style="font-size:13px;color:#888;margin-bottom:16px;">クレジットカードの変更</p>
            <button class="btn btn-secondary">変更する</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body" style="padding:24px;text-align:center;">
            <div style="font-size:32px;margin-bottom:8px;">&#128721;</div>
            <h4 style="font-weight:700;margin-bottom:8px;">解約</h4>
            <p style="font-size:13px;color:#888;margin-bottom:16px;">契約期間終了後に解約</p>
            <button class="btn btn-outline btn-sm">解約手続きへ</button>
        </div>
    </div>
</div>

{{-- 支払い履歴 --}}
<div>
    <div class="section-title">支払い履歴</div>
    <table class="data-table">
        <thead>
            <tr>
                <th>請求日</th>
                <th>内容</th>
                <th>メンバー数</th>
                <th>金額</th>
                <th>ステータス</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2026-03-01</td>
                <td>月額利用料（3月分）</td>
                <td>12名</td>
                <td style="font-weight:600;">&#165;9,240</td>
                <td><span class="badge badge-completed">支払済</span></td>
                <td><a href="#" style="color:#D8A39D;font-size:13px;">領収書</a></td>
            </tr>
            <tr>
                <td>2026-02-01</td>
                <td>月額利用料（2月分）</td>
                <td>10名</td>
                <td style="font-weight:600;">&#165;7,700</td>
                <td><span class="badge badge-completed">支払済</span></td>
                <td><a href="#" style="color:#D8A39D;font-size:13px;">領収書</a></td>
            </tr>
            <tr>
                <td>2026-01-01</td>
                <td>月額利用料（1月分）</td>
                <td>10名</td>
                <td style="font-weight:600;">&#165;7,700</td>
                <td><span class="badge badge-completed">支払済</span></td>
                <td><a href="#" style="color:#D8A39D;font-size:13px;">領収書</a></td>
            </tr>
            <tr>
                <td>2025-12-01</td>
                <td>月額利用料（12月分）</td>
                <td>8名</td>
                <td style="font-weight:600;">&#165;6,160</td>
                <td><span class="badge badge-completed">支払済</span></td>
                <td><a href="#" style="color:#D8A39D;font-size:13px;">領収書</a></td>
            </tr>
            <tr>
                <td>2025-11-01</td>
                <td>月額利用料（11月分）</td>
                <td>6名</td>
                <td style="font-weight:600;">&#165;4,620</td>
                <td><span class="badge badge-completed">支払済</span></td>
                <td><a href="#" style="color:#D8A39D;font-size:13px;">領収書</a></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="page-nav" style="margin-top:32px;">
    <strong>遷移先:</strong>
    <a href="{{ route('shop.dashboard') }}">ダッシュボード (S-02)</a> |
    <a href="{{ route('shop.settings') }}">店舗設定 (S-07)</a>
</div>
@endsection
