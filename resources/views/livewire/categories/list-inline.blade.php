<div>
    @foreach ($categories as $cat)
    <a href="{{url('videos/category/' . $cat->name)}}"
        class="rounded-lg shadow px-4 py-2 mr-2 my-1 inline-block hover:cursor-pointer hover:bg-slate-200 transition-all duration-500 text-gray-800"><b>Categoría:</b>
        <span class="text-gray-500">{{$cat->name}}</span></a>
    @endforeach
</div>