<x-layout>
    
    <header class="container-fluid headerCus"> 
             
         <div class="row vh-100 justify-content-center align-items-center pt-5 px-3 position-relative">

                @if(session('access.denied'))
    
                <div class="col-3 message-alert alert alert-dismissible alert-light shadow text-center alertCus shadow" role="alert">

                        {{session('access.denied')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                </div> 
                
                 @endif
        
                 @if(session('message'))
            
                <div class="col-3 message-alert alert alert-dismissible alert-light shadow text-center alertCus shadow" role="alert">
                    {{session('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </div> 
                
                @endif
                   
                
            <div class="col-md-8 text-center" data-aos="fade-up">
                <h1 class="text-uppercase">{{__('translate.Training')}}</h1>
                <p class="textWhite px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia unde rem vitae consequuntur veritatis cum perferendis illo ducimus impedit. Neque a culpa voluptatem</p>
                <a class="btn btn-light textBlack rounded-0 border-0 py-2 px-4 mt-3" href="{{route('indexAnnouncements')}}">{{__('translate.Findout')}}</a>
            </div>
               
            </div> 

            <div class="row justify-content-end">
                <div class="col-2 text-end pe-5 position-relative">
                    <a href="#"><i class="fa-solid fa-circle-chevron-up upToTop d-none textMain fa-2x position-fixed pb-5 bottom-0"></i></a> 
                </div>
            </div>
            
        </header>

     {{-- 𝗠𝗔𝗜𝗡 --}}
        
    <main class="container my-5">
        
    {{-- 𝗦𝗪𝗜𝗣𝗘𝗥 𝗦𝗟𝗜𝗗𝗘𝗦 𝗖𝗔𝗧𝗘𝗚𝗢𝗥𝗜𝗘 --}}
        <div class="row justify-content-center pt-5">
            <div class="col-12 text-center text-md-start">
                <h2>{{__('translate.DiscoverSport')}}</h2>
            </div>
        </div>

        <div class="row justify-content-center my-5">

            <div class="col-12 swiper mySwiper">  
    
                <div class="swiper-wrapper"> 

                    <div class="swiper-slide d-flex flex-column align-items-center">
                        <a href="/show-category/1" class="btn p-0">
                        <img src="/media/calcio.jpg" alt="basket" class="imgCategory img-fluid rounded-3">
                        </a>
                        <a href="/show-category/1" class="btn p-0"> <h5 class="pt-3">SOCCER</h5> </a>
                    </div>

                    <div class="swiper-slide d-flex flex-column align-items-center">
                        <a href="/show-category/2" class="btn p-0">
                        <img src="/media/pallavolo.jpg" alt="basket" class="imgCategory img-fluid rounded-3">
                        </a>
                        <a href="/show-category/2" class="btn p-0"> <h5 class="pt-3">VOLLEYBALL</h5> </a>
                    </div>

                    <div class="swiper-slide d-flex flex-column align-items-center">
                        <a href="/show-category/3" class="btn p-0">
                        <img src="/media/basket.jpg" alt="basket" class="imgCategory img-fluid rounded-3">
                        </a>
                        <a href="/show-category/3" class="btn p-0"> <h5 class="pt-3">BASKET</h5> </a>
                    </div>

                    <div class="swiper-slide d-flex flex-column align-items-center">
                        <a href="/show-category/4" class="btn p-0">
                        <img src="/media/tennis.jpg" alt="basket" class="imgCategory img-fluid rounded-3">
                        </a>
                        <a href="/show-category/4" class="btn p-0"> <h5 class="pt-3">TENNIS</h5> </a>
                    </div>

                    <div class="swiper-slide d-flex flex-column align-items-center">
                        <a href="/show-category/5" class="btn p-0">
                        <img src="/media/nuoto.jpg" alt="basket" class="imgCategory img-fluid rounded-3">
                        </a>
                        <a href="/show-category/5" class="btn p-0"> <h5 class="pt-3">SWIMMING</h5> </a>
                    </div>

                    <div class="swiper-slide d-flex flex-column align-items-center">
                        <a href="/show-category/6" class="btn p-0">
                        <img src="/media/ciclismo.jpg" alt="basket" class="imgCategory img-fluid rounded-3">
                        </a>
                        <a href="/show-category/6" class="btn p-0"> <h5 class="pt-3">CYCLING</h5> </a>
                    </div>

                    <div class="swiper-slide d-flex flex-column align-items-center">
                        <a href="/show-category/7" class="btn p-0">
                        <img src="/media/running.jpg" alt="basket" class="imgCategory img-fluid rounded-3">
                        </a>
                        <a href="/show-category/7" class="btn p-0"> <h5 class="pt-3">RUNNING</h5> </a>
                    </div>

                    <div class="swiper-slide d-flex flex-column align-items-center">
                        <a href="/show-category/8" class="btn p-0">
                        <img src="/media/marziali.jpg" alt="basket" class="imgCategory img-fluid rounded-3">
                        </a>
                        <a href="/show-category/8" class="btn p-0"> <h5 class="pt-3">MARTIAL ARTS</h5> </a>
                    </div>

                    <div class="swiper-slide d-flex flex-column align-items-center">
                        <a href="/show-category/9" class="btn p-0">
                        <img src="/media/trekking.jpg" alt="basket" class="imgCategory img-fluid rounded-3">
                        </a>
                        <a href="/show-category/9" class="btn p-0"> <h5 class="pt-3">TREKKING</h5> </a>
                    </div>

                    <div class="swiper-slide d-flex flex-column align-items-center">
                        <a href="/show-category/10" class="btn p-0">
                        <img src="/media/danza.jpg" alt="basket" class="imgCategory img-fluid rounded-3">
                        </a>
                        <a href="/show-category/10" class="btn p-0"> <h5 class="pt-3">DANCING</h5> </a>
                    </div>

            </div>

        </div>

    </div>




    {{-- 𝗔𝗡𝗡𝗨𝗡𝗖𝗜 𝗛𝗢𝗠𝗘 --}}
     
    <div class="row justify-content-around align-items-center">
        
        <div class="col-12 col-md-6 position-relative" data-aos="fade-right">
            <a href="{{route('indexAnnouncements')}}" class="">
                <img src="/media/img11.jpg" alt="basket" class="img-fluid rounded-3">
            </a>
        <div class="position-absolute bottom-0 start-0 m-5">
            <h5 class="textWhite">{{__('translate.SportSelection')}}</h5>
            <p class="textWhite">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sem orci</p>
            <a href="{{route('indexAnnouncements')}}" class="btn btn-dark bgMain border-0 textWhite rounded-0 ">{{__('translate.NewsBtn')}}</a>
        </div>
             
        </div>


        <div class="col-12 col-md-6">

            <div class="row p-4 justify-content-center vw-50">
                
                @foreach ($announcements as $announcement)
                
                <div class="col-6 col-md-4 p-2 justify-content-center d-flex">
                    
                    <div class="card p-2 rounded-0" style="width: 11rem;">
                        
                        <img src="{{$announcement->images->first()->getUrl(300, 300)}}" class="card-img-top rounded-0" alt="...">
                        
                        <div class="card-body p-2 d-flex flex-column justify-content-between align-items-center text-center" style="overflow: hidden; height: 190px">
                            
                            <h5 class="card-title mt-2 text-uppercase fs-6">{{$announcement->title}}</h5>
                            
                            <p class="textBlue fst-italic">{{$announcement->category->name}}</p>
                            
                            <p class="textBlue fw-bold">€ {{$announcement->price}}</p>
                            
                            <a href="{{route('showAnnouncement', compact('announcement'))}}" class="textMain" style="font-size:1rem">{{__('translate.View')}}</a>
                            
                            {{-- <small class="textGrey">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</small> --}}
                            
                        </div>
                        
                    </div>
                    
                </div>  
                @endforeach
                
            </div>

         </div>

    </div>
                   
            
</main>
        
        


{{-- 𝗙𝗢𝗢𝗧𝗘𝗥 --}}
               
<footer class="container-fluid footer bgGrey">
    
    <div class="row justify-content-center p-5">
            
        <div class="col-4 col-md-2 text-center text-md-start">    
            <h5 class="fs-6">{{__('translate.Service')}}</h5>
            <ul class="list-unstyled" style="font-size: 0.9rem">
                <li>{{__('translate.Contact1')}}</li>
                <li>{{__('translate.Contact2')}}</li>
                <li>{{__('translate.Contact3')}}</li>  
                <li>{{__('translate.Contact4')}}</li>
                <li>Privacy</li>                          
            </ul>  
        </div>

        <div class="col-4 col-md-2 text-center text-md-start">    
            <h5 class="fs-6">JOBS</h5> 
            <ul class="list-unstyled" style="font-size: 0.9rem">
            <li><a href="{{route('workWithUs')}}" class="text-decoration-none">{{__('translate.WorkWith')}}</a></li>              
            <li><a href="{{route('homeRevisor')}}" class="text-decoration-none">{{__('translate.Revisor')}}</a></li>
            <li>{{__('translate.Ethic')}}</li>  
        </ul>   
        </div>

        <div class="col-4 col-md-2 text-center text-md-start">    
            <h5 class="fs-6">ACCOUNT</h5>   
            <ul class="list-unstyled" style="font-size: 0.9rem">       
            <li><a href="{{route('login')}}" class="text-decoration-none">Login</a></li>
            <li><a href="{{route('register')}}" class="text-decoration-none">Sign In</a></li>
            </ul>          
        </div>

        <div class="col-6 col-md-2 text-center text-md-start">    
            <h5 class="fs-6">{{__('translate.Service2')}}</h5>   
            <ul class="list-unstyled" style="font-size: 0.9rem">       
            <li><a href="{{route('indexAnnouncements')}}" class="text-decoration-none">{{__('translate.Buy')}}</a></li>
            <li><a href="{{route('createAnnouncement')}}" class="text-decoration-none">{{__('translate.Sell')}}</a></li>
            <li><a href="{{route('indexAnnouncements')}}" class="text-decoration-none">{{__('translate.News')}}</a></li>
            </ul>           
        </div>

        <div class="col-6 col-md-2 text-center text-md-start">    
            <h5 class="fs-6">SEGUICI SU</h5>
            <ul class="list-unstyled">         
            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href=""><i class="fa-brands fa-tiktok"></i></a></li> 
            </ul>           
        </div>
   
    </div>

    <div class="row justify-content-center">
        <hr style="width:90%">
        <div class="col-12 col-md-6">
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
        
        
        
        
        
        
        
        
    <!-- Swiper JS -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- AosJS -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Initialize Swiper -->
    <script>

    var swiper = new Swiper(".mySwiper", {
        grabCursor: true,
        centeredSlides: false,
        loop: true,
        spaceBetween: 40,
    //   navigation: {
    //     nextEl: ".swiper-button-next",
    //   },
      autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },

        breakpoints:{
            768:{
                slidesPerView: "2",
            },
            1200:{
                slidesPerView: "5",
            },
        }

    });

    </script>
  

    {{-- inizialize aos --}}

    <script>
    AOS.init({
    delay: 500,
    easing: 'linear',
    offset: 10,
    });
    </script>

        
         
        
</x-layout>