@extends('frontend.layouts.master')
@section('title','Privacy Policy')
@section('content')


<main class="bg-grey pb-30">
    <div class="container single-content">
        <div class="entry-header  mb-50 pt-50">
            <h1 class="entry-title mb-50 font-weight-900">
                Privacy Policy
            </h1>

            <article class="align-self-center">
                <div class="text-dark" style="visibility: visible; animation-name: fadeIn;">
                
                   {!!$privacypolicy->privacy_policies!!}
                    
                </div>

            </article>
        </div>
    </div>
    <!--container-->
</main>



@endsection
