@extends('layouts.common')
@section('title', 'サービス一覧')
@section('content')
    <!-- Services Start -->
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
    <!-- Services End -->
@endsection