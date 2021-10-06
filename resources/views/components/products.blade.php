<main class="my-5">
        <div class="container mx-auto px-6">
            @include('components/filter')
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            {{-- 1 product --}}
            @foreach ($products as $product)
            <div>
            <a href="#">
            <div class="w-full max-w-sm mx-auto shadow-md overflow-hidden" >
                    <div class="flex rounded items-end justify-end h-56 w-full bg-cover " style="background-image: url('https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                    </div>
                    <div class="px-5 pt-3 pb-3">
                        <h3 class="text-gray-700 uppercase">{{$product->name}}</h3>
                        <span class="text-gray-500 mt-2">${{$product->price}}</span>
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <form class="flex items-center justify-start  m-0">
                            <input onclick="add()" class="px-10 py-2 my-3 bg-green-600 text-white hover:bg-green-700 focus:bg-green-600"  type="button" value="KOOP">
                        </form>
                    </div>
                </div>
            </a>
            </div>
            @endforeach
             </div> 
            <div class="flex justify-center">
                <div class="flex rounded-md mt-8">
                    <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white"><span>Previous</a></a>
                    <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>1</span></a>
                    <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>2</span></a>
                    <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>3</span></a>
                    <a href="#" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>
                </div>
            </div>
        </div>
    </div>
    </main>