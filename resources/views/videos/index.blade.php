<livewire:layouts.header :title="'Videos'" />
<livewire:layouts.navbar-main>

    <body>
        @php
        $videoList = $videos->items()
        @endphp



        <div class="px-4 md:px-8">

            @isset($catName)
            <div class=" my-8 text-center mx-auto w-80 md:w-full ">
                <h1 class="text-3xl font-title font-bold  mb-2">{{ $catName }}</h1>
                <a href="{{url('/videos')}}" class="btn btn-primary my-4 inline-block">Volver a todos los videos</a>
            </div>
            @else
            <div class=" my-8 text-center mx-auto w-80">
                <h1 class="text-3xl font-title font-bold  mb-2">Todos los videos</h1>
            </div>
            {{-- Start Categories List --}}
            <div class="lg:hidden">
                <div class="text-center">
                    <button class="show-all-cats btn shadow-lg btn-primary my-4">Mostrar todas las categorías</button>
                </div>
                <div class="w-full md:mx-4 cat-divs hidden opacity-0 transition-all duration-500">
                    <livewire:categories.list-inline />
                </div>
            </div>
            {{-- End Categorie List --}}
            @endisset

            <div class="lg:grid lg:grid-cols-6">
                <div class="col-span-1 text-center hidden lg:block">
                    <livewire:categories.list-side>
                </div>

                <div class="lg:col-span-5 lg:ml-4">
                    <livewire:videos.videos-all :videos="$videoList">
                </div>
            </div>
        </div>
        <livewire:layouts.footer />

        <script>
            const btnShowCats = document.querySelector(".show-all-cats");
            const catsDiv = document.querySelector(".cat-divs")
            
            var show = false;

            btnShowCats.addEventListener('click', () => {
                show = !show;
                if(show) {btnShowCats.innerHTML = "Ocultar todas las categorías"}
                else btnShowCats.innerHTML = "Mostrar todas las categorías"
                
                /* Animation */
                catsDiv.classList.toggle('hidden')
                setTimeout(() => {
                    catsDiv.classList.toggle('opacity-0')
                }, 100);

            })
            
        </script>
    </body>

    </html>