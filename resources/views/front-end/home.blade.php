@extends('front-end.app')
@section('title', 'Playnhaccu khơi nguồn cảm hứng âm nhạc !')
@section('sidebar-left')
    @include('front-end.sidebar-left')
@stop
@section('content')
<div class="col-lg-6 col-md-12 col-12">
    <div class="card">
        <div class="card-header bg-info border border-info text-white">
        <i class="fa fa-music" style="font-size:19px; padding-right:10px" aria-hidden="true"></i>
            Danh sách bài viết
        </div>
        <div class="card-body">
            @foreach ($ar as $a)
                <article class="article pb-3 pt-3 border-bottom">
                    <div class="row">
                        <div class="col-lg-3 col-3">
                            <a href="/post/{{$a->category->slug}}/{{$a->slug}}">
                                <img src="images/{{$a['image']}}" class="img-fluid" alt="">
                            </a>  
                        </div>
                        <div class="col-lg-9 col-9">
                            <h4><a href="/post/{{$a->category->slug}}/{{$a->slug}}">{{$a['title']}}</a></h4>
                            <p class="pt-2 pb-2 mb-0 d-none d-sm-block">{{$a['description']}}</p>
                            <div class="icon">
                                <div class="row">
                                    <div class="col-lg-4 d-none d-sm-block">
                                        <a href=""><i class="fa fa-folder pr-1"></i>{{$a->category->name}}</a>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href=""><i class="fa fa-comment pr-1"></i>{{$a->comments->count()}} Bình luận</a>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <a href=""><i class="fa fa-eye pr-1"> {{$a->views}}</i>Lượt xem</a>
                                    </div>
                                </div>
                                <!-- End row -->
                            </div>
                            <!-- End icon -->
                            <a href="/post/{{$a->category->slug}}/{{$a->slug}}" class="btn btn-info btn-sm">Xem thêm<i class="fa fa-chevron-circle-right pl-2"></i></a>
                        </div>
                    </div>
                </article>  
            @endforeach
        </div>
    </div>
    <!-- Paginate -->
    <div class="row justify-content-md-center mt-3">
        {{$ar->links()}}    
    </div>
</div>
@stop
@section('sidebar-right')
    @include('front-end.sidebar-right')
@stop
