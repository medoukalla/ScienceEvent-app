@extends('template')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>


{{-- <section class="profile-wrapper">
    <div class="w-layout-blockcontainer container w-container">
        <div class="profile-wrapper-flex">
            <!-- Sidebar -->
            <div class="class-details-instructor-inner" style="width: 30%">
              <div class="r-side-floating">
                <h2 class="profile-menu-title">Votre menu</h2>
                <ul>
                  <a href="#" id="menu-profile-info" class="profile-link">Informations du profil</a>
                  <a href="#" id="menu-my-courses" class="profile-link">Mes cours</a>
                  <a href="#" id="menu-settings" class="profile-link">Paramètres</a>
                </ul>
              </div>
            </div>
            <!-- Section: Profile Info -->
            <div id="section-profile-info" class="{{ ($errors->any() || session('success')) ? 'hidden' : '' }}" style="width: 70%">
                <h2 class="profile-menu-title">Bienvenue, {{ auth()->user()->name }}</h2>
                <div>Vos informations personnelles</div>
                <div class="profile-info">
                    <div><span>Nom :</span>{{ auth()->user()->name }}</div>
                    <div><span>Email :</span>{{ auth()->user()->email }}</div>
                    <div><span>Numéro de téléphone :</span>{{ auth()->user()->phone }}</div>
                </div>

                <!-- Section: My Courses -->
                <div id="section-my-courses" class="hidden">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Mes cours</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach (auth()->user()->orders as $order)
                            <div class="bg-gray-100 shadow rounded-lg p-4">
                                <h4 class="text-md font-bold text-gray-800">{{ $order->formation->title }}</h4>
                                <p class="text-sm text-gray-600">{{ $order->formation->brief }}</p>
                            </div>
                        @endforeach
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
        </div>
    </div>
</section> --}}

<section class="profile-wrapper">
    <div class="w-layout-blockcontainer container w-container">
        <div class="profile-wrapper-flex">
            <div class="profile-left">
                <div class="profile-name">
                    {{ Auth::user()->name }}
                </div>
                <hr style="margin: 10px 0">
                <div class="profile-nav">
                    <button onclick="$(this).addClass('active').siblings().removeClass('active'); showDiv(1);" class="">
                        <img src="{{ asset('assets/svg/profile-formation.svg') }}" alt="profile formation">
                        Information du profil
                    </button>
                    <button onclick="$(this).addClass('active').siblings().removeClass('active'); showDiv(2)" class="active">
                        <img src="{{ asset('assets/svg/cours.svg') }}" alt="profile formation">
                        Mes inscriptions
                    </button>
                    <button onclick="$(this).addClass('active').siblings().removeClass('active'); showDiv(4)" class="">
                        <img src="{{ asset('assets/svg/facture.svg') }}" alt="profile formation">
                        Les factures
                    </button>
                    <button onclick="$(this).addClass('active').siblings().removeClass('active'); showDiv(3)" class="">
                        <img src="{{ asset('assets/svg/settings.svg') }}" alt="profile formation">
                        Paramètres
                    </button>
                </div>
            </div>
            <div class="profile-right">
                <div id="divOne" class="content hidden">
                    <div class="hello-user">
                        Bienvenue, <span>{{ Auth::user()->name }}</span>
                    </div>
                    <span class="sub-title">Vos informations personnelles :</span>
                    <hr style="margin: 10px 0">
                    <div class="infos-content">
                        <div class="info">
                            Nom : <span>{{ Auth::user()->name }}</span>
                        </div>
                        <div class="info">
                            Email : <span>{{ Auth::user()->email }}</span>
                        </div>
                        <div class="info">
                            Date d'inscription : <span>{{ Auth::user()->created_at->format('d/m/Y') }}</span>
                        </div>
                    </div>
                </div>
                <div id="divTwo" class="content">
                    <div class="hello-user">
                        Mes inscriptions
                    </div>
                    <span class="sub-title">Découvrez les formations que vous avez acquises :</span>
                    <hr style="margin: 10px 0">
                    <div class="courses-wrapper">
                        <table class="courses-table">
                        <thead>
                            <tr>
                            <th>Formation</th>
                            <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach (auth()->user()->orders as $order)
                                @if ( $order->status == 1 )
                                    <tr>
                                        <td>
                                            <div class="cours">
                                                <img src="{{ asset('assets/svg/cours-table.svg') }}" alt="">
                                                {{ $order->formation->title }}
                                            </div>
                                        </td>
                                        <td class="pending" >En attente</td>
                                    </tr>
                                @elseif ( $order->status == 2 )
                                    <tr>
                                        <td>
                                            <div class="cours">
                                                <img src="{{ asset('assets/svg/cours-table.svg') }}" alt="">
                                                {{ $order->formation->title }}
                                            </div>
                                        </td>
                                        <td class="pending" >Non payée</td>
                                    </tr>
                                @elseif ( $order->status == 3 )
                                    <tr>
                                        <td>
                                            <div class="cours">
                                            <img src="{{ asset('assets/svg/cours-table.svg') }}" alt="">
                                            {{ $order->formation->title }}
                                            </div>
                                        </td>
                                        <td >
                                            <a href="{{ route('frontend.formation.access', $order->formation) }}">
                                                <div class="discover">
                                                    <span>Discover cours</span>
                                                    <img src="{{ asset('assets/svg/arrow-right.svg') }}" alt="">
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                @elseif ( $order->status == 4 )
                                    <tr>
                                        <td>
                                            <div class="cours">
                                            <img src="{{ asset('assets/svg/cours-table.svg') }}" alt="">
                                            {{ $order->formation->title }}
                                        </div>
                                        </td>
                                        <td class="refuse">Annulé</td>
                                    </tr>
                                @endif
                                
                            @endforeach

                        </tbody>
                    </table>
                    </div>
                </div>
                <div id="divTree" class="content hidden">
                    <div class="hello-user">
                    Paramètres
                    </div>
                    <span class="sub-title">Changer votre nom ou votre mot de passe pour protéger votre compte :</span>
                    <hr style="margin: 10px 0">
                    <div class="infos-content">
                        <form method="POST" action="{{ route('frontend.profile.update') }}">
                            @csrf

                            <div class="info">
                                Nom : <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}">
                            </div>
                            <div class="info">
                                Nouveau mot de passe : <input type="password"  name="password" id="" placeholder="******">
                            </div>
                            <div class="info">
                                Confirmation du mot de passe : <input type="text" name="password_confirmation" id="" placeholder="*******">
                            </div>

                            <div class="info">
                                <button type="submit" class="bg-blue-300 text-white px-3 py-2 rounded hover:bg-blue-700" style="font-size: 16px;">
                                    Mettre à jour
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
                <div id="divFour" class="content hidden">
                    @livewire('invoices')
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection