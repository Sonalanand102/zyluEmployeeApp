
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  </head>
  <body>
    <h1 style="display:none;">{{$i=1}}</h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 ">
                <div class="add_employee_btn text-center mb-3">
                  <a href="{{'/addEmployee'}}"><button class="btn btn-primary">Add Employees</button></a>
                </div>
                <table class="table table-success text-center">
                    <thead>
                      <tr>
                        <th scope="col">S.No.</th>
                        <th scope="col">Employee Name</th>
                        <th scope="col">Service Years</th>
                        <th scope="col">Active Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody >
                      
                        @foreach ($employees as $employee)
                         <tr>
                            
                            <th scope="row">{{$i++}}</th>
                            <td>{{$employee['employee_name']}}</td>
                            <td>{{$employee['service_years']}}</td>
                            <td> @if ($employee['service_years'] > 5 && $employee['active_status'] == 1) 
                                    <i  style="color:green;" class="far fa-check-circle"></i>
                                @else
                                    <i style="color:red;" class="far fa-times-circle"></i>
                                @endif
                            </td>
                            <td ><a href={{'editEmployee/'.$employee['id']}} class="btn btn_edit_employee btn-success px-4">Edit</a></td>
                            <td ><a href={{'deleteEmployee/'.$employee['id']}} class="btn btn_delete_employee btn-danger px-4">Delete</a></td>
                          </tr>
                        @endforeach
                      
                      {{-- <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr> --}}
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  </body>
</html>