@extends('layouts.admin')

@section('title', '動画登録')

@section('screen-info')
    <strong>A-03 detail:</strong> 動画登録画面。Vimeo URL/IDを入力し情報を取得。タイトル・説明文・カテゴリー・サムネイル・公開設定を登録。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#127909; 動画登録</h1>
    <a href="{{ route('admin.videos.index') }}" class="btn btn-secondary">&#8592; 一覧に戻る</a>
</div>

<div style="max-width:800px;">
    <form>
        {{-- Vimeo Section --}}
        <div style="background:#f8f9fa;border:1px solid #e0e0e0;border-radius:12px;padding:24px;margin-bottom:32px;">
            <h3 style="font-size:16px;font-weight:700;margin-bottom:16px;">&#127916; Vimeo動画の設定</h3>
            <div class="form-group">
                <label>Vimeo URL または 動画ID</label>
                <div style="display:flex;gap:12px;">
                    <input type="text" class="form-input" placeholder="https://vimeo.com/123456789 または 123456789" value="https://vimeo.com/987654321" style="flex:1;">
                    <button type="button" class="btn btn-primary" onclick="alert('Vimeo APIから動画情報を取得します（プロトタイプ）')">Vimeo情報を取得</button>
                </div>
                <small style="color:#888;font-size:12px;margin-top:4px;display:block;">Vimeo Pro/Businessアカウントの動画URLを入力してください</small>
            </div>

            {{-- Vimeo Preview (simulated after fetch) --}}
            <div style="background:#fff;border:1px solid #e0e0e0;border-radius:8px;padding:16px;display:flex;gap:16px;align-items:start;">
                <div style="width:200px;aspect-ratio:16/9;background:#3D3229;border-radius:6px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:11px;flex-shrink:0;">
                    サムネイル<br>（Vimeoから自動取得）
                </div>
                <div>
                    <div style="font-size:13px;color:#888;">取得結果:</div>
                    <div style="font-size:15px;font-weight:600;margin:4px 0;">レイヤーカットの基本テクニック</div>
                    <div style="font-size:12px;color:#888;">時間: 12:34 | アップロード: 2026/03/20</div>
                    <div style="font-size:12px;color:#2e7d32;margin-top:4px;">&#10003; 動画情報を正常に取得しました</div>
                </div>
            </div>
        </div>

        {{-- Basic Info --}}
        <h3 style="font-size:16px;font-weight:700;margin-bottom:16px;">基本情報</h3>

        <div class="form-group">
            <label>タイトル <span style="color:#D8A39D;">*</span></label>
            <input type="text" class="form-input" value="レイヤーカットの基本テクニック" placeholder="動画タイトルを入力">
        </div>

        <div class="form-group">
            <label>説明文</label>
            <textarea class="form-input" rows="4" placeholder="動画の説明を入力">レイヤーカットの基礎技術を解説します。セクション分け、シェープの角度、カットラインの作り方まで、ステップバイステップで学べます。</textarea>
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
                <label>コース（任意）</label>
                <select class="form-input">
                    <option>コースに紐付けない</option>
                    <option selected>カット基礎マスター講座</option>
                    <option>ハイトーンカラー完全ガイド</option>
                    <option>縮毛矯正テクニック</option>
                </select>
            </div>
        </div>

        {{-- Thumbnail --}}
        <div class="form-group">
            <label>サムネイル</label>
            <div style="display:flex;gap:16px;align-items:start;">
                <div style="width:160px;aspect-ratio:16/9;background:#e0e0e0;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:11px;color:#888;">
                    Vimeoから自動取得
                </div>
                <div>
                    <p style="font-size:12px;color:#888;margin-bottom:8px;">Vimeoから自動取得されます。別の画像を使用する場合はアップロードしてください。</p>
                    <button type="button" class="btn btn-sm btn-secondary">画像を変更</button>
                </div>
            </div>
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

        <div class="form-group">
            <label>無料プレビュー</label>
            <div style="display:flex;align-items:center;gap:8px;">
                <input type="checkbox" id="free-preview">
                <label for="free-preview" style="margin-bottom:0;font-size:13px;color:#666;">この動画を無料会員にも公開する（プレビュー用）</label>
            </div>
        </div>

        {{-- Actions --}}
        <div style="display:flex;gap:12px;margin-top:32px;padding-top:24px;border-top:1px solid #e0e0e0;">
            <button type="button" class="btn btn-primary" onclick="alert('動画を登録しました（プロトタイプ）')">登録する</button>
            <button type="button" class="btn btn-secondary" onclick="alert('下書き保存しました（プロトタイプ）')">下書き保存</button>
            <a href="{{ route('admin.videos.index') }}" class="btn btn-secondary">キャンセル</a>
        </div>
    </form>
</div>

<div class="page-nav" style="margin-top:24px;">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.videos.index') }}">動画一覧 (A-03)</a> |
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
</div>
@endsection
