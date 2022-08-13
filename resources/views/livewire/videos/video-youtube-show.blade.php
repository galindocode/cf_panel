<div class="w-full md:px-8">

    <div class="grid md:grid-cols-9 gap-4">
        {{-- Start Youtube Video --}}
        <div class="video-container md:col-span-6">
            <iframe class="video-responsive h-80 md:h-4/4" src="https://www.youtube.com/embed/{{ $video->youtube_id }}"
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        {{-- End Youtube Video --}}
        {{-- Start Resources Section --}}
        <div class="md:col-span-3 bg-primary rounded-lg h-full p-8">
            <h1 class="text-xl font-bold mb-4">Recursos</h1>
            {{-- Resources List --}}
            <a href="https://www.roboforex.com/es/clients/promotions/welcome-program/?utm_source=domain&utm_medium=affbanerimg&utm_content=size250_250&utm_campaign=affwelcome&a=covp"
                target="_blank" class="resource-video-item">
                <div class="flex w-full items-center">
                    <img width="32" class="rounded-lg mr-2"
                        src="https://www.derrotalacrisis.com/wp-content/uploads/2020/06/roboforex-logo-cuadrado-200x200-px.png"
                        alt="">
                    <span class="text-base font-bold mx-2 ">Robo Forex</span>
                </div>
                <div class="flex text-left my-2 text-sm text-gray-400">
                    <span>Registrate y obtén tu bono de 30 dólares en roboforex y sigue nuestras señales de
                        forex.</span>
                </div>
            </a>
            <a href="https://t.me/+BV-ee-856ChhNTlh" target="_blank" class="resource-video-item">
                <div class="flex w-full items-center">
                    <img width="32" class="rounded-lg mr-2 bg-yellow-500" src="{{ asset('images/logo.png') }}">
                    <span class="text-base font-bold mx-2 ">Señales premium forex</span>
                </div>
                <div class="flex text-left my-2 text-sm text-gray-400">
                    <span>Obten nuestras señales de forex guiadas por profesionales de nuestro
                        equipo altamente especializado.</span>
                </div>
            </a>

            <a href="https://t.me/+-uJLFmbBGMs5N2Rh" target="_blank" class="resource-video-item">
                <div class="flex w-full items-center">
                    <img width="32" class="rounded-lg mr-2 bg-green-500" src="{{ asset('images/logo.png') }}">
                    <span class="text-base font-bold mx-2 ">Educación financiera</span>
                </div>
                <div class="flex text-left my-2 text-sm text-gray-400">
                    <span>Obten una gran cantidad de ebooks y audiolibros sobre educación financiera, desarrollo
                        personal y mucho más</span>
                </div>
            </a>
        </div>
        {{-- End Resources Section --}}
    </div>

    {{-- Start Video Description --}}
    <div class="grid md:grid-cols-9">
        <div class="col-span-6 p-8 my-4 rounded-lg bg-primary">
            <div id="video-title" class="flex justify-between">
                <h1 class="text-xl font-title text-white font-bold my-2">{{ $video->title }}</h1>
            </div>

            {{-- Video Description --}}
            <div id="video-description">
                <p class="text-base text-gray-400 ">{{ $video->description }}</p>
            </div>

            {{-- Video Created at --}}
            <span class="text-gray-400 text-sm block mt-8">
                {{ $video->created_at->diffForHumans() }}
            </span>
        </div>

    </div>
    {{-- End Video Description --}}



    <script>
        const heartBtn = document.getElementById('video-love');
    heartBtn.addEventListener('click', () => {
        heartBtn.classList.toggle('text-gray-500');
       heartBtn.classList.toggle("text-red-500");
    });
    </script>
</div>