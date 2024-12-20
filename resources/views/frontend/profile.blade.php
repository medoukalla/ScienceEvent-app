@extends('template')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            
            <!-- Sidebar -->
            <aside class="bg-white shadow rounded-lg p-6 md:col-span-1">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Menu</h2>
                <ul class="space-y-3">
                    <a href="#" id="menu-profile-info"
                        class="block text-gray-700 hover:text-blue-600 hover:font-medium">
                        🧍‍♂️ Informations du profil
                    </a>
                    <a href="#" id="menu-my-courses"
                        class="block text-gray-700 hover:text-blue-600 hover:font-medium">
                        📚 Mes cours
                    </a>
                    <a href="#" id="menu-settings"
                        class="block text-gray-700 hover:text-blue-600 hover:font-medium">
                        ⚙️ Paramètres
                    </a>
                </ul>
            </aside>

            <!-- Main Content -->
            <main class="bg-white shadow rounded-lg p-6 md:col-span-3">
                <!-- Section: Profile Info -->
                <div id="section-profile-info" class="{{ ($errors->any() || session('success')) ? 'hidden' : '' }}">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Bienvenue, {{ auth()->user()->name }}</h2>
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Vos informations personnelles</h3>
                    <div class="space-y-4">
                        <p class="text-gray-700"><strong>Nom : </strong>{{ auth()->user()->name }}</p>
                        <p class="text-gray-700"><strong>Email : </strong>{{ auth()->user()->email }}</p>
                        <p class="text-gray-700"><strong>Numéro de téléphone : </strong>{{ auth()->user()->phone }}</p>
                    </div>
                </div>

                <!-- Section: My Courses -->
                <div id="section-my-courses" class="hidden">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Mes cours</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse (auth()->user()->orders as $order)
                            <div class="bg-gray-100 shadow rounded-lg p-4">
                                <h4 class="text-md font-bold text-gray-800">{{ $order->formation->title }}</h4>
                                <p class="text-sm text-gray-600">{{ $order->formation->brief }}</p>
                            </div>
                        @empty
                            <p class="text-gray-700">Vous n'avez pas encore de cours.</p>
                        @endforelse
                    </div>
                </div>

                <!-- Section: Settings -->
                <div id="section-settings" class="{{ ($errors->any() || session('success')) ? '' : 'hidden' }}">
                    <!-- Alerts -->
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6"
                            role="alert">
                            <strong class="font-bold">Succès !</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
                                <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path d="M14.348 14.849a1 1 0 01-1.414 0L10 11.415l-2.934 2.935a1 1 0 01-1.415-1.414l2.934-2.935-2.934-2.934a1 1 0 011.415-1.415L10 8.585l2.934-2.934a1 1 0 011.414 1.415L11.415 10l2.934 2.934a1 1 0 010 1.415z" />
                                </svg>
                            </span>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6"
                            role="alert">
                            <strong class="font-bold">Erreur(s) !</strong>
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </ul>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3" style="cursor: pointer;" onclick="this.parentElement.style.display='none';">
                                <svg class="fill-current h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path d="M14.348 14.849a1 1 0 01-1.414 0L10 11.415l-2.934 2.935a1 1 0 01-1.415-1.414l2.934-2.935-2.934-2.934a1 1 0 011.415-1.415L10 8.585l2.934-2.934a1 1 0 011.414 1.415L11.415 10l2.934 2.934a1 1 0 010 1.415z" />
                                </svg>
                            </span>
                        </div>
                    @endif

                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Paramètres</h3>
                    <form method="POST" action="{{ route('frontend.profile.update') }}">
                        @csrf
                        
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium">Nom</label>
                            <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}"
                                class="mt-2 w-full p-2 border rounded-md">
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 font-medium">Nouveau mot de passe</label>
                            <input type="password" id="password" name="password"
                                class="mt-2 w-full p-2 border rounded-md">
                        </div>

                        <!-- Password confirm -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="block text-gray-700 font-medium">Confirmation du mot de passe</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="mt-2 w-full p-2 border rounded-md">
                        </div>
                        


                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Mettre à jour
                        </button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#menu-profile-info').on('click', function (e) {
            e.preventDefault();
            $('#section-profile-info').show();
            $('#section-my-courses, #section-settings').hide();
        });

        $('#menu-my-courses').on('click', function (e) {
            e.preventDefault();
            $('#section-my-courses').show();
            $('#section-profile-info, #section-settings').hide();
        });

        $('#menu-settings').on('click', function (e) {
            e.preventDefault();
            $('#section-settings').show();
            $('#section-profile-info, #section-my-courses').hide();
        });
    });
</script>

@endsection