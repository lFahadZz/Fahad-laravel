@extends('layouts.app')
@section('title', 'Computers')
@section('content')
<div class="container">
    <div class="row m-0">
        <div class="col-lg-7 pb-5 pe-lg-5">
            <div class="row">
                <div class="col-12 p-5">
                    <img src="{{$Computers->img}}" class="card-img-top" alt="product.title" />
                </div>
                <div class="row m-0 bg-light">
                    <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                        <p class="text-muted">RAM</p>
                        <p class="h5">{{$Computers->ram}}GB</p>
                    </div>
                    <div class="col-md-4 col-6  ps-30 my-4">
                        <p class="text-muted">GPU</p>
                        <p class="h5 m-0">{{$Computers->gpu}}</p>
                    </div>
                    <div class="col-md-4 col-6 ps-30 my-4">
                        <p class="text-muted">CPU</p>
                        <p class="h5 m-0">{{$Computers->cpu}}</p>
                    </div>
                    <div class="col-md-4 col-6 ps-30 my-4">
                        <p class="text-muted">Storage</p>
                        <p class="h5 m-0">{{$Computers->storage}}</p>
                    </div>
                    <div class="col-md-4 col-6 ps-30 my-4">
                        <p class="text-muted">Color</p>
                        <p class="h5 m-0">{{$Computers->color}}</p>
                    </div>
                    <div class="col-md-4 col-6 ps-30 my-4">
                        <p class="text-muted">Avalibality</p>
                        <p class="h5 m-0">YES</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 p-0 ps-lg-4">
            <div class="row m-0">
                <div class="col-12 px-4">
                    <div class="d-flex align-items-end mt-4 mb-2">
                        <p class="h4 m-0"><span class="pe-1">{{$Computers->name}}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="textmuted">Qty</p>
                        <p class="fs-14 fw-bold">1</p>
                    </div>
                
                    <div class="d-flex justify-content-between mb-2">
                        <p class="textmuted">Shipping</p>
                        <p class="fs-14 fw-bold">Free</p>
                    </div>
                
                    <div class="d-flex justify-content-between mb-3">
                        <p class="textmuted fw-bold">Total</p>
                        <div class="d-flex align-text-top ">
                            <span class="fas fa-dollar-sign mt-1 pe-1 fs-14 "></span><span class="h4">SAR {{$Computers->price}}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 px-0">
                    <div class="row bg-light m-0">
                        <div class="col-12 px-4 my-4">
                            <p class="fw-bold">Payment detail</p>
                        </div>
                        <div class="col-12 px-4">
                            <div class="d-flex  mb-4">
                                <span class="">
                                    <p class="text-muted">Card number</p>
                                    <input class="form-control" type="text" value="4485 6888 2359 1498"
                                        placeholder="1234 5678 9012 3456">
                                </span>
                                <div class=" w-100 d-flex flex-column align-items-end">
                                    <p class="text-muted">Expires</p>
                                    <input class="form-control2" type="text" placeholder="MM/YYYY">
                                </div>
                            </div>
                            <div class="d-flex mb-5">
                                <span class="me-5">
                                    <p class="text-muted">Cardholder name</p>
                                    <input class="form-control" type="text" value="David J.Frias"
                                        placeholder="Name">
                                </span>
                                <div class="w-100 d-flex flex-column align-items-end">
                                    <p class="text-muted">CVC</p>
                                    <input class="form-control3" type="text" value="630" placeholder="XXX">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-12  mb-4 p-0">
                            <div class="btn btn-primary">Purchase<span class="fas fa-arrow-right ps-2"></span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



