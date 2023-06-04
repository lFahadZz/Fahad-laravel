@extends('layouts.app')
@section('content')

    <section class="cart" data-aos="fade-up">
      <div class="container">
        <div class="section-title">
          <h3>Shopping <span>Cart</span></h3>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="bi bi-house-door"></i></a></li>
              <li class="breadcrumb-item"><a href="{{route('store')}}">Store</a></li>
              <li class="breadcrumb-item active">Cart</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-lg-8 mb-4 mb-lg-0">

              <!-- CART TABLE-->
              <div class="table-responsive mb-4">
                <table class="table text-nowrap">
                  <thead class="bg-light">
                    <tr>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Product</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Price</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Quantity</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Total</strong></th>
                      <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase"></strong></th>
                    </tr>
                  </thead>
                  <tbody class="border-0">
                    <tr>
                      <th class="ps-0 py-3 border-light" scope="row">
                        <div class="d-flex align-items-center"><a class="reset-anchor d-block animsition-link" href="{{ route('product-details', ['id' => $product->id]) }}"><img src="{{ asset("assets/img/products/{$product->img}.png") }}" alt="..." width="70"/></a>
                          <div class="ms-3"><strong class="productName"><a href="{{ route('product-details', ['id' => $product->id]) }}">{{ $product->name }}</a></strong></div>
                        </div>
                      </th>
                      <td class="p-3 align-middle border-light">
                        <p class="mb-0 small">{{ $product->price }}RS</p>
                      </td>
                      <td class="p-3 align-middle border-light">
                        <p class="mb-0 small">1</p>
                      </td>
                      <td class="p-3 align-middle border-light">
                        <p class="mb-0 small">{{ $product->price }}RS</p>
                      </td>
                      {{-- <td class="p-3 align-middle border-light"><a class="reset-anchor" href="#!"><i class="bi bi-trash small text-muted"></i></a></td> --}}
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- CART NAV-->
              <div class="bg-light px-4 py-3">
                <div class="row align-items-center text-center">
                  <div class="col-md-6 text-md-start">
                    <a class="btn btn-outline-dark btn-sm custom-btn d-inline-flex align-items-center justify-content-center mb-3 mb-md-0" href="{{ route('store') }}">
                      <i class="bi bi-arrow-left ms-2"></i> 
                      <span class="mx-2">Continue shopping</span>
                    </a>
                  </div>
                  <div class="col-md-6 text-md-end">
                    <a class="btn btn-outline-dark btn-sm custom-btn d-inline-flex align-items-center justify-content-center" href="{{ route('checkout', ['id' => $product->id]) }}">
                      <span class="mx-2">Proceed to checkout</span>
                      <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                  </div>
                </div>
              </div>

            </div>
            <!-- ORDER TOTAL-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Cart total</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Subtotal</strong><span class="text-muted small">{{ $product->price }}RS</span></li>
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span>{{ $product->price }}RS</span></li>
                    {{-- <li>
                      <form action="#">
                        <div class="input-group mb-0">
                          <input class="form-control" type="text" placeholder="Enter your coupon">
                          <button class="btn btn-dark btn-sm w-100" type="submit"> <i class="bi bi-gift me-2"></i>Apply coupon</button>
                        </div>
                      </form>
                    </li> --}}
                  </ul>
                </div>
              </div>
            </div>
          </div> 
      </div>
    </section>

@endsection