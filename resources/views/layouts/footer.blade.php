    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>U&O</h1>
                </a>
                <p>私たちは、大切な瞬間や場所に関わる作業を通じて お客様 の人生をサポートすることを使命としています</p>
                <p><i class="fa fa-map-marker-alt me-2"></i>東京都墨田区横川1-14-5</p>
                <p><i class="fa fa-phone-alt me-2"></i>+03-6335-4945</p>
                <p><i class="fa fa-envelope me-2"></i>info@u-and-o.jp</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-white text-uppercase mb-4">リンク</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="{{route('index')}}"><i class="fa fa-angle-right me-2"></i>ホーム</a>
                            <a class="text-white-50 mb-2" href="{{route('service')}}"><i class="fa fa-angle-right me-2"></i>サービス一覧</a>
                            <a class="text-white-50 mb-2" href="{{route('finishjob')}}"><i class="fa fa-angle-right me-2"></i>実績ご紹介</a>
                            <a class="text-white-50" href="{{route('trashcoll')}}"><i class="fa fa-angle-right me-2"></i>無料引き取りゴミ</a>
                            <a class="text-white-50" href="{{route('contact')}}"><i class="fa fa-angle-right me-2"></i>問い合わせ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="py-4 px-5 text-center text-md-start">
                <p class="mb-0">&copy; <a class="text-primary" href="#">U&O合同会社</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('lib/lightbox/js/lightbox.min.js') }}" rel="stylesheet">
    <link href="{{ asset('lib/isotope/isotope.pkgd.min.js') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}" rel="stylesheet">
    <link href="{{ asset('llib/tempusdominus/js/moment-timezone.min.js') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/js/moment.min.js') }}" rel="stylesheet">
    <link href="{{ asset('llib/owlcarousel/owl.carousel.min.js') }}" rel="stylesheet">
    <link href="{{ asset('lib/waypoints/waypoints.min.js') }}" rel="stylesheet">
    <link href="{{ asset('lib/easing/easing.min.js') }}" rel="stylesheet">
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>