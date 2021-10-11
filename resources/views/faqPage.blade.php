@extends('Layout')
@section('title', $title)
@section('content')
    @if ($title=="Management")
        <div class="d-flex justify-content-center">
            <x-faqmanagement.dashboard></x-faqmanagement.dashboard>
        </div>
        <x-faqmanagement.faqlist :faqList="$faqList"></x-faqmanagement.faqlist>
    @elseif($title=="Create FAQ")
        <x-faqmanagement.create-edit></x-faqmanagement.create-edit>
    @elseif($title=="Edit FAQ")
        <x-faqmanagement.create-edit :faq="$faq"></x-faqmanagement.create-edit>
    @endif
@endsection