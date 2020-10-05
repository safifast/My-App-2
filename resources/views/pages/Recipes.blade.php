@extends('layouts.app')

@section('content')
<script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
</script>
<div>
    <div class="container">

        <div id="show_recipes" class="row layout-top-spacing">
            <div class="card component-card_2">
                <img src="http://localhost:8000/storage/img/400x300.jpg" class="card-img-top" alt="widget-card-2">
                <div class="card-body">
                    <h5 class="card-title">CLI Based</h5>
                    <p class="card-text">Etiam sed augue ac justo tincidunt posuere. Vivamus euismod eros, nec risus
                        malesuada.</p>
                    <div id="test"></div>
                    <a href="#" class="btn btn-primary">Explore More</a>

                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            
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
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '14px',
        markers: {
            width: 10,
            height: 10,
        },
        itemMargin: {
            horizontal: 18,
            vertical: 2
        }
    },
    plotOptions: {
        pie: {
            donut: {
                size: '25%',
                background: 'transparent',
                labels: {
                    show: true,
                    name: {
                        show: true,
                        fontSize: '16px',
                        fontFamily: 'Nunito, sans-serif',
                        color: undefined,
                        offsetY: -10
                    },
                    value: {
                        show: true,
                        fontSize: '13px',
                        fontFamily: 'Nunito, sans-serif',
                        color: '20',
                        offsetY: -5,
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
        width: 5,
    },
    series: [985.12, 737.12, 270.2],
    labels: ['Protines', 'Carbs', 'Fats'],
    responsive: [{
        breakpoint: 1599,
        options: {
            chart: {
                width: '350px',
                height: '400px'
            },
            legend: {
                position: 'bottom'
            }
        },

        breakpoint: 1439,
        options: {
            chart: {
                width: '235px',
                height: '170px'
            },
            legend: {
                position: 'bottom'
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '60%',
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
        if (data.error.length > 0) {
            var error_html = '';
            for (var count = 0; count < data.error.length; count++) {
                error_html += '<div class="alert alert-danger">' + data.error[count] + '</div>';
            }
        } else {
            if (data.data.length > 0) {
                var card_html = '';
                var charts = []
                for (var count = 0; count < data.data.length; count++) {
                    card_html +=
                        '<div style = "margin : 2.5rem!important; border-radius: 10px; background: #f1f2f3;" class="col-lg-3 card component-card_2 pl-0 pr-0 "><img src="http://localhost:8000/storage/img/recipe1.png" class="card-img-top" alt="widget-card-2"><div class="card-body crd"><h5 class="card-title">' +
                        data.data[count].title + '</h5><p class="card-text">' + data.data[count]
                        .description +
                        '</p><div id="chart' + count +
                        '" class=""></div><button data-toggle="modal" data-target="#exampleModal" onclick="exploreRecipe(' + data.data[count].id +
                        ')" class="btn btn-success">Explore More</button></div></div>';
                }
                $('#show_recipes').html(card_html);
                for (var x = 0; x < data.data.length; x++) {
                    charts[x] = new ApexCharts(
                        document.querySelector("#chart" + x),
                        options
                    );
                    charts[x].render();
                    charts[x].updateSeries([
                        parseFloat(data.data[x].proteins), parseFloat(data.data[x].carbs),
                        parseFloat(data.data[x].fats)
                    ]);
                }
            }

        }
    }
});

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
        }
    });
    var card_html = '<div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Modal title</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><svg> ... </svg></button></div><div class="modal-body"><p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellusegestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturientmontes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar.Ut sit amet ullamcorper mi. </p></div><div class="modal-footer"><button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button></div></div></div>';
    $('#exampleModal').html(card_html);
    
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
</script>
@endsection