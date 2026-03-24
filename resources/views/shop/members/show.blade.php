@extends('layouts.shop')
@section('title', 'メンバー進捗詳細')
@section('screen-info')
<strong>S-04: メンバー進捗詳細</strong> ― 個別メンバーの学習進捗状況、コース別進捗、視聴履歴、イベント参加履歴を確認。
@endsection

@section('content')
<div class="admin-header">
    <h1>&#128100; メンバー進捗詳細</h1>
    <a href="{{ route('shop.members.index') }}" class="btn btn-secondary">&#8592; メンバー一覧に戻る</a>
</div>

{{-- メンバー情報 --}}
<div class="card" style="margin-bottom:24px;">
    <div class="card-body" style="display:flex;align-items:center;gap:20px;padding:24px;">
        <div style="width:64px;height:64px;border-radius:50%;background:#D8A39D;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:24px;flex-shrink:0;">田</div>
        <div style="flex:1;">
            <h2 style="font-size:20px;font-weight:700;margin-bottom:4px;">田中 美咲</h2>
            <span class="badge badge-beginner">スタッフ</span>
            <span style="font-size:13px;color:#888;margin-left:12px;">登録日: 2025-10-15</span>
            <span style="font-size:13px;color:#888;margin-left:12px;">最終ログイン: 2026-03-24</span>
        </div>
        <div style="text-align:center;">
            <div style="font-size:36px;font-weight:800;color:#D8A39D;">85%</div>
            <div style="font-size:13px;color:#666;">全体進捗率</div>
        </div>
    </div>
</div>

{{-- コース別進捗 --}}
<div style="margin-bottom:32px;">
    <div class="section-title">コース別進捗</div>
    <div class="card">
        <div class="card-body" style="padding:0;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>コース名</th>
                        <th style="width:220px;">進捗率</th>
                        <th>ステータス</th>
                        <th>最終学習日</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight:600;">カラーリング基礎コース</td>
                        <td>
                            <div style="display:flex;align-items:center;gap:8px;">
                                <div class="progress-bar" style="flex:1;"><div class="fill" style="width:100%;"></div></div>
                                <span style="font-size:13px;font-weight:600;">100%</span>
                            </div>
                        </td>
                        <td><span class="badge badge-completed">修了</span></td>
                        <td style="font-size:13px;color:#888;">2026-03-24</td>
                    </tr>
                    <tr>
                        <td style="font-weight:600;">カット応用テクニック</td>
                        <td>
                            <div style="display:flex;align-items:center;gap:8px;">
                                <div class="progress-bar" style="flex:1;"><div class="fill" style="width:100%;"></div></div>
                                <span style="font-size:13px;font-weight:600;">100%</span>
                            </div>
                        </td>
                        <td><span class="badge badge-completed">修了</span></td>
                        <td style="font-size:13px;color:#888;">2026-03-18</td>
                    </tr>
                    <tr>
                        <td style="font-weight:600;">ヘッドスパ入門</td>
                        <td>
                            <div style="display:flex;align-items:center;gap:8px;">
                                <div class="progress-bar" style="flex:1;"><div class="fill" style="width:100%;"></div></div>
                                <span style="font-size:13px;font-weight:600;">100%</span>
                            </div>
                        </td>
                        <td><span class="badge badge-completed">修了</span></td>
                        <td style="font-size:13px;color:#888;">2026-03-10</td>
                    </tr>
                    <tr>
                        <td style="font-weight:600;">接客マナー基礎</td>
                        <td>
                            <div style="display:flex;align-items:center;gap:8px;">
                                <div class="progress-bar" style="flex:1;"><div class="fill" style="width:75%;"></div></div>
                                <span style="font-size:13px;font-weight:600;">75%</span>
                            </div>
                        </td>
                        <td><span class="badge badge-status">学習中</span></td>
                        <td style="font-size:13px;color:#888;">2026-03-22</td>
                    </tr>
                    <tr>
                        <td style="font-weight:600;">トリートメント実践</td>
                        <td>
                            <div style="display:flex;align-items:center;gap:8px;">
                                <div class="progress-bar" style="flex:1;"><div class="fill" style="width:40%;"></div></div>
                                <span style="font-size:13px;font-weight:600;">40%</span>
                            </div>
                        </td>
                        <td><span class="badge badge-status">学習中</span></td>
                        <td style="font-size:13px;color:#888;">2026-03-20</td>
                    </tr>
                    <tr>
                        <td style="font-weight:600;">サロン経営入門</td>
                        <td>
                            <div style="display:flex;align-items:center;gap:8px;">
                                <div class="progress-bar" style="flex:1;"><div class="fill" style="width:0%;"></div></div>
                                <span style="font-size:13px;font-weight:600;">0%</span>
                            </div>
                        </td>
                        <td><span class="badge" style="background:#f5f5f5;color:#999;">未着手</span></td>
                        <td style="font-size:13px;color:#888;">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- 視聴履歴 --}}
<div style="margin-bottom:32px;">
    <div class="section-title">最近の視聴履歴</div>
    <div class="card">
        <div class="card-body" style="padding:0;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>日時</th>
                        <th>コース</th>
                        <th>チャプター</th>
                        <th>視聴時間</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-size:13px;white-space:nowrap;">2026-03-24 14:30</td>
                        <td>カラーリング基礎コース</td>
                        <td>Chapter 8: 仕上げと確認</td>
                        <td>12分</td>
                    </tr>
                    <tr>
                        <td style="font-size:13px;white-space:nowrap;">2026-03-24 14:00</td>
                        <td>カラーリング基礎コース</td>
                        <td>Chapter 7: 塗布テクニック</td>
                        <td>18分</td>
                    </tr>
                    <tr>
                        <td style="font-size:13px;white-space:nowrap;">2026-03-22 20:15</td>
                        <td>接客マナー基礎</td>
                        <td>Chapter 4: クレーム対応</td>
                        <td>15分</td>
                    </tr>
                    <tr>
                        <td style="font-size:13px;white-space:nowrap;">2026-03-20 19:30</td>
                        <td>トリートメント実践</td>
                        <td>Chapter 2: 薬剤の知識</td>
                        <td>22分</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- イベント参加履歴 --}}
<div style="margin-bottom:32px;">
    <div class="section-title">イベント参加履歴</div>
    <div class="card">
        <div class="card-body" style="padding:0;">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>開催日</th>
                        <th>イベント名</th>
                        <th>ステータス</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-size:13px;">2026-03-15</td>
                        <td>パーマ実践ワークショップ</td>
                        <td><span class="badge badge-completed">参加済み</span></td>
                    </tr>
                    <tr>
                        <td style="font-size:13px;">2026-02-28</td>
                        <td>カラー最新トレンドセミナー</td>
                        <td><span class="badge badge-completed">参加済み</span></td>
                    </tr>
                    <tr>
                        <td style="font-size:13px;">2026-04-10</td>
                        <td>サロンワーク効率化講座</td>
                        <td><span class="badge badge-beginner">参加予定</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- 学習時間推移グラフ --}}
<div style="margin-bottom:32px;">
    <div class="section-title">学習時間推移</div>
    <div class="card">
        <div class="card-body" style="text-align:center;padding:40px;">
            <div style="background:#f8f9fa;border:2px dashed #ddd;border-radius:12px;padding:60px 20px;color:#999;">
                <div style="font-size:48px;margin-bottom:12px;">&#128200;</div>
                <p style="font-size:14px;">学習時間推移グラフ（実装時にChart.js等で描画）</p>
                <p style="font-size:12px;color:#bbb;margin-top:8px;">過去30日間の日別学習時間を表示</p>
            </div>
        </div>
    </div>
</div>

<div class="page-nav">
    <strong>遷移先:</strong>
    <a href="{{ route('shop.members.index') }}">メンバー一覧 (S-03)</a> |
    <a href="{{ route('shop.dashboard') }}">ダッシュボード (S-02)</a>
</div>
@endsection
