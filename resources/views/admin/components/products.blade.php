<main class="my-5 mx-20">
        <div class="container mx-auto px-6">
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            {{-- 1 product --}}
            @foreach ($products as $product)
            <div class="">
            <div class="cursor-pointer border-opacity-0 hover:border-gray-900 border-dashed hover:border-opacity-90 hover:border-current relative border-4 w-full max-w-sm mx-auto rounded-md  ">
                <div class=" flex items-end justify-end h-56 w-full bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
                <div class="hover:bg-white hover:opacity-10 inset-0 absolute"></div>
                </div>
                 <div class="px-5 py-3 bg-white"> 
                    <h3 class="text-gray-700 uppercase">{{$product->name}}</h3>
                    <span class="text-gray-500 mt-2">${{$product->price}}</span>
                    <input type="hidden" name="id" value="{{$product->id}}">
                </div>
            </div>
            <form class="flex w-full m-0 items-center justify-center" action="{{url('products')}}">
                <input class="font-semibold flex rounded shadow-md cursor-pointer w-full bg-red-500 hover:bg-red-600 m-2 p-2 text-white text-center" type="button" value="Verwijder">
            </form>
        </div>
            @endforeach
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