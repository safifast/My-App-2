@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.1/css/star-rating.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.1/js/star-rating.min.js"></script> -->
<script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
<style>
.rating-stars-container {
    text-align: center;
}

.rating-stars {
    display: inline-block;
    margin: 20px;
}
.apexcharts-canvas {
    position: relative;
    user-select: none;
    left: -38px !important;
}
.rating-star {
    font-size: 44px;
    cursor: pointer
}

.fa-star {
    color: #00A8CC;
}


.bottom-message {
    font-size: 0.85em;
}

.sr-navigator-container.visible-sm-block {
    margin-top: 30px;
}

.notes-container {
    margin: auto;
    margin-top: 20px;
    width: 50%;
}

#myNotesView {
    display: block;
}

.notes-buttons {
    margin-top: 10px;
}

@media (max-width: 767px) {
    .notes-container {
        width: 100%;
    }
}

.btn-ls-blue {
    background-color: #4984a3;
    border: none;
    -o-transition: background-color 0.215s;
    -moz-transition: background-color 0.215s;
    -webkit-transition: background-color 0.215s;
    transition: background-color 0.215s;
}

.btn-ls-blue:hover,
.btn-ls-blue:active,
.btn-ls-blue:focus,
.btn-ls-blue.active {
    background-color: #00A8CC;
}

.hide {
    display: none;
}

.day {
    background: #E8E8E8;
    border-radius: 10px;
}


.preview-list.grid.columns-7,
.preview-list.grid.columns-week {
    grid-template-columns: repeat(7, 1fr);
}

.preview-list.grid {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 4px;
    margin: 1rem 0;
}

.preview-list,
.entry .preview-list {
    list-style: none;
    margin: 0;
    padding: 0;
}

.preview-list.grid.columns-7>*:nth-child(7n+1),
.preview-list.grid.columns-week>*:nth-child(7n+1) {
    clear: left;
}

.preview-list.grid.columns-7>*:nth-child(4n+1),
.preview-list.grid.columns-week>*:nth-child(4n+1) {
    clear: none;
}

.preview-list.grid.columns-7>*:nth-child(4n+1),
.preview-list.grid.columns-week>*:nth-child(4n+1) {
    clear: left;
}

.preview-list.grid .preview-item {
    padding: 0;
}

.preview-list.grid.columns-7>*,
.preview-list.grid.columns-week>* {
    margin: 0;
    width: auto;
}

.preview-item.format-image,
.preview-item.format-image-simple,
.preview-item.format-news .news-image,
.preview-item.format-course .course-image {
    line-height: 0;
}

.preview-item,
.preview-item .news-image,
.preview-item .course-image {
    display: block;
    position: relative;
}

.preview-list.grid .preview-item .inner {
    position: relative;
}

.preview-list *,
.preview-item * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

img.lazy.initial,
img.lazy.loaded,
img.lazy.error,
img[srcset].lazy,
img[src].lazy {
    opacity: 1;
}

.preview-item .main-image {
    width: 100%;
}

img.lazy-fade-in {
    -webkit-transition: opacity 1s;
    transition: opacity 1s;
}

img.lazy {
    opacity: 0;
}

.preview-list *,
.preview-item * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

select,
img {
    height: auto;
    max-width: 100%;
}

img {
    border-style: none;
}

.preview-item .inner:hover .show-on-active,
.preview-item.hover .show-on-active,
.preview-item:focus .show-on-active,
.preview-item.active .show-on-active,
.preview-item.show-footer-always .footer,
.preview-item.show-header-always .header {
    filter: alpha(opacity=100);
    opacity: 1;
}

.preview-item .header,
.preview-item .footer {
    padding: 0.8em;
}

.preview-item .header {
    top: 0;
    width: 100%;
    padding-right: 4.2em;
}

.preview-item .header,
.preview-item .footer {
    display: block;
    position: absolute;
    padding: 8px;
    width: 100%;
}

.preview-item-edit,
.preview-item-rank,
.preview-item .header,
.preview-item .footer,
.preview-item-icons,
.preview-item .play-icon,
.preview-item .ddplus-icon,
.video-watched-msg,
.extra-images-container {
    display: block;
}

.preview-list *,
.preview-item * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.preview-item-tag {
    font-size: 1.5rem;
    margin-left: 0.1em;
}

.preview-item-tag {
    display: block;
    filter: alpha(opacity=50);
    opacity: 0.5;
    font-size: 1.5rem;
    line-height: 1;
    margin-left: 0;
}

.preview-list *,
.preview-item * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.preview-item.light .header {
    color: #333;
}

.preview-item .header,
.preview-item .footer,
.preview-item .header a,
.preview-item .footer a,
.preview-item .js-link.preview-item-js-link,
.preview-item>.js-link.preview-item-js-link:hover {
    color: #fff;
}

.preview-item.format-image,
.preview-item.format-image-simple,
.preview-item.format-news .news-image,
.preview-item.format-course .course-image {
    line-height: 0;
}

.preview-list,
.entry .preview-list {
    list-style: none;
    margin: 0;
    padding: 0;
}

.gallery-single {
    position: relative;
    overflow: hidden;
    -webkit-box-shadow: 0 0 10px #ccc;
    box-shadow: 0 0 10px #ccc;
}

.gallery-single {
    margin-bottom: 30px;
    display: flex;
}

img {
    vertical-align: middle;
    border-style: none;
}

.gallery-single:hover .why-text {
    bottom: 0px;
}

.why-text {
    position: absolute;
    left: 0;
    bottom: -100%;
    right: 0;
    height: 100%;
    background: rgb(243 255 238 / 92%);
    padding: 12px 12px;
    -webkit-transition: all .3s cubic-bezier(0.73, -0.9, 0, 1.09);
    transition: all .3s ease;
    color: white;
}
</style>

<div>
    <div class="container-fluid p-5">
        <!-- <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-single fix">
                    <img src="http://localhost:8000/storage/img/recipe1.png" class="img-fluid" alt="Image">
                    <div style=" position: absolute;    float: left;    padding: 21px;    width: 100%;">
                        <h5 style="color: white;">Breakfast</h5>
                    </div>
                    <div class="row why-text">
                        <div class="col-lg-6">
                            <h4 style="color: #0a561e;"><strong> Biryani </strong></h4>
                            <p style="color: #0a561e;"> Chicken Biryani with spicy rice.</p>
                            <button style="margin-top:70px;" data-toggle="modal" data-target="#exampleModal"
                                onclick="exploreRecipe(1)" class="btn btn-outline-success">View Recipe</button>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    <img src="images/img-02.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Drinks 2</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $9.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    <img src="images/img-03.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Drinks 3</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $10.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid lunch">
                <div class="gallery-single fix">
                    <img src="images/img-04.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Lunch 1</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $15.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid lunch">
                <div class="gallery-single fix">
                    <img src="images/img-05.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Lunch 2</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $18.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid lunch">
                <div class="gallery-single fix">
                    <img src="images/img-06.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Lunch 3</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $20.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid dinner">
                <div class="gallery-single fix">
                    <img src="images/img-07.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Dinner 1</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $25.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid dinner">
                <div class="gallery-single fix">
                    <img src="images/img-08.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Dinner 2</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $22.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid dinner">
                <div class="gallery-single fix">
                    <img src="images/img-09.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Dinner 3</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $24.79</h5>
                    </div>
                </div>
            </div>
        </div> -->
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
        <!-- <div class="modal fade" id="exampleModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="candidateRatingModalLabel">Candidate Rating
                        </h4>
                    </div>
                    <div class="modal-body">
                        <span class="top-message">To help us get better, please rate this candidate.</span>
                        <div class="rating-stars-container">
                            <div class="rating-stars">
                                <i class="rating-star fa fa-star-o" data-rating="1"></i>
                                <i class="rating-star fa fa-star-o" data-rating="2"></i>
                                <i class="rating-star fa fa-star-o" data-rating="3"></i>
                                <i class="rating-star fa fa-star-o" data-rating="4"></i>
                                <i class="rating-star fa fa-star-o" data-rating="5"></i>
                            </div>
                        </div>
                        <span class="bottom-message">Your ratings will be confidential so candidates won't see
                            them.</span>
                        <div class="modal-alert alert alert-danger hide">Failed to save rating</div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button id="crSubmitBtn" onclick="window.location.reload()" type="button"
                            class="btn btn-primary btn-ls-blue">Submit</button>
                    </div>
                </div>
            </div>
        </div> -->
        <div id="show_recipes" class="row layout-top-spacing">

        </div>
    </div>
</div>
<script>
var url = window.location.href;
var id = url.substring(url.lastIndexOf('/') + 1);
console.log("parameter ", id);

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
        show:false,
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '17px',
        markers: {
          width: 10,
          height: 10,
        },
        itemMargin: {
          horizontal: 0,
          vertical: 0
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
              offsetY: 16,
              formatter: function (val) {
                return val
              }
            },
            total: {
              show: false,
              showAlways: false,
              label: 'Total',
              color: '#888ea8',
              formatter: function (w) {
                return w.globals.seriesTotals.reduce( function(a, b) {
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
                width: '250px',
                height: '170px'
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
    url: "/getPlan/" + id,
    method: "GET",
    dataType: "json",
    success: function(data) {
        // console.log(data.data);
        $('#show_recipes').html(data.data);
        var charts = []
        var arr = ['Monday_Breakfast','Monday_Lunch', 'Monday_Dinner', 'Tuesday_Breakfast','Tuesday_Lunch', 'Tuesday_Dinner', 'Wednesday_Breakfast','Wednesday_Lunch', 'Wednesday_Dinner', 'Thursday_Breakfast','Thursday_Lunch', 'Thursday_Dinner', 'Friday_Breakfast','Friday_Lunch', 'Friday_Dinner', 'Saturday_Breakfast','Saturday_Lunch', 'Saturday_Dinner', 'Sunday_Breakfast','Sunday_Lunch', 'Sunday_Dinner'];
        for (var x = 0; x < 21; x++) {
            
            charts[x] = new ApexCharts(
                document.querySelector("#chart_" + arr[x]),
                options
            );
            charts[x].render();
            charts[x].updateSeries(data.calories[x]);
            // $.ajax({
            //     url: "{{ route('getRecipe') }}",
            //     type: "POST",
            //     data: recipe_id,
            //     dataType: "json",
            //     success: function(data) {
            //         var arr = ['Monday_Breakfast','Monday_Lunch', 'Monday_Dinner', 'Tuesday_Breakfast','Tuesday_Lunch', 'Tuesday_Dinner', 'Wednesday_Breakfast','Wednesday_Lunch', 'Wednesday_Dinner', 'Thursday_Breakfast','Thursday_Lunch', 'Thursday_Dinner', 'Friday_Breakfast','Friday_Lunch', 'Friday_Dinner', 'Saturday_Breakfast','Saturday_Lunch', 'Saturday_Dinner', 'Sunday_Breakfast','Sunday_Lunch', 'Sunday_Dinner'];
            //         console.log("index", arr[data.index]);
            //         charts[x] = new ApexCharts(
            //             document.querySelector("#chart_" + arr[data.index]),
            //             options
            //         );
            //         charts[x].render();
            //         charts[x].updateSeries([
            //             parseFloat(data.data.proteins), parseFloat(data.data.carbs),
            //             parseFloat(data.data.fats)
            //         ]);
            //     }

            // });
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