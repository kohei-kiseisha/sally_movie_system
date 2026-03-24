<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>店舗登録完了 - SALLY141 Learning</title>
    <link rel="stylesheet" href="/css/prototype.css">
</head>
<body>
    <div class="proto-badge">PROTOTYPE</div>

    <div class="screen-info" style="margin:16px;">
        <strong>S-00b: 店舗登録完了画面</strong> ― 店舗登録が完了し、管理画面への導線と次のステップ（メンバー招待）を案内する。
    </div>

    <div class="completion-screen">
        <div class="completion-icon">&#127881;</div>
        <h1 style="font-size:28px;font-weight:800;margin-bottom:8px;">店舗登録が完了しました！</h1>
        <p style="color:#888;font-size:14px;margin-bottom:32px;">サンプル美容室 の店舗アカウントが作成されました</p>

        {{-- 登録完了サマリー --}}
        <div class="card" style="padding:24px;text-align:left;margin-bottom:32px;">
            <div style="font-size:14px;font-weight:600;margin-bottom:16px;color:#D8A39D;">登録情報</div>
            <table style="width:100%;font-size:14px;">
                <tr style="border-bottom:1px solid #f0f0f0;">
                    <td style="padding:8px 0;color:#888;width:130px;">店舗名</td>
                    <td style="padding:8px 0;font-weight:600;">サンプル美容室</td>
                </tr>
                <tr style="border-bottom:1px solid #f0f0f0;">
                    <td style="padding:8px 0;color:#888;">管理者</td>
                    <td style="padding:8px 0;">山田 太郎</td>
                </tr>
                <tr style="border-bottom:1px solid #f0f0f0;">
                    <td style="padding:8px 0;color:#888;">ログインID</td>
                    <td style="padding:8px 0;">yamada@sample-salon.jp</td>
                </tr>
                <tr>
                    <td style="padding:8px 0;color:#888;">プラン</td>
                    <td style="padding:8px 0;">店舗プラン（月額 &yen;770/メンバー）</td>
                </tr>
            </table>
        </div>

        {{-- 次のステップ --}}
        <div class="card" style="padding:24px;text-align:left;margin-bottom:32px;">
            <div style="font-size:14px;font-weight:600;margin-bottom:16px;">&#128161; 次のステップ</div>
            <div style="display:grid;gap:16px;">
                <div style="display:flex;gap:12px;align-items:flex-start;">
                    <div style="width:28px;height:28px;border-radius:50%;background:#D8A39D;color:#fff;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;flex-shrink:0;">1</div>
                    <div>
                        <div style="font-size:14px;font-weight:600;">管理画面にログイン</div>
                        <div style="font-size:12px;color:#888;">登録したメールアドレスとパスワードでログインできます</div>
                    </div>
                </div>
                <div style="display:flex;gap:12px;align-items:flex-start;">
                    <div style="width:28px;height:28px;border-radius:50%;background:#D8A39D;color:#fff;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;flex-shrink:0;">2</div>
                    <div>
                        <div style="font-size:14px;font-weight:600;">招待リンクを発行</div>
                        <div style="font-size:12px;color:#888;">メンバー招待画面から招待リンクを発行し、スタッフや生徒に共有してください</div>
                    </div>
                </div>
                <div style="display:flex;gap:12px;align-items:flex-start;">
                    <div style="width:28px;height:28px;border-radius:50%;background:#D8A39D;color:#fff;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;flex-shrink:0;">3</div>
                    <div>
                        <div style="font-size:14px;font-weight:600;">メンバーの学習状況を確認</div>
                        <div style="font-size:12px;color:#888;">ダッシュボードでメンバーの学習進捗をリアルタイムで把握できます</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- メール通知 --}}
        <div style="background:#e3f2fd;border-radius:8px;padding:14px 16px;font-size:13px;color:#1565c0;margin-bottom:32px;text-align:left;">
            &#9993; 登録確認メールを <strong>yamada@sample-salon.jp</strong> に送信しました。<br>
            ログイン情報が記載されていますので、大切に保管してください。
        </div>

        <div style="display:flex;gap:12px;flex-wrap:wrap;justify-content:center;">
            <a href="{{ route('shop.dashboard') }}" class="btn btn-primary btn-lg">&#128202; 管理画面に進む</a>
            <a href="{{ route('shop.invite') }}" class="btn btn-outline btn-lg">&#128233; メンバーを招待する</a>
        </div>
    </div>

    <div class="page-nav" style="max-width:480px;margin:24px auto;">
        <strong>遷移先:</strong>
        <a href="{{ route('shop.dashboard') }}">店舗ダッシュボード (S-02)</a> |
        <a href="{{ route('shop.invite') }}">メンバー招待 (S-05)</a>
    </div>
</body>
</html>
