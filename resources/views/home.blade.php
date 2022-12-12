@extends('layout.main')

@section('container')
<style>
    body{
        background-image:url(img/hotel4.jpg);
        background-color:#cccccc;
    }
</style>
<div class = "text-center my-5 py-5">
    <h1 class = "fw-bold text-white">A DREAM STAY AT THE BEST PRICE</h1>
    <h4 class = "text-white">BEST PRICE GUARANTEE</h4>
</div>

    <div class = "mt-5">
        <div class="input-group">
            <span class="input-group-text">Check-In</span>
            <input type="date" class="form-control">
            <span class="input-group-text">Check-Out</span>
            <input type="date" class="form-control">
            <span class="input-group-text">Adult</span>
                <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            <span class="input-group-text">Children</span>
                <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            <button class="btn btn-light" type="button">Search</button>
        </div>
    </div>

    <footer class="container fixed-bottom text-light text-center">
    <p>&copy;2022 Project Prakweb Laravel</p>
</footer>
@endsection