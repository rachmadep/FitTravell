@extends('layouts.admin')
{{-- Page title --}}
@section('title', 'Create Tours')

@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Create</strong> Tour
            </div>
            <div class="card-body card-block">
                <form action="/adm/tour/store" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tour-name" class=" form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="tour-name" name="name" placeholder="Tour Name" class="form-control">
                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Destination</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="idDestination" id="select" class="form-control">
                                <option selected disabled>Select Destination</option>
                                @foreach ($destinations as $value)
                                  <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Category</label>
                        </div>
                        <div class="col-12 col-md-9 input_fields_wrap">
                            <div class="input-group" style="margin-top:3px;">
                                <select name="idCategory[]" id="select" class="form-control">
                                    <option selected disabled>Select Category</option>
                                    @foreach ($categorys as $value)
                                      <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                                <span class="add_field_button input-group-addon danger"><i class="zmdi zmdi-plus"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="duration" class=" form-control-label">Duration</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="duration" name="duration" placeholder="Tour Duration" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="fakeprice" class=" form-control-label">Fake Price (Rp) - Optional</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="fakeprice" name="fakeprice" placeholder="Fake Price (Rp)" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="price" class=" form-control-label">Real Price (Rp)</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="price" name="price" placeholder="Price (Rp)" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="person" class=" form-control-label">Person</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="person" name="person" placeholder="person" class="form-control">
                            {{-- <small class="form-text text-muted">This is a help text</small> --}}
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="description" class=" form-control-label">Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="description" id="description" placeholder="Description" class="form-control summernote"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Facilities</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="facilities" id="facilities" placeholder="Facilities" class="form-control summernote"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Schedule</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="schedule" id="schedule" placeholder="Schedule" class="form-control summernote"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Things to Bring</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="bring" id="bring" placeholder="Things to Bring" class="form-control summernote"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Term & Condition</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="term" id="term" placeholder="Term & Condition" class="form-control summernote"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Feature Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-primary btn-embossed btn-file">
                                    <span class="fileinput-new"><i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Select image</span>
                                    <span class="fileinput-exists"><i class="fa fa-dot-circle-o"></i>&nbsp;&nbsp;Change</span>
                                    <input type="hidden"><input type="file" name="image" value=""></span>
                                    </span>
                                    <a href="#" class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput"><i class="fa fa-ban"></i>&nbsp;&nbsp;Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="_method" value="POST">
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-lg float-right">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

<script>
    $('.summernote').summernote({
        tabsize: 2,
        height: 150
      });
</script>
<script>
    $('.fileinput').fileinput()
</script>
<script>
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
          e.preventDefault();
          if(x < max_fields){ //max input box allowed
              x++; //text box increment
              $(wrapper).append('<div class="input-group" style="margin-top:3px;"><select name="idCategory[]" id="select" class="form-control"><option selected disabled>Select Category</option>@foreach ($categorys as $value)<option value="{{ $value->id }}">{{ $value->name }}</option>@endforeach</select><span class="remove_field input-group-addon danger"><i class="zmdi zmdi-block-alt"></i></span></div>'); //add input box
          }
      });

      $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
          e.preventDefault(); $(this).parent('div').remove(); x--;
      })
</script>
@endsection