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
/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
</style>
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