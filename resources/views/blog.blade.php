	@include('template_blog.header')
	@include('template_blog.headline')



  <div class="container">
    
  
    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
          Latest Articles
        </h3>

		@foreach ($posts as $post)
        <article class="blog-post">
			<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
			<div class="col-auto d-none rounded-3 d-lg-block">
				<img width="200" height="250" style="object-fit:cover; width:200px; height:300px; border: solid 1px #CCC" src="{{asset($post->image)}}">
	
			</div>
			<div class="col p-4 d-flex flex-column position-static">
				<strong class="d-inline-block mb-2 text-primary">World</strong>
				<h3 class="mb-0">{{$post->judul}}</h3>
				<div class="mb-1 text-muted">{{$post->created_date}}</div>
				<p class="card-text mb-auto">{!! substr($post->content,0,120) !!}</p>
				<a href="{{route('blog.post', $post->slug)}}" class="stretched-link">Continue reading</a>
			</div>
			</div>
        </article>
		@endforeach

        <nav class="blog-pagination" aria-label="Pagination">
          <ul class="pagination">
				{{ $posts->links() }}
			</ul>
        </nav>
      </div>
@include('template_blog.widget')
@include('template_blog.footer')
