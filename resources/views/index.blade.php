<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">


</head>

<body>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-6">

                <div class="text-center mb-3 p-3 bg-info text-white card mt-5">
                    <h3>Employee Data</h3>
                </div>
                <a href="{{ route('create') }}" class="btn btn-success btn-sm mb-3">Add New Data</a>
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>
                            Sr No.
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Age
                        </th>
                        <th>City</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                        
                     
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->age}}</td>
                            <td>{{$employee->city}}</td>
                            <td>
                                <div class="d-block p-3">
                                <a href="{{ route('edit',$employee->id)}}" class="btn btn-warning btn-sm mb-2">Update</a>
                                <a href="{{ route('delete',$employee->id)}}" class="btn btn-danger btn-sm ">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-4">
                    {{$employees->links()}}
                    
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">

    </div>
    <!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif

</body>

</html>