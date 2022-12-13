@extends('layout.main')

@section('container')
<style>
    body{
        background-image:url(img/hotel4.jpg);
        background-color:#cccccc;
    }
</style>
<h1 class="text-light">Contact</h1>
<div class="mb-3 row text-light">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control text-dark"  value="email@example.com">
    </div>
  </div>
  <div class="mb-3 row text-light">
    <label for="staticEmail" class="col-sm-2 col-form-label">Instagram</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control text-dark"  value="@hotelku">
    </div>
  </div>
  <div class="mb-3 row text-light">
    <label for="staticEmail" class="col-sm-2 col-form-label">Facebook</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control text-dark"  value="HotelKu">
    </div>
  </div>
  <div class="mb-3 row text-light">
    <label for="staticEmail" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control text-dark"  value="022-8812-313">
    </div>
  </div>
  <div class="mb-3 row text-light">
    <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control text-dark"  value="Jalan Sejahtera Raya">
    </div>
  </div>



  <footer class="container fixed-bottom text-light text-center">
    <p>&copy;2022 Project Prakweb Laravel</p>
</footer>
@endsection