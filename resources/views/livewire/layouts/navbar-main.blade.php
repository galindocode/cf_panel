<nav class="navbar sticky top-0 z-100">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" class="mr-3 h-6 sm:h-9" alt="EmpresarioDigital" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">EmpresarioDigital</span>
            <span class="mx-2 px-2 bg-blue-500 text-white text-sm rounded-md">Beta</span>
        </a>
        <button id="menu-btn" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm  rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                <a class="navbar-item" href="{{ url("/") }}">
                    <i class="fa-solid fa-house"></i>
                    <span id="link-videos">Home</span>
                </a>
                @auth
                <a class="navbar-item" href="{{ url("/videos") }}">
                    <i class="fa-solid fa-brain"></i>
                    <span id="link-videos">Videos</span>
                </a>
                <a class="navbar-item" href="{{ url("/categorias") }}">
                    <i class="fa-solid fa-icons"></i>
                    <span id="link-videos">Categorias</span>
                </a>

                <li class=" navbar-item">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <form action="{{url('search')}}" method="POST" class="flex items-center m-0">
                        @csrf
                        @method('POST')
                        <input type="text" name="search" placeholder="Buscar"
                            class="w-full h-10 border text-right md:text-left border-none rounded-lg focus:border-none p-1 text-white bg-primary"
                            value="{{$search}}">

                        {{-- <button type="submit"
                            class="btn bg-green-800 my-8 mx-auto hover:bg-green-900 rounded-lg"><i
                                class="fa-solid fa-magnifying-glass"></i> Buscar</button> --}}
                    </form>
                </li>
                @else
                <a class="navbar-item" href="{{ url("/login") }}">
                    <i class="fa-solid fa-user"></i>
                    <span id="link-videos">Login</span>
                </a>
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
    if(site.includes(" videos")){ document.getElementById("link-home").classList.remove("active");
                        document.getElementById("link-videos").classList.add("active"); } else
                        if(site.includes("precios")){ document.getElementById("link-home").classList.remove("active");
                        document.getElementById("link-pricing").classList.add("active"); } 
</script>