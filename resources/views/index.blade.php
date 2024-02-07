@extends('layouts.common')
@section('title', 'ホーム')
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
    <div class="container-fluid bg-light py-6 px-3"> <!-- px-3 に変更 -->
        <div class="row gx-3"> 
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="display-5 text-uppercase mb-4"><span class="text-primary">無料で</span>見積り </h1>
                    </div>
                    <p class="mb-5">私たちは、お客様のニーズに合わせて柔軟なサービスを提供することを大切にしています。遺品整理、引っ越し、掃除など、さまざまなサービスに関して、無料で見積もりを提供しております。
                    </p>
                 </div>
                <div class="col-lg-8">
                    <div class="bg-white text-center p-4">
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
                                    <div class="mb-3 text-start">
                                        <label for="name" class="form-label">お名前<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control bg-light border-0 text-left" name="name" placeholder="例) 山田" value="{{ old('name') }}" style="height: 45px;">
                                        @error('name')
                                            <div class="text-danger"><li>{{ $message }}</li></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="mb-3 text-start">
                                        <label for="name" class="form-label">メールアドレス<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control bg-light border-0 text-left" name="email" placeholder="例) sample@demo.com" value="{{ old('email') }}" style="height: 45px;">
                                        @error('email')
                                            <div class="text-danger"><li>{{ $message }}</li></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="mb-3 text-start">
                                        <label for="name" class="form-label">電話番号<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control bg-light border-0 text-left" name="phone" placeholder="例) 090-1234-4567" value="{{ old('phone') }}" style="height: 45px;">
                                        @error('phone')
                                            <div class="text-danger"><li>{{ $message }}</li></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="mb-3 text-start">
                                        <label for="name" class="form-label">住所<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control bg-light border-0 text-left" name="address" placeholder="例) 東京都◯区◯丁目◯番地◯号" value="{{ old('address') }}" style="height: 45px;">
                                        @error('address')
                                            <div class="text-danger"><li>{{ $message }}</li></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 text-start">
                                        <label for="name" class="form-label">作業内容・希望日付等<span class="text-danger"> *</span></label>
                                        <textarea class="form-control bg-light border-0" rows="5" name="content">{{ old('content') }}</textarea>
                                        @error('content')
                                        <div class="text-danger"><li>{{ $message }} </li></div>
                                       @enderror
                                    </div>
                                </div>                              
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">無料で見積り</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </select>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">サービス一覧</h1>
        </div>
        <div class="row g-5">
            @foreach ($allService as $item)
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="{{ asset('img/' . $item->image)}}" alt="">
                    <div class="service-icon bg-white">
                      <i class="fa-solid fa-check-to-slot"></i>
                        <i class="fa fa-3x fa-solid fa-check text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">{{$item->name}}</h4>
                        <p>{{$item->content}}</p>
                        <form method="post" action="{{ route('workrequest', ['id' => $item->id]) }}">
                          @csrf
                          <button class="btn text-primary" type="submit">無料で見積りはこちら</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">実績ご紹介</h1>
        </div>
        <div class="row g-5 portfolio-container">
          @foreach ($allFinishJob as $item)
          <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
            <div class="position-relative portfolio-box">
                <img class="img-fluid w-100" src="{{ asset('img/' . $item->image1)}}" alt="">
                <a class="portfolio-title shadow-sm" href="">
                    <p class="h4 text-uppercase">{{$item->title}}</p>
                    <span class="text-body"><i class="far fa-calendar-alt text-primary me-2"></i>{{$item->date}}</span>
                    <span class="text-body"><i class="fa fa-solid fa-clipboard text-primary me-2"></i>{{$item->content}}</span>
                </a>
                <a class="portfolio-btn" href="{{ asset('img/' . $item->image2)}}" data-lightbox="portfolio">
                    <i class="bi bi-plus text-white"></i>
                </a>
            </div>
        </div>
          @endforeach
        </div>
    </div>
@endsection