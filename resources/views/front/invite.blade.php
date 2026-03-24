@extends('layouts.front')

@section('screen-info')
<strong>F-21: 店舗招待リンク受信画面</strong> - 招待元情報・LINEログインボタン
@endsection

@section('content')
<div class="invite-screen">
    <div style="font-size: 64px; margin-bottom: 16px;">&#128140;</div>
    <div class="org-name">SALLY141 大阪本店</div>
    <p style="color: #888; font-size: 14px; margin-bottom: 8px;">から招待されています</p>

    <div style="background: #fff; border-radius: 12px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,.06); margin: 24px 0; text-align: left;">
        <div style="font-size: 14px; font-weight: 700; margin-bottom: 12px;">SALLY141 Learningとは？</div>
        <p style="font-size: 13px; color: #555; line-height: 1.8;">
            ヘアアレンジなどの技術を動画で学べるオンライン学習プラットフォームです。
            店舗のスタッフとして招待を受けると、月額770円で全てのコースを受講できます。
        </p>
    </div>

    <p style="font-size: 13px; color: #888; margin-bottom: 24px;">
        LINEアカウントでログインして、店舗に参加しましょう。
    </p>

    <a href="{{ route('front.invite.complete') }}" class="btn btn-line btn-lg btn-block" style="margin-bottom: 12px;">
        &#128172; LINEでログインして参加
    </a>

    <p style="font-size: 11px; color: #aaa; margin-top: 16px;">
        ログインすることで<a href="#" style="color: #D8A39D; text-decoration: underline;">利用規約</a>と<a href="#" style="color: #D8A39D; text-decoration: underline;">プライバシーポリシー</a>に同意したものとみなされます。
    </p>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.invite.complete') }}">店舗所属完了 (F-22)</a>
@endsection
