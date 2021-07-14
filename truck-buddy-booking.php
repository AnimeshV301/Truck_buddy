<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Truck Buddy Booking </title>

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link href="./assets/css/owl-carousel.css" rel="stylesheet" type="text/css">

    <link href="./assets/css/animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets/css/date-picker.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!---Header Page-->
    <?php include_once('header.php');?>


    <div class="banner-block1">
        <img class="img-fluid" src="./assets/images/banner.webp" alt="">
    </div>

    <div class="center_search">

        <div class="container">
            <div class="form-center">
                <div class="row">


                    <div class="col-md-5 col-lg-5 col-12">

                        <div class="enquiry_form ">
                            <form action="">


                                <h3>Book A Truck Now</h3>
                                <p>Trust the most affordable and reliable truck service operator in your city </p>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Pickup address">
                                    <i class="fa fa-map-marker icon"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Dropoff address">
                                    <i class="fa fa-map-marker icon red_i"></i>
                                </div>
                                <div class="form-group">
                                    <div class="optionBox1">
                                        <div class="block">
                                            <div class="form-group ">
                                                <div class="add_drop">
                                                    <span> Add more dropping point </span>
                                                    <h6 class="add_more term-con1"> <i class="fa fa-plus"></i> </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="datepicker"
                                                placeholder="Select Date">
                                            <i class="fa fa-calendar icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="timepicker"
                                                placeholder="Select Time">
                                            <i class="fa fa-clock-o icon"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <select name="search_truck" class="form-control">
                                        <option value=""> Select type of goods to load</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <input type="Submit" class="form-control submit_control" value="Search a Truck">
                                </div>

                            </form>


                        </div>

                    </div>

                    <div class="col-md-7 col-lg-7 col-12 pr-0">
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
                                <form action="profile.php">
                                <div class="row">
                                    <div class="col-1">
                                        <input type="checkbox" class="form-control">
                                    </div>
                                    <div class="col-11">
                                        <h3>Terms and Conditions </h3>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="col-11">
                                        <p>Toll Parking, Airport charges extra if applicable</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-1">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="col-11">
                                        <p>Waiting charges are applicable when exceeding the given time</p>
                                    </div>

                                </div>
                                <div class="book_btn">
                                    <div class="form-group">
                                        <input type="Submit" class="form-control submit_control booknow"
                                            value="Book Now">
                                    </div>
                                </div>
                            </form>



                            </div>





                        </div>


                    </div>


                </div>
            </div>
        </div>


    </div>

    <div class="extra-space">

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