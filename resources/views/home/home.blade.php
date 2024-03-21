@extends('layouts/main')
@section('container')
<div>
    <h3 class="font-semibold text-center mt-16">Jadwal Pemakaian Lapangan</h3>
  </div>
  <div class="flex justify-center">
    <div class="mx-2  flex justify-center w-1/2 place-content-center mt-10">
      <div>
        <h4 class="font-semibold text-center">Lapangan Basket</h4>
        <div class="flex justify-center">
          <div><img src="{{ URL('images/basket.svg') }}" alt="" class="mt-4" /></div>
        </div>
      </div>
      <div class="my-6 ml-5">
        <table class="mt-5">
          <thead class="bg-abu">
            <tr>
              <th class="h-12 w-48 border-4">Nama Pemain</th>
              <th class="h-12 w-48 border-4">Waktu Main</th>
            </tr>
          </thead>
          <tbody class="bg-abu">
            <tr>
              <th class="h-12 w-48 border-4"></th>
              <th class="h-12 w-48 border-4"></th>
            </tr>
            <tr>
              <th class="h-12 w-48 border-4"></th>
              <th class="h-12 w-48 border-4"></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="mx-2  flex w-1/2 place-content-center mt-10">
      <div>
        <h4 class="font-semibold text-center">Lapangan Futsal</h4>
        <div class="flex justify-center">
          <div><img src="{{ URL('images/futsal.svg') }}" alt="" class="mt-4" /></div>
        </div>
      </div>
      <div class="mt-6 ml-5">
        <table class="mt-5">
          <thead class="bg-abu">
            <tr>
              <th class="h-12 w-48 border-4">Nama Pemain</th>
              <th class="h-12 w-48 border-4">Waktu Main</th>
            </tr>
          </thead>
          <tbody class="bg-abu">
            <tr>
              <th class="h-12 w-48 border-4"></th>
              <th class="h-12 w-48 border-4"></th>
            </tr>
            <tr>
              <th class="h-12 w-48 border-4"></th>
              <th class="h-12 w-48 border-4"></th>
            </tr>
          </tbody>
        </table>
      </div>
      <div></div>
    </div>
    
@endsection