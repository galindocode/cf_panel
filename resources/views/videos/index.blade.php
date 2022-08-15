<livewire:layouts.header :title="'Videos'" />

@isset($search)
<livewire:layouts.navbar-main :search='$search'>
    @else
    <livewire:layouts.navbar-main>
        @endisset

        <body>

            <div class="px-4 md:px-8">
                @isset($search)
                <div class=" my-8 grid lg:grid-cols-12 items-center mx-auto w-80  md:w-full ">
                    <a href="{{url('/videos')}}" class="lg:col-span-2 btn btn-primary my-4 inline-block">Volver a todos
                        los
                        videos</a>

                    <div class="lg:col-span-6 mx-4 items-center flex">
                        <div>
                            <h1 class="text-2xl font-title block font-bold  mb-2">Busqueda de '{{ $search }}'</h1>
                            <span>Se obtuvieron {{$videos->count()}} videos</span>
                        </div>
                    </div>

                </div>
                @endisset
                @isset($category)
                <div class=" my-8 grid lg:grid-cols-12 items-center mx-auto w-80  md:w-full ">
                    <a href="{{url('/videos')}}" class="lg:col-span-2 btn btn-primary my-4 inline-block">Volver a todos
                        los
                        videos</a>

                    <div class="lg:col-span-6 mx-4 items-center flex">
                        <div>
                            <h1 class="text-2xl font-title block font-bold  mb-2">{{ $category->name }}</h1>
                            <span class="text-slate-200">{{ $category->description }}</span>
                        </div>

                    </div>
                    <div class="lg:vi lg:col-span-4 flex justify-end px-8">
                        <img src="{{asset('images/' . $category->image)}}" class="hidden lg:block h-[128px] rounded-lg"
                            alt="" />
                    </div>
                </div>
                @else
                <div class=" my-8 text-center mx-auto w-80">
                    <h1 class="text-2xl font-title font-bold  mb-2">Todos los videos</h1>
                </div>
                {{-- Start Categories List --}}
                <div class="lg:hidden">
                    <div class="text-center">
                        <button class="show-all-cats btn shadow-lg btn-primary my-4">Mostrar todas las
                            categorías</button>
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
                        <livewire:videos.videos-all :videos="$videos">
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