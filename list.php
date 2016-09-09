<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        Cairis Risk

                    </a>
                    
                </div>
				
              
                <span class="logout-spn" >
                  <a href="#" style="color:#b8d5e3;">LOGOUT</a>  

                </span>
            </div>
        </div>
		</div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   

                    <li>
                        <a href="ui.html"><i class="fa fa-table "></i>UI Elements  <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-edit "></i>Blank Page  <span class="badge">Included</span></a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>My Link One</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <div class="row">
                    <div class="col-lg-12">
                     <h2>Project Options</h2> 


  <div data-role="main" class="ui-content">
    <h2>Risk Factors</h2>
    <div data-role="collapsible">
    <h4>Assets</h4>
    <ul data-role="listview">
      <li><a href="#">Scenarios</a></li>
      <li><a href="#">Security Attributes</a></li>
    </ul>
    </div>

    <div data-role="collapsible">
    <h4>Users</h4>
    <ul data-role="listview">
       <li><a href="#">Scenarios</a></li>
       <li><a href="#">Perceptions</a></li>
	   <li><a href="#">Goals</a></li>
	   <li><a href="#">Needs</a></li>
	   <li><a href="#">Current Usability</a></li>
    </ul>
    </div>
	
	<div data-role="collapsible">
    <h4>Tasks</h4>
    <ul data-role="listview">
      <li><a href="#">Scenarios</a></li>
      <li><a href="#">Effects on Work Performance</a></li>
      <li><a href="#">Goals</a></li>
      <li><a href="#">Stakeholder Rationale</a></li>
	  <li><a href="#">Usability</a></li>
    </ul>
    </div>
	
	<div data-role="collapsible">
    <h4>Environment</h4>
    <ul data-role="listview">
      <li><a href="#">Scenarios</a></li>
      <li><a href="#">Factors</a></li>
      <li><a href="#">Security Perceptions</a></li>
    </ul>
    </div>
	
    <div data-role="collapsible">
    <h4>Threats</h4>
    <ul data-role="listview">
      <li><a href="#">Scenarios</a></li>
      <li><a href="#">Assets Targeted</a></li>
      <li><a href="#">Means of Exploitation</a></li>
      <li><a href="#">Attackers</a></li>
	  <li><a href="#">Security Attributes Required</a></li>
	  <li><a href="#">Severity</a></li>
      <li><a href="#">Liklihood</a></li>
    </ul>
    </div>
  
  <div data-role="collapsible">
    <h4>Vulnerabiltiy</h4>
    <ul data-role="listview">
      <li><a href="#">Scenarios</a></li>
      <li><a href="#">Exploitation</a></li>
      <li><a href="#">Weakness Exposed</a></li>
      <li><a href="#">Severity</a></li>
      <li><a href="#">Liklihood</a></li>
    </ul>
    </div>
	
	<div data-role="collapsible">
    <h4>Attackers</h4>
    <ul data-role="listview">
      <li><a href="#">Scenarios</a></li>
      <li><a href="#"></a>Motives</li>
      <li><a href="#">Capabilities</a></li>
	  <li><a href="#">Assets Targeted to be Exploited</a></li>
    </ul>
    </div>
	
	<div data-role="collapsible">
    <h4>Risks</h4>
    <ul data-role="listview">
      <li><a href="#">Scenarios</a></li>
      <li><a href="#">Responses</a></li>
      <li><a href="#">Severity</a></li>
      <li><a href="#">Liklihood</a></li>
	  <li><a href="#">Misuse Case</a></li>
	  <li><a href="#">Countermeasures</a></li>
    </ul>
    </div>
  </div>
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   </div>
			   </div>
                 <!-- /. ROW  -->   
				  <div class="row">
                    <div class="col-lg-12 ">
					<br/>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
		IRIS Meta Model
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>