<x-layout>
    
    <header class="headerMargin container-fluid min-vh-100">
        
        
        <div class="row justify-content-center p-2 p-md-5">
            
            <div class="col-12 col-md-7 p-3 p-md-5 bgGrey shadow">
                
                <h2 class="text-center">CREA UN NUOVO ACCOUNT</h2>
                <p class="my-5 text-center">Effettua l'iscrizione per usufruire al meglio dei nostri servizi ed accedere a tutte le funzionalità</p>
                
                <form method="POST" action="{{route('register')}}" class="p-3" >
                    
                    @csrf
                    <div class="mb-4">
                        
                        <label for="exampleInputName" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="exampleInputName" aria-describedby="nameHelp">

                        @error('name')
                        <span class="error text-danger d-flex">{{$message}}</span>
                        @enderror
                        
                    </div>
                    
                    <div class="mb-4">
                        
                        <label for="exampleInputEmail" class="form-label">Indirizzo email</label>
                        <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Non condivideremo la tua mail con nessun'altro.</div>

                        @error('email')
                        <span class="error text-danger d-flex">{{$message}}</span>
                        @enderror
                        
                    </div>
                    
                    <div class="mb-4">
                        
                        <label for="exampleInputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" aria-describedby="passwordHelp">
                        
                        @error('password')
                        <span class="error text-danger d-flex">{{$message}}</span>
                        @enderror
                        
                    </div>
                    
                    <div class="mb-4">
                        <label for="exampleInputPasswordConfirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="exampleInputPasswordConfirmation">

                        @error('password_confirmation')
                        <span class="error text-danger d-flex">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="mt-5 d-flex flex-column p-4">
                        
                        <button type="submit" class="btn  btn-outline-dark borderMain rounded-0 textMain p-2">Registrati</button>  
                        
                    </div>
                    
                    
                </form>
                
            </div>
        </div>
        
        
    </header>
    
    
    {{-- 𝗙𝗢𝗢𝗧𝗘𝗥 --}}
    
    <footer class="container-fluid footer bgGrey pt-5">
        
        <div class="row justify-content-center">
            <hr style="width:90%">
            <div class="col-6">
                <ul class="list-unstyled d-flex justify-content-around" style="font-size: 0.7rem">         
                    <li><a href="">Copyright © GoodsSports Inc.</a></li>
                    <li> | </li>
                    <li><a href="">Privacy Policy</a></li>
                    <li> | </li>
                    <li><a href="">Termini di utilizzo</a></li>
                    <li> | </li>
                    <li><a href="">Legale</a></li> 
                </ul> 
            </div>
            
        </div>
        
    </footer> 
    
    
    
</x-layout>