@extends('admin.master')
@section('title', 'Slider')
@section('body')
<div class="right_col" role="main">

      <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Slider</h2>
              <a href="{{route('admin.add-slider')}}" class="float-right"><i class="fa fa-plus"></i> Add Slider</a>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>No#</th>
                              <th>Image</th>
                              <th>Product</th>
                              <th>Category</th>
                              <th>Status</th>
                              <th>Description</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td><img src="demo.jpg"></td>
                              <td>Sumsung IdeaPad L340</td>
                              <td>Computer</td>
                              <td><span class="badge badge-success">Active</span></td>
                              <td>This is some Description</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-group btn-info"><i class="fa fa-info"></i></a>
                                <a href="#" class="btn btn-sm btn-group btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-group btn-danger"><i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td><img src="demo.jpg"></td>
                              <td>Samsung J-7</td>
                              <td>Mobile</td>
                              <td><span class="badge badge-danger">Disabled</span></td>
                              <td>This is some Description</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-group btn-info"><i class="fa fa-info"></i></a>
                                <a href="#" class="btn btn-sm btn-group btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-group btn-danger"><i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
    </div>

@endsection