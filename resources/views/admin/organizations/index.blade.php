@extends('layouts.admin')

@section('title', '店舗管理')

@section('screen-info')
    <strong>A-09:</strong> 店舗管理。登録店舗の一覧、契約状態・メンバー数の確認。店舗詳細では全メンバーを表示。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#127970; 店舗管理</h1>
    <button class="btn btn-primary" onclick="alert('店舗登録画面へ遷移（プロトタイプ）')">＋ 新規登録</button>
</div>

<div class="filter-bar">
    <div class="search-bar">
        <span>&#128269;</span>
        <input type="text" placeholder="店舗名で検索...">
    </div>
    <select>
        <option>契約状態: 全て</option>
        <option>有効</option>
        <option>未契約</option>
        <option>解約済</option>
    </select>
</div>

<table class="data-table">
    <thead>
        <tr>
            <th>店舗名</th>
            <th>契約状態</th>
            <th>メンバー数</th>
            <th>管理者名</th>
            <th>登録日</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>Beauty Salon Aria</strong></td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">有効</span></td>
            <td>5 / 5名</td>
            <td>伊藤 真理</td>
            <td>2026/03/20</td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
        <tr>
            <td><strong>Hair Studio BLOOM</strong></td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">有効</span></td>
            <td>8 / 10名</td>
            <td>中村 太郎</td>
            <td>2025/10/01</td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
        <tr>
            <td><strong>Salon de Luxe</strong></td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">有効</span></td>
            <td>3 / 5名</td>
            <td>木村 愛子</td>
            <td>2025/08/15</td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
        <tr>
            <td><strong>HAIR MAKE Coco</strong></td>
            <td><span class="badge" style="background:#ffebee;color:#c62828;">解約済</span></td>
            <td>0 / 5名</td>
            <td>松田 健一</td>
            <td>2025/04/10</td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
        <tr>
            <td><strong>Atelier Mio</strong></td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">有効</span></td>
            <td>12 / 15名</td>
            <td>渡辺 美穂</td>
            <td>2025/02/20</td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
    </tbody>
</table>

<div style="text-align:center;padding:20px;color:#888;font-size:13px;">
    全 5 件を表示
</div>

<div class="page-nav">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.users.index') }}">ユーザー管理 (A-08)</a> |
    <a href="{{ route('admin.subscriptions.index') }}">契約管理 (A-07)</a> |
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
</div>
@endsection
