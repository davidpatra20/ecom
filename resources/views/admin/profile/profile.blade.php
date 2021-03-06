@extends('admin.master')
@section('title', 'Profile')
@section('body')
<div class="right_col" role="main">

      <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Profile Setting</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="item form-group">
                        <label class="col-form-label col-md-4 col-sm-4 label-align" for="first-name">Name<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 ">
                          <input type="text" id="first-name" required="required" class="form-control ">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-4 col-sm-4 label-align" for="first-name">Username<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 ">
                          <input type="text" id="first-name" required="required" class="form-control ">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-4 col-sm-4 label-align" for="first-name">Email<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 ">
                          <input type="text" id="first-name" required="required" class="form-control ">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-4">
                          <button class="btn btn-primary" type="button"><i class="fa fa-times"></i> Cancel</button>
                          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Update Profile</button>
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
