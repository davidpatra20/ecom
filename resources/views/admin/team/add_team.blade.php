@extends('admin.master')
@section('title', 'Team')
@section('body')
<div class="right_col" role="main">

      <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>New Team</h2>
              <a href="{{route('admin.team')}}" class="float-right"><i class="fa fa-mail-reply-all "></i> Back</a>
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
                                             <label class="col-form-label col-md-4 col-sm-4 label-align" for="first-name">Title<span class="required">*</span>
                                             </label>
                                             <div class="col-md-8 col-sm-3 ">
                                               <input type="text" id="first-name" required="required" class="form-control ">
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
                                             <label for="middle-name" class="col-form-label col-md-4 col-sm-4 label-align">Description</label>
                                             <div class="col-md-8 col-sm-3 ">
                                               <textarea id="middle-name" class="form-control" style="height: 125px"></textarea>
                                             </div>
                                           </div> 
                        
                                      </div>
                                      <div class="col-md-5">
                                        <label>
                                          <img src="{{asset('public/admin_asset/images/imagesframe.png')}}" style="border:2px dashed #a8c3e4; border-radius: 5px;" height="225" id="output_img">
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
