@extends('admin.master')
@section('title', 'Category')
@section('body')
<div class="right_col" role="main">
      <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Category</h2>
              <a href="{{route('admin.add-category')}}" class="float-right"><i class="fa fa-plus"></i> Add Category</a>
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
                              <th>Category</th>
                              <th>Parent Category</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td><img src="demo.jpg"></td>
                              <td>Sumsung IdeaPad L340</td>
                              <td>Computer</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-group btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-group btn-danger"><i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td><img src="demo.jpg"></td>
                              <td>Samsung J-7</td>
                              <td>Mobile</td>
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