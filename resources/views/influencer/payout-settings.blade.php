@extends('layouts.influencer')
@section('title', '振込先設定')
@section('screen-info')
<strong>I-05: 振込先設定</strong> ― 報酬の振込先口座の登録・変更。振込サイクル・最低振込額の確認。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#127974; 振込先設定</h1>
</div>

<div style="max-width:700px;">
    {{-- 次回振込情報 --}}
    <div style="background:linear-gradient(135deg,#3D3229,#4A3F35);border-radius:12px;padding:24px;color:#fff;margin-bottom:32px;">
        <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px;">
            <div>
                <div style="font-size:13px;color:#C9B7A7;">次回振込予定</div>
                <div style="font-size:32px;font-weight:800;color:#D8A39D;">&yen;142,560</div>
                <div style="font-size:13px;color:#C9B7A7;">2026年4月30日（水）振込予定</div>
            </div>
            <div style="text-align:right;">
                <div style="font-size:12px;color:#9B8E82;">振込サイクル</div>
                <div style="font-size:14px;font-weight:600;">月末締め → 翌月末振込</div>
                <div style="font-size:12px;color:#9B8E82;margin-top:4px;">最低振込額: ¥5,000</div>
            </div>
        </div>
    </div>

    {{-- 口座情報 --}}
    <div class="section-title" style="font-size:16px;">振込先口座</div>
    <div style="background:#FFFDF9;border-radius:12px;padding:24px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:32px;">
        <div style="display:flex;gap:16px;flex-wrap:wrap;">
            <div class="form-group" style="flex:2;min-width:200px;">
                <label>金融機関名</label>
                <input class="form-input" value="三井住友銀行">
            </div>
            <div class="form-group" style="flex:1;min-width:140px;">
                <label>支店名</label>
                <input class="form-input" value="渋谷支店">
            </div>
            <div class="form-group" style="flex:1;min-width:120px;">
                <label>支店コード</label>
                <input class="form-input" value="654">
            </div>
        </div>
        <div style="display:flex;gap:16px;flex-wrap:wrap;">
            <div class="form-group" style="flex:1;min-width:140px;">
                <label>預金種別</label>
                <select class="form-input">
                    <option selected>普通</option>
                    <option>当座</option>
                </select>
            </div>
            <div class="form-group" style="flex:2;min-width:200px;">
                <label>口座番号</label>
                <input class="form-input" value="****789" type="text">
                <div style="font-size:11px;color:#9B8E82;margin-top:4px;">セキュリティのため下3桁のみ表示</div>
            </div>
            <div class="form-group" style="flex:2;min-width:200px;">
                <label>口座名義（カナ）</label>
                <input class="form-input" value="アキコ スタイル">
            </div>
        </div>
        <button class="btn btn-primary">口座情報を更新</button>
    </div>

    {{-- 振込履歴 --}}
    <div class="section-title" style="font-size:16px;">振込履歴</div>
    <table class="data-table" style="margin-bottom:32px;">
        <thead>
            <tr><th>振込日</th><th>対象期間</th><th>紹介報酬</th><th>コース報酬</th><th>合計</th><th>ステータス</th></tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-weight:600;">2026/04/30</td>
                <td>2026年3月分</td>
                <td>&yen;52,360</td><td>&yen;90,200</td>
                <td style="font-weight:700;">&yen;142,560</td>
                <td><span class="badge" style="background:#fff3e0;color:#e65100;">振込予定</span></td>
            </tr>
            <tr>
                <td style="font-weight:600;">2026/03/31</td>
                <td>2026年2月分</td>
                <td>&yen;48,200</td><td>&yen;78,400</td>
                <td style="font-weight:700;">&yen;126,600</td>
                <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">振込済</span></td>
            </tr>
            <tr>
                <td style="font-weight:600;">2026/02/28</td>
                <td>2026年1月分</td>
                <td>&yen;42,100</td><td>&yen;63,700</td>
                <td style="font-weight:700;">&yen;105,800</td>
                <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">振込済</span></td>
            </tr>
            <tr>
                <td style="font-weight:600;">2026/01/31</td>
                <td>2025年12月分</td>
                <td>&yen;38,500</td><td>&yen;54,200</td>
                <td style="font-weight:700;">&yen;92,700</td>
                <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">振込済</span></td>
            </tr>
            <tr>
                <td style="font-weight:600;">2025/12/28</td>
                <td>2025年11月分</td>
                <td>&yen;32,800</td><td>&yen;48,500</td>
                <td style="font-weight:700;">&yen;81,300</td>
                <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">振込済</span></td>
            </tr>
        </tbody>
        <tfoot>
            <tr style="background:#F8EEEC;">
                <td colspan="2" style="font-weight:700;">累計振込額</td>
                <td style="font-weight:600;">&yen;213,960</td>
                <td style="font-weight:600;">&yen;334,800</td>
                <td style="font-weight:800;color:#D8A39D;font-size:16px;">&yen;548,760</td>
                <td></td>
            </tr>
        </tfoot>
    </table>

    {{-- 注意事項 --}}
    <div style="background:#F5F0E6;border-radius:8px;padding:16px;font-size:13px;color:#6B5D52;">
        <div style="font-weight:700;margin-bottom:8px;">&#9888; 振込に関する注意事項</div>
        <ul style="list-style:disc;padding-left:20px;line-height:1.8;">
            <li>振込手数料は SALLY141 が負担します</li>
            <li>月末締めの翌月末日に振込（土日祝の場合は翌営業日）</li>
            <li>報酬合計が ¥5,000 未満の場合は翌月に繰り越し</li>
            <li>口座情報の変更は振込日の10日前までに行ってください</li>
            <li>源泉徴収は行いません。確定申告が必要な場合はご自身で対応をお願いします</li>
        </ul>
    </div>
</div>

<div class="page-nav" style="margin-top:24px;">
    <strong>遷移先:</strong>
    <a href="{{ route('influencer.dashboard') }}">ダッシュボード (I-01)</a> |
    <a href="{{ route('influencer.profile') }}">プロフィール編集 (I-04)</a>
</div>
@endsection
