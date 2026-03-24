@extends('layouts.front')
@section('title', 'お気に入り・プレイリスト')
@section('screen-info')
<strong>F-12: お気に入り・プレイリスト</strong> ― 動画・コースのお気に入りと、ユーザーが自由に作成できるプレイリスト機能。
@endsection

@section('content')
<div class="section">
    <div class="section-title">お気に入り・プレイリスト</div>

    {{-- タブ --}}
    <div class="tabs">
        <div class="tab active" data-tab="fav-videos">動画 (5)</div>
        <div class="tab" data-tab="fav-courses">コース (2)</div>
        <div class="tab" data-tab="fav-playlists">プレイリスト (3)</div>
    </div>

    {{-- ========================================== --}}
    {{-- TAB: 動画 --}}
    {{-- ========================================== --}}
    <div class="tab-panel active" id="fav-videos">
        <div class="grid grid-3">
            @foreach ([
                ['title'=>'フォワード巻き','cat'=>'基礎技術','level'=>'初級','pct'=>100],
                ['title'=>'ロープ編み','cat'=>'基礎技術','level'=>'中級','pct'=>100],
                ['title'=>'ナミ巻き','cat'=>'基礎技術','level'=>'初級','pct'=>65],
                ['title'=>'ローシニヨン（カールベース）','cat'=>'ヘアスタイル基礎','level'=>'上級','pct'=>30],
                ['title'=>'フィッシュボーン','cat'=>'基礎技術','level'=>'中級','pct'=>0],
            ] as $i => $v)
            <div class="card" style="position:relative;">
                <a href="{{ route('front.videos.show', $i+1) }}">
                    <div class="card-img">
                        &#127916; {{ $v['title'] }}
                        <span class="duration">{{ [8,10,9,15,12][$i] }}:{{ [30,15,0,0,45][$i] }}</span>
                        @if ($v['pct'] > 0)<div class="progress-overlay" style="width:{{ $v['pct'] }}%;"></div>@endif
                    </div>
                </a>
                <div class="card-body">
                    <div style="display:flex;justify-content:space-between;align-items:start;">
                        <div>
                            <div style="font-size:14px;font-weight:600;margin-bottom:4px;">
                                <a href="{{ route('front.videos.show', $i+1) }}">{{ $v['title'] }}</a>
                            </div>
                            <div style="font-size:12px;color:#888;">{{ $v['cat'] }} ・ {{ $v['level'] }}</div>
                        </div>
                        <div style="display:flex;gap:4px;flex-shrink:0;">
                            <button class="btn btn-sm btn-secondary" onclick="openPlaylistAddModal('{{ $v['title'] }}')" title="プレイリストに追加">&#128193;</button>
                            <button class="btn btn-sm btn-secondary" style="color:#D8A39D;" title="お気に入り解除">&#9829;</button>
                        </div>
                    </div>
                    <div class="progress-bar" style="margin-top:8px;"><div class="fill" style="width:{{ $v['pct'] }}%;"></div></div>
                    <div style="font-size:11px;color:#999;margin-top:4px;">
                        @if ($v['pct'] === 100) &#9989; 視聴済み @elseif ($v['pct'] > 0) {{ $v['pct'] }}% 視聴済み @else 未視聴 @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ========================================== --}}
    {{-- TAB: コース --}}
    {{-- ========================================== --}}
    <div class="tab-panel" id="fav-courses" style="display:none;">
        <div class="grid grid-3">
            @foreach ([
                ['name'=>'編み方マスター','level'=>'intermediate','label'=>'中級','cat'=>'基礎技術','videos'=>12,'pct'=>25],
                ['name'=>'ダウンスタイル完全攻略','level'=>'intermediate','label'=>'中級','cat'=>'ヘアスタイル基礎','videos'=>10,'pct'=>15],
            ] as $i => $c)
            <a href="{{ route('front.courses.show', $i+1) }}" class="card">
                <div class="card-img">&#128218; コースサムネイル</div>
                <div class="card-body">
                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                        <span class="level-badge level-{{ $c['level'] }}">{{ $c['label'] }}</span>
                        <span style="font-size:12px;color:#888;">{{ $c['cat'] }}</span>
                    </div>
                    <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $c['name'] }}</div>
                    <div style="font-size:12px;color:#888;margin-bottom:8px;">{{ $c['videos'] }}本の動画</div>
                    <div class="progress-bar"><div class="fill" style="width:{{ $c['pct'] }}%;"></div></div>
                    <div style="font-size:11px;color:#999;margin-top:4px;">{{ $c['pct'] }}% 完了</div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="empty-state" style="padding:20px;">
            <p style="font-size:13px;color:#9B8E82;">コースの詳細ページやコース一覧から &#9825; でお気に入りに追加できます</p>
        </div>
    </div>

    {{-- ========================================== --}}
    {{-- TAB: プレイリスト --}}
    {{-- ========================================== --}}
    <div class="tab-panel" id="fav-playlists" style="display:none;">

        {{-- 新規作成ボタン --}}
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
            <div style="font-size:13px;color:#888;">自分だけのプレイリストを作って動画を整理できます</div>
            <button class="btn btn-primary btn-sm" onclick="openPlaylistCreateModal()">&#10010; 新規プレイリスト作成</button>
        </div>

        {{-- プレイリスト一覧 --}}
        <div class="grid grid-3">
            @php
            $playlists = [
                ['name'=>'よく使うヘアセット','count'=>5,'updated'=>'2026/03/24','thumbs'=>['フォワード巻き','リバース巻き','ナミ巻き','外し巻き','Cカール']],
                ['name'=>'来月の練習用','count'=>3,'updated'=>'2026/03/22','thumbs'=>['ロープ編み','片編み込み','表編み込み']],
                ['name'=>'ブライダル系まとめ','count'=>8,'updated'=>'2026/03/20','thumbs'=>['ローシニヨン','アップスタイル','編みおろし','ポニーアレンジ']],
            ];
            @endphp

            @foreach ($playlists as $idx => $pl)
            <a href="{{ route('front.playlist.show', $idx+1) }}" class="card" style="overflow:hidden;">
                {{-- 4分割サムネイル --}}
                <div style="display:grid;grid-template-columns:1fr 1fr;aspect-ratio:16/9;">
                    @for ($t = 0; $t < 4; $t++)
                    <div style="background:{{ ['#E8DDD0','#DDD0C4','#D4C8BC','#E0D5C9'][$t] }};display:flex;align-items:center;justify-content:center;font-size:11px;color:#9B8E82;border:1px solid #F5F0E6;">
                        @if (isset($pl['thumbs'][$t]))
                            &#127916; {{ $pl['thumbs'][$t] }}
                        @endif
                    </div>
                    @endfor
                </div>
                <div class="card-body">
                    <div style="display:flex;justify-content:space-between;align-items:start;">
                        <div>
                            <div style="font-size:15px;font-weight:700;margin-bottom:4px;">&#128193; {{ $pl['name'] }}</div>
                            <div style="font-size:12px;color:#888;">{{ $pl['count'] }}本の動画 ・ 更新日: {{ $pl['updated'] }}</div>
                        </div>
                        <button class="btn btn-sm btn-secondary" onclick="event.preventDefault();event.stopPropagation();" title="メニュー" style="padding:4px 8px;">&#8230;</button>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

{{-- ========================================== --}}
{{-- モーダル: プレイリスト新規作成 --}}
{{-- ========================================== --}}
<div class="modal-overlay" id="playlistCreateModal" style="display:none;" onclick="if(event.target===this)this.style.display='none'">
    <div class="modal-content" style="max-width:420px;">
        <div class="modal-header" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
            <h3 style="margin:0;font-size:18px;font-weight:700;">&#128193; 新規プレイリスト作成</h3>
            <button onclick="document.getElementById('playlistCreateModal').style.display='none'" style="background:none;border:none;font-size:20px;cursor:pointer;color:#888;">&times;</button>
        </div>
        <div style="margin-bottom:16px;">
            <label style="font-size:13px;font-weight:600;display:block;margin-bottom:6px;">プレイリスト名</label>
            <input type="text" class="form-input" placeholder="例: よく使うヘアセット" style="width:100%;">
        </div>
        <div style="margin-bottom:20px;">
            <label style="font-size:13px;font-weight:600;display:block;margin-bottom:6px;">メモ（任意）</label>
            <textarea class="form-input" rows="2" placeholder="例: サロンでよく使うスタイルをまとめたリスト" style="width:100%;resize:vertical;"></textarea>
        </div>
        <div style="display:flex;gap:8px;justify-content:flex-end;">
            <button class="btn btn-secondary" onclick="document.getElementById('playlistCreateModal').style.display='none'">キャンセル</button>
            <button class="btn btn-primary" onclick="document.getElementById('playlistCreateModal').style.display='none';alert('プレイリストを作成しました（デモ）')">作成する</button>
        </div>
    </div>
</div>

{{-- ========================================== --}}
{{-- モーダル: プレイリストに追加 --}}
{{-- ========================================== --}}
<div class="modal-overlay" id="playlistAddModal" style="display:none;" onclick="if(event.target===this)this.style.display='none'">
    <div class="modal-content" style="max-width:420px;">
        <div class="modal-header" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
            <h3 style="margin:0;font-size:18px;font-weight:700;">&#128193; プレイリストに追加</h3>
            <button onclick="document.getElementById('playlistAddModal').style.display='none'" style="background:none;border:none;font-size:20px;cursor:pointer;color:#888;">&times;</button>
        </div>
        <div style="margin-bottom:12px;padding:10px 12px;background:#F5F0E6;border-radius:8px;">
            <div style="font-size:12px;color:#888;">追加する動画:</div>
            <div style="font-size:14px;font-weight:600;" id="playlistAddVideoTitle">フォワード巻き</div>
        </div>
        <div style="font-size:13px;font-weight:600;margin-bottom:8px;">追加先を選択:</div>
        <div style="display:flex;flex-direction:column;gap:8px;margin-bottom:16px;">
            @foreach (['よく使うヘアセット (5本)','来月の練習用 (3本)','ブライダル系まとめ (8本)'] as $pl)
            <label style="display:flex;align-items:center;gap:10px;padding:10px 12px;background:#FFFDF9;border:2px solid #E8DDD0;border-radius:8px;cursor:pointer;transition:border-color .2s;" onmouseover="this.style.borderColor='#D8A39D'" onmouseout="this.style.borderColor='#E8DDD0'">
                <input type="checkbox" style="width:18px;height:18px;accent-color:#D8A39D;">
                <span style="font-size:14px;">&#128193; {{ $pl }}</span>
            </label>
            @endforeach
        </div>
        <div style="border-top:1px solid #E8DDD0;padding-top:12px;margin-bottom:16px;">
            <button class="btn btn-secondary btn-sm" onclick="document.getElementById('playlistAddModal').style.display='none';openPlaylistCreateModal();" style="width:100%;">&#10010; 新しいプレイリストを作成して追加</button>
        </div>
        <div style="display:flex;gap:8px;justify-content:flex-end;">
            <button class="btn btn-secondary" onclick="document.getElementById('playlistAddModal').style.display='none'">キャンセル</button>
            <button class="btn btn-primary" onclick="document.getElementById('playlistAddModal').style.display='none';alert('プレイリストに追加しました（デモ）')">追加する</button>
        </div>
    </div>
</div>

<script>
// タブ切り替え
document.querySelectorAll('.tabs .tab').forEach(tab => {
    tab.addEventListener('click', () => {
        tab.closest('.tabs').querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        document.querySelectorAll('.tab-panel').forEach(p => p.style.display = 'none');
        document.getElementById(tab.dataset.tab).style.display = 'block';
    });
});

// プレイリスト作成モーダル
function openPlaylistCreateModal() {
    document.getElementById('playlistCreateModal').style.display = 'flex';
}

// プレイリストに追加モーダル
function openPlaylistAddModal(videoTitle) {
    document.getElementById('playlistAddVideoTitle').textContent = videoTitle;
    document.getElementById('playlistAddModal').style.display = 'flex';
}
</script>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.videos.show', 1) }}">動画視聴 (F-10)</a> |
<a href="{{ route('front.courses.show', 1) }}">コース詳細 (F-09)</a> |
<a href="{{ route('front.progress') }}">学習進捗 (F-11)</a> |
<a href="{{ route('front.playlist.show', 1) }}">プレイリスト詳細 (F-28)</a>
@endsection
