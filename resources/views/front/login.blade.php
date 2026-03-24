@extends('layouts.front')
@section('title', 'ログイン')
@section('screen-info')
<strong>F-02: LINEログイン導線</strong> ― LINEアカウントで簡単にログイン/新規登録。LINE Login API v2.1使用想定。
@endsection

@section('content')
<div style="max-width:400px;margin:80px auto;text-align:center;padding:0 20px;">
    <div style="font-size:48px;margin-bottom:16px;">&#128272;</div>
    <h1 style="font-size:24px;font-weight:800;margin-bottom:8px;">ログイン / 新規登録</h1>
    <p style="color:#888;font-size:14px;margin-bottom:32px;">LINEアカウントで簡単にログインできます</p>

    <a href="{{ route('front.register') }}" class="btn btn-line btn-lg btn-block" style="margin-bottom:16px;">
        &#128172; LINEでログイン
    </a>

    <p style="font-size:12px;color:#aaa;margin-top:24px;">
        ログインすると<a href="#" style="color:#D8A39D;">利用規約</a>および<a href="#" style="color:#D8A39D;">プライバシーポリシー</a>に同意したことになります。
    </p>

    <div style="margin-top:40px;padding-top:24px;border-top:1px solid #eee;">
        <p style="font-size:13px;color:#888;margin-bottom:12px;">管理者・店舗管理者の方はこちら</p>
        <a href="{{ route('admin.login') }}" class="btn btn-secondary btn-sm" style="margin-right:8px;">運営管理者ログイン</a>
        <a href="{{ route('shop.login') }}" class="btn btn-secondary btn-sm">店舗管理者ログイン</a>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.register') }}">プロフィール入力 (F-03) ※初回</a> |
<a href="{{ route('front.mypage') }}">マイページ (F-04) ※既存</a> |
<a href="{{ route('admin.login') }}">管理者ログイン (A-01)</a> |
<a href="{{ route('shop.login') }}">店舗管理者ログイン (S-01)</a>
@endsection
