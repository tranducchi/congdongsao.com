
<div class="col-lg-3 col-md-12 col-12">
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
               <h3><i class="fa fa-star text-danger pr-2" aria-hidden="true" style=""></i>Bài viết mới nhất</h3> 
            </div>
            <div class="card-body">
                @foreach ($new_post as $p)
                <div class="top-article">
                <a href="">{{$p->name}}</a>
                            <i class="fa fa-eye text-danger ">{{$p->views}} lượt xem</i>
                <i class="fa fa-user"><a href="" class="text-secondary">{{$p->user->name}}</a></i>
                </div>
               @endforeach
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>
                    <i class="fa fa-star text-warning pr-2" aria-hidden="true" style=""></i>Bài viết được xem nhiều
                </h3>
               
            </div>
            <div class="card-body">
               <div class="top-article">
                   <a href="">Có em trong đời co duoc hay </a>
                   <i class="fa fa-eye text-danger ">120 lượt xem</i>
                   <i class="fa fa-user"><a href="" class="text-secondary">Chi Tran</a></i>
               </div>
               <div class="top-article">
                   <a href="">Châu Việt Cường - Đời dân chơi</a>
                   <i class="fa fa-eye text-danger ">10 lượt xem</i>
                   <i class="fa fa-user"><a href="" class="text-secondary">Hoang Anh</a></i>
               </div>
               <div class="top-article">
                   <a href="">Châu Việt Cường - Đời dân chơi</a>
                   <i class="fa fa-eye text-danger ">10 lượt xem</i>
                   <i class="fa fa-user"><a href="" class="text-secondary">Mao Meo</a></i>
               </div>
            </div>
        </div>
        <!-- End card -->
    </div>
</div>
