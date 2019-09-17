@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Rakida
        @endcomponent
    @endslot
{{-- Body --}}
    Bienvenue Dans Notre Plateforme Rakida <p><b>Voici Vos Information....Veuillez Cliquer sur le lien pour acceder à la page de connexion </b> </p>{{ $user->entite }}<br>{{$user->login }}<br>{{ $user->mdp }}
<br>
www.eco-industriedurable.com
{{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset
{{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} Plateforme-Ville-Durable. Super FOOTER!
        @endcomponent
    @endslot
@endcomponent