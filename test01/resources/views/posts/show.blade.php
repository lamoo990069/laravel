@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Blog Single</h4>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active"><a href="/posts">Blog</a>
                    </li>
                    <li class="active">Blog Single</li>
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
                <!--classic image post-->
                <div class="blog-classic">
                    <div class="blog-post">
                        <div class="full-width">
                            <img src="/assets/img/post/p12.jpg" alt="" />
                        </div>
                        <h4 class="text-uppercase"><a href="blog-single.html">standard blog post with photo</a></h4>
                        <ul class="post-meta">
                            <li><i class="fa fa-user"></i>posted by <a href="#">admin</a>
                            </li>
                            <li><i class="fa fa-folder-open"></i>  <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a>
                            </li>
                            <li><i class="fa fa-comments"></i>  <a href="#">4 comments</a>
                            </li>
                        </ul>

                        <p>Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing elit</a>. Ab adipisci architecto consequatur debitis eos eum hic illum ipsam itaque laborum magni minima molestias nostrum numquam odit officia pariatur
                            perspiciatis placeat porro quae rem, sequi sit soluta temporibus ullam voluptas voluptates. Aliquid amet architecto culpa cumque eius enim esse eum eveniet ex, fugiat illo ipsum laudantium, minima nemo porro sequi
                            tempora veritatis vero voluptate, voluptatem. Culpa ducimus est eveniet, iste iusto officiis quas repudiandae rerum sit tenetur totam voluptas? Accusamus accusantium alias aliquam aliquid animi commodi dignissimos
                            dolore doloremque dolorum exercitationem fugiat illum, iste laboriosam maiores molestiae nam odio officia officiis omnis optio placeat quaerat quia quibusdam quis quo ratione sapiente sed sequi sit tenetur unde
                            ut veniam voluptas! Dicta, voluptatum!</p>

                        <div class="blog-post">
                            <blockquote class="quote-post">
                                <p>
                                    Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error
                                </p>
                            </blockquote>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at debitis deleniti dignissimos ea enim iste laboriosam nihil omnis possimus quia, tempora, totam voluptatibus! Animi consectetur dolor in laboriosam
                            unde.</p>

                        
                        <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>


                        <div class="inline-block">

                            <div class="widget-tags">
                                <h6 class="text-uppercase">Tags </h6>
                                <a href="">Portfolio</a>
                                <a href="">Design</a>
                                <a href="">Link</a>
                                <a href="">Gallery</a>
                                <a href="">Video</a>
                                <a href="">Clean</a>
                                <a href="">Retina</a>
                            </div>
                        </div>


                        <div class="clearfix inline-block m-top-50 m-bot-50">
                            <h6 class="text-uppercase">Share this Post </h6>
                            <div class="widget-social-link circle">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>


                        <div class="pagination-row">

                            <div class="pagination-post">
                                <div class="prev-post">
                                    <a href="#">
                                        <div class="arrow">
                                            <i class="fa fa-angle-double-left"></i>
                                        </div>
                                        <div class="pagination-txt">
                                            <span>Previous Post</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="post-list-link">
                                    <a href="#">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </div>

                                <div class="next-post">
                                    <a href="#">
                                        <div class="arrow">
                                            <i class="fa fa-angle-double-right"></i>
                                        </div>
                                        <div class="pagination-txt">
                                            <span>Next Post</span>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>


                        <!--comments discussion section start-->

                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h4 class="text-uppercase">5 Comments</h4>
                        </div>

                        <ul class="media-list comments-list m-bot-50 clearlist">

                            <!-- Comment Item start-->
                            <li class="media">

                                <a class="pull-left" href="#">
                                    <img class="media-object comment-avatar" src="/assets/img/post/a1.png" alt="" width="50" height="50">
                                </a>

                                <div class="media-body">
                                    <div class="comment-info">
                                        <div class="comment-author">
                                            <a href="#">John Doe</a>
                                        </div>
                                        July 02, 2015, at 11:34
                                        <a href="#"><i class="fa fa-comment-o"></i>Reply</a>
                                    </div>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                    </p>

                                    <!--  second level Comment start-->
                                    <div class="media">

                                        <a class="pull-left" href="#">
                                            <img class="media-object comment-avatar" src="/assets/img/post/a1.png" alt="" width="50" height="50">
                                        </a>

                                        <div class="media-body">

                                            <div class="comment-info">
                                                <div class="comment-author">
                                                    <a href="#">Maragarita Rose</a>
                                                </div>
                                                July 02, 2015, at 11:34
                                                <a href="#"><i class="fa fa-comment-o"></i>Reply</a>
                                            </div>

                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                            </p>


                                            <!-- third level Comment start -->
                                            <div class="media">

                                                <a class="pull-left" href="#">
                                                    <img class="media-object comment-avatar" src="/assets/img/post/a1.png" alt="" width="50" height="50">
                                                </a>

                                                <div class="media-body">

                                                    <div class="comment-info">
                                                        <div class="comment-author">
                                                            <a href="#">Margarita Rose</a>
                                                        </div>
                                                        July 02, 2015, at 11:34
                                                        <a href="#"><i class="fa fa-comment-o"></i>Reply</a>
                                                    </div>

                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                                    </p>


                                                </div>

                                            </div>
                                            <!-- third level Comment end -->

                                        </div>

                                    </div>
                                    <!-- second level Comment end -->

                                </div>

                            </li>
                            <!-- End Comment Item -->

                            <!-- Comment Item start-->
                            <li class="media">

                                <a class="pull-left" href="#">
                                    <img class="media-object comment-avatar" src="/assets/img/post/a1.png" alt="" width="50" height="50">
                                </a>

                                <div class="media-body">

                                    <div class="comment-info">
                                        <div class="comment-author">
                                            <a href="#">John Doe</a>
                                        </div>
                                        July 02, 2015, at 11:34
                                        <a href="#"><i class="fa fa-comment-o"></i>Reply</a>
                                    </div>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                    </p>

                                </div>

                            </li>
                            <!-- End Comment Item -->

                            <!-- Comment Item start-->
                            <li class="media">

                                <a class="pull-left" href="#">
                                    <img class="media-object comment-avatar" src="/assets/img/post/a1.png" alt="" width="50" height="50">
                                </a>

                                <div class="media-body">

                                    <div class="comment-info">
                                        <div class="comment-author">
                                            <a href="#">John Doe</a>
                                        </div>
                                        July 02, 2015, at 11:34
                                        <a href="#"><i class="fa fa-comment-o"></i>Reply</a>
                                    </div>

                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
                                    </p>

                                </div>

                            </li>
                            <!-- End Comment Item -->

                        </ul>

                        <!--comments discussion section end-->

                        <!--comments  section start-->

                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h4 class="text-uppercase">Leave a Comments</h4>
                        </div>

                        <form method="post" action="#" id="form" role="form" class="blog-comments">

                            <div class="row">

                                <div class="col-md-6 form-group">
                                    <!-- Name -->
                                    <input type="text" name="name" id="name" class=" form-control" placeholder="Name *" maxlength="100" required="">
                                </div>

                                <div class="col-md-6 form-group">
                                    <!-- Email -->
                                    <input type="email" name="email" id="email" class=" form-control" placeholder="Email *" maxlength="100" required="">
                                </div>


                                <div class="form-group col-md-12">
                                    <!-- Website -->
                                    <input type="text" name="website" id="website" class=" form-control" placeholder="Website" maxlength="100">
                                </div>

                                <!-- Comment -->
                                <div class="form-group col-md-12">
                                    <textarea name="text" id="text" class=" form-control" rows="6" placeholder="Comment" maxlength="400"></textarea>
                                </div>

                                <!-- Send Button -->
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-small btn-dark-solid ">
                                        Send comment
                                    </button>
                                </div>


                            </div>

                        </form>

                        <!--comments  section end-->



                    </div>
                </div>
                <!--classic image post-->

            </div>
            @include('posts.right_bar')
        </div>
    </div>
</div>

@endsection