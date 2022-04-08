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
                                            <div class="seofct-icon"><i class="ti-share"></i> Share</div>
                                            <h2>3,984</h2>
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
                                    <div class="col-xl-9 col-lg-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="header-title mb-0">Overview</h4>
                                                    <select class="custome-select border-0 pr-3">
                                                        <option selected>Last 24 Hours</option>
                                                        <option value="0">01 July 2018</option>
                                                    </select>
                                                </div>
                                                <div id="verview-shart"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 coin-distribution">
                                        <div class="card h-full">
                                            <div class="card-body">
                                                <h4 class="header-title mb-0">Coin Distribution</h4>
                                                <div id="coin_distribution"></div>
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