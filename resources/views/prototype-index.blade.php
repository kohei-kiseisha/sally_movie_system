<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALLY141 Learning - 紙芝居プロトタイプ 画面一覧</title>
    <link rel="stylesheet" href="/css/prototype.css">
    <style>
        body { background: #f0f2f5; }
        .index-container { max-width: 1000px; margin: 0 auto; padding: 40px 20px; }
        .index-header { text-align: center; margin-bottom: 40px; }
        .index-header h1 { font-size: 32px; font-weight: 800; color: #3D3229; }
        .index-header p { color: #888; margin-top: 8px; }
        .screen-group { margin-bottom: 32px; }
        .screen-group h2 { font-size: 18px; font-weight: 700; color: #D8A39D; margin-bottom: 12px; padding-bottom: 8px; border-bottom: 2px solid #D8A39D; }
        .screen-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 12px; }
        .screen-link { display: flex; align-items: center; gap: 12px; padding: 14px 16px; background: #fff; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,.06); transition: all .2s; text-decoration: none; color: inherit; }
        .screen-link:hover { transform: translateX(4px); box-shadow: 0 2px 8px rgba(0,0,0,.1); }
        .screen-id { background: #3D3229; color: #fff; padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 700; white-space: nowrap; }
        .screen-id.shop { background: #5C4F44; }
        .screen-id.admin { background: #533483; }
        .screen-id.inf { background: #D8A39D; }
        .screen-name { font-size: 14px; font-weight: 600; }
        .screen-desc { font-size: 11px; color: #888; }
        .legend { display: flex; gap: 16px; justify-content: center; margin-bottom: 32px; font-size: 13px; flex-wrap: wrap; }
        .legend span { display: flex; align-items: center; gap: 6px; }
        .legend .dot { width: 12px; height: 12px; border-radius: 3px; }
    </style>
</head>
<body>
    <div class="proto-badge">PROTOTYPE</div>

    <div class="index-container">
        <div class="index-header">
            <h1>&#127909; SALLY141 Learning</h1>
            <p>紙芝居プロトタイプ - 全画面一覧</p>
            <p style="font-size:13px;color:#aaa;">各画面をクリックして紙芝居を確認できます。画面間のリンクで遷移も可能です。</p>
        </div>

        <div class="legend">
            <span><div class="dot" style="background:#3D3229;"></div> フロント画面</span>
            <span><div class="dot" style="background:#5C4F44;"></div> 店舗管理画面</span>
            <span><div class="dot" style="background:#533483;"></div> 運営管理画面</span>
            <span><div class="dot" style="background:#D8A39D;"></div> インフルエンサー管理画面</span>
        </div>

        {{-- ======================================= --}}
        {{-- フロント画面 --}}
        {{-- ======================================= --}}
        <div class="screen-group">
            <h2>&#127968; フロント画面（一般ユーザー / 店舗所属ユーザー）</h2>
            <div class="screen-grid">
                <a href="{{ route('front.top') }}" class="screen-link">
                    <span class="screen-id">F-01</span>
                    <div><div class="screen-name">トップページ</div><div class="screen-desc">サービス紹介・新着動画・スタイルギャラリー・おすすめコース</div></div>
                </a>
                <a href="{{ route('front.login') }}" class="screen-link">
                    <span class="screen-id">F-02</span>
                    <div><div class="screen-name">LINEログイン導線</div><div class="screen-desc">LINE認証画面への遷移</div></div>
                </a>
                <a href="{{ route('front.register') }}" class="screen-link">
                    <span class="screen-id">F-03</span>
                    <div><div class="screen-name">新規登録（プロフィール入力）</div><div class="screen-desc">初回ログイン後の基本情報入力</div></div>
                </a>
                <a href="{{ route('front.mypage') }}" class="screen-link">
                    <span class="screen-id">F-04</span>
                    <div><div class="screen-name">マイページ（ダッシュボード）</div><div class="screen-desc">学習進捗・続きから見る・お知らせ</div></div>
                </a>
                <a href="{{ route('front.videos.index') }}" class="screen-link">
                    <span class="screen-id">F-05</span>
                    <div><div class="screen-name">動画一覧</div><div class="screen-desc">無料/有料区分付き・フィルタ・検索</div></div>
                </a>
                <a href="{{ route('front.categories.index') }}" class="screen-link">
                    <span class="screen-id">F-06</span>
                    <div><div class="screen-name">カテゴリー一覧</div><div class="screen-desc">ヘアメイクとは/道具/基礎技術/ヘアスタイル基礎</div></div>
                </a>
                <a href="{{ route('front.categories.show', 1) }}" class="screen-link">
                    <span class="screen-id">F-07</span>
                    <div><div class="screen-name">カテゴリー詳細</div><div class="screen-desc">カテゴリー内のコース・動画一覧</div></div>
                </a>
                <a href="{{ route('front.courses.index') }}" class="screen-link">
                    <span class="screen-id">F-08</span>
                    <div><div class="screen-name">コース一覧</div><div class="screen-desc">レベル別タブ・カテゴリーフィルタ付き</div></div>
                </a>
                <a href="{{ route('front.courses.show', 1) }}" class="screen-link">
                    <span class="screen-id">F-09</span>
                    <div><div class="screen-name">コース詳細</div><div class="screen-desc">チャプター一覧・無料/有料ロック・講師情報</div></div>
                </a>
                <a href="{{ route('front.videos.show', 1) }}" class="screen-link">
                    <span class="screen-id">F-10</span>
                    <div><div class="screen-name">動画視聴画面</div><div class="screen-desc">プレーヤー・ロック状態切替デモ・課金モーダル</div></div>
                </a>
                <a href="{{ route('front.progress') }}" class="screen-link">
                    <span class="screen-id">F-11</span>
                    <div><div class="screen-name">学習進捗画面</div><div class="screen-desc">全体進捗率・コース別進捗・修了バッジ・学習時間</div></div>
                </a>
                <a href="{{ route('front.favorites') }}" class="screen-link">
                    <span class="screen-id">F-12</span>
                    <div><div class="screen-name">お気に入り一覧</div><div class="screen-desc">動画/コースのタブ切り替え</div></div>
                </a>
                <a href="{{ route('front.history') }}" class="screen-link">
                    <span class="screen-id">F-13</span>
                    <div><div class="screen-name">視聴履歴</div><div class="screen-desc">日付別の視聴履歴・再開位置</div></div>
                </a>
                <a href="{{ route('front.events.index') }}" class="screen-link">
                    <span class="screen-id">F-14</span>
                    <div><div class="screen-name">イベント一覧</div><div class="screen-desc">オフラインイベント一覧・残席表示</div></div>
                </a>
                <a href="{{ route('front.events.show', 1) }}" class="screen-link">
                    <span class="screen-id">F-15</span>
                    <div><div class="screen-name">イベント詳細</div><div class="screen-desc">イベント情報・申込ボタン</div></div>
                </a>
                <a href="{{ route('front.events.confirm', 1) }}" class="screen-link">
                    <span class="screen-id">F-16</span>
                    <div><div class="screen-name">イベント申込確認</div><div class="screen-desc">申込内容の確認</div></div>
                </a>
                <a href="{{ route('front.events.complete', 1) }}" class="screen-link">
                    <span class="screen-id">F-17</span>
                    <div><div class="screen-name">イベント申込完了</div><div class="screen-desc">申込完了メッセージ</div></div>
                </a>
                <a href="{{ route('front.search') }}" class="screen-link">
                    <span class="screen-id">F-18</span>
                    <div><div class="screen-name">検索結果</div><div class="screen-desc">動画/コース/イベントのタブ切り替え検索</div></div>
                </a>
                <a href="{{ route('front.plan') }}" class="screen-link">
                    <span class="screen-id">F-19</span>
                    <div><div class="screen-name">契約・プラン画面</div><div class="screen-desc">月額プラン確認・決済導線</div></div>
                </a>
                <a href="{{ route('front.settings') }}" class="screen-link">
                    <span class="screen-id">F-20</span>
                    <div><div class="screen-name">設定画面</div><div class="screen-desc">プロフィール・通知・契約・退会</div></div>
                </a>
                <a href="{{ route('front.invite') }}" class="screen-link">
                    <span class="screen-id">F-21</span>
                    <div><div class="screen-name">店舗招待リンク受信</div><div class="screen-desc">招待リンクからの参加導線</div></div>
                </a>
                <a href="{{ route('front.invite.complete') }}" class="screen-link">
                    <span class="screen-id">F-22</span>
                    <div><div class="screen-name">店舗所属完了</div><div class="screen-desc">店舗への紐付け完了確認</div></div>
                </a>
                <a href="{{ route('front.influencer.show', 1) }}" class="screen-link">
                    <span class="screen-id">F-23</span>
                    <div><div class="screen-name">インフルエンサー特集ページ</div><div class="screen-desc">プロフィール・有料コース（買い切り）・無料プレビュー</div></div>
                </a>
                <a href="{{ route('front.styles.index') }}" class="screen-link">
                    <span class="screen-id">F-24</span>
                    <div><div class="screen-name">スタイル一覧（完成写真から学ぶ）</div><div class="screen-desc">写真ギャラリー・髪の長さタブ・無料/有料区分</div></div>
                </a>
                <a href="{{ route('front.styles.show', 1) }}" class="screen-link">
                    <span class="screen-id">F-25</span>
                    <div><div class="screen-name">スタイル詳細</div><div class="screen-desc">完成写真＋Vimeo動画＋使用テクニック</div></div>
                </a>
                <a href="{{ route('front.influencer.purchase', 1) }}" class="screen-link">
                    <span class="screen-id">F-26</span>
                    <div><div class="screen-name">インフルエンサーコース購入</div><div class="screen-desc">買い切りコースの決済確認・完了</div></div>
                </a>
                <a href="{{ route('front.instructors.index') }}" class="screen-link">
                    <span class="screen-id">F-27</span>
                    <div><div class="screen-name">特別講師一覧</div><div class="screen-desc">インフルエンサー講師のカード一覧</div></div>
                </a>
            </div>
        </div>

        {{-- ======================================= --}}
        {{-- 店舗管理画面 --}}
        {{-- ======================================= --}}
        <div class="screen-group">
            <h2>&#127970; 店舗管理画面</h2>
            <div class="screen-grid">
                <a href="{{ route('shop.register') }}" class="screen-link">
                    <span class="screen-id shop">S-00</span>
                    <div><div class="screen-name">店舗登録画面</div><div class="screen-desc">店舗情報・管理者・プラン選択・決済</div></div>
                </a>
                <a href="{{ route('shop.register.complete') }}" class="screen-link">
                    <span class="screen-id shop">S-00b</span>
                    <div><div class="screen-name">店舗登録完了</div><div class="screen-desc">登録完了・次のステップ案内</div></div>
                </a>
                <a href="{{ route('shop.login') }}" class="screen-link">
                    <span class="screen-id shop">S-01</span>
                    <div><div class="screen-name">店舗管理者ログイン</div><div class="screen-desc">メール+パスワードログイン</div></div>
                </a>
                <a href="{{ route('shop.dashboard') }}" class="screen-link">
                    <span class="screen-id shop">S-02</span>
                    <div><div class="screen-name">店舗ダッシュボード</div><div class="screen-desc">所属メンバー数・全体進捗サマリー</div></div>
                </a>
                <a href="{{ route('shop.members.index') }}" class="screen-link">
                    <span class="screen-id shop">S-03</span>
                    <div><div class="screen-name">メンバー一覧</div><div class="screen-desc">所属スタッフ・生徒の一覧と学習状況</div></div>
                </a>
                <a href="{{ route('shop.members.show', 1) }}" class="screen-link">
                    <span class="screen-id shop">S-04</span>
                    <div><div class="screen-name">メンバー進捗詳細</div><div class="screen-desc">個別メンバーの学習状況詳細</div></div>
                </a>
                <a href="{{ route('shop.invite') }}" class="screen-link">
                    <span class="screen-id shop">S-05</span>
                    <div><div class="screen-name">メンバー招待画面</div><div class="screen-desc">招待リンク発行・共有</div></div>
                </a>
                <a href="{{ route('shop.subscription') }}" class="screen-link">
                    <span class="screen-id shop">S-06</span>
                    <div><div class="screen-name">店舗契約管理</div><div class="screen-desc">プラン・支払い状況・契約情報</div></div>
                </a>
                <a href="{{ route('shop.settings') }}" class="screen-link">
                    <span class="screen-id shop">S-07</span>
                    <div><div class="screen-name">店舗設定</div><div class="screen-desc">店舗情報編集・管理者設定</div></div>
                </a>
                <a href="{{ route('shop.events') }}" class="screen-link">
                    <span class="screen-id shop">S-08</span>
                    <div><div class="screen-name">イベント参加状況</div><div class="screen-desc">参加マトリクス・タブ切り替え</div></div>
                </a>
            </div>
        </div>

        {{-- ======================================= --}}
        {{-- 運営管理画面 --}}
        {{-- ======================================= --}}
        <div class="screen-group">
            <h2>&#128736; 運営管理画面（SALLY141）</h2>
            <div class="screen-grid">
                <a href="{{ route('admin.login') }}" class="screen-link">
                    <span class="screen-id admin">A-01</span>
                    <div><div class="screen-name">管理者ログイン</div><div class="screen-desc">メール+パスワードログイン</div></div>
                </a>
                <a href="{{ route('admin.dashboard') }}" class="screen-link">
                    <span class="screen-id admin">A-02</span>
                    <div><div class="screen-name">管理ダッシュボード</div><div class="screen-desc">KPI・契約数・視聴数サマリー</div></div>
                </a>
                <a href="{{ route('admin.videos.index') }}" class="screen-link">
                    <span class="screen-id admin">A-03</span>
                    <div><div class="screen-name">動画管理</div><div class="screen-desc">動画のCRUD・Vimeo連携</div></div>
                </a>
                <a href="{{ route('admin.videos.create') }}" class="screen-link">
                    <span class="screen-id admin">A-03+</span>
                    <div><div class="screen-name">動画登録画面</div><div class="screen-desc">Vimeo URL入力・メタ情報設定</div></div>
                </a>
                <a href="{{ route('admin.courses.index') }}" class="screen-link">
                    <span class="screen-id admin">A-04</span>
                    <div><div class="screen-name">コース管理</div><div class="screen-desc">コースの作成・編集・動画紐付け</div></div>
                </a>
                <a href="{{ route('admin.courses.create') }}" class="screen-link">
                    <span class="screen-id admin">A-04+</span>
                    <div><div class="screen-name">コース作成画面</div><div class="screen-desc">コース情報入力・動画の追加並び替え</div></div>
                </a>
                <a href="{{ route('admin.categories.index') }}" class="screen-link">
                    <span class="screen-id admin">A-05</span>
                    <div><div class="screen-name">カテゴリー管理</div><div class="screen-desc">カテゴリーのCRUD・並び順管理</div></div>
                </a>
                <a href="{{ route('admin.events.index') }}" class="screen-link">
                    <span class="screen-id admin">A-06</span>
                    <div><div class="screen-name">イベント管理</div><div class="screen-desc">イベント作成・募集・参加者管理</div></div>
                </a>
                <a href="{{ route('admin.subscriptions.index') }}" class="screen-link">
                    <span class="screen-id admin">A-07</span>
                    <div><div class="screen-name">契約管理</div><div class="screen-desc">個人/店舗の契約状況・タブ切り替え</div></div>
                </a>
                <a href="{{ route('admin.users.index') }}" class="screen-link">
                    <span class="screen-id admin">A-08</span>
                    <div><div class="screen-name">ユーザー管理</div><div class="screen-desc">一般ユーザーの一覧・学習進捗・紹介元</div></div>
                </a>
                <a href="{{ route('admin.organizations.index') }}" class="screen-link">
                    <span class="screen-id admin">A-09</span>
                    <div><div class="screen-name">店舗管理</div><div class="screen-desc">店舗一覧・詳細・店舗管理者確認</div></div>
                </a>
                <a href="{{ route('admin.influencers.index') }}" class="screen-link">
                    <span class="screen-id admin">A-10</span>
                    <div><div class="screen-name">インフルエンサー管理</div><div class="screen-desc">一覧・報酬管理・報酬設定タブ</div></div>
                </a>
                <a href="{{ route('admin.influencers.create') }}" class="screen-link">
                    <span class="screen-id admin">A-10b</span>
                    <div><div class="screen-name">インフルエンサー追加</div><div class="screen-desc">基本情報・報酬条件・コース紐付け・登録</div></div>
                </a>
                <a href="{{ route('admin.admins.index') }}" class="screen-link">
                    <span class="screen-id admin">A-11</span>
                    <div><div class="screen-name">管理者管理</div><div class="screen-desc">運営スタッフ一覧・権限マトリクス</div></div>
                </a>
            </div>
        </div>

        {{-- ======================================= --}}
        {{-- インフルエンサー管理画面 --}}
        {{-- ======================================= --}}
        <div class="screen-group">
            <h2>&#11088; インフルエンサー管理画面</h2>
            <div class="screen-grid">
                <a href="{{ route('influencer.dashboard') }}" class="screen-link">
                    <span class="screen-id inf">I-01</span>
                    <div><div class="screen-name">ダッシュボード</div><div class="screen-desc">収益サマリー・クイックアクション・アクティビティ</div></div>
                </a>
                <a href="{{ route('influencer.courses') }}" class="screen-link">
                    <span class="screen-id inf">I-02</span>
                    <div><div class="screen-name">コース売上確認</div><div class="screen-desc">コース別売上・受講者数・報酬（閲覧のみ）</div></div>
                </a>
                <a href="{{ route('influencer.referrals') }}" class="screen-link">
                    <span class="screen-id inf">I-03</span>
                    <div><div class="screen-name">紹介URL管理</div><div class="screen-desc">複数URL発行・SNS別成果比較・永久20%</div></div>
                </a>
                <a href="{{ route('influencer.profile') }}" class="screen-link">
                    <span class="screen-id inf">I-04</span>
                    <div><div class="screen-name">プロフィール編集</div><div class="screen-desc">表示名・SNSリンク・得意タグ・カバー画像</div></div>
                </a>
                <a href="{{ route('influencer.payout_settings') }}" class="screen-link">
                    <span class="screen-id inf">I-05</span>
                    <div><div class="screen-name">振込先設定</div><div class="screen-desc">口座情報・振込履歴・注意事項</div></div>
                </a>
            </div>
        </div>

        <div style="text-align:center;margin-top:40px;padding:20px;color:#888;font-size:13px;">
            <p>SALLY141 Learning 紙芝居プロトタイプ</p>
            <p>全 {{ 27 + 10 + 14 + 5 }} 画面 | Laravel {{ app()->version() }}</p>
        </div>
    </div>
</body>
</html>
