@extends('layouts.front')
@section('title', 'スタイル詳細')
@section('screen-info')
<strong>F-25: スタイル詳細</strong> ― 完成写真（実写）+ Vimeoサンプル動画 + 使用テクニック。
@endsection

@section('content')
<div class="section" style="max-width:900px;">

    {{-- 完成写真 大 + 情報 --}}
    <div style="display:flex;gap:24px;margin-bottom:32px;flex-wrap:wrap;">
        {{-- メイン写真 --}}
        <div style="flex:1;min-width:280px;">
            <div style="position:relative;border-radius:16px;overflow:hidden;">
                <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=600&h=800&fit=crop"
                     alt="ナチュラルウェーブダウン"
                     style="width:100%;display:block;">
                <span class="badge badge-free" style="position:absolute;top:12px;left:12px;font-size:12px;padding:6px 14px;">&#9989; 無料</span>
            </div>
        </div>

        {{-- スタイル情報 --}}
        <div style="flex:1;min-width:280px;">
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:12px;flex-wrap:wrap;">
                <span class="badge badge-free">&#9989; 無料</span>
                <span class="level-badge level-beginner">初級</span>
            </div>
            <h1 style="font-size:24px;font-weight:800;margin-bottom:8px;">ナチュラルウェーブダウン</h1>
            <p style="color:#6B5D52;font-size:14px;line-height:1.8;margin-bottom:16px;">
                コテを使ってナチュラルなウェーブを作るダウンスタイルです。普段使いからお出かけまで幅広く使える万能スタイル。初心者でも再現しやすい定番アレンジです。
            </p>

            <div style="background:#FFFDF9;border-radius:12px;padding:16px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:16px;">
                <table style="width:100%;font-size:14px;">
                    <tr style="border-bottom:1px solid #E8DDD0;">
                        <td style="padding:8px 0;color:#9B8E82;width:100px;">髪の長さ</td>
                        <td style="padding:8px 0;font-weight:600;">ロング</td>
                    </tr>
                    <tr style="border-bottom:1px solid #E8DDD0;">
                        <td style="padding:8px 0;color:#9B8E82;">カテゴリー</td>
                        <td style="padding:8px 0;font-weight:600;">ダウンスタイル</td>
                    </tr>
                    <tr style="border-bottom:1px solid #E8DDD0;">
                        <td style="padding:8px 0;color:#9B8E82;">難易度</td>
                        <td style="padding:8px 0;"><span class="level-badge level-beginner">初級</span></td>
                    </tr>
                    <tr style="border-bottom:1px solid #E8DDD0;">
                        <td style="padding:8px 0;color:#9B8E82;">所要時間</td>
                        <td style="padding:8px 0;font-weight:600;">約15分</td>
                    </tr>
                    <tr>
                        <td style="padding:8px 0;color:#9B8E82;">視聴回数</td>
                        <td style="padding:8px 0;font-weight:600;">&#128065; 3,850回</td>
                    </tr>
                </table>
            </div>

            <div style="margin-bottom:16px;">
                <div style="font-size:13px;font-weight:600;color:#6B5D52;margin-bottom:8px;">必要な道具</div>
                <div class="tag-list">
                    <span class="tag">32mm コテ</span>
                    <span class="tag">ダッカール</span>
                    <span class="tag">オイル</span>
                    <span class="tag">コーム</span>
                </div>
            </div>

            <button class="btn btn-secondary btn-sm">&#9825; お気に入りに追加</button>
        </div>
    </div>

    {{-- 作り方動画（Vimeo埋め込み） --}}
    <div class="section-title">&#127916; 作り方動画</div>
    <div style="position:relative;padding-top:56.25%;border-radius:12px;overflow:hidden;margin-bottom:16px;background:#3D3229;">
        <iframe src="https://player.vimeo.com/video/824804225?h=0&badge=0&autopause=0&player_id=0&app_id=58479"
                style="position:absolute;top:0;left:0;width:100%;height:100%;border:none;"
                allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen
                title="デモ動画">
        </iframe>
    </div>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:32px;">
        <div>
            <div style="font-size:16px;font-weight:700;">ナチュラルウェーブダウンの作り方</div>
            <div style="font-size:13px;color:#888;">15:30 / ダウンスタイル / 初級</div>
        </div>
        <span class="badge badge-free">&#9989; 無料で視聴OK</span>
    </div>

    {{-- 使用テクニック --}}
    <div class="section-title">&#9986; このスタイルで使うテクニック</div>
    <p style="font-size:13px;color:#9B8E82;margin-bottom:16px;">基礎技術のコースで個別に学ぶこともできます</p>
    <div class="grid grid-3" style="margin-bottom:32px;">
        @php
        $techPhotos = [
            'https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?w=400&h=225&fit=crop',
            'https://images.unsplash.com/photo-1560869713-7d0a29430803?w=400&h=225&fit=crop',
            'https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?w=400&h=225&fit=crop',
        ];
        @endphp
        @foreach ([
            ['title'=>'フォワード巻き','course'=>'コテの巻き方','free'=>true],
            ['title'=>'リバース巻き','course'=>'コテの巻き方','free'=>false],
            ['title'=>'スライス・ブロッキング','course'=>'基礎技術','free'=>false],
        ] as $i => $tech)
        <a href="{{ $tech['free'] ? route('front.videos.show', $i+1) : '#' }}"
           class="card {{ $tech['free'] ? '' : 'card-locked' }}">
            <div class="card-img" style="background:none;">
                <img src="{{ $techPhotos[$i] }}" alt="{{ $tech['title'] }}" style="width:100%;height:100%;object-fit:cover;display:block;">
                @unless ($tech['free'])
                <div class="lock-overlay"><span>&#128274;</span><span class="lock-text">有料</span></div>
                @endunless
            </div>
            <div class="card-body">
                <div style="font-size:13px;font-weight:600;">{{ $tech['title'] }}</div>
                <div style="font-size:12px;color:#888;">{{ $tech['course'] }}</div>
                <div style="margin-top:4px;">
                    @if ($tech['free']) <span class="badge badge-free">無料</span>
                    @else <span class="badge badge-premium">&#128274; 有料</span> @endif
                </div>
            </div>
        </a>
        @endforeach
    </div>

    {{-- 似ているスタイル --}}
    <div class="section-title">&#128161; 似ているスタイル</div>
    <div class="style-gallery" style="columns:3;">
        @php
        $similarPhotos = [
            'https://images.unsplash.com/photo-1541795795328-f073b763494e?w=400&h=300&fit=crop',
            'https://images.unsplash.com/photo-1597223557154-721c1cecc4b0?w=400&h=530&fit=crop',
            'https://images.unsplash.com/photo-1519699047748-de8e457a634e?w=400&h=400&fit=crop',
        ];
        @endphp
        @foreach ([
            ['name'=>'ミックス巻きダウン','length'=>'ミディアム','views'=>1800,'free'=>false,'shape'=>'wide'],
            ['name'=>'リバースダウンスタイル','length'=>'ロング','views'=>1350,'free'=>false,'shape'=>'tall'],
            ['name'=>'ゆるふわハーフアップ','length'=>'ミディアム','views'=>3200,'free'=>true,'shape'=>'square'],
        ] as $i => $s)
        <a href="{{ $s['free'] ? route('front.styles.show', $i+10) : '#' }}"
           class="style-card {{ $s['shape'] }} {{ $s['free'] ? '' : 'card-locked' }}">
            <div class="style-photo">
                <img src="{{ $similarPhotos[$i] }}" alt="{{ $s['name'] }}" style="width:100%;height:100%;object-fit:cover;display:block;">
                @unless ($s['free'])
                <div class="lock-overlay"><span>&#128274;</span><span class="lock-text">有料</span></div>
                @endunless
            </div>
            <div class="style-info">
                <div class="style-name">{{ $s['name'] }}</div>
                <div class="style-meta"><span>{{ $s['length'] }}</span><span>&#128065; {{ number_format($s['views']) }}</span></div>
                <div style="margin-top:4px;">
                    @if ($s['free']) <span class="badge badge-free">無料</span>
                    @else <span class="badge badge-premium">&#128274; 有料</span> @endif
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.styles.index') }}">スタイル一覧 (F-24)</a> |
<a href="{{ route('front.videos.show', 1) }}">動画視聴 (F-10)</a> |
<a href="{{ route('front.courses.index') }}">コース一覧 (F-08)</a> |
<span style="color:#D8A39D;cursor:pointer;text-decoration:underline;" onclick="openPremiumModal()">課金モーダルを開く（デモ）</span>
@endsection
