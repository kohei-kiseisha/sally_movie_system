@extends('layouts.front')
@section('title', 'コース購入')
@section('screen-info')
<strong>F-26: インフルエンサーコース購入確認</strong> ― 買い切りコースの購入確認・決済画面。
@endsection

@section('content')
<div class="section" style="max-width:600px;">
    <div class="section-title" style="justify-content:center;">コース購入</div>

    {{-- コース情報 --}}
    <div class="card" style="margin-bottom:24px;">
        <div class="card-img" style="background:none;">
            <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=600&h=340&fit=crop" alt="コース" style="width:100%;height:100%;object-fit:cover;">
        </div>
        <div class="card-body">
            <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;">
                <span class="level-badge level-beginner">初級</span>
                <span style="font-size:12px;color:#888;">10本の動画</span>
                <span style="font-size:12px;color:#888;">by Akiko Style</span>
            </div>
            <div style="font-size:18px;font-weight:700;margin-bottom:4px;">Akikoの時短ヘアアレンジ10選</div>
            <div style="font-size:13px;color:#6B5D52;">忙しい朝でも5分で完成する時短アレンジを厳選。一度購入すれば永久に視聴可能。</div>
        </div>
    </div>

    {{-- 購入内容 --}}
    <div style="background:#FFFDF9;border-radius:12px;padding:20px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:24px;">
        <div style="font-size:16px;font-weight:700;margin-bottom:16px;">購入内容</div>
        <table style="width:100%;font-size:14px;">
            <tr style="border-bottom:1px solid #E8DDD0;">
                <td style="padding:10px 0;color:#6B5D52;">コース名</td>
                <td style="padding:10px 0;text-align:right;font-weight:600;">Akikoの時短ヘアアレンジ10選</td>
            </tr>
            <tr style="border-bottom:1px solid #E8DDD0;">
                <td style="padding:10px 0;color:#6B5D52;">タイプ</td>
                <td style="padding:10px 0;text-align:right;"><span class="badge" style="background:#3D3229;color:#fff;">買い切り</span></td>
            </tr>
            <tr style="border-bottom:1px solid #E8DDD0;">
                <td style="padding:10px 0;color:#6B5D52;">動画本数</td>
                <td style="padding:10px 0;text-align:right;font-weight:600;">10本</td>
            </tr>
            <tr style="border-bottom:1px solid #E8DDD0;">
                <td style="padding:10px 0;color:#6B5D52;">視聴期限</td>
                <td style="padding:10px 0;text-align:right;font-weight:600;">無期限</td>
            </tr>
            <tr>
                <td style="padding:12px 0;font-size:16px;font-weight:700;">お支払い金額</td>
                <td style="padding:12px 0;text-align:right;font-size:24px;font-weight:800;color:#D8A39D;">&yen;9,800<span style="font-size:12px;font-weight:400;color:#9B8E82;">（税込）</span></td>
            </tr>
        </table>
    </div>

    {{-- 決済方法 --}}
    <div style="background:#FFFDF9;border-radius:12px;padding:20px;box-shadow:0 2px 8px rgba(61,50,41,.06);margin-bottom:24px;">
        <div style="font-size:16px;font-weight:700;margin-bottom:16px;">お支払い方法</div>
        <div style="display:flex;flex-direction:column;gap:12px;">
            <label style="display:flex;align-items:center;gap:12px;padding:12px;border:2px solid #D8A39D;border-radius:8px;cursor:pointer;background:#F8EEEC;">
                <input type="radio" name="payment" checked style="accent-color:#D8A39D;">
                <div>
                    <div style="font-size:14px;font-weight:600;">&#128179; クレジットカード</div>
                    <div style="font-size:12px;color:#888;">Visa / Mastercard / JCB / AMEX</div>
                </div>
            </label>
            <label style="display:flex;align-items:center;gap:12px;padding:12px;border:1px solid #E8DDD0;border-radius:8px;cursor:pointer;">
                <input type="radio" name="payment" style="accent-color:#D8A39D;">
                <div>
                    <div style="font-size:14px;font-weight:600;">Apple Pay / Google Pay</div>
                    <div style="font-size:12px;color:#888;">ワンタップで決済</div>
                </div>
            </label>
        </div>
    </div>

    {{-- 購入ボタン --}}
    <button class="btn btn-primary btn-lg btn-block" onclick="document.getElementById('purchaseComplete').style.display='block'; this.style.display='none'; document.getElementById('purchaseForm').style.display='none';" id="purchaseBtn">
        ¥9,800 で購入する
    </button>
    <div style="font-size:11px;color:#9B8E82;text-align:center;margin-top:8px;" id="purchaseForm">
        ※ 購入後のキャンセル・返金はできません
    </div>

    {{-- 購入完了（JS切替） --}}
    <div id="purchaseComplete" style="display:none;text-align:center;padding:40px 20px;">
        <div style="font-size:64px;margin-bottom:16px;">&#127881;</div>
        <h2 style="font-size:22px;font-weight:800;margin-bottom:8px;">購入完了！</h2>
        <p style="font-size:14px;color:#6B5D52;margin-bottom:24px;">
            「Akikoの時短ヘアアレンジ10選」のすべての動画が視聴可能になりました。
        </p>
        <a href="{{ route('front.courses.show', 20) }}" class="btn btn-primary btn-lg">&#9654; さっそく学習を始める</a>
    </div>
</div>
@endsection

@section('page-nav')
<strong>遷移先:</strong>
<a href="{{ route('front.influencer.show', 1) }}">インフルエンサー特集 (F-23)</a> |
<a href="{{ route('front.courses.show', 20) }}">コース詳細 (F-09)</a>
@endsection
