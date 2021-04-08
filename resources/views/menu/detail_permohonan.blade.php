@extends('layouts.master')
@section('title','berita')
@section('content')
<section class="wpo-blog-single-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="wpo-wpo-blog-content clearfix">
                    <div class="post">
                        <div class="entry-media">
                            <img src="../../../../assets/images/blog/img-4.jpg" alt>
                        </div>
                        <ul class="entry-meta">
                            <li><a href="#"><img src="../../../../assets/images/blog/admin.jpg" alt> By Admin</a></li>
                            <li><a href="#"><i class="ti-calendar"></i> Sep 25,2020</a></li>
                            <li><a href="#"><i class="ti-heart"></i> 35</a></li>
                        </ul>
                        <h2>Help the helpless who need you.</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web page
                            editors now.</p>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                            as opposed to using 'Content here, content here', making it look like readable English. Many
                            desktop publishing packages and web page editors now.</p>
                        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                        </blockquote>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web page
                            editors now.</p>
                        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                            as opposed to using 'Content here, content here', making it look like readable English. Many
                            desktop publishing packages and web page editors now.</p>
                    </div>
                    <div class="tag-share clearfix">
                        <div class="tag">
                            <ul>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">SEO</a></li>
                            </ul>
                        </div>
                        <div class="share">
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- end tag-share -->
                    <div class="author-box">
                        <div class="author-avatar">
                            <a href="#" target="_blank"><img src="../../../../assets/images/blog-details/author.jpg" alt></a>
                        </div>
                        <div class="author-content">
                            <a href="#" class="author-name">Henry Joyes</a>
                            <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour, or randomised</p>
                            <div class="author-btn">
                                <a href="#">All Post From Author</a>
                            </div>
                        </div>
                    </div> <!-- end author-box -->
                    <div class="more-posts clearfix">
                        <div class="previous-post">
                            <a href="#">
                                <span class="post-control-link">Previous</span>
                            </a>
                        </div>
                        <div class="next-post">
                            <a href="0.html">
                                <span class="post-control-link">Next post</span>
                            </a>
                        </div>
                    </div> <!-- end more-posts -->
                </div>

            </div>

            <div class="col-lg-4">
                <div class="wpo-blog-sidebar p-0 w-100 m-0" style="max-width: none">
                    <div class="widget search-widget">
                        <h3>Volunteer</h3>
                        <a href="javascript(0);" class="btn-sm theme-btn">donor <i class="ti-plus"></i></a>

                    </div>
                    <div class="widget">
                        <h3>terkonfirmasi</h3>
                        <ul class="list-group mt-3">
                            <li class="border-bottom border-0 list-group-item list-group-item-action">Dapibus ac
                                facilisis
                                in</li>
                            <li class="border-bottom border-0 list-group-item list-group-item-action">Morbi leo
                                risus</li>
                            <li class="border-bottom border-0 list-group-item list-group-item-action">Porta ac
                                consectetur
                                ac</li>
                        </ul>
                    </div>

                    <div class="comments-area">
                        <div class="comments-section">
                            <h3 class="comments-title">Comments</h3>
                            <ol class="comments">
                                <li class="comment even thread-even depth-1" id="comment-1">
                                    <div id="div-comment-1">
                                        
                                        <div class="comment-main-area p-0">
                                            <div class="comment-wrapper">
                                                <div class="d-flex flex-row comments-meta">
                                                    <div style="left: 0;" class="comment-theme position-relative">
                                            <div class="comment-image"><img width="80px"
                                                    src="../../../../assets/images/blog-details/comments-author/img-1.jpg" alt>
                                            </div>
                                        </div>
                                                    <h4 class="p-3" >John Abrham <span class="comments-date">Octobor 28,2018 At
                                                            9.00am</span></h4>
                                                </div>
                                                <div class="comment-area">
                                                    <p>I will give you a complete account of the system, and expound the
                                                        actual teachings of the great explorer of the truth, </p>
                                                    <div class="comments-reply">
                                                        <a class="comment-reply-link" href="#"><i class="fa fa-reply"
                                                                aria-hidden="true"></i><span>Reply</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                            </ol>
                        </div> <!-- end comments-section -->
                    </div> <!-- end comments-area -->
                    <div class="comment-respond">
                        <h3 class="comment-reply-title">Berikan Tanggapan</h3>
                        <form method="post" id="commentform" class="comment-form">
                            <div class="form-textarea">
                                <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                            </div>
                            <div class="form-submit">
                                <input id="submit" value="Reply" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
@endsection
