/* Slider Section  */
$(document).ready(function() {
//   $("#home_banner").owlCarousel({
//       autoPlay: 4000, 	 
//       items: 1,
//       itemsDesktop: [1199, 1],
//       itemsDesktopSmall: [979, 1],
//       navigation: true,
//       rewindNav: true,
//       pagination: true,
//       singleItem: true,
//       loop: true,

//   });

  $(window).bind('scroll', function () {
      if ($(window).scrollTop() > 100) {
          $('.main').addClass('fixed-top1 fadeInDown');
      } else {
          $('.main').removeClass('fixed-top1 fadeInDown');
      }
  });


$('.key-chain-slider-area').owlCarousel({

    navigation: true,
    pagination: false,
    loop: true,
    margin: 10,
    nav: false,
    navText: ['<span class="fas fa-chevron-left fa fa-angle-left fa-3x"></span>', '<span class="fas fa-chevron-left fa fa-angle-right fa-3x"></span>'],
    autoplay : false,
    autoPlay : 3000,
    slideSpeed: 2000,
    autoPlayTimeout: 2000,
    autoPlayHoverPause: false,
    rewindNav: true,
    items: 4,
    itemsMobile: [479, 1],
    responsive: {
        0: {
            items: 2,
            loop:true
            
        },
        600: {
            items: 3,
            loop:true
        },
        1000: {
            items: 4,
            loop:true
        }
    }
})




$('.key-chain-slider-area1').owlCarousel({

    navigation: true,
    pagination: false,
    loop: true,
    margin: 10,
    nav: false,
    navText: ['<span class="fas fa-chevron-left fa fa-angle-left fa-3x"></span>', '<span class="fas fa-chevron-left fa fa-angle-right fa-3x"></span>'],
    autoplay : false,
    autoPlay : 3000,
    slideSpeed: 2000,
    autoPlayTimeout: 2000,
    autoPlayHoverPause: false,
    rewindNav: true,
    items: 2.3,
    itemsMobile: [479, 1.3],
    responsive: {
        0: {
            items: 2,
            loop:true
            
        },
        600: {
            items: 3,
            loop:true
        },
        1000: {
            items: 1,
            loop:true
        }
    }
})




$('.booking-slider-area2').owlCarousel({

    navigation: true,
    pagination: false,
    loop: true,
    margin: 10,
    nav: false,
    navText: ['<span class="fas fa-chevron-left fa fa-angle-left fa-3x"></span>', '<span class="fas fa-chevron-left fa fa-angle-right fa-3x"></span>'],
    autoplay : false,
    autoPlay : 3000,
    slideSpeed: 2000,
    autoPlayTimeout: 2000,
    autoPlayHoverPause: false,
    rewindNav: true,
    items: 2.85,
    itemsMobile: [479, 1],
    responsive: {
        0: {
            items: 2,
            loop:true
            
        },
        600: {
            items: 3,
            loop:true
        },
        1000: {
            items: 1,
            loop:true
        }
    }
})









$('.country_slider-area').owlCarousel({

    navigation: true,
    pagination: false,
    loop: true,
    margin: 10,
    nav: false,
    navText: ['<span class="fas fa-chevron-left fa fa-angle-left fa-3x"></span>', '<span class="fas fa-chevron-left fa fa-angle-right fa-3x"></span>'],
    autoplay : false,
    autoPlay : 3000,
    slideSpeed: 2000,
    autoPlayTimeout: 2000,
    autoPlayHoverPause: false,
    rewindNav: true,
    items: 2,
    itemsMobile: [479, 1],
    responsive: {
        0: {
            items: 2,
            loop:true
            
        },
        600: {
            items: 3,
            loop:true
        },
        1000: {
            items: 4,
            loop:true
        }
    }
})






$('.term-con1').click(function () {
    $('.block:last').after(`
    <div class="form-group ">
    <div class="block">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Dropoff address">
        <i class="fa fa-map-marker icon red_i"></i>
    </div>
  
 <div class="close_txt">
        <span class="add_more1"> <i class="fa fa-close"></i> </span>
    </div>
</div> 
</div>

`);

  });
 
  $('.optionBox1').on('click', '.close_txt', function () {
    $(this).parent().remove();
  });




$('.testi_slider-area').owlCarousel({

    navigation: true,
    pagination: false,
    loop: true,
    margin: 10,
    nav: false,
    navText: ['<span class="fas fa-chevron-left fa fa-angle-left fa-3x"></span>', '<span class="fas fa-chevron-left fa fa-angle-right fa-3x"></span>'],
    autoPlay: true,
    slideSpeed: 1000,
    autoPlayTimeout: 1000,
    autoPlayHoverPause: false,
    items: 1,
    itemsMobile: [479, 1],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})

$('.client-slider').owlCarousel({

    navigation: true,
    pagination: false,
    loop: true,
    margin: 10,
    nav: false,
    navText: ['<span class="fas fa-chevron-left fa fa-angle-left fa-3x"></span>', '<span class="fas fa-chevron-left fa fa-angle-right fa-3x"></span>'],
    autoPlay: true,
    slideSpeed: 1000,
    autoPlayTimeout: 1000,
    autoPlayHoverPause: false,
    items: 6,
    itemsMobile: [479, 1],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})


var counter=0;
$(window).scroll(function () {
    if ($(window).scrollTop() == $(document).height() - $(window).height() && counter < 2) {
        appendData();
    }
});
function appendData() {
    var html = '';
    for (i = 0; i < 30; i++) {
        html += '  <div class="row">  <div class="col-md-4 col-lg-4 col-12"> <div class="service_area_sub"> <div class="service_img"> <img src="./assets/images/services2.png">  </div>    <div class="service_txt">     <h3>Spacious Workstations</h3>     <p>Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>   </div>    </div>  </div> <div class="col-md-4 col-lg-4 col-12"> <div class="service_area_sub"> <div class="service_img"> <img src="./assets/images/services3.png">  </div>    <div class="service_txt">     <h3> Dedicated High speed Leased line  </h3>     <p>Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>   </div>    </div>  </div> <div class="col-md-4 col-lg-4 col-12"> <div class="service_area_sub"> <div class="service_img"> <img src="./assets/images/services4.png">  </div>    <div class="service_txt">     <h3> Xerox/Printing/Photocopy machines</h3>     <p>Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>   </div>    </div>  </div> </div> ';
    }
    $('#myScroll').append(html);
    counter++;
    
    if(counter==2)
    $('#myScroll').append(' <div class="view_more"><button> Load More </button></div>');
}

$(function() {
    moment().subtract(3, "days"), $("#datetimepicker").bootstrapMaterialDatePicker({
        format: "MM/DD/YYYY HH:mm",
        shortTime: !1,
        date: !0,
        time: !0,
        monthPicker: !1,
        year: !0,
        clearButton: !1,
        nowButton: !1,
        switchOnClick: !0,
        minDate: moment(),
        cancelText: "Cancel"
    }), $("#datetimepicker-fr").bootstrapMaterialDatePicker({
        format: "DD/MM/YYYY HH:mm",
        shortTime: !1,
        clearButton: !1,
        nowButton: !1,
        cancelText: "annuler",
        nowText: "maintenant",
        lang: "fr",
        weekStart: 1
    }), $("#timepicker").bootstrapMaterialDatePicker({
        format: "HH:mm",
        shortTime: !1,
        date: !1,
        time: !0,
        monthPicker: !1,
        year: !1,
        switchOnClick: !0,
        minTime: moment()
    }), $("#datepicker").bootstrapMaterialDatePicker({
        format: "DD/MM/YYYY",
        shortTime: !1,
        date: !0,
        time: !1,
        monthPicker: !1,
        year: !1,
        switchOnClick: !0,
        minDate: moment()
    })
});




  // manual carousel controls
  $('.next').click(function() {
      $('.carousel').carousel('next');
      return false;
  });
  $('.prev').click(function() {
      $('.carousel').carousel('prev');
      return false;
  });



  //wow js

  // $('#navbarCollapse .desktop-menu a').click(function(){
  //   $('.desktop-menu a').removeClass("active");
  //   $(this).addClass("active");

  // });
  var links = $('.desktop-menu  a');
  links.on('click', function() {
      links.removeClass('active');
      $(this).addClass('active');
  });

});




new WOW().init();







window.onload = function() {
  if (window.jQuery) {
      $(document).ready(function() {
          $(".sidebarNavigation .navbar-collapse").hide().clone().appendTo("body").removeAttr("class").addClass("sideMenu").show();
          $("body").append("<div class='overlay'></div>");
          $(".navbar-toggle, .navbar-toggler").on("click", function() {
              $(".sideMenu").addClass($(".sidebarNavigation").attr("data-sidebarClass"));
              $(".sideMenu, .overlay").toggleClass("open");
              $(".overlay").on("click", function() {
                  $(this).removeClass("open");
                  $(".sideMenu").removeClass("open")
              })
          });
          $("body").on("click", ".sideMenu.open .nav-item", function() {
              if (!$(this).hasClass("dropdown")) {
                  $(".sideMenu, .overlay").toggleClass("open")
              }
          });
          $(window).resize(function() {
              if ($(".navbar-toggler").is(":hidden")) {
                  $(".sideMenu, .overlay").hide()
              } else {
                  $(".sideMenu, .overlay").show()
              }
          })
      })
  } else {
      console.log("sidebarNavigation Requires jQuery")
  }
}













      
 