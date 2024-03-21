
  @php
      use Illuminate\Support\Facades\URL;
  @endphp
  <!-- Navbar -->
  <header>
    <nav class="py-3 px-4 bg-white rounded-b-2xl shadow-xl">
      <div class="container">
        <div class="justify-between flex ml-2 -mr-8">
          <img src="{{ URL('images/logostp.png') }}" alt="logostp" />
          <div class="-ml-36 flex font-bold">
            <ul class="-ml-20">
              <li class=" py-4 px-6 rounded-3xl hover:text-biru
              {{ request()->is('/') ? 'text-biru' : 'text-black' }}">
                <a href="/">Home</a>
              </li>
            </ul>
            <ul class="">
              <li class="active:text-blue-500 focus:outline-none py-4 px-6 rounded-3xl hover:text-biru
              {{ request()->is('/panduan') ? 'text-biru' : 'text-black' }}">
                <a href="/panduan">Panduan</a>
              </li>
            </ul>
            <ul class="">
              <li class="py-4 px-6 rounded-3xl hover:text-biru
              {{ request()->is('/pesan') ? 'text-biru' : 'text-black' }}">
                <a href="/pesan">Pesan</a>
              </li>
            </ul>
            <ul class="">
              <li class="py-4 px-6 rounded-3xl hover:text-biru
              {{ request()->is('/laporan') ? 'text-biru' : 'text-black' }}">
                <a href="/laporan">Laporan</a>
              </li>
            </ul>
          </div>
          <li class="flex px-4 py-4 rounded-3xl hover:text-biru">
            <a href="/login">Login</a>
          </li>
          <div class="justify-beetween">

            <button class="flex px-4 py-4 rounded-3xl hover:text-biru">
              <a href="/homepages" class="m-1 flex hover:to-biru"
                >Logout<img
                  class="ml-2 hover:biru"
                  src="./img/logout.png"
                  alt=""
              /></a>
            </button>
           
          </div>
        </div>
      </div>
    </nav>
  </header>