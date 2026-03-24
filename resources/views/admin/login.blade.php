<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ログイン - SALLY141 Learning</title>
    <link rel="stylesheet" href="/css/prototype.css">
    <style>
        .login-page { min-height: 100vh; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #3D3229 0%, #3D3229 50%, #5C4F44 100%); }
        .login-card { background: #fff; border-radius: 16px; padding: 48px 40px; width: 100%; max-width: 420px; box-shadow: 0 8px 32px rgba(0,0,0,.2); }
        .login-logo { text-align: center; margin-bottom: 32px; }
        .login-logo .brand { font-size: 28px; font-weight: 800; color: #D8A39D; }
        .login-logo .brand span { color: #3D3229; font-weight: 300; font-size: 16px; margin-left: 4px; }
        .login-logo p { font-size: 13px; color: #888; margin-top: 4px; }
        .login-card .form-group { margin-bottom: 20px; }
        .login-card .btn-primary { width: 100%; padding: 14px; font-size: 16px; margin-top: 8px; }
        .login-footer { text-align: center; margin-top: 24px; font-size: 12px; color: #999; }
    </style>
</head>
<body>
    <div class="proto-badge">PROTOTYPE</div>

    <div class="screen-info" style="position:fixed;top:12px;left:12px;z-index:9998;max-width:320px;">
        <strong>A-01:</strong> 管理者ログイン画面。メール＋パスワードで認証。
    </div>

    <div class="login-page">
        <div class="login-card">
            <div class="login-logo">
                <div class="brand">SALLY141 <span>Learning</span></div>
                <p>運営管理画面</p>
            </div>

            <form>
                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="email" class="form-input" placeholder="admin@sally141.com" value="admin@sally141.com">
                </div>
                <div class="form-group">
                    <label>パスワード</label>
                    <input type="password" class="form-input" placeholder="パスワードを入力" value="********">
                </div>
                <div style="display:flex;align-items:center;gap:8px;margin-bottom:16px;">
                    <input type="checkbox" id="remember" checked>
                    <label for="remember" style="font-size:13px;color:#666;margin-bottom:0;">ログイン状態を保持する</label>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-block">ログイン</a>
            </form>

            <div class="login-footer">
                <p>パスワードをお忘れの方は管理者にお問い合わせください</p>
            </div>
        </div>
    </div>

    <div class="page-nav" style="position:fixed;bottom:16px;left:50%;transform:translateX(-50%);max-width:400px;width:90%;">
        <strong>遷移先:</strong>
        <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
    </div>
</body>
</html>
