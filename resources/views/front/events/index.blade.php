@extends('layouts.front')
@section('title', 'イベント一覧')
@section('screen-info')
<strong>F-14: イベント一覧</strong> ― 対面イベント・ワークショップの一覧。スマホでは1カラム縦並びに自動切替。
@endsection

@section('content')
<div class="section">
    <div class="section-title">イベント一覧</div>

    <div class="grid grid-2">
        @php
            $events = [
                ['month' => '4月', 'day' => '12', 'title' => 'ブライダルヘアセット実践ワークショップ', 'time' => '2026/04/12 13:00-17:00', 'place' => 'SALLY141 大阪本店', 'cap' => 20, 'remain' => 5],
                ['month' => '4月', 'day' => '19', 'title' => 'ヘアアレンジ特別レッスン', 'time' => '2026/04/19 10:00-15:00', 'place' => 'SALLY141 京都店', 'cap' => 15, 'remain' => 8],
                ['month' => '5月', 'day' => '3', 'title' => 'トレンドヘアアレンジセミナー 2026春夏', 'time' => '2026/05/03 14:00-16:00', 'place' => 'オンライン (Zoom)', 'cap' => 50, 'remain' => 32],
                ['month' => '5月', 'day' => '10', 'title' => 'ヘアアレンジ技術交流会', 'time' => '2026/05/10 11:00-13:00', 'place' => 'SALLY141 東京店', 'cap' => 12, 'remain' => 3],
                ['month' => '5月', 'day' => '24', 'title' => 'ヘアセット基礎 ハンズオン研修', 'time' => '2026/05/24 10:00-16:00', 'place' => 'SALLY141 大阪本店', 'cap' => 20, 'remain' => 15],
                ['month' => '6月', 'day' => '7', 'title' => '夏のヘアアレンジ特集', 'time' => '2026/06/07 13:00-15:00', 'place' => 'オンライン (Zoom)', 'cap' => 100, 'remain' => 78],
            ];
        @endphp

        @foreach ($events as $idx => $event)
        <a href="{{ route('front.events.show', $idx + 1) }}" class="event-card">
            <div style="display: flex;">
                <div class="event-date-badge" style="width: 80px; flex-shrink: 0; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <div class="month">{{ $event['month'] }}</div>
                    <div class="day">{{ $event['day'] }}</div>
                </div>
                <div style="padding: 16px; flex: 1;">
                    <div style="font-size: 15px; font-weight: 700; margin-bottom: 8px;">{{ $event['title'] }}</div>
                    <div style="font-size: 13px; color: #6B5D52; margin-bottom: 4px;">&#128197; {{ $event['time'] }}</div>
                    <div style="font-size: 13px; color: #6B5D52; margin-bottom: 8px;">&#128205; {{ $event['place'] }}</div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 12px; color: #888;">定員 {{ $event['cap'] }}名</span>
                        <span class="badge {{ $event['remain'] <= 5 ? 'badge-advanced' : 'badge-beginner' }}" style="font-size: 11px;">
                            残席 {{ $event['remain'] }}名
                        </span>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.events.show', 1) }}">イベント詳細 (F-15)</a> |
<a href="{{ route('front.top') }}">トップ (F-01)</a>
@endsection
