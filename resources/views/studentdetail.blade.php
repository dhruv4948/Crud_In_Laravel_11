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

                <table  class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                    @foreach ($singledt as $key => $value )
                    <tr>
                        <td><h6>{{$value->id}}</h6></td>
                        <td><h6>{{$value->name}}</h6></td>
                        <td><h6>{{$value->age}}</h6></td>
                        <td><h6>{{$value->email}}</h6></td>
                        <td><h6>{{$value->phone}}</h6></td>
                        <td><h6>{{$value->adress}}</h6></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>

