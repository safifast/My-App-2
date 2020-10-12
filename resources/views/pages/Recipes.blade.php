@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
<style>
* {
    margin: 0;
    padding: 0;
}

.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}

.rate:not(:checked)>input {
    position: absolute;
    top: -9999px;
}

.rate:not(:checked)>label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 30px;
    color: #ccc;
}

.rate:not(:checked)>label:before {
    content: '★ ';
}

.rate>input:checked~label {
    color: #ffc700;
}

.rate:not(:checked)>label:hover,
.rate:not(:checked)>label:hover~label {
    color: #deb217;
}

.rate>input:checked+label:hover,
.rate>input:checked+label:hover~label,
.rate>input:checked~label:hover,
.rate>input:checked~label:hover~label,
.rate>label:hover~input:checked~label {
    color: #c59b08;
}
.hr {
    border: 0 !important;
    border-bottom: 2px solid #cacaca  !important;
    padding-top: 1.444rem;
    margin: 0 0 1.778rem;
}

.form-check-input{
    margin-left: 0 !important;
    margin-right: 1.25rem !important;
}
.form-control1{
    height: calc(1em + 1rem + 2px) !important;
}

</style>
<div>
    <div class="container">
        <div class="row layout-top-spacing">
        <!-- <div class="row mt-2 mb-4">  -->
            <div class="col-lg-3 mt-2" style="overflow-y: hidden !important;">
                <!-- Section: Condition -->
                <section filter="condition" class="mb-4 mt-4">
                    <h6 class="font-weight-bold pl-0 mb-3">Meals</h6>

                    <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="filter-option form-check-input filled-in" condition="new" id="new">
                    <label class="form-check-label small text-uppercase card-link-secondary ml-4" for="new">Breakfast</label>
                    </div>
                    <div class="form-check pl-0 mb-3">
                    <input condition="used" type="checkbox" class="filter-option form-check-input filled-in" id="used">
                    <label class="form-check-label small text-uppercase card-link-secondary ml-4" for="used">Lunch</label>
                    </div>
                    <div class="form-check pl-0 mb-3">
                    <input condition="collectible" type="checkbox" class="filter-option form-check-input filled-in" id="collectible">
                    <label class="form-check-label small text-uppercase card-link-secondary ml-4" for="collectible">Dinner</label>
                    </div>
                </section>
                <!-- Section: Condition -->

                <!-- <section filter="rating">
                    <h6 class="font-weight-bold mb-3">Avg. Customer Review</h6>

                    <label for="customer-rating-4" class="z-depth-0 py-0">
                        <ul class="rating waves-light mb-0">
                        <li>
                            <i class="fa fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fa fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fa fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fa fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fa fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                        </li>
                        </ul>
                        <input
                        id="customer-rating-4"
                        class="filter-option"
                        type="checkbox"
                        rating="4"
                        />
                    </label>
                    <br />
                    <label for="customer-rating-3" class="z-depth-0 py-0">
                        <ul class="rating waves-light mb-0">
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <p class="small text-uppercase card-link-secondary px-2">
                            & Up
                            </p>
                        </li>
                        </ul>
                        <input
                        id="customer-rating-3"
                        class="filter-option"
                        type="checkbox"
                        rating="3"
                        />
                    </label>
                    <br />
                    <label for="customer-rating-2" class="z-depth-0 py-0">
                        <ul class="rating waves-light mb-0">
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <p class="small text-uppercase card-link-secondary px-2">
                            & Up
                            </p>
                        </li>
                        </ul>
                        <input
                        id="customer-rating-2"
                        class="filter-option"
                        type="checkbox"
                        rating="2"
                        />
                    </label>
                    <br />
                    <label for="customer-rating-1" class="z-depth-0 py-0">
                        <ul class="rating waves-light mb-0">
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <p class="small text-uppercase card-link-secondary px-2">
                            & Up
                            </p>
                        </li>
                        </ul>
                        <input
                        id="customer-rating-1"
                        class="filter-option"
                        type="checkbox"
                        rating="1"
                        />
                    </label>
                    </section> -->
                    <!-- <section class="mb-4">

                        <h6 class="font-weight-bold mb-3">Price</h6>

                        <div class="slider-price d-flex align-items-center my-4">
                            <span class="font-weight-normal small text-muted mr-2">$0</span>
                            <form class="multi-range-field w-100 mb-1">
                            <input id="multi" class="multi-range" type="range" />
                            </form>
                            <span class="font-weight-normal small text-muted ml-2">$100</span>
                        </div>

                    </section> -->
                    <!-- Section: Price -->
                    <section class="mb-4">

                        <h6 class="font-weight-bold mb-3">Calories</h6>

                        <div class="form-check pl-0 mb-3">
                        <input type="radio" class="form-check-input" id="under25" name="materialExampleRadios">
                        <label class="form-check-label small text-uppercase card-link-secondary ml-4" for="under25">Protiens</label>
                        </div>
                        <div class="form-check pl-0 mb-3">
                        <input type="radio" class="form-check-input" id="2550" name="materialExampleRadios">
                        <label class="form-check-label small text-uppercase card-link-secondary ml-4" for="2550">Carbs</label>
                        </div>
                        <div class="form-check pl-0 mb-3">
                        <input type="radio" class="form-check-input" id="50100" name="materialExampleRadios">
                        <label class="form-check-label small text-uppercase card-link-secondary ml-4" for="50100">Fats</label>
                        </div>
                        
                        <form class="pr-5">
                            <div class="d-flex align-items-center mt-4 pb-1">
                                <div class="md-form md-outline my-0">
                                <input id="from" type="text" class="form-control form-control1 mb-0">
                                <label for="form">$ Min</label>
                                </div>
                                <p class="px-2 mb-0 text-muted"> - </p>
                                <div class="md-form md-outline my-0">
                                <input id="to" type="text" class="form-control form-control1 mb-0">
                                <label for="to">$ Max</label>
                                </div>
                            </div>
                        </form>

                    </section>    
            </div>
            <div class="col-lg-9">

            <div id="show_recipe" class="row layout-top-spacing">
                <div class="row mt-2 mb-4"> 
                <div class="col-lg-4 wow bounceIn" style="margin-bottom:30px;">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4="" style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">Biryani</h5> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><p class="card-text">Chiken Biryani</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(1)" class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_1" class="" style="position: relative; min-height: 200px;"><div id="apexcharts4e0kf0g5" class="apexcharts-canvas apexcharts4e0kf0g5 light" style="width: 150px; height: 200px;"><svg id="SvgjsSvg1084" width="150" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1086" class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs id="SvgjsDefs1085"><clipPath id="gridRectMask4e0kf0g5"><rect id="SvgjsRect1087" width="148" height="170" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask4e0kf0g5"><rect id="SvgjsRect1088" width="145" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1090" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1091" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1092" r="9.113414634146343" cx="71.5" cy="71.5" fill="transparent"></circle><g id="SvgjsG1093"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Protines" rel="1"><path id="apexcharts-donut-slice-0" d="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 125.44444095220285 43.54824368321219 L 79.59166614283043 67.30723655248183 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z" fill="rgba(85,107,47,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="62.608695652173914" data:startAngle="0" data:strokeWidth="5" data:value="12" data:pathOrig="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 125.44444095220285 43.54824368321219 L 79.59166614283043 67.30723655248183 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Carbs" rel="2"><path id="apexcharts-donut-slice-1" d="M 125.44444095220285 43.54824368321219 A 60.75609756097562 60.75609756097562 0 0 1 18.88367607738934 101.8780487804878 L 63.6075514116084 76.05670731707318 A 9.113414634146343 9.113414634146343 0 0 0 79.59166614283043 67.30723655248183 L 125.44444095220285 43.54824368321219 z" fill="rgba(0,128,0,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="177.3913043478261" data:startAngle="62.608695652173914" data:strokeWidth="5" data:value="34" data:pathOrig="M 125.44444095220285 43.54824368321219 A 60.75609756097562 60.75609756097562 0 0 1 18.88367607738934 101.8780487804878 L 63.6075514116084 76.05670731707318 A 9.113414634146343 9.113414634146343 0 0 0 79.59166614283043 67.30723655248183 L 125.44444095220285 43.54824368321219 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Fats" rel="3"><path id="apexcharts-donut-slice-2" d="M 18.88367607738934 101.8780487804878 A 60.75609756097562 60.75609756097562 0 0 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 0 0 63.6075514116084 76.05670731707318 L 18.88367607738934 101.8780487804878 z" fill="rgba(154,205,50,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="120" data:startAngle="240" data:strokeWidth="5" data:value="23" data:pathOrig="M 18.88367607738934 101.8780487804878 A 60.75609756097562 60.75609756097562 0 0 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 0 0 63.6075514116084 76.05670731707318 L 18.88367607738934 101.8780487804878 z"></path></g></g></g></g><line id="SvgjsLine1100" x1="0" y1="0" x2="143" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1101" x1="0" y1="0" x2="143" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 60.7266px; top: 58.75px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(0, 128, 0);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 128, 0); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Carbs: </span><span class="apexcharts-tooltip-text-value">34.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(0, 128, 0);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 128, 0); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Carbs: </span><span class="apexcharts-tooltip-text-value">34.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(0, 128, 0);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 128, 0); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Carbs: </span><span class="apexcharts-tooltip-text-value">34.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 201px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4 wow bounceIn" style="margin-bottom:30px;">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4="" style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">qofta</h5> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><p class="card-text">Chiken qofta</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(2)" class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_2" class="" style="position: relative; min-height: 200px;"><div id="apexchartsokvacacf" class="apexcharts-canvas apexchartsokvacacf light" style="width: 150px; height: 200px;"><svg id="SvgjsSvg1104" width="150" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs id="SvgjsDefs1105"><clipPath id="gridRectMaskokvacacf"><rect id="SvgjsRect1107" width="148" height="170" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskokvacacf"><rect id="SvgjsRect1108" width="145" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1111" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1112" r="9.113414634146343" cx="71.5" cy="71.5" fill="transparent"></circle><g id="SvgjsG1113"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Protines" rel="1"><path id="apexcharts-donut-slice-0" d="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z" fill="rgba(85,107,47,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="68.57142857142857" data:startAngle="0" data:strokeWidth="5" data:value="12" data:pathOrig="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Carbs" rel="2"><path id="apexcharts-donut-slice-1" d="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z" fill="rgba(0,128,0,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="68.57142857142857" data:startAngle="68.57142857142857" data:strokeWidth="5" data:value="12" data:pathOrig="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Fats" rel="3"><path id="apexcharts-donut-slice-2" d="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z" fill="rgba(154,205,50,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="222.85714285714286" data:startAngle="137.14285714285714" data:strokeWidth="5" data:value="39" data:pathOrig="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z"></path></g></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="143" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="143" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 26.3125px; top: -31.25px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 201px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceIn" style="margin-bottom:30px;">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4="" style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">qofta</h5> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><p class="card-text">Chiken qofta</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(2)" class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_2" class="" style="position: relative; min-height: 200px;"><div id="apexchartsokvacacf" class="apexcharts-canvas apexchartsokvacacf light" style="width: 150px; height: 200px;"><svg id="SvgjsSvg1104" width="150" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs id="SvgjsDefs1105"><clipPath id="gridRectMaskokvacacf"><rect id="SvgjsRect1107" width="148" height="170" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskokvacacf"><rect id="SvgjsRect1108" width="145" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1111" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1112" r="9.113414634146343" cx="71.5" cy="71.5" fill="transparent"></circle><g id="SvgjsG1113"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Protines" rel="1"><path id="apexcharts-donut-slice-0" d="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z" fill="rgba(85,107,47,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="68.57142857142857" data:startAngle="0" data:strokeWidth="5" data:value="12" data:pathOrig="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Carbs" rel="2"><path id="apexcharts-donut-slice-1" d="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z" fill="rgba(0,128,0,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="68.57142857142857" data:startAngle="68.57142857142857" data:strokeWidth="5" data:value="12" data:pathOrig="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Fats" rel="3"><path id="apexcharts-donut-slice-2" d="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z" fill="rgba(154,205,50,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="222.85714285714286" data:startAngle="137.14285714285714" data:strokeWidth="5" data:value="39" data:pathOrig="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z"></path></g></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="143" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="143" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 26.3125px; top: -31.25px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 201px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceIn" style="margin-bottom:30px;">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4="" style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">qofta</h5> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><p class="card-text">Chiken qofta</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(2)" class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_2" class="" style="position: relative; min-height: 200px;"><div id="apexchartsokvacacf" class="apexcharts-canvas apexchartsokvacacf light" style="width: 150px; height: 200px;"><svg id="SvgjsSvg1104" width="150" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs id="SvgjsDefs1105"><clipPath id="gridRectMaskokvacacf"><rect id="SvgjsRect1107" width="148" height="170" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskokvacacf"><rect id="SvgjsRect1108" width="145" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1111" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1112" r="9.113414634146343" cx="71.5" cy="71.5" fill="transparent"></circle><g id="SvgjsG1113"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Protines" rel="1"><path id="apexcharts-donut-slice-0" d="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z" fill="rgba(85,107,47,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="68.57142857142857" data:startAngle="0" data:strokeWidth="5" data:value="12" data:pathOrig="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Carbs" rel="2"><path id="apexcharts-donut-slice-1" d="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z" fill="rgba(0,128,0,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="68.57142857142857" data:startAngle="68.57142857142857" data:strokeWidth="5" data:value="12" data:pathOrig="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Fats" rel="3"><path id="apexcharts-donut-slice-2" d="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z" fill="rgba(154,205,50,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="222.85714285714286" data:startAngle="137.14285714285714" data:strokeWidth="5" data:value="39" data:pathOrig="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z"></path></g></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="143" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="143" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 26.3125px; top: -31.25px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 201px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceIn" style="margin-bottom:30px;">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4="" style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">qofta</h5> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><p class="card-text">Chiken qofta</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(2)" class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_2" class="" style="position: relative; min-height: 200px;"><div id="apexchartsokvacacf" class="apexcharts-canvas apexchartsokvacacf light" style="width: 150px; height: 200px;"><svg id="SvgjsSvg1104" width="150" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs id="SvgjsDefs1105"><clipPath id="gridRectMaskokvacacf"><rect id="SvgjsRect1107" width="148" height="170" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskokvacacf"><rect id="SvgjsRect1108" width="145" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1111" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1112" r="9.113414634146343" cx="71.5" cy="71.5" fill="transparent"></circle><g id="SvgjsG1113"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Protines" rel="1"><path id="apexcharts-donut-slice-0" d="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z" fill="rgba(85,107,47,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="68.57142857142857" data:startAngle="0" data:strokeWidth="5" data:value="12" data:pathOrig="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Carbs" rel="2"><path id="apexcharts-donut-slice-1" d="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z" fill="rgba(0,128,0,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="68.57142857142857" data:startAngle="68.57142857142857" data:strokeWidth="5" data:value="12" data:pathOrig="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Fats" rel="3"><path id="apexcharts-donut-slice-2" d="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z" fill="rgba(154,205,50,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="222.85714285714286" data:startAngle="137.14285714285714" data:strokeWidth="5" data:value="39" data:pathOrig="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z"></path></g></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="143" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="143" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 26.3125px; top: -31.25px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 201px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceIn" style="margin-bottom:30px;">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4="" style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">qofta</h5> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><p class="card-text">Chiken qofta</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(2)" class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_2" class="" style="position: relative; min-height: 200px;"><div id="apexchartsokvacacf" class="apexcharts-canvas apexchartsokvacacf light" style="width: 150px; height: 200px;"><svg id="SvgjsSvg1104" width="150" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs id="SvgjsDefs1105"><clipPath id="gridRectMaskokvacacf"><rect id="SvgjsRect1107" width="148" height="170" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskokvacacf"><rect id="SvgjsRect1108" width="145" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1111" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1112" r="9.113414634146343" cx="71.5" cy="71.5" fill="transparent"></circle><g id="SvgjsG1113"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Protines" rel="1"><path id="apexcharts-donut-slice-0" d="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z" fill="rgba(85,107,47,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="68.57142857142857" data:startAngle="0" data:strokeWidth="5" data:value="12" data:pathOrig="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Carbs" rel="2"><path id="apexcharts-donut-slice-1" d="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z" fill="rgba(0,128,0,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="68.57142857142857" data:startAngle="68.57142857142857" data:strokeWidth="5" data:value="12" data:pathOrig="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Fats" rel="3"><path id="apexcharts-donut-slice-2" d="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z" fill="rgba(154,205,50,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="222.85714285714286" data:startAngle="137.14285714285714" data:strokeWidth="5" data:value="39" data:pathOrig="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z"></path></g></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="143" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="143" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 26.3125px; top: -31.25px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 201px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceIn" style="margin-bottom:30px;">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4="" style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">qofta</h5> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><p class="card-text">Chiken qofta</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(2)" class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_2" class="" style="position: relative; min-height: 200px;"><div id="apexchartsokvacacf" class="apexcharts-canvas apexchartsokvacacf light" style="width: 150px; height: 200px;"><svg id="SvgjsSvg1104" width="150" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs id="SvgjsDefs1105"><clipPath id="gridRectMaskokvacacf"><rect id="SvgjsRect1107" width="148" height="170" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskokvacacf"><rect id="SvgjsRect1108" width="145" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1111" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1112" r="9.113414634146343" cx="71.5" cy="71.5" fill="transparent"></circle><g id="SvgjsG1113"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Protines" rel="1"><path id="apexcharts-donut-slice-0" d="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z" fill="rgba(85,107,47,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="68.57142857142857" data:startAngle="0" data:strokeWidth="5" data:value="12" data:pathOrig="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Carbs" rel="2"><path id="apexcharts-donut-slice-1" d="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z" fill="rgba(0,128,0,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="68.57142857142857" data:startAngle="68.57142857142857" data:strokeWidth="5" data:value="12" data:pathOrig="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Fats" rel="3"><path id="apexcharts-donut-slice-2" d="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z" fill="rgba(154,205,50,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="222.85714285714286" data:startAngle="137.14285714285714" data:strokeWidth="5" data:value="39" data:pathOrig="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z"></path></g></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="143" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="143" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 26.3125px; top: -31.25px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 201px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceIn">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4="" style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">qofta</h5> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><p class="card-text">Chiken qofta</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(2)" class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_2" class="" style="position: relative; min-height: 200px;"><div id="apexchartsokvacacf" class="apexcharts-canvas apexchartsokvacacf light" style="width: 150px; height: 200px;"><svg id="SvgjsSvg1104" width="150" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs id="SvgjsDefs1105"><clipPath id="gridRectMaskokvacacf"><rect id="SvgjsRect1107" width="148" height="170" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskokvacacf"><rect id="SvgjsRect1108" width="145" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1111" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1112" r="9.113414634146343" cx="71.5" cy="71.5" fill="transparent"></circle><g id="SvgjsG1113"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Protines" rel="1"><path id="apexcharts-donut-slice-0" d="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z" fill="rgba(85,107,47,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="68.57142857142857" data:startAngle="0" data:strokeWidth="5" data:value="12" data:pathOrig="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Carbs" rel="2"><path id="apexcharts-donut-slice-1" d="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z" fill="rgba(0,128,0,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="68.57142857142857" data:startAngle="68.57142857142857" data:strokeWidth="5" data:value="12" data:pathOrig="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Fats" rel="3"><path id="apexcharts-donut-slice-2" d="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z" fill="rgba(154,205,50,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="222.85714285714286" data:startAngle="137.14285714285714" data:strokeWidth="5" data:value="39" data:pathOrig="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z"></path></g></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="143" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="143" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 26.3125px; top: -31.25px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 201px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceIn">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4="" style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">qofta</h5> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><p class="card-text">Chiken qofta</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(2)" class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_2" class="" style="position: relative; min-height: 200px;"><div id="apexchartsokvacacf" class="apexcharts-canvas apexchartsokvacacf light" style="width: 150px; height: 200px;"><svg id="SvgjsSvg1104" width="150" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs id="SvgjsDefs1105"><clipPath id="gridRectMaskokvacacf"><rect id="SvgjsRect1107" width="148" height="170" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskokvacacf"><rect id="SvgjsRect1108" width="145" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1111" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1112" r="9.113414634146343" cx="71.5" cy="71.5" fill="transparent"></circle><g id="SvgjsG1113"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Protines" rel="1"><path id="apexcharts-donut-slice-0" d="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z" fill="rgba(85,107,47,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="68.57142857142857" data:startAngle="0" data:strokeWidth="5" data:value="12" data:pathOrig="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Carbs" rel="2"><path id="apexcharts-donut-slice-1" d="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z" fill="rgba(0,128,0,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="68.57142857142857" data:startAngle="68.57142857142857" data:strokeWidth="5" data:value="12" data:pathOrig="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Fats" rel="3"><path id="apexcharts-donut-slice-2" d="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z" fill="rgba(154,205,50,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="222.85714285714286" data:startAngle="137.14285714285714" data:strokeWidth="5" data:value="39" data:pathOrig="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z"></path></g></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="143" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="143" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 26.3125px; top: -31.25px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 201px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceIn">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4="" style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">qofta</h5> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><p class="card-text">Chiken qofta</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(2)" class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_2" class="" style="position: relative; min-height: 200px;"><div id="apexchartsokvacacf" class="apexcharts-canvas apexchartsokvacacf light" style="width: 150px; height: 200px;"><svg id="SvgjsSvg1104" width="150" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs id="SvgjsDefs1105"><clipPath id="gridRectMaskokvacacf"><rect id="SvgjsRect1107" width="148" height="170" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskokvacacf"><rect id="SvgjsRect1108" width="145" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1111" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1112" r="9.113414634146343" cx="71.5" cy="71.5" fill="transparent"></circle><g id="SvgjsG1113"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Protines" rel="1"><path id="apexcharts-donut-slice-0" d="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z" fill="rgba(85,107,47,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="68.57142857142857" data:startAngle="0" data:strokeWidth="5" data:value="12" data:pathOrig="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Carbs" rel="2"><path id="apexcharts-donut-slice-1" d="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z" fill="rgba(0,128,0,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="68.57142857142857" data:startAngle="68.57142857142857" data:strokeWidth="5" data:value="12" data:pathOrig="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Fats" rel="3"><path id="apexcharts-donut-slice-2" d="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z" fill="rgba(154,205,50,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="222.85714285714286" data:startAngle="137.14285714285714" data:strokeWidth="5" data:value="39" data:pathOrig="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z"></path></g></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="143" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="143" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 26.3125px; top: -31.25px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 201px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow bounceIn">
                    <div class=" card component-card_2 ">
                        <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2">
        
                        <div class="card-body crd" style="border-top: 20px; background: #fff;">
                            <div class="row">
                                <div class="col-lg-6" pl-4="" style="justify-content: space-between;flex-direction: column;display: flex;">
                                    <div>    
                                        <h5 class="card-title">qofta</h5> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><p class="card-text">Chiken qofta</p>
                                    </div>
                                    <div>
                                        <button data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(2)" class="btn btn-success">View Recipe</button>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 pl-0" style="text-align: -webkit-center; margin-top: 8px;">
                                    <div id="chart_2" class="" style="position: relative; min-height: 200px;"><div id="apexchartsokvacacf" class="apexcharts-canvas apexchartsokvacacf light" style="width: 150px; height: 200px;"><svg id="SvgjsSvg1104" width="150" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1106" class="apexcharts-inner apexcharts-graphical" transform="translate(4.5, 0)"><defs id="SvgjsDefs1105"><clipPath id="gridRectMaskokvacacf"><rect id="SvgjsRect1107" width="148" height="170" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskokvacacf"><rect id="SvgjsRect1108" width="145" height="167" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1110" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1111" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1112" r="9.113414634146343" cx="71.5" cy="71.5" fill="transparent"></circle><g id="SvgjsG1113"><g id="apexcharts-series-0" class="apexcharts-series apexcharts-pie-series" seriesName="Protines" rel="1"><path id="apexcharts-donut-slice-0" d="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z" fill="rgba(85,107,47,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="0" data:angle="68.57142857142857" data:startAngle="0" data:strokeWidth="5" data:value="12" data:pathOrig="M 71.5 10.743902439024382 A 60.75609756097562 60.75609756097562 0 0 1 128.05625628957836 49.303305080568535 L 79.98343844343675 68.17049576208528 A 9.113414634146343 9.113414634146343 0 0 0 71.5 62.386585365853655 L 71.5 10.743902439024382 z"></path></g><g id="apexcharts-series-1" class="apexcharts-series apexcharts-pie-series" seriesName="Carbs" rel="2"><path id="apexcharts-donut-slice-1" d="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z" fill="rgba(0,128,0,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="1" data:angle="68.57142857142857" data:startAngle="68.57142857142857" data:strokeWidth="5" data:value="12" data:pathOrig="M 128.05625628957836 49.303305080568535 A 60.75609756097562 60.75609756097562 0 0 1 112.82464121432588 116.03737104214872 L 77.69869618214888 78.18060565632231 A 9.113414634146343 9.113414634146343 0 0 0 79.98343844343675 68.17049576208528 L 128.05625628957836 49.303305080568535 z"></path></g><g id="apexcharts-series-2" class="apexcharts-series apexcharts-pie-series" seriesName="Fats" rel="3"><path id="apexcharts-donut-slice-2" d="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z" fill="rgba(154,205,50,1)" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area" index="0" j="2" data:angle="222.85714285714286" data:startAngle="137.14285714285714" data:strokeWidth="5" data:value="39" data:pathOrig="M 112.82464121432588 116.03737104214872 A 60.75609756097562 60.75609756097562 0 1 1 71.48939606062281 10.743903364392658 L 71.49840940909343 62.386585504658896 A 9.113414634146343 9.113414634146343 0 1 0 77.69869618214888 78.18060565632231 L 112.82464121432588 116.03737104214872 z"></path></g></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="143" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="143" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark" style="left: 26.3125px; top: -31.25px;"><div class="apexcharts-tooltip-series-group active" style="display: flex; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="display: none; background-color: rgb(154, 205, 50);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(154, 205, 50); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Fats: </span><span class="apexcharts-tooltip-text-value">39.0</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 175px; height: 201px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 p-0">
                                <img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top"
                                    alt="widget-card-2">
                                <div class="Ingredients p-5">
                                    <blockquote>
                                        <div id="Ingredients"><b>Ingredients</b></div>
                                    </blockquote>
                                    <p>
                                    <ol id="Ingredients_list">
                                        <li><span>Add lemon halves to a large bowl of cold water, squeezing to release
                                                juice.</span></li>
                                        <li><span>Cut off top inch of 1 artichoke and bend back outer leaves until they
                                                snap off
                                                close to base
                                                (keep stem attached.) Discard several more layers in same manner until
                                                you reach
                                                pale yellow
                                                leaves.</span></li>
                                        <li><span>Cut remaining leaves flush with top of artichoke bottom using a sharp
                                                knife.
                                                Trim dark green
                                                fibrous parts from base and sides of artichoke.</span></li>
                                        <li><span>Peel sides of stem down to pale inner core. Put in lemon water while
                                                preparing
                                                remaining
                                                artichokes.</span></li>
                                        <li><span>Serve warm or at room temperature.</span></li>
                                    </ol>
                                    </p>
                                </div>

                            </div>
                            <div class="col-lg-6 p-5">
                                <div class="Title">
                                    <h1 id="title"><b>Chicken Biyani</b></h1>
                                    <div id="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    </div>
                                    <span id="description">This is description. Add lemon halves to a large bowl of cold water, squeezing to release
                                                juice.</span>
                                </div>
                                <div class="hr"></div>'
                                <div class="Preparation">
                                    <blockquote>
                                        <div id="preparation"><b>Preparation</b></div>
                                    </blockquote>
                                    <p>
                                    <ol id="preparation_list">
                                        <li><span>Add lemon halves to a large bowl of cold water, squeezing to release
                                                juice.</span></li>
                                        <li><span>Cut off top inch of 1 artichoke and bend back outer leaves until they
                                                snap off
                                                close to base
                                                (keep stem attached.) Discard several more layers in same manner until
                                                you reach
                                                pale yellow
                                                leaves.</span></li>
                                        <li><span>Cut remaining leaves flush with top of artichoke bottom using a sharp
                                                knife.
                                                Trim dark green
                                                fibrous parts from base and sides of artichoke.</span></li>
                                        <li><span>Peel sides of stem down to pale inner core. Put in lemon water while
                                                preparing
                                                remaining
                                                artichokes.</span></li>
                                        <li><span>Serve warm or at room temperature.</span></li>
                                    </ol>
                                    </p>
                                </div>
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                    Discard</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
var options = {
    chart: {
        type: 'donut',
        width: 380
    },
    colors: ['#556B2F', '#008000', '#9ACD32', '#e2a03f'],
    dataLabels: {
        enabled: false
    },
    legend: {
        show: false,
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '17px',
        markers: {
            width: 10,
            height: 10,
        },
        itemMargin: {
            horizontal: 0,
            vertical: 8
        }
    },
    plotOptions: {
        pie: {
            donut: {
                size: '15%',
                background: 'transparent',
                labels: {
                    show: false,
                    name: {
                        show: true,
                        fontSize: '29px',
                        fontFamily: 'Nunito, sans-serif',
                        color: undefined,
                        offsetY: -10
                    },
                    value: {
                        show: false,
                        fontSize: '26px',
                        fontFamily: 'Nunito, sans-serif',
                        color: '#bfc9d4',
                        offsetY: 2,
                        formatter: function(val) {
                            return val
                        }
                    },
                    total: {
                        show: false,
                        showAlways: false,
                        label: 'Total',
                        color: '#888ea8',
                        formatter: function(w) {
                            return w.globals.seriesTotals.reduce(function(a, b) {
                                return a + b
                            }, 0)
                        }
                    }
                }
            }
        }
    },
    stroke: {
        show: true,
        width: 5
    },
    series: [985.12, 737.12, 270.2],
    labels: ['Protines', 'Carbs', 'Fats'],
    responsive: [{
        breakpoint: 1599,
        options: {
            chart: {
                width: '150px',
                height: '260px'
            },
            legend: {
                position: 'bottom'
            }
        },

        breakpoint: 1439,
        options: {
            chart: {
                width: '150px',
                height: '200px'
            },
            legend: {
                position: 'bottom'
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '15%',
                    }
                }
            }
        },
    }]
}


$.ajax({
    url: "{{ route('getRecipes') }}",
    method: "GET",
    dataType: "json",
    success: function(data) {
        console.log("data", data.calories);
        $('#show_recipes').html(data.data);
        charts = [];
        for (var x = 1; x <= data.recipe_count; x++) {
            console.log("#chart_" + (x));
            charts[x - 1] = new ApexCharts(
                document.querySelector("#chart_" + x),
                options
            );
            charts[x - 1].render();
            charts[x - 1].updateSeries(data.calories[x - 1]);

        }
    }
});
// $.ajax({
//     url: "{{ route('getRecipes') }}",
//     method: "GET",
//     dataType: "json",
//     success: function(data) {
//         if (data.error.length > 0) {
//             var error_html = '';
//             for (var count = 0; count < data.error.length; count++) {
//                 error_html += '<div class="alert alert-danger">' + data.error[count] + '</div>';
//             }
//         } else {
//             if (data.data.length > 0) {
//                 var card_html = '';
//                 var charts = []
//                 for (var count = 0; count < data.data.length; count++) {
//                     card_html +=
//                         '<div style = "margin : 2.5rem!important; border-radius: 10px; background: #f1f2f3;" class="col-lg-3 card component-card_2 pl-0 pr-0 "><img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2"><div class="card-body crd"><h5 class="card-title">' +
//                         data.data[count].title + '</h5><p class="card-text">' + data.data[count]
//                         .description +
//                         '</p><div id="chart' + count +
//                         '" class=""></div><button data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(' + data.data[count].id +
//                         ')" class="btn btn-success">Explore More</button></div></div>';
//                 }
//                 $('#show_recipes').html(card_html);
//                 for (var x = 0; x < data.data.length; x++) {
//                     charts[x] = new ApexCharts(
//                         document.querySelector("#chart" + x),
//                         options
//                     );
//                     charts[x].render();
//                     charts[x].updateSeries([
//                         parseFloat(data.data[x].proteins), parseFloat(data.data[x].carbs),
//                         parseFloat(data.data[x].fats)
//                     ]);
//                 }
//             }

//         }
//     }
// });

function exploreRecipe(id) {
    var data = {
        "_token": "{{ csrf_token() }}",
        "id": id
    }
    var res = '';
    $.ajax({
        url: "{{ route('getRecipe') }}",
        method: "POST",
        data: data,
        dataType: "json",
        success: function(data) {
            console.log(data);
            res = data;
            $('#recipe_title').html(data.data.title);
            $('#description').html(data.data.description);
            var ingredientsList = data.data.ingredients.split(',');
            var ingredients = '';
            for (var x =0; x< ingredientsList.length; x++)
            {
                ingredients += '<li><span>'+ingredientsList[x]+'</span></li>';
            }
            $('#Ingredients_list').html(ingredients);
            var instructionsList = data.data.instructions.split(',');
            var instructions = '';
            for (var x =0; x< instructionsList.length; x++)
            {
                instructions += '<li><span>'+instructionsList[x]+'</span></li>';
            }
            $('#preparation_list').html(instructions);
        }
    });


}
</script>
@endsection