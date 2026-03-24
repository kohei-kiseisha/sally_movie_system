@extends('layouts.front')
@section('title', '検索')
@section('screen-info')
<strong>F-18: 検索結果</strong> ― 動画・コース・イベントの横断検索。タブで種別を切り替え。
@endsection

@section('content')
<div class="section">
    {{-- 検索バー --}}
    <div class="search-bar" style="max-width:100%;margin-bottom:24px;">
        <span>&#128269;</span>
        <input type="text" placeholder="キーワードで検索..." value="編み込み">
        <button class="btn btn-primary btn-sm">検索</button>
    </div>

    <div style="font-size:14px;color:#888;margin-bottom:16px;">「編み込み」の検索結果: 12件</div>

    {{-- タブ --}}
    <div class="tabs">
        <div class="tab active" data-tab="search-videos">動画 (7)</div>
        <div class="tab" data-tab="search-courses">コース (3)</div>
        <div class="tab" data-tab="search-events">イベント (2)</div>
    </div>

    {{-- TAB: 動画 --}}
    <div class="tab-panel active" id="search-videos">
        <div style="display:flex;flex-direction:column;gap:12px;">
            @foreach ([
                ['title'=>'片編み込み（すくい編み）','course'=>'編み方マスター','level'=>'intermediate','label'=>'中級','dur'=>'12:00'],
                ['title'=>'表編み込み・裏編み込み','course'=>'編み方マスター','level'=>'intermediate','label'=>'中級','dur'=>'14:00'],
                ['title'=>'ロープ編み','course'=>'編み方マスター','level'=>'intermediate','label'=>'中級','dur'=>'8:30'],
                ['title'=>'フィッシュボーン','course'=>'編み方マスター','level'=>'intermediate','label'=>'中級','dur'=>'12:45'],
                ['title'=>'編みおろし（シングル）ストレートベース','course'=>'ハーフアップ＆シニヨン','level'=>'advanced','label'=>'上級','dur'=>'16:00'],
            ] as $i => $v)
            <a href="{{ route('front.videos.show', $i+1) }}" style="display:flex;gap:16px;background:#FFFDF9;border-radius:12px;padding:12px;box-shadow:0 2px 8px rgba(61,50,41,.06);align-items:center;">
                <div style="width:160px;flex-shrink:0;aspect-ratio:16/9;background:#E8DDD0;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:12px;color:#9B8E82;position:relative;">
                    &#127916;
                    <span style="position:absolute;bottom:4px;right:4px;background:rgba(61,50,41,.75);color:#fff;font-size:10px;padding:1px 6px;border-radius:3px;">{{ $v['dur'] }}</span>
                </div>
                <div style="flex:1;">
                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:4px;">
                        <span class="badge badge-beginner">動画</span>
                        <span class="level-badge level-{{ $v['level'] }}" style="font-size:11px;">{{ $v['label'] }}</span>
                    </div>
                    <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $v['title'] }}</div>
                    <div style="font-size:12px;color:#888;">基礎技術 / {{ $v['course'] }}</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    {{-- TAB: コース --}}
    <div class="tab-panel" id="search-courses" style="display:none;">
        <div style="display:flex;flex-direction:column;gap:12px;">
            @foreach ([
                ['title'=>'編み方マスター','level'=>'intermediate','label'=>'中級','videos'=>12,'pct'=>25],
                ['title'=>'アップスタイル＆シニヨン','level'=>'advanced','label'=>'上級','videos'=>10,'pct'=>0],
                ['title'=>'ポニーアレンジ＆ハーフアップ','level'=>'intermediate','label'=>'中級','videos'=>8,'pct'=>0],
            ] as $i => $c)
            <a href="{{ route('front.courses.show', $i+1) }}" style="display:flex;gap:16px;background:#FFFDF9;border-radius:12px;padding:12px;box-shadow:0 2px 8px rgba(61,50,41,.06);align-items:center;">
                <div style="width:160px;flex-shrink:0;aspect-ratio:16/9;background:#E8DDD0;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:12px;color:#9B8E82;">&#128218; コース</div>
                <div style="flex:1;">
                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:4px;">
                        <span class="badge badge-status">コース</span>
                        <span class="level-badge level-{{ $c['level'] }}" style="font-size:11px;">{{ $c['label'] }}</span>
                    </div>
                    <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $c['title'] }}</div>
                    <div style="font-size:12px;color:#888;">{{ $c['videos'] }}本の動画</div>
                    <div class="progress-bar" style="margin-top:8px;width:120px;"><div class="fill" style="width:{{ $c['pct'] }}%;"></div></div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    {{-- TAB: イベント --}}
    <div class="tab-panel" id="search-events" style="display:none;">
        <div style="display:flex;flex-direction:column;gap:12px;">
            @foreach ([
                ['title'=>'編み込みテクニック特別講座','month'=>'5月','day'=>'10','place'=>'大阪・心斎橋','cap'=>15,'left'=>5],
                ['title'=>'プロに学ぶヘアアレンジ実践WS','month'=>'4月','day'=>'15','place'=>'東京・表参道','cap'=>20,'left'=>8],
            ] as $i => $ev)
            <a href="{{ route('front.events.show', $i+1) }}" style="display:flex;gap:16px;background:#FFFDF9;border-radius:12px;padding:12px;box-shadow:0 2px 8px rgba(61,50,41,.06);align-items:center;">
                <div style="width:80px;flex-shrink:0;background:#D8A39D;color:#fff;border-radius:8px;padding:12px 8px;text-align:center;">
                    <div style="font-size:11px;">{{ $ev['month'] }}</div>
                    <div style="font-size:24px;font-weight:800;line-height:1;">{{ $ev['day'] }}</div>
                </div>
                <div style="flex:1;">
                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:4px;">
                        <span class="badge badge-intermediate">イベント</span>
                        <span class="badge badge-beginner">受付中</span>
                    </div>
                    <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $ev['title'] }}</div>
                    <div style="font-size:12px;color:#888;">{{ $ev['place'] }} / 定員{{ $ev['cap'] }}名 / 残り{{ $ev['left'] }}席</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>

<script>
document.querySelectorAll('.tabs .tab').forEach(tab => {
    tab.addEventListener('click', () => {
        tab.closest('.tabs').querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        document.querySelectorAll('.tab-panel').forEach(p => p.style.display = 'none');
        document.getElementById(tab.dataset.tab).style.display = 'block';
    });
});
</script>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.videos.show', 1) }}">動画視聴 (F-10)</a> |
<a href="{{ route('front.courses.show', 1) }}">コース詳細 (F-09)</a> |
<a href="{{ route('front.events.show', 1) }}">イベント詳細 (F-15)</a>
@endsection
