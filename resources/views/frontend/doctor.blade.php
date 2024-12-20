@extends('template')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>


<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-3">

                <!-- Left Column: Image -->
                <div class="md:col-span-1">
                    <img src="{{ asset('storage/'.$doctor->avatar) }}" alt="{{ $doctor->name }}"
                        class="w-full h-auto object-cover">
                </div>

                <!-- Right Column: Doctor Info -->
                <div class="md:col-span-2 p-6">
                    <div class="mb-4">
                        <h1 class="text-2xl font-bold text-gray-800">{{ $doctor->name }}</h1>
                        <p class="text-sm text-gray-500">Joined on {{ \Carbon\Carbon::parse($doctor->created_at)->format('d F Y') }}</p>
                    </div>
                    
                    <div class="mb-4">
                        <p class="text-lg text-gray-700"><strong>Bio: </strong>{{ $doctor->bio }}</p>
                    </div>

                    <div class="mb-4 space-y-1">
                        <p class="text-gray-700"><strong>Email: </strong>
                            <a href="mailto:{{ $doctor->email }}" class="text-blue-500 hover:underline">
                                {{ $doctor->email }}
                            </a>
                        </p>
                        <p class="text-gray-700"><strong>Phone: </strong>{{ $doctor->phone }}</p>
                        @if ($doctor->speciality)
                            <p class="text-gray-700"><strong>Speciality: </strong>{{ $doctor->speciality }}</p>
                        @endif
                    </div>

                    <!-- Social Links -->
                    <div class="flex space-x-4 mt-6">
                        @if ($doctor->facebook)
                            <a href="{{ $doctor->facebook }}" target="_blank"
                                class="text-blue-600 hover:text-blue-800">
                                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 5.522 4.477 10 10 10s10-4.478 10-10zM9.775 15.367h1.694v-5.487h-1.694v-1.25h1.694V8.56c0-1.308.794-2.038 1.968-2.038.565 0 .976.048 1.222.07v1.4l-.89.005c-.697 0-.933.341-.933.928v.926h1.819l-.238 1.252h-1.58v5.483h-1.694v-5.482H9.775v5.487z" />
                                </svg>
                            </a>
                        @endif
                        @if ($doctor->linkedin)
                            <a href="{{ $doctor->linkedin }}" target="_blank"
                                class="text-blue-700 hover:text-blue-900">
                                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path d="M19 0H5C2.25 0 0 2.25 0 5v14c0 2.75 2.25 5 5 5h14c2.75 0 5-2.25 5-5V5c0-2.75-2.25-5-5-5zM9.045 17.437h-2.99V8.573h2.99v8.865zm-1.485-10.07c-1.032 0-1.756-.765-1.756-1.767 0-.987.752-1.762 1.785-1.762 1.033 0 1.755.764 1.756 1.767-.003.988-.744 1.762-1.785 1.762zm11.935 10.07h-2.999v-4.765c0-1.128-.405-1.898-1.418-1.898-.773 0-1.234.52-1.435 1.02-.074.179-.093.429-.093.68v4.962h-2.993s.038-8.062 0-8.865h2.993v1.254c-.006.01-.015.02-.021.03h.021v-.03c.4-.617 1.114-1.5 2.712-1.5 1.978 0 3.463 1.3 3.463 4.095v5.016z" />
                                </svg>
                            </a>
                        @endif
                        @if ($doctor->youtube)
                            <a href="{{ $doctor->youtube }}" target="_blank"
                                class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path d="M23.499 6.203c-.28-1.036-1.048-1.83-2.044-2.101-1.805-.505-9.006-.505-9.006-.505s-7.202 0-9.007.505c-.996.271-1.763 1.064-2.043 2.101C.167 7.27.167 11.999.167 11.999s0 4.729.232 5.796c.28 1.037 1.048 1.83 2.043 2.101 1.806.505 9.007.505 9.007.505s7.201 0 9.006-.505c.996-.271 1.764-1.064 2.044-2.101.232-1.067.232-5.796.232-5.796s0-4.729-.232-5.796zM9.709 15.551V8.45l6.18 3.551-6.18 3.55z" />
                                </svg>
                            </a>
                        @endif
                        @if ($doctor->twitter)
                            <a href="{{ $doctor->twitter }}" target="_blank"
                                class="text-blue-400 hover:text-blue-600">
                                aa
                                <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-.25 16.5c-2.698 0-5.5-1.198-5.5-2.75 0-1.562 2.802-2.75 5.5-2.75 2.698 0 5.5 1.188 5.5 2.75 0 1.562-2.802 2.75-5.5 2.75zm-4.5-6.25c-.969 0-1.75-.785-1.75-1.75s.781-1.75 1.75-1.75 1.75.785 1.75 1.75-.781 1.75-1.75 1.75zm7.25.25c-1.484 0-2.75-.988-2.75-2.25s1.266-2.25 2.75-2.25 2.75.988 2.75 2.25-1.266 2.25-2.75 2.25z" />
                                </svg>
                            </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<!-- Doctor's Formations Section -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-20">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Formations de {{ $doctor->name }}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($doctor->formations as $formation)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <a href="{{ route('frontend.formation', $formation->id) }}">
                        <img src="{{ asset('storage/' . $formation->cover) }}" alt="{{ $formation->title }}"
                            class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4">
                        <!-- Title -->
                        <h3 class="text-lg font-semibold mb-2">
                            <a href="{{ route('frontend.formation', $formation->id) }}"
                                class="hover:underline text-gray-800">
                                {{ $formation->title }}
                            </a>
                        </h3>
                        <!-- Category and Date -->
                        <div class="text-sm text-gray-500">
                            <span>{{ $formation->category->name }}</span>
                            <span class="mx-2">|</span>
                            <span>{{ \Carbon\Carbon::parse($formation->date)->format('d F Y') }}</span>
                        </div>
                        <!-- Button -->
                        <a href="{{ route('frontend.formation', $formation->id) }}"
                            class="mt-4 inline-block text-sm bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">
                            Voir Plus
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-gray-700">Aucune formation pour l'instant.</p>
            @endforelse
        </div>
    </div>
</section>

@endsection