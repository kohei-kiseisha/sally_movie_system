@extends('layouts.admin')

@section('title', '管理ダッシュボード')

@section('screen-info')
    <strong>A-02:</strong> 管理ダッシュボード。主要KPIの一覧、直近の契約変動、人気コースTOP5を表示。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128202; ダッシュボード</h1>
    <div style="font-size:13px;color:#888;">最終更新: 2026-03-24 09:00</div>
</div>

{{-- Stats Row --}}
<div class="stats-row">
    <div class="stat-card">
        <div class="stat-number">1,247</div>
        <div class="stat-label">総ユーザー数</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">892</div>
        <div class="stat-label">有料契約数</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">634</div>
        <div class="stat-label">月間アクティブ</div>
    </div>
    <div class="stat-card">
        <div class="stat-number">45,230</div>
        <div class="stat-label">総視聴数</div>
    </div>
    <div class="stat-card">
        <div class="stat-number" style="font-size:26px;">&yen;687,940</div>
        <div class="stat-label">月間売上</div>
    </div>
</div>

{{-- Two Column --}}
<div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-bottom:24px;">

    {{-- Recent Subscriptions / Cancellations --}}
    <div>
        <h3 style="font-size:16px;font-weight:700;margin-bottom:12px;">直近の契約変動</h3>
        <div class="card" style="padding:0;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ユーザー</th>
                        <th>変動</th>
                        <th>プラン</th>
                        <th>日時</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>田中 美咲</td>
                        <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">新規契約</span></td>
                        <td>月額プラン</td>
                        <td>3/24 08:32</td>
                    </tr>
                    <tr>
                        <td>佐藤 健太</td>
                        <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">新規契約</span></td>
                        <td>年額プラン</td>
                        <td>3/23 21:15</td>
                    </tr>
                    <tr>
                        <td>鈴木 花子</td>
                        <td><span class="badge" style="background:#ffebee;color:#c62828;">解約</span></td>
                        <td>月額プラン</td>
                        <td>3/23 18:40</td>
                    </tr>
                    <tr>
                        <td>Beauty Salon Aria</td>
                        <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">店舗契約</span></td>
                        <td>店舗プラン 5名</td>
                        <td>3/23 14:20</td>
                    </tr>
                    <tr>
                        <td>高橋 由美</td>
                        <td><span class="badge" style="background:#fff3e0;color:#e65100;">未払い</span></td>
                        <td>月額プラン</td>
                        <td>3/22 10:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Popular Courses TOP 5 --}}
    <div>
        <h3 style="font-size:16px;font-weight:700;margin-bottom:12px;">人気コース TOP 5</h3>
        <div class="card" style="padding:0;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>コース名</th>
                        <th>登録者数</th>
                        <th>視聴数</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight:700;color:#D8A39D;">1</td>
                        <td>カット基礎マスター講座</td>
                        <td>312</td>
                        <td>8,450</td>
                    </tr>
                    <tr>
                        <td style="font-weight:700;color:#D8A39D;">2</td>
                        <td>ハイトーンカラー完全ガイド</td>
                        <td>287</td>
                        <td>7,320</td>
                    </tr>
                    <tr>
                        <td style="font-weight:700;color:#D8A39D;">3</td>
                        <td>縮毛矯正テクニック</td>
                        <td>245</td>
                        <td>6,180</td>
                    </tr>
                    <tr>
                        <td style="font-weight:700;color:#D8A39D;">4</td>
                        <td>ヘッドスパ＆トリートメント</td>
                        <td>198</td>
                        <td>4,920</td>
                    </tr>
                    <tr>
                        <td style="font-weight:700;color:#D8A39D;">5</td>
                        <td>サロン接客マナー講座</td>
                        <td>176</td>
                        <td>3,860</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="page-nav">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.videos.index') }}">動画管理 (A-03)</a> |
    <a href="{{ route('admin.courses.index') }}">コース管理 (A-04)</a> |
    <a href="{{ route('admin.categories.index') }}">カテゴリー管理 (A-05)</a> |
    <a href="{{ route('admin.events.index') }}">イベント管理 (A-06)</a> |
    <a href="{{ route('admin.subscriptions.index') }}">契約管理 (A-07)</a> |
    <a href="{{ route('admin.users.index') }}">ユーザー管理 (A-08)</a> |
    <a href="{{ route('admin.organizations.index') }}">店舗管理 (A-09)</a>
</div>
@endsection
