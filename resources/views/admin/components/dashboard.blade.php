<div class="fixed w-full flex justify-between fixed ">


<main class=" flex w-full h-screen">
<aside class=" w-80 h-screen bg-gray shadow-md  sm:block">
  <div class="flex flex-col justify-between h-full p-4 bg-gray-800">
      <div class="text-sm">
        <div class="bg-gray-900 text-white p-5 rounded cursor-pointer">Baking Power</div>
        <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Dashboard</div>
        <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Winkels</div>
        {{-- <div class="bg-gray-700 text-blue-300 p-2 rounded mt-2 cursor-pointer">Winkels</div> --}}
        <a href="{{url('admin/products/edit')}}">
          <div class="bg-gray-900 flex justify-between items-center text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">
            <span>Producten</span>
            <span class="w-4 h-4 bg-blue-600 rounded-full text-white text-center font-normal text-xs">5</span>
          </div>  
        </a>
        <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Releases</div>
        <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Components</div>
        <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Repository</div>
      </div>

      <div>
        <a href="{{url('logout')}}">
          <div class="flex p-2 mt-2 text-white bg-gray-900 hover:bg-gray-700 rounded cursor-pointer text-center text-sm">
                <button class="rounded w-full flex justify-between items-center">
                    <span class="ml-3 font-semibold">Winkel</span>
                    <img class="h-7 w-7 m-1 mr-2" src="https://img.icons8.com/fluency/100/000000/shop.png"/>
                  </button>
          </div>
        </a>
        <a href="{{url('logout')}}">
          <div class="flex p-2 mt-2 text-white bg-gray-900 hover:bg-gray-600  rounded cursor-pointer text-center text-sm">
                <button class="rounded w-full flex justify-between items-center">
                    <span class="ml-3 font-semibold">Logout</span>
                    <img class="h-7 w-7 m-1 mr-2" src="https://img.icons8.com/fluency/100/000000/exit.png"/>
                  </button>
          </div>
        </a>
      </div>
  </div>
</aside>

  
  <div class="flex flex-col w-full m-0">
    <header class=" w-full h-20 bg-gray-800 p-4 pl-2 flex justify-between items-center">
      <nav class="flex items-center">
        {{-- <img class="w-7 h-7" src="https://www.solarwinds.com/-/media/solarwinds/swdcv2/licensed-products/service-desk/integrations/sd-integrations-logo-jira.ashx?rev=701fbaa7f8ac4ae08e0406c8984c43e7&hash=75D4F04DE99B88DE7B2C4193F0616F1F" /> --}}
        <div class="text-white text-xs hidden sm:block m-0">
          <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer">Dashboard</a>
          <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1">Projects</a>
          <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1">Issues</a>
          <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1">Boards</a>
        </div>
      </nav>
    </header>

    <section class="w-full h-full p-4 bg-gray-700 overflow-auto">
      @include('admin/components/products')
      </section>
  </div>


</main>

</div>
