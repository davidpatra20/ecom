@extends('admin.master')
@section('title', 'Newslatter')
@section('body')
<div class="right_col" role="main">

      <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Newslatter</h2>
              <a href="{{route('admin.send-newslatter')}}" class="float-right"><i class="fa fa-send"></i> Send Newslatter</a>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Email</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td width="30">08-07-2020</td>
                              <td>Sumsung IdeaPad L340</td>
                              <td width="30">
                                <a href="#" class="btn btn-sm btn-group btn-primary"><i class="fa fa-send"></i></a>
                                <a href="#" class="btn btn-sm btn-group btn-danger"><i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>08-07-2020</td>
                              <td>Samsung J-7</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-group btn-primary"><i class="fa fa-send"></i></a>
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