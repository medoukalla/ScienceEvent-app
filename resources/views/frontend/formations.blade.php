@extends('template')

@section('content')

<div class="formation-header section-padding-top-50">
    <div class="w-layout-blockcontainer container w-container">
        <div class="all-formation-heading">
            La formation <span>Nephrologue</span>, classe virtuelle et e-learning vidéo
            <p>Apprenez les bases de la <span>néphrologie</span> à travers des cours en ligne et des vidéos</p>
        </div>
    </div>
</div>

@livewire('all-formations', ['formations' => $formations, 'categories' => $categories, 'doctors' => $doctors])



@stop