<div class="fixed w-full flex justify-between fixed ">


    <main class=" flex w-full h-screen">
    <aside class=" w-80 h-screen bg-gray shadow-md sm:block  ">
      <div class="flex flex-col justify-between h-full border-r border-gray-900 p-4 bg-gray-800">
          <div class="text-sm">
            <div class="bg-gray-900 text-white p-5 rounded cursor-pointer">Baking Power</div>
            <a href="{{url('admin/dashboard')}}">
                <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Dashboard</div>
            </a>
            <a href="{{url('admin/stores')}}">
            <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Winkels</div>
            </a>
            {{-- <div class="bg-gray-700 text-blue-300 p-2 rounded mt-2 cursor-pointer">Winkels</div> --}}
            <a href="{{url('admin/products')}}">
              <div class="bg-gray-900 flex justify-between items-center text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">
                <span>Producten</span>
                {{-- <span class="w-4 h-4 bg-blue-600 rounded-full text-white text-center font-normal text-xs">5</span> --}}
              </div>  
            </a>
            <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Releases</div>
            <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Components</div>
            <div class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">Repository</div>
          </div>
    
          <div>
            <a href="{{url('logout')}}">
              <div class="flex p-3 text-white bg-gray-600 hover:bg-gray-500 rounded cursor-pointer text-center text-sm">
                <button class="rounded inline-flex items-center">
                  <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fillRule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clipRule="evenodd" /></svg>
                  <span class="font-semibold">Logout</span>
                </button>
              </div>
            </a>
          </div>
      </div>
    </aside>
    
      
      <div class="flex flex-col w-full m-0">
        <header class=" w-full h-20 bg-gray-800 p-4 pl-2 border-b border-t  border-gray-900  flex justify-center items-center">
          <nav class="flex items-center w-full  ">
            {{-- <img class="w-7 h-7" src="https://www.solarwinds.com/-/media/solarwinds/swdcv2/licensed-products/service-desk/integrations/sd-integrations-logo-jira.ashx?rev=701fbaa7f8ac4ae08e0406c8984c43e7&hash=75D4F04DE99B88DE7B2C4193F0616F1F" /> --}}
            <div class="text-white text-xs w-full flex justify-start ml-2 m-0 ">
              <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1 ">Dashboard</a>
              <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1  ">Projects</a>
              <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1  ">Issues</a>
              <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1  ">Boards</a>
            </div>
          </nav>
        </header>
    
        <section class="w-full h-full p-4 bg-gray-700 overflow-auto flex flex-col justify-between align-center">