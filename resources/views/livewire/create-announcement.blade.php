<div>
  
  @if(session()->has('message'))
  
  <div class="message-alert alert alert-success text-center alert-dismissible" role="alert">

    {{session('message')}}

     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </div>
  
  @endif

    <div class="row justify-content-center p-3">
      <div class="col-12 col-md-6 text-center mt-5">
          <h3>INSERISCI UN ANNUNCIO</h3>    
      </div>
    </div>
    
    <div class="row justify-content-center">
      
      <div class="col-12 col-md-8 p-3">
        
        <form wire:submit.prevent="store">
          
          <div class="p-4 bgWhite border-bottom d-flex justify-content-between">
            
            <label for="exampleInputTitle" class="form-label textBlue">Titolo annuncio</label>
            
            @error('title')
            <span class="error text-danger">{{$message}}</span>
            @enderror
            
            <input wire:model.lazy="title"  type="text" class="form-control inputAd @error('title') is-invalid @enderror" id="exampleInputTitle" aria-describedby="titleHelp" placeholder="ad es. tenda da campeggio">
            
          </div>
          
          <div class="mb-4 bgWhite p-4 d-flex justify-content-between">
            <label for="exampleInputDescription" class="form-label textBlue">Descrizione</label>
            
            @error('body')
            <span class="error text-danger d-flex">{{$message}}</span>
            @enderror
            
            <textarea  wire:model.lazy="body" type="text" class="form-control inputAd @error('body') is-invalid @enderror" id="exampleInputDescription" rows="5" placeholder="ad es. articolo in buone condizioni"> 
            </textarea>
            
          </div>
          
          <div class="mb-4 bgWhite p-4 d-flex justify-content-between">
            <label for="exampleInputPrice" class="form-label textBlue">Prezzo</label>
            
            @error('price')
            <span class="error text-danger">{{$message}}</span>
            @enderror
            
            <input  wire:model.lazy="price" type="number" step="0.01" class="form-control inputAd @error('price') is-invalid @enderror" id="exampleInputPrice" placeholder="0.00 €">
            
          </div>
          
          <div class="mb-4 p-4 bgWhite d-flex justify-content-between">
            <label for="exampleInputDescription" class="form-label textBlue">Categorie</label>
            
            @error('category')
            <span class="error text-danger">{{$message}}</span>
            @enderror
            
            <select wire:model.defer="category" id="category" class="form-select inputAd @error('category') is-invalid @enderror" aria-label="Default select example">
              <option>Scegli la categoria</option>
              
              @foreach ($categories as $category)
              
              <option value="{{$category->id}}">{{$category->name}}</option>   
              
              @endforeach
              
            </select>
            
          </div>

          <div class="mb-4 bgWhite p-4">
            <label for="exampleInputPrice" class="form-label textBlue">Inserisci immagini</label>
              
            <input  wire:model="temporary_images" type="file" id="images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror" placeholder="img" accept=".jpg,.jpeg,.png,.webp"/>

            {{-- @error('image')
            <span class="error text-danger">{{$message}}</span>
            @enderror --}}

            @error('temporary_images.*')
            <span class="error text-danger">{{$message}}</span>
            @enderror

            @error('temporary_images')
            <span class="error text-danger">{{$message}}</span>
            @enderror
            
            
          </div>

          @if(!empty($images))

          <div class="row border border-4 border-info rounded shadow py-4 mb-4">

            @foreach ($images as $key=>$image)

            {{-- @dd($key->$image) --}}

            <div class="col-4 my-3 position-relative">

              <button wire:click="removeImage({{$key}})"  type="button" class="btn btn-danger my-2 btn-close-img"><i class="fa-solid fa-xmark textWhite"></i></button>

              <img src="{{$image->temporaryUrl()}}" class="img-fluid p-4">

            </div>
                
            @endforeach

          </div>

          @endif

          <div class="text-end">
            <button type="submit" id="createAnnouncement" class="btn btn-dark bgMain border-0 rounded-0 px-5">Inserisci</button>
          </div>
         
        </form> 
    
      </div>
    </div>
  </div>
  
  
  
  
  
  
  
</div>
