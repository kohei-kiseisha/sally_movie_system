@extends('layouts.front')

@section('screen-info')
<strong>F-17: イベント申込完了</strong> - 申込完了メッセージ
@endsection

@section('content')
<div class="completion-screen">
    <div class="completion-icon">&#127881;</div>
    <h1 style="font-size: 24px; font-weight: 800; margin-bottom: 12px;">申込が完了しました！</h1>
    <p style="color: #666; font-size: 15px; margin-bottom: 8px;">
        「ブライダルヘアセット実践ワークショップ」への申込を受け付けました。
    </p>
    <p style="color: #888; font-size: 14px; margin-bottom: 32px;">
        申込確認メールをLINEにお送りしました。<br>
        イベント当日のご参加をお待ちしております。
    </p>

    <div style="background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,.06); margin-bottom: 32px; text-align: left;">
        <div style="font-size: 14px; font-weight: 700; margin-bottom: 12px;">申込内容</div>
        <div style="font-size: 13px; color: #555; line-height: 2;">
            &#128197; 2026年4月12日（日） 13:00 - 17:00<br>
            &#128205; SALLY141 大阪本店 セミナールーム
        </div>
    </div>

    <a href="{{ route('front.events.index') }}" class="btn btn-primary" style="margin-right: 8px;">イベント一覧へ</a>
    <a href="{{ route('front.top') }}" class="btn btn-secondary">トップへ戻る</a>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.events.index') }}">イベント一覧 (F-14)</a> |
<a href="{{ route('front.top') }}">トップ (F-01)</a>
@endsection
