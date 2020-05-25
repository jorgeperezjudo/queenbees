@extends('layouts.app')
@section('content')
<!-- Site Header -->
<header class="site-header">
    <h1 class="logo">
        <a href="index.html"><img src="images/logo.png" alt=""></a>
    </h1>
</header>
<!-- Hero Area -->
<div class="hero-area">
    <div class="container">
        <div class="slider-wrapper">
            <div class="slider-wrapper-side"></div>
            <div class="slider-wrapper-block"></div>
            <div class="flexslider heroflex hero-slider" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
                <ul class="slides">
                
                        @foreach($post as $post)
                        @include('partials.singlepost', $post)
                        @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Start Body Content -->
<div class="main" role="main">
    <div id="content" class="content full">
        <div class="container">

            <div class="row">
                <!-- Posts List -->
                <div class="col-md-8">
                    <!-- Post -->
                    <article class="post post-list format-gallery">
                        <div class="post-head">
                            <div class="post-head-left">
                                <div class="post-date">01 Jul</div>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comment"></i> 41</a>
                                    <a href="#" class="post-cat">Photography</a>
                                </div>
                                <span class="post-format-icon accent-bg"><i class="icon-multiple-image"></i></span>
                            </div>
                            <div class="post-head-right">
                                <h2 class="post-title"><a href="post.html">Travel for Smiles in An Artistic Way - <em>Slider Gallery Post Example</em></a></h2>
                            </div>
                        </div>
                        <div class="post-media">
                            <div class="flexslider galleryflex" data-autoplay="no" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes">
                                <ul class="slides">
                                    <li><img data-no-retina src="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                                    <li><img data-no-retina src="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-entry">
                            <p class="drop-caps">Soren ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                            <blockquote>
                                <p>Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus</p>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                        </div>
                        <div class="post-footer">
                            <ul class="social-icons pull-right">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                            <a href="post.html" class="btn btn-primary btn-more">Continue reading <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
                    <!-- Post -->
                    <article class="post post-list format-image">
                        <div class="post-head">
                            <div class="post-head-left">
                                <div class="post-date">30 Jun</div>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comment"></i> 126</a>
                                    <a href="#" class="post-cat">Travel</a>
                                </div>
                                <span class="post-format-icon accent-bg"><i class="fa fa-image"></i></span>
                            </div>
                            <div class="post-head-right">
                                <h2 class="post-title"><a href="post.html">If I can only <strong>write</strong> my <em>memoir once</em>, how do I edit it?</a></h2>
                            </div>
                        </div>
                        <div class="post-media">
                            <a href="#"><img data-no-retina src="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                        </div>
                        <div class="post-entry">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                        </div>
                        <div class="post-footer">
                            <ul class="social-icons pull-right">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                            <a href="post.html" class="btn btn-primary btn-more">Continue reading <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
                    <!-- Post -->
                    <article class="post post-list format-audio">
                        <div class="post-head">
                            <div class="post-head-left">
                                <div class="post-date">30 Jun</div>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comment"></i> 45</a>
                                    <a href="#" class="post-cat">Music</a>
                                </div>
                                <span class="post-format-icon accent-bg"><i class="fa fa-music"></i></span>
                            </div>
                            <div class="post-head-right">
                                <h2 class="post-title"><a href="post-audio.html">Delcroix &amp; Delatour - <em>Soundcloud Audio Post Example</em></a></h2>
                            </div>
                        </div>
                        <div class="post-media">
                            <iframe height="250" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/151391573&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                        </div>
                        <div class="post-entry">
                            <p class="drop-caps secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                        </div>
                        <div class="post-footer">
                            <ul class="social-icons pull-right">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                            <a href="post-audio.html" class="btn btn-primary btn-more">Continue reading <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
                    <!-- Post -->
                    <article class="post post-list format-video">
                        <div class="post-head">
                            <div class="post-head-left">
                                <div class="post-date">30 Jun</div>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comment"></i> 133</a>
                                    <a href="#" class="post-cat">Travel</a>
                                </div>
                                <span class="post-format-icon accent-bg"><i class="fa fa-video-camera"></i></span>
                            </div>
                            <div class="post-head-right">
                                <h2 class="post-title"><a href="post-video.html">Facts That Will Make You Want To Travel - <em>Youtube/Vimeo Video Post Example</em></a></h2>
                            </div>
                        </div>
                        <div class="post-media">
                            <div class="fw-video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/QEfPzNS3Shg?rel=0" allowfullscreen></iframe></div>
                        </div>
                        <div class="post-entry">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                            <h3>Post sub title</h3>
                            <p>Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                        </div>
                        <div class="post-footer">
                            <ul class="social-icons pull-right">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                            <a href="post-video.html" class="btn btn-primary btn-more">Continue reading <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
                    <!-- Post -->
                    <article class="post post-list format-quote">
                        <div class="post-head">
                            <div class="post-head-left">
                                <div class="post-date">29 Jun</div>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comment"></i> 133</a>
                                    <a href="#" class="post-cat">Lifestyle</a>
                                </div>
                                <span class="post-format-icon accent-bg"><i class="fa fa-quote-left"></i></span>
                            </div>
                            <div class="post-head-right">
                                <div class="post-entry">
                                    <blockquote>
                                        <p>You have to learn the rules of the game. And then you have to play better than anyone else.</p>
                                        <cite>Albert Einstein</cite>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="post-footer">
                            <ul class="social-icons pull-right">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                            <a href="post-quote.html" class="btn btn-primary btn-more">Continue reading <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>
                    <!-- Post -->
                    <article class="post post-list format-link">
                        <div class="post-head">
                            <div class="post-head-left">
                                <div class="post-date">26 Jun</div>
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comment"></i> 52</a>
                                    <a href="#" class="post-cat">Travel</a>
                                </div>
                                <span class="post-format-icon accent-bg"><i class="fa fa-link"></i></span>
                            </div>
                            <div class="post-head-right">
                                <h2 class="post-title"><a href="post-video.html">Our profile on Envato Markets</a></h2>
                            </div>
                        </div>
                        <a href="http://themeforest.net/user/imithemes" class="link-post-url accent-bg" target="_blank">
                            http://themeforest.net/user/imithemes
                        </a>
                        <div class="post-media">
                            <a href="http://themeforest.net/user/imithemes" target="_blank">
                                <img data-no-retina src="http://placehold.it/1200x526&amp;text=IMAGE+PLACEHOLDER" alt="">
                            </a>
                        </div>
                        <div class="post-entry">
                        </div>
                        <div class="post-footer">
                            <ul class="social-icons pull-right">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                            <a href="post-video.html" class="btn btn-primary btn-more">Continue reading <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </article>


                    <div class="clearfix"></div>
                    <!-- Pagination -->
                    <div class="page-pagination">
                        <a href="#" class="pull-left">&laquo; Older entries</a>
                    </div>
                </div>

                <!-- Site Sidebar -->
                <aside class="col-md-4 sidebar right-sidebar">
                    <div class="widget sidebar-widget">
                        <h3 class="widgettitle">About me</h3>
                        <div class="textwidget">
                            <div class="text-align-center">
                                <div class="about-image"><img data-no-retina src="http://placehold.it/400x400&amp;text=IMAGE+PLACEHOLDER" alt=""></div>
                                <h3 class="accent-color">Cheryl Mendoza</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
                                <a href="about.html" class="btn btn-default">Read more about me <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget sidebar-widget popular-posts-widget">
                        <h3 class="widgettitle">Popular Posts</h3>
                        <ul>
                            <li class="most-recent-post">
                                <div class="widget-post-image">
                                    <a href="#"><img data-no-retina src="http://placehold.it/400x266&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                </div>
                                <div class="widget-post-content">
                                    <span class="meta-data">June 15, 2015</span>
                                    <h5><a href="#">Journeys of a Life Time</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </li>
                            <li>
                                <span class="meta-data">June 14, 2015</span>
                                <h5><a href="#">If I can only write my memoir...</a></h5>
                            </li>
                            <li>
                                <span class="meta-data">June 14, 2015</span>
                                <h5><a href="#">Travel for Smiles in An...</a></h5>
                            </li>
                            <li>
                                <span class="meta-data">June 13, 2015</span>
                                <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                            </li>
                            <li>
                                <span class="meta-data">June 11, 2015</span>
                                <h5><a href="#">Consectetur adipiscing elit</a></h5>
                            </li>
                        </ul>
                    </div>
                    <div class="widget sidebar-widget widget_categories">
                        <h3 class="widgettitle">Categories</h3>
                        <ul>
                            <li><a href="#">Food</a> (13)</li>
                            <li><a href="#">Technology</a> (22)</li>
                            <li><a href="#">Lifestyle</a> (41)</li>
                            <li><a href="#">Photography</a> (6)</li>
                            <li><a href="#">Travel</a> (19)</li>
                        </ul>
                    </div>
                    <div class="widget sidebar-widget widget_archive">
                        <h3 class="widgettitle">Archives</h3>
                        <ul>
                            <li><a href="#">June 2015</a> (13)</li>
                            <li><a href="#">May 2015</a> (22)</li>
                            <li><a href="#">April 2015</a> (41)</li>
                            <li><a href="#">March 2015</a> (6)</li>
                            <li><a href="#">February 2015</a> (19)</li>
                            <li><a href="#">January 2015</a> (66)</li>
                            <li><a href="#">December 2014</a> (87)</li>
                        </ul>
                    </div>
                    <div class="widget sidebar-widget social-widget">
                        <h3 class="widgettitle">Subscribe &amp; Connect</h3>
                        <ul class="social-icons-colored inversed social-icons">
                            <li class="facebook"><a href="#" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="#" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="googleplus"><a href="#" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                            <li class="pinterest"><a href="#" data-toggle="tooltip" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li class="instagram"><a href="#" data-toggle="tooltip" data-original-title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            <li class="rss"><a href="#" data-toggle="tooltip" data-original-title="Feed"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                    <div class="widget sidebar-widget newletter-widget">
                        <h3 class="widgettitle">Newsletter</h3>
                        <form>
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <input type="submit" class="btn btn-primary" value="Subscribe now">
                        </form>
                    </div>
                    <div class="widget sidebar-widget widget_recent_entries">
                        <h3 class="widgettitle">Recent Posts</h3>
                        <ul>
                            <li>
                                <div class="widget-post-image">
                                    <a href="#"><img data-no-retina src="http://placehold.it/400x266&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                </div>
                                <div class="widget-post-content">
                                    <span class="meta-data">June 15, 2015</span>
                                    <h5><a href="#">Journeys of a Life Time</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="widget-post-image">
                                    <a href="#"><img data-no-retina src="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                </div>
                                <div class="widget-post-content">
                                    <span class="meta-data">June 11, 2015</span>
                                    <h5><a href="#">Travel for Smiles in An Artistic Way</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="widget-post-image">
                                    <a href="#"><img data-no-retina src="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" alt=""></a>
                                </div>
                                <div class="widget-post-content">
                                    <span class="meta-data">June 11, 2015</span>
                                    <h5><a href="#">If I can only write my memoir once, how do I edit it?</a></h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget sidebar-widget tagcloud-widget">
                        <h3 class="widgettitle">Tags</h3>
                        <div class="tagcloud">
                            <a href="#">Food</a>
                            <a href="#">Lifestyle</a>
                            <a href="#">Travel</a>
                            <a href="#">Beauty</a>
                            <a href="#">Photography</a>
                            <a href="#">Fashion</a>
                            <a href="#">Image</a>
                            <a href="#">Video</a>
                            <a href="#">Gallery</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection