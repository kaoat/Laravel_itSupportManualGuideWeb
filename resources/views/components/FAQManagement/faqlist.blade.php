<div class="mb-2">
    <a href="{{route('createpage')}}" class="btn btn-primary">Create new FAQ</a>
    @foreach($faqList as $faq)
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$faq->title}}</h5>
                    <p class="card-text">{!!Str::of($faq->detail)->length()>10?Str::substr($faq->detail,0,10):$faq->detail!!}</p>
                    <a href="{{route('updatepage',$faq->id)}}" class="btn btn-secondary">Edit</a>
                    <button onclick="deleteFaq('{{route('delete',$faq->id)}}','{{csrf_token()}}','{{route('managementpage')}}');" type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@section("script")
<script>
    function deleteFaq(url,token,redirectedUrl) {
        fetch(url,{
            method:'delete',
            headers:{
                'X-CSRF-TOKEN':token,
            },
        }).then(x=>{
            return x.json();
        }).then(x=>{
            if(x['result']){
                window.location.href=redirectedUrl;
            }
        }); 
    }
</script>
@endsection