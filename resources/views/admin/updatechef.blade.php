
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
      <div class="container-scroller">
          @include("admin.navbar")

      <form action="{{url('/updatefoodchef',$data->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="col-md-10 mb-3"> 
            <label for="">New Name</label>
            <input  class="form-control" style="color:white;" type="text" name="name" value="{{$data->name}}" required >
        </div>

        <div class="col-md-10 mb-3">
            <label for="">New Speciality</label>
            <input  class="form-control" style="color:white;" type="text" name="speciality" value="{{$data->speciality}}" required >
        </div>

        <div class="col-md-10 mb-3">
            <label for="">Old Image</label>
           <img height="100px" width="100px" src="chefimage/{{$data->image}}" alt="{{$data->image}}">

        </div>


        <div class="col-md-10 mb-3">
            <label for="">New Image</label>
            <input   class="form-control"type="file" name="image">

        </div>
        <div>
            
            <input class="btn btn-primary"  type="submit"  value="Update">
        </div>
      </form>

  </div>
    @include("admin.adminscript")
  </body>
</html>