
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>

  <div class="container-scroller">




    <div style="display: flex; justify-content: top; align-items: top;" class="table-responsive">
        @include("admin.navbar")
        <table  class="table table-bordered p-4 mt-5" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>

                    <th style="padding: 30px;">Name</th>
                    <th style="padding: 30px;">Phone</th>
                    <th style="padding: 30px;">Guest</th>
                    <th style="padding: 30px;">Message</th>
                    <th style="padding: 30px;">Time</th>
                    <th style="padding: 30px;">Date</th>
                </tr>
            </thead>

            <tbody>
                <tr align="center">
                @foreach($data as $data)


                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->guest}}</td>
                    <td>{{$data->message}}</td>
                    <td>{{$data->time}}</td>
                    <td>{{$data->date}}</td>

                @endforeach
            </tr>
            </tbody>
        </table>
    </div>




  </div>
    @include("admin.adminscript")
  </body>
</html>
