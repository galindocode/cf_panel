<div>
    <form action="" class="text-left mx-auto" style="width: 460px">
        @csrf
        <div class="my-8">
            <label for="" class=" mb-4 block mx-auto">Nombre</label>
            <input type="text" class="border w-96 border-gray-400 text-gray-500" class="block" placeholder="Nombre de la categoria">
        </div>
        <div class="my-8">
            <label for="" class="mb-4 block mx-auto">Tipo: </label>
            <span class="p-2 rounded-md shadow-md bg-blue-500  text-white"><input type="checkbox" name="cat-free" class="rounded p-2 " id="" value="0"> <span class="ml-1">Gratis</span></span>
        </div>
        <div>
            <label for="" class="mb-4 block mx-auto">Descripción</label>
            <textarea name="" id="" cols="30" rows="10" class="w-96 border border-gray-500 text-gray-500 p-4"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary my-8">Crear</button>
    </form>
</div>
