@extends('postmaster')

@section('title')
    {{$category->name}}
@endsection
@push('css')

@endpush

@section('postdettils')
    <div class="content-block">
        <div class="container page-container">
            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-12 col-overlay">
                        <div class="container">
                            <div class="page-item-title-archive page-item-title-single">
                                <div class="category-posts-count">Total &nbsp; {{$category->posts->count()}} &nbsp; posts</div>
                                <p class="page-description">Browsing category</p>
                                <h1 class="page-title">{{$category->name}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="blog-posts-list blog-layout-overlay" id="content" role="main">
                    @foreach($postss as $post)
                        <div class=" inhype-block inhype-overlay-post col-md-12 float-left m-b--5">
                            <article id="post-153" class="post-153 post type-post status-publish format-standard has-post-thumbnail category-markets category-politics tag-adventure tag-blog tag-business tag-people tag-travel">
                                <div class="inhype-overlay-post inhype-overlay-short-post inhype-post inhype-post-invert format-standard">
                                    <div class="inhype-post-wrapper-inner">
                                        <div class="inhype-post-image" data-style="background-image: url({{url('storage/post/'.$post->image) }});" style="background-image: url({{url('storage/post/'.$post->image) }});">
                                            <div class="post-review-rating-badge headers-font" data-style="background-color: #4545e8;" style="background-color: #4545e8;">8.2</div>
                                        </div>
                                        <div class="inhype-post-details">
                                            <div class="inhype-post-details-inner">
                                                <h3 class="post-title entry-title"><a href="{{route('postview',$post->slug)}}">{{$post->title}}</a></h3>
                                                <div class="post-author">
                                    <span class="vcard">
                                    By <span class="fn"><a href="{{ route('author.profile',$post->user->username) }}" title="Posts by {{$post->user->username}}" rel="author">{{$post->user->username}}</a></span>
                                    </span>
                                                </div>
                                                <div class="post-info-dot"></div>
                                                <div class="post-date"><time class="entry-date published updated" datetime="2019-12-02T09:39:38+00:00">{{ $post->created_at->diffForHumans() }}</time></div>
                                                <div class="post-info-dot"></div>
                                                <div class="post-read-time">View &nbsp; {{ $post->view_count }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>

                    {{ $postss->links() }}
                </div>

            </div>
        </div>
    </div>

@endsection

@push('js')

@endpush