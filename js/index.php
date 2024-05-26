
<!DOCTYPE html>
<head>
    <title>UniBook</title>
    <link href="css/StyleSheet.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css"/>
    
    <!-- ........................slider................... -->
    <script>
        $(".carousel").swipe({
            swipe: function (
              event,
              direction,
              distance,
              duration,
              fingerCount,
              fingerData
            ) {
                if (direction == "left") $(this).carousel("next");
                if (direction == "right") $(this).carousel("prev");
            },
            allowPageScroll: "vertical"
        });

        $(".carousel").swipe({
            swipe: function (
              event,
              direction,
              distance,
              duration,
              fingerCount,
              fingerData
            ) {
                if (direction == "left") $(this).carousel("next");
                if (direction == "right") $(this).carousel("prev");
            },
            allowPageScroll: "vertical"
        });
        
    </script>
    <script>
        $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

    </script>
    <script>
         $(document).ready(function() {
   // Open active tab based on button clicked
    $('.btn-modal').on('click', function() {
      var switchTab = $(this).data('tab');   
      activaTab(switchTab);
      function activaTab(switchTab) {
          $('.nav-tabs a[href="#' + switchTab + '"]').tab('show');
      };
    });
   
   // Toggle New/Existing Customer
    var custType = $('#customer-type'),
        newCust = $('.new-customer'),
        existCust = $('.existing-customer'),
        createAccBtn = $('.create-account'),
        verifyAccBtn = $('.verify-account');
   
    custType.val($(this).is(':checked'))
            .change(function() {
    if ($(this).is(':checked')) {
          newCust.fadeToggle(400, function() { // Hide Full form when checked
            existCust.fadeToggle(500); //Display Small form when checked
            createAccBtn.toggleClass('hide');
            verifyAccBtn.toggleClass('hide');
          });
          
        } else {
          existCust.fadeToggle(400, function() { //Hide Small form when unchecked
            newCust.fadeToggle(500); //Display Full form when unchecked
            createAccBtn.toggleClass('hide');
            verifyAccBtn.toggleClass('hide');
          });
          
        }
   });
  });

        //......................search icon...........................


        
    </script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="./" class="navbar-brand">LOGO</a>
                        </div>
                        <nav class="collapse navbar-collapse bs-navbar-collapse text-center" role="navigation">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="./">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
                                    <ul class="dropdown-menu text-center">
                                        <li><a href="#">Mission</a></li>
                                        <li><a href="#">Vision</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Services</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </header>
            </div>
         
              
        </div>
    </div>
    <div class="container-fluid" style="margin-top: 55px;">
        <div class="row" style="background-image: url('5.jpg');">
            <div class="col-xs-4 col-md-4 col-sm-4 col-xl-4 col-lg-4">
                <div class="rounded-social-buttons" style="float:left; margin-top:30px;">
                    <a class="social-button facebook" href="https://www.facebook.com/UNIBooK-104969920898237/?modal=admin_todo_tour"></a>
                    <a class="social-button twitter" href="#"></a>
                    <a class="social-button linkedin" href="#"></a>
                    <a class="social-button youtube" href="#"></a>

                </div>
            </div>
            <div class="col-xs-4 col-md-4 col-sm-4 col-xl-4 col-lg-4">
                <h1 class="effect">UNIBOOK</h1>
            </div>
            <div class="col-xs-4 col-md-4 col-sm-4 col-xl-4 col-lg-4">
                <!-- Button trigger modal -->
               <a href="join_us.php"><button type="button" class="btn btn-sm btn-lg btn-modal" data-toggle="modal" data-target="#myModal" data-tab="login" style="float:right;">join us</button></a>



            </div>
        </div>
    </div>
   <div class="container-fluid">
       <div class="row container-fluid">
           <div class="col-lg-12 col-xs-12">
               <!-- The carousel -->
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                   <!-- Indicators -->
                   <ol class="carousel-indicators">
                       <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                       <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                       <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                       <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                       <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                   </ol>

                   <!-- Wrapper for slides -->
                   <div class="carousel-inner" role="listbox">
                       <div class="item active">
                           <img src="images/study in groups.png" alt="It’s a time to study in groups and learn new things" style="width: 100%;height: 525px;" />
                           <div class="carousel-caption">
                               <h2>Groups</h2>
                               <p>It’s a time to study in groups and learn new things<br></p>
                           </div>
                       </div>
                       <div class="item">
                           <img src="https://s26.postimg.cc/zccz3svft/cg6.jpg" />
                           <div class="carousel-caption">
                               <h3>Second slide</h3>
                               <p>Caption goes here</p>
                           </div>
                       </div>
                       <div class="item">
                           <img src="https://s26.postimg.cc/hyxmrttt5/cg1.jpg"/>
                           <div class="carousel-caption">
                               <h3>Third slide</h3>
                               <p>Caption goes here</p>
                           </div>
                       </div>
                       <div class="item">
                           <img src="https://s26.postimg.cc/7g2ozrxgp/cg4.jpg" />
                           <div class="carousel-caption">
                               <h3>Fourth slide</h3>
                               <p>Caption goes here</p>
                           </div>
                       </div>
                       <div class="item">
                           <img src="531.png" width="1280" height="533" />
                           <div class="carousel-caption">
                               <h3>Fifth slide</h3>
                               <p>Caption goes here</p>
                           </div>
                       </div>
                   </div>

                   <!-- Controls -->
                   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                       <span class="icon-prev"></span>
                   </a>
                   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                       <span class="icon-next"></span>
                   </a>
               </div>

           </div>
           </div>
           </div>
       </div>
             
</body>
</html>
