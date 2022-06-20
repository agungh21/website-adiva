@extends('themes.ljn.layouts')
@section('content')
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area mt-4">
            <div class="container" style="background: white;">
                <div class="row">
                    <div class="col-lg-8 mt-4 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-3">

                            </div>
                            <div class="col-lg-9">
                                <div class="feature-img">
                                        {{-- <img class="img-fluid" src="{{ $post->thumbnailLink() }}" alt=""> --}}
                                </div>
                            </div>
                            <div class="col-lg-3  col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        {{-- {!! $post->tagsHtml() !!} --}}
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li>Agung<i class="lnr lnr-user"></i></li>
                                        {{-- <li>{{ $post->modifiedAt()}}<i class="lnr lnr-calendar-full"></i></li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 blog_details mb-4">
                                {{-- {!! $post->content !!} --}}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 mt-4">
                        <div class="blog_right_sidebar">
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
