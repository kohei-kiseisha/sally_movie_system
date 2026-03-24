<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>店舗登録 - SALLY141 Learning</title>
    <link rel="stylesheet" href="/css/prototype.css">
    <style>
        .step-indicator { display:flex; justify-content:center; gap:0; margin-bottom:40px; }
        .step { display:flex; align-items:center; gap:0; }
        .step-circle { width:36px; height:36px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:14px; }
        .step-circle.active { background:#D8A39D; color:#fff; }
        .step-circle.done { background:#4caf50; color:#fff; }
        .step-circle.pending { background:#e0e0e0; color:#999; }
        .step-label { font-size:11px; text-align:center; margin-top:4px; color:#888; }
        .step-label.active { color:#D8A39D; font-weight:600; }
        .step-line { width:60px; height:2px; background:#e0e0e0; margin:0 4px; margin-top:-12px; }
        .step-line.done { background:#4caf50; }
        .step-col { display:flex; flex-direction:column; align-items:center; }
        .plan-card { border:2px solid #e0e0e0; border-radius:12px; padding:24px; text-align:center; cursor:pointer; transition:all .2s; }
        .plan-card.selected { border-color:#D8A39D; background:#fff5f7; }
        .plan-card:hover { border-color:#D8A39D; }
    </style>
</head>
<body>
    <div class="proto-badge">PROTOTYPE</div>

    <div class="screen-info" style="margin:16px;">
        <strong>S-00: 店舗登録画面</strong> ― 美容室・学校などの責任者が店舗契約を申し込む画面。ステップ形式で店舗情報・管理者情報・プラン選択・決済を行う。SALLY141運営側が手動で登録するケースにも対応。
    </div>

    {{-- ヘッダー --}}
    <header class="front-header">
        <a href="{{ route('front.top') }}" class="logo">SALLY141<span>Learning</span></a>
        <nav>
            <a href="{{ route('front.top') }}">トップに戻る</a>
        </nav>
    </header>

    <div style="max-width:640px;margin:40px auto;padding:0 20px;">

        <h1 style="font-size:28px;font-weight:800;text-align:center;margin-bottom:8px;">店舗登録</h1>
        <p style="text-align:center;color:#888;font-size:14px;margin-bottom:32px;">美容室・学校など、スタッフや生徒の学習を一元管理できます</p>

        {{-- ステップインジケーター --}}
        <div class="step-indicator">
            <div class="step-col">
                <div class="step-circle active">1</div>
                <div class="step-label active">店舗情報</div>
            </div>
            <div class="step-line"></div>
            <div class="step-col">
                <div class="step-circle pending">2</div>
                <div class="step-label">管理者情報</div>
            </div>
            <div class="step-line"></div>
            <div class="step-col">
                <div class="step-circle pending">3</div>
                <div class="step-label">プラン選択</div>
            </div>
            <div class="step-line"></div>
            <div class="step-col">
                <div class="step-circle pending">4</div>
                <div class="step-label">確認・決済</div>
            </div>
        </div>

        {{-- ================================ --}}
        {{-- STEP 1: 店舗情報 --}}
        {{-- ================================ --}}
        <div class="card" style="padding:32px;margin-bottom:32px;">
            <h2 style="font-size:18px;font-weight:700;margin-bottom:20px;">&#127970; Step 1: 店舗情報</h2>

            <div class="form-group">
                <label>店舗名・学校名 <span style="color:#D8A39D;">*</span></label>
                <input type="text" class="form-input" placeholder="例：ビューティサロン ABC" value="サンプル美容室">
            </div>

            <div class="form-group">
                <label>業種 <span style="color:#D8A39D;">*</span></label>
                <select class="form-input">
                    <option>美容室・ヘアサロン</option>
                    <option>ブライダルサロン</option>
                    <option>美容学校・スクール</option>
                    <option selected>その他</option>
                </select>
            </div>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
                <div class="form-group">
                    <label>郵便番号</label>
                    <input type="text" class="form-input" placeholder="123-4567" value="541-0059">
                </div>
                <div class="form-group">
                    <label>都道府県 <span style="color:#D8A39D;">*</span></label>
                    <select class="form-input">
                        <option>大阪府</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>住所</label>
                <input type="text" class="form-input" placeholder="市区町村・番地" value="大阪市中央区博労町1-2-3">
            </div>

            <div class="form-group">
                <label>電話番号</label>
                <input type="tel" class="form-input" placeholder="06-1234-5678" value="06-1234-5678">
            </div>

            <div class="form-group">
                <label>想定メンバー数</label>
                <select class="form-input">
                    <option>1〜5名</option>
                    <option selected>6〜10名</option>
                    <option>11〜20名</option>
                    <option>21〜50名</option>
                    <option>51名以上</option>
                </select>
            </div>

            <a href="#step2" class="btn btn-primary btn-lg btn-block" style="margin-top:16px;">次へ：管理者情報 &rarr;</a>
        </div>

        {{-- ================================ --}}
        {{-- STEP 2: 管理者情報 --}}
        {{-- ================================ --}}
        <div class="card" style="padding:32px;margin-bottom:32px;" id="step2">
            <h2 style="font-size:18px;font-weight:700;margin-bottom:20px;">&#128100; Step 2: 管理者アカウント情報</h2>
            <p style="font-size:13px;color:#888;margin-bottom:20px;">店舗管理画面にログインするためのアカウントを作成します。</p>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
                <div class="form-group">
                    <label>姓 <span style="color:#D8A39D;">*</span></label>
                    <input type="text" class="form-input" placeholder="山田" value="山田">
                </div>
                <div class="form-group">
                    <label>名 <span style="color:#D8A39D;">*</span></label>
                    <input type="text" class="form-input" placeholder="太郎" value="太郎">
                </div>
            </div>

            <div class="form-group">
                <label>メールアドレス <span style="color:#D8A39D;">*</span></label>
                <input type="email" class="form-input" placeholder="admin@example.com" value="yamada@sample-salon.jp">
                <small style="color:#888;font-size:11px;">このメールアドレスが店舗管理画面のログインIDになります</small>
            </div>

            <div class="form-group">
                <label>パスワード <span style="color:#D8A39D;">*</span></label>
                <input type="password" class="form-input" placeholder="8文字以上" value="********">
            </div>

            <div class="form-group">
                <label>パスワード（確認） <span style="color:#D8A39D;">*</span></label>
                <input type="password" class="form-input" placeholder="もう一度入力" value="********">
            </div>

            <div style="display:flex;gap:12px;">
                <a href="#" class="btn btn-secondary btn-lg" style="flex:1;">&larr; 戻る</a>
                <a href="#step3" class="btn btn-primary btn-lg" style="flex:2;">次へ：プラン選択 &rarr;</a>
            </div>
        </div>

        {{-- ================================ --}}
        {{-- STEP 3: プラン選択 --}}
        {{-- ================================ --}}
        <div class="card" style="padding:32px;margin-bottom:32px;" id="step3">
            <h2 style="font-size:18px;font-weight:700;margin-bottom:20px;">&#128179; Step 3: プラン選択</h2>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:24px;">
                <div class="plan-card selected">
                    <div style="font-size:14px;font-weight:600;margin-bottom:8px;">店舗プラン（月額）</div>
                    <div style="font-size:36px;font-weight:800;color:#D8A39D;">&yen;770</div>
                    <div style="font-size:12px;color:#888;margin-bottom:12px;">× メンバー数 / 月（税込）</div>
                    <ul style="text-align:left;font-size:13px;line-height:2;">
                        <li>&#10003; 全動画見放題</li>
                        <li>&#10003; メンバー進捗管理</li>
                        <li>&#10003; 招待リンク発行</li>
                        <li>&#10003; イベント申込</li>
                    </ul>
                    <div style="margin-top:12px;"><span class="badge" style="background:#D8A39D;color:#fff;">選択中</span></div>
                </div>
                <div class="plan-card">
                    <div style="font-size:14px;font-weight:600;margin-bottom:8px;">店舗プラン（年額）</div>
                    <div style="font-size:36px;font-weight:800;color:#3D3229;">&yen;7,700</div>
                    <div style="font-size:12px;color:#888;margin-bottom:12px;">× メンバー数 / 年（税込）</div>
                    <ul style="text-align:left;font-size:13px;line-height:2;">
                        <li>&#10003; 月額プランと同内容</li>
                        <li>&#10003; <strong>2ヶ月分お得</strong></li>
                    </ul>
                    <div style="margin-top:12px;"><span class="badge badge-beginner">2ヶ月無料</span></div>
                </div>
            </div>

            <div style="background:#f5f5f5;border-radius:8px;padding:16px;margin-bottom:24px;">
                <div style="font-size:14px;font-weight:600;margin-bottom:8px;">料金シミュレーション</div>
                <div style="display:flex;justify-content:space-between;font-size:14px;margin-bottom:4px;">
                    <span>月額 × 想定メンバー数（8名）</span>
                    <span style="font-weight:700;">&yen;6,160 / 月</span>
                </div>
                <div style="font-size:12px;color:#888;">メンバー数に応じた従量課金です。実際の請求は月末時点の所属メンバー数で計算されます。</div>
            </div>

            <div style="display:flex;gap:12px;">
                <a href="#step2" class="btn btn-secondary btn-lg" style="flex:1;">&larr; 戻る</a>
                <a href="#step4" class="btn btn-primary btn-lg" style="flex:2;">次へ：確認・決済 &rarr;</a>
            </div>
        </div>

        {{-- ================================ --}}
        {{-- STEP 4: 確認・決済 --}}
        {{-- ================================ --}}
        <div class="card" style="padding:32px;margin-bottom:32px;" id="step4">
            <h2 style="font-size:18px;font-weight:700;margin-bottom:20px;">&#9989; Step 4: 登録内容の確認</h2>

            {{-- 確認表 --}}
            <div style="margin-bottom:24px;">
                <div style="font-size:14px;font-weight:600;margin-bottom:12px;color:#D8A39D;">店舗情報</div>
                <table style="width:100%;font-size:14px;">
                    <tr style="border-bottom:1px solid #f0f0f0;">
                        <td style="padding:8px 0;color:#888;width:140px;">店舗名</td>
                        <td style="padding:8px 0;font-weight:600;">サンプル美容室</td>
                    </tr>
                    <tr style="border-bottom:1px solid #f0f0f0;">
                        <td style="padding:8px 0;color:#888;">業種</td>
                        <td style="padding:8px 0;">美容室・ヘアサロン</td>
                    </tr>
                    <tr style="border-bottom:1px solid #f0f0f0;">
                        <td style="padding:8px 0;color:#888;">住所</td>
                        <td style="padding:8px 0;">大阪府大阪市中央区博労町1-2-3</td>
                    </tr>
                    <tr style="border-bottom:1px solid #f0f0f0;">
                        <td style="padding:8px 0;color:#888;">電話番号</td>
                        <td style="padding:8px 0;">06-1234-5678</td>
                    </tr>
                </table>
            </div>

            <div style="margin-bottom:24px;">
                <div style="font-size:14px;font-weight:600;margin-bottom:12px;color:#D8A39D;">管理者アカウント</div>
                <table style="width:100%;font-size:14px;">
                    <tr style="border-bottom:1px solid #f0f0f0;">
                        <td style="padding:8px 0;color:#888;width:140px;">管理者名</td>
                        <td style="padding:8px 0;font-weight:600;">山田 太郎</td>
                    </tr>
                    <tr style="border-bottom:1px solid #f0f0f0;">
                        <td style="padding:8px 0;color:#888;">メールアドレス</td>
                        <td style="padding:8px 0;">yamada@sample-salon.jp</td>
                    </tr>
                </table>
            </div>

            <div style="margin-bottom:24px;">
                <div style="font-size:14px;font-weight:600;margin-bottom:12px;color:#D8A39D;">プラン</div>
                <table style="width:100%;font-size:14px;">
                    <tr style="border-bottom:1px solid #f0f0f0;">
                        <td style="padding:8px 0;color:#888;width:140px;">プラン</td>
                        <td style="padding:8px 0;font-weight:600;">店舗プラン（月額）</td>
                    </tr>
                    <tr style="border-bottom:1px solid #f0f0f0;">
                        <td style="padding:8px 0;color:#888;">単価</td>
                        <td style="padding:8px 0;">&yen;770 / メンバー / 月（税込）</td>
                    </tr>
                </table>
            </div>

            {{-- 決済フォーム（Stripeプレースホルダー） --}}
            <div style="margin-bottom:24px;">
                <div style="font-size:14px;font-weight:600;margin-bottom:12px;color:#D8A39D;">お支払い情報</div>
                <div style="background:#f8f9fa;border:2px dashed #ddd;border-radius:8px;padding:24px;text-align:center;">
                    <div style="font-size:14px;color:#888;margin-bottom:8px;">&#128179; Stripe Elements</div>
                    <div style="background:#fff;border:1px solid #ddd;border-radius:6px;padding:12px;margin-bottom:8px;">
                        <div style="font-size:13px;color:#aaa;text-align:left;">カード番号</div>
                        <div style="font-size:16px;text-align:left;color:#333;letter-spacing:2px;">4242 4242 4242 4242</div>
                    </div>
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;">
                        <div style="background:#fff;border:1px solid #ddd;border-radius:6px;padding:12px;">
                            <div style="font-size:13px;color:#aaa;text-align:left;">有効期限</div>
                            <div style="font-size:16px;text-align:left;color:#333;">12/28</div>
                        </div>
                        <div style="background:#fff;border:1px solid #ddd;border-radius:6px;padding:12px;">
                            <div style="font-size:13px;color:#aaa;text-align:left;">CVC</div>
                            <div style="font-size:16px;text-align:left;color:#333;">123</div>
                        </div>
                    </div>
                    <div style="font-size:11px;color:#aaa;margin-top:8px;">※ プロトタイプ表示です。実装時は Stripe Elements を埋め込みます。</div>
                </div>
            </div>

            {{-- 利用規約同意 --}}
            <div style="margin-bottom:24px;">
                <label style="display:flex;align-items:flex-start;gap:8px;font-size:13px;cursor:pointer;">
                    <input type="checkbox" checked style="margin-top:3px;">
                    <span><a href="#" style="color:#D8A39D;">利用規約</a>および<a href="#" style="color:#D8A39D;">プライバシーポリシー</a>に同意します</span>
                </label>
            </div>

            <div style="display:flex;gap:12px;">
                <a href="#step3" class="btn btn-secondary btn-lg" style="flex:1;">&larr; 戻る</a>
                <a href="{{ route('shop.register.complete') }}" class="btn btn-primary btn-lg" style="flex:2;">&#128274; 登録して利用開始</a>
            </div>
        </div>

    </div>

    <div class="page-nav" style="max-width:640px;margin:24px auto;">
        <strong>遷移先:</strong>
        <a href="{{ route('shop.register.complete') }}">店舗登録完了 (S-00b)</a> |
        <a href="{{ route('shop.login') }}">店舗管理者ログイン (S-01)</a> |
        <a href="{{ route('front.top') }}">トップページ (F-01)</a>
    </div>
</body>
</html>
