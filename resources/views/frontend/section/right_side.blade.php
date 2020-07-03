 <div class="card my-4">
     <div class="card-body">
         @if(!empty($section_two[0]))
         <a href="{{ url('details/'.$section_two[0]['slug']) }}">
             <img src="{{ asset('storage/'.$section_two[0]['image']) }}" style="height:245px; width:100%;">

             @if($section_two[0]['content_type'] == 'video')
             <img src="{{ asset('images/play.png') }}" class="playIcon2" style="height:45px; width:45px;">
             @endif

             <h6 class="mt-1" style="color:#555;">{{ $section_two[0]['title'] }}
                 <br>
                 <small>
                     {{ Carbon\Carbon::parse( $section_two[0]['created_at'] )->diffForHumans() }}
                 </small>
             </h6>
         </a>
         <p style="font-size: 13px;">{{ substr($section_two[0]['description'],0,200) }}</p>
         @else
         <p class="text-center">This section has no post yet</p>
         @endif
     </div>
     <div class=" card-body">
         <div class="row">
             @forelse($section_two as $key => $data)
             @if($key!=0)
             <div class="col-6">
                 <a href="{{ url('details/'.$data->slug) }}">
                     <img src="{{ asset('storage/'.$data->image) }}" style="height:100px; width:100%;">

                     @if($data->content_type == 'video')
                     <img src="{{ asset('images/play.png') }}" class="playIcon" style="height:25px; width:25px;">
                     @endif

                     <h6 class="mt-1" style="font-size: 13px; color:#555;">
                         {{ $data->title }}
                         <br>
                         <small>
                             {{ Carbon\Carbon::parse( $data->created_at )->diffForHumans() }}
                         </small>
                     </h6>
                 </a>
             </div>
             @endif
             @empty
             @endforelse
         </div>
     </div>
 </div>