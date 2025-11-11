@extends('layouts.app')

@section('content')
<section class="thanks-section">
    <div class="container">
        <h2>お問い合わせありがとうございます</h2>
        <p>
            ご入力いただいた内容を送信しました。<br>
            担当者より後日ご連絡いたしますので、しばらくお待ちください。
        </p>

        <div class="thanks-actions">
            <a href="{{ url('/') }}" class="btn">トップページに戻る</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary">もう一度問い合わせる</a>
        </div>
    </div>
</section>
@endsection
