@extends('layouts.app')
@section('content')

    <section class="invoice" data-aos="fade-up">
      <div class="container">
        <div class="card bg-light">
          <div class="card-body">
        
            <div class="container">
              <div class="row">
                <div class="col-xl-12">
                  <h1 class="logo"><a href="index.html">ss<span>.</span></a></h1>
                </div>
              </div>
        
              <div class="row text-center">
                <h3 class="text-uppercase text-center mt-3" style="font-size: 40px;">Invoice</h3>
                <p>{{$invoice->id}}</p>
              </div>

              <div class="row mt-2 mb-5">
                <p class="fw-bold">Ship to:</p>
                <span class="text-muted">{{$invoice->name}}</span>
                <span class="text-muted">{{$invoice->country}}, {{$invoice->city}}</span>
                <span class="text-muted">{{$invoice->address}}</span>
                <span class="text-muted">{{$invoice->phone}}</span>
              </div>
        
              <div class="row mx-3">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Product</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{$invoice->product_name}}</td>
                      <td>1</td>
                      <td>{{$invoice->price}}</td>
                    </tr>
                  </tbody>
                </table>
                <div class="row mt-2 mb-5">
                  <p class="fw-bold">Tax(15%): <span class="text-muted">{{$tax}}</span></p>
                  <p class="fw-bold">Total: <span class="text-muted">{{$invoice->price}}</span></p>
                </div>
              </div>
              <hr>

              <div class="row mt-2 mb-5">
                <p class="fw-bold">Date: <span class="text-muted">{{$date}}</span></p>
                <p class="fw-bold">Invoice Number: <span class="text-muted">{{$invoice->id}}</span></p>
              </div>
        
            </div>
        
          </div>
        </div>

      </div>
    </section>

@endsection