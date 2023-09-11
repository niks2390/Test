@extends('admin/layouts/main')
@section('main-section')
<!-- partial -->
    <div class="main-panel">  
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Default form</h4>
                        <p class="card-description">
                            Basic form layout
                        </p>
                            <form class="forms-sample" method="post" action="{{$url}}">
                                @csrf
                                <!--  -->
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Department Name</label>
                                    <input type="text" class="form-control" name="department" id="exampleInputUsername1" placeholder="Department here" value="{{{isset($departmentRow->department) ? $departmentRow->department : ''}}}">
                                    
                                    <span class="text-danger">@error('department')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Hoverable Table</h4>
                  <p class="card-description">
                    Add class <code>.table-hover</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Department Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($departmentData as $department)
                            <tr>
                            <td>{{$department->department}}</td>
                            <td><a href="{{route('department.edit',['id'=>$department->department_id])}}"><span class="badge badge-success">Edit</span></a></td>
                            <td><a href="{{route('department.delete',['id'=>$department->department_id])}}"><span class="badge badge-warning">Delete</span></a>  </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
            </div>
        </div>
</div>
</div>

            

        <!-- content-wrapper ends -->
       @endsection