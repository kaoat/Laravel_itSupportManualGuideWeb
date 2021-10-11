<form method="post" class="mt-2 mb-2" action="{{route('savefaq')}}">
@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input @if(isset($faq)) value="{{$faq->title}}" @endif type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title">
    @error('title')
                <small class="form-text text-danger">{{ $message }}</small>
    @enderror
  </div>
  <div class="form-group mb-2">
    <label for="detail">Detail</label>
    <textarea @error('email') class='is-invalid' @enderror id="detail" name="detail">
      @if(isset($faq)){{$faq->detail}}@endif
    </textarea>
    @error('detail')
                <small class="form-text text-danger">{{ $message }}</small>
    @enderror
  </div>
  <input type="hidden" name="id" @if(isset($faq))value="{{$faq->id}}"@else value="0" @endif>
  <button class="btn btn-primary">Save</button>
  <button class="btn btn-secondary">Cancel</button>
</form>
@section('script')
<script>
    $(document).ready(function() {
        var summernoteOptions={
            height:500,
            toolbar:[
                ['font',['bold','underline','clear']],
                ['para',['ul','ol']],
                ['insert',['picture']],
            ],
            codeviewFilter:true,
            codeviewIframeFilter:true,
            spellCheck:true,
            disableGrammar:false,
        };
        $("#detail").summernote(summernoteOptions);
    });
</script>
@endsection