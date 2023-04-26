<x-layout>
    
    <header class="headerMargin container-fluid min-vh-100">
        
        @if (session('message'))
        <div class="message-alert alert alert-success text-center alert-dismissible" role="alert">
            {{session('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </div>
            @endif
            
            
            <div class="row justify-content-center mb-3">
                <div class="col-10 p-5">
                    <h2 class="text-uppercase">Bentornato {{Auth::user()->name}} 👋</h2>
                </div>
            </div>
            
            @if($announcement_to_recheck->isNotEmpty())
            
            <div class="row justify-content-center p-3 mb-3">
                <div class="col-12 col-md-6 text-center bgMain p-3">
                    
                    <h3>ANNUNCI DA REVISIONARE</h3>
                    
                </div>
            </div>
            
            
            
            
            {{-- 𝗧𝗔𝗕𝗟𝗘 𝗔𝗡𝗡𝗨𝗡𝗖𝗜𝗢 --}}
            
            <div class="row justify-content-center mt-5">
                
                
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="textBlue ps-5">IMMAGINI</th>
                                <th scope="col" class="textBlue">DATA</th>
                                <th scope="col" class="textBlue">TITOLO</th>
                                <th scope="col" class="textBlue">DESCRIZIONE</th>
                                <th scope="col" class="textBlue">AUTORE</th>
                                <th scope="col" class="textBlue"></th>
                                <th scope="col" class="textBlue"></th>
                            </tr>
                        </thead>
                        
                        
                        <tbody class="p-4"> 
                            @foreach($announcement_to_recheck as $announcement)
                            <tr>
                                <th class="ps-5">
                                    
                                    {{-- 𝗠𝗢𝗗𝗔𝗟𝗘 𝗖𝗛𝗜𝗔𝗠𝗔 𝗜𝗠𝗠𝗔𝗚𝗜𝗡𝗜 --}}
                                    
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal{{$announcement->id}}">
                                        Mostra
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$announcement->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        
                                        <div class="modal-dialog modal-dialog-centered modal-xl">
                                            
                                            <div class="modal-content">
                                                
                                                <div class="modal-header d-flex justify-content-end border-0">
                                                    <div class="close-modale">
                                                        <button type="button" class="btn-close btn-close-white position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                </div>
                                                
                                                <div class="modal-body p-0">
                                                    
                                                    <div class="row d-flex justify-content-around align-items-center" >
                                                        
                                                        @foreach($announcement->images as $image)   
                                                        
                                                        <div class="col-4">
                                                            
                                                            <img src="{{$image->getUrl(300, 300)}}" class="p-3">
                                                            
                                                        </div>
                                                        
                                                        @if($image->labels)

                                                        <div class="col-3 text-center">
                                                            <h5 class="textMain pb-2"><i class="fa-solid fa-tag textMain pe-2"></i>LABELS</h5>

                                                            @foreach($image->labels as $label)
                                                            
                                                            <p class="d-inline fst-italic">{{$label}},</p>
                                                            
                                                            @endforeach
                                                            
                                                        </div>
                                                        @endif
                                                        
                                                        <div class="col-3">

                                                            <ul type="none" class="border-light-subtle border py-5">
                                                                <li>Adulti <span class="{{$image->adult}}"></span></li>
                                                                
                                                                <li>Satira <span class="{{$image->spoof}}"></span></li>
                                                                
                                                                <li>Contenuti sensibili <span class="{{$image->medical}}"></span></li>
                                                                
                                                                <li>Razzismo <span class="{{$image->racy}}"></span></li>
                                                                
                                                                <li>Contenuti violenti <span class="{{$image->violence}}"></span></li>
                                                            </ul>

                                                        </div>
                                                        
                                                    
                                                    @endforeach
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </th>
                            <td>{{$announcement->created_at->format('d/m/Y')}}</td>
                            <td>{{$announcement->title}}</td>
                            <td>{{$announcement->body}}</td>
                            <td>{{$announcement->user->name}}</td>
                            <td>
                                
                                <form method="POST" action="{{route('revisor.accept_announcement', ['announcement'=>$announcement->id])}}">
                                    
                                    @csrf
                                    @method('patch')
                                    
                                    <button type="submit" class="btn btn-success rounded-0" data-toggle="tooltip" title="Conferma l'inserimento del'annuncio">Accetta</button> 
                                </form>
                                
                            </td>
                            
                            <td>
                                
                                <form method="POST" action="{{route('revisor.reject_announcement', ['announcement'=>$announcement->id])}}">
                                    
                                    @csrf
                                    @method('patch')
                                    
                                    <button type="submit" class="btn btn-danger rounded-0" data-toggle="tooltip" title="Rifiuta l'annuncio eliminandolo">Rifiuta</button>
                                    
                                </form>
                                
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>  
                </table>
                
            </div>
        </div>
        
        @else 
        
        
        <div class="row justify-content-center p-3 mb-3">
            <div class="col-12 col-md-6 text-center bgMain p-3">
                
                <h3>NON CI SONO ANNUNCI DA REVISIONARE</h3> 
                
            </div>
        </div>
        
        @endif
        
        
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