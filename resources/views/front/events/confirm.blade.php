@extends('layouts.front')

@section('screen-info')
<strong>F-16: イベント申込確認</strong> - 申込内容の確認画面
@endsection

@section('content')
<div class="section" style="max-width: 600px;">
    <h1 style="font-size: 22px; font-weight: 800; margin-bottom: 24px; text-align: center;">申込内容の確認</h1>

    <div style="background: #fff; border-radius: 12px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,.06); margin-bottom: 24px;">
        <div style="display: grid; gap: 16px;">
            <div>
                <div style="font-size: 12px; color: #888; margin-bottom: 2px;">イベント名</div>
                <div style="font-size: 15px; font-weight: 600;">ブライダルヘアセット実践ワークショップ</div>
            </div>
            <div>
                <div style="font-size: 12px; color: #888; margin-bottom: 2px;">日時</div>
                <div style="font-size: 15px;">2026年4月12日（日） 13:00 - 17:00</div>
            </div>
            <div>
                <div style="font-size: 12px; color: #888; margin-bottom: 2px;">場所</div>
                <div style="font-size: 15px;">SALLY141 大阪本店 セミナールーム</div>
            </div>
            <div>
                <div style="font-size: 12px; color: #888; margin-bottom: 2px;">参加費</div>
                <div style="font-size: 15px;">無料（サブスクリプション会員特典）</div>
            </div>
            <div>
                <div style="font-size: 12px; color: #888; margin-bottom: 2px;">申込者名</div>
                <div style="font-size: 15px;">山田 花子</div>
            </div>
        </div>
    </div>

    <div style="background: #fff8e1; border-radius: 8px; padding: 14px 16px; font-size: 13px; color: #e65100; margin-bottom: 24px;">
        &#9888; キャンセルはイベント開催日の3日前まで可能です。
    </div>

    <a href="{{ route('front.events.complete', $id ?? 1) }}" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 12px;">
        申込を確定する
    </a>
    <a href="{{ route('front.events.show', $id ?? 1) }}" class="btn btn-secondary btn-block">
        戻る
    </a>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.events.complete', $id ?? 1) }}">申込完了 (F-17)</a> |
<a href="{{ route('front.events.show', $id ?? 1) }}">イベント詳細 (F-15)</a>
@endsection
