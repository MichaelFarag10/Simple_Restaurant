<!DOCTYPE html>
<html lang="en">

    <head>
      <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{url('/')}}" class="logo">
                            <img src="assets/images/klassy-logo.png" >
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                        <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>

                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li   class="scroll-to-section">
                            @auth
                            <a href="{{url('/showcart',Auth::user()->id)}}">
                            Cart[{{$count}}]
                            </a>
                            @endauth

                            @guest
                            Cart[0]
                            @endguest

                        </a></li>

                            <li>
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                       <li>
                                           <x-app-layout>

                                            </x-app-layout>
                                       </li>
                                    @else
                                       <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                        @if (Route::has('register'))
                                           <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </li>

                        </ul>
                        <a class='menu-trigger'>
                            <!-- <span>Menu</span> -->
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="top">



        <div style="display: flex; justify-content: center; align-items: center; " class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>

                        <th >Food Name</th>
                        <th >Price</th>
                        <th >Quantity</th>
                        <th >Action</th>


                    </tr>
                </thead>

                <tbody >
                    <form action="{{url('orderconfirm')}}" method="POST">
                        @csrf
                        @foreach($max['data'] as $data)

                        <tr>

                            <td  >
                            <input type="text" style="color:black;" name="foodname[]" value="{{$data->title}}" hidden>
                            {{$data->title}}
                            </td>

                            <td >
                            <input type="text" style="color:black;" name="price[]" value="{{$data->price}}" hidden>
                            ${{$data->price}}
                         </td>
                            <td  >
                            <input type="text" style="color:black;" name="quantity[]" value="{{$data->quantity}}" hidden>
                            {{$data->quantity}}
                              </td>
                              <input type="hidden" name="food_id[]" value="{{$data->id}}">



                              @endforeach
                              @foreach($max['data2'] as $data2)




                              <td  style="display: flex; justify-content: center; align-items: center;"><a class="btn btn-warning" onclick="return confirm('Are you sure')"  href="{{url('/remove',$data2->id)}}">Remove</a></td>


                              @endforeach



                    </tr>




                </tbody>
            </table>
        </div>











    @if($count == 0)
        <div style="text-align: center;" class="mt-5">
            <span class="alert alert-danger">Your have no order yet</span>
        </div>
        @else
    <div align="center" style="padding: 10px;">
    <button class="btn btn-primary"   style="color:#aaa;" type="button" id="order">Order Now</button>

    </div>
    @endif
    <div id="appear" align="center" style="padding: 30px; display:none;">

    <div style="padding:10px;">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Name" required>
    </div>

    <div style="padding:10px;">
            <label for="">Phone</label>
            <input type="number" name="phone" placeholder="Phone" autocomplete="none" required>
    </div>

    <div style="padding:10px;">
            <label for="">Address</label>
            <input type="text" name="address" placeholder="Address" required>
    </div>

    <div style="padding:10px;">
            <input class="btn btn-success" type="submit" style="color:#aaa;" value="Order Confirm">

             <button type="button" id="close"  style="color:#aaa;" class="btn btn-warning">Close</button>
        </div>

</div>
</form>



    </div>
    <script type="text/javascript">

        let btn = document.getElementById('order');
        let frm = document.getElementById('appear');
        let col = document.getElementById('close');
        btn.onclick = function(){
            if(frm.style.display == 'block'){

                frm.style.display = 'none';
            }else{
                frm.style.display = 'block';
            }
        }
        col.onclick = function(){
            frm.style.display = 'none';
        }


      /*   $("#order").click(
            function(){
                $("#appear").show();
            }
        );

        $('#close').click(
            function(){
                $("#appear").hide();
            }
        ); */

    </script>
    <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);

        });
    });

</script>
</body>
</html>
