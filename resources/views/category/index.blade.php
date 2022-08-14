<livewire:layouts.header :title="'Videos'" />
<livewire:layouts.navbar-main>

    <body>



        <div class="px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 my-8 ">
                @foreach ($categories as $category)

                <a href="{{url('/videos/category/' . $category->name)}}">
                    <div
                        class="flex bg-primary rounded-lg h-32 p-4 col-span-1 hover:scale-105 transition-transform duration-150">
                        <div class="flex h-full items-center">
                            <img src="{{ asset('images/' . $category->image) }}" width="120" class="rounded-md" alt="">
                        </div>

                        <div class="flex flex-col px-4">
                            <h1 class="mb-2">{{ $category->name }}</h1>
                            <span class="text-slate-400">
                                {{ $category->excerpt }}
                            </span>
                        </div>
                    </div>
                </a>

                @endforeach
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