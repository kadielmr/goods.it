<x-layout>
  
  <header class="headerMargin container-fluid min-vh-100">
    
    <div class="row justify-content-evenly align-items-center mt-4 p-2 p-md-5">
      
      <div class="col-12 col-md-6 p-3 p-md-5 bgGrey shadow">
        
        <h2 class="textMain">LOGIN</h2>
        <p class="textMain my-5">Effettua l'accesso per usufruire al meglio dei nostri servizi</p>
        
        <form method="POST" action="{{route('login')}}" class="p-3">
          
          @csrf
          
          <div class="mb-4">
            <label for="exampleInputEmail" class="form-label">Indirizzo email</label>
            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">

            @error('email')
            <span class="error text-danger d-flex">{{$message}}</span>
            @enderror
            
            
          </div>
          
          <div class="mb-4">
            <label for="exampleInputPassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
            
            
            @error('password')
            <span class="error text-danger d-flex">{{$message}}</span>
            @enderror

          </div>
          
          <div class="mb-4 form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ricordati di me !</label>
          </div>
          
          <button type="submit" class="btn btn-dark rounded-0 border-0 mt-4">Accedi</button>
        </form>
        
      </div>
      
      
      <div class="col-12 col-md-6 text-center p-5">
        
        <h2 class="p-3">NON HAI UN ACCOUNT ?</h2>
        <p class="textMain my-4">Effettua la registrazione per usufruire al meglio dei nostri servizi e scoprire le ultime novità</p>
        <a href="{{route('register')}}" class="btn btn-dark bgMain p-2 rounded-0 border-0" style="width: 200px">REGISTRATI</a>
        
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