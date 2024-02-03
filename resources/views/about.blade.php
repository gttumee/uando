@extends('layouts.common')
@section('title', '私たちは')
@section('content')

    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-6 text-uppercase mb-4">私たちは、大切な瞬間や場所に関わる作業を通じて <span class="text-primary">お客様</span> の人生をサポートすることを使命としています</h1>
                <p>私たちは、大切な瞬間や場所に関わる作業を通じて、お客様の人生をサポートすることを使命としています。引っ越し、遺品整理、掃除といった重要な局面で、私たちがお手伝いすることで負担を軽減し、安心感を提供しま</p>
                <div class="row gx-5 py-2">
                    引っ越しサービス
                    新しいステージへの移行がスムーズに行えるよう、経験豊富なチームが最高のサポートを致します。梱包から家具の運搬、新居への設置まで、お客様のニーズに合わせたカスタマイズされたサービスを提供しています。
                    
                    遺品整理
                    大切な方の遺品整理は感情的なプロセスであり、そのプロセスを尊重しサポートします。丁寧かつ迅速に、お客様のご要望に応じて遺品の整理や処分を行います。専門家が丁寧に対応し、心を込めてサポート致します。
                    
                    掃除サービス
                    新居や現地の掃除を行い、清潔な環境を提供します。徹底的な清掃を通じて、快適なスタートをサポートします。プロフェッショナルな清掃チームが、お客様の期待を上回る品質をお届けします。
                    
                    私たちのサービスは、お客様のニーズに合わせた柔軟性と、信頼と安心を提供することを重視しています。お気軽にご相談ください。私たちがお手伝いさせていただけることを心より願っております。
                </div>
                <p class="mb-4">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos labore</p>
                <img src="img/signature.jpg" alt="">
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="img/a_bout.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-light py-6 px-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="display-5 text-uppercase mb-4"><span class="text-primary">無料で</span>見積り </h1>
                    </div>
                    <p class="mb-5">私たちは、お客様のニーズに合わせて柔軟なサービスを提供することを大切にしています。遺品整理、引っ越し、掃除など、さまざまなサービスに関して、無料で見積もりを提供しております。
                    </p>
                 </div>
                <div class="col-lg-8">
                    <div class="bg-white text-center p-5">
                        <div class="bg-white text-center p-5">
                         @if (session('success'))
                         <div class="alert alert-success">
                            {{ session('success') }}
                         </div>
                           @endif
                        <form method="POST" action="{{ route('requestcreate') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" name="name" value="{{ old('name') }}" placeholder="お名前" style="height: 55px;">
                                    @error('name')
                                    <div class="text-danger"><li>{{ $message }} </li></div>
                                   @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" name="email" value="{{ old('email') }}" placeholder="メールアドレス" style="height: 55px;">
                                    @error('email')
                                    <div class="text-danger"><li>{{ $message }} </li></div>
                                   @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 "
                                            placeholder="電話番号" value="{{ old('phone') }}"  name="phone" style="height: 55px;">
                                            @error('phone')
                                    <div class="text-danger"><li>{{ $message }} </li></div>
                                   @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="住所" name="address" value="{{ old('address') }}" style="height: 55px;">
                                    </div>
                                    @error('address')
                                    <div class="text-danger"><li>{{ $message }} </li></div>
                                   @enderror
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="5" name="content" placeholder="作業内容・希望日付等">{{ old('content') }}</textarea>
                                    @error('content')
                                    <div class="text-danger"><li>{{ $message }} </li></div>
                                   @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">無料で見積り</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection