@extends('layouts.common')
@section('title', '無料ゴミ回収')
@section('content')
<div class="container-fluid bg-light py-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4">無料ゴミ回収</h1>
    </div>
    <div class="row g-5">
        <div class="container mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>品名</th>
                        <th>種類・状態</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trashcoll as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->type}}</td>
                        <td>
                            <button class="btn btn-primary" onclick="showImage('{{ asset('img/' . $item->image1) }}')">画像表示</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- モーダルの修正 -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">画像表示</h5>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close">Close</button>
                    </div>
                    <div class="modal-body">
                        <img src="" alt="画像" id="modalImage" style="width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>      
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>  
        <script>
            function showImage(imageUrl) {
                var modalImage = document.getElementById('modalImage');
                modalImage.src = imageUrl;
                $('#myModal').modal('show');
            }
            $(document).ready(function () {
           $('#close').on('click', function () {
               $('#myModal').modal('hide');
           });
    });
        </script>
    </div>
</div>
@endsection
