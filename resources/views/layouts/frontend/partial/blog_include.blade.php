<div class="col-md-4 mb--50">
    <article class="post_blog format-standard p-0">
        <div class="post__inner">
            <div class="post__media">
                <figure class="image">
                    <img src="{{ url('storage/app/public/post/'.$post->image) }}" alt="post" class="w-100">
                    <a href="{{route('postview',$post->slug)}}" class="item-overlay" ></a>
                </figure>
            </div>
            <div class="post__info p-4 pt-0">
                <h2 class="post__title mb-0"><a href="{{route('postview',$post->slug)}}">{{$post->title}}</a></h2>
                <div class="post__meta">
                    <span class="posted-on">{{ $post->created_at->diffForHumans() }}</span>
                    <span class="posted-by"><span>View :</span><a href="#">&nbsp;{{$post->view_count}}</a></span>
                </div>
                <div class="post__desc" style="height: 70px;overflow: hidden;">
                    <div>{!!$post->body!!}</div>
                </div>
                <div class="post__footer-meta">
                    <a href="{{route('postview',$post->slug)}}" class="read-more-btn">Read More &raquo;</a>
                    {{-- <div class="social-share">
                        <span>Share <i class="fa fa-share-alt"></i></span>
                        <div class="social social-square space-5">
                            <a href="https://www.facebook.com/" class="social__link facebook" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-facebook"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://www.twitter.com/" class="social__link twitter" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-twitter"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://www.plus.google.com/" class="social__link gplus" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-google-plus"></i>
                                <span class="sr-only">Goggle Plus</span>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </article>                                         
</div>