    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div  class="col-lg-12 col-sm-12 col-md-12">
                <div class="owl-menu-item owl-carousel">

                    @foreach($data as $food)

                    <form action="{{url('/addcart',$food->id)}}" method="POST">
                        @csrf
                    <div class="item">
                        <div  style="background-image:url('/foodimage/{{$food->image}}'); background-repeat:no-repeat; background-size: cover; background-position-x: center " class='card w-100 h-100 '>
                            <div class="price"><h6>{{$food->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$food->title}}</h1>
                              <p class='description'>{{$food->description}}</p>
                              <div class="main-text-button">
                              </div>
                            </div>
                        </div>
                        <div style="display: flex;justify-content: center; align-items: center;">

                        <input style="width: 100%;" class="form-control" type="number" name="quantity" min="1" style="width: 80px; color:black" >

                        <input style="color: black;" class="btn btn-danger" type="submit" value="Add Cart" >
                        </div>
                    </div>
                    </form>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
