@extends('layouts.influencer')
@section('title', 'プロフィール編集')
@section('screen-info')
<strong>I-04: プロフィール編集</strong> ― 公開プロフィールの編集。名前・自己紹介・SNSリンク・アイコン・カバー画像。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128100; プロフィール編集</h1>
    <a href="{{ route('front.influencer.show', 1) }}" class="btn btn-secondary">&#128065; 公開ページをプレビュー</a>
</div>

<div style="max-width:700px;">
    {{-- アイコン --}}
    <div style="display:flex;align-items:center;gap:20px;margin-bottom:32px;">
        <div style="width:100px;height:100px;border-radius:50%;overflow:hidden;flex-shrink:0;box-shadow:0 2px 8px rgba(61,50,41,.15);">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=200&h=200&fit=crop&crop=face" style="width:100%;height:100%;object-fit:cover;">
        </div>
        <div>
            <button class="btn btn-secondary btn-sm" style="margin-bottom:6px;">&#128247; アイコン画像を変更</button>
            <div style="font-size:12px;color:#9B8E82;">推奨: 400x400px以上の正方形画像（JPG/PNG）</div>
        </div>
    </div>

    {{-- 基本情報 --}}
    <div class="section-title" style="font-size:16px;">基本情報</div>
    <div class="form-group">
        <label>表示名</label>
        <input class="form-input" value="Akiko Style">
    </div>
    <div class="form-group">
        <label>肩書き</label>
        <input class="form-input" value="ヘアアレンジアーティスト">
    </div>
    <div class="form-group">
        <label>自己紹介（公開プロフィールに表示）</label>
        <textarea class="form-input" rows="4" style="resize:vertical;">SNS総フォロワー50万人の人気ヘアアレンジアーティスト。トレンド韓国風スタイルから本格ブライダルまで幅広く発信中。</textarea>
        <div style="font-size:11px;color:#9B8E82;margin-top:4px;">53 / 200文字</div>
    </div>

    {{-- SNSリンク --}}
    <div class="section-title" style="font-size:16px;margin-top:32px;">SNSリンク</div>
    <div class="form-group">
        <label>&#128247; Instagram</label>
        <input class="form-input" value="https://instagram.com/akiko_style" placeholder="https://instagram.com/...">
    </div>
    <div class="form-group">
        <label>&#127909; YouTube</label>
        <input class="form-input" value="https://youtube.com/@akikostyle" placeholder="https://youtube.com/...">
    </div>
    <div class="form-group">
        <label>&#127916; TikTok</label>
        <input class="form-input" value="https://tiktok.com/@akiko_style" placeholder="https://tiktok.com/...">
    </div>
    <div class="form-group">
        <label>&#127760; Webサイト / ブログ</label>
        <input class="form-input" value="" placeholder="https://...">
    </div>

    {{-- 得意分野タグ --}}
    <div class="section-title" style="font-size:16px;margin-top:32px;">得意分野タグ（最大5個）</div>
    <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:12px;">
        @foreach (['時短アレンジ','韓国系','ブライダル'] as $tag)
        <span class="tag active" style="display:flex;align-items:center;gap:4px;">{{ $tag }} <span style="cursor:pointer;font-size:14px;line-height:1;">&times;</span></span>
        @endforeach
        <button class="btn btn-sm btn-secondary" style="padding:4px 10px;">＋ 追加</button>
    </div>

    {{-- カバー画像 --}}
    <div class="section-title" style="font-size:16px;margin-top:32px;">カバー画像</div>
    <div style="width:100%;aspect-ratio:3/1;background:#E8DDD0;border-radius:12px;display:flex;align-items:center;justify-content:center;color:#9B8E82;margin-bottom:8px;font-size:14px;">
        &#128247; 現在のカバー画像プレビュー（1200x400px推奨）
    </div>
    <button class="btn btn-secondary btn-sm" style="margin-bottom:32px;">&#128247; カバー画像を変更</button>

    {{-- 保存ボタン --}}
    <div style="display:flex;gap:12px;padding-top:16px;border-top:1px solid #E8DDD0;">
        <button class="btn btn-primary btn-lg">変更を保存</button>
        <button class="btn btn-secondary btn-lg">キャンセル</button>
    </div>
</div>

<div class="page-nav" style="margin-top:24px;">
    <strong>遷移先:</strong>
    <a href="{{ route('influencer.dashboard') }}">ダッシュボード (I-01)</a> |
    <a href="{{ route('front.influencer.show', 1) }}">公開ページ (F-23)</a>
</div>
@endsection
