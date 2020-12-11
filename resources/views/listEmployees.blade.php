@extends('layouts.app')

@section('content')
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
   
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<style>
@media (min-width: 768px){
.navbar-nav {
    float: right;
}
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          
<h1>Employee Details</h1>
<div id="message">
    </div>
<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Employee Code</th>
      <th scope="col">Employee Name</th>
      <th scope="col">DOJ</th>
      <th scope="col">Department</th>
      <th scope="col">Position</th>
      <th scope="col">Reporting to</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($employees as $key => $value)


<tr>
      <th scope="row">{{ $value->emp_code }}</th>
      <td>{{ $value->emp_name }}</td>
      <td>{{ $value->emp_doj }}</td>
      <td>{{ $value->emp_department }}</td>
       <td>{{ $value->emp_position }}</td>
      <td>{{ $value->emp_reporting_to }}</td>
     
<td>
     
                           <input type="checkbox" class="toggle-class" data-id="{{ $value->id }}" data-toggle="toggle" data-on="Approved"
                            data-off="Waiting for Approval" {{$value->emp_status==true ? 'checked' : ''}}>
                                       </td>

                                                 
                                                
    </tr>
@endforeach
    
    </tbody>
</table>

        </div>
    </div>
</div>
  <script>
  $(function() {
    $('.toggle-class').on('change', function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var employee_id = $(this).data('id');
       // alert(employee_id);  
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{route("changeStatus")}}',
            data: {'emp_status': status, 'id': employee_id},
            success: function(data){
                $('#message').html('<p class="alert alert-danger">'+data.success+'</p>')
              console.log(data.success)
            }
        });


    });
});
       
</script>

@endsection
