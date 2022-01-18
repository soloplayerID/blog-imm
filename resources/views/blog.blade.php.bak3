	@include('template_blog.header')
	@include('template_blog.ticket_news')
	@include('template_blog.headline')


	<!-- google addsense -->
	<!-- <div class="advertisement">
		<div class="desktop-advert">
			<span>Advertisement</span>
			<img src="upload/addsense/728x90-white.jpg" alt="">
		</div>
		<div class="tablet-advert">
			<span>Advertisement</span>
			<img src="upload/addsense/468x60-white.jpg" alt="">
		</div>
		<div class="mobile-advert">
			<span>Advertisement</span>
			<img src="upload/addsense/300x250.jpg" alt="">
		</div>
	</div> -->
	<!-- End google addsense -->

	<!-- article box -->
	<div class="article-box">
		<div class="title-section">
			<h1><span>Latest Articles</span></h1>
		</div>

		@foreach ($posts as $post)
		<div class="news-post article-post">
			<div class="row">
				<div class="col-sm-4">
					<div class="post-gallery">
						<img alt="" src="{{asset($post->image)}}">
					</div>
				</div>
				<div class="col-sm-8">
					<div class="post-content">
						<h2><a href="{{route('blog.post', $post->slug)}}">{{$post->judul}}</a></h2>
						<ul class="post-tags">
							<li><i class="fa fa-clock-o"></i>{{$post->created_date}}</li>
							<li><i class="fa fa-user"></i>by <a href="{{route('blog.post', $post->slug)}}">{{$post->user->name}}</a></li>
							<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
							<li><i class="fa fa-eye"></i>872</li> -->
						</ul>
						<!-- <span class="post-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</span> -->
						<p>{!! substr($post->content,0,120) !!}</p>
					</div>
				</div>
			</div>
		</div>
		@endforeach

		<div class="pagination-box">
			<ul class="pagination-list">
				{{ $posts->links() }}
			</ul>
		</div>

	</div>
	<!-- End article box -->

</div>
<!-- End block content -->

</div>
@include('template_blog.widget')
@include('template_blog.footer')
