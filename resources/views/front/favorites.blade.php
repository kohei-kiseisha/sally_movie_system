@extends('layouts.front')
@section('title', 'お気に入り')
@section('screen-info')
<strong>F-12: お気に入り一覧</strong> ― 動画・コースのお気に入りをタブで切り替えて表示。
@endsection

@section('content')
<div class="section">
    <div class="section-title">お気に入り</div>

    {{-- タブ --}}
    <div class="tabs">
        <div class="tab active" data-tab="fav-videos">動画 (5)</div>
        <div class="tab" data-tab="fav-courses">コース (2)</div>
    </div>

    {{-- TAB: 動画 --}}
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
                        <button class="btn btn-sm btn-secondary" style="color:#D8A39D;flex-shrink:0;">&#9829; 解除</button>
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

    {{-- TAB: コース --}}
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
<a href="{{ route('front.progress') }}">学習進捗 (F-11)</a>
@endsection
