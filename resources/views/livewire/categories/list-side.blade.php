<div class="text-left">

    <h2 class="my-4 text-xl text-center text-slate-300 font-bold">Categorías</h2>

    @foreach ($categories as $cat)

    <a href="{{url('videos/category/' . $cat->name)}}"
        class="category-side-item bg-primary hover:scale-105 transition-transform duration-150">
        <span>
            <b class="text-slate-300">Categoría:</b>
            <span class="text-slate-500">{{$cat->name}}</span>
        </span>
        <span class="block my-auto text-slate-300">
            {{-- @if($cat->free) --}}
            <i class="fa-solid fa-eye"></i>
            {{-- @else --}}
            {{-- <i class="fa-solid fa-lock"></i> --}}
            {{-- @endif --}}
        </span>

    </a>
    @endforeach
</div>