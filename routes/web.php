<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| SALLY141 Learning - 紙芝居プロトタイプ ルーティング
|--------------------------------------------------------------------------
| 全画面を静的に表示するためのルーティング。
| 認証やDBは使わず、全画面をそのまま表示する。
*/

// ============================================
// フロント画面（一般ユーザー / 店舗所属ユーザー）
// ============================================

// F-01: トップページ
Route::get('/', fn() => view('front.top'))->name('front.top');

// F-02: LINEログイン導線
Route::get('/login', fn() => view('front.login'))->name('front.login');

// F-03: 新規登録（プロフィール入力）
Route::get('/register', fn() => view('front.register'))->name('front.register');

// F-04: マイページ
Route::get('/mypage', fn() => view('front.mypage'))->name('front.mypage');

// F-05: 動画一覧
Route::get('/videos', fn() => view('front.videos.index'))->name('front.videos.index');

// F-10: 動画視聴
Route::get('/videos/{id}', fn($id) => view('front.videos.show', compact('id')))->name('front.videos.show');

// F-06: カテゴリー一覧
Route::get('/categories', fn() => view('front.categories.index'))->name('front.categories.index');

// F-07: カテゴリー詳細
Route::get('/categories/{id}', fn($id) => view('front.categories.show', compact('id')))->name('front.categories.show');

// F-08: コース一覧
Route::get('/courses', fn() => view('front.courses.index'))->name('front.courses.index');

// F-09: コース詳細
Route::get('/courses/{id}', fn($id) => view('front.courses.show', compact('id')))->name('front.courses.show');

// F-11: 学習進捗
Route::get('/progress', fn() => view('front.progress'))->name('front.progress');

// F-12: お気に入り一覧
Route::get('/favorites', fn() => view('front.favorites'))->name('front.favorites');

// F-13: 視聴履歴
Route::get('/history', fn() => view('front.history'))->name('front.history');

// F-14: イベント一覧
Route::get('/events', fn() => view('front.events.index'))->name('front.events.index');

// F-15: イベント詳細
Route::get('/events/{id}', fn($id) => view('front.events.show', compact('id')))->name('front.events.show');

// F-16: イベント申込確認
Route::get('/events/{id}/confirm', fn($id) => view('front.events.confirm', compact('id')))->name('front.events.confirm');

// F-17: イベント申込完了
Route::get('/events/{id}/complete', fn($id) => view('front.events.complete', compact('id')))->name('front.events.complete');

// F-18: 検索結果
Route::get('/search', fn() => view('front.search'))->name('front.search');

// F-19: 契約・プラン
Route::get('/plan', fn() => view('front.plan'))->name('front.plan');

// F-20: 設定
Route::get('/settings', fn() => view('front.settings'))->name('front.settings');

// F-21: 店舗招待リンク受信
Route::get('/invite/{token?}', fn() => view('front.invite'))->name('front.invite');

// F-22: 店舗所属完了
Route::get('/invite-complete', fn() => view('front.invite-complete'))->name('front.invite.complete');

// F-27: 特別講師一覧
Route::get('/instructors', fn() => view('front.instructors.index'))->name('front.instructors.index');

// F-23: インフルエンサー特集ページ
Route::get('/influencer/{id}', fn($id) => view('front.influencer', compact('id')))->name('front.influencer.show');

// F-26: インフルエンサーコース購入確認
Route::get('/influencer-course/{id}/purchase', fn($id) => view('front.influencer-purchase', compact('id')))->name('front.influencer.purchase');

// F-24: スタイル一覧（完成写真から学ぶ）
Route::get('/styles', fn() => view('front.styles.index'))->name('front.styles.index');

// F-25: スタイル詳細（完成写真 + 作り方動画）
Route::get('/styles/{id}', fn($id) => view('front.styles.show', compact('id')))->name('front.styles.show');


// ============================================
// 店舗管理画面
// ============================================

Route::prefix('shop')->group(function () {
    // S-00: 店舗登録
    Route::get('/register', fn() => view('shop.register'))->name('shop.register');

    // S-00b: 店舗登録完了
    Route::get('/register/complete', fn() => view('shop.register-complete'))->name('shop.register.complete');

    // S-01: 店舗管理者ログイン
    Route::get('/login', fn() => view('shop.login'))->name('shop.login');

    // S-02: 店舗ダッシュボード
    Route::get('/dashboard', fn() => view('shop.dashboard'))->name('shop.dashboard');

    // S-03: メンバー一覧
    Route::get('/members', fn() => view('shop.members.index'))->name('shop.members.index');

    // S-04: メンバー進捗詳細
    Route::get('/members/{id}', fn($id) => view('shop.members.show', compact('id')))->name('shop.members.show');

    // S-05: メンバー招待
    Route::get('/invite', fn() => view('shop.invite'))->name('shop.invite');

    // S-06: 店舗契約管理
    Route::get('/subscription', fn() => view('shop.subscription'))->name('shop.subscription');

    // S-07: 店舗設定
    Route::get('/settings', fn() => view('shop.settings'))->name('shop.settings');

    // S-08: イベント参加状況
    Route::get('/events', fn() => view('shop.events'))->name('shop.events');
});


// ============================================
// 運営管理画面（SALLY141）
// ============================================

Route::prefix('admin')->group(function () {
    // A-01: 管理者ログイン
    Route::get('/login', fn() => view('admin.login'))->name('admin.login');

    // A-02: 管理ダッシュボード
    Route::get('/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');

    // A-03: 動画管理
    Route::get('/videos', fn() => view('admin.videos.index'))->name('admin.videos.index');
    Route::get('/videos/create', fn() => view('admin.videos.create'))->name('admin.videos.create');

    // A-04: コース管理
    Route::get('/courses', fn() => view('admin.courses.index'))->name('admin.courses.index');
    Route::get('/courses/create', fn() => view('admin.courses.create'))->name('admin.courses.create');

    // A-05: カテゴリー管理
    Route::get('/categories', fn() => view('admin.categories.index'))->name('admin.categories.index');

    // A-06: イベント管理
    Route::get('/events', fn() => view('admin.events.index'))->name('admin.events.index');

    // A-07: 契約管理
    Route::get('/subscriptions', fn() => view('admin.subscriptions.index'))->name('admin.subscriptions.index');

    // A-08: ユーザー管理
    Route::get('/users', fn() => view('admin.users.index'))->name('admin.users.index');

    // A-09: 店舗管理
    Route::get('/organizations', fn() => view('admin.organizations.index'))->name('admin.organizations.index');

    // A-11: 管理者管理（自社スタッフ）
    Route::get('/admins', fn() => view('admin.admins.index'))->name('admin.admins.index');

    // A-10: インフルエンサー管理
    Route::get('/influencers', fn() => view('admin.influencers.index'))->name('admin.influencers.index');

    // A-10b: インフルエンサー追加
    Route::get('/influencers/create', fn() => view('admin.influencers.create'))->name('admin.influencers.create');
});


// ============================================
// インフルエンサー専用管理画面
// ============================================

Route::prefix('influencer-admin')->group(function () {
    // I-01: インフルエンサーダッシュボード
    Route::get('/dashboard', fn() => view('influencer.dashboard'))->name('influencer.dashboard');

    // I-02: マイコース管理
    Route::get('/courses', fn() => view('influencer.courses'))->name('influencer.courses');

    // I-03: 紹介URL管理
    Route::get('/referrals', fn() => view('influencer.referrals'))->name('influencer.referrals');

    // I-04: プロフィール編集
    Route::get('/profile', fn() => view('influencer.profile'))->name('influencer.profile');

    // I-05: 振込先設定
    Route::get('/payout-settings', fn() => view('influencer.payout-settings'))->name('influencer.payout_settings');
});


// ============================================
// 紙芝居インデックス（画面一覧）
// ============================================

Route::get('/prototype', fn() => view('prototype-index'))->name('prototype.index');
