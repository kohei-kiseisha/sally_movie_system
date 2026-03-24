@extends('layouts.admin')
@section('title', '管理者管理')
@section('screen-info')
<strong>A-11: 管理者管理</strong> ― SALLY141運営スタッフの一覧・追加・権限管理。サービス利用者は「ユーザー管理」で別管理。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128272; 管理者管理</h1>
    <button class="btn btn-primary" onclick="document.getElementById('addAdminForm').style.display=document.getElementById('addAdminForm').style.display==='none'?'block':'none'">＋ 管理者を追加</button>
</div>

{{-- 追加フォーム（トグル） --}}
<div id="addAdminForm" style="display:none;background:#FFFDF9;border-radius:12px;padding:24px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:24px;">
    <div style="font-size:16px;font-weight:700;margin-bottom:16px;">&#128100; 新しい管理者を追加</div>
    <div style="display:flex;gap:16px;flex-wrap:wrap;">
        <div class="form-group" style="flex:1;min-width:200px;">
            <label>名前 <span style="color:#D8A39D;">*</span></label>
            <input class="form-input" placeholder="例: 山本 太郎">
        </div>
        <div class="form-group" style="flex:1;min-width:200px;">
            <label>メールアドレス <span style="color:#D8A39D;">*</span></label>
            <input class="form-input" type="email" placeholder="例: yamamoto@sally141.com">
        </div>
        <div class="form-group" style="flex:1;min-width:200px;">
            <label>権限 <span style="color:#D8A39D;">*</span></label>
            <select class="form-input">
                <option value="">選択してください</option>
                <option>スーパー管理者</option>
                <option>運営スタッフ</option>
                <option>コンテンツ管理者</option>
                <option>閲覧のみ</option>
            </select>
        </div>
    </div>
    <div style="font-size:12px;color:#9B8E82;margin-bottom:16px;">
        &#128161; 登録すると仮パスワードがメールアドレスに自動送信されます。初回ログイン時にパスワード変更が必要です。
    </div>
    <div style="display:flex;gap:8px;">
        <button class="btn btn-primary btn-sm">招待メールを送信</button>
        <button class="btn btn-secondary btn-sm" onclick="document.getElementById('addAdminForm').style.display='none'">キャンセル</button>
    </div>
</div>

{{-- 権限の説明 --}}
<div style="background:#F5F0E6;border-radius:8px;padding:14px 16px;margin-bottom:24px;font-size:13px;color:#6B5D52;">
    <strong>権限レベル:</strong>
    <span style="margin-left:12px;"><span class="badge" style="background:#ffebee;color:#c62828;">スーパー管理者</span> 全機能＋管理者の追加/削除</span>
    <span style="margin-left:12px;"><span class="badge" style="background:#ede7f6;color:#4527a0;">運営スタッフ</span> コンテンツ＋ユーザー＋契約管理</span>
    <span style="margin-left:12px;"><span class="badge" style="background:#e3f2fd;color:#1565c0;">コンテンツ管理者</span> 動画/コース/カテゴリーのみ</span>
    <span style="margin-left:12px;"><span class="badge" style="background:#F5F0E6;color:#6B5D52;border:1px solid #E8DDD0;">閲覧のみ</span> 読み取り専用</span>
</div>

{{-- 管理者一覧 --}}
<table class="data-table">
    <thead>
        <tr>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>権限</th>
            <th>最終ログイン</th>
            <th>ステータス</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div class="avatar" style="width:32px;height:32px;font-size:12px;">中</div>
                    <strong>中村 拓也</strong>
                </div>
            </td>
            <td>nakamura@sally141.com</td>
            <td><span class="badge" style="background:#ffebee;color:#c62828;">スーパー管理者</span></td>
            <td>2026/03/24 10:30</td>
            <td><span style="color:#4caf50;font-size:18px;">&#9679;</span> オンライン</td>
            <td><a href="#" class="btn btn-sm btn-secondary">編集</a></td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div class="avatar" style="width:32px;height:32px;font-size:12px;">佐</div>
                    <strong>佐藤 美咲</strong>
                </div>
            </td>
            <td>sato@sally141.com</td>
            <td><span class="badge" style="background:#ede7f6;color:#4527a0;">運営スタッフ</span></td>
            <td>2026/03/24 09:15</td>
            <td><span style="color:#4caf50;font-size:18px;">&#9679;</span> オンライン</td>
            <td>
                <a href="#" class="btn btn-sm btn-secondary">編集</a>
                <a href="#" class="btn btn-sm btn-secondary" style="color:#c62828;">無効化</a>
            </td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div class="avatar" style="width:32px;height:32px;font-size:12px;">田</div>
                    <strong>田中 優子</strong>
                </div>
            </td>
            <td>tanaka@sally141.com</td>
            <td><span class="badge" style="background:#e3f2fd;color:#1565c0;">コンテンツ管理者</span></td>
            <td>2026/03/23 18:45</td>
            <td><span style="color:#9B8E82;font-size:18px;">&#9679;</span> オフライン</td>
            <td>
                <a href="#" class="btn btn-sm btn-secondary">編集</a>
                <a href="#" class="btn btn-sm btn-secondary" style="color:#c62828;">無効化</a>
            </td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div class="avatar" style="width:32px;height:32px;font-size:12px;">鈴</div>
                    <strong>鈴木 一郎</strong>
                </div>
            </td>
            <td>suzuki@sally141.com</td>
            <td><span class="badge" style="background:#F5F0E6;color:#6B5D52;border:1px solid #E8DDD0;">閲覧のみ</span></td>
            <td>2026/03/22 14:20</td>
            <td><span style="color:#9B8E82;font-size:18px;">&#9679;</span> オフライン</td>
            <td>
                <a href="#" class="btn btn-sm btn-secondary">編集</a>
                <a href="#" class="btn btn-sm btn-secondary" style="color:#c62828;">無効化</a>
            </td>
        </tr>
        <tr style="opacity:0.5;">
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div class="avatar" style="width:32px;height:32px;font-size:12px;background:#E8DDD0;color:#9B8E82;">高</div>
                    <span style="color:#9B8E82;">高橋 健二</span>
                </div>
            </td>
            <td style="color:#9B8E82;">takahashi@sally141.com</td>
            <td><span class="badge" style="background:#ede7f6;color:#4527a0;">運営スタッフ</span></td>
            <td style="color:#9B8E82;">2026/01/15 11:00</td>
            <td><span class="badge" style="background:#ffebee;color:#c62828;">無効</span></td>
            <td>
                <a href="#" class="btn btn-sm btn-secondary">復元</a>
            </td>
        </tr>
    </tbody>
</table>

{{-- 権限詳細テーブル --}}
<div class="section-title" style="margin-top:32px;">権限マトリクス</div>
<table class="data-table">
    <thead>
        <tr>
            <th>機能</th>
            <th style="text-align:center;">スーパー管理者</th>
            <th style="text-align:center;">運営スタッフ</th>
            <th style="text-align:center;">コンテンツ管理者</th>
            <th style="text-align:center;">閲覧のみ</th>
        </tr>
    </thead>
    <tbody>
        @php
        $perms = [
            ['name'=>'ダッシュボード閲覧','super'=>true,'staff'=>true,'content'=>true,'view'=>true],
            ['name'=>'動画・コース・カテゴリー管理','super'=>true,'staff'=>true,'content'=>true,'view'=>false],
            ['name'=>'ユーザー管理','super'=>true,'staff'=>true,'content'=>false,'view'=>false],
            ['name'=>'店舗管理','super'=>true,'staff'=>true,'content'=>false,'view'=>false],
            ['name'=>'契約・売上管理','super'=>true,'staff'=>true,'content'=>false,'view'=>false],
            ['name'=>'イベント管理','super'=>true,'staff'=>true,'content'=>false,'view'=>false],
            ['name'=>'インフルエンサー管理','super'=>true,'staff'=>true,'content'=>false,'view'=>false],
            ['name'=>'管理者の追加・削除','super'=>true,'staff'=>false,'content'=>false,'view'=>false],
            ['name'=>'報酬設定・振込処理','super'=>true,'staff'=>false,'content'=>false,'view'=>false],
            ['name'=>'システム設定','super'=>true,'staff'=>false,'content'=>false,'view'=>false],
        ];
        @endphp
        @foreach ($perms as $p)
        <tr>
            <td style="font-weight:600;">{{ $p['name'] }}</td>
            <td style="text-align:center;font-size:16px;">{!! $p['super'] ? '<span style="color:#4caf50;">&#9679;</span>' : '<span style="color:#E8DDD0;">&#9679;</span>' !!}</td>
            <td style="text-align:center;font-size:16px;">{!! $p['staff'] ? '<span style="color:#4caf50;">&#9679;</span>' : '<span style="color:#E8DDD0;">&#9679;</span>' !!}</td>
            <td style="text-align:center;font-size:16px;">{!! $p['content'] ? '<span style="color:#4caf50;">&#9679;</span>' : '<span style="color:#E8DDD0;">&#9679;</span>' !!}</td>
            <td style="text-align:center;font-size:16px;">{!! $p['view'] ? '<span style="color:#4caf50;">&#9679;</span>' : '<span style="color:#E8DDD0;">&#9679;</span>' !!}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="page-nav" style="margin-top:24px;">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.users.index') }}">ユーザー管理 (A-08)</a> |
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
</div>
@endsection
