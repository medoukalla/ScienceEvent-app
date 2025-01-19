@extends('template') 

@section('content') 


<div class="formation-header section-padding-top-50">
    <div class="w-layout-blockcontainer container w-container">
        
        {!! setting('aide.page-content') !!}

    </div>
</div>


@if ( setting('aide.show-doctors') == 1 )  
<!-- doctors  --> 
@livewire('doctors')
@endif

@if ( setting('aide.show-faq') == 1 )
<!-- Faq's  --> 
@livewire('faq') 
@endif

@endsection