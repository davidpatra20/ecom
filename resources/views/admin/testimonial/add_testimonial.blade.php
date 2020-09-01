@extends('admin.master')
@section('title', 'Testimonial')
@section('body')
<div class="right_col" role="main">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>New Testimonial</h2>
        <a href="{{route('admin.testimonial')}}" class="float-right"><i class="fa fa-mail-reply-all "></i> Back</a>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <div class="row">
                        <div class="col-md-7">
                          
                          
                          <div class="item form-group">
                            <label class="col-form-label col-md-4 col-sm-4 label-align" for="first-name">Testimonial By<span class="required">*</span>
                          </label>
                          <div class="col-md-8 col-sm-3 ">
                            <input type="text" id="first-name" required="required" class="form-control ">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="col-form-label col-md-4 col-sm-4 label-align" for="first-name">Testimonial<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-3 ">
                          <textarea  class="form-control" style="height: 170px"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <label>
                        <img src="{{asset('public/admin_asset/images/imagesframe.png')}}" width="100" height="180" style="border:2px dashed #a8c3e4; border-radius: 5px;" class="img-circle profile_img" id="output_img">
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