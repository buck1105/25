@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <i class="ti-server"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Capacity</p>
                                    105GB
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            <i class="ti-reload"></i> Updated now
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-success text-center">
                                    <i class="ti-wallet"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Revenue</p>
                                    $1,345
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            <i class="ti-calendar"></i> Last day
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-danger text-center">
                                    <i class="ti-pulse"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Errors</p>
                                    23
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            <i class="ti-timer"></i> In the last hour
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-info text-center">
                                    <i class="ti-twitter-alt"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Followers</p>
                                    +45
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="stats">
                            <i class="ti-reload"></i> Updated now
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xs-7">
                                <div class="numbers pull-left">
                                    $34,657
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <div class="pull-right">
												<span class="label label-success">
		 											+18%
												</span>
                                </div>
                            </div>
                        </div>
                        <h6 class="big-title">total earnings <span class="text-muted">in last</span> ten <span class="text-muted">quarters</span></h6>
                        <div id="chartTotalEarnings"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="210px" class="ct-chart-line" style="width: 100%; height: 210px;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M50,129C61.62,125.333,96.481,112.667,119.721,107C142.962,101.333,166.202,93.667,189.443,95C212.683,96.333,235.924,120.667,259.164,115C282.405,109.333,305.645,67.667,328.885,61C352.126,54.333,375.366,82.667,398.607,75C421.847,67.333,456.708,25,468.328,15" class="ct-line ct-green"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="180" width="69.72135416666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Jan</span></foreignObject><foreignObject style="overflow: visible;" x="119.72135416666667" y="180" width="69.72135416666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Feb</span></foreignObject><foreignObject style="overflow: visible;" x="189.44270833333334" y="180" width="69.72135416666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mar</span></foreignObject><foreignObject style="overflow: visible;" x="259.1640625" y="180" width="69.72135416666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">April</span></foreignObject><foreignObject style="overflow: visible;" x="328.8854166666667" y="180" width="69.72135416666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">May</span></foreignObject><foreignObject style="overflow: visible;" x="398.60677083333337" y="180" width="69.72135416666663" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">June</span></foreignObject><foreignObject style="overflow: visible;" y="155" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">0</span></foreignObject><foreignObject style="overflow: visible;" y="135" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">100</span></foreignObject><foreignObject style="overflow: visible;" y="115" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">200</span></foreignObject><foreignObject style="overflow: visible;" y="95" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">300</span></foreignObject><foreignObject style="overflow: visible;" y="75" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">400</span></foreignObject><foreignObject style="overflow: visible;" y="55" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">500</span></foreignObject><foreignObject style="overflow: visible;" y="35" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">600</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">700</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">800</span></foreignObject></g></svg></div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="footer-title">Financial Statistics</div>
                        <div class="pull-right">
                            <button class="btn btn-info btn-fill btn-icon btn-sm">
                                <i class="ti-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xs-7">
                                <div class="numbers pull-left">
                                    169
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <div class="pull-right">
												<span class="label label-danger">
		 											-14%
												</span>
                                </div>
                            </div>
                        </div>
                        <h6 class="big-title">total subscriptions <span class="text-muted">in last</span> 7 days</h6>
                        <div id="chartTotalSubscriptions"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="210px" class="ct-chart-line" style="width: 100%; height: 210px;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M50,79C59.96,81.667,89.841,87,109.761,95C129.682,103,149.602,127,169.522,127C189.443,127,209.363,105.667,229.283,95C249.204,84.333,269.124,65.667,289.045,63C308.965,60.333,328.885,84.333,348.806,79C368.726,73.667,388.647,41.667,408.567,31C428.487,20.333,458.368,17.667,468.328,15" class="ct-line ct-red"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="180" width="59.761160714285715" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 60px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">M</span></foreignObject><foreignObject style="overflow: visible;" x="109.76116071428572" y="180" width="59.761160714285715" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 60px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">T</span></foreignObject><foreignObject style="overflow: visible;" x="169.52232142857144" y="180" width="59.76116071428571" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 60px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">W</span></foreignObject><foreignObject style="overflow: visible;" x="229.28348214285714" y="180" width="59.76116071428572" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 60px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">T</span></foreignObject><foreignObject style="overflow: visible;" x="289.0446428571429" y="180" width="59.761160714285694" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 60px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">F</span></foreignObject><foreignObject style="overflow: visible;" x="348.80580357142856" y="180" width="59.76116071428572" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 60px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">S</span></foreignObject><foreignObject style="overflow: visible;" x="408.5669642857143" y="180" width="59.76116071428572" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 60px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">S</span></foreignObject><foreignObject style="overflow: visible;" y="155" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">0</span></foreignObject><foreignObject style="overflow: visible;" y="135" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">12.5</span></foreignObject><foreignObject style="overflow: visible;" y="115" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">25</span></foreignObject><foreignObject style="overflow: visible;" y="95" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">37.5</span></foreignObject><foreignObject style="overflow: visible;" y="75" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">50</span></foreignObject><foreignObject style="overflow: visible;" y="55" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">62.5</span></foreignObject><foreignObject style="overflow: visible;" y="35" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">75</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="20" width="30"><span class="ct-label ct-vertical ct-start" style="height: 20px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">87.5</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">100</span></foreignObject></g></svg></div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="footer-title">View all members</div>
                        <div class="pull-right">
                            <button class="btn btn-default btn-fill btn-icon btn-sm">
                                <i class="ti-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xs-7">
                                <div class="numbers pull-left">
                                    8,960
                                </div>
                            </div>
                            <div class="col-xs-5">
                                <div class="pull-right">
												<span class="label label-warning">
		 											~51%
												</span>
                                </div>
                            </div>
                        </div>
                        <h6 class="big-title">total downloads <span class="text-muted">in last</span> 6 years</h6>
                        <div id="chartTotalDownloads"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="210px" class="ct-chart-line" style="width: 100%; height: 210px;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><path d="M50,153.667C61.62,154.259,96.481,164.007,119.721,157.222C142.962,150.437,166.202,134.719,189.443,112.956C212.683,91.193,235.924,25.951,259.164,26.644C282.405,27.338,305.645,99.993,328.885,117.116C352.126,134.239,386.987,127.338,398.607,129.382" class="ct-line ct-orange"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="180" width="69.72135416666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2009</span></foreignObject><foreignObject style="overflow: visible;" x="119.72135416666667" y="180" width="69.72135416666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2010</span></foreignObject><foreignObject style="overflow: visible;" x="189.44270833333334" y="180" width="69.72135416666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2011</span></foreignObject><foreignObject style="overflow: visible;" x="259.1640625" y="180" width="69.72135416666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2012</span></foreignObject><foreignObject style="overflow: visible;" x="328.8854166666667" y="180" width="69.72135416666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2013</span></foreignObject><foreignObject style="overflow: visible;" x="398.60677083333337" y="180" width="69.72135416666663" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 70px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">2014</span></foreignObject><foreignObject style="overflow: visible;" y="139.44444444444446" x="10" height="35.55555555555556" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">0</span></foreignObject><foreignObject style="overflow: visible;" y="103.8888888888889" x="10" height="35.55555555555556" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">2000</span></foreignObject><foreignObject style="overflow: visible;" y="68.33333333333333" x="10" height="35.55555555555556" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">4000</span></foreignObject><foreignObject style="overflow: visible;" y="32.77777777777777" x="10" height="35.55555555555556" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">6000</span></foreignObject><foreignObject style="overflow: visible;" y="2.7777777777777715" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">8000</span></foreignObject></g></svg></div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="footer-title">View more details</div>
                        <div class="pull-right">
                            <button class="btn btn-success btn-fill btn-icon btn-sm">
                                <i class="ti-info"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card card-circle-chart" data-background-color="blue">
                    <div class="card-header text-center">
                        <h5 class="card-title">Dashboard</h5>
                        <p class="description">Monthly sales target</p>
                    </div>
                    <div class="card-content">
                        <div id="chartDashboard" class="chart-circle" data-percent="70">70%<canvas height="160" width="160"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card card-circle-chart" data-background-color="green">
                    <div class="card-header text-center">
                        <h5 class="card-title">Orders</h5>
                        <p class="description">Completed</p>
                    </div>
                    <div class="card-content">
                        <div id="chartOrders" class="chart-circle" data-percent="34">34%<canvas height="160" width="160"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card card-circle-chart" data-background-color="orange">
                    <div class="card-header text-center">
                        <h5 class="card-title">New Visitors</h5>
                        <p class="description">Out of total number</p>
                    </div>
                    <div class="card-content">
                        <div id="chartNewVisitors" class="chart-circle" data-percent="62">62%<canvas height="160" width="160"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card card-circle-chart" data-background-color="brown">
                    <div class="card-header text-center">
                        <h5 class="card-title">Subscriptions</h5>
                        <p class="description">Monthly newsletter</p>
                    </div>
                    <div class="card-content">
                        <div id="chartSubscriptions" class="chart-circle" data-percent="10">10%<canvas height="160" width="160"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
