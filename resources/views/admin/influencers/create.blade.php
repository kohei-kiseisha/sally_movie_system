@extends('layouts.admin')
@section('title', 'インフルエンサー追加')
@section('screen-info')
<strong>A-10b: インフルエンサー追加</strong> ― 新しいインフルエンサーの登録。基本情報・報酬条件・紹介コード・コース紐付けを設定。登録するとインフルエンサー専用管理画面のログイン情報が自動発行される。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#11088; インフルエンサー追加</h1>
    <a href="{{ route('admin.influencers.index') }}" class="btn btn-secondary">&larr; 一覧に戻る</a>
</div>

<div style="max-width:800px;">

    {{-- ステップ表示 --}}
    <div style="display:flex;gap:0;margin-bottom:32px;">
        @foreach (['基本情報','報酬条件','コース紐付け','確認・登録'] as $i => $step)
        <div style="flex:1;text-align:center;padding:12px 8px;font-size:13px;font-weight:600;
            background:{{ $i === 0 ? '#D8A39D' : '#E8DDD0' }};
            color:{{ $i === 0 ? '#fff' : '#9B8E82' }};
            {{ $i === 0 ? 'border-radius:8px 0 0 8px;' : ($i === 3 ? 'border-radius:0 8px 8px 0;' : '') }}">
            {{ $i + 1 }}. {{ $step }}
        </div>
        @endforeach
    </div>

    {{-- ========================================= --}}
    {{-- STEP 1: 基本情報 --}}
    {{-- ========================================= --}}
    <div class="section-title" style="font-size:18px;">1. 基本情報</div>

    <div style="background:#FFFDF9;border-radius:12px;padding:24px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:32px;">
        {{-- アイコン --}}
        <div style="display:flex;align-items:center;gap:20px;margin-bottom:24px;">
            <div style="width:80px;height:80px;border-radius:50%;background:#E8DDD0;display:flex;align-items:center;justify-content:center;font-size:28px;color:#9B8E82;flex-shrink:0;">&#128100;</div>
            <div>
                <button class="btn btn-secondary btn-sm">&#128247; アイコン画像をアップロード</button>
                <div style="font-size:11px;color:#9B8E82;margin-top:4px;">400x400px以上の正方形画像（JPG/PNG）</div>
            </div>
        </div>

        <div style="display:flex;gap:16px;">
            <div class="form-group" style="flex:1;">
                <label>表示名 <span style="color:#D8A39D;">*</span></label>
                <input class="form-input" placeholder="例: Akiko Style">
            </div>
            <div class="form-group" style="flex:1;">
                <label>本名（非公開・管理用）<span style="color:#D8A39D;">*</span></label>
                <input class="form-input" placeholder="例: 田中 亜希子">
            </div>
        </div>

        <div class="form-group">
            <label>肩書き</label>
            <input class="form-input" placeholder="例: ヘアアレンジアーティスト">
        </div>

        <div class="form-group">
            <label>自己紹介文</label>
            <textarea class="form-input" rows="3" style="resize:vertical;" placeholder="公開プロフィールに表示される紹介文。200文字以内。"></textarea>
        </div>

        <div class="form-group">
            <label>得意分野タグ（カンマ区切り、最大5個）</label>
            <input class="form-input" placeholder="例: 時短アレンジ, 韓国系, ブライダル">
        </div>

        <div class="section-title" style="font-size:14px;margin-top:24px;">SNSリンク</div>
        <div style="display:flex;gap:16px;flex-wrap:wrap;">
            <div class="form-group" style="flex:1;min-width:200px;">
                <label>&#128247; Instagram</label>
                <input class="form-input" placeholder="https://instagram.com/...">
            </div>
            <div class="form-group" style="flex:1;min-width:200px;">
                <label>&#127909; YouTube</label>
                <input class="form-input" placeholder="https://youtube.com/...">
            </div>
        </div>
        <div style="display:flex;gap:16px;flex-wrap:wrap;">
            <div class="form-group" style="flex:1;min-width:200px;">
                <label>&#127916; TikTok</label>
                <input class="form-input" placeholder="https://tiktok.com/...">
            </div>
            <div class="form-group" style="flex:1;min-width:200px;">
                <label>&#127760; Webサイト</label>
                <input class="form-input" placeholder="https://...">
            </div>
        </div>

        <div class="section-title" style="font-size:14px;margin-top:24px;">連絡先（非公開）</div>
        <div style="display:flex;gap:16px;">
            <div class="form-group" style="flex:1;">
                <label>メールアドレス <span style="color:#D8A39D;">*</span></label>
                <input class="form-input" type="email" placeholder="管理画面ログインにも使用">
            </div>
            <div class="form-group" style="flex:1;">
                <label>電話番号</label>
                <input class="form-input" placeholder="090-xxxx-xxxx">
            </div>
        </div>
    </div>

    {{-- ========================================= --}}
    {{-- STEP 2: 報酬条件 --}}
    {{-- ========================================= --}}
    <div class="section-title" style="font-size:18px;">2. 報酬条件</div>

    <div style="background:#FFFDF9;border-radius:12px;padding:24px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:32px;">

        {{-- 紹介アフィリエイト --}}
        <div style="font-size:15px;font-weight:700;margin-bottom:16px;">&#128279; 紹介アフィリエイト</div>
        <div style="display:flex;gap:16px;align-items:end;margin-bottom:8px;">
            <div class="form-group" style="margin-bottom:0;">
                <label>紹介報酬率</label>
                <div style="display:flex;align-items:center;gap:8px;">
                    <input class="form-input" value="20" style="width:80px;text-align:center;">
                    <span style="font-size:14px;color:#6B5D52;">%</span>
                </div>
            </div>
            <div style="font-size:13px;color:#9B8E82;padding-bottom:10px;">
                月額 ¥770 × 20% = <strong style="color:#D8A39D;">¥154/月/人</strong> を永久にお支払い
            </div>
        </div>
        <div class="form-group">
            <label>紹介コード <span style="color:#D8A39D;">*</span></label>
            <div style="display:flex;gap:8px;">
                <input class="form-input" placeholder="例: akiko-style" style="flex:1;">
                <button class="btn btn-secondary btn-sm">自動生成</button>
            </div>
            <div style="font-size:11px;color:#9B8E82;margin-top:4px;">URLの末尾に使用: sally141.com/?ref=<strong>akiko-style</strong></div>
        </div>

        <div style="border-top:1px solid #E8DDD0;margin:24px 0;"></div>

        {{-- コース販売 --}}
        <div style="font-size:15px;font-weight:700;margin-bottom:16px;">&#128218; コース販売レベニューシェア</div>
        <div style="display:flex;gap:16px;align-items:end;margin-bottom:8px;">
            <div class="form-group" style="margin-bottom:0;">
                <label>インフルエンサー取り分</label>
                <div style="display:flex;align-items:center;gap:8px;">
                    <input class="form-input" value="50" style="width:80px;text-align:center;">
                    <span style="font-size:14px;color:#6B5D52;">%</span>
                </div>
            </div>
            <div style="font-size:13px;color:#9B8E82;padding-bottom:10px;">
                ¥9,800のコースなら <strong style="color:#D8A39D;">¥4,900</strong> がインフルエンサー取り分
            </div>
        </div>

        <div style="border-top:1px solid #E8DDD0;margin:24px 0;"></div>

        {{-- 振込設定 --}}
        <div style="font-size:15px;font-weight:700;margin-bottom:16px;">&#127974; 振込設定</div>
        <div style="display:flex;gap:16px;flex-wrap:wrap;">
            <div class="form-group" style="flex:1;min-width:200px;">
                <label>振込サイクル</label>
                <select class="form-input">
                    <option selected>月末締め・翌月末振込</option>
                    <option>15日締め・当月末振込</option>
                </select>
            </div>
            <div class="form-group" style="flex:1;min-width:200px;">
                <label>最低振込金額</label>
                <div style="display:flex;align-items:center;gap:8px;">
                    <input class="form-input" value="5000" style="text-align:center;">
                    <span style="font-size:14px;color:#6B5D52;">円</span>
                </div>
            </div>
        </div>

        <div style="font-size:12px;color:#9B8E82;background:#F5F0E6;border-radius:6px;padding:10px 12px;">
            &#128161; 振込先口座の登録は、インフルエンサー本人が自分の管理画面から行います。
        </div>
    </div>

    {{-- ========================================= --}}
    {{-- STEP 3: コース紐付け --}}
    {{-- ========================================= --}}
    <div class="section-title" style="font-size:18px;">3. コース紐付け</div>

    <div style="background:#FFFDF9;border-radius:12px;padding:24px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:32px;">
        <p style="font-size:13px;color:#6B5D52;margin-bottom:16px;">
            このインフルエンサーに紐付けるコースを設定します。コースの作成・動画の登録は運営側で別途行います。<br>
            ここでは「どのコースをこのインフルエンサーのものとして販売するか」を設定します。
        </p>

        {{-- 既存コースを紐付け --}}
        <div style="font-size:14px;font-weight:700;margin-bottom:12px;">既存コースを紐付け</div>
        <div style="display:flex;flex-direction:column;gap:8px;margin-bottom:20px;">
            @foreach ([
                ['name'=>'Akikoの時短ヘアアレンジ10選','price'=>9800,'videos'=>10,'checked'=>true],
                ['name'=>'韓国トレンドヘア完全攻略','price'=>9800,'videos'=>8,'checked'=>true],
                ['name'=>'特別コラボ: ブライダルヘアセット','price'=>14800,'videos'=>6,'checked'=>false],
            ] as $c)
            <label style="display:flex;align-items:center;gap:12px;padding:12px;border:1px solid {{ $c['checked'] ? '#D8A39D' : '#E8DDD0' }};border-radius:8px;cursor:pointer;{{ $c['checked'] ? 'background:#F8EEEC;' : '' }}">
                <input type="checkbox" {{ $c['checked'] ? 'checked' : '' }} style="accent-color:#D8A39D;width:18px;height:18px;">
                <div style="flex:1;">
                    <div style="font-size:14px;font-weight:600;">{{ $c['name'] }}</div>
                    <div style="font-size:12px;color:#9B8E82;">{{ $c['videos'] }}本 ・ ¥{{ number_format($c['price']) }}</div>
                </div>
                @if ($c['checked'])
                <span class="badge" style="background:#e8f5e9;color:#2e7d32;">紐付け済</span>
                @endif
            </label>
            @endforeach
        </div>

        {{-- 新規コースを作成して紐付け --}}
        <div style="border:2px dashed #E8DDD0;border-radius:8px;padding:16px;text-align:center;">
            <div style="font-size:13px;color:#9B8E82;margin-bottom:8px;">まだコースがない場合</div>
            <a href="{{ route('admin.courses.create') }}" class="btn btn-secondary btn-sm">&#128218; 新しいコースを作成してから紐付ける</a>
        </div>
    </div>

    {{-- ========================================= --}}
    {{-- STEP 4: 確認・登録 --}}
    {{-- ========================================= --}}
    <div class="section-title" style="font-size:18px;">4. 確認・登録</div>

    <div style="background:#FFFDF9;border-radius:12px;padding:24px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:24px;">
        <div style="font-size:14px;font-weight:700;margin-bottom:16px;">登録後に自動で行われること</div>
        <ul style="list-style:none;font-size:14px;color:#6B5D52;line-height:2.2;">
            <li>&#9989; インフルエンサー専用管理画面のログイン情報が登録メールアドレスに自動送信されます</li>
            <li>&#9989; 紹介コードに基づいた専用URL（sally141.com/?ref=xxx）が自動発行されます</li>
            <li>&#9989; 公開プロフィールページ（/influencer/xxx）が自動生成されます</li>
            <li>&#9989; 紐付けたコースがインフルエンサーの特集ページに表示されます</li>
        </ul>
    </div>

    {{-- 登録ボタン --}}
    <div style="display:flex;gap:12px;">
        <button class="btn btn-primary btn-lg" onclick="document.getElementById('regComplete').style.display='flex';this.parentNode.style.display='none';">&#11088; インフルエンサーを登録する</button>
        <a href="{{ route('admin.influencers.index') }}" class="btn btn-secondary btn-lg">キャンセル</a>
    </div>

    {{-- 登録完了 --}}
    <div id="regComplete" style="display:none;background:linear-gradient(135deg,#3D3229,#4A3F35);border-radius:12px;padding:32px;color:#fff;text-align:center;flex-direction:column;align-items:center;gap:12px;">
        <div style="font-size:48px;">&#127881;</div>
        <div style="font-size:20px;font-weight:800;">インフルエンサーの登録が完了しました</div>
        <div style="font-size:14px;color:#C9B7A7;">ログイン情報が登録メールアドレスに送信されました。</div>
        <div style="display:flex;gap:12px;margin-top:12px;">
            <a href="{{ route('admin.influencers.index') }}" class="btn btn-primary">一覧に戻る</a>
            <a href="{{ route('front.influencer.show', 1) }}" class="btn btn-secondary" style="border-color:#fff;color:#fff;">公開ページを確認</a>
        </div>
    </div>
</div>

<div class="page-nav" style="margin-top:24px;">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.influencers.index') }}">インフルエンサー一覧 (A-10)</a> |
    <a href="{{ route('admin.courses.create') }}">コース作成 (A-04)</a> |
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
</div>
@endsection
