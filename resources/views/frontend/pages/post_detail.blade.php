@extends('frontend.pages.master')
@section('content')

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Post</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post">
                        <div class="post-image">
                            <div class="owl-carousel" data-plugin-options='{"items":1}'>
                                <div>
                                    <div class="img-thumbnail">
                                        <img class="img-responsive" src="{{url('frontend/img/blog/blog-image-1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <div class="img-thumbnail">
                                        <img class="img-responsive" src="{{url('frontend/img/blog/blog-image-2.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-date">
                            <span class="day">10</span>
                            <span class="month">Jan</span>
                        </div>
                        <div class="post-content">
                            <h2><a href="blog-post.html">{{$post->tittle}}</a></h2>
                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">{{$post->user->name}}</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">{{$post->type->name}}</a></span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                            </div>
                            <p>{{$post->content}}</p>
                            <div class="post-block post-share">
                                <h3><i class="fa fa-share"></i>Share this post</h3>
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                                <!-- AddThis Button END -->
                            </div>
                            <div class="post-block post-author clearfix">
                                <h3><i class="fa fa-user"></i>Author</h3>
                                <div class="img-thumbnail">
                                    <a href="blog-post.html">
                                    <img src="{{url('frontend/img/avatar.jpg')}}" alt="">
                                    </a>
                                </div>
                                <p><strong class="name"><a href="#">{{$post->user->name}}</a></strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
                            </div>
                            <div class="post-block post-comments clearfix" id="post_comment">
                                <h3><i class="fa fa-comments"></i>Comments (3)</h3>
                                <ul class="comments">
                                    @foreach($post->comments as $comment)
                                    {{-- <li>
                                        <div class="comment">
                                            <div class="img-thumbnail">
                                                <img class="avatar" alt="" src="{{url('frontend/img/avatar-2.jpg')}}">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
                                                <strong>John Doe</strong>
                                                <span class="pull-right">
                                                <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                                </span>
                                                </span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                                                <span class="date pull-right">January 12, 2013 at 1:38 pm</span>
                                            </div>
                                        </div>
                                        <ul class="comments reply">
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail">
                                                        <img class="avatar" alt="" src="{{url('frontend/img/avatar-3.jpg')}}">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                        <strong>John Doe</strong>
                                                        <span class="pull-right">
                                                        <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                                        </span>
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                        <span class="date pull-right">January 12, 2013 at 1:38 pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail">
                                                        <img class="avatar" alt="" src="img/avatar-4.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                        <strong>John Doe</strong>
                                                        <span class="pull-right">
                                                        <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                                        </span>
                                                        </span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                        <span class="date pull-right">January 12, 2013 at 1:38 pm</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail">
                                                <img class="avatar" alt="" src="{{url('frontend/img/avatar.jpg')}}">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
                                                <strong>{{$comment->name}}</strong>
                                                <span class="pull-right">
                                                <span id=""> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                                </span>
                                                </span>
                                                <p>{{$comment->content}}</p>
                                                <span class="date pull-right">{{$comment->created_at->diffForHumans()}}</span>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="post-block post-leave-comment">
                                <h3>Leave a comment</h3>
                                <form action="#" method="post" id="formcmt">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Your name *</label>
                                                <input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Your email address *</label>
                                                <input type="email" value="" maxlength="100" class="form-control" name="email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Comment *</label>
                                                <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <button type="button" class="btn btn-primary btn-lg" id="submit-btn">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
                <script>
                        var post_id = "{{$post->id}}";
                      //instantiate a Pusher object with our Credential's key
                        var pusher = new Pusher('29cd347d237de727387a', {
                        encrypted: true
                      });

                      //Subscribe to the channel we specified in our Laravel Event
                      var channel = pusher.subscribe('comment-on-post' +post_id);

                      //Bind a function to a Event (the full Laravel class)
                      channel.bind('App\\Events\\CommentWasSent', function(comments){
                       for (var property in comments) {
                            var new_cmt='<li><div class="comment"><div class="img-thumbnail"><img class="avatar" alt="" src="{{url('frontend/img/avatar.jpg')}}"></div><div class="comment-block"><div class="comment-arrow"></div><span class="comment-by"><strong>' + comments[property].name +'</strong><span class="pull-right"><span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span></span></span><p>' + comments[property].content + '</p><span class="date pull-right">a moment ago</span></div></div></li>';
                            $('#post_comment ul').append(new_cmt);
                        }  
                      });
                  </script> 
                                <script type="text/javascript">
                          $(document).ready(function(){
                            $.ajaxSetup({
                              headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              }
                            });
                            
                            
                             $("#submit-btn").click(function() {
                                    $("#submit-btn").text('Loading...').button("refresh");
                                   var post_id = "{{$post->id}}";
                                   console.log(post_id);
                                   var name = $('#name').val();
                                   var email = $('#email').val();
                                   var content = $('#comment').val();
                                   $.ajax({
                                        url:'/post-comment',
                                        type: "post",
                                        data: { '_token': $('input[name=_token]').val(), 'post_id': post_id, 'name': name, 'email': email, 'content': content},
                                        success: function(data) {   
                                                 $("#submit-btn").text('Post Comment').button("refresh");
                                                 $('#name').val("");
                                                 $('#email').val("");
                                                 $('#comment').val("");
                                        }
                                   });
                                });  
                          
                          });

                        </script>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-md-3">
                <aside class="sidebar">
                    <form>
                        <div class="input-group input-group-lg">
                            <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <hr />
                    <h4>Categories</h4>
                    <ul class="nav nav-list primary push-bottom">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Photos</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Technology</a></li>
                    </ul>
                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
                            <li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popularPosts">
                                <ul class="simple-post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                <img src="{{url('frontend/img/blog/blog-thumb-1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                <img src="{{url('frontend/img/blog/blog-thumb-2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                <img src="{{url('frontend/img/blog/blog-thumb-3.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="recentPosts">
                                <ul class="simple-post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                <img src="{{url('frontend/img/blog/blog-thumb-2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                <img src="{{url('frontend/img/blog/blog-thumb-3.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                <img src="{{url('frontend/img/blog/blog-thumb-1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <h4>About Us</h4>
                    <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection()