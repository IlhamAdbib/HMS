<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        label{
            width: 200px;
           

        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        <!-- partial -->

        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-mismiss="alert">
                    x
                </button>
                {{session()->get('message')}}
            </div>
            @endif
            <div class="container" align="center" style="padding: 100px;">
                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                <div style="padding: 15px">
                    <label for="">Doctor Name</label>
                    <input type="text" style="color: black" name="name" value="{{$data->name}}">y
                </div>
                <div style="padding: 15px">
                    <label for="">Phone</label>
                    <input type="number" style="color: black" name="phone" value="{{$data->phone}}">y
                </div>
                <div style="padding: 15px">
                    <label for="">speciality</label>
                    <input type="text" style="color: black" name="speciality" value="{{$data->speciality}}">y
                </div>
                <div style="padding: 15px">
                    <label for="">Room</label>
                    <input type="text" style="color: black" name="room" value="{{$data->room}}">y
                </div>
                <div style="padding: 15px">
                    <label for="">Image</label>
                    <img src="doctorimage/{{$data->image}}" alt="">
                </div>
                <div style="padding: 15px">
                    <label for="Choose A new Image"></label>
                    <input type="file" name="file">
                </div>
                <div style="padding: 15px">
                    <input type="submit" class="btn btn-primary">
                </div>
                </form>

            </div>
        </div>
        <!-- partial -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
