@extends('layouts.front')
@section('title', 'プレイリスト詳細')
@section('screen-info')
<strong>F-28: プレイリスト詳細</strong> ― ユーザーが作成したプレイリスト内の動画一覧。並び替え・削除が可能。
@endsection

@section('content')
@php
$playlists = [
    ['name'=>'よく使うヘアセット','memo'=>'サロンでよく使うスタイルをまとめたリスト','updated'=>'2026/03/24',
     'videos'=>[
        ['title'=>'フォワード巻き','cat'=>'基礎技術 / コテの巻き方','level'=>'beginner','label'=>'初級','dur'=>'8:30','pct'=>100,'free'=>true],
        ['title'=>'リバース巻き','cat'=>'基礎技術 / コテの巻き方','level'=>'beginner','label'=>'初級','dur'=>'7:45','pct'=>85,'free'=>false],
        ['title'=>'ナミ巻き','cat'=>'基礎技術 / コテの巻き方','level'=>'beginner','label'=>'初級','dur'=>'9:00','pct'=>65,'free'=>false],
        ['title'=>'外し巻き','cat'=>'基礎技術 / コテの巻き方','level'=>'beginner','label'=>'初級','dur'=>'6:30','pct'=>40,'free'=>false],
        ['title'=>'Cカール','cat'=>'基礎技術 / コテの巻き方','level'=>'beginner','label'=>'初級','dur'=>'7:15','pct'=>0,'free'=>false],
    ]],
    ['name'=>'来月の練習用','memo'=>'来月の練習に集中する技法','updated'=>'2026/03/22',
     'videos'=>[
        ['title'=>'ロープ編み','cat'=>'基礎技術 / 編み方マスター','level'=>'intermediate','label'=>'中級','dur'=>'10:15','pct'=>100,'free'=>false],
        ['title'=>'片編み込み（すくい編み）','cat'=>'基礎技術 / 編み方マスター','level'=>'intermediate','label'=>'中級','dur'=>'12:00','pct'=>50,'free'=>false],
        ['title'=>'表編み込み','cat'=>'基礎技術 / 編み方マスター','level'=>'intermediate','label'=>'中級','dur'=>'14:00','pct'=>0,'free'=>false],
    ]],
    ['name'=>'ブライダル系まとめ','memo'=>'ブライダル案件で参考になる動画','updated'=>'2026/03/20',
     'videos'=>[
        ['title'=>'ローシニヨン（カールベース）','cat'=>'ヘアスタイル基礎 / シニヨン','level'=>'advanced','label'=>'上級','dur'=>'15:00','pct'=>30,'free'=>false],
        ['title'=>'アップスタイル基本','cat'=>'ヘアスタイル基礎 / アップスタイル','level'=>'advanced','label'=>'上級','dur'=>'18:00','pct'=>0,'free'=>false],
        ['title'=>'編みおろし（シングル）','cat'=>'ヘアスタイル基礎 / ハーフアップ','level'=>'advanced','label'=>'上級','dur'=>'16:00','pct'=>0,'free'=>false],
    ]],
];
$pl = $playlists[min($id - 1, count($playlists) - 1)];
$totalPct = count($pl['videos']) > 0 ? round(collect($pl['videos'])->avg('pct')) : 0;
@endphp

<div class="section">
    {{-- ヘッダー --}}
    <div style="display:flex;justify-content:space-between;align-items:start;margin-bottom:24px;">
        <div>
            <div style="display:flex;align-items:center;gap:12px;margin-bottom:8px;">
                <a href="{{ route('front.favorites') }}" style="color:#9B8E82;font-size:14px;">&larr; お気に入りに戻る</a>
            </div>
            <h1 style="font-size:22px;font-weight:700;margin-bottom:4px;">&#128193; {{ $pl['name'] }}</h1>
            <p style="font-size:13px;color:#888;margin-bottom:8px;">{{ $pl['memo'] }}</p>
            <div style="display:flex;gap:16px;font-size:13px;color:#888;">
                <span>&#127916; {{ count($pl['videos']) }}本の動画</span>
                <span>更新日: {{ $pl['updated'] }}</span>
                <span>平均進捗: {{ $totalPct }}%</span>
            </div>
        </div>
        <div style="display:flex;gap:8px;">
            <button class="btn btn-secondary btn-sm" onclick="document.getElementById('editPlaylistModal').style.display='flex'">&#9998; 編集</button>
            <button class="btn btn-secondary btn-sm" onclick="toggleReorder()">&#8597; 並び替え</button>
        </div>
    </div>

    {{-- 全体進捗バー --}}
    <div style="background:#FFFDF9;border-radius:8px;padding:12px 16px;margin-bottom:24px;box-shadow:0 2px 8px rgba(61,50,41,.06);">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:6px;">
            <span style="font-size:13px;font-weight:600;">プレイリスト進捗</span>
            <span style="font-size:13px;color:#888;">{{ $totalPct }}%</span>
        </div>
        <div class="progress-bar"><div class="fill" style="width:{{ $totalPct }}%;"></div></div>
    </div>

    {{-- 動画リスト --}}
    <div style="display:flex;flex-direction:column;gap:8px;" id="videoList">
        @foreach ($pl['videos'] as $i => $v)
        <div class="playlist-item" style="display:flex;align-items:center;gap:12px;background:#FFFDF9;border-radius:12px;padding:12px;box-shadow:0 2px 8px rgba(61,50,41,.06);transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 4px 16px rgba(61,50,41,.1)'" onmouseout="this.style.boxShadow='0 2px 8px rgba(61,50,41,.06)'">

            {{-- ドラッグハンドル（並び替え時に表示） --}}
            <div class="reorder-handle" style="display:none;cursor:grab;color:#C9B7A7;font-size:18px;padding:0 4px;">&#9776;</div>

            {{-- 番号 --}}
            <div style="width:28px;height:28px;background:#E8DDD0;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;color:#6B5D52;flex-shrink:0;">
                {{ $i + 1 }}
            </div>

            {{-- サムネイル --}}
            <a href="{{ route('front.videos.show', $i+1) }}" style="width:140px;flex-shrink:0;aspect-ratio:16/9;background:#E8DDD0;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:11px;color:#9B8E82;position:relative;overflow:hidden;">
                &#127916; {{ $v['title'] }}
                <span style="position:absolute;bottom:3px;right:4px;background:rgba(61,50,41,.75);color:#fff;font-size:10px;padding:1px 5px;border-radius:3px;">{{ $v['dur'] }}</span>
                @if ($v['pct'] > 0)
                <div style="position:absolute;bottom:0;left:0;height:3px;width:{{ $v['pct'] }}%;background:#D8A39D;"></div>
                @endif
            </a>

            {{-- 情報 --}}
            <div style="flex:1;min-width:0;">
                <div style="display:flex;align-items:center;gap:6px;margin-bottom:3px;">
                    <span class="level-badge level-{{ $v['level'] }}" style="font-size:10px;">{{ $v['label'] }}</span>
                    @if ($v['free']) <span class="badge badge-free" style="font-size:10px;">無料</span>
                    @else <span class="badge badge-premium" style="font-size:10px;">&#128274; 有料</span> @endif
                </div>
                <a href="{{ route('front.videos.show', $i+1) }}" style="font-size:14px;font-weight:600;display:block;margin-bottom:2px;">{{ $v['title'] }}</a>
                <div style="font-size:12px;color:#888;">{{ $v['cat'] }}</div>
            </div>

            {{-- 進捗 --}}
            <div style="width:60px;text-align:center;flex-shrink:0;">
                @if ($v['pct'] === 100)
                    <span style="color:#4caf50;font-size:18px;">&#9989;</span>
                    <div style="font-size:10px;color:#888;">完了</div>
                @elseif ($v['pct'] > 0)
                    <div style="font-size:14px;font-weight:700;color:#D8A39D;">{{ $v['pct'] }}%</div>
                    <div style="font-size:10px;color:#888;">視聴中</div>
                @else
                    <div style="font-size:14px;font-weight:700;color:#ccc;">-</div>
                    <div style="font-size:10px;color:#888;">未視聴</div>
                @endif
            </div>

            {{-- 削除ボタン --}}
            <button class="btn btn-sm btn-secondary" onclick="if(confirm('この動画をプレイリストから削除しますか？（デモ）'))alert('削除しました')" title="プレイリストから削除" style="flex-shrink:0;padding:4px 8px;color:#aaa;">&#128465;</button>
        </div>
        @endforeach
    </div>

    {{-- 動画を追加するボタン --}}
    <div style="margin-top:16px;text-align:center;">
        <a href="{{ route('front.videos.index') }}" class="btn btn-secondary">&#10010; 動画一覧から追加する</a>
    </div>
</div>

{{-- ========================================== --}}
{{-- モーダル: プレイリスト編集 --}}
{{-- ========================================== --}}
<div class="modal-overlay" id="editPlaylistModal" style="display:none;" onclick="if(event.target===this)this.style.display='none'">
    <div class="modal-content" style="max-width:420px;">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
            <h3 style="margin:0;font-size:18px;font-weight:700;">&#128193; プレイリスト編集</h3>
            <button onclick="document.getElementById('editPlaylistModal').style.display='none'" style="background:none;border:none;font-size:20px;cursor:pointer;color:#888;">&times;</button>
        </div>
        <div style="margin-bottom:16px;">
            <label style="font-size:13px;font-weight:600;display:block;margin-bottom:6px;">プレイリスト名</label>
            <input type="text" class="form-input" value="{{ $pl['name'] }}" style="width:100%;">
        </div>
        <div style="margin-bottom:20px;">
            <label style="font-size:13px;font-weight:600;display:block;margin-bottom:6px;">メモ（任意）</label>
            <textarea class="form-input" rows="2" style="width:100%;resize:vertical;">{{ $pl['memo'] }}</textarea>
        </div>
        <div style="display:flex;justify-content:space-between;">
            <button class="btn btn-secondary" style="color:#c62828;" onclick="if(confirm('このプレイリストを削除しますか？（デモ）'))alert('削除しました')">&#128465; 削除</button>
            <div style="display:flex;gap:8px;">
                <button class="btn btn-secondary" onclick="document.getElementById('editPlaylistModal').style.display='none'">キャンセル</button>
                <button class="btn btn-primary" onclick="document.getElementById('editPlaylistModal').style.display='none';alert('保存しました（デモ）')">保存</button>
            </div>
        </div>
    </div>
</div>

<script>
function toggleReorder() {
    const handles = document.querySelectorAll('.reorder-handle');
    const isShown = handles[0]?.style.display !== 'none';
    handles.forEach(h => h.style.display = isShown ? 'none' : 'block');
}
</script>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.favorites') }}">お気に入り (F-12)</a> |
<a href="{{ route('front.videos.show', 1) }}">動画視聴 (F-10)</a> |
<a href="{{ route('front.videos.index') }}">動画一覧 (F-05)</a>
@endsection
