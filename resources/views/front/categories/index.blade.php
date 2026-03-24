@extends('layouts.front')
@section('title', 'カテゴリー一覧')
@section('screen-info')
<strong>F-06: カテゴリー一覧</strong> ― 学習カテゴリーの一覧画面（ヘアー基礎教育のカリキュラム4分類）
@endsection

@section('content')
<div class="section">
    <div class="section-title">カテゴリー一覧</div>

    <div class="grid grid-2" style="max-width:800px;">
        <a href="{{ route('front.categories.show', 1) }}" class="category-card">
            <div class="category-icon">&#128218;</div>
            <div class="category-name">ヘアメイクとは</div>
            <div class="category-count">1 コース / 2 動画</div>
            <div style="font-size:12px;color:#888;margin-top:8px;">仕事内容・心構え・服装など導入</div>
        </a>

        <a href="{{ route('front.categories.show', 2) }}" class="category-card">
            <div class="category-icon">&#128295;</div>
            <div class="category-name">ヘアアレンジに必要な道具の名称</div>
            <div class="category-count">5 コース / 28 動画</div>
            <div style="font-size:12px;color:#888;margin-top:8px;">コーム・ブラシ・ピン・アイロン・整髪剤</div>
        </a>

        <a href="{{ route('front.categories.show', 3) }}" class="category-card">
            <div class="category-icon">&#9986;</div>
            <div class="category-name">基礎技術</div>
            <div class="category-count">10 コース / 58 動画</div>
            <div style="font-size:12px;color:#888;margin-top:8px;">コテの巻き方・編み方・逆毛・ベース作りなど</div>
        </a>

        <a href="{{ route('front.categories.show', 4) }}" class="category-card">
            <div class="category-icon">&#128135;</div>
            <div class="category-name">ヘアスタイル基礎アレンジ</div>
            <div class="category-count">8 コース / 45 動画</div>
            <div style="font-size:12px;color:#888;margin-top:8px;">ダウンスタイル・アップ・ハーフアップ・ポニー・韓国系</div>
        </a>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.categories.show', 1) }}">カテゴリー詳細 (F-07)</a> |
<a href="{{ route('front.courses.index') }}">コース一覧 (F-08)</a> |
<a href="{{ route('front.videos.index') }}">動画一覧 (F-05)</a>
@endsection
