@extends('layouts.front')
@section('title', 'Akiko Style 特集')
@section('screen-info')
<strong>F-23: インフルエンサー特集ページ</strong> ― 公開プロフィール・専用有料コース（買い切り9,800円）・紹介URL経由ユーザーの着地ページ。
@endsection

@section('content')
{{-- プロフィールヒーロー --}}
<div class="hero" style="padding-bottom:40px;">
    <div style="width:100px;height:100px;border-radius:50%;overflow:hidden;margin:0 auto 16px;border:3px solid #fff;">
        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=200&h=200&fit=crop&crop=face" alt="Akiko" style="width:100%;height:100%;object-fit:cover;">
    </div>
    <h1 style="font-size:28px;">Akiko Style</h1>
    <p style="font-size:14px;color:#C9B7A7;max-width:500px;margin:8px auto 0;">
        SNS総フォロワー50万人の人気ヘアアレンジアーティスト。トレンド韓国風スタイルから本格ブライダルまで幅広く発信中。
    </p>
    <div style="display:flex;gap:24px;justify-content:center;margin-top:16px;font-size:14px;">
        <div><span style="font-weight:700;color:#fff;">3</span> <span style="color:#9B8E82;">コース</span></div>
        <div><span style="font-weight:700;color:#fff;">18</span> <span style="color:#9B8E82;">動画</span></div>
        <div><span style="font-weight:700;color:#fff;">50万</span> <span style="color:#9B8E82;">フォロワー</span></div>
    </div>
    <div style="display:flex;gap:12px;justify-content:center;margin-top:16px;">
        <a href="#" style="color:#C9B7A7;font-size:13px;">&#128247; Instagram</a>
        <a href="#" style="color:#C9B7A7;font-size:13px;">&#127909; YouTube</a>
        <a href="#" style="color:#C9B7A7;font-size:13px;">&#127916; TikTok</a>
    </div>
</div>

<div class="section">
    {{-- 紹介URL経由の表示（デモ） --}}
    <div style="background:linear-gradient(135deg,#F8EEEC,#F5F0E6);border:1px solid #D8A39D;border-radius:12px;padding:20px;margin-bottom:32px;text-align:center;">
        <div style="font-size:13px;color:#C8908A;margin-bottom:4px;">&#127881; Akiko Styleの紹介でご来訪いただきました</div>
        <div style="font-size:15px;font-weight:700;color:#3D3229;">月額プランに登録すると全動画が見放題に！</div>
        <a href="{{ route('front.plan') }}" class="btn btn-primary" style="margin-top:12px;">月額 ¥770 で今すぐ始める</a>
    </div>

    {{-- ====================================== --}}
    {{-- 有料コース（買い切り） --}}
    {{-- ====================================== --}}
    <div class="section-title">&#11088; Akiko Style 特別コース<span style="font-size:13px;font-weight:400;color:#9B8E82;margin-left:8px;">買い切り型</span></div>
    <p style="font-size:14px;color:#6B5D52;margin-bottom:20px;">Akikoが厳選した特別コースを購入できます。一度購入すれば永久に視聴可能です。</p>

    <div class="grid grid-3" style="margin-bottom:32px;">
        @php
        $infCourses = [
            [
                'name'=>'Akikoの時短ヘアアレンジ10選',
                'desc'=>'忙しい朝でも5分で完成する時短アレンジを厳選。',
                'level'=>'beginner','label'=>'初級','videos'=>10,
                'price'=>9800,'img'=>'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=400&h=225&fit=crop',
            ],
            [
                'name'=>'韓国トレンドヘア完全攻略',
                'desc'=>'カチモリ・ヨシンモリなど韓国で人気のスタイルを網羅。',
                'level'=>'intermediate','label'=>'中級','videos'=>8,
                'price'=>9800,'img'=>'https://images.unsplash.com/photo-1554519934-e32b1629d9ee?w=400&h=225&fit=crop',
            ],
            [
                'name'=>'特別コラボ: ブライダルヘアセット',
                'desc'=>'本格ブライダルシーンのヘアセットをAkikoが解説。',
                'level'=>'advanced','label'=>'上級','videos'=>6,
                'price'=>14800,'img'=>'https://images.unsplash.com/photo-1595959183082-7b570b7e1e6b?w=400&h=225&fit=crop',
            ],
        ];
        @endphp
        @foreach ($infCourses as $idx => $course)
        <div class="card">
            <div class="card-img" style="background:none;">
                <img src="{{ $course['img'] }}" alt="{{ $course['name'] }}" style="width:100%;height:100%;object-fit:cover;">
                <span style="position:absolute;top:8px;right:8px;background:#3D3229;color:#fff;font-size:11px;font-weight:700;padding:4px 10px;border-radius:6px;">買い切り</span>
            </div>
            <div class="card-body">
                <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                    <span class="level-badge level-{{ $course['level'] }}">{{ $course['label'] }}</span>
                    <span style="font-size:12px;color:#888;">{{ $course['videos'] }}本の動画</span>
                </div>
                <div style="font-size:15px;font-weight:700;margin-bottom:4px;">{{ $course['name'] }}</div>
                <div style="font-size:13px;color:#6B5D52;margin-bottom:12px;">{{ $course['desc'] }}</div>
                <div style="display:flex;justify-content:space-between;align-items:center;">
                    <div style="font-size:24px;font-weight:800;color:#D8A39D;">
                        &yen;{{ number_format($course['price']) }}<span style="font-size:12px;font-weight:400;color:#9B8E82;">（税込）</span>
                    </div>
                    <a href="{{ route('front.influencer.purchase', $idx+1) }}" class="btn btn-primary btn-sm">購入する</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- ====================================== --}}
    {{-- 無料プレビュー動画 --}}
    {{-- ====================================== --}}
    <div class="section-title">&#9654; 無料プレビュー</div>
    <p style="font-size:13px;color:#9B8E82;margin-bottom:16px;">各コースの第1話は無料で視聴できます</p>
    <div class="grid grid-3" style="margin-bottom:32px;">
        @foreach (['時短ポニーテール','韓国風ヨシンモリ入門','ブライダルヘアの基本'] as $i => $title)
        <a href="{{ route('front.videos.show', $i+100) }}" class="card">
            <div class="card-img" style="background:none;">
                <img src="{{ $infCourses[$i]['img'] }}" alt="{{ $title }}" style="width:100%;height:100%;object-fit:cover;">
                <span class="duration">{{ [5,8,10][$i] }}:{{ [30,15,0][$i] }}</span>
            </div>
            <div class="card-body">
                <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $title }}</div>
                <div style="display:flex;gap:6px;">
                    <span class="badge badge-free">&#9989; 無料</span>
                    <span style="font-size:12px;color:#888;">第1話プレビュー</span>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    {{-- ====================================== --}}
    {{-- 月額プランCTA --}}
    {{-- ====================================== --}}
    <div style="background:linear-gradient(135deg,#3D3229,#4A3F35);border-radius:12px;padding:28px;color:#fff;text-align:center;margin-bottom:32px;">
        <div style="font-size:18px;font-weight:800;margin-bottom:8px;">基礎技術の動画も全部見たい方へ</div>
        <div style="font-size:14px;color:#C9B7A7;margin-bottom:16px;">月額プランなら、SALLY141の基礎カリキュラム全133本が見放題</div>
        <a href="{{ route('front.plan') }}" class="btn btn-primary btn-lg">月額 ¥770 で始める</a>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.influencer.purchase', 1) }}">コース購入 (F-26)</a> |
<a href="{{ route('front.videos.show', 100) }}">動画視聴 (F-10)</a> |
<a href="{{ route('front.top') }}">トップ (F-01)</a> |
<a href="{{ route('influencer.dashboard') }}">インフルエンサーダッシュボード (I-01)</a>
@endsection
