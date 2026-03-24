@extends('layouts.front')
@section('title', '学習進捗')
@section('screen-info')
<strong>F-11: 学習進捗画面</strong> ― 全体進捗・カテゴリー別・コース別進捗・バッジ・学習時間
@endsection

@section('content')
<div class="section">
    <div class="section-title">学習進捗</div>

    {{-- 全体進捗 + サマリー --}}
    <div class="stats-row" style="margin-bottom:32px;">
        <div class="stat-card" style="grid-column:span 1;">
            <div style="width:120px;height:120px;border-radius:50%;border:8px solid #E8DDD0;position:relative;margin:0 auto 12px;display:flex;align-items:center;justify-content:center;">
                <div style="position:absolute;top:0;left:0;width:100%;height:100%;border-radius:50%;border:8px solid #D8A39D;border-right-color:transparent;border-bottom-color:transparent;transform:rotate(-45deg);"></div>
                <span style="font-size:28px;font-weight:800;color:#D8A39D;">42%</span>
            </div>
            <div class="stat-label">全体進捗率</div>
        </div>
        <div class="stat-card"><div class="stat-number">28</div><div class="stat-label">修了動画数</div></div>
        <div class="stat-card"><div class="stat-number">12.5h</div><div class="stat-label">総学習時間</div></div>
        <div class="stat-card"><div class="stat-number">7日</div><div class="stat-label">連続学習日数</div></div>
    </div>

    {{-- カテゴリー別進捗 --}}
    <div class="section-title">カテゴリー別進捗</div>
    <div style="background:#FFFDF9;border-radius:12px;padding:20px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:32px;">
        @php
        $catProgress = [
            ['name'=>'ヘアメイクとは','icon'=>'&#128218;','pct'=>100],
            ['name'=>'道具の名称','icon'=>'&#128295;','pct'=>75],
            ['name'=>'基礎技術','icon'=>'&#9986;','pct'=>45],
            ['name'=>'ヘアスタイル基礎アレンジ','icon'=>'&#128135;','pct'=>15],
        ];
        @endphp
        @foreach ($catProgress as $cat)
        <div style="display:flex;align-items:center;gap:12px;padding:12px 0;{{ !$loop->last ? 'border-bottom:1px solid #E8DDD0;' : '' }}">
            <span style="font-size:24px;">{!! $cat['icon'] !!}</span>
            <div style="flex:1;">
                <div style="display:flex;justify-content:space-between;font-size:14px;font-weight:600;margin-bottom:4px;">
                    <span>{{ $cat['name'] }}</span>
                    <span style="color:#D8A39D;">{{ $cat['pct'] }}%</span>
                </div>
                <div class="progress-bar"><div class="fill" style="width:{{ $cat['pct'] }}%;"></div></div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- コース別進捗 --}}
    <div class="section-title">コース別進捗</div>
    <div style="background:#FFFDF9;border-radius:12px;overflow:hidden;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:32px;">
        @php
        $courseProgress = [
            ['name'=>'ヘアメイクとは','level'=>'beginner','label'=>'初級','pct'=>100,'done'=>'2/2'],
            ['name'=>'道具の名称と使い方','level'=>'beginner','label'=>'初級','pct'=>100,'done'=>'7/7'],
            ['name'=>'コテの巻き方','level'=>'beginner','label'=>'初級','pct'=>80,'done'=>'5/6'],
            ['name'=>'編み方マスター','level'=>'intermediate','label'=>'中級','pct'=>25,'done'=>'3/12'],
            ['name'=>'ダウンスタイル完全攻略','level'=>'intermediate','label'=>'中級','pct'=>15,'done'=>'2/10'],
            ['name'=>'アップスタイル＆シニヨン','level'=>'advanced','label'=>'上級','pct'=>0,'done'=>'0/10'],
        ];
        @endphp
        @foreach ($courseProgress as $c)
        <a href="{{ route('front.courses.show', $loop->iteration) }}" class="link-list-item" style="display:block;padding:16px;">
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:6px;">
                <span class="level-badge level-{{ $c['level'] }}">{{ $c['label'] }}</span>
                <span style="font-size:14px;font-weight:600;">{{ $c['name'] }}</span>
                @if ($c['pct'] === 100) <span class="badge badge-completed">修了</span> @endif
            </div>
            <div style="display:flex;align-items:center;gap:12px;">
                <div class="progress-bar" style="flex:1;"><div class="fill" style="width:{{ $c['pct'] }}%;"></div></div>
                <span style="font-size:12px;color:#888;white-space:nowrap;">{{ $c['done'] }} 動画</span>
            </div>
        </a>
        @endforeach
    </div>

    {{-- 修了バッジ一覧 --}}
    <div class="section-title">修了バッジ</div>
    <div class="grid grid-4" style="margin-bottom:32px;">
        <div class="stat-card">
            <div style="font-size:48px;margin-bottom:8px;">&#127942;</div>
            <div style="font-size:13px;font-weight:600;">ヘアメイク入門</div>
            <div style="font-size:11px;color:#888;">2026/03/05 取得</div>
        </div>
        <div class="stat-card">
            <div style="font-size:48px;margin-bottom:8px;">&#127942;</div>
            <div style="font-size:13px;font-weight:600;">道具マスター</div>
            <div style="font-size:11px;color:#888;">2026/03/12 取得</div>
        </div>
        <div class="stat-card">
            <div style="font-size:48px;margin-bottom:8px;">&#127775;</div>
            <div style="font-size:13px;font-weight:600;">7日連続学習</div>
            <div style="font-size:11px;color:#888;">2026/03/20 取得</div>
        </div>
        <div class="stat-card" style="opacity:0.4;">
            <div style="font-size:48px;margin-bottom:8px;">&#128274;</div>
            <div style="font-size:13px;font-weight:600;">編み方マスター</div>
            <div style="font-size:11px;color:#888;">未取得</div>
        </div>
    </div>

    {{-- 学習時間サマリー --}}
    <div class="section-title">今週の学習時間</div>
    <div style="background:#FFFDF9;border-radius:12px;padding:20px;box-shadow:0 2px 8px rgba(61,50,41,.06);">
        <div style="display:flex;align-items:flex-end;gap:8px;height:120px;justify-content:space-around;padding:0 20px;">
            @php $days = ['月','火','水','木','金','土','日']; $hours = [1.5,0.5,2,0,1,2.5,0]; @endphp
            @foreach ($days as $idx => $day)
            <div style="display:flex;flex-direction:column;align-items:center;gap:4px;flex:1;">
                <div style="width:100%;max-width:40px;background:{{ $hours[$idx] > 0 ? '#D8A39D' : '#E8DDD0' }};height:{{ max($hours[$idx]*40, 4) }}px;border-radius:4px;"></div>
                <span style="font-size:11px;color:#888;">{{ $day }}</span>
                <span style="font-size:10px;color:#999;">{{ $hours[$idx] }}h</span>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.courses.show', 1) }}">コース詳細 (F-09)</a> |
<a href="{{ route('front.videos.index') }}">動画一覧 (F-05)</a> |
<a href="{{ route('front.favorites') }}">お気に入り (F-12)</a> |
<a href="{{ route('front.history') }}">視聴履歴 (F-13)</a>
@endsection
