
<!DOCTYPE html>
<html lang="en">
  <head>
      @include("admin.admincss")
    </head>
    <body>
      <div class="container-scroller">



        <div style=" display: flex; justify-content: center; align-items: center; ">
            @include("admin.navbar")

            <div style="display: flex; justify-content: center; align-items: center;margin-bottom:30%; " class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $data)
                        <tr align="center">
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            @if($data->usertype=="0")
                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want delete this user?!')" href="{{url('/deleteuser',$data->id)}}"> Delete </a></td>
                            @else
                            <td><span style="color:red"> Not Allowed </span></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>


      </div>
    @include("admin.adminscript")
  </body>
</html>
