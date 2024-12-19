@extends('template')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<div class="min-h-screen flex items-center justify-center bg-gray-50">
    <div class="container mx-auto px-6 lg:px-20 py-12 bg-white shadow-lg rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Colonne de gauche : Coordonnées -->
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-gray-800">
                    Entrer en contact
                </h2>
                <p class="text-gray-600">
                    Nous serions ravis de vous entendre ! Contactez-nous via le formulaire ou les détails ci-dessous.
                </p>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">
                        📍 Adresse :
                    </h3>
                    <p class="text-gray-600">
                        {{ setting('site.adresse') }}
                    </p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">
                        ☎️ Téléphone :
                    </h3>
                    <p class="text-gray-600">
                        {{ setting('site.phone') }}
                    </p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">
                        ✉️ Email :
                    </h3>
                    <p class="text-gray-600">
                        {{ setting('site.email') }}
                    </p>
                </div>
            </div>
            
            <!-- Colonne de droite : Formulaire de contact -->
            @livewire('contact')
        </div>
    </div>
</div>


@endsection
