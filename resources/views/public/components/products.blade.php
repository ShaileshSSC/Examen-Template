<main class=" h-screen bg-cover bg-center" style="background-image: linear-gradient(rgb(0 0 0 / 60%), rgb(0 0 0 / 65%)), url('https://images.unsplash.com/photo-1450862479751-84eeaf2fcca4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1174&q=80')">
        <div class="container mx-auto ">
            @include('public/components/filter')
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4  py-5 px-20">
            {{-- 1 product --}}
            @foreach ($products as $product)
            <div class="transform transition-all duration-200 scale-100 hover:scale-95 w-full max-w-sm mx-auto rounded-md shadow overflow-hidden">
                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
                    <button onclick="add()" class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 ">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </button>
                </div>
                <div class="px-5 py-3 bg-white">
                    <h3 class="text-gray-700 uppercase">{{$product->name}}</h3>
                    <span class="text-gray-500 mt-2">${{$product->price}}</span>
                    <input type="hidden" name="id" value="{{$product->id}}">
                </div>
            </div>
            @endforeach
        </div> 
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
    </main>