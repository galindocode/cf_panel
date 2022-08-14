<div>
    @foreach ($categories as $cat)
    <div class="w-full">

        <a @if($cat->free)
            href="{{url('videos/category/' . $cat->name)}}"
            @endif
            class="rounded-lg shadow px-4 py-4 mr-2 my-1 inline-block hover:bg-slate-200 transition-all
            duration-500 text-white w-full flex justify-between">
            <span>
                <b>Categoría:</b>
                <span class="text-gray-400">{{$cat->name}}</span>
            </span>
            <span class="block my-auto">
                {{-- @if($cat->free) --}}
                <i class="fa-solid fa-eye"></i>
                {{-- @else --}}
                {{-- <i class="fa-solid fa-lock"></i> --}}
                {{-- @endif --}}
            </span>

        </a>
    </div>
    @endforeach
</div>