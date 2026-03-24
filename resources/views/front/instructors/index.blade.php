@extends('layouts.front')
@section('title', '特別講師')
@section('screen-info')
<strong>F-27: 特別講師一覧</strong> ― 外部インフルエンサー講師のカード一覧。各講師の専用コース（買い切り）へ遷移可能。
@endsection

@section('content')
{{-- ヒーロー --}}
<div style="background:linear-gradient(135deg,#3D3229 0%,#4A3F35 100%);color:#fff;padding:48px 20px;text-align:center;">
    <div style="font-size:40px;margin-bottom:8px;">&#11088;</div>
    <h1 style="font-size:28px;font-weight:800;margin-bottom:8px;">特別講師</h1>
    <p style="font-size:15px;color:#C9B7A7;max-width:560px;margin:0 auto;">
        人気のヘアアレンジ系インフルエンサーが、SALLY141だけの特別コースをお届け。<br>
        プロの技を、あなたのスマホで学べます。
    </p>
</div>

<div class="section">
    @php
    $instructors = [
        [
            'name' => 'Akiko Style',
            'title' => 'ヘアアレンジアーティスト',
            'bio' => 'SNS総フォロワー50万人。時短アレンジから韓国系トレンドまで幅広く発信。ブライダルヘアの実績も多数。',
            'photo' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&h=400&fit=crop&crop=face',
            'followers' => '50万',
            'courses' => 3,
            'students' => 420,
            'rating' => 4.9,
            'tags' => ['時短アレンジ', '韓国系', 'ブライダル'],
            'featured_course' => 'Akikoの時短ヘアアレンジ10選',
            'featured_price' => 9800,
            'featured_img' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=400&h=225&fit=crop',
        ],
        [
            'name' => 'MIKU Hair',
            'title' => 'ヘアスタイリスト / YouTuber',
            'bio' => 'YouTube登録者30万人。編み込み系のテクニック動画が人気。初心者にも分かりやすい丁寧な解説が特徴。',
            'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop&crop=face',
            'followers' => '30万',
            'courses' => 2,
            'students' => 310,
            'rating' => 4.8,
            'tags' => ['編み込み', '初心者向け', 'YouTube'],
            'featured_course' => '編み込みアレンジ完全マスター',
            'featured_price' => 9800,
            'featured_img' => 'https://images.unsplash.com/photo-1605980776566-0486c3b394f8?w=400&h=225&fit=crop',
        ],
        [
            'name' => 'YUI Beauty',
            'title' => 'メイク＆ヘアアーティスト',
            'bio' => 'Instagram 25万フォロワー。ウェディングやイベントのヘアセットを中心に活動。大人エレガント系が得意。',
            'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop&crop=face',
            'followers' => '25万',
            'courses' => 2,
            'students' => 185,
            'rating' => 4.7,
            'tags' => ['エレガント', 'ウェディング', 'アップスタイル'],
            'featured_course' => '大人のエレガントアップスタイル',
            'featured_price' => 12800,
            'featured_img' => 'https://images.unsplash.com/photo-1595959183082-7b570b7e1e6b?w=400&h=225&fit=crop',
        ],
        [
            'name' => 'SAKI AOYAMA',
            'title' => 'トレンドヘアクリエイター',
            'bio' => 'TikTok 40万フォロワー。10代〜20代に圧倒的人気。最新トレンドを取り入れたカジュアルアレンジが得意。',
            'photo' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=400&fit=crop&crop=face',
            'followers' => '40万',
            'courses' => 1,
            'students' => 245,
            'rating' => 4.8,
            'tags' => ['トレンド', 'カジュアル', 'TikTok'],
            'featured_course' => 'バズるヘアアレンジ15選',
            'featured_price' => 9800,
            'featured_img' => 'https://images.unsplash.com/photo-1519699047748-de8e457a634e?w=400&h=225&fit=crop',
        ],
        [
            'name' => 'Rina K.',
            'title' => 'ヘアケア＆アレンジスペシャリスト',
            'bio' => 'YouTube 15万登録。「髪質別アレンジ」で話題に。くせ毛・細毛など髪質に合わせた提案力が人気。',
            'photo' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=400&h=400&fit=crop&crop=face',
            'followers' => '15万',
            'courses' => 1,
            'students' => 130,
            'rating' => 4.6,
            'tags' => ['髪質別', 'ヘアケア', 'くせ毛対応'],
            'featured_course' => '髪質別アレンジテクニック',
            'featured_price' => 9800,
            'featured_img' => 'https://images.unsplash.com/photo-1492106087820-71f1a00d2b11?w=400&h=225&fit=crop',
        ],
    ];
    @endphp

    {{-- 講師カード一覧 --}}
    <div style="display:flex;flex-direction:column;gap:24px;">
        @foreach ($instructors as $i => $inst)
        <div class="card" style="overflow:visible;">
            <div style="display:flex;gap:0;flex-wrap:wrap;">
                {{-- 左: プロフィール --}}
                <div style="flex:1;min-width:280px;padding:24px;display:flex;flex-direction:column;">
                    <div style="display:flex;align-items:center;gap:16px;margin-bottom:16px;">
                        <div style="width:72px;height:72px;border-radius:50%;overflow:hidden;flex-shrink:0;box-shadow:0 2px 8px rgba(61,50,41,.15);">
                            <img src="{{ $inst['photo'] }}" alt="{{ $inst['name'] }}" style="width:100%;height:100%;object-fit:cover;">
                        </div>
                        <div>
                            <div style="font-size:20px;font-weight:800;">{{ $inst['name'] }}</div>
                            <div style="font-size:13px;color:#9B8E82;">{{ $inst['title'] }}</div>
                        </div>
                    </div>

                    <p style="font-size:14px;color:#6B5D52;line-height:1.7;margin-bottom:16px;flex:1;">{{ $inst['bio'] }}</p>

                    <div class="tag-list" style="margin-bottom:16px;">
                        @foreach ($inst['tags'] as $tag)
                        <span class="tag">{{ $tag }}</span>
                        @endforeach
                    </div>

                    <div style="display:flex;gap:20px;font-size:13px;color:#6B5D52;margin-bottom:16px;">
                        <div>&#128101; <strong>{{ $inst['followers'] }}</strong> フォロワー</div>
                        <div>&#128218; <strong>{{ $inst['courses'] }}</strong> コース</div>
                        <div>&#127891; <strong>{{ $inst['students'] }}</strong> 受講生</div>
                        <div>&#11088; <strong>{{ $inst['rating'] }}</strong></div>
                    </div>

                    <a href="{{ route('front.influencer.show', $i+1) }}" class="btn btn-outline" style="align-self:flex-start;">
                        {{ $inst['name'] }} のページを見る &rarr;
                    </a>
                </div>

                {{-- 右: おすすめコース --}}
                <div style="width:320px;flex-shrink:0;background:#F5F0E6;padding:20px;display:flex;flex-direction:column;">
                    <div style="font-size:11px;font-weight:700;color:#9B8E82;text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;">おすすめコース</div>
                    <div style="border-radius:10px;overflow:hidden;margin-bottom:12px;">
                        <img src="{{ $inst['featured_img'] }}" alt="{{ $inst['featured_course'] }}" style="width:100%;aspect-ratio:16/9;object-fit:cover;display:block;">
                    </div>
                    <div style="font-size:15px;font-weight:700;margin-bottom:4px;">{{ $inst['featured_course'] }}</div>
                    <div style="font-size:12px;color:#9B8E82;margin-bottom:12px;">{{ $inst['courses'] > 1 ? '他 '.($inst['courses']-1).' コースあり' : '買い切りコース' }}</div>
                    <div style="display:flex;justify-content:space-between;align-items:center;margin-top:auto;">
                        <div style="font-size:22px;font-weight:800;color:#D8A39D;">&yen;{{ number_format($inst['featured_price']) }}<span style="font-size:11px;font-weight:400;color:#9B8E82;">（税込）</span></div>
                        <a href="{{ route('front.influencer.show', $i+1) }}" class="btn btn-primary btn-sm">詳しく見る</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- CTA --}}
    <div style="background:linear-gradient(135deg,#3D3229,#4A3F35);border-radius:12px;padding:28px;color:#fff;text-align:center;margin-top:32px;">
        <div style="font-size:18px;font-weight:800;margin-bottom:8px;">基礎カリキュラムも充実！</div>
        <div style="font-size:14px;color:#C9B7A7;margin-bottom:16px;">特別講師コースと合わせて、SALLY141の基礎技術133本も月額で学べます</div>
        <a href="{{ route('front.plan') }}" class="btn btn-primary btn-lg">月額 ¥770 で始める</a>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.influencer.show', 1) }}">講師詳細 (F-23)</a> |
<a href="{{ route('front.influencer.purchase', 1) }}">コース購入 (F-26)</a> |
<a href="{{ route('front.top') }}">トップ (F-01)</a>
@endsection
