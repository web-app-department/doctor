@extends('postmaster')
@section('title')
   {{ $post->title }}
@endsection
@push('css')
    <style type="text/css">
        .post-social-wrapper li{
            list-style: none;
            background: #e2e2e2;
            margin-left: 5px;
            text-align: center;
            border-radius:5px;
        }
        .post-social-wrapper li span{
            font-size: 20px;
        }
        .post-social-wrapper ul li{
            display: inline-block;
            padding: 10px 10px 5px;
        }
        #social-links{
            float: left;
        }
        .card.card-white.post {padding: 10px;}
    </style>
@endpush
@section('postdettils')
<div class="container-fluid container-page-item-title-2column container-page-item-title">
    <div class="page-item-single-title-column">
       <div class="page-item-title-single">
          <div class="inhype-post-single inhype-post">
             <div class="inhype-post-details">
                <h1 class="post-title entry-title"> {{ $post->title }}</h1>
                <div class="post-author">
                   <span class="vcard">
                   By <span class="fn"><a href="#" title="Posts by {{$post->user->username}}" rel="author">{{$post->user->username}}</a></span>
                   </span>
                </div>
                <div class="post-info-dot"></div>
                <div class="post-date"><time class="entry-date published updated" datetime="2019-12-02T09:39:38+00:00">{{ $post->created_at->diffForHumans() }}</time></div>
                <div class="post-info-dot"></div>
                <div class="post-read-time">View {{ $post->view_count }}</div>
                <div class="post-details-bottom post-details-bottom-inline">
                   <div class="post-info-wrapper">
                      @guest
                         <a href="javascript:void(0);" onclick="toastr.info('To add favorite list. You need to login first.','Info',{
                                                    closeButton: true,
                                                    progressBar: true,
                                                })"><i class="ion-heart"></i>{{ $post->favorite_to_users->count() }}</a>
                      @else
                         <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();"
                            class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}"><i class="ion-heart"></i>{{ $post->favorite_to_users->count() }}</a>

                         <form id="favorite-form-{{ $post->id }}" method="POST" action="{{ route('post.favorite',$post->id) }}" style="display: none;">
                            @csrf
                         </form>
                      @endguest                   </div>
                   <div class="post-info-share">
                      <div class="post-social-wrapper">
                         <div class="post-social-title">
                             <span class="post-social-title-text">Share</span>
                         </div>
                          {!! $socialShare !!}

                          {{-- {!! Share::page($post->url, $post->title)->facebook()->twitter()->whatsapp() !!} --}}
                         <div class="clear"></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>

 </div>
<div
class="post-content clearfix">
<div
   class=entry-content>

 <figure
      class="wp-block-gallery columns-2 is-cropped">
      <ul
         class=blocks-gallery-grid>
         <li
            class=blocks-gallery-item>
            <figure><img
               src="../storage/app/public/post/{{$post->image}}" alt data-id=918 data-full-url="../storage/app/public/post/{{$post->image}}" data-link="{{url('storage/post/'.$post->image)}}" class=wp-image-918 srcset=""{{url('storage/post/'.$post->image)}} "></figure>
         </li>

      </ul>
   </figure>

   <p>{!! $post->body !!}</p>
    <!--<div-->
    <!--        class=comments-form-wrapper id=comments-form-wrapper>-->
    <!--    <div-->
    <!--            id=respond class=comment-respond>-->
    <!--        <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a-->
    <!--                        rel=nofollow id=cancel-comment-reply-link href=index.html#respond style=display:none;>Cancel reply</a></small></h3>-->

    <!--        @guest-->
    <!--            <p>For post a new comment. You need to login first. <a href="{{ route('login') }}">Login</a></p>-->
    <!--        @else-->
    <!--            <form action="{{ route('comment.store',$post->id) }}" method=post  class=comment-form>-->
    <!--                @csrf-->
    <!--                <p-->
    <!--                        class=comment-notes><span-->
    <!--                            id=email-notes>Your email address will not be published.</span> Required fields are marked <span-->
    <!--                            class=required>*</span></p>-->
    <!--                <p-->
    <!--                        class=comment-form-comment><textarea id=comment name=comment cols=45 rows=8 aria-required=true></textarea></p>-->

    <!--                <p-->
    <!--                        class=form-submit><input-->
    <!--                            name=submit type=submit id=submit class=submit value="Post comment"> <input-->
    <!--                            type=hidden name=comment_post_ID value=153 id=comment_post_ID>-->
    <!--                    <input-->
    <!--                            type=hidden name=comment_parent id=comment_parent value=0>-->
    <!--                </p>-->
    <!--            </form>-->
    <!--        @endguest-->
            
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-8 commentbody">-->
    <!--                    <h4><b>COMMENTS({{ $post->comments()->count() }})</b></h4>-->
    <!--                    @if($post->comments->count() > 0)-->
    <!--                        @foreach($post->comments as $comment)-->
    <!--                            <div class="card card-white post">-->
    <!--                                <div class="post-heading">-->
    <!--                                    <div class="float-left image">-->
    <!--                                        <img src="../storage/app/public/profile/{{$comment->user->image }}" class="img-circle avatar" alt="user profile image">-->
    <!--                                    </div>-->
    <!--                                    <div class="float-left meta">-->
    <!--                                        <div class="title h5">-->
    <!--                                            <a href="#"><b>{{ $comment->user->name }}</b></a>-->
    <!--                                            made a Comment.-->
    <!--                                        </div>-->
    <!--                                        <h6 class="text-muted time"> {{ $comment->created_at->diffForHumans()}} </h6>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <div class="post-description">-->
    <!--                                    <p>{{ $comment->comment }}</p>-->

    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        @endforeach-->
    <!--                    @else-->

    <!--                        <div class="commnets-area ">-->

    <!--                            <div class="comment">-->
    <!--                                <p>No Comment yet. Be the first :)</p>-->
    <!--                            </div>-->
    <!--                        </div>-->

    <!--                    @endif-->


    <!--                </div>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="fb-comments" data-href="{{route('postview',$post->slug)}}" data-width="" data-numposts="10"></div>
   <div
      class=shortcode-block>
      <div
         class="inhype-postsgrid4-block-wrapper inhype-postsgrid4-block-wrapper-625793 inhype-block">
         <div
            class="container container-title">
            <div
               class=row>
               <div
                  class=inhype-block-title>
                  <h3>More from DoctorInfoPateint</h3>
                  <h4>Recommended</h4>
               </div>
            </div>
         </div>

      </div>
   </div>




</div>


</div>
@endsection