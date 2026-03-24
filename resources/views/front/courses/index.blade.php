@extends('layouts.front')
@section('title', 'コース一覧')
@section('screen-info')
<strong>F-08: コース一覧</strong> ― レベル別タブとカテゴリーフィルタで絞り込めるコース一覧。実カリキュラムに基づくデモデータ。
@endsection

@section('content')
<div class="section">
    <div class="section-title">コース一覧</div>

    {{-- レベルタブ --}}
    <div class="tabs">
        <div class="tab active" data-tab="course-all">すべて (11)</div>
        <div class="tab" data-tab="course-beginner">初級 (5)</div>
        <div class="tab" data-tab="course-intermediate">中級 (3)</div>
        <div class="tab" data-tab="course-advanced">上級 (3)</div>
    </div>

    {{-- カテゴリーフィルタ --}}
    <div class="tag-list" style="margin-bottom:24px;">
        <span class="tag active" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">すべて</span>
        <span class="tag" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">ヘアメイクとは</span>
        <span class="tag" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">道具の名称</span>
        <span class="tag" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">基礎技術</span>
        <span class="tag" onclick="this.parentNode.querySelectorAll('.tag').forEach(t=>t.classList.remove('active'));this.classList.add('active');">ヘアスタイル基礎アレンジ</span>
    </div>

    @php
    $courses = [
        // 初級
        ['name'=>'ヘアメイクとは','cat'=>'ヘアメイクとは','level'=>'beginner','label'=>'初級','videos'=>2,'progress'=>100],
        ['name'=>'コテの巻き方','cat'=>'基礎技術','level'=>'beginner','label'=>'初級','videos'=>6,'progress'=>80],
        ['name'=>'ピンの留め方・ゴムの結び方','cat'=>'基礎技術','level'=>'beginner','label'=>'初級','videos'=>5,'progress'=>60],
        ['name'=>'道具の名称と使い方','cat'=>'道具の名称','level'=>'beginner','label'=>'初級','videos'=>7,'progress'=>100],
        ['name'=>'スライス・ブロッキング・ブロウ','cat'=>'基礎技術','level'=>'beginner','label'=>'初級','videos'=>5,'progress'=>40],
        // 中級
        ['name'=>'編み方マスター','cat'=>'基礎技術','level'=>'intermediate','label'=>'中級','videos'=>12,'progress'=>25],
        ['name'=>'ダウンスタイル完全攻略','cat'=>'ヘアスタイル基礎','level'=>'intermediate','label'=>'中級','videos'=>10,'progress'=>15],
        ['name'=>'ポニーアレンジ＆ハーフアップ','cat'=>'ヘアスタイル基礎','level'=>'intermediate','label'=>'中級','videos'=>8,'progress'=>0],
        // 上級
        ['name'=>'アップスタイル＆シニヨン','cat'=>'ヘアスタイル基礎','level'=>'advanced','label'=>'上級','videos'=>10,'progress'=>0],
        ['name'=>'韓国系スタイル（カチモリ・ヨシンモリ）','cat'=>'ヘアスタイル基礎','level'=>'advanced','label'=>'上級','videos'=>9,'progress'=>0],
        ['name'=>'逆毛＆トップのベース作り','cat'=>'基礎技術','level'=>'advanced','label'=>'上級','videos'=>7,'progress'=>0],
    ];
    @endphp

    {{-- TAB: すべて --}}
    <div class="tab-panel active" id="course-all">
        <div class="grid grid-3">
            @foreach ($courses as $idx => $course)
            <a href="{{ route('front.courses.show', $idx+1) }}" class="card">
                <div class="card-img">&#128218; コースサムネイル</div>
                <div class="card-body">
                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                        <span class="level-badge level-{{ $course['level'] }}">{{ $course['label'] }}</span>
                        <span style="font-size:12px;color:#888;">{{ $course['cat'] }}</span>
                    </div>
                    <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $course['name'] }}</div>
                    <div style="font-size:12px;color:#888;margin-bottom:8px;">{{ $course['videos'] }}本の動画</div>
                    <div class="progress-bar"><div class="fill" style="width:{{ $course['progress'] }}%;"></div></div>
                    <div style="font-size:11px;color:#999;margin-top:4px;">
                        @if ($course['progress'] === 100) &#9989; 修了 @else {{ $course['progress'] }}% 完了 @endif
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    {{-- TAB: 初級 --}}
    <div class="tab-panel" id="course-beginner" style="display:none;">
        <div class="grid grid-3">
            @foreach ($courses as $idx => $course)
                @if ($course['level'] === 'beginner')
                <a href="{{ route('front.courses.show', $idx+1) }}" class="card">
                    <div class="card-img">&#128218; コースサムネイル</div>
                    <div class="card-body">
                        <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                            <span class="level-badge level-beginner">初級</span>
                            <span style="font-size:12px;color:#888;">{{ $course['cat'] }}</span>
                        </div>
                        <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $course['name'] }}</div>
                        <div style="font-size:12px;color:#888;margin-bottom:8px;">{{ $course['videos'] }}本の動画</div>
                        <div class="progress-bar"><div class="fill" style="width:{{ $course['progress'] }}%;"></div></div>
                        <div style="font-size:11px;color:#999;margin-top:4px;">
                            @if ($course['progress'] === 100) &#9989; 修了 @else {{ $course['progress'] }}% 完了 @endif
                        </div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </div>

    {{-- TAB: 中級 --}}
    <div class="tab-panel" id="course-intermediate" style="display:none;">
        <div class="grid grid-3">
            @foreach ($courses as $idx => $course)
                @if ($course['level'] === 'intermediate')
                <a href="{{ route('front.courses.show', $idx+1) }}" class="card">
                    <div class="card-img">&#128218; コースサムネイル</div>
                    <div class="card-body">
                        <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                            <span class="level-badge level-intermediate">中級</span>
                            <span style="font-size:12px;color:#888;">{{ $course['cat'] }}</span>
                        </div>
                        <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $course['name'] }}</div>
                        <div style="font-size:12px;color:#888;margin-bottom:8px;">{{ $course['videos'] }}本の動画</div>
                        <div class="progress-bar"><div class="fill" style="width:{{ $course['progress'] }}%;"></div></div>
                        <div style="font-size:11px;color:#999;margin-top:4px;">{{ $course['progress'] }}% 完了</div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
    </div>

    {{-- TAB: 上級 --}}
    <div class="tab-panel" id="course-advanced" style="display:none;">
        <div class="grid grid-3">
            @foreach ($courses as $idx => $course)
                @if ($course['level'] === 'advanced')
                <a href="{{ route('front.courses.show', $idx+1) }}" class="card">
                    <div class="card-img">&#128218; コースサムネイル</div>
                    <div class="card-body">
                        <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                            <span class="level-badge level-advanced">上級</span>
                            <span style="font-size:12px;color:#888;">{{ $course['cat'] }}</span>
                        </div>
                        <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $course['name'] }}</div>
                        <div style="font-size:12px;color:#888;margin-bottom:8px;">{{ $course['videos'] }}本の動画</div>
                        <div class="progress-bar"><div class="fill" style="width:{{ $course['progress'] }}%;"></div></div>
                        <div style="font-size:11px;color:#999;margin-top:4px;">{{ $course['progress'] }}% 完了</div>
                    </div>
                </a>
                @endif
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
<a href="{{ route('front.courses.show', 1) }}">コース詳細 (F-09)</a> |
<a href="{{ route('front.categories.index') }}">カテゴリー一覧 (F-06)</a> |
<a href="{{ route('front.videos.index') }}">動画一覧 (F-05)</a>
@endsection
