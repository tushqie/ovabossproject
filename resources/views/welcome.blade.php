<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Laravel From Scratchs | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('/vendors/nprogress/nprogress.cs') }}s" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('/build/css/custom.min.css') }}" rel="stylesheet">

    <style>

    /* *
    {
        box-sizing: border-box;
    } */

    .common
    {
      color: black;
    }

    .navbar-right.d-flex.justify-content-between
    {
      width: 90%;
    }

    i.fa.fa-paper-plane.mb-1
    {
      color: #4264e0;
    }

    .has-search .form-control-2
    {
      padding-left: 2.375rem;
    }

    span#sear.fa.fa-search.form-control-feedback
    {
      position: absolute;
      z-index: 2;
      display: block;
      width: 2.375rem;
      line-height: 2.375rem;
      text-align: center;
      pointer-events: none;
      color: #aaa;
      top: 11em;
      left: 21em;
    }

    span#sear.fa.fa-search.form-control-feedback.fa-search:before
    {
      position: absolute;
      right: 1em;
      top: 0em;
      color: #4264e0;
    }

    span.badge.badge-pill.badge-info.dot
    {
      position: absolute;
      right: 22em;
      top: 7rem;
    }

    .contactlist
    {      
      display: flex;
       justify-content: center;
       align-items: center;
    }

    .grid-a
    {      
       display: grid;
       grid-template-columns: 1fr 1fr;
       height: 89vh;
       width: 38vw;
    }

    .b 
    {      
       display: flex;
       flex-direction: column;
       justify-content: center;
       align-items: center;
       height: 100vh;
    }
    

    .overflow-feed
    {      
       overflow-y: scroll;
       height: 379px; 
    }

    .overflow-feed-right
    {      
      background-color: #f1f1f1;
      height: 6rem;
      border-radius: 1em;
      height: 5em;
      width: 98%;
    }

    .overflow
    {      
       overflow-y: scroll;
       height: 197px;
    }
    
    .feed-main
    {      
       display: grid;
       /* grid-template-columns: repeat(2,1fr); */
       grid-template-columns: 0.2fr 2fr;
       gap: 1em;
       width: 18vw;
    }

    .feed-main-row
    {      
       display: flex;
       justify-content: space-between;
       align-items: center;
       width: 15em;
    }

    .feed-main-col
    {      
       display: flex;
       flex-direction: column;
       justify-content: center;
       align-items: center;
       background-color: #ceecf5;
       border-radius: 1em;
    }

    .grid-3
    {      
       display: grid;
       grid-template-columns: 0.2fr 1fr 1fr;
       width: 90%;
    }

    .grid-1 
    {      
       display: grid;
       grid-template-columns: 0.2fr 1fr 1fr;    
    }

    .grid-2
    {      
       display: grid;
       grid-template-columns: 0.2fr 1fr 1fr;
    }

    .groups-inner 
    {      
       display: flex;
    }

    .inner-left
    {      
       display: flex;
    }

    .inner-left-2
    {      
       display: flex;
       flex-direction: column;
       margin-left: 20px;
    }

    .inner-left-feed
    {      
       display: flex;
       flex-direction: column;
       margin-left: 10px;
    }

    .inner-right-a
    {      
       display: flex;
       flex-direction: column;
       /* margin: 13px 0 0 20px; */
       justify-content: center;
       align-items: center;
       /* height: 42vh; */
       height: 30em;
    }

    .inner-right
    {      
       display: flex;
       flex-direction: column;
       /* margin: 13px 0 0 20px; */
       justify-content: center;
       align-items: center;
    }
    

    .inner-right-feed
    {      
       display: flex;
       flex-direction: column;
       /* margin: 13px 0 0 20px; */
       justify-content: center;
       align-items: center;
       line-height: 0rem;
    }
    

    .inner 
    {
       width: 100%;  /* to inherit parent div width */
       display: grid;
       grid-template-columns: 1fr 2fr 1fr;
    }
    
    .user-info 
    {
      display: flex;
      margin-left: 30px;
      margin-top: 14px;

    }

    .user-info p 
    {
      margin: 7px 0 0 20px;
    }
    
    .user-info p 
    {
      margin:  0px 0 0 20px;
    }

    .middle 
    {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    } 
    
    .user-profilerect
    {   
      width: 50px;
      height: 50px;
    }
   
    .user-profilefeed
    {  
      position: relative; 
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    .chatinner 
    {
      
    }

    .imgopposite 
    {
     
    }

    .joinedchat 
    {
     
    }

    .feed {
    
    }

    .currentchatters {
   
    }

    #divide
    {
      background-color: aquamarine;    
    }
   
        
    .site_title
    {
        position: relative;
    }
    /* #menu_toggle
    {
       position: absolute;
       bottom: 1em;
       left: 13em;
    } */

    .nav.navbar-nav
    {
        background-color: white;
    }
       
    #search {
        border: 0;
    }

    .search2 {
      margin-left: 9%;
    }
   

    .navbar-right.d-flex.justify-content-between
    {
        position: relative
    }

    #sear
    {
        top: 1em;
        /* right: 0em; */
        left: 2em;
        font-size: small;
        position: absolute;
    }

   

     </style>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view" style="background-color: #000000;">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" style="background-color: #ffc600;" class="site_title"><i class="fa fa-paw common"></i> <span class="common">Ovaboss</span></a>
              <div class="nav toggle">
                <!-- <a id="menu_toggle"><i class="fa fa-bars"></i></a> -->
              </div>
            </div>

            <div class="clearfix"></div>          

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Customer Community Centre</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home" style="color: #ffc600;"></i> Chat Centre <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit" style="color: #ffc600;"></i> Notificaton <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop" style="color: #ffc600;"></i> Customer Support <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table" style="color: #ffc600;"></i> Switch to PCC <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o" style="color: #ffc600;"></i> Switch to BCC <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sign-out" style="color: #ffc600;"></i>Log Out</a>
                   
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <nav class="nav navbar-nav">

              

              <ul class=" navbar-right d-flex justify-content-between">
                
              
                    <i class="fa fa-search" id="sear"></i>
                    <input id="search" class="form-control" type="text" placeholder="Find Something">
               
<li>
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  John Doe <img src="images/img.jpg" alt="">
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="message" class="nav-item dropdown open mr-2">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge badge-pill badge-info">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                <li role="notification" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge badge-pill badge-danger">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
 </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->     
        <div class="right_col">
          <div class="inner">
            <div class="a" style="background-color:white;">
                <div class="user-info">
                    <img src="images/img.jpg" class="user-profilerect" alt="">
                      <div class="middle">                    
                          <p><b>Bridge Jordan</b></p>
                          <p>Web Designer</p>                          
                      </div>
                </div>
                <br/>
                <div class="form-group has-search ml-4">
                    <span class="fa fa-search form-control-feedback" id="sear"></span>
                    <input class="form-control-2" type="text" placeholder="Search">
              </div>
                <br/>
                <p></p>
                <div>
                        
                        <div class="groups ml-3"> 
                            <div><h4>My Community Groups</h4></div> 
                            <hr/>
                            <p></p>
                            <div class="overflow">                                           
                                <div class="grid-1">                    
                                    <div> 
                                        <img src="images/img.jpg" class="user-profilerect" alt="">                   
                                    </div>
                                    <div class="inner-left-2"> 
                                        <h5><b>Personal</b></h5>
                                        <p>Web Designer</p>  
                                    </div>                                                          
                                    <div class="inner-right"> 
                                        <i class="fa fa-paper-plane mb-1"></i>                
                                        <p><b>15 mins</b></p>                         
                                    </div>                                                    
                                </div>
                                <div class="grid-2">                    
                                    <div> 
                                        <img src="images/img.jpg" class="user-profilerect" alt="">                   
                                    </div>
                                    <div class="inner-left-2"> 
                                        <h5><b>Associate</b></h5>
                                        <p>Web Designer</p>  
                                    </div>                                                          
                                    <div class="inner-right"> 
                                        <i class="fa fa-paper-plane mb-1"></i>                
                                        <p><b>15 mins</b></p>                         
                                    </div>                                                    
                                </div>
                                <div class="grid-3">                    
                                    <div> 
                                        <img src="images/img.jpg" class="user-profilerect" alt="">                   
                                    </div>
                                    <div class="inner-left-2"> 
                                        <h5><b>Acquaintance</b></h5>
                                        <p>Web Designer</p>  
                                    </div>                                                          
                                    <div class="inner-right"> 
                                        <i class="fa fa-paper-plane mb-1"></i>                
                                        <p><b>15 mins</b></p>                         
                                    </div>                                                    
                                </div>
                                <div class="grid-1">                    
                                    <div> 
                                        <img src="images/img.jpg" class="user-profilerect" alt="">                   
                                    </div>
                                    <div class="inner-left-2"> 
                                        <h5><b>Personal</b></h5>
                                        <p>Web Designer</p>  
                                    </div>                                                          
                                    <div class="inner-right"> 
                                        <i class="fa fa-paper-plane mb-1"></i>                
                                        <p><b>15 mins</b></p>                         
                                    </div>                                                    
                                </div>
                                <div class="grid-2">                    
                                    <div> 
                                        <img src="images/img.jpg" class="user-profilerect" alt="">                   
                                    </div>
                                    <div class="inner-left-2"> 
                                        <h5><b>Associate</b></h5>
                                        <p>Web Designer</p>  
                                    </div>                                                          
                                    <div class="inner-right"> 
                                        <i class="fa fa-paper-plane mb-1"></i>                
                                        <p><b>15 mins</b></p>                         
                                    </div>                                                    
                                </div>
                                <div class="grid-3">                    
                                    <div> 
                                        <img src="images/img.jpg" class="user-profilerect" alt="">                   
                                    </div>
                                    <div class="inner-left-2"> 
                                        <h5><b>Acquaintance</b></h5>
                                        <p>Web Designer</p>  
                                    </div>                                                          
                                    <div class="inner-right"> 
                                        <i class="fa fa-paper-plane mb-1"></i>                
                                        <p><b>15 mins</b></p>                         
                                    </div>                                                    
                                </div>
                            </div>
                        </div>
                        
                        <p></p>
                        <p></p>

                        <div class="groups ml-3"> 
                            <div><h4>Private Chat</h4></div> 
                            <hr/>
                            <p></p>
                            <div class="overflow-b">                                           
                                <div class="grid-1">                    
                                    <div> 
                                        <img src="images/img.jpg" class="user-profilerect" alt="">                   
                                    </div>
                                    <div class="inner-left-2"> 
                                        <h5><b>Personal</b></h5>
                                        <p>Web Designer</p>  
                                    </div>                                                          
                                    <div class="inner-right"> 
                                        <i class="fa fa-paper-plane mb-1"></i>                
                                        <p><b>15 mins</b></p>                         
                                    </div>                                                    
                                </div>
                                <div class="grid-2">                    
                                    <div> 
                                        <img src="images/img.jpg" class="user-profilerect" alt="">                   
                                    </div>
                                    <div class="inner-left-2"> 
                                        <h5><b>Associate</b></h5>
                                        <p>Web Designer</p>  
                                    </div>                                                          
                                    <div class="inner-right"> 
                                        <i class="fa fa-paper-plane mb-1"></i>                
                                        <p><b>15 mins</b></p>                         
                                    </div>                                                    
                                </div>
                                <div class="grid-3">                    
                                    <div> 
                                        <img src="images/img.jpg" class="user-profilerect" alt="">                   
                                    </div>
                                    <div class="inner-left-2"> 
                                        <h5><b>Acquaintance</b></h5>
                                        <p>Web Designer</p>  
                                    </div>                                                          
                                    <div class="inner-right"> 
                                        <i class="fa fa-paper-plane mb-1"></i>                
                                        <p><b>15 mins</b></p>                         
                                    </div>                                                    
                                </div>                              
                            </div>
                        </div>

                </div>
            </div>
            <div class="b" style="background-color: #f2f7f9;">
              <div class="bg-white my-3 px-3"><h3>Chat Centre</h3></div>
              <div class="grid-a bg-white"> 
                    <div class="overflow-feed">  
                        <div class="grid-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Linda Lohan</b>
                                <p>Hi there, How are you?</p> 
                              </div> 
                            </div>                                                          
                            <div class="inner-right-feed">
                                <p><b>15 mins</b></p> 
                                <span class="badge bg-red pull-right">5</span>                                                                        
                            </div>                                                    
                        </div>
                        <hr/>
                        <div class="grid-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Julie Tan</b>
                                <p>See you soon..</p> 
                              </div> 
                            </div>                                                          
                            <div class="inner-right-feed">
                                <p><b>15 mins</b></p> 
                                <i class="fa fa-check mb-1"></i>                                                                         
                            </div>                                                             
                        </div>
                        <hr/>  
                        <div class="grid-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Linda Lohan</b>
                                <p>Hi there, How are you?</p> 
                              </div> 
                            </div>                                                          
                            <div class="inner-right-feed">
                                <p><b>15 mins</b></p> 
                                <span class="badge bg-red pull-right">5</span>                                                                        
                            </div>                                                    
                        </div>
                        <hr/>
                        <div class="grid-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Julie Tan</b>
                                <p>See you soon..</p> 
                              </div> 
                            </div>                                                          
                            <div class="inner-right-feed">
                                <p><b>15 mins</b></p> 
                                <i class="fa fa-check mb-1"></i>                                                                         
                            </div>                                                             
                        </div>
                        <hr/> 
                        <div class="grid-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Linda Lohan</b>
                                <p>Hi there, How are you?</p> 
                              </div> 
                            </div>                                                          
                            <div class="inner-right-feed">
                                <p><b>15 mins</b></p> 
                                <span class="badge bg-red pull-right">5</span>                                                                        
                            </div>                                                    
                        </div>
                        <hr/>
                        <div class="grid-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Julie Tan</b>
                                <p>See you soon..</p> 
                              </div> 
                            </div>                                                          
                            <div class="inner-right-feed">
                                <p><b>15 mins</b></p> 
                                <i class="fa fa-check mb-1"></i>                                                                         
                            </div>                                                             
                        </div>
                        <hr/>                      
                    </div>
                    <div class="inner-right-a"> 
                        <div class="overflow-feed">                        
                            <div class="feed-main mt-4"> 
                                <img src="images/img.jpg" class="user-profilefeed" alt="">                    
                                <div class="feed-main-col"> 
                                    <div class="feed-main-row mt-2">
                                      <div> 
                                          <b>Julie Tan</b>
                                      </div>
                                      <div>                                    
                                          02 days ago
                                      </div>                                 
                                    </div>                                                               
                                    <div class="px-2"> 
                                        <hr class="my-1"/>                                                               
                                        <p>Hi honey, how are you doing? Long time no see..</p>
                                    </div>                                                                  
                                </div>                                                             
                            </div> 
                            <div class="feed-main mt-4">                                               
                                <div class="feed-main-col"> 
                                    <div class="feed-main-row mt-2">
                                      <div> 
                                          <b>Julie Tan</b>
                                      </div>
                                      <div>                                    
                                          02 days ago
                                      </div>                                 
                                    </div>                                                               
                                    <div class="px-2"> 
                                        <hr class="my-1"/>                                                               
                                        <p>Hi honey, how are you doing? Long time no see..</p>
                                    </div>                                                                  
                                </div> 
                                <img src="images/img.jpg" class="user-profilefeed" alt="">                                                             
                            </div> 
                            <div class="feed-main mt-4"> 
                                <img src="images/img.jpg" class="user-profilefeed" alt="">                    
                                <div class="feed-main-col"> 
                                    <div class="feed-main-row mt-2">
                                      <div> 
                                          <b>Julie Tan</b>
                                      </div>
                                      <div>                                    
                                          02 days ago
                                      </div>                                 
                                    </div>                                                               
                                    <div class="px-2"> 
                                        <hr class="my-1"/>                                                               
                                        <p>Hi honey, how are you doing? Long time no see..</p>
                                    </div>                                                                  
                                </div>                                                             
                            </div> 
                            <div class="feed-main mt-4">                                               
                                <div class="feed-main-col"> 
                                    <div class="feed-main-row mt-2">
                                      <div> 
                                          <b>Julie Tan</b>
                                      </div>
                                      <div>                                    
                                          02 days ago
                                      </div>                                 
                                    </div>                                                               
                                    <div class="px-2"> 
                                        <hr class="my-1"/>                                                               
                                        <p>Hi honey, how are you doing? Long time no see..</p>
                                    </div>                                                                  
                                </div> 
                                <img src="images/img.jpg" class="user-profilefeed" alt="">                                                             
                            </div> 
                            <div class="feed-main mt-4"> 
                                <img src="images/img.jpg" class="user-profilefeed" alt="">                    
                                <div class="feed-main-col"> 
                                    <div class="feed-main-row mt-2">
                                      <div> 
                                          <b>Julie Tan</b>
                                      </div>
                                      <div>                                    
                                          02 days ago
                                      </div>                                 
                                    </div>                                                               
                                    <div class="px-2"> 
                                        <hr class="my-1"/>                                                               
                                        <p>Hi honey, how are you doing? Long time no see..</p>
                                    </div>                                                                  
                                </div>                                                             
                            </div> 
                            <div class="feed-main mt-4">                                               
                                <div class="feed-main-col"> 
                                    <div class="feed-main-row mt-2">
                                      <div> 
                                          <b>Julie Tan</b>
                                      </div>
                                      <div>                                    
                                          02 days ago
                                      </div>                                 
                                    </div>                                                               
                                    <div class="px-2"> 
                                        <hr class="my-1"/>                                                               
                                        <p>Hi honey, how are you doing? Long time no see..</p>
                                    </div>                                                                  
                                </div> 
                                <img src="images/img.jpg" class="user-profilefeed" alt="">                                                             
                            </div> 
                        </div>
                      <div class="overflow-feed-right my-2 px-4">  
                        <div class="input-group mt-2">                          
                            <input id="" type="text" placeholder="Type your message..." class="form-control">
                            <div class="input-group-append"> 
                              <button id="submit" type="button" class="btn btn-primary">Send</button>
                            </div> 
                        </div>
                      </div>
                    </div> 
              </div>
            </div>
           
            <div class="c" style="background-color: #f9f9f9;">  
                        <div class="contactlist my-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Paul Molivo</b>
                                <p>Admin</p> 
                              </div> 
                            </div>                                                          
                            <div class="green-feed">
                            <span class="badge badge-pill badge-info dot">4</span>                                                                        
                            </div>                                                             
                        </div>
                        <div class="contactlist my-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Anna Muli</b>
                                <p>Admin</p> 
                              </div> 
                            </div>                                                          
                            <div class="green-feed">
                              <span class="badge badge-pill badge-info dot">2</span>                                                                        
                            </div>                                                             
                        </div>
                        <div class="contactlist my-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Paul Molivo</b>
                                <p>Admin</p> 
                              </div> 
                            </div>                                                          
                            <div class="green-feed">
                            <span class="badge badge-pill badge-info dot">2</span>                                                                        
                            </div>                                                             
                        </div>
                        <div class="contactlist my-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Anna Muli</b>
                                <p>Admin</p> 
                              </div> 
                            </div>                                                          
                            <div class="green-feed">
                              <span class="badge badge-pill badge-info dot">2</span>                                                                        
                            </div>                                                             
                        </div>
                        <div class="contactlist my-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Paul Molivo</b>
                                <p>Admin</p> 
                              </div> 
                            </div>                                                          
                            <div class="green-feed">
                            <span class="badge badge-pill badge-info dot">2</span>                                                                        
                            </div>                                                             
                        </div>
                        <div class="contactlist my-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Anna Muli</b>
                                <p>Admin</p> 
                              </div> 
                            </div>                                                          
                            <div class="green-feed">
                              <span class="badge badge-pill badge-info dot">2</span>                                                                        
                            </div>                                                             
                        </div>
                        <div class="contactlist my-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Paul Molivo</b>
                                <p>Admin</p> 
                              </div> 
                            </div>                                                          
                            <div class="green-feed">
                            <span class="badge badge-pill badge-info dot">2</span>                                                                        
                            </div>                                                             
                        </div>
                        <div class="contactlist my-1">                    
                            <div> 
                              <img src="images/img.jpg" class="user-profilefeed" alt="">                   
                            </div>
                            <div class="inner-left-feed"> 
                              <div style="width: 9vw;"> 
                                <b>Anna Muli</b>
                                <p>Admin</p> 
                              </div> 
                            </div>                                                          
                            <div class="green-feed">
                              <span class="badge badge-pill badge-info dot">2</span>                                                                        
                            </div>                                                             
                        </div>
            </div>
          </div>
        </div>

          <!-- /top tiles -->
          <br />

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            June 2020 Ovaboss Project by <a href="#">IMOLE</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('/build/js/custom.min.js') }}"></script>
	
  </body>
</html>
