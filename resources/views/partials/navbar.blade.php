<!-- ASIDE -->
<div id="sidebar"
  class="w-48 md:w-64 border border-r text-sm h-screen bg-white shadow -mt-4 fixed md:relative hidden md:block"
  x-transition:enter="transition-transform transition-opacity ease-out duration-300"
  x-transition:enter="transition ease-out duration-300"
  x-transition:enter-start="opacity-0 transform -translate-x-2"
  x-transition:enter-end="opacity-100 transform translate-x-0"
  x-transition:leave="transition ease-in duration-300"
  x-transition:leave-end="opacity-0 transform -translate-x-3"
  x-show="sidebar"
>
  <!-- First Aside Menu -->
  <div class="mt-8 pl-1">
    {{-- <div class="border-b border-gray-200 mb-2">
      <div class="text-gray-700 font-semibold py-4 px-5">General</div>
    </div> --}}
    <div>
      <a class="block py-3 px-5 text-gray-800 hover:text-indigo-600 hover:font-semibold" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-home mr-2 text-gray-600 inline-block"></i> Dashboard
      </a>
    </div>
    <div>
      <a class="block py-3 px-5 text-gray-800 hover:text-indigo-600 hover:font-semibold" href="#">
        <i class="fas fa-fw fa-folder mr-2 text-gray-600 inline-block"></i> Facturas
      </a>
    </div>
    <div>
      <a class="block py-3 px-5 text-gray-800 hover:text-indigo-600 hover:font-semibold" href="#">
        <i class="fas fa-fw fa-briefcase mr-2 text-gray-600 inline-block"></i> Products
      </a>
    </div>
    <div>
      <a class="block py-3 px-5 text-gray-800 hover:text-indigo-600 hover:font-semibold" href="#">
        <i class="fas fa-fw fa-cogs mr-2 text-gray-600 inline-block"></i> Articles
      </a>
    </div>
    <div>
      <a class="block py-3 px-5 text-gray-800 hover:text-indigo-600 hover:font-semibold" href="#">
        <i class="fas fa-fw fa-bicycle mr-2 text-gray-600 inline-block"></i> Categories
      </a>
    </div>
    <div>
      <a class="block py-3 px-5 text-gray-800 hover:text-indigo-600 hover:font-semibold" href="#">
        <i class="fas fa-fw fa-images mr-2 text-gray-600 inline-block"></i> Multimedia
      </a>
    </div>
  </div>
  <!-- Second Aside Menu -->
  <div class="mt-4 pl-1">
    <div class="border-b border-gray-200 mb-2">
      <div class="text-gray-700 font-semibold py-4 px-5">Settings</div>
    </div>
      <div>
      <a class="block py-3 px-5 text-gray-800 hover:text-indigo-600 hover:font-semibold" href="#">
        <i class="fas fa-fw fa-cogs mr-2 text-gray-600 inline-block"></i> Roles
      </a>
    </div>
    <div>
      <a class="block py-3 px-5 text-gray-800 hover:text-indigo-600 hover:font-semibold" href="#">
        <i class="fas fa-fw fa-lock mr-2 text-gray-600 inline-block"></i> Permisos
      </a>
    </div>

  </div>
  <!-- Third Aside Menu -->
  <div class="mt-4 pl-1">
    <div class="border-b border-gray-200 mb-2">
      <div class="text-gray-700 font-semibold py-4 px-5">Informasi</div>
    </div>
    <div>
      <a class="block py-3 px-5 hover:font-semibold text-gray-700" href="#">Planes</a>
    </div>
    <div>
      <a class="block py-3 px-5 hover:font-semibold text-gray-700" href="#">Facturas</a>
    </div>
    <div>
      <a class="block py-3 px-5 hover:font-semibold text-gray-700" href="#">Informaci&oacute;n</a>
    </div>
  </div>
</div>
<!-- END ASIDE -->
