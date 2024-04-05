<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Information</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include other necessary CSS files -->
    @include('admin.css')
    <style>
        body {
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }
        .table-responsive {
            overflow-x: auto; /* Allow horizontal scroll if needed */
        }
        .center-table {
            margin-top: 50px; /* Adjust top margin as needed */
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')
        <div class="container">
            <div class="table-responsive center-table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Speciality</th>
                            <th scope="col">Room</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $doctor)
                            <tr>
                                <td>{{$doctor->named}}</td>
                                <td>{{$doctor->phone}}</td>
                                <td>{{$doctor->speciality}}</td>
                                <td>{{$doctor->room}}</td>
                                <td><img src="doctorimage/{{$doctor->image}}" alt="" class="img-fluid"></td>
                                <td>
                                    <a onclick="confirm('Are you sure?')" class="btn btn-danger btn-sm" href="{{url('deletedoctor',$doctor->id)}}">Delete</a>
                                    <a class="btn btn-primary btn-sm" href="{{url('updatedoctor',$doctor->id)}}">Update</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Include necessary script files -->
    @include('admin.script')
</body>
</html>
