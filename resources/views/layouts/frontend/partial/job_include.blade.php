<a href="{{route('job.details',$post->id)}}" class="overflow-hidden">
    <div class="job_section">
        <div class="job_wrap  border-0">
            <div class="job_title pt-2">
                <span class="h4">{{$post->title}}</span>
            </div>
            @if ($post->company_name !=null)
    
            <div class="job_tag mt-2">
                <span>
                    {{$post->company_name}}
                </span>
            </div>
            @endif
            <div class="job_create_time_wrap overflow-hidden mb-2">
                <div class="crated_time">
                    <span>{{$post->created_at->diffForHumans()}}</span>
                </div>
                @if ($post->tags !=null)
                <div class="crated_time">
                    <span> {{$post->tags}}</span>
                </div>
                @endif
               
            </div>
            <div class="job_short_description pt-2 pb-2">
                <p>
                    {!! $post->des !!}
                </p>
            </div>
            <div class="deadline_job">
                <b>Deadline : <span>{{\Carbon\Carbon::createFromFormat('Y-m-d', $post->deadline)->format('d-m-Y')}}
                </span></b>
            </div>
        </div>
    </div>
    
</a>

