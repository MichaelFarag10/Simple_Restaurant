
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>

  <div class="container-scroller">



    <div  style="display: flex; justify-content: left; align-items: left; " >
        @include("admin.navbar")

        <div class="mt-5 p-4" style="flex-direction: column">
        <h3 style="color:#aaa;">Customer Orders</h3>
        <form action="{{url('search')}}" method="GET">
        @csrf
        <input type="text" name="search" style="color:blue;" id="">
        <input  class="btn btn-primary" type="submit" value="Search">

        </form>


        <div style="display: flex; justify-content: left; align-items: left; "  class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">

                        <th  >Name</th>
                        <th  >Phone</th>
                        <th  >Address</th>
                        <th  >Food Name</th>
                        <th  >Price</th>
                        <th  >Quantity</th>
                        <th  >Total Price</th>
                        <th  >Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $data)

                    <tr align="center">

                        <td>{{$data->name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->foodname}}</td>
                        <td>{{$data->price}}$</td>
                        <td>{{$data->quantity}}</td>
                        <td>{{$data->price * $data->quantity}}$</td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('delete_order',$data->id)}}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



    </div>
            </div>

  </div>
    @include("admin.adminscript")
  </body>
</html>
