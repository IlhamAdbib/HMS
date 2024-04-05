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
        .table {
            background-color: transparent !important; /* Remove background color for the table */
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        <!-- partial -->
        
            @include('admin.navbar')
            <!-- partial -->
            
                    <div class="container">
                        <div class="table-responsive center-table">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Doctor Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($data->isEmpty())
                                        <tr>
                                            <td colspan="8" class="no-appointments">No appointments found</td>
                                        </tr>
                                    @else
                                        @foreach($data as $appoint)
                                            <tr>
                                                <td>{{$appoint->name}}</td>
                                                <td>{{$appoint->email}}</td>
                                                <td>{{$appoint->phone}}</td>
                                                <td>{{$appoint->doctor}}</td>
                                                <td>{{$appoint->date}}</td>
                                                <td>{{$appoint->message}}</td>
                                                <td>{{$appoint->status}}</td>
                                                <td class="action-buttons">
                                                    <a class="btn btn-success btn-sm" href="{{url('approved',$appoint->id)}}">Approve</a>
                                                    <a class="btn btn-danger btn-sm" href="{{url('canceled',$appoint->id)}}">Cancel</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                
            
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
