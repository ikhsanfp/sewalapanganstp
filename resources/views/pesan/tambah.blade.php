@extends('layouts/main')
@section('comtainer')
<style>
      /* Style untuk input */
      input[type="date"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 200px;
      }
      .custom-select {
        padding: 1px;
        border:1px solid #ccc;
        border-radius:5px;
        width: 200px;
        
        
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="py-3 px-4 bg-white rounded-b-2xl shadow-xl">
      <div class="container">
        <div class="justify-between flex ml-2 -mr-8">
          <img src="./img/logostp.png" alt="" />
          <div class="-ml-36 flex font-bold">
            <ul class="-ml-20">
              <li class="py-4 px-6 rounded-3xl hover:text-biru">
                <a href="index.html">Home</a>
              </li>
            </ul>
            <ul class="">
              <li class="py-4 px-6 rounded-3xl hover:text-biru">
                <a href="panduan.html">Panduan</a>
              </li>
            </ul>
            <ul class="">
              <li class="text-biru py-4 px-6 rounded-3xl hover:text-biru">
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
              Logout<a href="#" class="m-1"
                ><img src="./img/logout.png" alt=""
              /></a>
            </button>
          </div>
        </div>
      </div>
    </nav>
    <!-- Main -->
    <div>
      <h3 class="font-bold ml-12 text-left mt-16 mb-3">Tambah Pesananmu</h3>
    </div>
    <div>
      <h3 class="font-semibold ml-12 text-left mt-2 mb-3">Jenis Lapangan</h3>
    </div>
    <div class="custom-select ml-12 text-left">
      <select class="ml-12 text-left mt-3 mb-3">
        <option name="jenislap" value="pilih">Pilih Lapangan</option>
        <option name="jenislap" value="basket">Lapangan Basket</option>
        <option name="jenislap" value="futsal">Lapangan Futsal</option>
      </select>
    </div>
    <div>
      <h3 class="font-semibold ml-12 text-left mt-2 mb-3">Tanggal Main</h3>
    </div>
    <div class="ml-12 mt-3 mb-6">
      <input type="date" id="datepicker" name="datepicker" />
    </div>
    <div>
      <a
        href="#"
        class="font-bold text-white bg-green-400 rounded px-5 py-2 ml-12 hover:bg-green-800"
      >
        Simpan</a
      >
      <a
        href="pesan.html"
        class="font-bold text-white bg-red-400 rounded px-5 py-2 ml-2 hover:bg-red-800"
      >
        Batal</a
      >
    </div>
    <div class="p-2 fixed bottom-0 right-0 left-0 bg-biru text-center">
      <ul class="text-xs">
        <li><a href="#">Copyright @ 2024 | All Right Reserved</a></li>
        <li>Design & Developed by IT Solo Technopark</li>
      </ul>
    </div>
  </body>

