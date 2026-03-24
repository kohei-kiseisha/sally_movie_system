@extends('layouts.front')

@section('screen-info')
<strong>F-20: 設定画面</strong> - プロフィール・通知・契約・LINE連携・ログアウト
@endsection

@section('content')
<div class="section" style="max-width: 600px;">
    <div class="section-title">設定</div>

    {{-- ユーザー情報 --}}
    <div style="display: flex; align-items: center; gap: 16px; background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,.06); margin-bottom: 24px;">
        <div class="avatar" style="width: 56px; height: 56px; font-size: 20px;">Y</div>
        <div>
            <div style="font-size: 16px; font-weight: 700;">山田 花子</div>
            <div style="font-size: 13px; color: #888;">SALLY141 大阪本店 所属</div>
        </div>
    </div>

    {{-- 設定メニュー --}}
    <div class="link-list" style="margin-bottom: 24px;">
        <div class="link-list-item">
            <div style="display: flex; align-items: center; gap: 12px;">
                <span style="font-size: 18px;">&#128100;</span>
                <div>
                    <div style="font-size: 14px; font-weight: 600;">プロフィール編集</div>
                    <div style="font-size: 12px; color: #888;">名前・プロフィール画像の変更</div>
                </div>
            </div>
            <span class="arrow">&rarr;</span>
        </div>

        <div class="link-list-item">
            <div style="display: flex; align-items: center; gap: 12px;">
                <span style="font-size: 18px;">&#128276;</span>
                <div>
                    <div style="font-size: 14px; font-weight: 600;">通知設定</div>
                    <div style="font-size: 12px; color: #888;">LINE通知・メール通知の設定</div>
                </div>
            </div>
            <span class="arrow">&rarr;</span>
        </div>

        <a href="{{ route('front.plan') }}" class="link-list-item">
            <div style="display: flex; align-items: center; gap: 12px;">
                <span style="font-size: 18px;">&#128179;</span>
                <div>
                    <div style="font-size: 14px; font-weight: 600;">契約情報</div>
                    <div style="font-size: 12px; color: #888;">スタンダードプラン（月額770円）</div>
                </div>
            </div>
            <span class="arrow">&rarr;</span>
        </a>

        <div class="link-list-item">
            <div style="display: flex; align-items: center; gap: 12px;">
                <span style="font-size: 18px; color: #06c755;">&#128172;</span>
                <div>
                    <div style="font-size: 14px; font-weight: 600;">LINE連携</div>
                    <div style="font-size: 12px; color: #2e7d32;">&#9989; 連携済み</div>
                </div>
            </div>
            <span class="arrow">&rarr;</span>
        </div>
    </div>

    {{-- ログアウト --}}
    <div class="link-list">
        <div class="link-list-item" style="justify-content: center; color: #D8A39D; font-weight: 600;">
            ログアウト
        </div>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.plan') }}">契約・プラン (F-19)</a> |
<a href="{{ route('front.mypage') }}">マイページ</a> |
<a href="{{ route('front.login') }}">ログイン (F-02)</a>
@endsection
