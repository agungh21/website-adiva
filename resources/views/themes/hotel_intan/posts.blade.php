@extends('themes.hotel_intan.layouts')
@section('content')
        <!--================Blog Area =================-->
        <section class="blog_area mt-4">
            <div class="container" style="background: white;">
                <div class="row">
                    <div class="col-lg-8 mt-4">
                        <div class="blog_left_sidebar">
                            <?php
                                $activePage = isset($_GET['page']) ? $_GET['page'] : 1;
                                $posts = getPosts($activePage);
                            ?>
                            @foreach ($posts as $p)
                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            {!! $p->tagsHtml() !!}
                                        </div>
                                        <ul class="blog_meta list_style">
                                            <li>{{ $p->createdByName() }} <i class="lnr lnr-user"></i></li>
                                            <li>{{ $p->modifiedAt()}} <i class="lnr lnr-calendar-full"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="blog_post">
                                                <img src="{{ $p->thumbnailLink() }}" alt="post-image">
                                                <div class="blog_details">
                                                    <a href="/{{ $p->fullSlug() }}"><h2>{{ $p->title}}</h2></a>
                                                    <p>{!! substr($p->content, 0, 300).'...' !!}</p>
                                                    <a href="/{{ $p->fullSlug() }}" class="view_btn button_hover">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <?php
                                        $limit = setting('posts_per_page', 5);
                                        $amountOfPosts = \App\Models\Post::count();
                                        $config = [
                                            'limit_per_page'    => $limit,
                                            'amount_of_items'   => $amountOfPosts,
                                            'active_page'       => $activePage,
                                            'link'              => route('website.posts').'?page={number}',
                                            'open_tag'          => '<li class="page-item"><a href="{link}" class="page-link">',
                                            'close_tag'         => '</a></li>',
                                            'open_tag_on_active'=> '<li class="page-item"><a href="javascript:void(0);" class="page-link">',
                                            'prev_button_text'  => '<span aria-hidden="true"> <span class="lnr lnr-chevron-left"></span> </span>',
                                            'next_button_text'  => '<span aria-hidden="true"> <span class="lnr lnr-chevron-right"></span> </span>',

                                        ];
                                        $paginationHtml = pagination($config);
                                    ?>
                                    {!! $paginationHtml !!}
                                </ul>
                            </nav>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 mt-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Post Catgories</h4>
                                <ul class="list_style cat-list">
                                    @foreach (App\Models\PostCategory::all() as $pc)
                                        <li>
                                            <a href="#" class="d-flex justify-content-between">
                                                <p>{{ $pc->category_name }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </aside>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

@endsection
