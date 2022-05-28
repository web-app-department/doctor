@extends('layouts.frontend.app')

@push('css')
   <style>
      .col-8.commentbody {
         border: solid 1px #ddd;
         padding: 20px;
         width: 65%;
      }

      .card.card-white.post {border-bottom: 1px solid #ddd;margin-top: 10px;}
      .float-left.image img {
         width: 50px;
         height: 50px;
      }
      @media (max-width: 991px) {
         .col-8.commentbody {
            border: solid 1px #ddd;
            padding: 20px;
            width: 100%;
         }
      }
      .tags {
         list-style: none;
         margin: 0;
         overflow: hidden;
         padding: 0;
      }

      .tags li {
         float: left;
      }

      .tag {
         background: #eee;
         border-radius: 3px 0 0 3px;
         color: #999;
         display: inline-block;
         height: 26px;
         line-height: 26px;
         padding: 0 20px 0 23px;
         position: relative;
         margin: 0 10px 10px 0;
         text-decoration: none;
         -webkit-transition: color 0.2s;
      }

      .tag::before {
         background: #fff;
         border-radius: 10px;
         box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
         content: '';
         height: 6px;
         left: 10px;
         position: absolute;
         width: 6px;
         top: 10px;
      }

      .tag::after {
         background: #fff;
         border-bottom: 13px solid transparent;
         border-left: 10px solid #eee;
         border-top: 13px solid transparent;
         content: '';
         position: absolute;
         right: 0;
         top: 0;
      }

      .tag:hover {
         background-color: crimson;
         color: white;
      }

      .tag:hover::after {
         border-left-color: crimson;
      }
   </style>
@endpush

@section('content')


<div
         class="content-block post-header-inheader3 post-sidebar-right">
     
         <div
            class="post-container container span-col-md-12">
            <div
               class=row>
               <div
                  class=col-md-8>
                  <div
                     class="blog-post blog-post-single hentry clearfix">
                     <article
                        id=post-153 class="post-153  type-post status-publish format-standard has-post-thumbnail category-markets category-politics tag-adventure tag-blog tag-business tag-people tag-travel" role=main>
                        <div
                           class=post-content-wrapper>


@yield('postdettils')


                          
                        </div>
                     </article>


                     <div
                             class="blog-post-related-wrapper clearfix">
                        <h5>Related posts</h5>
                        @foreach($randomposts as $randompost)
                        <div style="margin-top: 10px;"
                                class="mt-3 inhype-list-post inhype-list-medium-post inhype-post format-standard">
                           <div
                                   class=inhype-post-image-wrapper>
                              
                              <a
                                      href="{{ route('postview',$randompost->slug) }}">
                                 <div
                                         class=inhype-post-image data-style="background-image: url({{ url('storage/app/public/post/'.$randompost->image) }});"></div>
                              </a>
                           </div>
                           <div
                                   class=inhype-post-details>

                              <h3 class="post-title entry-title"><a
                                         href="{{ route('postview',$randompost->slug) }}">{{ $randompost->title }}</a></h3>
                              <div
                                      class=post-author>
                              <span
                                      class=vcard>
                              By <span
                                         class=fn><a
                                            href="#" title="Posts by {{$randompost->user->username}}" rel=author>{{$randompost->user->username}}</a></span>
                              </span>
                              </div>
                              <div
                                      class=post-info-dot></div>
                              <div
                                      class=post-date><time
                                         class="entry-date published updated" datetime=2019-11-26T13:26:04+00:00>{{ $randompost->created_at->diffForHumans() }}</time></div>
                              <div
                                      class=post-info-dot></div>
                              <div
                                      class=post-read-time>View &nbsp; {{$randompost->view_count}}</div>
                              <div
                                      class="post-excerpt show-read-more" >{!! $randompost->body !!}</div>
                           </div>
                        </div>
                        @endforeach
                     </div>



                  </div>
               </div>
               <div
                  class="col-md-4 post-sidebar sidebar sidebar-right" role=complementary>
                  <ul
                     id=post-sidebar>
                     <li
                        id=inhype-text-6 class="widget widget_inhype_text">
                        <div
                           class="inhype-textwidget-wrapper ">
                           <div
                              class=inhype-textwidget data-style="background-color: #f7f7f7;padding: 50px 40px 50px 40px;">
                              <h5>Hello i am, {{$post->user->name}}<img
                                 src="{{ url('storage/app/public/profile/'.$post->user->image) }}" style="float:right;width: 50px;height:50px;margin-left:30px;" alt></h5>
                              <p>{{ $post->user->about }}</p>

                           </div>
                        </div>
                     </li>
                     <li
                        id=inhype-list-posts-4 class="widget widget_inhype_list_entries">
                        <h2 class="widgettitle">Trending</h2>
                        <ul
                           class=template-2col-inside>
                      @foreach($posts as $post)
                           <li
                              class=template-2col>
                              <div
                                 class="inhype-grid-post inhype-grid-short-post inhype-post format-gallery">
                                 <div
                                    class=inhype-post-image-wrapper>
                                    <a
                                       href="{{route('postview',$post->slug)}}" >
                                       <div
                                          class=inhype-post-image data-style="background-image: url({{ url('storage/app/public/post/'.$post->image) }});">
                                          <div
                                             class=inhype-post-format-icon></div>
                                       </div>
                                    </a>
                                 </div>
                                 <div
                                    class=inhype-post-details>

                                    <h3 class="post-title entry-title"><a
                                       href="{{route('postview',$post->slug)}}" >{{$post->title}}</a></h3>
                                    <div
                                       class=post-date><time
                                       class="entry-date published updated" datetime=2019-12-10T09:46:03+00:00>{{ $post->created_at->diffForHumans() }}</time></div>
                                    <div
                                       class=post-info-dot></div>
                                    <div
                                       class=post-read-time>View &nbsp; {{ $post->view_count }}</div>
                                 </div>
                              </div>
                           </li>
                           @endforeach
                        </ul>
                     </li>


                     <li
                        id=inhype-categories-2 class="widget widget_inhype_categories">
                        <h2 class="widgettitle">Categories</h2>
                        <div
                           class=post-categories-list>
                           @foreach($categories as $categorie)
                              <div
                                      class="inhype-post inhype-image-wrapper with-bg">
                                 <a
                                         href="{{ route('category.posts',$categorie->slug) }}" class=inhype-featured-category-link>
                                    <div
                                            class="post-categories-image inhype-image" data-style="background-image: url({{url('storage/app/public/category/'.$categorie->image)}});"></div>
                                    <div
                                            class=post-categories-overlay>
                                       <div
                                               class=post-categories-bg data-style="background-color: #ed7e4f;"></div>
                                       <div
                                               class=post-categories>
                                          <div
                                                  class=post-category><span
                                                     class=cat-dot data-style="background-color: #ed7e4f;"></span><span
                                                     class=cat-title>{{$categorie->name}}</span></div>
                                       </div>
                                       <span
                                               class=post-categories-counter>{{$categorie->posts->count()}} Posts</span>
                                    </div>
                                 </a>
                              </div>
                           @endforeach
                        </div>
                     </li>
                     <li
                        id=inhype-categories-2 class="widget widget_inhype_categories">
                        <h2 class="widgettitle">Tag</h2>
                        <div
                           class=post-categories-list>
                           @foreach($alltag as $tag)
                              <ul class="tags">

                                 <li><a href="{{ route('tag.posts',$tag->slug) }}" class="tag">{{$tag->name}}</a></li>


                              </ul>
                           @endforeach
                        </div>
                     </li>
                   
                  </ul>
               </div>
            </div>
         </div>

      </div>
@endsection