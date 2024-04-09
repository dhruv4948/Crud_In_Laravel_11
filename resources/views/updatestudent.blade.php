<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>Update Student Detail</h1>
            <form action="{{route('update.student',$data->id)}}" method="post">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" value="{{$data->name}}" class="form-control" name="studentname">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"value="{{$data->email}}" class="form-control" name="studentemail">
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" value="{{$data->age}}" class="form-control" name="studentage">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" value="{{$data->phone}}" class="form-control" name="studentphone">
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" value="{{$data->adress}}" class="form-control" name="studentaddress">
                </div>

    
                <div class="mb-3">
                    <label class="form-label">City</label>
                    <input type="text" value="{{$data->city}}" class="form-control" name="studentcity">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" value="{{$data->password}}" class="form-control" name="studentpassword">
                </div>

                <button type="submit" class="btn btn-primary"> Update</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>