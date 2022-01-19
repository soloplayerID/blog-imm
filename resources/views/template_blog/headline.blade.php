<main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      @foreach ($headlines as $headline)
        @if ($loop->index === 0)
          <div class="carousel-item active">
            {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
            <img class="bd-placeholder-img" src="{{asset($headline->image)}}" style="
            background-position: center;
        		border-radius: 00px;
            max-width: 100%;
            max-height: 100%;
        		filter: brightness(0.5);">
            <div class="container">
              <div class="carousel-caption text-start">
                <span><i class="fa fa-clock-o"></i>{{$headline->category->name}}</span>
                <h1>{{$headline->judul}}</h1>
                <p>{!! substr($headline->content,0,120) !!}</p>
                <p><a class="btn btn-lg btn-primary" href="{{route('blog.post', $headline->slug)}}">Lanjut Membaca</a></p>
              </div>
            </div>
          </div>
        @else
          <div class="carousel-item">
            {{-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
            <img class="bd-placeholder-img" src="{{asset($headline->image)}}" style="
            background-position: center;
        		border-radius: 00px;
            max-width: 100%;
            max-height: 100%;
        		filter: brightness(0.5);">
            <div class="container">
              <div class="carousel-caption text-start">
                <span><i class="fa fa-clock-o"></i>{{$headline->category->name}}</span>
                <h1>{{$headline->judul}}</h1>
                <p>{!! substr($headline->content,0,120) !!}</p>
                <p><a class="btn btn-lg btn-primary" href="{{route('blog.post', $headline->slug)}}">Lanjut Membaca</a></p>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
