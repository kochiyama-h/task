@extends('layouts.app')

@section('content')
<section class="services-page">
    <div class="container">
        <h1>事業内容</h1>
        <p class="intro">RealEstate Co.では、お客様のライフスタイルに合わせて、賃貸・売買・管理の3つのサービスを提供しています。</p>

        {{-- 賃貸仲介 --}}
        <section class="service-section">
            <h2>賃貸仲介</h2>
            <p>理想のお部屋探しを、豊富な物件情報と経験豊富なスタッフがサポートします。</p>

            <div class="rental-list">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="rental-item">
                        <img src="{{ asset('images/rent'.$i.'.jpg') }}" alt="賃貸物件{{ $i }}">
                        <p>〇〇線〇〇駅 徒歩5分<br>東京都世田谷区〇〇<br>築5年 / 2階建て</p>
                    </div>
                @endfor
            </div>
        </section>

        {{-- 売買サポート --}}
        <section class="service-section bg-light">
            <h2>売買サポート</h2>
            <p>不動産の売買に関するお悩みを、経験豊富なスタッフがサポートします。</p>

            <h3>こんなお悩みありませんか？</h3>
            <div class="problem-cards">
                <div class="card">希望価格で売れるか不安</div>
                <div class="card">購入までの手続きが複雑そう</div>
                <div class="card">ローンや税金の知識がなくて不安</div>
            </div>

            <h3>このようなご提案で解決します</h3>
            <p>専門スタッフが査定から契約・引渡しまでを丁寧にサポート。<br>安心・安全な不動産取引を実現します。</p>
        </section>

        {{-- 物件管理 --}}
        <section class="service-section">
            <h2>物件管理</h2>
            <div class="management">
                <div class="management-image">
                    <img src="{{ asset('images/manage.jpg') }}" alt="物件管理">
                </div>
                <div class="management-text">
                    <p>
                        オーナー様の大切な資産を、入居から退去、設備管理まで一貫してサポートいたします。
                        入居者対応や修繕管理など、安心してお任せいただける体制を整えています。
                    </p>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection
