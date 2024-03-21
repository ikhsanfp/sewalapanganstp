<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <!-- Navbar -->
  <header>
    <nav class="py-3 px-4 bg-white rounded-b-2xl shadow-xl">
      <div class="container">
        <div class="justify-between flex ml-2 -mr-8">
          <img src="{{ URL('images/logostp.png') }}" alt="logostp" />
          <div class="-ml-36 flex font-bold">
            <ul class="-ml-20">
              <li class="text-biru py-4 px-6 rounded-3xl hover:text-biru">
                <a href="index.html">Home</a>
              </li>
            </ul>
            <ul class="">
              <li class="py-4 px-6 rounded-3xl hover:text-biru">
                <a href="panduan.html">Panduan</a>
              </li>
            </ul>
            <ul class="">
              <li class="py-4 px-6 rounded-3xl hover:text-biru">
                <a href="pesan.html">Pesan</a>
              </li>
            </ul>
            <ul class="">
              <li class="py-4 px-6 rounded-3xl hover:text-biru">
                <a href="laporan.html">Laporan</a>
              </li>
            </ul>
          </div>
          <div class="justify-beetween">
            <button class="flex px-4 py-4 rounded-3xl hover:text-biru">
              <a href="#" class="m-1 flex hover:to-biru"
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
</html>