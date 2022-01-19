
      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">


          <div class="sidebar widget">
              <h3>Pojok Seni</h3>
              <ul>
                @foreach ($senis as $seni)
                <li>
                    <div class="sidebar-thumb">
                        <img class="animated rollIn" src="{{asset($seni->image)}}" alt="" />
                    </div><!-- .Sidebar-thumb -->
                    <div class="sidebar-content">
                        <h5 class="animated bounceInRight"><a href="{{route('blog.post', $seni->slug)}}">{!! substr($seni->content,0,120) !!}</a></h5>
                    </div><!-- .Sidebar-thumb -->
                    <div class="sidebar-meta">
                        <span><i class="fa fa-comment"></i>{{$seni->category->name}}</span>
                        <span class="time"><i class="fa fa-clock-o"></i>{{$seni->created_date}}</span>
                    </div><!-- .Sidebar-meta ends here -->
                </li><!-- .Li ends here -->
              @endforeach

              </ul><!-- .Ul ends here -->
          </div><!-- .Widget ends here -->

          <div class="p-4">
            <h4 class="fst-italic">Social Media</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
