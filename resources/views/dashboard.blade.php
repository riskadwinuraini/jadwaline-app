@extends('layouts.app')

@section('content')
<div class="main-content">
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- seo fact area start -->
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-thumb-up"></i> Likes</div>
                                            <h2>2,315</h2>
                                        </div>
                                        <canvas id="seolinechart1" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"><i class="ti-share"></i> Pendapatan</div>
                                            <h2>{{$sum}}</h2>
                                        </div>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Impressions</div>
                                            <canvas id="seolinechart3" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">New Users</div>
                                            <canvas id="seolinechart4" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mt-4">       
                            <!-- overview area start -->
                            <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title">History Transaction</h4>
                                                <div class="single-table">
                                                    <div class="table-responsive">
                                                        <table class="table text-center">
                                                            <thead class="text-uppercase bg-primary">
                                                                <tr class="text-white">
                                                                    <th scope="col">No.</th>
                                                                    <th scope="col">code_transaction</th>
                                                                    <th scope="col">payment_method</th>
                                                                    <th scope="col">total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($alltransaction as $Tsn)
                                                                    <tr>
                                                                        <td>{{$loop->iteration}}</td>
                                                                        <td>{{$Tsn->code_transaction}}</td>
                                                                        <td>{{$Tsn->payment_method}}</td>
                                                                        <td>{{$Tsn->total}}</td>
                                                                    </tr>
                                                                    @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                            </div>
                            <!-- overview area end -->
                    </div>
                </div>
            </div>
        </div>
@endsection