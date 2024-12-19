@extends('template')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>



<section class="section-padding-top-125 section-padding-bottom-130">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            <!-- Sidebar for Filtering -->
            <aside class="md:col-span-1 bg-gray-100 p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Filtres</h2>
                
                <!-- Filter by Category -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Catégories</h3>
                    <ul class="space-y-2">
                        @foreach($categories as $category)
                            <li>
                                <a href="#"
                                    class="text-sm text-gray-600 hover:text-gray-900">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Filter by Doctor -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Docteurs</h3>
                    <ul class="space-y-2">
                        @foreach($doctors as $doctor)
                            <li>
                                <a href="#"
                                    class="text-sm text-gray-600 hover:text-gray-900">
                                    {{ $doctor->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>

            <!-- Formations List -->
            <main class="md:col-span-3">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Nos Formations</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($formations as $formation)
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <div class="relative">
                                <a href="{{ route('frontend.formation', $formation->id) }}">
                                    <img class="w-full h-48 object-cover"
                                        src="{{ asset('storage/' . $formation->cover) }}"
                                        alt="{{ $formation->title }}">
                                </a>
                            </div>
                            <div class="p-4">
                                <!-- Category -->
                                <div class="text-xs uppercase font-medium text-blue-500 mb-2">
                                    <a href="#">
                                        {{ $formation->category->name }}
                                    </a>
                                </div>
                                <!-- Title -->
                                <h3 class="text-lg font-semibold mb-2">
                                    <a href="{{ route('frontend.formation', $formation->id) }}"
                                        class="hover:underline text-gray-800">
                                        {{ $formation->title }}
                                    </a>
                                </h3>
                                <!-- Date and Doctor -->
                                <div class="flex items-center text-sm text-gray-600 mb-4">
                                    <div class="flex items-center mr-4">
                                        <img src="{{ asset('assets/svg/i-date.svg') }}" class="w-4 h-4 mr-1">
                                        <span>{{ $formation->date }}</span>
                                    </div>
                                    <div class="flex items-center">
                                        <img src="{{ asset('assets/svg/user.svg') }}" class="w-4 h-4 mr-1">
                                        <span>{{ $formation->doctor->name }}</span>
                                    </div>
                                </div>
                                <!-- Voir Plus Button -->
                                <a href="{{ route('frontend.formation', $formation->id) }}"
                                    class="text-sm bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">
                                    Voir Plus
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    
                </div>
            </main>
        </div>
    </div>
</section>


<!-- doctors  -->
@livewire('doctors')

<!-- Faq's  -->
@livewire('faq')


@stop