
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include("admin.admincss")
  </head>
  <body>

  <div class="container-scroller">

    @include("admin.navbar")
        
      
            <div style="position: relative; top:60px; right:-500px; ">

        <form action="{{url('/update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div >
                <label  for="">Title</label>
            <input style="color:black;" type="text" name="title" value="{{$data->title}}" required placeholder="Write a title">

        </div>

        <div style="padding-top: 50px;">
                <label for="">Price</label>
            <input style="color:black;" type="number" name="price" value="{{$data->price}}"  required placeholder="price">

        </div>

        <div style="padding-top: 50px;">
                <label for="">Old mage</label>
          <img style="height: 200px;width:200px" src="/foodimage/{{$data->image}}" alt="">

        </div>


        <div style="padding-top: 50px;">
                <label for="">Image</label>
            <input type="file" name="image" required>

        </div>

        <div style="padding-top: 50px;">
                <label for="">Description</label>
            <input style="color:black;" type="text" name="description" value="{{$data->description}}" required placeholder="Write a description">

        </div>

        <div style="padding-top: 50px;">

            <input class="btn btn-success" type="submit" value="Update" style=" width:70px; ">    
        </div>

        </form>
        <div>

  </div>
    @include("admin.adminscript")
  </body>
</html>