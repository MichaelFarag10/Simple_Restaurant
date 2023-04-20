
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
      <div class="container-scroller">



          <div style="display: flex; justify-content: top; align-items: top;" class="table-responsive">
            @include("admin.navbar")
            <table class="table table-bordered p-4 mt-5" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>

                        <th scope="col" >Name</th>
                        <th scope="col" >Speciality</th>
                        <th scope="col" >Image</th>
                        <th scope="col" >Update</th>
                        <th scope="col" >Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $data)

                        <tr>

                             <td>{{$data->name}}</td>
                            <td>{{$data->speciality}}</td>
                            <td><img  width="50px" src="/chefimage/{{$data->image}}" alt="{{$data->image}}"></td>
                            <td><a class="btn btn-success" href="{{url('updatechef',$data->id)}}">Update</a></td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('/deletechef',$data->id)}}">Delete</a></td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>








  </div>
    @include("admin.adminscript")
  </body>
</html>
