<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Truck Buddy Booking </title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/owl-carousel.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/date-picker.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!---Header Page-->
    <div class="header-2">
        <?php include_once('header.php');?>
    </div>
    <div class="content_area">
        <div class="container ">
        <div class="common-heading">
            <h3> Profile </h3>
            <p>TruckBuddy has emerged as the leading logistics solution provider in the country at a very competitive cost. Today,
                we are acclaimed as India's Trusted Online Platform for Intercity Logistics Solution. We aim at simplifying the
                complex working of the logistics services. With the help of the latest technology, innovative working plans, and
                team work etc </p>
        </div>
        </div>



        <section class="profile-area-main">
            <div class="container">
                <div class="nav-p-area profile-area">
                    <div class="row">

                        <div class="col-md-12 col-lg-12 col-12">

                            <div class="truck_buddy_nav">

                                <div class="nav nav-pills brd" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" data-toggle="pill" href="#profile" role="tab" aria-controls="v-pills-home" aria-selected="true"> <img src="./assets/images/user.png" alt=""> My Profile </a>
                                    <a class="nav-link" data-toggle="pill" href="#mybooking" role="tab" aria-controls="v-pills-messages" aria-selected="false"> <img src="./assets/images/my-booking.png" alt=""> My Bookings </a>
                                    <a class="nav-link" data-toggle="modal" data-target="#log-out" href="#logout" role="tab" aria-controls="v-pills-settings" aria-selected="false"> <span></span> <img src="./assets/images/log-out.png" alt=""> Log Out </a>
                                </div>
                            </div>

                            <div class="tab-content brd prf-botm">
                                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <section class="pay-form">

                                        <div class="container">
                                            <form action="">
                                                <div class="profile-area">

                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-12">
                                                            <div class="form-group">
                                                                <label> Name </label>
                                                                <input type="text" class="form-control" placeholder="" value="Kishan Kumar" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-12">
                                                            <div class="form-group">
                                                                <label> Email ID</label>
                                                                <input type="email" placeholder="" value="kishankumar.duplex@gmail.com" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-12">
                                                            <div class="form-group">
                                                                <label> Contact Number </label>
                                                                <input type="number" required class="form-control" value="9125651231" placeholder="" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onkeydown="if(this.value.length==10 &amp;&amp; event.keyCode!=8) return false;">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-lg-6 col-12">
                                                            <div class="form-group">
                                                                <label> Your Vehicle(not required) </label>
                                                                <input type="text" required class="form-control" value="Tata Ace" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-12">
                                                            <div class="form-group">
                                                                <label> State </label>
                                                                <select name="" class="form-control js-select2 border-form" style="width:100%" required>
                                                                    <option value=""> Select </option>
                                                                    <option value="" selected> Uttar Pradesh</option>
                                                                    <option value=""> Bihar </option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-12">
                                                            <div class="form-group">
                                                                <label> Zip Code </label>
                                                                <select name="" class="form-control js-select2" required>
                                                                    <option value=""> Select Zip Code </option>
                                                                    <option value="" selected> 226020 </option>
                                                                    <option value=""> 226021 </option>
                                                                    <option value=""> 226022 </option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 col-lg-12 col-12">
                                                            <div class="form-group">
                                                                <label> Address </label>
                                                                <textarea style="height: 135px;" name="" class="form-control select-control" placeholder="" cols="5" placeholder="" value="" required>D 74, First Floor, Sector-P, Aliganj, Lucknow, Uttar Pradesh 226020 </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="save-final">
                                                        <div class="row">
                                                            <div class=" col-12">
                                                                <button data-toggle="modal" data-target="#package-booking" href="#package-booking" type="submit" class="save-final-btn"> Save </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </section>

                                </div>

                                <div class="tab-pane fade" id="mybooking" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <section class="my-booking">

                                        <div class="booking-slide">

                                            <div class="booking-slider-area2 owl-theme  owl-control-center">

                                                <div class="item">
                                                    <div class="booking-area">
                                                        <div class="booking_head">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6 ">
                                                                    <div class="b-h-left">
                                                                        <img src="./assets/images/van1.webp" alt="">
                                                                        <h3>Rent Tata Ace 19ft </h3>
                                                                        <p>TATA DCM 19ft can load up to 900kg </p>
                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="es-fare">
                                                                        <h2>Estimated Fare</h2>
                                                                        <h3><span> ₹ </span> 7,634</h3>
                                                                        <h4>Lucknow- Faizabad </h4>
                                                                        <p>Starts at 02:22 PM, 06-02-2020</p>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="extimated_txt">

                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Estimated Distance </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 120KM </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Estimated Time </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 5 Hours, 19 Minuts </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Base Fare </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> ₹ 2000.00 </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Load Passing </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 9000kg </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Base Fare </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> ₹ 377.00 </h4>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="term-condition">

                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="name_distance"> Lucknow <span class="circle_tab"></span> </div>

                                                                </div>
                                                                <div class="col-4 pr-0 pl-0">
                                                                    <div class="bg-distance">

                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="name_distance "> <span class="circle_tab1"></span> <span class="name_distance1">  Faizabad </span>  </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="booking-area">
                                                        <div class="booking_head">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6 ">
                                                                    <div class="b-h-left">
                                                                        <img src="./assets/images/van1.webp" alt="">
                                                                        <h3>Rent Tata Ace 19ft </h3>
                                                                        <p>TATA DCM 19ft can load up to 900kg </p>
                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="es-fare">
                                                                        <h2>Estimated Fare</h2>
                                                                        <h3><span> ₹ </span> 7,634</h3>
                                                                        <h4>Lucknow- Faizabad </h4>
                                                                        <p>Starts at 02:22 PM, 06-02-2020</p>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="extimated_txt">

                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Estimated Distance </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 120KM </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Estimated Time </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 5 Hours, 19 Minuts </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Base Fare </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> ₹ 2000.00 </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Load Passing </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 9000kg </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Base Fare </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> ₹ 377.00 </h4>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="term-condition">

                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="name_distance"> Lucknow <span class="circle_tab"></span> </div>

                                                                </div>
                                                                <div class="col-4 pr-0 pl-0">
                                                                    <div class="bg-distance">

                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="name_distance "> <span class="circle_tab1"></span> <span class="name_distance1">  Faizabad </span>  </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="booking-area">
                                                        <div class="booking_head">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6 ">
                                                                    <div class="b-h-left">
                                                                        <img src="./assets/images/van1.webp" alt="">
                                                                        <h3>Rent Tata Ace 19ft </h3>
                                                                        <p>TATA DCM 19ft can load up to 900kg </p>
                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="es-fare">
                                                                        <h2>Estimated Fare</h2>
                                                                        <h3><span> ₹ </span> 7,634</h3>
                                                                        <h4>Lucknow- Faizabad </h4>
                                                                        <p>Starts at 02:22 PM, 06-02-2020</p>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="extimated_txt">

                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Estimated Distance </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 120KM </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Estimated Time </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 5 Hours, 19 Minuts </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Base Fare </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> ₹ 2000.00 </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Load Passing </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 9000kg </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Base Fare </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> ₹ 377.00 </h4>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="term-condition">

                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="name_distance"> Lucknow <span class="circle_tab"></span> </div>

                                                                </div>
                                                                <div class="col-4 pr-0 pl-0">
                                                                    <div class="bg-distance">

                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="name_distance "> <span class="circle_tab1"></span> <span class="name_distance1">  Faizabad </span>  </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="booking-area">
                                                        <div class="booking_head">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-6 ">
                                                                    <div class="b-h-left">
                                                                        <img src="./assets/images/van1.webp" alt="">
                                                                        <h3>Rent Tata Ace 19ft </h3>
                                                                        <p>TATA DCM 19ft can load up to 900kg </p>
                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-6 col-6">
                                                                    <div class="es-fare">
                                                                        <h2>Estimated Fare</h2>
                                                                        <h3><span> ₹ </span> 7,634</h3>
                                                                        <h4>Lucknow- Faizabad </h4>
                                                                        <p>Starts at 02:22 PM, 06-02-2020</p>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="extimated_txt">

                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Estimated Distance </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 120KM </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Estimated Time </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 5 Hours, 19 Minuts </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Base Fare </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> ₹ 2000.00 </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Load Passing </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> 9000kg </h4>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <h3> Base Fare </h3>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h4> ₹ 377.00 </h4>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="term-condition">

                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="name_distance"> Lucknow <span class="circle_tab"></span> </div>

                                                                </div>
                                                                <div class="col-4 pr-0 pl-0">
                                                                    <div class="bg-distance">

                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="name_distance "> <span class="circle_tab1"></span> <span class="name_distance1">  Faizabad </span>  </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </section>
                                </div>

                                <div class="tab-pane fade" id="logout" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

    </div>

    <div class="truck-logout">
        <div class="modal fade" id="log-out" tabindex="-1" role="dialog" aria-labelledby="log-out" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-md" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="log_h">
                            <h4 class="text-center"> Are you sure you want to log out ? </h5>
                  </div>
              </div>
              <div class="mdl-footer">
                <button type="button"  class="btn btn-secondary cancle no_bg" data-dismiss="modal">No</button>
                      <a href="index.php">  <button type="button" class="btn btn-primary confirm yes_bg">Yes</button></a>

              </div>
            </div>
          </div>
        </div>
      </div>
        <!---footer---->
       <?php include_once('footer.php'); ?>

            <script src="./assets/js/jQuery.js"></script>
            <script src="./assets/js/bt_poper.js"></script>
            <script src="./assets/js/bootstrap.js"></script>

            <script src="./assets/js/owl-carousel.js"></script>

            <script src="./assets/js/wow.js"></script>
            <script src="./assets/js/moment.js"></script>
            <script src="./assets/js/date-picker.js"></script>

            <!-- slick Carousel CDN -->
            <script src="./assets/js/custom.js"></script>

</body>

</html>