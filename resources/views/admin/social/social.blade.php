@extends('admin.master')
@section('title', 'Social')
@section('body')
<div class="right_col" role="main">

      <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Social</h2>
              <a href="{{route('admin.add-social')}}" class="float-right"><i class="fa fa-plus"></i> Add Social</a>
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
                              <th>Icon</th>
                              <th>Name</th>
                              <th>link</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td><i class="fa fa-facebook"></i></td>
                              <td>Facebook</td>
                              <td>www.facebook.com/dhirajmohapatra</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-group btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-group btn-danger"><i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td><i class="fa fa-youtube"></i></td>
                              <td>Youtube</td>
                              <td>www.youtube.com/dhirajmohapatra</td>
                              <td>
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