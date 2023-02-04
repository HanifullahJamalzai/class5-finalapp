@extends('landing.layouts.app')

@section('contents')

    @include('landing.layouts.partials.aside')
    @include('landing.layouts.partials.search')
    @include('landing.layouts.partials.features')
    @include('landing.layouts.partials.popularProperties')
    @include('landing.layouts.partials.testimonial')
    @include('landing.layouts.partials.agentSection')
    @include('landing.layouts.partials.contactSection')

@endsection