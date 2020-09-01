@extends('admin.master')
@section('title', 'Video')
@section('body')
<div class="right_col" role="main">
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Video Gallery</h2>
              <a href="{{route('admin.add-video')}}" class="float-right"><i class="fa fa-plus"></i> Add Video</a>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                  <div class="col-md-55">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="{{asset('public/admin_asset/images/img.jpg')}}" alt="image" />
                        <div class="mask">
                          <p>Your Text</p>
                          <div class="tools tools-bottom">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p>Snow and Ice Incoming for the South</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-55">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="{{asset('public/admin_asset/images/img.jpg')}}" alt="image" />
                        <div class="mask">
                          <p>Your Text</p>
                          <div class="tools tools-bottom">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p>Snow and Ice Incoming for the South</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-55">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="{{asset('public/admin_asset/images/img.jpg')}}" alt="image" />
                        <div class="mask">
                          <p>Your Text</p>
                          <div class="tools tools-bottom">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p>Snow and Ice Incoming for the South</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-55">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="{{asset('public/admin_asset/images/img.jpg')}}" alt="image" />
                        <div class="mask">
                          <p>Your Text</p>
                          <div class="tools tools-bottom">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p>Snow and Ice Incoming for the South</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-55">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="{{asset('public/admin_asset/images/img.jpg')}}" alt="image" />
                        <div class="mask">
                          <p>Your Text</p>
                          <div class="tools tools-bottom">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p>Snow and Ice Incoming for the South</p>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-55">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="{{asset('public/admin_asset/images/img.jpg')}}" alt="image" />
                        <div class="mask no-caption">
                          <div class="tools tools-bottom">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p><strong>Image Name</strong>
                        </p>
                        <p>Snow and Ice Incoming</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-55">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="{{asset('public/admin_asset/images/img.jpg')}}" alt="image" />
                        <div class="mask no-caption">
                          <div class="tools tools-bottom">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p><strong>Image Name</strong>
                        </p>
                        <p>Snow and Ice Incoming</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-55">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="{{asset('public/admin_asset/images/img.jpg')}}" alt="image" />
                        <div class="mask no-caption">
                          <div class="tools tools-bottom">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p><strong>Image Name</strong>
                        </p>
                        <p>Snow and Ice Incoming</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-55">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="{{asset('public/admin_asset/images/img.jpg')}}" alt="image" />
                        <div class="mask no-caption">
                          <div class="tools tools-bottom">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p><strong>Image Name</strong>
                        </p>
                        <p>Snow and Ice Incoming</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-55">
                    <div class="thumbnail">
                      <div class="image view view-first">
                        <img style="width: 100%; display: block;" src="{{asset('public/admin_asset/images/img.jpg')}}" alt="image" />
                        <div class="mask no-caption">
                          <div class="tools tools-bottom">
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="caption">
                        <p><strong>Image Name</strong>
                        </p>
                        <p>Snow and Ice Incoming</p>
                      </div>
                    </div>
                  </div>
                </div>  
            </div>
          </div>
        </div>
    </div>
</div>
@endsection