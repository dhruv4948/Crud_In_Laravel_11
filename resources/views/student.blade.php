<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h3>Student Data</h3>
            <a href="{{route('open.newstudent')}}" class="btn btn-success btn-sm mb-3">Add User</a>
                <table  class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <!-- <th>Age</th> -->
                        <th>Email</th>
                        <!-- <th>Phone</th>
                        <th>Address</th> -->
                        <th>View Details</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                @foreach ($dt as $id => $key)
                    <tr>
                        <td><h6>{{$key->id}}</h6></td>
                        <td><h6>{{$key->name}}</h6></td>
                        <!-- <td><h6>{{$key->age}}</h6></td> -->
                        <td><h6>{{$key->email}}</h6></td>
                        <!-- <td><h6>{{$key->phone}}</h6></td>
                        <td><h6>{{$key->adress}}</h6></td> -->
                        <td> <a href="{{route('singleStudent',$key->id)}}" class="btn btn-primary btn-sm">View</a></td>
                        <td> <a href="{{route('delete.student',$key->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td> <a href="{{route('updatestudentdetails',$key->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>