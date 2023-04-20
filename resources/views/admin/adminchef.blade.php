<!DOCTYPE html>
<html lang="en">

<head>
  @include("admin.admincss")
</head>

<body>
  <div style="display: flex;justify-content: top;align-items: top" class="container-scroller" >
    @include("admin.navbar")

    <div  class="container m-5 p-4" >

      <form action="{{url('/uploadchef')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-10 mb-3">
          <label for="">Name</label>
          <input class="form-control"  type="text" name="name" id="" required placeholder="Enter Name">
        </div>

        <div class="col-md-10 mb-3">
          <label for="">Speciality</label>
          <input class="form-control"  type="text" name="speciality" id="" required placeholder="Enter the speciality">
        </div>

        <div class="col-md-10 mb-3">
          <label for="">Image</label>
          <input class="form-control" type="file" name="image" id="" required>
          <input style="width: 25%;" class="btn btn-primary mt-4" type="submit" value="Add">
        </div>




      </form>
    </div>



  </div>
  @include("admin.adminscript")
</body>

</html>
