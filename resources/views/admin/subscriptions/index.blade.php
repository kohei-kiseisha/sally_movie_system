@extends('layouts.admin')
@section('title', '契約管理')
@section('screen-info')
<strong>A-07: 契約管理</strong> ― 契約ステータスのタブ切替、ユーザー別の契約一覧表示。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128179; 契約管理</h1>
    <div style="font-size:13px;color:#888;">有効契約: 892件 / 月間売上: &yen;687,940</div>
</div>

{{-- タブ --}}
<div class="tabs">
    <div class="tab active" data-tab="sub-all">全て (1,247)</div>
    <div class="tab" data-tab="sub-active">有効 (892)</div>
    <div class="tab" data-tab="sub-canceled">解約 (298)</div>
    <div class="tab" data-tab="sub-overdue">未払い (57)</div>
</div>

{{-- フィルタ --}}
<div class="filter-bar">
    <div class="search-bar">
        <span>&#128269;</span>
        <input type="text" placeholder="ユーザー名・店舗名で検索...">
    </div>
    <select class="form-input" style="width:auto;">
        <option>プラン: 全て</option>
        <option>月額プラン</option>
        <option>年額プラン</option>
        <option>店舗プラン</option>
    </select>
</div>

@php
$subs = [
    ['name'=>'田中 美咲','type'=>'個人','plan'=>'月額プラン','status'=>'有効','color'=>'#e8f5e9;color:#2e7d32','start'=>'2026/03/24','next'=>'2026/04/24'],
    ['name'=>'佐藤 健太','type'=>'個人','plan'=>'年額プラン','status'=>'有効','color'=>'#e8f5e9;color:#2e7d32','start'=>'2026/03/23','next'=>'2027/03/23'],
    ['name'=>'Beauty Salon Aria<br><span style="font-size:11px;color:#888;">店舗契約 (5名)</span>','type'=>'店舗','plan'=>'店舗プラン','status'=>'有効','color'=>'#e8f5e9;color:#2e7d32','start'=>'2026/03/23','next'=>'2026/04/23'],
    ['name'=>'高橋 由美','type'=>'個人','plan'=>'月額プラン','status'=>'未払い','color'=>'#fff3e0;color:#e65100','start'=>'2025/12/01','next'=>'<span style="color:#c62828;">2026/03/01 (延滞)</span>'],
    ['name'=>'鈴木 花子','type'=>'個人','plan'=>'月額プラン','status'=>'解約','color'=>'#ffebee;color:#c62828','start'=>'2025/06/15','next'=>'-'],
    ['name'=>'Hair Studio BLOOM<br><span style="font-size:11px;color:#888;">店舗契約 (10名)</span>','type'=>'店舗','plan'=>'店舗プラン','status'=>'有効','color'=>'#e8f5e9;color:#2e7d32','start'=>'2025/10/01','next'=>'2026/04/01'],
];
@endphp

{{-- TAB: 全て --}}
<div class="tab-panel active" id="sub-all">
    <table class="data-table">
        <thead><tr><th>ユーザー名 / 店舗名</th><th>プラン</th><th>ステータス</th><th>開始日</th><th>次回請求日</th><th>操作</th></tr></thead>
        <tbody>
            @foreach ($subs as $s)
            <tr>
                <td><strong>{!! $s['name'] !!}</strong></td>
                <td>{{ $s['plan'] }}</td>
                <td><span class="badge" style="background:{{ $s['color'] }}">{{ $s['status'] }}</span></td>
                <td>{{ $s['start'] }}</td>
                <td>{!! $s['next'] !!}</td>
                <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="text-align:center;padding:20px;color:#888;font-size:13px;">全 1,247 件中 1〜6 件を表示 | &laquo; 前へ 1 2 3 ... 208 次へ &raquo;</div>
</div>

{{-- TAB: 有効 --}}
<div class="tab-panel" id="sub-active" style="display:none;">
    <table class="data-table">
        <thead><tr><th>ユーザー名 / 店舗名</th><th>プラン</th><th>ステータス</th><th>開始日</th><th>次回請求日</th><th>操作</th></tr></thead>
        <tbody>
            @foreach ($subs as $s)
                @if ($s['status'] === '有効')
                <tr>
                    <td><strong>{!! $s['name'] !!}</strong></td>
                    <td>{{ $s['plan'] }}</td>
                    <td><span class="badge" style="background:{{ $s['color'] }}">{{ $s['status'] }}</span></td>
                    <td>{{ $s['start'] }}</td>
                    <td>{!! $s['next'] !!}</td>
                    <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    <div style="text-align:center;padding:20px;color:#888;font-size:13px;">有効契約 892 件中 1〜4 件を表示</div>
</div>

{{-- TAB: 解約 --}}
<div class="tab-panel" id="sub-canceled" style="display:none;">
    <table class="data-table">
        <thead><tr><th>ユーザー名 / 店舗名</th><th>プラン</th><th>ステータス</th><th>開始日</th><th>解約日</th><th>操作</th></tr></thead>
        <tbody>
            @foreach ($subs as $s)
                @if ($s['status'] === '解約')
                <tr>
                    <td><strong>{!! $s['name'] !!}</strong></td>
                    <td>{{ $s['plan'] }}</td>
                    <td><span class="badge" style="background:{{ $s['color'] }}">{{ $s['status'] }}</span></td>
                    <td>{{ $s['start'] }}</td>
                    <td>2026/02/15</td>
                    <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    <div style="text-align:center;padding:20px;color:#888;font-size:13px;">解約 298 件中 1〜1 件を表示</div>
</div>

{{-- TAB: 未払い --}}
<div class="tab-panel" id="sub-overdue" style="display:none;">
    <div style="background:#fff3e0;border-left:4px solid #e65100;padding:12px 16px;border-radius:4px;margin-bottom:16px;font-size:13px;color:#e65100;">
        &#9888; 未払いの契約が 57 件あります。対応が必要な場合は個別に確認してください。
    </div>
    <table class="data-table">
        <thead><tr><th>ユーザー名 / 店舗名</th><th>プラン</th><th>ステータス</th><th>延滞開始日</th><th>未払い金額</th><th>操作</th></tr></thead>
        <tbody>
            @foreach ($subs as $s)
                @if ($s['status'] === '未払い')
                <tr>
                    <td><strong>{!! $s['name'] !!}</strong></td>
                    <td>{{ $s['plan'] }}</td>
                    <td><span class="badge" style="background:{{ $s['color'] }}">{{ $s['status'] }}</span></td>
                    <td>2026/03/01</td>
                    <td style="font-weight:600;color:#c62828;">&yen;770</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-secondary">詳細</a>
                        <a href="#" class="btn btn-sm btn-primary" style="margin-left:4px;">再請求</a>
                    </td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    <div style="text-align:center;padding:20px;color:#888;font-size:13px;">未払い 57 件中 1〜1 件を表示</div>
</div>

<div class="page-nav">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.users.index') }}">ユーザー管理 (A-08)</a> |
    <a href="{{ route('admin.organizations.index') }}">店舗管理 (A-09)</a> |
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
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
