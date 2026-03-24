@extends('layouts.front')
@section('title', '新規登録')
@section('screen-info')
<strong>F-03: 新規登録完了（プロフィール入力）</strong> ― 初回ログイン後に必要最低限のプロフィールを入力。
@endsection

@section('content')
<div style="max-width:480px;margin:40px auto;padding:0 20px;">
    <h1 style="font-size:24px;font-weight:800;margin-bottom:8px;">プロフィール設定</h1>
    <p style="color:#888;font-size:14px;margin-bottom:32px;">あと少しで学習を始められます！</p>

    <div class="card" style="padding:32px;">
        <div class="form-group">
            <label>ニックネーム</label>
            <input type="text" class="form-input" value="LINE太郎" placeholder="ニックネームを入力">
            <small style="color:#888;font-size:11px;">LINEの表示名が初期値です。変更できます。</small>
        </div>

        <div class="form-group">
            <label>興味のあるカテゴリー（複数選択可）</label>
            <div class="tag-list">
                <span class="tag active">&#128135; ヘアアレンジ</span>
                <span class="tag">&#128218; 基礎技術</span>
                <span class="tag active">&#127775; 応用技術</span>
            </div>
        </div>

        <div class="form-group">
            <label>経験レベル</label>
            <div style="display:flex;gap:8px;">
                <label style="flex:1;text-align:center;padding:12px;border:2px solid #D8A39D;border-radius:8px;background:#fff5f7;cursor:pointer;">
                    <div style="font-size:24px;">&#127793;</div>
                    <div style="font-size:13px;font-weight:600;">初心者</div>
                </label>
                <label style="flex:1;text-align:center;padding:12px;border:2px solid #ddd;border-radius:8px;cursor:pointer;">
                    <div style="font-size:24px;">&#127807;</div>
                    <div style="font-size:13px;font-weight:600;">経験者</div>
                </label>
                <label style="flex:1;text-align:center;padding:12px;border:2px solid #ddd;border-radius:8px;cursor:pointer;">
                    <div style="font-size:24px;">&#127775;</div>
                    <div style="font-size:13px;font-weight:600;">プロ</div>
                </label>
            </div>
        </div>

        <a href="{{ route('front.mypage') }}" class="btn btn-primary btn-lg btn-block" style="margin-top:16px;">学習を始める</a>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.mypage') }}">マイページ (F-04)</a>
@endsection
