@extends('Layout')
@section('title',$title)
@section('content')
@if(true)
    <x-faqmanagement.selectfaq :faqDropdown="$faqDropdown"></x-faqmanagement.selectfaq>
@endif
@if($title!="Home")
    <x-faqmanagement.showfaq :faq="$data"></x-faqmanagement.showfaq>
@endif
@endsection