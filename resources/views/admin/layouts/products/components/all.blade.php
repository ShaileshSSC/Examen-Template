<main class="m-5 h-auto ">
        <div class="container h-auto mx-0 px-0">
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 ">
            {{-- 1 product --}}
            {{-- <form  id="form1" class="m-0 p-0 flex flex-col h-full items-center" method="post" action='{{url("admin/products")}}'>
                @method('PUT')
                    @csrf
                    <div class="bg-white h-full flex flex-wrap content-stretch" >
                        <label class=" w-full px-5 bg-gray-200 flex items-center justify-start text-black " for="">Product naam</label>
                        <input class="w-full text-left px-5 " type="text" name="name" placeholder="product naam">
                        <label class=" w-full px-5  bg-gray-200 flex items-center justify-start text-black" for="">Prijs</label>
                        <input  class=" w-full text-left px-5  " type="number" name="price" placeholder="0,00">
                        <label class="w-full px-5  bg-gray-200 flex items-center justify-start text-black" for="">Foto</label>
                        <input class="self-center flex h-auto  bg-white w-1/2" type="file" name="file">
                    </div>
                    <input class="font-semibold rounded shadow-md cursor-pointer w-10/12 mx-2 mt-2  bg-green-500 hover:bg-green-600  p-2 text-white text-center" name="test" type="submit" value="Opslaan">
            </form> --}}
            @for ($i = 0; $i < 1; $i++)
            @foreach ($products as $product)
            <div class="">
                <form onclick="submitForm(this)" id="form1" class="m-0 p-0" method="get" action='{{url("admin/products/$product->id/edit")}}'>
                @csrf
                    <div class="transform transition-all duration-200 scale-100 hover:scale-95  cursor-pointer border-opacity-0 hover:border-gray-900 border-dashed hover:border-opacity-90 hover:border-current relative border-4 w-full max-w-sm mx-0 rounded-md  ">
                    <div class=" flex items-end justify-end h-56 w-full bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
                        <div class="hover:bg-white hover:opacity-10 inset-0 absolute"></div>
                    </div>
                        <div class="px-5 py-3 bg-white"> 
                        <h3 class="text-gray-700 uppercase">{{$product->name}}</h3>
                        {{-- <span class="text-gray-500 mt-2">{{$product->store->name}}</span> --}}
                        <br>
                    <span class="text-gray-500 mt-2">${{$product->price}}</span>
                        </div>
                </div>
            </form>
            <form class="flex w-full m-0 items-center justify-center text-center" action='{{url("admin/products/$product->id")}}' method="post">
                @method('DELETE')
                @csrf
                <input class=" transform transition-all duration-200 scale-95 hover:scale-105  font-semibold rounded shadow-md cursor-pointer w-1/2 mt-3  bg-red-500 hover:bg-red-600  p-2 text-white text-center active:bg-green-700" name="test" type="submit" value="Verwijder">
            </form>
            </div>
                @endforeach  
                @endfor      
        </div>
    </main>

    <div class="flex w-11/12 p-20 mx-4 self-stretch ">
        <form class="flex w-full m-0  items-center justify-center text-center" action="{{url('admin/products/create')}}" method="post">
            @method('GET')
            @csrf
            <input class=" transform transition-all duration-200 scale-100 hover:scale-110  font-semibold rounded shadow-md cursor-pointer w-1/6   bg-green-600 hover:bg-green-700  p-2 text-white text-center " name="test" type="submit" value="Product toevoegen">
        </form>
    </div>

    <script>

        function submitForm(el) 
        {
            el.submit();
        }

    </script>