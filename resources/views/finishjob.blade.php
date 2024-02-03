@extends('layouts.common')
@section('title', '実績ご紹介')
@section('content')

  <!-- Page Header Start -->
  

  <!-- Portfolio Start -->
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
  <!-- Portfolio End -->

@endsection