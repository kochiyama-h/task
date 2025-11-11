@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="hero-content">
        <h1>信頼と実績の不動産パートナー</h1>
        <p>あなたの理想の住まいを、私たちが全力でサポートします。</p>
        
    </div>
</section>

<section id="about" class="section">
    <h2>私たちについて</h2>
    <p>
        RealEstate Co.は、地域密着型の不動産会社として、お客様一人ひとりに寄り添った提案を行っています。<br>
        賃貸・売買・管理など、不動産に関するあらゆるニーズにお応えします。
    </p>
</section>

<section id="services" class="section bg-light">
    <h2>事業内容</h2>
    <div class="cards">
        <div class="card">
            <h3>賃貸仲介</h3>
            <p>お客様のライフスタイルに合った物件をご紹介します。</p>
        </div>
        <div class="card">
            <h3>売買サポート</h3>
            <p>住宅・土地・投資物件の売買をトータルサポート。</p>
        </div>
        <div class="card">
            <h3>物件管理</h3>
            <p>オーナー様の物件を安全・効率的に管理いたします。</p>
        </div>
    </div>

    <div class="service-link">
        <a href="{{ route('services') }}" class="btn">詳しく見る</a>
    </div>
</section>

<section id="contact" class="section">
    <h2>お問い合わせ</h2>
    <p>物件に関するご相談やご質問など、お気軽にお問い合わせください。</p>
    <a href="{{ route('contact') }}" class="btn">お問い合わせフォームへ</a>
</section>
@endsection
