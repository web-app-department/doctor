@extends('layouts.frontend.app')

@section('title','Pofile')
@push('css')
    <link href="{{ asset('assets/frontend/css/profile/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/profile/responsive.css') }}" rel="stylesheet">
    <style>
        .favorite_posts{
            color: blue;
        }
        .blog-style-corners-rounded .author-bio .author-image, .blog-style-corners-rounded .comment-author img {
            border-radius: 0px!important;
        }
    </style>
@endpush

@section('content')


    <div class="container container-page-item-title" data-style="" data-speed="0.1" style="">
        <div class="row">
            <div class="col-md-12 col-overlay">
                <div class="container">
                    <div class="page-item-title-archive page-item-title-single">
                        <div class="author-bio">
                            <div class="author-image-wrapper">
                                <div class="author-image">
                                    <a href="#"><img src="{{url('storage/profile/'.$author->image)}}" width="90" height="90" alt="Inhype" class="avatar avatar-90 wp-user-avatar wp-user-avatar-90 alignnone photo"></a>
                                </div>
                                <div class="author-posts">{{ $author->posts->count() }} posts</div>
                            </div>
                            <div class="author-info">
                                <h3><span class="vcard author"><span class="fn"><a href="#" title="Posts by {{ $author->name }} " rel="author">{{ $author->name }}</a></span></span></h3>
                                <h5>About author</h5>
                                <div class="author-description">{{ $author->about }}</div>
                                <strong>Author Since: {{ $author->created_at }}</strong><br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="content-block clearfix">
        <div class="inhype-blog-block-wrapper page-container container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-posts-list blog-layout-grid inhype-blog-col-3" id="content">
                        @foreach($posts as $post)
                            <div class="blog-post inhype-block inhype-grid-post">
                                <article id="post-93" class="post-93 post type-post status-publish format-standard has-post-thumbnail category-politics tag-adventure tag-blog tag-business tag-people tag-travel">
                                    <div class="inhype-grid-post inhype-post format-standard">
                                        <div class="inhype-post-image-wrapper">
                                            <a href="{{ route('postview',$post->slug) }}">
                                                <div class="inhype-post-image" data-style="background-image: url({{url('storage/post/'.$post->image) }});" style="background-image: url({{url('storage/post/'.$post->image) }});"></div>
                                            </a>
                                        </div>
                                        <div class="inhype-post-details">
                                            <h3 class="post-title entry-title"><a href="{{ route('postview',$post->slug) }}">{{$post->title}}</a></h3>
                                            <div class="post-author">
                              <span class="vcard">
                              By <span class="fn"><a href="{{ route('author.profile',$post->user->username) }}" title="Posts by {{$post->user->username}}" rel="author">{{$post->user->username}}</a></span>
                              </span>
                                            </div>
                                            <div class="post-info-dot"></div>
                                            <div class="post-date"><time class="entry-date published updated" datetime="2019-11-25T09:33:15+00:00">{{ $post->created_at->diffForHumans() }}</time></div>
                                            <div class="post-info-dot"></div>
                                            <div class="post-read-time">View &nbsp; {{ $post->view_count }}</div>
                                            <div class="post-info-dot"></div>
                                            <div class="post-read-time">Comment &nbsp; {{ $post->comments->count() }}</div>
                                        </div>
                                        <div class="post-excerpt show-read-more">{!!$post->body!!}</div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="paginate text-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
















@endsection

@push('js')

@endpush