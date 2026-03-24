@extends('layouts.admin')
@section('title', 'インフルエンサー管理')
@section('screen-info')
<strong>A-10: インフルエンサー管理</strong> ― インフルエンサー一覧・紹介アフィリエイト（永久20%）・コース販売（50%レベニューシェア）の管理。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#11088; インフルエンサー管理</h1>
    <a href="{{ route('admin.influencers.create') }}" class="btn btn-primary">＋ インフルエンサー追加</a>
</div>

{{-- サマリー --}}
<div class="stats-row" style="margin-bottom:24px;">
    <div class="stat-card"><div class="stat-number">5</div><div class="stat-label">登録インフルエンサー</div></div>
    <div class="stat-card"><div class="stat-number">890</div><div class="stat-label">紹介経由の有料会員</div></div>
    <div class="stat-card"><div class="stat-number">&yen;1,856,400</div><div class="stat-label">累計報酬支払い</div></div>
    <div class="stat-card"><div class="stat-number">&yen;4,230,800</div><div class="stat-label">コース売上合計</div></div>
</div>

{{-- タブ --}}
<div class="tabs">
    <div class="tab active" data-tab="tab-inf-list">インフルエンサー一覧</div>
    <div class="tab" data-tab="tab-inf-payout">報酬管理</div>
    <div class="tab" data-tab="tab-inf-settings">報酬設定</div>
</div>

{{-- TAB: 一覧 --}}
<div class="tab-panel active" id="tab-inf-list">
    <table class="data-table">
        <thead>
            <tr><th>インフルエンサー</th><th>紹介コード</th><th>紹介会員数</th><th>コース数</th><th>コース売上</th><th>紹介報酬</th><th>合計報酬</th><th>操作</th></tr>
        </thead>
        <tbody>
            @php
            $influencers = [
                ['name'=>'Akiko Style','code'=>'akiko-style','members'=>298,'courses'=>3,'sales'=>240400,'aff'=>181160,'photo'=>'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=60&h=60&fit=crop&crop=face'],
                ['name'=>'MIKU Hair','code'=>'miku-hair','members'=>195,'courses'=>2,'sales'=>156800,'aff'=>118440,'photo'=>'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=60&h=60&fit=crop&crop=face'],
                ['name'=>'YUI Beauty','code'=>'yui-beauty','members'=>142,'courses'=>2,'sales'=>98000,'aff'=>86240,'photo'=>'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=60&h=60&fit=crop&crop=face'],
                ['name'=>'SAKI AOYAMA','code'=>'saki-ao','members'=>156,'courses'=>1,'sales'=>73500,'aff'=>95000,'photo'=>'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=60&h=60&fit=crop&crop=face'],
                ['name'=>'Rina K.','code'=>'rina-k','members'=>99,'courses'=>1,'sales'=>49000,'aff'=>60200,'photo'=>'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=60&h=60&fit=crop&crop=face'],
            ];
            @endphp
            @foreach ($influencers as $inf)
            <tr>
                <td>
                    <div style="display:flex;align-items:center;gap:10px;">
                        <div style="width:36px;height:36px;border-radius:50%;overflow:hidden;flex-shrink:0;">
                            <img src="{{ $inf['photo'] }}" style="width:100%;height:100%;object-fit:cover;">
                        </div>
                        <strong>{{ $inf['name'] }}</strong>
                    </div>
                </td>
                <td><code style="background:#F5F0E6;padding:2px 8px;border-radius:4px;font-size:12px;">{{ $inf['code'] }}</code></td>
                <td style="text-align:center;">{{ $inf['members'] }}</td>
                <td style="text-align:center;">{{ $inf['courses'] }}</td>
                <td style="font-weight:600;">&yen;{{ number_format($inf['sales']) }}</td>
                <td style="font-weight:600;">&yen;{{ number_format($inf['aff']) }}</td>
                <td style="font-weight:700;color:#D8A39D;">&yen;{{ number_format($inf['sales']*0.5 + $inf['aff']) }}</td>
                <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- TAB: 報酬管理 --}}
<div class="tab-panel" id="tab-inf-payout" style="display:none;">
    <div style="font-size:14px;font-weight:700;margin-bottom:16px;">今月の報酬（2026年3月分 / 4月末振込）</div>
    <table class="data-table" style="margin-bottom:24px;">
        <thead><tr><th>インフルエンサー</th><th>紹介報酬 (20%)</th><th>コース報酬 (50%)</th><th>合計</th><th>ステータス</th></tr></thead>
        <tbody>
            <tr><td><strong>Akiko Style</strong></td><td>&yen;52,360</td><td>&yen;90,200</td><td style="font-weight:700;">&yen;142,560</td><td><span class="badge" style="background:#fff3e0;color:#e65100;">振込待ち</span></td></tr>
            <tr><td><strong>MIKU Hair</strong></td><td>&yen;38,200</td><td>&yen;58,800</td><td style="font-weight:700;">&yen;97,000</td><td><span class="badge" style="background:#fff3e0;color:#e65100;">振込待ち</span></td></tr>
            <tr><td><strong>YUI Beauty</strong></td><td>&yen;28,600</td><td>&yen;34,300</td><td style="font-weight:700;">&yen;62,900</td><td><span class="badge" style="background:#fff3e0;color:#e65100;">振込待ち</span></td></tr>
            <tr><td><strong>SAKI AOYAMA</strong></td><td>&yen;25,200</td><td>&yen;24,500</td><td style="font-weight:700;">&yen;49,700</td><td><span class="badge" style="background:#fff3e0;color:#e65100;">振込待ち</span></td></tr>
            <tr><td><strong>Rina K.</strong></td><td>&yen;15,400</td><td>&yen;14,700</td><td style="font-weight:700;">&yen;30,100</td><td><span class="badge" style="background:#fff3e0;color:#e65100;">振込待ち</span></td></tr>
        </tbody>
        <tfoot>
            <tr style="background:#F8EEEC;">
                <td style="font-weight:700;">合計</td>
                <td style="font-weight:600;">&yen;159,760</td>
                <td style="font-weight:600;">&yen;222,500</td>
                <td style="font-weight:800;color:#D8A39D;font-size:16px;">&yen;382,260</td>
                <td><button class="btn btn-primary btn-sm">一括振込処理</button></td>
            </tr>
        </tfoot>
    </table>
</div>

{{-- TAB: 報酬設定 --}}
<div class="tab-panel" id="tab-inf-settings" style="display:none;">
    <div style="background:#FFFDF9;border-radius:12px;padding:24px;box-shadow:0 2px 8px rgba(61,50,41,.06);max-width:600px;">
        <div style="font-size:16px;font-weight:700;margin-bottom:20px;">&#9881; 報酬レート設定</div>

        <div class="form-group">
            <label>紹介アフィリエイト報酬率</label>
            <div style="display:flex;gap:8px;align-items:center;">
                <input class="form-input" value="20" style="width:80px;text-align:center;">
                <span style="font-size:14px;color:#6B5D52;">% （月額料金に対する永久報酬）</span>
            </div>
            <div style="font-size:12px;color:#9B8E82;margin-top:4px;">月額 ¥770 × 20% = ¥154/月/人 が紹介者に永久支払い</div>
        </div>

        <div class="form-group">
            <label>コース販売レベニューシェア</label>
            <div style="display:flex;gap:8px;align-items:center;">
                <input class="form-input" value="50" style="width:80px;text-align:center;">
                <span style="font-size:14px;color:#6B5D52;">% （コース売上に対するインフルエンサー取り分）</span>
            </div>
            <div style="font-size:12px;color:#9B8E82;margin-top:4px;">¥9,800のコースなら ¥4,900 がインフルエンサー取り分</div>
        </div>

        <div class="form-group">
            <label>振込サイクル</label>
            <select class="form-input" style="width:auto;">
                <option selected>月末締め・翌月末振込</option>
                <option>15日締め・当月末振込</option>
            </select>
        </div>

        <div class="form-group">
            <label>最低振込金額</label>
            <div style="display:flex;gap:8px;align-items:center;">
                <input class="form-input" value="5000" style="width:120px;text-align:center;">
                <span style="font-size:14px;color:#6B5D52;">円</span>
            </div>
        </div>

        <button class="btn btn-primary">設定を保存</button>
    </div>
</div>

<div class="page-nav" style="margin-top:24px;">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a> |
    <a href="{{ route('influencer.dashboard') }}">インフルエンサーダッシュボード (I-01)</a> |
    <a href="{{ route('front.influencer.show', 1) }}">公開プロフィール (F-23)</a>
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
