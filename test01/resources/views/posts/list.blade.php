@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Blog Listing</h4>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active"><a href="/posts">Blog</a>
                    </li>
                    <li class="active">Blog Listing</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach ($posts as $key => $post)
                <!--classic image post-->
                <div class="blog-classic">
                    <div class="date">
                        24
                        <span>MAR 2015</span>
                    </div>
                    <div class="blog-post">
                        <div class="full-width">
                            <img src="/assets/img/post/p12.jpg" alt="" />
                        </div>
                        <h4 class="text-uppercase"><a href="/posts/9487">standard blog post with photo</a></h4>
                        <ul class="post-meta">
                            <li><i class="fa fa-user"></i>posted by <a href="#">admin</a>
                            </li>
                            <li><i class="fa fa-folder-open"></i>  <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a>
                            </li>
                            <li><i class="fa fa-comments"></i>  <a href="#">4 comments</a>
                            </li>
                        </ul>
                        <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <a href="/posts/9487" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
                    </div>
                </div>
                <!--classic image post-->
                @endforeach
                

                <!--pagination-->
                <div class="text-center">
                    <ul class="pagination custom-pagination">
                        <li><a href="#">Prev</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">Next</a>
                        </li>
                    </ul>
                </div>
                <!--pagination-->

            </div>
            @include('posts.right_bar')
        </div>
    </div>
</div>

@endsection