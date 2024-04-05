<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .form-container {
            background-color: #408080; /* Changed to the color #408040 with 80% opacity */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Adjusted width of the container */
        .container-custom {
            max-width: 800px; /* Increased maximum width */
        }

        /* Set text color for input content */
        .form-control {
            color: rgb(0, 0, 0); /* Set text color to white */
        }

        /* Set text color for input placeholders */
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5); /* Adjust placeholder text color */
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row justify-content-center">
                    <div class="col-lg-10"> <!-- Increased column width -->
                        <div class="form-container container-custom">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="named" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                                </div>
                                <div class="form-group">
                                    <label for="speciality">Speciality</label>
                                    <select class="form-control" id="speciality" name="speciality">
                                        <option value="skin">Skin</option>
                                        <option value="heart">Heart</option>
                                        <option value="eye">Eye</option>
                                        <option value="nose">Nose</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="doctor-image">Doctor Image</label>
                                    <input type="file" class="form-control-file" id="doctor-image" name="doctor-image">
                                </div>
                                <div class="form-group">
                                    <label for="room-number">Room Number</label>
                                    <input type="text" class="form-control" id="room" name="room" placeholder="Enter room number">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
