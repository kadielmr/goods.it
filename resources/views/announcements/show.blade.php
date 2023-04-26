<x-layout>
    
    
    <header class="headerMargin container-fluid bgGrey min-vh-100">
        
        {{-- 𝗕𝗢𝗧𝗧𝗢𝗡𝗘 𝗧𝗢𝗥𝗡𝗔 𝗜𝗡𝗗𝗜𝗘𝗧𝗥𝗢 --}}
        <div class="row">
            <div class="col-12 p-3">
                <a href="{{route('indexAnnouncements')}}" class="btn textMain"><i class="fa-solid textMain fa-angle-left"></i> Torna agli annunci</a>
            </div>
        </div>
        
        {{-- 𝗖𝗔𝗥𝗢𝗦𝗘𝗟𝗟𝗢 --}}
        <div class="row justify-content-evenly p-3">
            
            <div class="col-12 col-md-7 text-center bgWhite order-2 order-md-1">
                
                <swiper-container style="--swiper-navigation-color: #272727; --swiper-pagination-color: #fff" class="mySwiper p-5"
                thumbs-swiper=".mySwiper2" loop="true" space-between="10" navigation="true">

                @foreach($announcement->images as $image)

                <swiper-slide>
                    <img src="{{$image->getUrl(300, 300)}}" />
                </swiper-slide>
                    
                @endforeach
 
                </swiper-container>

            
            <swiper-container class="mySwiper2" loop="true" space-between="10" slides-per-view="4" free-mode="true"
            watch-slides-progress="true">
            
            @foreach($announcement->images as $image)

                <swiper-slide>
                    <img src="{{$image->getUrl(300, 300)}}" style="width:150px"/>
                </swiper-slide>
                    
                @endforeach
            
            </swiper-container>
        
        </div>
    
    {{-- 𝗦𝗘𝗭𝗜𝗢𝗡𝗘 𝗔𝗥𝗧𝗜𝗖𝗢𝗟𝗢 --}}
    
        <div class="col-12 col-md-3 bgWhite p-4 order-1 order-md-2">
        
        <h3 class="my-3 text-uppercase">{{$announcement->title}}</h3>
        <p class="">{{$announcement->body}}</p>
        <h3 class="textMain">€ {{$announcement->price}}</h3>
        <p class="textMain my-3">Iva inclusa</p>
        
        <a href="" class="btn p-0">{{$announcement->category->name}}</a>
        
        <hr>
        <p class="text-secondary my-2"><i class="fa-regular fa-clock"></i> Pubblicato il {{$announcement->created_at->format('d/m/Y')}}</p>
        <p class="text-secondary mb-5"><i class="fa-regular fa-pen-to-square"></i> {{$announcement->user->name ?? ''}}</p>
        <hr>

        <div class="d-flex p-2">
            <p class="text-center"><i class="fa-solid fa-circle-check textMain fa-xl"></i></p>
            <p class="px-3"><b class="textMain">ANNUNCIO REVISIONATO</b> annuncio sottoposto a revisione da parte dei nostri revisor, al fine di mantenere la community in linea con gli standard di qualità e di rispetto della privacy</p>
        </div>

        
        
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





{{-- 𝗦𝗟𝗜𝗗𝗘𝗥 --}}

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>



</x-layout>