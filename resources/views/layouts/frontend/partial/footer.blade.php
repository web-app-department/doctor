  <div
         class="footer-sidebar-2-wrapper footer-white">
         <div
            class="footer-sidebar-2 sidebar container footer-sidebar-2-container">
            <ul
               id=footer-sidebar-2>
               <li
                  id=inhype-text-4 class="widget widget_inhype_text">
                  <div
                     class="inhype-textwidget-wrapper ">
                     <h2 class="widgettitle">About</h2>
                     <div
                        class=inhype-textwidget data-style="padding: 0px 30px 0px 0px;">
                        <p>DoctorInfoPateint effective Hospital - best Hospital is perfect for Pateint Treatment  </p>
                        <p>Rangpur, Bangladesh <br>
                           0170000000<br>
                           
                        </p>
                        <a
                           class=btn href='{{route('about')}}'>About</a>
                     </div>
                  </div>
               </li>
               <li
                  id=inhype-list-posts-7 class="widget widget_inhype_list_entries">
                  <h2 class="widgettitle">Latest</h2>
                  <ul
                     class=template-text-inside>
                    @foreach($footerposts as $post)
                     <li
                        class=template-text>
                        <div
                           class="inhype-text-post inhype-post">

                           <div
                              class=inhype-post-details>
                              <h3 class="post-title entry-title"><a
                                 href="{{route('postview',$post->slug)}}" >{{$post->title}}</a></h3>
                              <div
                                 class=post-author>
                                 <span
                                    class=vcard>
                                 By <span
                                    class=fn><a
                                    href="{{ route('author.profile',$post->user->username) }}" title="Posts by {{$post->user->username}}" rel=author>{{$post->user->username}}</a></span>
                                 </span>
                              </div>
                              <div
                                 class=post-info-dot></div>
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
                  id=nav_menu-2 class="widget widget_nav_menu">
                  <h2 class="widgettitle">Catagoris</h2>
                  <div
                     class=menu-footer-menu-2-container>
                     <ul
                        id=menu-footer-menu-2 class=menu>
                        @foreach($categories as $category)
                        <li
                           id=menu-item-797 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-797"><a href="{{ route('category.posts',$category->slug) }}">{{ $category->name }}</a></li>
                        @endforeach
                     </ul>
                  </div>
               </li>
               <li
                  id=inhype-text-5 class="widget widget_inhype_text">
                  <div
                     class="inhype-textwidget-wrapper ">
                     <h2 class="widgettitle">Subscribe</h2>
                     <div
                        class=inhype-textwidget data-style="background-color: #eeeeee;padding: 30px;">
                        <p>Get a bi-weekly digest newsletter</p>
                      
                        <form
                           id=mc4wp-form-2 class="mc4wp-form mc4wp-form-17" method=post data-id=17 data-name=Subscribe action="{{ route('subscriber.store') }}" >
                           @csrf
                           <div
                              class=mc4wp-form-fields>
                              <div
                                 class=mailchimp-widget-signup-form><input
                                 type=email name=email placeholder="Please enter your e-mail" required><button
                                 type=submit class='submit-btn btn'>Subscribe
                                 </button>
                              </div>
                           </div>
                           <label
                              style="display: none !important;">Leave this field empty if you're human: <input
                              type=text name=_mc4wp_honeypot value tabindex=-1 autocomplete=off></label><input
                              type=hidden name=_mc4wp_timestamp value=1628869536><input
                              type=hidden name=_mc4wp_form_id value=17><input
                              type=hidden name=_mc4wp_form_element_id value=mc4wp-form-2>
                           <div
                              class=mc4wp-response></div>
                        </form>
                     
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <div
         class=footer-wrapper>
         <footer
            class=footer-white>
            <div
               class=container>
               <div
                  class=footer-bottom>
                  <div
                     class=footer-copyright>
                     
                  </div>


                  <div
                     class=footer-social>
                     <div class="footermenu">
                        <ul>
                           <li
                                   id=mgt-menu-item-453 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                      href="{{route('about')}}" >About</a></li>
                           <li
                                   id=mgt-menu-item-452 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                      href="{{route('contact')}}" >Contact</a></li>
                           <li
                                   id=mgt-menu-item-453 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                      href="{{route('privacy_policy')}}" >Privacy Policy</a></li>
                           <li
                                   id=mgt-menu-item-452 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                      href="{{route('terms_and_condition')}}" >Terms of service</a></li>
                           <li
                                   id=mgt-menu-item-452 class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                      href="{{route('faq')}}" >Faq</a></li>
                        </ul>
                     </div>
                     <div
                        class="social-icons-wrapper social-icons-with-bg"><a
                        href=https://twitter.com/magniumthemes target=_blank class="a-facebook no-description"><i
                        class="fa fa-facebook"></i></a><a
                        href=https://twitter.com/magniumthemes target=_blank class="a-twitter no-description"><i
                        class="fa fa-twitter"></i></a><a
                        href=https://twitter.com/magniumthemes target=_blank class="a-instagram no-description"><i
                        class="fa fa-instagram"></i></a><a
                        href=# target=_blank class="a-youtube no-description"><i
                        class="fa fa-youtube"></i></a></div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <a
         class="scroll-to-top btn" aria-label="Scroll to top" href=#top></a>
      <style>body.logged-in .lrm-hide-if-logged-in{display:none !important}body.logged-in [class*='lrm-hide-if-logged-in']{display:none !important}body:not(.logged-in) .lrm-show-if-logged-in{display:none !important}body:not(.logged-in) [class*='lrm-show-if-logged-in']{display:none !important}@font-face{font-family:'lrm-fa4-icomoon';font-weight:normal;font-style:normal;src:url('{{asset('assets/theme/plugins')}}/ajax-login-and-registration-modal-popup/assets/lrm-fa4/fonts/lrm-fa4-icomoone2c9.eot?i8nbsv');src:url('{{asset('assets/theme/plugins')}}/ajax-login-and-registration-modal-popup/assets/lrm-fa4/fonts/lrm-fa4-icomoone2c9.eot?i8nbsv#iefix') format('embedded-opentype'),
         url('{{asset('assets/theme/plugins')}}/ajax-login-and-registration-modal-popup/assets/lrm-fa4/fonts/lrm-fa4-icomoone2c9.ttf?i8nbsv') format('truetype'),
         url('{{asset('assets/theme/plugins')}}/ajax-login-and-registration-modal-popup/assets/lrm-fa4/fonts/lrm-fa4-icomoone2c9.woff?i8nbsv') format('woff'),
         url('{{asset('assets/theme/plugins')}}/ajax-login-and-registration-modal-popup/assets/lrm-fa4/fonts/lrm-fa4-icomoone2c9.svg?i8nbsv#lrm-fa4-icomoon') format('svg')}[class^="lrm-ficon-"]:before,[class*=" lrm-ficon-"]:before{font-family:'lrm-fa4-icomoon' !important}
      </style>
      <div
         class="lrm-main lrm-font-fa4 lrm-is-font lrm-user-modal" style="visibility: hidden;">
         <div
            class=lrm-user-modal-container>
            <ul
               class="lrm-switcher -is-not-login-only">
               <li><a
                  href=#0 class="lrm-switch-to-link lrm-switch-to--login lrm-ficon-login ">
                  Sign in </a>
               </li>
               <li><a
                  href=#0 class="lrm-switch-to-link lrm-switch-to--register lrm-ficon-register ">
                  New account </a>
               </li>
            </ul>
            <div
               class="lrm-signin-section ">
               <form
                  class="naeem " method="POST" action="{{ route('login') }}" >
                  @csrf
                 
                  <div
                     class=fieldset>
                     <label
                        class="image-replace lrm-email lrm-ficon-mail" title="Email "></label>
                     <input
                     name="email"  class="full-width has-padding has-border {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" aria-label="Email" placeholder="Email " required value autocomplete=username data-autofocus=1  required autofocus>
                     @if ($errors->has('email'))
                     <span class="invalid-feedback">
                     <strong>{{ $errors->first('email') }}</strong>
                 </span>
                 @endif
                  
                     <span
                        class=lrm-error-message></span>
                  </div>
                  <div
                     class=fieldset>
                     <label
                        class="image-replace lrm-password lrm-ficon-key" title=Password></label>
                     <input
                        name=password class="full-width has-padding has-border {{ $errors->has('password') ? ' is-invalid' : '' }}" type=password aria-label=Password placeholder=Password required value>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                        <span
                        class=lrm-error-message></span>
                     <span
                        class="hide-password lrm-ficon-eye" data-show=Show data-hide=Hide aria-label=Show></span>
                  </div>
                  <div
                     class=fieldset>
                     <label
                        class="lrm-nice-checkbox__label lrm-remember-me-checkbox">
                        Remember me <input
                           type=checkbox class="lrm-nice-checkbox lrm-remember-me"  name="remember" {{ old('remember') ? 'checked' : '' }} checked>
                        <div
                           class=lrm-nice-checkbox__indicator></div>
                     </label>
                  </div>
                 
                  <div
                     class="">
                     <button
                        class="full-width has-padding" type=submit>
                     Log in </button>
                  </div>
                 
{{--                  <div--}}
{{--                     class=social-login-wrapper>--}}
{{--                     <div--}}
{{--                        class=social-login-text> - OR -</div>--}}
{{--                     <div--}}
{{--                        class="nsl-container nsl-container-block" data-align=left>--}}
{{--                        <div--}}
{{--                           class=nsl-container-buttons>--}}
{{--                           <a--}}
{{--                              href="https://www.facebook.com/v3.2/dialog/oauth?response_type=code&amp;client_id=670684743007598&amp;redirect_uri=https%3A%2F%2Fwp.wp-preview.com%2Finhype%2Finhype-2%2Fwp-login.php%3FloginSocial%3Dfacebook&amp;state=1ee6d5fa2e9c597d53695e2643f0dced&amp;scope=public_profile%2Cemail" rel=nofollow aria-label="Continue with &lt;b&gt;Facebook&lt;/b&gt;" data-plugin=nsl data-action=connect data-provider=facebook data-popupwidth=475 data-popupheight=175>--}}
{{--                              <span--}}
{{--                                 class="nsl-button nsl-button-default nsl-button-facebook" style=background-color:#4267b2;>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-svg-container>--}}
{{--                                    <svg--}}
{{--                                       xmlns=http://www.w3.org/2000/svg>--}}
{{--                                       <path--}}
{{--                                          fill=#fff d="M22.688 0H1.323C.589 0 0 .589 0 1.322v21.356C0 23.41.59 24 1.323 24h11.505v-9.289H9.693V11.09h3.124V8.422c0-3.1 1.89-4.789 4.658-4.789 1.322 0 2.467.1 2.8.145v3.244h-1.922c-1.5 0-1.801.711-1.801 1.767V11.1h3.59l-.466 3.622h-3.113V24h6.114c.734 0 1.323-.589 1.323-1.322V1.322A1.302 1.302 0 0 0 22.688 0z"/>--}}
{{--                                    </svg>--}}
{{--                                 </span>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-label-container>Continue with <b>Facebook</b></span>--}}
{{--                              </span>--}}
{{--                           </a>--}}
{{--                           <a--}}
{{--                              href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;client_id=1090980968899-7860t92djtmad34emkiitlg4qai32v35.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fwp.wp-preview.com%2Finhype%2Finhype-2%2Fwp-login.php%3FloginSocial%3Dgoogle&amp;state=ce99aba9f7eaaa215a702198c3057376&amp;scope=email+profile&amp;access_type=offline&amp;prompt=select_account" rel=nofollow aria-label="Continue with &lt;b&gt;Google&lt;/b&gt;" data-plugin=nsl data-action=connect data-provider=google data-popupwidth=600 data-popupheight=600>--}}
{{--                              <span--}}
{{--                                 class="nsl-button nsl-button-default nsl-button-google" data-skin=uniform style=background-color:#dc4e41;>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-svg-container>--}}
{{--                                    <svg--}}
{{--                                       xmlns=http://www.w3.org/2000/svg width=24 height=24 viewBox="0 0 24 24">--}}
{{--                                       <path--}}
{{--                                          fill=#fff fill-rule=evenodd d="M11.988,14.28 L11.988,9.816 L23.22,9.816 C23.388,10.572 23.52,11.28 23.52,12.276 C23.52,19.128 18.924,24 12,24 C5.376,24 -9.47390314e-15,18.624 -9.47390314e-15,12 C-9.47390314e-15,5.376 5.376,0 12,0 C15.24,0 17.952,1.188 20.028,3.132 L16.62,6.444 C15.756,5.628 14.244,4.668 12,4.668 C8.028,4.668 4.788,7.968 4.788,12.012 C4.788,16.056 8.028,19.356 12,19.356 C16.596,19.356 18.288,16.176 18.6,14.292 L11.988,14.292 L11.988,14.28 Z"/>--}}
{{--                                    </svg>--}}
{{--                                 </span>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-label-container>Continue with <b>Google</b></span>--}}
{{--                              </span>--}}
{{--                           </a>--}}
{{--                           <a--}}
{{--                              href="https://api.twitter.com/oauth/authenticate?oauth_token=T-mAkwAAAAAAY6jVAAABe0BghV4" rel=nofollow aria-label="Continue with &lt;b&gt;Twitter&lt;/b&gt;" data-plugin=nsl data-action=connect data-provider=twitter data-popupwidth=600 data-popupheight=600>--}}
{{--                              <span--}}
{{--                                 class="nsl-button nsl-button-default nsl-button-twitter" style=background-color:#4ab3f4;>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-svg-container>--}}
{{--                                    <svg--}}
{{--                                       xmlns=http://www.w3.org/2000/svg>--}}
{{--                                       <path--}}
{{--                                          fill=#fff d="M16.327 3.007A5.07 5.07 0 0 1 20.22 4.53a8.207 8.207 0 0 0 2.52-.84l.612-.324a4.78 4.78 0 0 1-1.597 2.268 2.356 2.356 0 0 1-.54.384v.012A9.545 9.545 0 0 0 24 5.287v.012a7.766 7.766 0 0 1-1.67 1.884l-.768.612a13.896 13.896 0 0 1-9.874 13.848c-2.269.635-4.655.73-6.967.276a16.56 16.56 0 0 1-2.895-.936 10.25 10.25 0 0 1-1.394-.708L0 20.023a8.44 8.44 0 0 0 1.573.06c.48-.084.96-.06 1.405-.156a10.127 10.127 0 0 0 2.956-1.056 5.41 5.41 0 0 0 1.333-.852 4.44 4.44 0 0 1-1.465-.264 4.9 4.9 0 0 1-3.12-3.108c.73.134 1.482.1 2.198-.096a3.457 3.457 0 0 1-1.609-.636A4.651 4.651 0 0 1 .953 9.763c.168.072.336.156.504.24.334.127.68.22 1.033.276.216.074.447.095.673.06H3.14c-.248-.288-.653-.468-.901-.78a4.91 4.91 0 0 1-1.105-4.404 5.62 5.62 0 0 1 .528-1.26c.008 0 .017.012.024.012.13.182.28.351.445.504a8.88 8.88 0 0 0 1.465 1.38 14.43 14.43 0 0 0 6.018 2.868 9.065 9.065 0 0 0 2.21.288 4.448 4.448 0 0 1 .025-2.28 4.771 4.771 0 0 1 2.786-3.252 5.9 5.9 0 0 1 1.093-.336l.6-.072z"/>--}}
{{--                                    </svg>--}}
{{--                                 </span>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-label-container>Continue with <b>Twitter</b></span>--}}
{{--                              </span>--}}
{{--                           </a>--}}
{{--                        </div>--}}
{{--                     </div>--}}
{{--                  </div>--}}
               </form>
               <p
                  class=lrm-form-bottom-message><a
                  href=#0 class=lrm-switch-to--reset-password>Forgot your password?</a></p>
            </div>
            <div
               class="lrm-signup-section ">
               <form
                  class="naeem"  method="POST" action="{{ route('register') }}">
                  @csrf

                  <p
                     class="lrm-form-message lrm-form-message--init"></p>
                  <div
                     class="fieldset fieldset--username">
                     <label
                        class="image-replace lrm-username lrm-ficon-user" for=signup-username title=Name*></label>
                     <input
                        name="name" class="full-width has-padding has-border {{ $errors->has('name') ? ' is-invalid' : '' }}" id=signup-username type=text placeholder=Name* required aria-label=Username* autocomplete=off data-lpignore=true>
                     @if ($errors->has('name'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                     @endif
                     <span
                        class=lrm-error-message></span>
                  </div>
                  <div
                     class="fieldset fieldset--username">
                     <label
                        class="image-replace lrm-username lrm-ficon-user" for=signup-username title=Username*></label>
                     <input
                        name="username" class="full-width has-padding has-border {{ $errors->has('username') ? ' is-invalid' : '' }}" id=signup-username type=text placeholder=Username* required aria-label=Username* autocomplete=off data-lpignore=true>
                     @if ($errors->has('username'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                     @endif
                     <span
                        class=lrm-error-message></span>
                  </div>

                  <div
                     class="fieldset fieldset--email">
                     <label
                        class="image-replace lrm-email lrm-ficon-mail" for=signup-email title=Email*></label>
                     <input
                        name=email class="full-width has-padding has-border {{ $errors->has('email') ? ' is-invalid' : '' }}" id=signup-email type=email placeholder=Email* required autocomplete=off aria-label=Email*>
                     @if ($errors->has('email'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                     @endif

                     <span
                        class=lrm-error-message></span>
                  </div>
                  <div
                     class="fieldset fieldset--email">
                     <label
                        class="image-replace lrm-email lrm-ficon-mail" for=signup-email title=Password*></label>
                     <input
                       type="password" name="password" class="full-width has-padding has-border {{ $errors->has('password') ? ' is-invalid' : '' }}" id=signup-email type=email placeholder=Password* required autocomplete=off aria-label=password*>
                     @if ($errors->has('password'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                     @endif

                     <span
                        class=lrm-error-message></span>
                  </div>
                  <div
                     class="fieldset fieldset--email">
                     <label
                        class="image-replace lrm-email lrm-ficon-mail" for=signup-email title="Confirm Password*"></label>
                     <input
                       type="password" name="password_confirmation" class="full-width has-padding has-border {{ $errors->has('password') ? ' is-invalid' : '' }}" id=signup-email type=email placeholder="Confirm Password*" required autocomplete=off aria-label="Confirm Password*">
                     @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                     @endif

                     <span
                        class=lrm-error-message></span>
                  </div>

                  <div
                     class="lrm-integrations lrm-integrations--register"></div>
                  <div
                     class="fieldset fieldset--terms">
                     <label
                        class="lrm-nice-checkbox__label lrm-accept-terms-checkbox">
                        I agree with the <a
                           href="#" >Privacy policy</a>. <input
                           type=checkbox class="lrm-nice-checkbox lrm-accept-terms" name=registration_terms value=yes>
                        <span
                           class=lrm-error-message></span>
                        <div
                           class=lrm-nice-checkbox__indicator></div>
                     </label>
                  </div>
                  <div
                     class="lrm-integrations lrm-integrations--register lrm-info lrm-info--register"></div>
                  <div
                     class="fieldset fieldset--submit">
                     <button
                        class="full-width has-padding" type=submit>
                     Create account </button>
                  </div>


{{--                  <div--}}
{{--                     class=social-login-wrapper>--}}
{{--                     <div--}}
{{--                        class=social-login-text> - OR -</div>--}}
{{--                     <div--}}
{{--                        class="nsl-container nsl-container-block" data-align=left>--}}
{{--                        <div--}}
{{--                           class=nsl-container-buttons>--}}
{{--                           <a--}}
{{--                              href="https://www.facebook.com/v3.2/dialog/oauth?response_type=code&amp;client_id=670684743007598&amp;redirect_uri=https%3A%2F%2Fwp.wp-preview.com%2Finhype%2Finhype-2%2Fwp-login.php%3FloginSocial%3Dfacebook&amp;state=1ee6d5fa2e9c597d53695e2643f0dced&amp;scope=public_profile%2Cemail" rel=nofollow aria-label="Continue with &lt;b&gt;Facebook&lt;/b&gt;" data-plugin=nsl data-action=connect data-provider=facebook data-popupwidth=475 data-popupheight=175>--}}
{{--                              <span--}}
{{--                                 class="nsl-button nsl-button-default nsl-button-facebook" style=background-color:#4267b2;>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-svg-container>--}}
{{--                                    <svg--}}
{{--                                       xmlns=http://www.w3.org/2000/svg>--}}
{{--                                       <path--}}
{{--                                          fill=#fff d="M22.688 0H1.323C.589 0 0 .589 0 1.322v21.356C0 23.41.59 24 1.323 24h11.505v-9.289H9.693V11.09h3.124V8.422c0-3.1 1.89-4.789 4.658-4.789 1.322 0 2.467.1 2.8.145v3.244h-1.922c-1.5 0-1.801.711-1.801 1.767V11.1h3.59l-.466 3.622h-3.113V24h6.114c.734 0 1.323-.589 1.323-1.322V1.322A1.302 1.302 0 0 0 22.688 0z"/>--}}
{{--                                    </svg>--}}
{{--                                 </span>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-label-container>Continue with <b>Facebook</b></span>--}}
{{--                              </span>--}}
{{--                           </a>--}}
{{--                           <a--}}
{{--                              href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;client_id=1090980968899-7860t92djtmad34emkiitlg4qai32v35.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fwp.wp-preview.com%2Finhype%2Finhype-2%2Fwp-login.php%3FloginSocial%3Dgoogle&amp;state=ce99aba9f7eaaa215a702198c3057376&amp;scope=email+profile&amp;access_type=offline&amp;prompt=select_account" rel=nofollow aria-label="Continue with &lt;b&gt;Google&lt;/b&gt;" data-plugin=nsl data-action=connect data-provider=google data-popupwidth=600 data-popupheight=600>--}}
{{--                              <span--}}
{{--                                 class="nsl-button nsl-button-default nsl-button-google" data-skin=uniform style=background-color:#dc4e41;>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-svg-container>--}}
{{--                                    <svg--}}
{{--                                       xmlns=http://www.w3.org/2000/svg width=24 height=24 viewBox="0 0 24 24">--}}
{{--                                       <path--}}
{{--                                          fill=#fff fill-rule=evenodd d="M11.988,14.28 L11.988,9.816 L23.22,9.816 C23.388,10.572 23.52,11.28 23.52,12.276 C23.52,19.128 18.924,24 12,24 C5.376,24 -9.47390314e-15,18.624 -9.47390314e-15,12 C-9.47390314e-15,5.376 5.376,0 12,0 C15.24,0 17.952,1.188 20.028,3.132 L16.62,6.444 C15.756,5.628 14.244,4.668 12,4.668 C8.028,4.668 4.788,7.968 4.788,12.012 C4.788,16.056 8.028,19.356 12,19.356 C16.596,19.356 18.288,16.176 18.6,14.292 L11.988,14.292 L11.988,14.28 Z"/>--}}
{{--                                    </svg>--}}
{{--                                 </span>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-label-container>Continue with <b>Google</b></span>--}}
{{--                              </span>--}}
{{--                           </a>--}}
{{--                           <a--}}
{{--                              href="https://api.twitter.com/oauth/authenticate?oauth_token=p3M8agAAAAAAY6jVAAABe0Bgp_c" rel=nofollow aria-label="Continue with &lt;b&gt;Twitter&lt;/b&gt;" data-plugin=nsl data-action=connect data-provider=twitter data-popupwidth=600 data-popupheight=600>--}}
{{--                              <span--}}
{{--                                 class="nsl-button nsl-button-default nsl-button-twitter" style=background-color:#4ab3f4;>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-svg-container>--}}
{{--                                    <svg--}}
{{--                                       xmlns=http://www.w3.org/2000/svg>--}}
{{--                                       <path--}}
{{--                                          fill=#fff d="M16.327 3.007A5.07 5.07 0 0 1 20.22 4.53a8.207 8.207 0 0 0 2.52-.84l.612-.324a4.78 4.78 0 0 1-1.597 2.268 2.356 2.356 0 0 1-.54.384v.012A9.545 9.545 0 0 0 24 5.287v.012a7.766 7.766 0 0 1-1.67 1.884l-.768.612a13.896 13.896 0 0 1-9.874 13.848c-2.269.635-4.655.73-6.967.276a16.56 16.56 0 0 1-2.895-.936 10.25 10.25 0 0 1-1.394-.708L0 20.023a8.44 8.44 0 0 0 1.573.06c.48-.084.96-.06 1.405-.156a10.127 10.127 0 0 0 2.956-1.056 5.41 5.41 0 0 0 1.333-.852 4.44 4.44 0 0 1-1.465-.264 4.9 4.9 0 0 1-3.12-3.108c.73.134 1.482.1 2.198-.096a3.457 3.457 0 0 1-1.609-.636A4.651 4.651 0 0 1 .953 9.763c.168.072.336.156.504.24.334.127.68.22 1.033.276.216.074.447.095.673.06H3.14c-.248-.288-.653-.468-.901-.78a4.91 4.91 0 0 1-1.105-4.404 5.62 5.62 0 0 1 .528-1.26c.008 0 .017.012.024.012.13.182.28.351.445.504a8.88 8.88 0 0 0 1.465 1.38 14.43 14.43 0 0 0 6.018 2.868 9.065 9.065 0 0 0 2.21.288 4.448 4.448 0 0 1 .025-2.28 4.771 4.771 0 0 1 2.786-3.252 5.9 5.9 0 0 1 1.093-.336l.6-.072z"/>--}}
{{--                                    </svg>--}}
{{--                                 </span>--}}
{{--                                 <span--}}
{{--                                    class=nsl-button-label-container>Continue with <b>Twitter</b></span>--}}
{{--                              </span>--}}
{{--                           </a>--}}
{{--                        </div>--}}
{{--                     </div>--}}
{{--                  </div>--}}
               </form>
            </div>
            <div
               class="lrm-reset-password-section ">
               <form
                  class=lrm-form action=#0 data-action=lost-password>
                  <p
                     class=lrm-form-message>Lost your password? Please enter your email address. You will receive mail with link to set new password.</p>
                  <div
                     class=fieldset>
                     <label
                        class="image-replace lrm-email lrm-ficon-mail" title="Email or Username"></label>
                     <input
                        class="full-width has-padding has-border" name=user_login type=text required placeholder="Email or Username" data-autofocus=1 aria-label="Email or Username">
                     <span
                        class=lrm-error-message></span>
                  </div>
                  <div
                     class="lrm-integrations lrm-integrations--reset-pass"></div>
                  <input
                     type=hidden name=lrm_action value=lostpassword>
                  <input
                     type=hidden name=wp-submit value=1>
                  <input
                     type=hidden id=security-lostpassword name=security-lostpassword value=6b08b01910><input
                     type=hidden name=_wp_http_referer value=/inhype/inhype-2/ >
                  <div
                     class="fieldset fieldset--submit">
                     <button
                        class="full-width has-padding" type=submit>
                     Reset password </button>
                  </div>
                  <span
                     class=wpcf7-submit style="display: none;"></span>
               </form>
               <p
                  class=lrm-form-bottom-message><a
                  href=#0 class=lrm-switch-to--login>Back to login</a></p>
            </div>
            <a
               href=#0 class=lrm-close-form>close</a>
         </div>
      </div>
  <script>var c = document.body.className;
         c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
         document.body.className = c;
      </script> <script src={{asset('assets/theme/assets/minify')}}/854f4.js></script> <script>var LRM = {"password_zxcvbn_js_src":"https:\/\/wp.wp-preview.com\/inhype\/inhype-2\/wp-includes\/js\/zxcvbn.min.js","password_strength_lib":null,"redirect_url":"","ajax_url":"https:\/\/wp.wp-preview.com\/inhype\/inhype-2\/?lrm=1","is_user_logged_in":"","reload_after_login":null,"selectors_mapping":{"login":"","register":""},"is_customize_preview":"","l10n":{"password_is_good":"Good Password","password_is_strong":"Strong Password","password_is_short":"Too Short Password","password_is_bad":"Bad Password","passwords_is_mismatch":"Passwords is mismatch!"}};</script> <script src={{asset('assets/theme/assets/minify')}}/470e9.js></script> <script>var wpcf7 = {"apiSettings":{"root":"https:\/\/wp.wp-preview.com\/inhype\/inhype-2\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};</script> <script src={{asset('assets/theme/assets/minify')}}/751c2.js></script> <script>var ctcc_vars = {"expiry":"30","method":"1","version":"1"};</script> <script src={{asset('assets/theme/assets/minify')}}/31fb5.js></script> <script>var wc_add_to_cart_params = {"ajax_url":"\/inhype\/inhype-2\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/inhype\/inhype-2\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/wp.wp-preview.com\/inhype\/inhype-2\/cart\/","is_cart":"","cart_redirect_after_add":"no"};</script> <script src={{asset('assets/theme/assets/minify')}}/c58cf.js></script> <script>var woocommerce_params = {"ajax_url":"\/inhype\/inhype-2\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/inhype\/inhype-2\/?wc-ajax=%%endpoint%%"};</script> <script src={{asset('assets/theme/assets/minify')}}/9882c.js></script> <script>var wc_cart_fragments_params = {"ajax_url":"\/inhype\/inhype-2\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/inhype\/inhype-2\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_641df48e57ac913a9f2dcc392edeba39","fragment_name":"wc_fragments_641df48e57ac913a9f2dcc392edeba39","request_timeout":"5000"};</script> <script src={{asset('assets/theme/assets/minify')}}/4c63e.js></script> <script>/*<![CDATA[*/var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":"https:\/\/wp.wp-preview.com\/inhype\/inhype-2\/wp-includes\/js\/thickbox\/loadingAnimation.gif"};/*]]>*/</script> <script src={{asset('assets/theme/assets/minify')}}/2b07d.js></script> <script>(function($){
         $(document).ready(function($) {
         
           "use strict";
         
           $("body").on("click", ".inhype-post .post-like-button", function(e){
         
             e.preventDefault();
             e.stopPropagation();
         
             var postlikes = $(this).next(".post-like-counter").text();
             var postid = $(this).data("id");
         
             if(getCookie("inhype-likes-for-post-"+postid) == 1) {
               // Already liked
             } else {
         
               setCookie("inhype-likes-for-post-"+postid, "1", 365);
         
               $(this).children("i").attr("class", "fa fa-heart");
         
               $(this).next(".post-like-counter").text(parseInt(postlikes) + 1);
         
               var data = {
                   action: "inhype_likes",
                   postid: postid,
               };
         
               var ajaxurl = "wp-admin/admin-ajax.html";
         
               $.post( ajaxurl, data, function(response) {
         
                   var wpdata = response;
         
               });
             }
         
           });
         
         });
         })(jQuery);
         (function($){
               $(document).ready(function() {
         
                   "use strict";
         
                   var owlpostslider = $(".inhype-postline-block.inhype-postline-block-133711 .owl-carousel").owlCarousel({
                       loop: true,
                       items: 1,
                       autoplay: true,
                       autowidth: false,
                       autoplaySpeed: 1000,
                       navSpeed: 5000,
                       nav: false,
                       dots: false,
                       navText: false,
                       responsive: {
                           1199:{
                               items:1
                           },
                           979:{
                               items:1
                           },
                           768:{
                               items:1
                           },
                           479:{
                               items:1
                           },
                           0:{
                               items:1
                           }
                       }
                   });
         
                   AOS.refresh();
         
               });})(jQuery);
         (function($){
                     $(document).ready(function() {
                         "use strict";
         
                         var current_page_334201 = 1;
         
                         $(".inhype-postsgrid4-block-wrapper-334201 .btn-load-more").on("click", function(e){
         
                           e.preventDefault();
                           e.stopPropagation();
         
                           var button = $(this),
                               data = {
                               "action": "inhype_loadmore",
                               "query": {"orderby":"date","order":"DESC","meta_key":"_inhype_post_promoted","meta_value":"on","posts_per_page":3,"post_type":"post","post_status":"publish","ignore_sticky_posts":true,"suppress_filters":0,"error":"","m":"","p":0,"post_parent":"","subpost":"","subpost_id":"","attachment":"","attachment_id":0,"name":"","pagename":"","page_id":0,"second":"","minute":"","hour":"","day":0,"monthnum":0,"year":0,"w":0,"category_name":"","tag":"","cat":"","tag_id":"","author":"","author_name":"","feed":"","tb":"","paged":0,"preview":"","s":"","sentence":"","title":"","fields":"","menu_order":"","embed":"","category__in":[],"category__not_in":[],"category__and":[],"post__in":[],"post__not_in":[],"post_name__in":[],"tag__in":[],"tag__not_in":[],"tag__and":[],"tag_slug__in":[],"tag_slug__and":[],"post_parent__in":[],"post_parent__not_in":[],"author__in":[],"author__not_in":[],"cache_results":true,"update_post_term_cache":true,"lazy_load_term_meta":true,"update_post_meta_cache":true,"nopaging":false,"comments_per_page":"50","no_found_rows":false},
                               "page" : current_page_334201,
                               "block" : "postsgrid4",
                               "post_template" : "grid-short"
                           };
         
                           var button_default_text = button.text();
         
                           $.ajax({
                               url : "https://wp.wp-preview.com/inhype/inhype-2/wp-admin/admin-ajax.php", // AJAX handler
                               data : data,
                               type : "POST",
                               beforeSend : function ( xhr ) {
                                   button.text("Loading...");
                                   button.addClass("btn-loading");
                               },
                               success : function( data ){
                                   if( data ) {
                                       button.text( button_default_text );
                                       button.removeClass("btn-loading");
         
                                       // Insert new posts
                                       $(".inhype-postsgrid4-block-wrapper-334201 .inhype-block-button").before(data);
         
                                       // Show images
                                       $(".inhype-postsgrid4-block-wrapper-334201 .inhype-post-image").each(function( index ) {
                                         $(this).attr("style", ($(this).attr("data-style")));
                                       });
         
                                       // Show categories colors
                                       $(".inhype-postsgrid4-block-wrapper-334201 .inhype-post .post-categories a").each(function( index ) {
                                         $(this).attr("style", ($(this).attr("data-style")));
                                       });
         
                                       // Show rating badges
                                       $(".inhype-postsgrid4-block-wrapper-334201 .inhype-post .post-review-rating-badge").each(function( index ) {
                                         $(this).attr("style", ($(this).attr("data-style")));
                                       });
         
                                       current_page_334201++;
         
                                       if ( current_page_334201 == 2 )
                                           button.remove(); // if last page, remove the button
         
                                   } else {
                                       button.remove(); // if no data, remove the button
                                   }
                               }
                           });
                         });
         
                     });})(jQuery);
         (function($){
               $(document).ready(function() {
         
                   var owlpostslider = $(".inhype-carousel-block.inhype-carousel-block-559028 .owl-carousel").owlCarousel({
                       loop: true,
                       items: 4,
                       autoplay: true,
                       autowidth: false,
                       autoplaySpeed: 500,
                       navSpeed: 500,
                       margin: 30,
                       nav: false,
                       dots: false,
                       navText: false,
                       slideBy: 4,
                       responsive: {
                           1199:{
                               items:4,
                               slideBy: 4
                           },
                           979:{
                               items:4,
                               slideBy: 4
                           },
                           768:{
                               items:2,
                               slideBy: 1
                           },
                           479:{
                               items:1,
                               slideBy: 1
                           },
                           0:{
                               items:1,
                               slideBy: 1
                           }
                       }
                   });
         
                   AOS.refresh();
         
               });})(jQuery);
         (function($){
                     $(document).ready(function() {
         
                         "use strict";
         
                         var owlpostslider = $(".inhype-posthighlight-block.inhype-posthighlight-block-116439.owl-carousel").owlCarousel({
                             loop: true,
                             items: 1,
                             autoplay: true,
                             autowidth: false,
                             autoplaySpeed: 1000,
                             navSpeed: 1000,
                             nav: true,
                             dots: false,
                             navText: false,
                             responsive: {
                                 1199:{
                                     items:1
                                 },
                                 979:{
                                     items:1
                                 },
                                 768:{
                                     items:1
                                 },
                                 479:{
                                     items:1
                                 },
                                 0:{
                                     items:1
                                 }
                             }
                         });
         
                         AOS.refresh();
         
                     });})(jQuery);
         (function($){
           $(document).ready(function() {
               "use strict";
         
               var current_page = 1;
         
               $(".blog-posts-list + .inhype-block-button .btn-load-more").on("click", function(e){
         
                 e.preventDefault();
                 e.stopPropagation();
         
                 var button = $(this),
                     data = {
                     "action": "inhype_loadmore",
                     "query": {"orderby":"date","order":"DESC","posts_per_page":8,"post_type":"post","post_status":"publish","ignore_sticky_posts":true,"suppress_filters":0,"error":"","m":"","p":0,"post_parent":"","subpost":"","subpost_id":"","attachment":"","attachment_id":0,"name":"","pagename":"","page_id":0,"second":"","minute":"","hour":"","day":0,"monthnum":0,"year":0,"w":0,"category_name":"","tag":"","cat":"","tag_id":"","author":"","author_name":"","feed":"","tb":"","paged":0,"meta_key":"","meta_value":"","preview":"","s":"","sentence":"","title":"","fields":"","menu_order":"","embed":"","category__in":[],"category__not_in":[],"category__and":[],"post__in":[],"post__not_in":[],"post_name__in":[],"tag__in":[],"tag__not_in":[],"tag__and":[],"tag_slug__in":[],"tag_slug__and":[],"post_parent__in":[],"post_parent__not_in":[],"author__in":[],"author__not_in":[],"cache_results":true,"update_post_term_cache":true,"lazy_load_term_meta":true,"update_post_meta_cache":true,"nopaging":false,"comments_per_page":"50","no_found_rows":false},
                     "page" : current_page,
                     "block" : "blog",
                     "post_template" : "blog"
                 };
         
                 var button_default_text = button.text();
         
                 $.ajax({
                     url : "https://wp.wp-preview.com/inhype/inhype-2/wp-admin/admin-ajax.php", // AJAX handler
                     data : data,
                     type : "POST",
                     beforeSend : function ( xhr ) {
                         button.text("Loading...");
                         button.addClass("btn-loading");
                     },
                     success : function( data ){
                         if( data ) {
                             button.text( button_default_text );
                             button.removeClass("btn-loading");
         
                             // Insert new posts
                             $(".blog-posts-list").append(data);
         
                             // Show images
                             $(".blog-posts-list .inhype-post-image").each(function( index ) {
                               $(this).attr("style", ($(this).attr("data-style")));
                             });
         
                             // Show categories colors
                             $(".blog-posts-list .inhype-post .post-categories a").each(function( index ) {
                               $(this).attr("style", ($(this).attr("data-style")));
                             });
         
                             // Show rating badges
                             $(".blog-posts-list .inhype-post .post-review-rating-badge").each(function( index ) {
                               $(this).attr("style", ($(this).attr("data-style")));
                             });
         
                             current_page++;
         
                             if ( current_page == 3 )
                                 button.parent().remove(); // if last page, remove the button
         
                         } else {
                             button.parent().remove(); // if no data, remove the button
                         }
                     }
                 });
               });
         
           });})(jQuery);
         (function($){
               $(document).ready(function() {
         
                   var owlpostslider = $(".inhype-carousel-block.inhype-carousel-block-536022 .owl-carousel").owlCarousel({
                       loop: true,
                       items: 4,
                       autoplay: true,
                       autowidth: false,
                       autoplaySpeed: 500,
                       navSpeed: 500,
                       margin: 30,
                       nav: false,
                       dots: false,
                       navText: false,
                       slideBy: 4,
                       responsive: {
                           1199:{
                               items:4,
                               slideBy: 4
                           },
                           979:{
                               items:4,
                               slideBy: 4
                           },
                           768:{
                               items:2,
                               slideBy: 1
                           },
                           479:{
                               items:1,
                               slideBy: 1
                           },
                           0:{
                               items:1,
                               slideBy: 1
                           }
                       }
                   });
         
                   AOS.refresh();
         
               });})(jQuery);
      </script> <script src={{asset('assets/theme/assets/minify')}}/6a6af.js></script> <script>var mc4wp_forms_config = [];</script> <script src={{asset('assets/theme/assets/minify')}}/01216.js></script> <!--[if lte IE 9]> <script src="https://wp.wp-preview.com/inhype/inhype-2/{{asset('assets/theme/plugins')}}/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.7.4"></script> <![endif]--> <script>(function (undefined) {var _targetWindow ="prefer-popup";
         window.NSLPopupCenter = function (url, title, w, h) {
             var userAgent = navigator.userAgent,
                 mobile = function () {
                     return /\b(iPhone|iP[ao]d)/.test(userAgent) ||
                         /\b(iP[ao]d)/.test(userAgent) ||
                         /Android/i.test(userAgent) ||
                         /Mobile/i.test(userAgent);
                 },
                 screenX = window.screenX !== undefined ? window.screenX : window.screenLeft,
                 screenY = window.screenY !== undefined ? window.screenY : window.screenTop,
                 outerWidth = window.outerWidth !== undefined ? window.outerWidth : document.documentElement.clientWidth,
                 outerHeight = window.outerHeight !== undefined ? window.outerHeight : document.documentElement.clientHeight - 22,
                 targetWidth = mobile() ? null : w,
                 targetHeight = mobile() ? null : h,
                 V = screenX < 0 ? window.screen.width + screenX : screenX,
                 left = parseInt(V + (outerWidth - targetWidth) / 2, 10),
                 right = parseInt(screenY + (outerHeight - targetHeight) / 2.5, 10),
                 features = [];
             if (targetWidth !== null) {
                 features.push('width=' + targetWidth);
             }
             if (targetHeight !== null) {
                 features.push('height=' + targetHeight);
             }
             features.push('left=' + left);
             features.push('top=' + right);
             features.push('scrollbars=1');
         
             var newWindow = window.open(url, title, features.join(','));
         
             if (window.focus) {
                 newWindow.focus();
             }
         
             return newWindow;
         };
   
         
     
         
         window._nsl.push(function ($) {
             var targetWindow = _targetWindow || 'prefer-popup';
         
             $('a[data-plugin="nsl"][data-action="connect"],a[data-plugin="nsl"][data-action="link"]').on('click', function (e) {
                 var $target = $(this),
                     href = $target.attr('href'),
                     success = false;
                 if (href.indexOf('?') !== -1) {
                     href += '&';
                 } else {
                     href += '?';
                 }
                 var redirectTo = $target.data('redirect');
                 if (redirectTo === 'current') {
                     href += 'redirect=' + encodeURIComponent(window.location.href) + '&';
                 } else if (redirectTo && redirectTo !== '') {
                     href += 'redirect=' + encodeURIComponent(redirectTo) + '&';
                 }
         
                 if (targetWindow !== 'prefer-same-window' && checkWebView()) {
                     targetWindow = 'prefer-same-window';
                 }
         
                 if (targetWindow === 'prefer-popup') {
                     if (NSLPopupCenter(href + 'display=popup', 'nsl-social-connect', $target.data('popupwidth'), $target.data('popupheight'))) {
                         success = true;
                         e.preventDefault();
                     }
                 } else if (targetWindow === 'prefer-new-tab') {
                     var newTab = window.open(href + 'display=popup', '_blank');
                     if (newTab) {
                         if (window.focus) {
                             newTab.focus();
                         }
                         success = true;
                         e.preventDefault();
                     }
                 }
         
                 if (!success) {
                     window.location = href;
                     e.preventDefault();
                 }
             });
         
             var googleLoginButton = $('a[data-plugin="nsl"][data-provider="google"]');
             if (googleLoginButton.length && checkWebView()) {
                 googleLoginButton.remove();
             }
         });})();
      </script> 
  
   </body>

</html>