@extends('layouts.common')
@section('title', '問い合わせ')

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-2">質問がございましたらお問い合わせください</h1>
        </div>
        <div class="row gx-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0" style="height: 600px;">
                <iframe class="w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.615804565467!2d139.8188083147694!3d35.707707737936396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d9f1ac8e7f9%3A0x94aae54b0e4a1571!2s1-ch%C5%8Dme-14-5%20Yokokawa%2C%20Sumida%20City%2C%20Tokyo%20131-0032%2C%20Japan!5e0!3m2!1sen!2sbd!4v1640528587318!5m2!1sen!2sbd"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-6">
                @if (session('success'))
          <div class="alert alert-success">
        {{ session('success') }}
    </div>
         @endif
         <div class="contact-form bg-light p-3" style="max-width: 100%;">
            <form method="POST" action="{{ route('contact') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="name" class="form-label">お名前<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control border-0" name="name" placeholder="例) 山田" value="{{ old('name') }}" style="height: 45px;">
                        @error('name')
                            <div class="text-danger"><li>{{ $message }}</li></div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">メールアドレス<span class="text-danger"> *</span></label>
                        <input type="email" class="form-control border-0" name="email" placeholder="例) sample@demo.com" value="{{ old('email') }}" style="height: 45px;">
                        @error('email')
                            <div class="text-danger"><li>{{ $message }}</li></div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="phone" class="form-label">電話番号<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control border-0" name="phone" placeholder="例) 090-1234-4567" value="{{ old('phone') }}" style="height: 45px;">
                        @error('phone')
                            <div class="text-danger"><li>{{ $message }}</li></div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">お問い合わせ内容<span class="text-danger"> *</span></label>
                        <textarea class="form-control border-0" rows="4" name="message">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="text-danger"><li>{{ $message }}</li></div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">送信</button>
                    </div>
                </div>
            </form>
        </div>
        
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection