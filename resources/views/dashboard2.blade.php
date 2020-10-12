@extends('layouts.app')

@section('content')
<script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
<script>
function my() {
    setTimeout(drawChart, 2000);
    setTimeout(updateResults, 4000);

}
</script>
<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-one">
                <div class="widget-heading">
                    <h5 class="">Weight Comparison</h5>
                    <ul class="tabs tab-pills">
                        <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Daily</a></li>
                    </ul>
                </div>

                <div class="widget-content">
                    <div class="tabs tab-content">
                        <div id="content_1" class="tabcontent">
                            <div id="revenueMonthly"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-chart-two">
                <div class="widget-heading">
                    <h5 class="">Diet Plan By Category</h5>
                </div>
                <div class="widget-content">
                    <div id="chart-2" class=""></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Add Weight</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-lg-10 col-12 mx-auto">
                            <form method="post" id="current_weight_form">
                                <div class="form-group">
                                {{csrf_field()}}
                                <span id="current_weight_form_output"></span>
                                    <label for="current_weight" >Today's Weight</label>
                                    <input id="current_weight" type="number" name="current_weight" placeholder="Enter Weight in Kg"
                                        class="form-control" required>
                                    <input type="submit" value="Add" class="btn btn-success mt-4">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Set Trget Weight</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-lg-10 col-12 mx-auto">
                            <form id="set_target_form">
                                <div class="form-group">
                                {{csrf_field()}}
                                    <span id="set_target_form_output"></span>
                                    <label for="t-text">Your Target</label>
                                    <input id="t-text" type="number" name="target-weight" placeholder="Enter Weight in Kg"
                                        class="form-control" required>
                                    
                                        <input type="submit" id ="submit-btn" name="submit" value="Set" class="btn btn-success mt-4" />
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="widget-three">
                <div class="widget-heading">
                    <h5 class="">Your Plan Summary</h5>
                </div>
                <div class="widget-content">

                    <div class="order-summary">

                        <div class="summary-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shopping-bag">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                            </div>
                            <div class="w-summary-details">

                                <div class="w-summary-info">
                                    <h6>Proteins</h6>
                                    <p id="protein-count" class="summary-count"></p>
                                </div>

                                <div class="w-summary-stats">
                                    <div class="progress">
                                        <div id="bar1" class="progress-bar color1" role="progressbar"
                                            style="width: 0" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="summary-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-tag">
                                    <path
                                        d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                    </path>
                                    <line x1="7" y1="7" x2="7" y2="7"></line>
                                </svg>
                            </div>
                            <div class="w-summary-details">

                                <div class="w-summary-info">
                                    <h6>Carbs</h6>
                                    <p id="carbs-count" class="summary-count"></p>
                                </div>

                                <div class="w-summary-stats">
                                    <div class="progress">
                                        <div id="bar2" class="progress-bar color3" role="progressbar"
                                            style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="summary-list">
                            <div class="w-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-credit-card">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>
                            </div>
                            <div class="w-summary-details">

                                <div class="w-summary-info">
                                    <h6>Fats</h6>
                                    <p id="fats-count" class="summary-count"></p>
                                </div>

                                <div class="w-summary-stats">
                                    <div class="progress">
                                        <div id="bar3" class="progress-bar color2" role="progressbar"
                                            style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

<script>

my()

$('#current_weight_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url:"{{ route('saveWeights') }}",
            method:"POST",
            data:form_data,
            dataType:"json",
            success:function(data)
            {
                if(data.error.length > 0)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                    }
                    $('#current_weight_form_output').html(error_html);
                }
                else
                {
                    $('#current_weight_form_output').html(data.success);
                    $('#current_weight_form')[0].reset();
                }
            }
        })
    });


$('#set_target_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url:"{{ route('saveTarget') }}",
            method:"POST",
            data:form_data,
            dataType:"json",
            success:function(data)
            {
                if(data.error.length > 0)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                    }
                    $('#set_target_form_output').html(error_html);
                }
                else
                {
                    $('#set_target_form_output').html(data.success);
                    $('#set_target_form')[0].reset();
                }
            }
        })
    });
    
function Trigger_submit(){
        var form_data = $(this).serialize();
        $.ajax({
            url:"{{ route('saveTarget') }}",
            method:"POST",
            data:form_data,
            dataType:"json",
            success:function(data)
            {
                if(data.error.length > 0)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                    }
                    $('#form_output').html(error_html);
                }
                else
                {
                    $('#set_target_form_output').html(data.success);
                    $('#set_target_form')[0].reset();
                }
            }
        });
    }
    

function drawChart() {
    var url = '/test';

    $.getJSON(url, function(response) {
        chart1.updateSeries([{
            name: 'Actual Weight',
            data: response[0]
        }, {
            name: 'Target Weight',
            data: response[1]
        }])
    });

}

function updateResults() {
    var url = '/getResults';
    $.getJSON(url, function(response) {
        var protein = response[0];
        var carbs = response[1];
        var fats = response[2];
        var consumed_protein = response[3];
        var consumed_carbs = response[4];
        var consumed_fats = response[5];
        protein = protein.slice(0, -1);
        carbs = carbs.slice(0, -1);
        fats = fats.slice(0, -1);
        protein = parseFloat(protein);
        carbs = parseFloat(carbs);
        fats = parseFloat(fats);
        consumed_protein = parseFloat(consumed_protein);
        consumed_carbs = parseFloat(consumed_carbs);
        consumed_fats = parseFloat(consumed_fats);
        chart.updateSeries([
            protein, carbs, fats
        ]);
        var bar1 = (consumed_protein/protein)*100;
        bar1 = bar1+'%';
        var bar2 = (consumed_carbs/carbs)*100;
        bar2 = bar2+'%';
        var bar3 = (consumed_fats/fats)*100;
        bar3 = bar3+'%';
        $('#fats-count').text(consumed_fats + 'g')
        $('#protein-count').text(consumed_protein + 'g')
        $('#carbs-count').text(consumed_carbs + 'g')
        $('#bar1').css("width", bar1);
        $('#bar2').css("width", bar2);
        $('#bar3').css("width", bar3);
    });

}
</script>

@endsection