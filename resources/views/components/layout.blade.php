<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goods Sports</title>
    
    <link rel="shortcut icon" href="/media/favicon.svg" type="image/x-icon">
    
    {{-- 𝗚𝗢𝗢𝗚𝗟𝗘 𝗳𝗼𝗻𝘁𝘀 --}}
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    
    {{-- 𝗖𝗗𝗡 𝗳𝗼𝗻𝘁𝘀𝗮𝗱𝗼𝗯𝗲 --}}
    <link rel="stylesheet" href="https://use.typekit.net/fah7yfc.css">
    
    {{-- 𝗖𝗗𝗡 𝗳𝗼𝗻𝘁𝗮𝘄𝗲𝘀𝗼𝗺𝗲 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- 𝗖𝗦𝗦 𝘀𝘄𝗶𝗽𝗲𝗿 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    
    {{-- 𝗖𝗗𝗡 𝗮𝗼𝘀 𝗷𝘀 --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    {{-- 𝗯𝘂𝗶𝗹𝗱𝗶𝗻𝗴 𝗱𝗲𝗴𝗹𝗶 𝗮𝘀𝘀𝗲𝘁 --}}
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    
</head>
<body class="position-relative">
    
    
    <x-navbar/>
    
    {{$slot}}
    
    
    
    
    
    
    
    
    @livewireScripts
</body>
</html>