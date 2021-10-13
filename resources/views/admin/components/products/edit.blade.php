<main class="my-5 mx-2 h-auto ">
    <div class="container h-auto mx-auto px-6">
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
        {{-- 1 product --}}
            <form  id="form1" class="m-0 p-0 flex flex-col items-center" method="post" action='{{url("admin/products/$product->id")}}'>
            @method('PUT')
                @csrf
                <div class=" w-full max-w-sm mx-auto rounded-md  ">
                <div class=" text-center flex flex-column justify-center h-56 w-full bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">   
                </div>
                <input class="  w-full p-4" type="text" name="name" value="{{$product->name}}">
                <input class="w-full bg-white" type="file" name="file">
                <input class=" w-full p-4" type="number" name="price" value="{{$product->price}}">
                </div>
                <input class="font-semibold rounded shadow-md cursor-pointer w-10/12 mx-2 mt-2  bg-green-500 hover:bg-green-600  p-2 text-white text-center" name="test" type="submit" value="Opslaan">
        </form>
        {{-- <div class="flex justify-center">
            <div class="flex rounded-md mt-8">
                <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white"><span>Previous</a></a>
                <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>1</span></a>
                <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>2</span></a>
                <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>3</span></a>
                <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>
            </div>
        </div> --}}
    </div>
</div>
</main>

<script>

    function submitForm(el) 
    {
        el.submit();
    }

</script>