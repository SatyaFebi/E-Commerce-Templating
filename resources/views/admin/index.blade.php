@extends('be.master')
@section('sidebar')
    @include('be.sidebar')
@section('navbar')
    @include('be.navbar')
@endsection

@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Order</p>
                                <h6 class="mb-0">1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Order</p>
                                <h6 class="mb-0">1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Order Confirmed</p>
                                <h6 class="mb-0">1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-people-carry fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Order Process</p>
                                <h6 class="mb-0">1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-user-clock fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Order Waiting</p>
                                <h6 class="mb-0">1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-shipping-fast fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Order Shipping</p>
                                <h6 class="mb-0">1234</h6>  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fas fa-hand-holding-heart fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Order Arrive</p>
                                <h6 class="mb-0">1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<!-- Sale & Revenue End -->
@endsection
@section('footer')
    @include('be.footer')
@endsection