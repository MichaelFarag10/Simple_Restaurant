
<!DOCTYPE html>
<html lang="en">
    <head>
        @include("admin.admincss")

    </head>
    <body>

        <div class="container-scroller">


      <div >


  <div  style="display: flex;justify-content: left;align-items: left; " >
    @include("admin.navbar")

    <div class="m-5 p-4" style="display: flex;flex-direction: column;">

    <form action="{{url('/uploadfood')}}" class="form"   method="POST" enctype="multipart/form-data">
            @csrf
            <div >
                <label   for="">Title</label>
            <input  class="form-control" style="color:black;" type="text" name="title" id="" required placeholder="Write a title">

        </div>

        <div style="padding-top: 10px;">
                <label  for="">Price</label>
            <input  class="form-control" style="color:black;" type="number" name="price" id="" required placeholder="price">

        </div>

        <div style="padding-top: 10px;">
                <label for="">Description</label>
            <input  class="form-control" style="color:black;" type="text" name="description" id="" required placeholder="Write a description">

        </div>

        <div style="padding-top: 10px;">
                <label  for="">Image</label>
            <input  class="form-control" type="file" name="image" id="" required>

        </div>

        <div style="padding-top: 10px;">

            <input  class="btn btn-primary" type="submit" value="Save" style=" width:70px;">
        </div>

        </form>





        <div  class="table-responsive mt-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr >
                        <th >Name</th>
                        <th >Price</th>
                        <th >Description</th>
                        <th >Image</th>
                        <th >Delete</th>
                        <th >Update</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $data)
                    <tr align="center"   style=" margin:20px">
                        <td >{{$data->title}}</td>
                        <td >{{$data->price}}</td>
                        <td >{{$data->description}}</td>
                        <td ><img  style="height:100px; width:100px;" src="/foodimage/{{$data->image}}" alt="{{$data->image}}"></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('/deletemenu',$data->id)}}">Delete</a> </td>
                        <td><a class="btn btn-primary" href="{{url('/updateview',$data->id)}}">Update </a> </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
        </div>




    </div>
    </div>
    @include("admin.adminscript")
  </body>
</html>
