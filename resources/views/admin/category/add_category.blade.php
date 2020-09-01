@extends('admin.master')
@section('title', 'Category')
@section('body')
<div class="right_col" role="main">
  
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>New Category</h2>
        <a href="{{route('admin.category')}}" class="float-right"><i class="fa fa-mail-reply-all "></i> Back</a>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <form id="demo-form2" class="form-horizontal form-label-left" id="demo-form" data-parsley-validate="">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="row">
                        <div class="col-md-7">
                          
                          <div class="item form-group">
                            <label class="col-form-label col-md-4 col-sm-4 label-align" for="first-name">Name <span class="required">*</span>
                          </label>
                          <div class="col-md-8 col-sm-3 ">
                            <input type="text" id="first-name" required="" class="form-control ">
                          </div>
                        </div>
                        
                        <div class="item form-group">
                          <label class="col-form-label col-md-4 col-sm-3 label-align" for="last-name">Category <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-3 ">
                          <select class="form-control" name="">
                            <option value="0">Select category</option>
                            <option value="0">Computer</option>
                            <option value="0">Mobile</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-4 col-sm-4 label-align">Icon</label>
                        <div class="col-md-8 col-sm-3 ">
                          <div class="input-group">
                            <span class="input-group-prepend">
                              <button id="target" class="btn btn-secondary" data-icon="fas fa-map-marker-alt" role="iconpicker" id=target></button>
                            </span>
                            <input type="text"  class="form-control icon" value="My marker">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <label>
                        <img src="{{asset('public/admin_asset/images/imagesframe.png')}}" width="150" style="border:2px dashed #a8c3e4; border-radius: 5px;" id="output_img">
                        <input type="file" name="image" onchange="loadFile(event)" hidden="hidden">
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-4">
              <button class="btn btn-primary" type="button"><i class="fa fa-times"></i> Cancel</button>
              <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection
@push('cssfile')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/css/bootstrap-iconpicker.min.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
@endpush
@push('jsfile')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker-iconset-all.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.bundle.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
on('change', function(e){
$('#target').on('change', function(e) {
console.log(e.icon);
});
})
});
</script>
@endpush