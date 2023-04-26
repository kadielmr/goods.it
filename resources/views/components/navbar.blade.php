<nav class="navbar bgWhite position-fixed vw-100" id="mainNav">
    
    <div class="container-fluid p-2" id="navContainer">
        
        {{-- 𝗹𝗼𝗴𝗼 𝗯𝗹𝗮𝗰𝗸 --}}
        <div class="me-auto">
            <a class="navbar-brand p-3 img-fluid" href="{{route('home')}}"><img src="/media/logo2.svg" alt="" style="width:8rem"></a>
        </div>
        {{-- 𝘀𝗲𝗮𝗿𝗰𝗵𝗯𝗮𝗿 --}}
        
        <div class="d-none d-md-block">
            
            <form method="GET" action="{{route('searchAnnouncements')}}" class="searchform" role="search">
                
                <input name="searched" class="form-control me-2 inputsearch" type="search" placeholder="What can we help you find?" aria-label="Search">
                <button class="btn bgBlack textWhite p-3 btnsearch" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                
            </form>
            
        </div>
        
        {{-- menu utente + inserisci annuncio e bottone menu --}}
        <div class="d-flex justify-content-center align-items-center ms-auto">
            
            <div class="dropdown mx-2">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-person-walking fa-xl textBlue userIcon"></i>
                </a>
                <ul class="dropdown-menu shadow rounded-0 borderBlack text-center drop-user">
                    
                    @guest
                    
                    <li><a class="btn btn-dark rounded-0 my-2 px-4" href="{{route('login')}}">Login</a></li>
                    
                    <li><a class="dropdown-item my-2" href="{{route('register')}}">Registrati</a></li>
                    
                    
                    @endguest
                    
                    
                    @auth
                    
                    @if(Auth::user()->is_revisor)
                    
                    <li>                        
                        <a class="dropdown-item my-2" href="{{route('homeRevisor')}}">Area Revisore
                            <span class="badge textWhite bgMain">{{App\Models\Announcement::toBeRevisionedCount()}}</span></a>
                        </li>
                        
                        @endif
                        
                        <li><button class="btn btn-dark my-2 rounded-0" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</button>
                            <form method="POST" action="{{route('logout')}}" id="form-logout" class="d-none">@csrf</form>
                        </li>
                        @endauth
                        
                    </ul>
                </div>

                {{-- 𝗺𝗲𝗻𝘂 𝗹𝗮𝗻𝗴 --}}
                <div class="dropdown d-none d-md-block mx-3">
                    <a class="nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-earth-europe textBlue"></i>
                    </a>
                    <ul class="dropdown-menu shadow rounded-0 borderBlack text-center drop-user">
                        <li><x-_locale lang="it"/></li>
                        <li><x-_locale lang="en"/></li>
                        <li><x-_locale lang="es"/></li> 
                    </ul>
                </div>
                
                {{-- 𝗯𝘁𝗻 𝗮𝗻𝗻𝘂𝗻𝗰𝗶𝗼 --}}
                <div class="d-none d-md-block mx-3">
                    <a class="btn btnAnnuncio px-3 py-2 borderMain textBlue" href="{{route('createAnnouncement')}}">
                        <i class="fa-regular fa-square-plus textBlue pe-2"></i>{{__('translate.Insert')}}</a>
                    </div>
                    
                    
                    
                    <div class="d-flex me-2">
                        <button class="navbar-toggler border-0 menu-button pt-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <i class="fa-solid fa-bars textBlue fa-2x"></i><span class="mt-1 textBlue">MENU</span>
                        </button>   
                    </div>       
                </div> 
                
            </div>     
            
            {{-- 𝗠𝗘𝗡𝗨 𝗦𝗜𝗗𝗘𝗕𝗔𝗥 --}}
            
            <div class="offcanvas offcanvas-end bgWhite p-0" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header position-relative"> 
                    <h2 class="offcanvas-title textBlue p-2" id="offcanvasNavbarLabel">MENU</h2> 
                    <div class="close-modale">
                        <button type="button" class="btn-close btn-close-white position-absolute" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    
                </div>
                
                <div class="offcanvas-body">
                    
                    <ul class="navbar-nav justify-content-end flex-grow-1 p-3">
                        
                        <li class="nav-item my-2">
                            <a class="nav-link" aria-current="page" href="{{route('home')}}">HOME</a> 
                        </li>
                        
                        <li class="nav-item my-2">
                            <a class="nav-link" href="{{route('indexAnnouncements')}}">TUTTI GLI ANNUNCI</a>
                        </li>
                        
                        
                        <li class="nav-item dropdown my-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="categoryDropdown">TUTTE LE CATEGORIE
                            </a>
                            <ul class="dropdown-menu rounded-0 border-0">
                                @foreach ($categories as $category)
                                
                                <li><a class="dropdown-item dropCategory" href="{{route('showCategory', compact('category'))}}">{{($category->name)}}</a></li>
                                
                                @endforeach
                                
                            </ul>
                        </li>   
                        
                        {{-- RESPONSIVE NAV ITEM --}}
                        
                        <li class="d-block d-md-none nav-item my-2">
                            <a class="nav-link" href="{{route('createAnnouncement')}}">INSERISCI ANNUNCIO</a>
                        </li>
                        
                        <div class="d-block d-md-none my-2 d-flex">
                            <form method="GET" action="{{route('searchAnnouncements')}}" class="searchform" role="search">
                                
                                <input name="searched" class="form-control me-2 inputsearch" type="search" aria-label="Search">
                                <button class="btn bgBlack textWhite p-3 btnsearch" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                
                            </form>  
                        </div>
                        
                        <div class="d-block d-md-none my-2">
                            <ul class="list-unstyled d-flex m-0">
                                
                                <li><x-_locale lang="it"/></li>
                                <li><x-_locale lang="en"/></li>
                                <li><x-_locale lang="es"/></li> 
                                
                            </ul>
                        </div>
                        
                    </ul>
                    
                </div>
            </div>  
            
        </nav>
        
