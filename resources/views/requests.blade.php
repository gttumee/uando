@extends('layouts.common')
@section('title', '私たちは')
@section('content')
    <!-- Appointment Start -->
    <div class="container-fluid bg-light py-6 px-3"> <!-- px-3 に変更 -->
        <div class="row gx-3"> 
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="display-5 text-uppercase mb-4"><span class="text-primary">{{$serviceInfo['name']}}</h1>
                    </div>
                    <p class="mb-5">{{$serviceInfo['content']}}
                    </p>    
                 </div>
                <div class="col-lg-8">
                    <div class="bg-white text-center p-4">
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
                                        <input type="text" class="form-control bg-light border-0 text-left" name="name" value="{{ old('name') }}" placeholder="例) 山田" style="height: 45px;">
                                        @error('name')
                                            <div class="text-danger"><li>{{ $message }}</li></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="mb-3 text-start">
                                        <label for="name" class="form-label">メールアドレス<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control bg-light border-0 text-left" name="email" value="{{ old('email') }}" placeholder="例) sample@demo.com" style="height: 45px;">
                                        @error('email')
                                            <div class="text-danger"><li>{{ $message }}</li></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="mb-3 text-start">
                                        <label for="name" class="form-label">電話番号<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control bg-light border-0 text-left" name="phone" value="{{ old('phone') }}" placeholder="例) 090-1234-4567" style="height: 45px;">
                                        @error('phone')
                                            <div class="text-danger"><li>{{ $message }}</li></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="mb-3 text-start">
                                        <label for="name" class="form-label">住所<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control bg-light border-0 text-left" name="address" value="{{ old('address') }}" placeholder="例) 東京都◯区◯丁目◯番地◯号" style="height: 45px;">
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
            </div>
    </div>
    @endsection
