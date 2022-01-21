@extends('layout.app')

@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Typography </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Typography</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              @foreach($lst as $lt)
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  --
                    <h4 class="card-title">bài viết 1</h4>
                    <p class="card-description"> Chi Tiết
                    </p>
                    <div class="template-demo">
                      <form class="row g-3">
                            <div class="col-md-6">
                              <img src="..." class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-6">
                                <p class="card-text">{{$lt->nguoi_dang}}</p>
                            </div>
                            <div class="col-12">
                                 <p class="card-text">{{$lt->noi_dung}}</p>
                            </div>
                            <div class="col-12">
                                 <p class="card-text">3</p>
                            <div class="col-md-6">
                                <p class="card-text">{{$lt->ngay_dang}}</p>
                            </div>
                            <div class="col-md-4">
                                 <p class="card-text">{{$lt->id_dacsan}}</p>
                            </div>
                            <div class="col-md-2">
                                 <p class="card-text">6</p>
                            </div>
                            
                            </div>
                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-primary" type="button">Sửa </button>
                                <button class="btn btn-primary" type="button">Xoá</button>
                              </div>
                            </form>
                    </div>
                    ---
                  </div>
                </div>
              </div> @endforeach
            </div>
          </div>  
        </div>
        <!-- main-panel ends -->

@stop();


