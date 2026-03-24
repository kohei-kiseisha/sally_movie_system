@extends('layouts.front')

@section('screen-info')
<strong>F-19: 契約・プラン画面</strong> - 月額プラン詳細・決済フォーム・契約状態
@endsection

@section('content')
<div class="section" style="max-width: 700px;">
    <div class="section-title">契約・プラン</div>

    {{-- 現在の契約状態 --}}
    <div style="background: #e8f5e9; border-radius: 12px; padding: 20px; margin-bottom: 32px; border: 1px solid #c8e6c9;">
        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
            <span style="font-size: 20px;">&#9989;</span>
            <span style="font-size: 16px; font-weight: 700; color: #2e7d32;">有効な契約があります</span>
        </div>
        <div style="font-size: 14px; color: #555; line-height: 1.8;">
            プラン: スタンダードプラン（月額770円 税込）<br>
            契約開始日: 2026/02/15<br>
            次回請求日: 2026/04/15<br>
            決済方法: Stripe (Visa **** 1234)
        </div>
    </div>

    {{-- プラン詳細 --}}
    <div style="background: #fff; border-radius: 12px; padding: 32px; box-shadow: 0 2px 8px rgba(0,0,0,.06); margin-bottom: 32px; text-align: center; border: 2px solid #D8A39D;">
        <div style="font-size: 13px; color: #D8A39D; font-weight: 700; margin-bottom: 8px;">STANDARD PLAN</div>
        <h2 style="font-size: 20px; font-weight: 800; margin-bottom: 4px;">スタンダードプラン</h2>
        <div style="margin-bottom: 20px;">
            <span style="font-size: 40px; font-weight: 800; color: #D8A39D;">770</span>
            <span style="font-size: 16px; color: #666;">円/月（税込）</span>
        </div>

        <div style="text-align: left; margin-bottom: 24px;">
            <div style="font-size: 14px; font-weight: 700; margin-bottom: 12px;">プランに含まれるもの:</div>
            <ul style="list-style: none; font-size: 14px; color: #555; line-height: 2.2;">
                <li>&#10003; 全カテゴリーの動画が見放題</li>
                <li>&#10003; 全コースの受講が可能</li>
                <li>&#10003; 学習進捗の管理・記録</li>
                <li>&#10003; イベント・ワークショップへの参加</li>
                <li>&#10003; 修了証・バッジの取得</li>
                <li>&#10003; 新しい動画の優先視聴</li>
            </ul>
        </div>
    </div>

    {{-- Stripe決済フォーム placeholder --}}
    <div style="background: #fff; border-radius: 12px; padding: 24px; box-shadow: 0 2px 8px rgba(0,0,0,.06); margin-bottom: 24px;">
        <div style="font-size: 16px; font-weight: 700; margin-bottom: 16px;">決済情報の変更</div>
        <div style="background: #f8f9fa; border: 2px dashed #ddd; border-radius: 8px; padding: 40px 20px; text-align: center; color: #999; margin-bottom: 16px;">
            <div style="font-size: 32px; margin-bottom: 8px;">&#128179;</div>
            <div style="font-size: 14px;">Stripe決済フォーム (Placeholder)</div>
            <div style="font-size: 12px; margin-top: 4px;">カード番号・有効期限・CVC</div>
        </div>
        <button class="btn btn-primary btn-block">決済情報を更新する</button>
    </div>

    {{-- 解約 --}}
    <div style="text-align: center; margin-top: 32px;">
        <button class="btn btn-secondary" style="color: #999;">プランを解約する</button>
        <p style="font-size: 12px; color: #999; margin-top: 8px;">解約すると次回請求日以降、動画の視聴ができなくなります。</p>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.settings') }}">設定 (F-20)</a> |
<a href="{{ route('front.mypage') }}">マイページ</a> |
<a href="{{ route('front.top') }}">トップ (F-01)</a>
@endsection
