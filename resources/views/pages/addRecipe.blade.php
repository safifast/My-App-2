@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row layout-top-spacing">

        <div id="basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Add Recipe Detail</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-lg-10 col-12 mx-auto">
                            <form id="add-recipe-form" method="POST"  enctype="multipart/form-data">
                                
                                <div class="form-group">
                                {{csrf_field()}}
                                    <span id="current_weight_form_output"></span>
                                    <!-- <label>Upload photo of recipe </label>
                                    <label class="custom-file-container__custom-file">
                                        <input name="recipe-imag" type="file" class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*">
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                 -->
                                    <input id="image" type="text" name="file_name" placeholder="enter path"
                                        class="form-control" required>

                                    <label for="title">Title</label>
                                    
                                    <input type="text" class="form-control" id="title"  name="title" placeholder="Title of Recipe"
                                        required>
                                    <label for="desciption">Description</label>
                                    <input type="text" class="form-control" id="desciption"  name="description"
                                        placeholder="Desciption of Recipe" required>

                                    <label for="Ingredients">Ingredients</label>
                                    <textarea type="text" class="form-control" id="Ingredients"  name="ingredients"
                                        placeholder="Enter Ingredients by comma(,) seprated" required></textarea>

                                    <label for="Instructions">Instructions</label>
                                    <textarea type="text" class="form-control" id="Instructions"  name="instructions"
                                        placeholder="Enter Instructions by comma(,) seprated" required></textarea>

                                    <label for="protein">Proteins</label> 
                                    <input type="number" class="form-control" id="protein" placeholder="Proteins"  name="proteins"
                                        required>

                                    <label for="Carbs">Carbs</label>
                                    <input type="number" class="form-control" id="Carbs" placeholder="Carbs"  name="carbs" required >

                                    <label for="desciption">Fats</label>
                                    <input type="number" class="form-control" id="Fats" placeholder="Fats"  name="fats" required>


                                    <input type="submit" value="Add">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
                <!-- <div class="widget-content widget-content-area">

                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
                            <form id="add-recipe-form" method="POST">
                                {{csrf_field()}}
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Upload photo of recipe </label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*">
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Title of Recipe">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="desciption">Description</label>
                                    <input type="text" class="form-control" id="desciption"
                                        placeholder="Desciption of Recipe">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="Ingredients">Ingredients</label>
                                    <textarea type="text" class="form-control" id="Ingredients"
                                        placeholder="Enter Ingredients by comma(,) seprated"></textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="Instructions">Instructions</label>
                                    <textarea type="text" class="form-control" id="Instructions"
                                        placeholder="Enter Instructions by comma(,) seprated"></textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="protein">Proteins</label>
                                    <input type="number" class="form-control" id="protein" placeholder="Proteins">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="Carbs">Carbs</label>
                                    <input type="number" class="form-control" id="Carbs" placeholder="Carbs">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="desciption">Fats</label>
                                    <input type="number" class="form-control" id="Fats" placeholder="Fats">
                                </div>

                                <input type="submit" id="submit-btn" name="submit" value="Set"
                                    class="mt-4 btn btn-primary" />
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<script>
$('#add-recipe-form').on('submit', function(event) {
    event.preventDefault();
    var form_data =$('form').serialize() ;
    console.log(form_data);
    $.ajax({
        url: "{{ route('saveRecipe') }}",
        method: "POST",
        data: form_data,
        dataType: "json",
        success: function(data) {
            if (data.error.length > 0) {
                var error_html = '';
                for (var count = 0; count < data.error.length; count++) {
                    error_html += '<div class="alert alert-danger">' + data.error[count] + '</div>';
                }
                $('#current_weight_form_output').html(error_html);
            } else {
                $('#current_weight_form_output').html(data.success);
                $('#add-recipe-form')[0].reset();
            }
        }
    })
});
</script>
@endsection