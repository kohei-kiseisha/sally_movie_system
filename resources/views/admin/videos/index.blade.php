@extends('layouts.admin')

@section('title', '動画管理')

@section('screen-info')
    <strong>A-03:</strong> 動画管理一覧。登録済み動画の検索・フィルタリング・一覧表示。新規登録への遷移。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#127909; 動画管理</h1>
    <a href="{{ route('admin.videos.create') }}" class="btn btn-primary">＋ 新規登録</a>
</div>

{{-- Search / Filter --}}
<div class="filter-bar">
    <div class="search-bar">
        <span>&#128269;</span>
        <input type="text" placeholder="動画タイトルで検索...">
    </div>
    <select>
        <option>全カテゴリー</option>
        <option>カット</option>
        <option>カラー</option>
        <option>パーマ</option>
        <option>トリートメント</option>
        <option>接客・マナー</option>
    </select>
    <select>
        <option>全コース</option>
        <option>カット基礎マスター講座</option>
        <option>ハイトーンカラー完全ガイド</option>
    </select>
    <select>
        <option>公開状態: 全て</option>
        <option>公開</option>
        <option>非公開</option>
        <option>下書き</option>
    </select>
</div>

<table class="data-table">
    <thead>
        <tr>
            <th>タイトル</th>
            <th>カテゴリー</th>
            <th>コース</th>
            <th>時間</th>
            <th>公開状態</th>
            <th>視聴数</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>レイヤーカットの基本</strong></td>
            <td>カット</td>
            <td>カット基礎マスター講座</td>
            <td>12:34</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">公開</span></td>
            <td>2,340</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>グラデーションボブの作り方</strong></td>
            <td>カット</td>
            <td>カット基礎マスター講座</td>
            <td>18:20</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">公開</span></td>
            <td>1,890</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>ブリーチワークの注意点</strong></td>
            <td>カラー</td>
            <td>ハイトーンカラー完全ガイド</td>
            <td>15:45</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">公開</span></td>
            <td>1,560</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>デザインカラーの提案方法</strong></td>
            <td>カラー</td>
            <td>ハイトーンカラー完全ガイド</td>
            <td>10:12</td>
            <td><span class="badge" style="background:#fff3e0;color:#e65100;">下書き</span></td>
            <td>-</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>トリートメント施術の流れ</strong></td>
            <td>トリートメント</td>
            <td>ヘッドスパ＆トリートメント</td>
            <td>22:08</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">公開</span></td>
            <td>980</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>パーマロッド巻き方解説</strong></td>
            <td>パーマ</td>
            <td>-</td>
            <td>14:55</td>
            <td><span class="badge" style="background:#ffebee;color:#c62828;">非公開</span></td>
            <td>420</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
    </tbody>
</table>

<div style="text-align:center;padding:20px;color:#888;font-size:13px;">
    全 48 件中 1〜6 件を表示 | &laquo; 前へ 1 2 3 ... 8 次へ &raquo;
</div>

<div class="page-nav">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.videos.create') }}">動画登録 (A-03 detail)</a> |
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
</div>
@endsection
