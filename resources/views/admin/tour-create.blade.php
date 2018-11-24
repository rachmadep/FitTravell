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
                            <select name="" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Category</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
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
                            <textarea name="description" id="description" placeholder="Content..." class="form-control summernote"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Facilities</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="facilities" id="facilities" placeholder="Content..." class="form-control summernote"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Schedule</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="schedule" id="schedule" placeholder="Content..." class="form-control summernote"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Things to Bring</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="bring" id="bring" placeholder="Content..." class="form-control summernote"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Term & Condition</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="term" id="term" placeholder="Content..." class="form-control summernote"></textarea>
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
                                    <span class="fileinput-new"><span class="fui-image"></span>&nbsp;&nbsp;Select image</span>
                                    <span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;Change</span>
                                    <input type="file" name="...">
                                    </span>
                                    <a href="#" class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput"><span class="fui-trash"></span>&nbsp;&nbsp;Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="_method" value="POST">
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
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
@endsection