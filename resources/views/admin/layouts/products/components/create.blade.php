<main class="m-5 h-auto ">
    <div class="container h-auto mx-0 px-0">
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 ">
        <div class="">
            <form  id="form1" class="m-0 p-0 flex flex-col" method="post" action='{{url("admin/products")}}'>
                @csrf
                <div class=" c border-opacity-0  border-dashed  relative border-4 w-full max-w-sm mx-0 rounded-md  ">
                <div class=" flex items-end justify-end h-56 w-full bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80')">
                </div>
                    <div class="px-5 py-3 bg-white flex flex-col justify-center"> 
                    <input type="text"style="-webkit-appearance: none; outline:none;" name="name" class="flex flex-grow" placeholder="Naam">
                    <input type="number"  style="-webkit-appearance: none; outline:none;" name="price" class="flex flex-grow" placeholder="0,00">
                    <label for="instock">Instock
                        <input type="checkbox" name="instock" checked>
                    </label>
                    </div>
            </div>           
             <input class="flex self-center place-content-center transform transition-all duration-200 scale-95 hover:scale-105  font-semibold rounded shadow-md cursor-pointer w-1/2 mt-3  bg-green-600 hover:bg-green-700  p-2 text-white text-center active:bg-green-700" name="test" type="submit" value="Opslaan">
        </form>
        </div>  
    </div>
</main>

<script>

    function submitForm(el) 
    {
        el.submit();
    }

</script>