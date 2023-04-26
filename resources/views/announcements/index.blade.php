<x-layout>
    
    
    <header class="headerMargin container-fluid bgGrey min-vh-100">
        
        <div class="row align-items-center shadow bgWhite mb-5 p-4">
            <div class="col-12 px-5">
                <h2 class="p-3 textMain ms-5 roundContent">{{__('translate.AllArticles')}}</h2>    
            </div>
        </div>
        
        
        <div class="row px-5 justify-content-center">
            
            @forelse ($announcements as $announcement)
            
            <div class="col-12 col-md-3 p-2 mt-3 d-flex justify-content-center">
                
                <div class="card rounded-0 border-0" style="width: 16rem;">
                    
                    <img src="{{$announcement->images->first()->getUrl(300, 300)}}" class="card-img-top rounded-0" alt="">
                    
                    <div class="card-body ps-3 mt-2">
                        <h5 class="textBlue text-end">{{$announcement->price}}€</h5>
                        <h5 class="card-title fs-6 text-uppercase">{{$announcement->title}}</h5>
                        {{-- <p class="card-text">{{$announcement->body}}</p> --}}
                        <p class="text-secondary">{{$announcement->category->name}}</p>
                        
                        <div class="justify-content-between d-flex align-items-center">
                            <a href="{{route('showAnnouncement', compact('announcement'))}}" class="btn btn-dark bgMain border-0 rounded-0 my-2">Visualizza</a>
                            
                            <small class="fst-italic">{{$announcement->created_at->format('d/m/Y')}}</small>
                        </div>  
                    </div>
                    
                </div>
                
            </div>
            
            @empty
            
            <div class="col-12">
                <div class="alert alert-warning py-3 shadow">
                    <p class="lead">Non sono disponibili annunci per questa ricerca</p>
                </div>
            </div>
            
            @endforelse
            
            {{$announcements->links()}}
            
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