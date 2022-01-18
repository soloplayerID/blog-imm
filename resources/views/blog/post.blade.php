		@include('template_blog.header')
		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- single-post box -->
							<div class="single-post-box">
								@foreach ($posts as $post)
								<div class="title-post">
									<h2>{{$post->judul}}</h2>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i>{{$post->created_date}}</li>
										<li><i class="fa fa-user"></i>by <a href="#">{{$post->user->name}}</a></li>
										<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>0</span></a></li>
										<li><i class="fa fa-eye"></i>872</li> -->
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>
									</ul>
								</div>

								<div class="post-gallery">
									<ul class="bxslider">
										<li><img src="{{asset($post->image)}}" alt=""></li>
										<!-- <li><img src="upload/news-posts/single2.jpg" alt=""></li> -->
									</ul>
									<span class="image-caption">{{$post->judul}}</span>
								</div>

								<div class="post-content">

									<p>{!!$post->content!!}</p>

								</div>

								<!-- <div class="article-inpost">
									<div class="row">
										<div class="col-md-5">
											<div class="image-content">
												<div class="image-place">
													<img src="upload/news-posts/single-art.jpg" alt="">
													<div class="hover-image">
														<a class="zoom" href="upload/news-posts/single-art.jpg"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-7">
											<div class="text-content">
												<h2>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate. </h2>
												<p>Lorem ipsum dolor sit amet, <a href="#">consectetuer adipiscing</a> elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
												<p>Sed egestas, <a href="#">ante et vulputate volutpat, eros</a> pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
											</div>
										</div>
									</div>
								</div>

								<div class="post-content">
									<h2>Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="#">Phasellus hendrerit.</a> Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
								</div> -->

								<!-- <div class="article-inpost">
									<div class="row">
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="upload/news-posts/single-art2.jpg" alt="">
													<div class="hover-image">
														<a class="zoom" href="upload/news-posts/single-art4.jpg"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="upload/news-posts/single-art3.jpg" alt="">
													<div class="hover-image">
														<a class="zoom" href="upload/news-posts/single-art5.jpg"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="upload/news-posts/single-art4.jpg" alt="">
													<div class="hover-image">
														<a class="zoom" href="upload/news-posts/single-art8.jpg"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="upload/news-posts/single-art6.jpg" alt="">
													<div class="hover-image">
														<a class="zoom" href="upload/news-posts/single-art6.jpg"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="upload/news-posts/single-art7.jpg" alt="">
													<div class="hover-image">
														<a class="zoom" href="upload/news-posts/single-art7.jpg"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="image-content">
												<div class="image-place">
													<img src="upload/news-posts/single-art8.jpg" alt="">
													<div class="hover-image">
														<a class="zoom" href="upload/news-posts/single-art9.jpg"><i class="fa fa-arrows-alt"></i></a>
													</div>
												</div>
												<span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
											</div>
										</div>
									</div>
								</div> -->
								@endforeach
								<!-- <div class="review-box">
									<div class="title-section">
										<h1><span>Reviewer overview</span></h1>
									</div>
									<div class="member-skills">
										<p>Design - 9/10</p>
										<div class="meter nostrips design">
											<p style="width: 90%"></p>
										</div>
										<p>Development - 10/10</p>
										<div class="meter nostrips developer">
											<p style="width: 100%"></p>
										</div>
										<p>UX - 7/10</p>
										<div class="meter nostrips ux">
											<p style="width: 70%"></p>
										</div>
										<p>Responsive - 8/10</p>
										<div class="meter nostrips responsive">
											<p style="width: 80%"></p>
										</div>
									</div>
									<div class="summary-box">
										<h2>Summary</h2>
										<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae Sed vel lacus. </p>
										<div class="summary-degree">
											<p><span>8.9</span>Excellent!</p>
										</div>
									</div>
								</div> -->

								<div class="post-tags-box">
									<ul class="tags-box">
										<li><i class="fa fa-tags"></i><span>Tags:</span></li>
										@foreach ($post->tag as $tag)
										<li><a href="#">{{$tag->name}}</a></li>
										@endforeach
									</ul>
								</div>

								<!-- <div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Share on Facebook</a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Share on Twitter</a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>
									</ul>
								</div> -->

								<!-- <div class="prev-next-posts">
									<div class="prev-post">
										<img src="upload/news-posts/listw4.jpg" alt="">
										<div class="post-content">
											<h2><a href="single-post.html" title="prev post">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>11</span></a></li>
											</ul>
										</div>
									</div>
									<div class="next-post">
										<img src="upload/news-posts/listw5.jpg" alt="">
										<div class="post-content">
											<h2><a href="single-post.html" title="next post">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
												<li><a href="#"><i class="fa fa-comments-o"></i><span>8</span></a></li>
											</ul>
										</div>
									</div>
								</div> -->

								<div class="about-more-autor">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#about-autor" data-toggle="tab">About The Autor</a>
										</li>
										<!-- <li>
											<a href="#more-autor" data-toggle="tab">More From Autor</a>
										</li> -->
									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="about-autor">
											@foreach ($posts as $post)
											<div class="autor-box">
												<img src="{{ asset('assets/img/avatar/avatar-1.png') }}" alt="">
												<div class="autor-content">
													<div class="autor-title">
														<h1><span>{{$post->user->name}}</span></h1>
														<ul class="autor-social">
															<!-- <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li> -->
															<!-- <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li> -->
															<!-- <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li> -->
															<li><a target="_blank" rel="noopener noreferrer" href="{{$post->user->instagram}}" class="instagram"><i class="fa fa-instagram"></i></a></li>
															<!-- <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li> -->
														</ul>
													</div>
													<p>
														{{$post->user->deskripsi}}
													</p>
												</div>
											</div>
											@endforeach
										</div>

										<!-- <div class="tab-pane" id="more-autor">
											<div class="more-autor-posts">

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal1.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal2.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal3.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

												<div class="news-post image-post3">
													<img src="upload/news-posts/gal4.jpg" alt="">
													<div class="hover-box">
														<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i>27 may 2013</li>
														</ul>
													</div>
												</div>

											</div>
										</div> -->

									</div>
								</div>

								<!-- carousel box -->
								<div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h1><span>You may also like</span></h1>
									</div>
									<div class="owl-carousel" data-num="3">
										@foreach ($recents as $recent)
										<div class="item news-post image-post3">
											<img src="{{asset($recent->image)}}" style="height: 200px; width: 250px;" alt="">
											<div class="hover-box">
												<h2><a href="{{route('blog.post', $recent->slug)}}">{{$recent->judul}}</a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i>{{$recent->created_date}}</li>
												</ul>
											</div>
										</div>
										@endforeach

									</div>
								</div>
								<!-- End carousel box -->

								<!-- contact form box -->
								<!-- <div class="contact-form-box">
									<div class="title-section">
										<h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not be published.</span></h1>
									</div>
									<form id="comment-form">
										<div class="row">
											<div class="col-md-4">
												<label for="name">Name*</label>
												<input id="name" name="name" type="text">
											</div>
											<div class="col-md-4">
												<label for="mail">E-mail*</label>
												<input id="mail" name="mail" type="text">
											</div>
											<div class="col-md-4">
												<label for="website">Website</label>
												<input id="website" name="website" type="text">
											</div>
										</div>
										<label for="comment">Comment*</label>
										<textarea id="comment" name="comment"></textarea>
										<button type="submit" id="submit-contact">
											Post Comment
										</button>
									</form>
								</div> -->
								<!-- End contact form box -->

							</div>
							<!-- End single-post box -->

						</div>
						<!-- End block content -->

					</div>
@include('template_blog.widget')
@include('template_blog.footer')
