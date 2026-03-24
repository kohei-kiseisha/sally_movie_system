@extends('layouts.admin')

@section('title', 'コース作成')

@section('screen-info')
    <strong>A-04 detail:</strong> コース作成画面。コース名・説明・カテゴリー・レベル・サムネイル・動画の追加と並び替え・公開設定。修了条件は全コース共通（全動画の90%視聴）。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128218; コース作成</h1>
    <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">&#8592; 一覧に戻る</a>
</div>

<div style="max-width:800px;">
    <form>
        {{-- Basic Info --}}
        <h3 style="font-size:16px;font-weight:700;margin-bottom:16px;">基本情報</h3>

        <div class="form-group">
            <label>コース名 <span style="color:#D8A39D;">*</span></label>
            <input type="text" class="form-input" placeholder="コース名を入力" value="カット基礎マスター講座">
        </div>

        <div class="form-group">
            <label>説明</label>
            <textarea class="form-input" rows="4" placeholder="コースの説明を入力">カットの基礎技術を体系的に学べる講座です。レイヤーカットからグラデーション、メンズカットまで、サロンワークで必要な基本技術を網羅しています。</textarea>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:20px;">
            <div class="form-group">
                <label>カテゴリー <span style="color:#D8A39D;">*</span></label>
                <select class="form-input">
                    <option>選択してください</option>
                    <option selected>カット</option>
                    <option>カラー</option>
                    <option>パーマ</option>
                    <option>トリートメント</option>
                    <option>接客・マナー</option>
                    <option>経営・マーケティング</option>
                </select>
            </div>
            <div class="form-group">
                <label>レベル <span style="color:#D8A39D;">*</span></label>
                <select class="form-input">
                    <option>選択してください</option>
                    <option selected>初級</option>
                    <option>中級</option>
                    <option>上級</option>
                </select>
            </div>
        </div>

        {{-- Thumbnail --}}
        <div class="form-group">
            <label>サムネイル画像</label>
            <div style="display:flex;gap:16px;align-items:start;">
                <div style="width:200px;aspect-ratio:16/9;background:#e0e0e0;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:12px;color:#888;border:2px dashed #ccc;">
                    画像をアップロード
                </div>
                <div>
                    <p style="font-size:12px;color:#888;margin-bottom:8px;">推奨サイズ: 1280x720px / JPG, PNG</p>
                    <button type="button" class="btn btn-sm btn-secondary">ファイルを選択</button>
                </div>
            </div>
        </div>

        {{-- Chapter / Video List --}}
        <h3 style="font-size:16px;font-weight:700;margin:32px 0 16px;">動画の追加・並び替え</h3>
        <p style="font-size:13px;color:#888;margin-bottom:16px;">&#9432; ドラッグ＆ドロップで並び替えできます（プロトタイプでは非動作）</p>

        <div class="chapter-list" style="margin-bottom:16px;">
            <div class="chapter-item">
                <span style="cursor:grab;color:#ccc;font-size:16px;margin-right:4px;">&#9776;</span>
                <div class="chapter-num">1</div>
                <div class="chapter-title"><strong>レイヤーカットの基本</strong></div>
                <div class="chapter-duration">12:34</div>
                <button type="button" class="btn btn-sm btn-secondary" style="color:#c62828;margin-left:8px;">&#10005;</button>
            </div>
            <div class="chapter-item">
                <span style="cursor:grab;color:#ccc;font-size:16px;margin-right:4px;">&#9776;</span>
                <div class="chapter-num">2</div>
                <div class="chapter-title"><strong>グラデーションボブの作り方</strong></div>
                <div class="chapter-duration">18:20</div>
                <button type="button" class="btn btn-sm btn-secondary" style="color:#c62828;margin-left:8px;">&#10005;</button>
            </div>
            <div class="chapter-item">
                <span style="cursor:grab;color:#ccc;font-size:16px;margin-right:4px;">&#9776;</span>
                <div class="chapter-num">3</div>
                <div class="chapter-title"><strong>ワンレングスの基礎</strong></div>
                <div class="chapter-duration">15:10</div>
                <button type="button" class="btn btn-sm btn-secondary" style="color:#c62828;margin-left:8px;">&#10005;</button>
            </div>
            <div class="chapter-item">
                <span style="cursor:grab;color:#ccc;font-size:16px;margin-right:4px;">&#9776;</span>
                <div class="chapter-num">4</div>
                <div class="chapter-title"><strong>セクション分けのコツ</strong></div>
                <div class="chapter-duration">8:45</div>
                <button type="button" class="btn btn-sm btn-secondary" style="color:#c62828;margin-left:8px;">&#10005;</button>
            </div>
            <div class="chapter-item" style="border:2px dashed #ccc;background:#fafafa;justify-content:center;color:#888;font-size:13px;">
                <span style="cursor:grab;color:#ccc;font-size:16px;margin-right:4px;visibility:hidden;">&#9776;</span>
                &#10133; ここに動画をドラッグ、または下のボタンから追加
            </div>
        </div>

        <button type="button" class="btn btn-secondary" onclick="alert('動画選択モーダルが開きます（プロトタイプ）')">&#10133; 動画を追加</button>

        <div style="margin-top:8px;font-size:12px;color:#888;">
            合計: 4本 / 54分49秒
        </div>

        {{-- 修了条件（固定ルール） --}}
        <div style="background:#F5F0E6;border-radius:8px;padding:14px 16px;margin:32px 0 16px;font-size:13px;color:#6B5D52;">
            &#127942; <strong>修了条件:</strong> 全動画の90%以上を視聴するとコース修了となります（全コース共通・変更不可）。
        </div>

        {{-- Publish Settings --}}
        <h3 style="font-size:16px;font-weight:700;margin:32px 0 16px;">公開設定</h3>

        <div class="form-group">
            <label>公開状態</label>
            <select class="form-input" style="max-width:240px;">
                <option>下書き</option>
                <option selected>公開</option>
                <option>非公開</option>
            </select>
        </div>

        {{-- Actions --}}
        <div style="display:flex;gap:12px;margin-top:32px;padding-top:24px;border-top:1px solid #e0e0e0;">
            <button type="button" class="btn btn-primary" onclick="alert('コースを作成しました（プロトタイプ）')">作成する</button>
            <button type="button" class="btn btn-secondary" onclick="alert('下書き保存しました（プロトタイプ）')">下書き保存</button>
            <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">キャンセル</a>
        </div>
    </form>
</div>

<div class="page-nav" style="margin-top:24px;">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.courses.index') }}">コース一覧 (A-04)</a> |
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
</div>
@endsection
