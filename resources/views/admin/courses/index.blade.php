@extends('layouts.admin')

@section('title', 'コース管理')

@section('screen-info')
    <strong>A-04:</strong> コース管理一覧。コースの検索・一覧表示・新規作成への遷移。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128218; コース管理</h1>
    <a href="{{ route('admin.courses.create') }}" class="btn btn-primary">＋ 新規作成</a>
</div>

<div class="filter-bar">
    <div class="search-bar">
        <span>&#128269;</span>
        <input type="text" placeholder="コース名で検索...">
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
        <option>レベル: 全て</option>
        <option>初級</option>
        <option>中級</option>
        <option>上級</option>
    </select>
</div>

<table class="data-table">
    <thead>
        <tr>
            <th>コース名</th>
            <th>カテゴリー</th>
            <th>レベル</th>
            <th>動画数</th>
            <th>公開状態</th>
            <th>登録者数</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>カット基礎マスター講座</strong></td>
            <td>カット</td>
            <td><span class="level-badge level-beginner">初級</span></td>
            <td>12</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">公開</span></td>
            <td>312</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>ハイトーンカラー完全ガイド</strong></td>
            <td>カラー</td>
            <td><span class="level-badge level-intermediate">中級</span></td>
            <td>10</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">公開</span></td>
            <td>287</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>縮毛矯正テクニック</strong></td>
            <td>パーマ</td>
            <td><span class="level-badge level-advanced">上級</span></td>
            <td>8</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">公開</span></td>
            <td>245</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>ヘッドスパ＆トリートメント</strong></td>
            <td>トリートメント</td>
            <td><span class="level-badge level-beginner">初級</span></td>
            <td>6</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">公開</span></td>
            <td>198</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>サロン接客マナー講座</strong></td>
            <td>接客・マナー</td>
            <td><span class="level-badge level-beginner">初級</span></td>
            <td>5</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">公開</span></td>
            <td>176</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td><strong>メンズカット応用テクニック</strong></td>
            <td>カット</td>
            <td><span class="level-badge level-intermediate">中級</span></td>
            <td>3</td>
            <td><span class="badge" style="background:#fff3e0;color:#e65100;">下書き</span></td>
            <td>-</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
    </tbody>
</table>

<div style="text-align:center;padding:20px;color:#888;font-size:13px;">
    全 12 件中 1〜6 件を表示 | &laquo; 前へ 1 2 次へ &raquo;
</div>

<div class="page-nav">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.courses.create') }}">コース作成 (A-04 detail)</a> |
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
</div>
@endsection
