<nav class="navbar sticky top-0">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" class="mr-3 h-6 sm:h-9" alt="Criptofamilia" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Criptofamilia</span>
        </a>
        <button id="menu-btn" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Abrir menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a id="link-home" href="{{ url("/") }}" class="navbar-item active" aria-current="page">Home</a>
                </li>
                <li>
                    <a id="link-videos" href="{{ url("/videos") }}" class="navbar-item">Videos</a>

                </li>
                <li>
                    <a id="link-pricing" href="{{ url("/precios") }}" class="navbar-item">Precios</a>
                </li>
                {{-- Login --}}
                @auth
                <li>
                    <a href="{{ url('/dashboard') }}" class="navbar-item">Dashboard</a>
                </li>
                @else
                <li>
                    <a href="{{ url('/register') }}" class="navbar-item">Registro</a>
                </li>
                <li>
                    <a href="{{ url('login') }}" class="navbar-item">Iniciar sesion</a>
                </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>

<script>
    var menuBtn = document.getElementById('menu-btn');
    menuBtn.addEventListener('click', function() {
        var menuDiv = document.getElementById('mobile-menu');
        menuDiv.classList.toggle('hidden');
    });


    var site = window.location.href
    console.log(site)
    if(site.includes("videos")){
        document.getElementById("link-home").classList.remove("active");
        document.getElementById("link-videos").classList.add("active");
    }
    else if(site.includes("precios")){
        document.getElementById("link-home").classList.remove("active");
        document.getElementById("link-pricing").classList.add("active");
    }
    
</script>