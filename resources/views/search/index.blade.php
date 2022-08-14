<livewire:layouts.header :title="'Buscar videos'" />
<livewire:layouts.navbar-main>

    <body>
        <div class="flex items-center w-full h-full justify-center">
            <div class="w-full px-8 lg:w-1/2">
                <img src="{{asset('images/logo.png')}}" width="140px" class="mb-4 mx-auto" alt="">
                <form action="{{url('search')}}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="text" name="search" placeholder="Buscar video por título, descripción o categoría"
                        class="w-full h-10 rounded-lg text-slate-800">

                    <button type="submit" class="btn bg-green-800 my-8 mx-auto hover:bg-green-900 rounded-lg"><i
                            class="fa-solid fa-magnifying-glass"></i> Buscar</button>
                </form>
            </div>
        </div>

        <livewire:layouts.footer />


    </body>

    </html>