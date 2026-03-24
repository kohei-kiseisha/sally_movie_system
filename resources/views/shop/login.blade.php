<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>店舗管理者ログイン - SALLY141 Learning</title>
    <link rel="stylesheet" href="/css/prototype.css">
</head>
<body>
    <div class="proto-badge">PROTOTYPE</div>

    <div class="screen-info" style="margin:16px;">
        <strong>S-01: 店舗管理者ログイン</strong> ― 店舗管理者がメール＋パスワードでログインする画面。
    </div>

    <div style="max-width:400px;margin:80px auto;text-align:center;padding:0 20px;">
        <div style="font-size:48px;margin-bottom:16px;">&#127970;</div>
        <h1 style="font-size:24px;font-weight:800;margin-bottom:8px;">店舗管理者ログイン</h1>
        <p style="color:#888;font-size:14px;margin-bottom:32px;">店舗管理画面にログインします</p>

        <form>
            <div class="form-group" style="text-align:left;">
                <label>メールアドレス</label>
                <input type="email" class="form-input" placeholder="admin@example.com" value="shop@sally141.jp">
            </div>
            <div class="form-group" style="text-align:left;">
                <label>パスワード</label>
                <input type="password" class="form-input" placeholder="パスワードを入力" value="********">
            </div>
            <a href="{{ route('shop.dashboard') }}" class="btn btn-primary btn-lg btn-block" style="margin-bottom:16px;">
                &#128274; ログイン
            </a>
        </form>

        <p style="font-size:13px;color:#888;margin-top:12px;">
            <a href="#" style="color:#D8A39D;">パスワードをお忘れの方</a>
        </p>

        <div style="margin-top:24px;padding:16px;background:#fff5f7;border-radius:8px;">
            <p style="font-size:13px;color:#555;margin-bottom:8px;">店舗契約がまだの方</p>
            <a href="{{ route('shop.register') }}" class="btn btn-outline btn-sm">&#127970; 店舗登録はこちら</a>
        </div>

        <div style="margin-top:40px;padding-top:24px;border-top:1px solid #eee;">
            <p style="font-size:13px;color:#888;margin-bottom:12px;">他のログインはこちら</p>
            <a href="{{ route('front.login') }}" class="btn btn-secondary btn-sm" style="margin-right:8px;">受講者ログイン</a>
            <a href="{{ route('admin.login') }}" class="btn btn-secondary btn-sm">運営管理者ログイン</a>
        </div>
    </div>

    <div class="page-nav" style="max-width:400px;margin:24px auto;">
        <strong>遷移先:</strong>
        <a href="{{ route('shop.dashboard') }}">店舗ダッシュボード (S-02)</a> |
        <a href="{{ route('front.login') }}">受講者ログイン (F-02)</a> |
        <a href="{{ route('admin.login') }}">運営管理者ログイン (A-01)</a>
    </div>
</body>
</html>
