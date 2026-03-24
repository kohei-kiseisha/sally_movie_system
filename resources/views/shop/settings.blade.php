@extends('layouts.shop')
@section('title', '店舗設定')
@section('screen-info')
<strong>S-07: 店舗設定</strong> ― 店舗名・住所・電話番号・管理者メール・パスワード変更。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#9881; 店舗設定</h1>
</div>

{{-- 店舗情報 --}}
<div class="card" style="margin-bottom:24px;">
    <div class="card-body" style="padding:24px;">
        <h3 style="font-size:16px;font-weight:700;margin-bottom:20px;">店舗情報</h3>
        <form>
            <div class="form-group">
                <label>店舗名</label>
                <input type="text" class="form-input" value="SALLY141 渋谷店">
            </div>
            <div class="form-group">
                <label>住所</label>
                <input type="text" class="form-input" value="東京都渋谷区神南1-2-3 ABCビル 3F">
            </div>
            <div class="form-group">
                <label>電話番号</label>
                <input type="tel" class="form-input" value="03-1234-5678">
            </div>
            <div class="form-group">
                <label>管理者メールアドレス</label>
                <input type="email" class="form-input" value="shop@sally141.jp">
            </div>
            <button type="button" class="btn btn-primary" onclick="alert('保存しました（プロトタイプ）')">&#128190; 変更を保存</button>
        </form>
    </div>
</div>

{{-- パスワード変更 --}}
<div class="card" style="margin-bottom:24px;">
    <div class="card-body" style="padding:24px;">
        <h3 style="font-size:16px;font-weight:700;margin-bottom:20px;">&#128274; パスワード変更</h3>
        <form>
            <div class="form-group">
                <label>現在のパスワード</label>
                <input type="password" class="form-input" placeholder="現在のパスワードを入力">
            </div>
            <div class="form-group">
                <label>新しいパスワード</label>
                <input type="password" class="form-input" placeholder="新しいパスワードを入力">
            </div>
            <div class="form-group">
                <label>新しいパスワード（確認）</label>
                <input type="password" class="form-input" placeholder="新しいパスワードを再入力">
            </div>
            <button type="button" class="btn btn-primary" onclick="alert('パスワードを変更しました（プロトタイプ）')">パスワードを変更</button>
        </form>
    </div>
</div>

{{-- ログアウト --}}
<div class="card">
    <div class="card-body" style="padding:24px;text-align:center;">
        <a href="{{ route('shop.login') }}" class="btn btn-outline">&#128682; ログアウト</a>
    </div>
</div>

<div class="page-nav" style="margin-top:32px;">
    <strong>遷移先:</strong>
    <a href="{{ route('shop.dashboard') }}">ダッシュボード (S-02)</a> |
    <a href="{{ route('shop.subscription') }}">契約管理 (S-06)</a> |
    <a href="{{ route('shop.login') }}">ログイン (S-01)</a>
</div>
@endsection
