@extends('layouts.admin')

@section('title', 'カテゴリー管理')

@section('screen-info')
    <strong>A-05:</strong> カテゴリー管理。カテゴリーの一覧・並び替え・新規作成。ドラッグで並び替え可能（プロトタイプではプレースホルダー）。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128193; カテゴリー管理</h1>
    <button class="btn btn-primary" onclick="alert('新規作成モーダルが開きます（プロトタイプ）')">＋ 新規作成</button>
</div>

<p style="font-size:13px;color:#888;margin-bottom:16px;">&#9432; ドラッグ＆ドロップで表示順を変更できます（プロトタイプでは非動作）</p>

<table class="data-table">
    <thead>
        <tr>
            <th style="width:40px;"></th>
            <th style="width:50px;">アイコン</th>
            <th>カテゴリー名</th>
            <th>スラッグ</th>
            <th>コース数</th>
            <th>表示順</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="cursor:grab;color:#ccc;font-size:18px;">&#9776;</td>
            <td style="font-size:24px;">&#9986;</td>
            <td><strong>カット</strong></td>
            <td><code style="background:#f0f0f0;padding:2px 8px;border-radius:4px;font-size:12px;">cut</code></td>
            <td>3</td>
            <td>1</td>
            <td>
                <a href="#" class="btn btn-sm btn-secondary">編集</a>
                <a href="#" class="btn btn-sm btn-secondary" style="color:#c62828;">削除</a>
            </td>
        </tr>
        <tr>
            <td style="cursor:grab;color:#ccc;font-size:18px;">&#9776;</td>
            <td style="font-size:24px;">&#127912;</td>
            <td><strong>カラー</strong></td>
            <td><code style="background:#f0f0f0;padding:2px 8px;border-radius:4px;font-size:12px;">color</code></td>
            <td>2</td>
            <td>2</td>
            <td>
                <a href="#" class="btn btn-sm btn-secondary">編集</a>
                <a href="#" class="btn btn-sm btn-secondary" style="color:#c62828;">削除</a>
            </td>
        </tr>
        <tr>
            <td style="cursor:grab;color:#ccc;font-size:18px;">&#9776;</td>
            <td style="font-size:24px;">&#128260;</td>
            <td><strong>パーマ</strong></td>
            <td><code style="background:#f0f0f0;padding:2px 8px;border-radius:4px;font-size:12px;">perm</code></td>
            <td>1</td>
            <td>3</td>
            <td>
                <a href="#" class="btn btn-sm btn-secondary">編集</a>
                <a href="#" class="btn btn-sm btn-secondary" style="color:#c62828;">削除</a>
            </td>
        </tr>
        <tr>
            <td style="cursor:grab;color:#ccc;font-size:18px;">&#9776;</td>
            <td style="font-size:24px;">&#10024;</td>
            <td><strong>トリートメント</strong></td>
            <td><code style="background:#f0f0f0;padding:2px 8px;border-radius:4px;font-size:12px;">treatment</code></td>
            <td>1</td>
            <td>4</td>
            <td>
                <a href="#" class="btn btn-sm btn-secondary">編集</a>
                <a href="#" class="btn btn-sm btn-secondary" style="color:#c62828;">削除</a>
            </td>
        </tr>
        <tr>
            <td style="cursor:grab;color:#ccc;font-size:18px;">&#9776;</td>
            <td style="font-size:24px;">&#128588;</td>
            <td><strong>接客・マナー</strong></td>
            <td><code style="background:#f0f0f0;padding:2px 8px;border-radius:4px;font-size:12px;">manner</code></td>
            <td>1</td>
            <td>5</td>
            <td>
                <a href="#" class="btn btn-sm btn-secondary">編集</a>
                <a href="#" class="btn btn-sm btn-secondary" style="color:#c62828;">削除</a>
            </td>
        </tr>
        <tr>
            <td style="cursor:grab;color:#ccc;font-size:18px;">&#9776;</td>
            <td style="font-size:24px;">&#128161;</td>
            <td><strong>経営・マーケティング</strong></td>
            <td><code style="background:#f0f0f0;padding:2px 8px;border-radius:4px;font-size:12px;">marketing</code></td>
            <td>0</td>
            <td>6</td>
            <td>
                <a href="#" class="btn btn-sm btn-secondary">編集</a>
                <a href="#" class="btn btn-sm btn-secondary" style="color:#c62828;">削除</a>
            </td>
        </tr>
    </tbody>
</table>

<div class="page-nav" style="margin-top:24px;">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
</div>
@endsection
