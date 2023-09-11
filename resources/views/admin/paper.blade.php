@extends('admin/layouts/main')
@section('main-section')
<!-- partial -->
{{print_r($departmentData)}}
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form class="forms-sample" method="post" action="{{url('admin/paper')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Paper Name</label>
                      <input type="text" class="form-control" name="paper_name" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Question</label>
                      <input type="text" name="question" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Option A</label>
                      <input type="text" name="answer_a" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Option A</label>
                      <input type="text" name="answer_b" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Option C</label>
                      <input type="text" name="answer_c" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Option D</label>
                      <input type="text" name="answer_d" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>                    
                    <h4 class="card-title">Select 2</h4>
                    <div class="form-group">
                        <label>Select the Anwers</label>
                        <select class="js-example-basic-single w-100" name="answer">
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        <!-- content-wrapper ends -->
       @endsection