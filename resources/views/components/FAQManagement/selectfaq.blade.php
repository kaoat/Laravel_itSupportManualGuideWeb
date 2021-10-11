<div class="mt-5 mb-5">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown">
            FAQ List
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($faqDropdown as $faq)
                <a class="dropdown-item" href="{{route('showfaq',$faq->id)}}">{{$faq->title}}</a>
            @endforeach
        </div>
    </div>
</div>