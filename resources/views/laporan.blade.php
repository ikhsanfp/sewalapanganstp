@extends('layouts/main')
@section('container')
<form>
    <style>
        /* Style untuk label */
        label {
          margin-right: 10px;
        }
  
        /* Style untuk input */
        input[type="date"] {
          padding: 8px;
          border: 1px solid #ccc;
          border-radius: 5px;
          width: 200px;
        }
  
        /* Style untuk tombol */
        input[type="submit"] {
          padding: 8px 20px;
          background-color: #007bff;
          color: #fff;
          border: none;
          border-radius: 5px;
          cursor: pointer;
        }
  
        /* Style untuk tombol saat dihover */
        input[type="submit"]:hover {
          background-color: #0056b3;
        }
      </style>
      <div>
        <h3 class="font-semibold text-left mt-10">Pilih Tanggal Reservasi Untuk Melihat Laporan</h3>
      </div>
    <!-- Label untuk tanggal -->
    <label for="datepicker">Pilih Tanggal:</label>
    <!-- Input jenis date -->
    <input type="date" id="datepicker" name="datepicker">
    <!-- Tombol untuk submit -->
    <input type="submit" value="Tampilkan Laporan">
  </form>
@endsection