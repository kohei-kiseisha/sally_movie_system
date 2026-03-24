@extends('layouts.shop')
@section('title', 'イベント参加状況')
@section('screen-info')
<strong>S-08: イベント参加状況</strong> ― イベント一覧と参加人数、メンバー×イベントのマトリクス表示。タブで切替可能。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128197; イベント参加状況</h1>
</div>

{{-- タブ --}}
<div class="tabs" id="eventTabs">
    <div class="tab active" data-tab="tab-list">イベント一覧</div>
    <div class="tab" data-tab="tab-matrix">参加マトリクス</div>
</div>

{{-- =============================== --}}
{{-- TAB1: イベント一覧 --}}
{{-- =============================== --}}
<div class="tab-panel active" id="tab-list">
    <div class="section-title">開催予定のイベント</div>
    <table class="data-table" style="margin-bottom:24px;">
        <thead>
            <tr>
                <th>開催日</th>
                <th>イベント名</th>
                <th>参加者数</th>
                <th>定員</th>
                <th>参加率</th>
                <th>ステータス</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-weight:600;">2026-04-10</td>
                <td>サロンワーク効率化講座</td>
                <td style="text-align:center;">8</td>
                <td style="text-align:center;">12</td>
                <td>
                    <div style="display:flex;align-items:center;gap:8px;">
                        <div class="progress-bar" style="width:80px;"><div class="fill" style="width:67%;"></div></div>
                        <span style="font-size:13px;">67%</span>
                    </div>
                </td>
                <td><span class="badge badge-beginner">受付中</span></td>
            </tr>
            <tr>
                <td style="font-weight:600;">2026-04-20</td>
                <td>最新カラーテクニック実演</td>
                <td style="text-align:center;">5</td>
                <td style="text-align:center;">12</td>
                <td>
                    <div style="display:flex;align-items:center;gap:8px;">
                        <div class="progress-bar" style="width:80px;"><div class="fill" style="width:42%;"></div></div>
                        <span style="font-size:13px;">42%</span>
                    </div>
                </td>
                <td><span class="badge badge-beginner">受付中</span></td>
            </tr>
            <tr>
                <td style="font-weight:600;">2026-05-08</td>
                <td>ヘアカラー理論＆実践セミナー</td>
                <td style="text-align:center;">2</td>
                <td style="text-align:center;">15</td>
                <td>
                    <div style="display:flex;align-items:center;gap:8px;">
                        <div class="progress-bar" style="width:80px;"><div class="fill" style="width:13%;"></div></div>
                        <span style="font-size:13px;">13%</span>
                    </div>
                </td>
                <td><span class="badge badge-beginner">受付中</span></td>
            </tr>
        </tbody>
    </table>

    <div class="section-title">過去のイベント</div>
    <table class="data-table">
        <thead>
            <tr>
                <th>開催日</th>
                <th>イベント名</th>
                <th>参加者数</th>
                <th>定員</th>
                <th>参加率</th>
                <th>ステータス</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2026-03-15</td>
                <td>パーマ実践ワークショップ</td>
                <td style="text-align:center;">10</td>
                <td style="text-align:center;">12</td>
                <td>
                    <div style="display:flex;align-items:center;gap:8px;">
                        <div class="progress-bar" style="width:80px;"><div class="fill" style="width:83%;"></div></div>
                        <span style="font-size:13px;">83%</span>
                    </div>
                </td>
                <td><span class="badge badge-completed">終了</span></td>
            </tr>
            <tr>
                <td>2026-02-28</td>
                <td>カラー最新トレンドセミナー</td>
                <td style="text-align:center;">11</td>
                <td style="text-align:center;">12</td>
                <td>
                    <div style="display:flex;align-items:center;gap:8px;">
                        <div class="progress-bar" style="width:80px;"><div class="fill" style="width:92%;"></div></div>
                        <span style="font-size:13px;">92%</span>
                    </div>
                </td>
                <td><span class="badge badge-completed">終了</span></td>
            </tr>
            <tr>
                <td>2026-02-10</td>
                <td>ヘッドスパ技術講習会</td>
                <td style="text-align:center;">9</td>
                <td style="text-align:center;">12</td>
                <td>
                    <div style="display:flex;align-items:center;gap:8px;">
                        <div class="progress-bar" style="width:80px;"><div class="fill" style="width:75%;"></div></div>
                        <span style="font-size:13px;">75%</span>
                    </div>
                </td>
                <td><span class="badge badge-completed">終了</span></td>
            </tr>
        </tbody>
    </table>
</div>

{{-- =============================== --}}
{{-- TAB2: 参加マトリクス --}}
{{-- =============================== --}}
<div class="tab-panel" id="tab-matrix" style="display:none;">
    <div class="section-title">参加マトリクス（メンバー × イベント）</div>

    <div style="display:flex;gap:12px;margin-bottom:16px;align-items:center;">
        <select class="form-input" style="width:auto;padding:6px 12px;font-size:13px;">
            <option>全期間</option>
            <option selected>直近6ヶ月</option>
            <option>直近3ヶ月</option>
        </select>
        <div style="font-size:13px;color:#888;">6メンバー × 5イベント</div>
    </div>

    <div class="card" style="overflow-x:auto;">
        <div class="card-body" style="padding:0;">
            <table class="data-table" style="min-width:900px;">
                <thead>
                    <tr>
                        <th style="position:sticky;left:0;background:#f5f5f5;z-index:2;min-width:140px;">メンバー</th>
                        <th style="text-align:center;font-size:11px;line-height:1.4;min-width:90px;">ヘッドスパ<br>講習会<br><span style="color:#aaa;font-weight:400;">2/10</span></th>
                        <th style="text-align:center;font-size:11px;line-height:1.4;min-width:90px;">カラー<br>トレンド<br><span style="color:#aaa;font-weight:400;">2/28</span></th>
                        <th style="text-align:center;font-size:11px;line-height:1.4;min-width:90px;">パーマ実践<br>WS<br><span style="color:#aaa;font-weight:400;">3/15</span></th>
                        <th style="text-align:center;font-size:11px;line-height:1.4;min-width:90px;background:#f0f7ff;">サロンワーク<br>効率化<br><span style="color:#2196f3;font-weight:400;">4/10</span></th>
                        <th style="text-align:center;font-size:11px;line-height:1.4;min-width:90px;background:#f0f7ff;">カラー<br>テクニック<br><span style="color:#2196f3;font-weight:400;">4/20</span></th>
                        <th style="text-align:center;font-size:12px;min-width:60px;">参加率</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $members = [
                        ['name' => '田中 美咲', 'data' => ['joined','joined','joined','scheduled','none'], 'rate' => '80%'],
                        ['name' => '佐藤 健太', 'data' => ['none','joined','joined','scheduled','scheduled'], 'rate' => '80%'],
                        ['name' => '鈴木 花',   'data' => ['joined','joined','joined','scheduled','none'], 'rate' => '80%'],
                        ['name' => '山田 太郎', 'data' => ['joined','none','joined','none','scheduled'], 'rate' => '60%'],
                        ['name' => '高橋 雅人', 'data' => ['joined','joined','joined','scheduled','scheduled'], 'rate' => '100%'],
                        ['name' => '伊藤 真理', 'data' => ['none','joined','none','none','none'], 'rate' => '20%'],
                    ];
                    @endphp
                    @foreach ($members as $m)
                    <tr>
                        <td style="position:sticky;left:0;background:#fff;z-index:1;">
                            <div style="display:flex;align-items:center;gap:8px;">
                                <div class="avatar" style="width:28px;height:28px;font-size:11px;">{{ mb_substr($m['name'], 0, 1) }}</div>
                                <span style="font-weight:600;font-size:13px;">{{ $m['name'] }}</span>
                            </div>
                        </td>
                        @foreach ($m['data'] as $status)
                        <td style="text-align:center;{{ in_array($loop->index, [3,4]) ? 'background:#f8fbff;' : '' }}">
                            @if ($status === 'joined')
                                <span title="参加済み" style="color:#4caf50;font-size:20px;">&#9679;</span>
                            @elseif ($status === 'scheduled')
                                <span title="参加予定" style="color:#2196f3;font-size:20px;">&#9679;</span>
                            @else
                                <span title="不参加" style="color:#e0e0e0;font-size:20px;">&#9679;</span>
                            @endif
                        </td>
                        @endforeach
                        <td style="text-align:center;font-weight:600;font-size:13px;">{{ $m['rate'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr style="background:#f9f9f9;">
                        <td style="position:sticky;left:0;background:#f9f9f9;z-index:1;font-weight:600;font-size:13px;">イベント参加率</td>
                        <td style="text-align:center;font-weight:600;font-size:13px;">67%</td>
                        <td style="text-align:center;font-weight:600;font-size:13px;">83%</td>
                        <td style="text-align:center;font-weight:600;font-size:13px;">83%</td>
                        <td style="text-align:center;font-weight:600;font-size:13px;background:#f0f7ff;">50%</td>
                        <td style="text-align:center;font-weight:600;font-size:13px;background:#f0f7ff;">33%</td>
                        <td style="text-align:center;font-weight:600;font-size:13px;">-</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div style="margin-top:12px;font-size:13px;color:#888;display:flex;gap:20px;">
        <span><span style="color:#4caf50;">&#9679;</span> 参加済み</span>
        <span><span style="color:#2196f3;">&#9679;</span> 参加予定（申込済）</span>
        <span><span style="color:#e0e0e0;">&#9679;</span> 不参加 / 未申込</span>
        <span style="margin-left:8px;padding-left:8px;border-left:1px solid #ddd;">青背景 = 開催予定</span>
    </div>
</div>

<div class="page-nav" style="margin-top:32px;">
    <strong>遷移先:</strong>
    <a href="{{ route('shop.dashboard') }}">ダッシュボード (S-02)</a> |
    <a href="{{ route('shop.members.index') }}">メンバー一覧 (S-03)</a>
</div>

<script>
document.querySelectorAll('.tabs .tab').forEach(tab => {
    tab.addEventListener('click', () => {
        const parent = tab.closest('.tabs');
        parent.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        const targetId = tab.dataset.tab;
        document.querySelectorAll('.tab-panel').forEach(p => p.style.display = 'none');
        document.getElementById(targetId).style.display = 'block';
    });
});
</script>
@endsection
