@extends('layouts.front')
@section('title', '動画視聴')
@section('screen-info')
<strong>F-10: 動画視聴画面</strong> ― 有料動画にアクセスした場合のロック状態表示と課金誘導。無料動画は通常再生。
@endsection

@section('content')
{{-- ============================================ --}}
{{-- 状態切り替えボタン（デモ用） --}}
{{-- ============================================ --}}
<div style="max-width:1200px;margin:0 auto;padding:12px 20px 0;">
    <div style="display:flex;gap:8px;font-size:12px;">
        <button class="btn btn-sm btn-primary" onclick="switchView('free')" id="btn-free">&#9989; 無料動画（通常再生）</button>
        <button class="btn btn-sm btn-secondary" onclick="switchView('locked')" id="btn-locked">&#128274; 有料動画（ロック状態）</button>
    </div>
</div>

{{-- ============================================ --}}
{{-- VIEW 1: 無料動画（通常視聴可能） --}}
{{-- ============================================ --}}
<div id="view-free">
<div style="display:flex;gap:24px;max-width:1200px;margin:0 auto;padding:20px;">
    <div style="flex:1;min-width:0;">
        <div class="video-player" style="margin-bottom:16px;">
            <div class="play-btn">&#9654;</div>
        </div>

        <div style="margin-bottom:24px;">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                <div style="display:flex;align-items:center;gap:8px;">
                    <span class="badge badge-free">無料</span>
                    <span class="level-badge level-beginner">初級</span>
                    <span style="font-size:12px;color:#888;">基礎技術 / コテの巻き方</span>
                </div>
                <button class="btn btn-secondary btn-sm">&#9825; お気に入り</button>
            </div>
            <h1 style="font-size:22px;font-weight:700;margin-bottom:8px;">フォワード巻きの基本</h1>
            <p style="color:#6B5D52;font-size:14px;line-height:1.8;">
                コテを使ったフォワード巻きの基本テクニックを解説します。毛束の取り方、巻く方向、温度設定など、初心者が押さえるべきポイントを丁寧に説明します。
            </p>
        </div>

        <div style="background:#FFFDF9;border-radius:12px;padding:16px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:24px;">
            <div style="display:flex;justify-content:space-between;align-items:center;">
                <div>
                    <div style="font-size:13px;color:#888;">コース: <a href="{{ route('front.courses.show', 1) }}" style="color:#D8A39D;font-weight:600;">コテの巻き方</a></div>
                    <div style="font-size:14px;font-weight:600;margin-top:4px;">1 / 6 動画</div>
                </div>
                <a href="{{ route('front.videos.show', 2) }}" class="btn btn-primary">次の動画へ &rarr;</a>
            </div>
            <div class="progress-bar" style="margin-top:12px;"><div class="fill" style="width:17%;"></div></div>
        </div>

        <div class="section-title">関連動画</div>
        <div class="grid grid-3">
            @foreach ([
                ['title'=>'リバース巻き','free'=>false],
                ['title'=>'ナミ巻き','free'=>false],
                ['title'=>'コームブラシの説明','free'=>true],
            ] as $i => $rv)
            <a href="{{ $rv['free'] ? route('front.videos.show', $i+10) : '#' }}"
               class="card {{ $rv['free'] ? '' : 'card-locked' }}">
                <div class="card-img">
                    &#127916; {{ $rv['title'] }}
                    <span class="duration">{{ [7,9,6][$i] }}:{{ [45,0,30][$i] }}</span>
                    @unless ($rv['free'])
                    <div class="lock-overlay"><span>&#128274;</span><span class="lock-text">有料</span></div>
                    @endunless
                </div>
                <div class="card-body">
                    <div style="font-size:13px;font-weight:600;">{{ $rv['title'] }}</div>
                    <div style="display:flex;gap:4px;margin-top:4px;">
                        @if ($rv['free']) <span class="badge badge-free">無料</span>
                        @else <span class="badge badge-premium">&#128274; 有料</span> @endif
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    {{-- サイドバー --}}
    <div style="width:320px;flex-shrink:0;" class="course-sidebar">
        <div style="background:#FFFDF9;border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(61,50,41,.06);position:sticky;top:80px;">
            <div style="padding:16px;border-bottom:1px solid #E8DDD0;">
                <div style="font-size:14px;font-weight:700;">コテの巻き方</div>
                <div style="font-size:12px;color:#888;margin-top:4px;">0 / 6 完了</div>
            </div>
            @php
            $sideList = [
                ['title'=>'フォワード巻き','free'=>true],
                ['title'=>'リバース巻き','free'=>false],
                ['title'=>'ナミ巻き','free'=>false],
                ['title'=>'外し巻き','free'=>false],
                ['title'=>'Cカール','free'=>false],
                ['title'=>'Sカール','free'=>false],
            ];
            @endphp
            @foreach ($sideList as $idx => $ch)
            <a href="{{ $ch['free'] ? route('front.videos.show', $idx+1) : '#' }}"
               class="chapter-item {{ $idx === 0 ? 'current' : '' }} {{ !$ch['free'] ? 'locked card-locked' : '' }}"
               style="padding:10px 16px;">
                <div class="chapter-num" style="width:24px;height:24px;font-size:11px;">
                    @if (!$ch['free']) &#128274; @else {{ $idx+1 }} @endif
                </div>
                <div class="chapter-title" style="font-size:13px;">{{ $ch['title'] }}</div>
                @if ($ch['free'])
                    <span class="badge badge-free" style="font-size:10px;">無料</span>
                @endif
            </a>
            @endforeach
        </div>
    </div>
</div>
</div>

{{-- ============================================ --}}
{{-- VIEW 2: 有料動画（ロック状態） --}}
{{-- ============================================ --}}
<div id="view-locked" style="display:none;">
<div style="display:flex;gap:24px;max-width:1200px;margin:0 auto;padding:20px;">
    <div style="flex:1;min-width:0;">
        {{-- ロックされたプレーヤー --}}
        <div class="video-player locked" style="margin-bottom:16px;">
            <div class="play-btn">&#128274;</div>
            <div class="lock-message">
                <p>この動画は<strong style="color:#fff;">有料会員限定</strong>コンテンツです</p>
                <button class="btn btn-primary btn-lg" onclick="openPremiumModal()">&#128274; 有料会員になって視聴する</button>
                <div style="margin-top:8px;font-size:12px;color:#9B8E82;">月額 ¥770（税込）で全動画見放題</div>
            </div>
        </div>

        <div style="margin-bottom:24px;">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;">
                <div style="display:flex;align-items:center;gap:8px;">
                    <span class="badge badge-premium">&#128274; 有料会員限定</span>
                    <span class="level-badge level-intermediate">中級</span>
                    <span style="font-size:12px;color:#888;">基礎技術 / 編み方マスター</span>
                </div>
            </div>
            <h1 style="font-size:22px;font-weight:700;margin-bottom:8px;">裏編み（クロス編み）</h1>
            <p style="color:#6B5D52;font-size:14px;line-height:1.8;">
                2つ編みベースの裏編み（クロス編み）テクニックを解説します。通常の編みと逆方向に交差させることで立体感のある仕上がりになります。
            </p>

            {{-- 課金誘導バナー --}}
            <div style="background:linear-gradient(135deg,#3D3229,#4A3F35);border-radius:12px;padding:24px;margin-top:16px;color:#fff;text-align:center;">
                <div style="font-size:24px;margin-bottom:8px;">&#128274;</div>
                <div style="font-size:16px;font-weight:700;margin-bottom:4px;">この動画を視聴するには有料会員への登録が必要です</div>
                <div style="font-size:13px;color:#C9B7A7;margin-bottom:16px;">有料会員になると、全{{ 133 }}本の動画が見放題になります</div>
                <button class="btn btn-primary btn-lg" onclick="openPremiumModal()">月額 ¥770 で今すぐ始める</button>
            </div>
        </div>

        <div class="section-title">無料で見れる動画</div>
        <div class="grid grid-3">
            @foreach (['フォワード巻きの基本','コームブラシの説明','ピン類の説明'] as $i => $title)
            <a href="{{ route('front.videos.show', $i+1) }}" class="card">
                <div class="card-img">
                    &#127916; {{ $title }}
                    <span class="duration">{{ [8,6,8][$i] }}:{{ [30,30,0][$i] }}</span>
                </div>
                <div class="card-body">
                    <div style="font-size:13px;font-weight:600;">{{ $title }}</div>
                    <span class="badge badge-free" style="margin-top:4px;">&#9989; 無料で視聴OK</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    {{-- サイドバー（ロック状態） --}}
    <div style="width:320px;flex-shrink:0;" class="course-sidebar">
        <div style="background:#FFFDF9;border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(61,50,41,.06);position:sticky;top:80px;">
            <div style="padding:16px;border-bottom:1px solid #E8DDD0;">
                <div style="display:flex;justify-content:space-between;align-items:center;">
                    <div style="font-size:14px;font-weight:700;">編み方マスター</div>
                    <span class="badge badge-premium">有料</span>
                </div>
                <div style="font-size:12px;color:#888;margin-top:4px;">0 / 12 完了</div>
            </div>
            @foreach (['ロープ編み','ツイスト編み','片編み込み','裏編み（クロス編み）','3つ編み（表）','3つ編み（裏）','丸編み・変形編み','表編み込み','4つ編み','フィッシュボーン','フィンガーエイト','ウォーターフォール'] as $idx => $title)
            <div class="chapter-item locked card-locked" style="padding:10px 16px;">
                <div class="chapter-num" style="width:24px;height:24px;font-size:11px;">&#128274;</div>
                <div class="chapter-title" style="font-size:13px;">{{ $title }}</div>
            </div>
            @endforeach
            <div style="padding:12px 16px;text-align:center;">
                <button class="btn btn-primary btn-sm btn-block" onclick="openPremiumModal()">&#128274; 有料会員になって全て見る</button>
            </div>
        </div>
    </div>
</div>
</div>

<style>@media (max-width:768px) { .course-sidebar { display:none; } }</style>

<script>
function switchView(type) {
    document.getElementById('view-free').style.display = type === 'free' ? 'block' : 'none';
    document.getElementById('view-locked').style.display = type === 'locked' ? 'block' : 'none';
    document.getElementById('btn-free').className = 'btn btn-sm ' + (type === 'free' ? 'btn-primary' : 'btn-secondary');
    document.getElementById('btn-locked').className = 'btn btn-sm ' + (type === 'locked' ? 'btn-primary' : 'btn-secondary');
}
</script>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.courses.show', 1) }}">コース詳細 (F-09)</a> |
<a href="{{ route('front.videos.index') }}">動画一覧 (F-05)</a> |
<a href="{{ route('front.favorites') }}">お気に入り (F-12)</a> |
<span style="color:#D8A39D;cursor:pointer;text-decoration:underline;" onclick="openPremiumModal()">課金モーダルを開く（デモ）</span>
@endsection
