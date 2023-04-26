{{-- <x-layout>


<div class="container-fluid ">
    <div class="row ">
        <div class="col-12">
            <h2 class="text-center verify">Grazie per esserti iscritto</h2>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 ">
            <p class="text-center">Prima di cominciare verifica il tuo indirizzo email cliccando sul link che ti abbiamo appena inviato</p>
            @if(session ('status') == 'verification-link-sent')
                <div class="alert alert-success verify">
                    Ti abbiamo inviato una nuova email di registrazione.
                </div>
            @endif --}}

            {{-- EMAIL DI VERIFICA --}}
            {{-- <form action="{{route('verification.send')}}" method="POST">
            @csrf
                <button class="btn-block btn-lg">Invia email di verifica </button>
            </form> --}}

            {{-- LOGOUT --}}
            {{-- <form action="{{route('logout')}}" method="POST">
            @csrf
                <p>Stai riscontrando problemi?</p>
                <button class="btn-block btn-lg">Logout </button>
            </form>



        </div>
    </div>
</div>


</x-layout> --}}