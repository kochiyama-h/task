@extends('layouts.app')

@section('content')
<section class="contact-form-section">
    <div class="container">
        <h2>お問い合わせフォーム</h2>
        <p>必要事項をご入力の上、「送信」ボタンを押してください。</p>

        <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
            @csrf
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">お問い合わせ内容</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn">送信する</button>
        </form>

        <p class="back-link">
            <a href="{{ url('/') }}">← トップページに戻る</a>
        </p>
    </div>
</section>
@endsection
