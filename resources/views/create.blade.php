@extends('layouts.app')

@section('content')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          
<h1>Create Employee Details</h1>
<div id="message">
  @if(count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
@if(\Session::has('success'))
<div class="alert alert-success">
<p>{{Session::get('success') }}</p>
</div>
@endif
    </div>
  <div class="col-md-6">
    <form method="POST" action="{{url('Employees')}}">

        {{ csrf_field() }}

<div class="form-group">
    <label for="emp_code">Emp Code</label>
    <input type="text" class="form-control" id="emp_code" name="emp_code" placeholder="Emp Code" required="required">
  </div>

     <div class="form-group">
    <label for="emp_name">Name</label>
    <input type="text" class="form-control" id="emp_name" name="emp_name" placeholder="Name" required="required">
  </div>

 <div class="form-group">
    <label for="emp_doj">DOJ</label>
    <input type="text" class="form-control" id="emp_doj" name="emp_doj" placeholder="YYYY-MM-DD"  readonly="readonly" required="required">
  </div>

  <div class="form-group">
    <label for="emp_department">Department</label>
    <input type="text" class="form-control" id="emp_department" name="emp_department" placeholder="Department" >
  </div>


  <div class="form-group">
    <label for="emp_position">Position</label>
    <input type="text" class="form-control" id="emp_position" name="emp_position" placeholder="Position" >
  </div>
  <div class="form-group">
    <label for="emp_reporting_to">Reporting To</label>
    <input type="text" class="form-control" id="emp_reporting_to" name="emp_reporting_to" placeholder="Reporting To" >
  </div>
 

      <div>

            <input type="submit" value="Save">

      </div>

    </form>  
  </div>

        </div>
    </div>
</div>
 <script>
    $(document).ready(function(){
      var date_input=$('input[name="emp_doj"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

@endsection
