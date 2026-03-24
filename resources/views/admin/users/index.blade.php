@extends('layouts.admin')
@section('title', 'ユーザー管理')
@section('screen-info')
<strong>A-08: ユーザー管理</strong> ― 一般ユーザー（個人契約）の一覧管理。店舗管理者・店舗所属ユーザーは「店舗管理」の店舗詳細から確認。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128101; ユーザー管理</h1>
    <div style="font-size:13px;color:#888;">一般ユーザー数: 1,052</div>
</div>

{{-- フィルタ --}}
<div class="filter-bar">
    <div class="search-bar">
        <span>&#128269;</span>
        <input type="text" placeholder="名前・メールで検索...">
    </div>
    <select class="form-input" style="width:auto;">
        <option>契約状態: 全て</option>
        <option>有料会員</option>
        <option>無料会員</option>
        <option>未払い</option>
        <option>解約済</option>
    </select>
    <select class="form-input" style="width:auto;">
        <option>紹介元: 全て</option>
        <option>直接登録</option>
        <option>インフルエンサー紹介</option>
    </select>
    <select class="form-input" style="width:auto;">
        <option>登録日: 全期間</option>
        <option>今月</option>
        <option>直近3ヶ月</option>
        <option>直近6ヶ月</option>
    </select>
</div>

<table class="data-table">
    <thead>
        <tr>
            <th>名前</th>
            <th>登録日</th>
            <th>最終ログイン</th>
            <th>契約</th>
            <th>紹介元</th>
            <th>学習進捗</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div class="avatar" style="width:32px;height:32px;font-size:12px;">田</div>
                    <div>
                        <strong>田中 美咲</strong>
                        <div style="font-size:11px;color:#9B8E82;">LINE登録</div>
                    </div>
                </div>
            </td>
            <td>2026/03/24</td>
            <td>2026/03/24</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">有料</span></td>
            <td><span style="font-size:12px;color:#D8A39D;">Akiko Style</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:6px;">
                    <div class="progress-bar" style="width:60px;"><div class="fill" style="width:42%;"></div></div>
                    <span style="font-size:12px;">42%</span>
                </div>
            </td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div class="avatar" style="width:32px;height:32px;font-size:12px;">佐</div>
                    <div>
                        <strong>佐藤 健太</strong>
                        <div style="font-size:11px;color:#9B8E82;">LINE登録</div>
                    </div>
                </div>
            </td>
            <td>2026/03/23</td>
            <td>2026/03/23</td>
            <td><span class="badge" style="background:#F5F0E6;color:#6B5D52;">無料</span></td>
            <td><span style="font-size:12px;color:#9B8E82;">直接登録</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:6px;">
                    <div class="progress-bar" style="width:60px;"><div class="fill" style="width:8%;"></div></div>
                    <span style="font-size:12px;">8%</span>
                </div>
            </td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div class="avatar" style="width:32px;height:32px;font-size:12px;">高</div>
                    <div>
                        <strong>高橋 由美</strong>
                        <div style="font-size:11px;color:#9B8E82;">LINE登録</div>
                    </div>
                </div>
            </td>
            <td>2025/12/01</td>
            <td>2026/02/28</td>
            <td><span class="badge" style="background:#fff3e0;color:#e65100;">未払い</span></td>
            <td><span style="font-size:12px;color:#9B8E82;">直接登録</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:6px;">
                    <div class="progress-bar" style="width:60px;"><div class="fill" style="width:65%;"></div></div>
                    <span style="font-size:12px;">65%</span>
                </div>
            </td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div class="avatar" style="width:32px;height:32px;font-size:12px;">鈴</div>
                    <div>
                        <strong>鈴木 花子</strong>
                        <div style="font-size:11px;color:#9B8E82;">LINE登録</div>
                    </div>
                </div>
            </td>
            <td>2025/06/15</td>
            <td>2026/01/30</td>
            <td><span class="badge" style="background:#ffebee;color:#c62828;">解約済</span></td>
            <td><span style="font-size:12px;color:#D8A39D;">MIKU Hair</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:6px;">
                    <div class="progress-bar" style="width:60px;"><div class="fill" style="width:100%;"></div></div>
                    <span style="font-size:12px;">100%</span>
                </div>
            </td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div class="avatar" style="width:32px;height:32px;font-size:12px;">木</div>
                    <div>
                        <strong>木村 あゆみ</strong>
                        <div style="font-size:11px;color:#9B8E82;">LINE登録</div>
                    </div>
                </div>
            </td>
            <td>2026/03/20</td>
            <td>2026/03/24</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">有料</span></td>
            <td><span style="font-size:12px;color:#9B8E82;">直接登録</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:6px;">
                    <div class="progress-bar" style="width:60px;"><div class="fill" style="width:25%;"></div></div>
                    <span style="font-size:12px;">25%</span>
                </div>
            </td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div class="avatar" style="width:32px;height:32px;font-size:12px;">渡</div>
                    <div>
                        <strong>渡辺 真由</strong>
                        <div style="font-size:11px;color:#9B8E82;">LINE登録</div>
                    </div>
                </div>
            </td>
            <td>2026/02/10</td>
            <td>2026/03/22</td>
            <td><span class="badge" style="background:#e8f5e9;color:#2e7d32;">有料</span></td>
            <td><span style="font-size:12px;color:#D8A39D;">Akiko Style</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:6px;">
                    <div class="progress-bar" style="width:60px;"><div class="fill" style="width:55%;"></div></div>
                    <span style="font-size:12px;">55%</span>
                </div>
            </td>
            <td><a href="#" class="btn btn-sm btn-secondary">詳細</a></td>
        </tr>
    </tbody>
</table>

<div style="text-align:center;padding:20px;color:#888;font-size:13px;">
    全 1,052 件中 1〜6 件を表示 | &laquo; 前へ 1 2 3 ... 176 次へ &raquo;
</div>

<div style="background:#F5F0E6;border-radius:8px;padding:12px 16px;font-size:13px;color:#6B5D52;margin-bottom:16px;">
    &#128161; 店舗管理者・店舗所属ユーザーは <a href="{{ route('admin.organizations.index') }}" style="color:#D8A39D;font-weight:600;">店舗管理</a> の各店舗詳細から確認できます。
</div>

<div class="page-nav">
    <strong>遷移先:</strong>
    <a href="{{ route('admin.organizations.index') }}">店舗管理 (A-09)</a> |
    <a href="{{ route('admin.subscriptions.index') }}">契約管理 (A-07)</a> |
    <a href="{{ route('admin.admins.index') }}">管理者管理 (A-11)</a> |
    <a href="{{ route('admin.dashboard') }}">ダッシュボード (A-02)</a>
</div>
@endsection
