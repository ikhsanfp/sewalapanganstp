@extends('layouts/main')
@section('container')

  {{-- <div>{{ $time }}</div> --}}
    <!-- Main -->
    <form method="POST" action="/tambah/store" >
      @csrf
    <div>
      <h3 class="font-bold ml-12 text-left mt-16 mb-3">Tambah Pesananmu</h3>
    </div>
    <div>
      <h3 class="font-semibold ml-12 text-left mt-2 mb-3">Jenis Lapangan</h3>
    </div>
    <div class="custom-select ml-12 text-left  border border-zinc-400 rounded-sm w-48">
      <select name="jenislap" type="text" id="jenislap"  class="ml-12 text-left mt-3 mb-3">
        <option value="pilih">Pilih Lapangan</option>
        <option value="Lapangan Basket">Lapangan Basket</option>
        <option value="Lapangan Futsal">Lapangan Futsal</option>
      </select>
    </div>
    <div>
      <h3 class="font-semibold ml-12 text-left mt-2 mb-3">Tanggal Main</h3>
    </div>
    <div class="ml-12 mt-3 mb-6">
      <input  class="p-2 border border-zinc-400 rounded-sm w-48" type="date" id="date" name="date" />
    </div>
    <div class="ml-12 mt-3 mb-6">
      <input  class="p-2 border border-zinc-400 rounded-sm w-48" type="time" id="time" name="time" />
    </div>
    <div class="custom-select ml-12 text-left  border border-zinc-400 rounded-sm w-48">
      <select name="durasi" type="float" id="durasi"  class="ml-12 text-left mt-3 mb-3">
        <option value="pilih">Durasi</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
    </div>
    <div>
      <button
        href="/tambah/store"
        type="submit"
        class="font-bold text-white bg-green-400 rounded px-5 py-2 ml-12 hover:bg-green-800"
      >
        Simpan</button
      >
      <button
        href="/pesan"
        class="font-bold text-white bg-red-400 rounded px-5 py-2 ml-2 hover:bg-red-800"
      >
        Batal</button
      >
    </div>
  </form>
@endsection

