@extends('layouts.shop')
@section('title', 'メンバー一覧')
@section('screen-info')
<strong>S-03: メンバー一覧</strong> ― 店舗に所属するメンバー（スタッフ・生徒）の一覧。進捗率・最終ログイン・修了コース数を確認。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128101; メンバー一覧</h1>
    <a href="{{ route('shop.invite') }}" class="btn btn-primary">&#128233; メンバーを招待</a>
</div>

{{-- 検索・フィルター --}}
<div class="filter-bar">
    <div class="search-bar">
        <span>&#128269;</span>
        <input type="text" placeholder="名前で検索...">
    </div>
    <select>
        <option value="">全ロール</option>
        <option>スタッフ</option>
        <option>生徒</option>
    </select>
    <select>
        <option value="">進捗率</option>
        <option>80%以上</option>
        <option>50〜79%</option>
        <option>50%未満</option>
    </select>
</div>

{{-- メンバーテーブル --}}
<table class="data-table">
    <thead>
        <tr>
            <th>名前</th>
            <th>ロール</th>
            <th style="width:200px;">進捗率</th>
            <th>最終ログイン</th>
            <th>修了コース数</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#D8A39D;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:14px;">田</div>
                    <span>田中 美咲</span>
                </div>
            </td>
            <td><span class="badge badge-beginner">スタッフ</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:8px;">
                    <div class="progress-bar" style="flex:1;"><div class="fill" style="width:85%;"></div></div>
                    <span style="font-size:13px;font-weight:600;">85%</span>
                </div>
            </td>
            <td style="font-size:13px;color:#888;">2026-03-24</td>
            <td style="text-align:center;">5</td>
            <td><a href="{{ route('shop.members.show', 1) }}" class="btn btn-secondary btn-sm">詳細</a></td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#5C4F44;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:14px;">佐</div>
                    <span>佐藤 健太</span>
                </div>
            </td>
            <td><span class="badge badge-beginner">スタッフ</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:8px;">
                    <div class="progress-bar" style="flex:1;"><div class="fill" style="width:72%;"></div></div>
                    <span style="font-size:13px;font-weight:600;">72%</span>
                </div>
            </td>
            <td style="font-size:13px;color:#888;">2026-03-24</td>
            <td style="text-align:center;">4</td>
            <td><a href="{{ route('shop.members.show', 2) }}" class="btn btn-secondary btn-sm">詳細</a></td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#3D3229;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:14px;">鈴</div>
                    <span>鈴木 花</span>
                </div>
            </td>
            <td><span class="badge badge-intermediate">生徒</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:8px;">
                    <div class="progress-bar" style="flex:1;"><div class="fill" style="width:60%;"></div></div>
                    <span style="font-size:13px;font-weight:600;">60%</span>
                </div>
            </td>
            <td style="font-size:13px;color:#888;">2026-03-23</td>
            <td style="text-align:center;">3</td>
            <td><a href="{{ route('shop.members.show', 3) }}" class="btn btn-secondary btn-sm">詳細</a></td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#533483;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:14px;">山</div>
                    <span>山田 太郎</span>
                </div>
            </td>
            <td><span class="badge badge-intermediate">生徒</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:8px;">
                    <div class="progress-bar" style="flex:1;"><div class="fill" style="width:45%;"></div></div>
                    <span style="font-size:13px;font-weight:600;">45%</span>
                </div>
            </td>
            <td style="font-size:13px;color:#888;">2026-03-22</td>
            <td style="text-align:center;">2</td>
            <td><a href="{{ route('shop.members.show', 4) }}" class="btn btn-secondary btn-sm">詳細</a></td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#2e7d32;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:14px;">高</div>
                    <span>高橋 雅人</span>
                </div>
            </td>
            <td><span class="badge badge-beginner">スタッフ</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:8px;">
                    <div class="progress-bar" style="flex:1;"><div class="fill" style="width:90%;"></div></div>
                    <span style="font-size:13px;font-weight:600;">90%</span>
                </div>
            </td>
            <td style="font-size:13px;color:#888;">2026-03-24</td>
            <td style="text-align:center;">6</td>
            <td><a href="{{ route('shop.members.show', 5) }}" class="btn btn-secondary btn-sm">詳細</a></td>
        </tr>
        <tr>
            <td>
                <div style="display:flex;align-items:center;gap:10px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:#c62828;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:14px;">伊</div>
                    <span>伊藤 真理</span>
                </div>
            </td>
            <td><span class="badge badge-intermediate">生徒</span></td>
            <td>
                <div style="display:flex;align-items:center;gap:8px;">
                    <div class="progress-bar" style="flex:1;"><div class="fill" style="width:30%;"></div></div>
                    <span style="font-size:13px;font-weight:600;">30%</span>
                </div>
            </td>
            <td style="font-size:13px;color:#888;">2026-03-20</td>
            <td style="text-align:center;">1</td>
            <td><a href="{{ route('shop.members.show', 6) }}" class="btn btn-secondary btn-sm">詳細</a></td>
        </tr>
    </tbody>
</table>

<div style="margin-top:16px;text-align:center;font-size:13px;color:#888;">
    全12件中 1〜6件を表示
</div>

<div class="page-nav" style="margin-top:32px;">
    <strong>遷移先:</strong>
    <a href="{{ route('shop.members.show', 1) }}">メンバー進捗詳細 (S-04)</a> |
    <a href="{{ route('shop.invite') }}">メンバー招待 (S-05)</a> |
    <a href="{{ route('shop.dashboard') }}">ダッシュボード (S-02)</a>
</div>
@endsection
