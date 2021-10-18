<main class="my-5">
        <div class="container mx-auto px-6">
            @include('public/components/filter')
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            {{-- 1 product --}}
            @foreach ($products as $product)
            <div>
            <a href="#">
            <div class="w-full max-w-sm mx-auto shadow-md overflow-hidden" >
                    <div class="flex rounded-tb items-end justify-end h-56 w-full bg-cover " style="background-image: url('https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
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
        </div>
    </div>
    </main>