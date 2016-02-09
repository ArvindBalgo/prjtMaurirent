@extends('layouts.layout')
@section('content')

<section id="slider" style="padding-top: 55px;" ng-controller="homeController"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="height: 305px">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                       <div class="item <%data.active%>" ng-repeat="data in arrLatest">
                            <div class="col-sm-6">
                                <h1><%data.title%></h1>
                                <h2><%data.caption%></h2>
                                <p><%data.description%></p>
                                <button type="button" class="btn btn-warning" style="width: 100px;margin-bottom: 5px; ">Details</button>
                            </div>
                            <div class="col-sm-6">
                                <img ng-src="<%data.imgsrc%>" class="girl img-responsive" alt="" />
                                <img ng-src="<%data.pricesrc%>"  class="pricing" alt="" style="width: 100px; height: 100px;" />
                            </div>
                        </div>
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container" ng-controller="contentController">
        <div class="row">
            <ul class="nav nav-pills nav-tabs nav-justified" ng-cloak>
                <li>
                    <a href>Latest Offers<span class='badge'>100</span></a>
                </li>
                <li>
                    <a href>Apartments<span class='badge'>24</span></a>
                </li>
                <li>
                    <a href>Houses<span class='badge'>48</span></a>
                </li>
                <li>
                    <a href>Hotels deals<span class='badge'>28</span></a>
                </li>
                <li>
                    <button class="btn btn-info" data-toggle="collapse" data-target="#filter">
                        <span class="glyphicon glyphicon-search"></span> Filter</button>
                </li>
            </ul>
            <div id="filter" class="collapse">
                <div class="col-md-12">
                    <h4 class="col-md-2 col-md-offset-1">Check in</h4>
                    <h4 class="col-md-2 col-md-offset-1">Check out</h4>
                    <h4 class="col-md-2 col-md-offset-1">Region</h4>
                    <h4 class="col-md-2 col-md-offset-1">Type</h4>
                </div>
                <div class="col-md-12">
                    <div class="col-md-3"><md-datepicker ng-model="myDate" md-placeholder="Enter Date"></md-datepicker></div>
                    <div class="col-md-3"><md-datepicker ng-model="myDate1" md-placeholder="Enter Date"></md-datepicker></div>
                    <div class="col-md-3">
                        <ui-select multiple ng-model="multiple.region" theme="select2" ng-disabled="disabled" style="width: 200px;">
                            <ui-select-match placeholder="Select region..."><%$item%></ui-select-match>
                            <ui-select-choices repeat="region in arrRegions | filter:$select.search">
                                <%region%>
                            </ui-select-choices>
                        </ui-select>
                    </div>
                    <div class="col-md-3">
                        <ui-select class="col-md-3" multiple ng-model="multiple.type" theme="select2" ng-disabled="disabled" style="width: 200px;">
                            <ui-select-match placeholder="Select residence..."><%$item%></ui-select-match>
                            <ui-select-choices repeat="type in arrTypes | filter:$select.search">
                                <%type%>
                            </ui-select-choices>
                        </ui-select>
                    </div>
                </div>
                </div>
            <div>
                <div class="col-md-4" style="border: thin; border-color: #0083C9;height: 500px;width: 350px;margin-left: 15px;margin-right: 15px; margin-top: 15px; margin-bottom: 15px; padding-right: 0px;padding-left: 0px;;background-color: #f7f7f7" ng-repeat="tile in tiles">
                    <img ng-src="<%tile.img%>" style="width: 100%; height:60%;"/>
                    <h3 style="text-align: center"><%tile.title%></h3>
                    <h5 style="text-align: center"><%tile.address%> <span class="glyphicon glyphicon-map-marker" style="cursor: pointer"></span></h5>
                    <h4 style="text-align: center" class="text-danger">MUR 1000</h4>
                    <div style="margin-left: 7px;margin-bottom: 5px">
                        <span class='badge'>Swimming Pool</span>
                        <span class='badge'>Sea View</span>
                        <span class='badge'>Sunset</span>
                        <span class='badge'>Cascavelle</span>
                        <span class='badge'>Value for money</span>
                    </div>
                    <div class="center-block">
                        <button type="button" class="btn btn-warning" style="width: 100px;margin-bottom: 5px;margin-left: 50px ">Details</button>
                        <button type="button" class="btn btn-info" style="width: 100px;margin-bottom: 5px; ">Buy Now</button>
                    </div>

                </div>
            </div>
            <!--
            <div class="col-sm-3">
                <div class="left-sidebar">
                    @include('shared.sidebar')
                </div>
            </div>

            <div class="col-sm-9 padding-right" ng-cloak>
                <ul class="nav nav-pills nav-tabs" ng-cloak>
                    <li>
                        <a href>Latest Offers<span class='badge'>100</span></a>
                    </li>
                    <li >
                        <a href>Apartments<span class='badge'>24</span></a>
                    </li>
                    <li>
                        <a href>Houses<span class='badge'>48</span></a>
                    </li>
                    <li>
                        <a href>Hotels deals<span class='badge'>28</span></a>
                    </li>
                </ul>
                <div ng-repeat="tile in tiles">
                    <div class="col-md-12" style="border: ridge;padding-left: 0px !important;">
                        <div class="col-md-3" style="padding-left: 0px !important;padding-right: 0px !important;">
                            <img style="width: 100%;height:100%" ng-src="<%tile.img%>" class="pull-left"/>
                        </div>

                        <div class="col-md-5" style="height: 100%;padding-left: 0px !important;padding-right:0px;padding-bottom:0px !important;border-right: ridge;">
                            <div class="pull-left" style="width: 100%; height:100%; padding-left: 15px;">
                                <h2 style="margin-bottom: 5px;margin-top: 5px; padding-left: 15px"><%tile.title%></h2>
                                <div style="padding-left: 15px">Royal Road Flic-en-Flac  <span class="glyphicon glyphicon-map-marker"></span></div>
                                <div style="padding-top: 15px; padding-left: 15px;">
                                    <span class='badge'>Swimming Pool</span>
                                    <span class='badge'>Sea View</span>
                                    <span class='badge'>2 mins to Supermarket</span>
                                    <span class='badge'>Sunset</span>
                                    <span class='badge'>5mins to Cascavelle</span>
                                    <span class='badge'>Value for money</span>
                                    <span class='badge'>Value for money</span>
                                    <span class='badge'>Value for money</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding-left: 0px;">
                            <div class="col-md-12" style="border-right: groove;border-bottom: groove;padding-left: 25px">
                                <h4 >RATINGS</h4>
                                <div>XXXXXXXX</div>
                            </div>
                            <div class="col-md-12" style="border-right: groove;padding-top: 0px;height: 100%;padding-bottom: 19px">
                                <h4>REVIEWS</h4>
                                <div>XXXXXXXXX</div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h4>MUR 1,000</h4>
                            <div class="col-md-12" style="padding-left: 0px;">
                                <button type="button" class="btn btn-warning" style="width: 100px;margin-bottom: 5px; ">Details</button>
                            </div>
                            <div class="col-md-12" style="padding-left: 0px;">
                                <button type="button" class="btn btn-info" style="width: 100px">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            -->
        </div>
    </div>
</section>
@endsection