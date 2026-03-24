@extends('layouts.front')

@section('screen-info')
<strong>F-22: 店舗所属完了画面</strong> - 所属完了メッセージ・学習開始ボタン
@endsection

@section('content')
<div class="completion-screen">
    <div class="completion-icon">&#127881;</div>
    <h1 style="font-size: 24px; font-weight: 800; margin-bottom: 12px;">店舗への所属が完了しました！</h1>
    <p style="color: #666; font-size: 15px; margin-bottom: 4px;">ようこそ SALLY141 Learning へ</p>
    <p style="color: #888; font-size: 14px; margin-bottom: 32px;">
        「<strong>SALLY141 大阪本店</strong>」のスタッフとして登録されました。<br>
        これからたくさんの技術を学んでいきましょう！
    </p>

    <div style="background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,.06); margin-bottom: 32px; text-align: left;">
        <div style="font-size: 14px; font-weight: 700; margin-bottom: 12px;">所属情報</div>
        <div style="font-size: 14px; color: #555; line-height: 2;">
            &#127970; 店舗名: SALLY141 大阪本店<br>
            &#128100; ユーザー名: 山田 花子<br>
            &#128179; プラン: スタンダードプラン（月額770円）
        </div>
    </div>

    <a href="{{ route('front.top') }}" class="btn btn-primary btn-lg btn-block">
        &#9654; 学習を始める
    </a>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.top') }}">トップ (F-01)</a> |
<a href="{{ route('front.courses.index') }}">コース一覧 (F-08)</a> |
<a href="{{ route('front.videos.index') }}">動画一覧 (F-05)</a>
@endsection
