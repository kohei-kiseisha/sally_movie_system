@extends('layouts.shop')
@section('title', 'メンバー招待')
@section('screen-info')
<strong>S-05: メンバー招待画面</strong> ― 招待リンク発行・QRコード表示・LINE共有・招待履歴管理。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128233; メンバー招待</h1>
    <a href="{{ route('shop.members.index') }}" class="btn btn-secondary">&#8592; メンバー一覧</a>
</div>

{{-- 招待リンク生成 --}}
<div class="card" style="margin-bottom:24px;">
    <div class="card-body" style="padding:24px;">
        <h3 style="font-size:16px;font-weight:700;margin-bottom:16px;">&#128279; 招待リンク</h3>
        <div style="display:flex;gap:8px;align-items:center;margin-bottom:16px;">
            <input type="text" class="form-input" value="https://learning.sally141.jp/invite/abc123xyz" readonly style="flex:1;background:#f8f9fa;font-size:13px;">
            <button class="btn btn-primary btn-sm" onclick="alert('コピーしました（プロトタイプ）')">&#128203; コピー</button>
        </div>
        <div style="display:flex;gap:12px;align-items:center;">
            <button class="btn btn-line">&#128172; LINEで共有</button>
            <span style="font-size:13px;color:#888;">リンクをLINEで直接送信できます</span>
        </div>
    </div>
</div>

{{-- QRコード --}}
<div class="grid grid-2" style="margin-bottom:24px;">
    <div class="card">
        <div class="card-body" style="text-align:center;padding:32px;">
            <h3 style="font-size:16px;font-weight:700;margin-bottom:16px;">&#128243; QRコード</h3>
            <div style="width:180px;height:180px;background:#f8f9fa;border:2px dashed #ddd;border-radius:12px;margin:0 auto 16px;display:flex;align-items:center;justify-content:center;color:#999;font-size:13px;">
                QRコード<br>プレースホルダー
            </div>
            <button class="btn btn-secondary btn-sm">&#128190; QRコードを保存</button>
        </div>
    </div>

    {{-- リンク有効期限設定 --}}
    <div class="card">
        <div class="card-body" style="padding:32px;">
            <h3 style="font-size:16px;font-weight:700;margin-bottom:16px;">&#9881; リンク設定</h3>
            <div class="form-group">
                <label>有効期限</label>
                <select class="form-input">
                    <option>7日間</option>
                    <option selected>14日間</option>
                    <option>30日間</option>
                    <option>無期限</option>
                </select>
            </div>
            <div class="form-group">
                <label>使用回数上限</label>
                <select class="form-input">
                    <option>1回</option>
                    <option>5回</option>
                    <option selected>10回</option>
                    <option>無制限</option>
                </select>
            </div>
            <div class="form-group">
                <label>招待ロール</label>
                <select class="form-input">
                    <option selected>生徒</option>
                    <option>スタッフ</option>
                </select>
            </div>
            <button class="btn btn-primary btn-block">新しいリンクを生成</button>
        </div>
    </div>
</div>

{{-- 招待履歴 --}}
<div>
    <div class="section-title">招待履歴</div>
    <table class="data-table">
        <thead>
            <tr>
                <th>招待リンク</th>
                <th>ロール</th>
                <th>発行日</th>
                <th>有効期限</th>
                <th>使用状況</th>
                <th>ステータス</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-size:13px;font-family:monospace;">...abc123xyz</td>
                <td>生徒</td>
                <td style="font-size:13px;">2026-03-24</td>
                <td style="font-size:13px;">2026-04-07</td>
                <td>3 / 10回</td>
                <td><span class="badge badge-beginner">有効</span></td>
                <td><button class="btn btn-secondary btn-sm">無効化</button></td>
            </tr>
            <tr>
                <td style="font-size:13px;font-family:monospace;">...def456uvw</td>
                <td>スタッフ</td>
                <td style="font-size:13px;">2026-03-15</td>
                <td style="font-size:13px;">2026-03-29</td>
                <td>1 / 1回</td>
                <td><span class="badge badge-completed">使用済み</span></td>
                <td></td>
            </tr>
            <tr>
                <td style="font-size:13px;font-family:monospace;">...ghi789rst</td>
                <td>生徒</td>
                <td style="font-size:13px;">2026-02-20</td>
                <td style="font-size:13px;">2026-03-06</td>
                <td>0 / 5回</td>
                <td><span class="badge badge-advanced">期限切れ</span></td>
                <td></td>
            </tr>
            <tr>
                <td style="font-size:13px;font-family:monospace;">...jkl012opq</td>
                <td>生徒</td>
                <td style="font-size:13px;">2026-02-10</td>
                <td style="font-size:13px;">2026-02-24</td>
                <td>5 / 5回</td>
                <td><span class="badge badge-completed">使用済み</span></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="page-nav" style="margin-top:32px;">
    <strong>遷移先:</strong>
    <a href="{{ route('shop.members.index') }}">メンバー一覧 (S-03)</a> |
    <a href="{{ route('shop.dashboard') }}">ダッシュボード (S-02)</a>
</div>
@endsection
