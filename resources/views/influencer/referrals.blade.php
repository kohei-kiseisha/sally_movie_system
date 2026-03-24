@extends('layouts.influencer')
@section('title', '紹介URL管理')
@section('screen-info')
<strong>I-03: 紹介URL管理</strong> ― 複数の紹介URLを発行・SNS別に成果を比較。永久20%の紹介アフィリエイト管理。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128279; 紹介URL管理</h1>
    <button class="btn btn-primary">＋ 新しいURLを発行</button>
</div>

{{-- 仕組み --}}
<div style="background:#F8EEEC;border-radius:12px;padding:16px;margin-bottom:24px;font-size:13px;color:#6B5D52;">
    &#128161; 紹介URLから登録したユーザーが有料会員である限り、月額料金の <strong style="color:#D8A39D;">20%（¥154/月）</strong> が永久に報酬として支払われます。
</div>

{{-- サマリー --}}
<div class="stats-row" style="margin-bottom:24px;">
    <div class="stat-card"><div class="stat-number">4</div><div class="stat-label">発行中のURL</div></div>
    <div class="stat-card"><div class="stat-number">1,245</div><div class="stat-label">総クリック数</div></div>
    <div class="stat-card"><div class="stat-number">340</div><div class="stat-label">経由登録者</div></div>
    <div class="stat-card"><div class="stat-number">298</div><div class="stat-label">現在の有料会員</div></div>
</div>

{{-- URL一覧 --}}
<div class="section-title">紹介URL一覧</div>
<table class="data-table" style="margin-bottom:32px;">
    <thead>
        <tr>
            <th>ラベル</th>
            <th>URL</th>
            <th>クリック</th>
            <th>登録</th>
            <th>有料会員</th>
            <th>転換率</th>
            <th>月間報酬</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @php
        $urls = [
            ['label'=>'メイン（プロフィール）','slug'=>'akiko-style','clicks'=>580,'regs'=>165,'paid'=>148,'color'=>'#D8A39D'],
            ['label'=>'Instagram ストーリー','slug'=>'akiko-ig-story','clicks'=>320,'regs'=>95,'paid'=>82,'color'=>'#C13584'],
            ['label'=>'YouTube 概要欄','slug'=>'akiko-yt','clicks'=>245,'regs'=>58,'paid'=>50,'color'=>'#FF0000'],
            ['label'=>'TikTok プロフィール','slug'=>'akiko-tiktok','clicks'=>100,'regs'=>22,'paid'=>18,'color'=>'#000000'],
        ];
        @endphp
        @foreach ($urls as $u)
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:8px;">
                    <div style="width:8px;height:8px;border-radius:50%;background:{{ $u['color'] }};flex-shrink:0;"></div>
                    <strong>{{ $u['label'] }}</strong>
                </div>
            </td>
            <td>
                <div style="display:flex;align-items:center;gap:6px;">
                    <code style="font-size:11px;background:#F5F0E6;padding:2px 6px;border-radius:4px;">sally141.com/?ref={{ $u['slug'] }}</code>
                    <button class="btn btn-sm btn-secondary" style="padding:2px 8px;font-size:10px;">コピー</button>
                </div>
            </td>
            <td style="text-align:center;">{{ number_format($u['clicks']) }}</td>
            <td style="text-align:center;">{{ $u['regs'] }}</td>
            <td style="text-align:center;font-weight:600;">{{ $u['paid'] }}</td>
            <td style="text-align:center;">
                <div style="display:flex;align-items:center;gap:6px;">
                    <div class="progress-bar" style="width:60px;"><div class="fill" style="width:{{ round($u['paid']/$u['clicks']*100) }}%;"></div></div>
                    <span style="font-size:12px;">{{ round($u['paid']/$u['clicks']*100) }}%</span>
                </div>
            </td>
            <td style="font-weight:700;color:#D8A39D;">&yen;{{ number_format($u['paid'] * 154) }}</td>
            <td>
                <button class="btn btn-sm btn-secondary" style="padding:4px 8px;font-size:11px;">&#9998; 編集</button>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr style="background:#F8EEEC;">
            <td style="font-weight:700;">合計</td><td></td>
            <td style="text-align:center;font-weight:600;">1,245</td>
            <td style="text-align:center;font-weight:600;">340</td>
            <td style="text-align:center;font-weight:700;">298</td>
            <td></td>
            <td style="font-weight:800;color:#D8A39D;">&yen;{{ number_format(298 * 154) }}</td>
            <td></td>
        </tr>
    </tfoot>
</table>

{{-- SNS別 成果比較グラフ（バーチャート風） --}}
<div class="section-title">SNS別 成果比較</div>
<div style="background:#FFFDF9;border-radius:12px;padding:20px;box-shadow:0 2px 8px rgba(61,50,41,.06);">
    @foreach ($urls as $u)
    <div style="display:flex;align-items:center;gap:12px;padding:10px 0;{{ !$loop->last ? 'border-bottom:1px solid #E8DDD0;' : '' }}">
        <div style="width:160px;font-size:13px;font-weight:600;display:flex;align-items:center;gap:8px;">
            <div style="width:10px;height:10px;border-radius:50%;background:{{ $u['color'] }};"></div>
            {{ $u['label'] }}
        </div>
        <div style="flex:1;">
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:4px;">
                <span style="font-size:11px;color:#9B8E82;width:60px;">クリック</span>
                <div style="flex:1;height:16px;background:#E8DDD0;border-radius:3px;overflow:hidden;">
                    <div style="height:100%;background:{{ $u['color'] }};opacity:0.3;width:{{ round($u['clicks']/580*100) }}%;border-radius:3px;"></div>
                </div>
                <span style="font-size:12px;width:40px;text-align:right;">{{ $u['clicks'] }}</span>
            </div>
            <div style="display:flex;align-items:center;gap:8px;">
                <span style="font-size:11px;color:#9B8E82;width:60px;">有料会員</span>
                <div style="flex:1;height:16px;background:#E8DDD0;border-radius:3px;overflow:hidden;">
                    <div style="height:100%;background:{{ $u['color'] }};width:{{ round($u['paid']/148*100) }}%;border-radius:3px;"></div>
                </div>
                <span style="font-size:12px;width:40px;text-align:right;">{{ $u['paid'] }}</span>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="page-nav" style="margin-top:24px;">
    <strong>遷移先:</strong>
    <a href="{{ route('influencer.dashboard') }}">ダッシュボード (I-01)</a> |
    <a href="{{ route('influencer.courses') }}">コース売上確認 (I-02)</a>
</div>
@endsection
