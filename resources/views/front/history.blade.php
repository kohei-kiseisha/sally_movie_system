@extends('layouts.front')
@section('title', '視聴履歴')
@section('screen-info')
<strong>F-13: 視聴履歴</strong> ― 日付順の視聴履歴・進捗率・最終視聴位置
@endsection

@section('content')
<div class="section">
    <div class="section-title">視聴履歴</div>

    {{-- 今日 --}}
    <div style="font-size:14px;font-weight:700;color:#6B5D52;margin-bottom:12px;padding-bottom:8px;border-bottom:1px solid #E8DDD0;">今日 - 2026/03/24</div>
    <div style="display:flex;flex-direction:column;gap:12px;margin-bottom:32px;">
        @php
        $todayHistory = [
            ['title'=>'裏編み（クロス編み）','course'=>'編み方マスター','pct'=>50,'pos'=>'5:22 / 10:45'],
            ['title'=>'片編み込み（すくい編み）','course'=>'編み方マスター','pct'=>100,'pos'=>'12:00 / 12:00'],
        ];
        @endphp
        @foreach ($todayHistory as $h)
        <a href="{{ route('front.videos.show', $loop->iteration) }}" style="display:flex;gap:16px;background:#FFFDF9;border-radius:12px;padding:12px;box-shadow:0 2px 8px rgba(61,50,41,.06);align-items:center;">
            <div style="width:140px;flex-shrink:0;aspect-ratio:16/9;background:#E8DDD0;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:12px;color:#9B8E82;position:relative;">
                &#127916;
                <div style="position:absolute;bottom:0;left:0;height:3px;background:#D8A39D;width:{{ $h['pct'] }}%;border-radius:0 0 8px 8px;"></div>
            </div>
            <div style="flex:1;">
                <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $h['title'] }}</div>
                <div style="font-size:12px;color:#888;margin-bottom:6px;">{{ $h['course'] }}</div>
                <div style="display:flex;align-items:center;gap:12px;">
                    <div class="progress-bar" style="flex:1;max-width:200px;"><div class="fill" style="width:{{ $h['pct'] }}%;"></div></div>
                    <span style="font-size:12px;color:#888;">{{ $h['pct'] }}%</span>
                </div>
                <div style="font-size:11px;color:#999;margin-top:4px;">最終位置: {{ $h['pos'] }}</div>
            </div>
        </a>
        @endforeach
    </div>

    {{-- 昨日 --}}
    <div style="font-size:14px;font-weight:700;color:#6B5D52;margin-bottom:12px;padding-bottom:8px;border-bottom:1px solid #E8DDD0;">昨日 - 2026/03/23</div>
    <div style="display:flex;flex-direction:column;gap:12px;margin-bottom:32px;">
        @php
        $yesterdayHistory = [
            ['title'=>'ツイスト編み','course'=>'編み方マスター','pct'=>100,'pos'=>'9:15 / 9:15'],
            ['title'=>'ナミ巻き','course'=>'コテの巻き方','pct'=>65,'pos'=>'5:50 / 9:00'],
        ];
        @endphp
        @foreach ($yesterdayHistory as $h)
        <a href="{{ route('front.videos.show', $loop->iteration+2) }}" style="display:flex;gap:16px;background:#FFFDF9;border-radius:12px;padding:12px;box-shadow:0 2px 8px rgba(61,50,41,.06);align-items:center;">
            <div style="width:140px;flex-shrink:0;aspect-ratio:16/9;background:#E8DDD0;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:12px;color:#9B8E82;position:relative;">
                &#127916;
                <div style="position:absolute;bottom:0;left:0;height:3px;background:#D8A39D;width:{{ $h['pct'] }}%;border-radius:0 0 8px 8px;"></div>
            </div>
            <div style="flex:1;">
                <div style="font-size:14px;font-weight:600;margin-bottom:4px;">{{ $h['title'] }}</div>
                <div style="font-size:12px;color:#888;margin-bottom:6px;">{{ $h['course'] }}</div>
                <div style="display:flex;align-items:center;gap:12px;">
                    <div class="progress-bar" style="flex:1;max-width:200px;"><div class="fill" style="width:{{ $h['pct'] }}%;"></div></div>
                    <span style="font-size:12px;color:#888;">{{ $h['pct'] }}%</span>
                </div>
                <div style="font-size:11px;color:#999;margin-top:4px;">最終位置: {{ $h['pos'] }}</div>
            </div>
        </a>
        @endforeach
    </div>

    {{-- 3/22 --}}
    <div style="font-size:14px;font-weight:700;color:#6B5D52;margin-bottom:12px;padding-bottom:8px;border-bottom:1px solid #E8DDD0;">2026/03/22</div>
    <div style="display:flex;flex-direction:column;gap:12px;">
        <a href="{{ route('front.videos.show', 5) }}" style="display:flex;gap:16px;background:#FFFDF9;border-radius:12px;padding:12px;box-shadow:0 2px 8px rgba(61,50,41,.06);align-items:center;">
            <div style="width:140px;flex-shrink:0;aspect-ratio:16/9;background:#E8DDD0;border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:12px;color:#9B8E82;position:relative;">
                &#127916;
                <div style="position:absolute;bottom:0;left:0;height:3px;background:#D8A39D;width:100%;border-radius:0 0 8px 8px;"></div>
            </div>
            <div style="flex:1;">
                <div style="font-size:14px;font-weight:600;margin-bottom:4px;">ロープ編み</div>
                <div style="font-size:12px;color:#888;margin-bottom:6px;">編み方マスター</div>
                <div style="display:flex;align-items:center;gap:12px;">
                    <div class="progress-bar" style="flex:1;max-width:200px;"><div class="fill" style="width:100%;"></div></div>
                    <span style="font-size:12px;color:#888;">100%</span>
                </div>
                <div style="font-size:11px;color:#999;margin-top:4px;">最終位置: 8:30 / 8:30</div>
            </div>
        </a>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.videos.show', 1) }}">動画視聴 (F-10)</a> |
<a href="{{ route('front.progress') }}">学習進捗 (F-11)</a> |
<a href="{{ route('front.favorites') }}">お気に入り (F-12)</a>
@endsection
