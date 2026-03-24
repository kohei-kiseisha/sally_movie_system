@extends('layouts.front')

@section('screen-info')
<strong>F-15: イベント詳細</strong> - イベント詳細情報・申込ボタン・講師情報
@endsection

@section('content')
<div class="section" style="max-width: 800px;">
    {{-- イベント画像 --}}
    <div style="width: 100%; aspect-ratio: 16/9; background: linear-gradient(135deg, #3D3229, #5C4F44); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 16px; margin-bottom: 24px;">
        &#127916; イベント画像
    </div>

    {{-- イベント情報 --}}
    <div style="margin-bottom: 32px;">
        <span class="badge badge-status" style="margin-bottom: 8px; display: inline-block;">受付中</span>
        <h1 style="font-size: 24px; font-weight: 800; margin-bottom: 16px;">ブライダルヘアセット実践ワークショップ</h1>

        <div style="background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,.06); margin-bottom: 24px;">
            <div style="display: grid; gap: 12px;">
                <div style="display: flex; gap: 12px; align-items: center;">
                    <span style="font-size: 18px;">&#128197;</span>
                    <div>
                        <div style="font-size: 12px; color: #888;">日時</div>
                        <div style="font-size: 14px; font-weight: 600;">2026年4月12日（日） 13:00 - 17:00</div>
                    </div>
                </div>
                <div style="display: flex; gap: 12px; align-items: center;">
                    <span style="font-size: 18px;">&#128205;</span>
                    <div>
                        <div style="font-size: 12px; color: #888;">場所</div>
                        <div style="font-size: 14px; font-weight: 600;">SALLY141 大阪本店 セミナールーム</div>
                    </div>
                </div>
                <div style="display: flex; gap: 12px; align-items: center;">
                    <span style="font-size: 18px;">&#128101;</span>
                    <div>
                        <div style="font-size: 12px; color: #888;">定員</div>
                        <div style="font-size: 14px; font-weight: 600;">20名（残席 5名）</div>
                    </div>
                </div>
                <div style="display: flex; gap: 12px; align-items: center;">
                    <span style="font-size: 18px;">&#128176;</span>
                    <div>
                        <div style="font-size: 12px; color: #888;">参加費</div>
                        <div style="font-size: 14px; font-weight: 600;">サブスクリプション会員: 無料</div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 24px;">
            <h2 style="font-size: 16px; font-weight: 700; margin-bottom: 8px;">イベント内容</h2>
            <p style="font-size: 14px; color: #555; line-height: 1.8;">
                ブライダルシーンで求められるヘアセット技術を、実際のウィッグを使って実践的に学ぶワークショップです。
                アップスタイル・ダウンスタイル・ハーフアップの3スタイルを、講師のデモンストレーションの後に実習します。
                受講後はブライダルヘアセットの基礎が身につき、現場で自信を持って対応できるようになります。
            </p>
        </div>

        <div style="margin-bottom: 24px;">
            <h2 style="font-size: 16px; font-weight: 700; margin-bottom: 8px;">持ち物</h2>
            <ul style="list-style: disc; padding-left: 20px; font-size: 14px; color: #555; line-height: 2;">
                <li>ヘアセット道具一式（ピン・コーム・スプレー等）</li>
                <li>練習用ウィッグ（お持ちでない方は貸出あり）</li>
                <li>筆記用具</li>
            </ul>
        </div>

        {{-- 申し込みボタン --}}
        <a href="{{ route('front.events.confirm', $id ?? 1) }}" class="btn btn-primary btn-lg btn-block">
            このイベントに申し込む
        </a>
    </div>

    {{-- 講師情報 --}}
    <div style="background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,.06);">
        <div style="font-size: 16px; font-weight: 700; margin-bottom: 16px;">講師情報</div>
        <div style="display: flex; align-items: center; gap: 16px;">
            <div class="avatar" style="width: 56px; height: 56px; font-size: 20px;">S</div>
            <div>
                <div style="font-size: 16px; font-weight: 700;">佐藤 美咲</div>
                <div style="font-size: 13px; color: #888;">SALLY141 チーフスタイリスト</div>
                <div style="font-size: 13px; color: #666; margin-top: 4px;">ブライダルヘアセット歴15年。年間500件以上のブライダルヘアを担当するトップスタイリスト。</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.events.confirm', $id ?? 1) }}">申込確認 (F-16)</a> |
<a href="{{ route('front.events.index') }}">イベント一覧 (F-14)</a>
@endsection
