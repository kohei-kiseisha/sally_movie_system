@extends('layouts.admin')

@section('title', 'イベント管理')

@section('screen-info')
    <strong>A-06:</strong> イベント管理一覧。イベントの検索・ステータスフィルタ・新規作成への遷移。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128197; イベント管理</h1>
    <button class="btn btn-primary" onclick="alert('イベント作成画面へ遷移（プロトタイプ）')">＋ 新規作成</button>
</div>

<div class="filter-bar">
    <div class="search-bar">
        <span>&#128269;</span>
        <input type="text" placeholder="イベント名で検索...">
    </div>
    <select>
        <option>ステータス: 全て</option>
        <option>下書き</option>
        <option>募集中</option>
        <option>締切</option>
        <option>終了</option>
    </select>
</div>

<table class="data-table">
    <thead>
        <tr>
            <th>イベント名</th>
            <th>日時</th>
            <th>場所</th>
            <th>定員</th>
            <th>申込数</th>
            <th>ステータス</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>カット技術ライブセミナー</strong></td>
            <td>2026/04/15 14:00</td>
            <td>東京・渋谷</td>
            <td>30</td>
            <td>22</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">募集中</span></td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>カラーリング実践ワークショップ</strong></td>
            <td>2026/04/22 10:00</td>
            <td>大阪・梅田</td>
            <td>20</td>
            <td>8</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">募集中</span></td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>サロン経営セミナー 2026春</strong></td>
            <td>2026/05/10 13:00</td>
            <td>オンライン</td>
            <td>100</td>
            <td>0</td>
            <td><span class="badge" style="background:#f5f5f5;color:#666;">下書き</span></td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>ヘアアレンジ体験会</strong></td>
            <td>2026/03/10 11:00</td>
            <td>名古屋・栄</td>
            <td>15</td>
            <td>15</td>
            <td><span class="badge" style="background:#fff3e0;color:#e65100;">締切</span></td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>トリートメント講座</strong></td>
            <td>2026/02/20 15:00</td>
            <td>東京・表参道</td>
            <td>25</td>
            <td>23</td>
            <td><span class="badge" style="background:#e0e0e0;color:#555;">終了</span></td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
    </tbody>
</table>

<div style="text-align:center;padding:20px;color:#888;font-size:13px;">
    全 5 件を表示
</div>

<div class="page-nav">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
</div>
@endsection
