<?php
session_start();
if(!isset($_SESSION['username']))
{
  echo "<script>alert('Please Login');
  window.location.href='first.html';</script>";
  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wasserman Inventory Management System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="css/bootstrap.min_1.css" />  
  <link rel="stylesheet" href="css/tableexport.min.css" /> 
</head>
<body>
    <div>
        <!--BEGIN THEME SETTING-->
        <div id="theme-setting">
           <!-- <a href="#" data-toggle="dropdown" data-step="1" data-intro="&lt;b&gt;Many styles&lt;/b&gt; and &lt;b&gt;colors&lt;/b&gt; be created for you. Let choose one and enjoy it!"
                data-position="left" class="btn-theme-setting"><i class="fa fa-cog"></i></a>
            <div class="content-theme-setting">
               <select id="list-style" class="form-control">
                    <option value="style1">Flat Squared style</option>
                    <option value="style2">Flat Rounded style</option>
                    <option value="style3" selected="selected">Flat Border style</option>
                </select> -->
            </div>
        </div>
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">

            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <!--  <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">KAdmin</span><span style="display: none" class="logo-text-icon">µ</span></a> 
            </div>  --> 
            <div class="topbar-main">
              
                <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white" style="align: center;"> 
                    <img src="images/logo.png" height="35px"/>
                Wasserman Inventory Management System</span>
                </div>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                  <li class="dropdown"><a href="logout.php" class="dropdown-toggle"><span class="hidden-xs">Logout</span>&nbsp;</a></li>
                </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id="modal-config" class="modal fade">
            </div>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li ><a href="index.php"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Home</span></a></li>
                    <li><a href="addev.php"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Add a Device</span></a>
                       
                    </li>
                    <li><a href="alldevs.php"><i class="fa fa-send-o fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">All devices</span></a>
                       
                    </li>
                    <li><a href="audselect.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title"> Generate Audit Report</span></a>
                      
                    </li>
                    <li><a href="survey_disp.php"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Audited Devices</span></a>
                          
                    </li>
                    <li><a href="checkedout_details.php"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Checked Out devices</span></a>
                      
                    </li>
                    <li class="active"><a href="updatealldevs.php"><i class="fa fa-file-o fa-fw">
                        <div class="icon-bg bg-yellow"></div>
                    </i><span class="menu-title">Update devices</span></a>
                       
                    </li>
                    <li><a href="survey.php"><i class="fa fa-gift fa-fw">
                        <div class="icon-bg bg-grey"></div>
                    </i><span class="menu-title">Audit Form</span></a>
                      
                    </li>
                    <li><a href="contact.php"><i class="fa fa-sitemap fa-fw">
                        <div class="icon-bg bg-dark"></div>
                    </i><span class="menu-title">Contact Tech Team</span></a>
                      
                    </li>


                   <!-- <li><a href="Email.html"><i class="fa fa-envelope-o">
                        <div class="icon-bg bg-primary"></div>
                    </i><span class="menu-title">Email</span></a>
                      
                    </li>
                    <li><a href="Charts.html"><i class="fa fa-bar-chart-o fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Charts</span></a>
                       
                    </li>
                    <li><a href="Animation.html"><i class="fa fa-slack fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Animations</span></a></li> -->
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            <div id="chat-form" class="fixed">
            </div>
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
               <!-- <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                </div> -->
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                         <form action="updatealldevs.php" method="post">
            Category : &nbsp; 
          <select id="devfilters" name="devfilters">
            <option value="none">--All--</option>
        <option value="Apple Desktop">Apple Desktop</option>
        <option value="PC Desktop">PC Desktop</option>
        <option value="Apple Laptop">Apple Laptop</option>
        <option value="PC Laptop">PC Laptop</option>
        <option value="Ipad">Ipad</option>
        <option value="Printer">Printer</option>
        <option value="projector">Projector/Screen</option>
        <option value="Copier">Copier</option>
        <option value="Fax">Fax</option>
        <option value="Cell Phone">Cell Phone</option>
        <option value="Apple Server">Apple Server</option>
        <option value="PC Server">PC Server</option>
        <option value="Displays">Displays</option>
        <option value="AV Equipment">AV Equipment</option>
      </select> <br><br>
      

      Audited: <select id="audfilters" name="audfilters">
        <option value="none">--All--</option>
        <option value="yes">YES</option>
        <option value="no">NO</option>
       </select>
       <br> <br>
      <input type="submit" value="Filter">
      </form> <br>

      

          <?php

          $servername = "localhost";
          $username = "root";
          $password = "root";
          $dbname = "Inventory";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }
          //echo "Database Connected successfully"."<br><br>"
          $field='serial_no';
          $sort='';
  

  $selected_filter = $_POST['devfilters'];
  $selected_auditfilter = $_POST['audfilters'];
  if( $selected_filter== "none" or $selected_filter== "") {
    if ($selected_auditfilter=="none" or $selected_auditfilter== "") {
      $sql1 = "SELECT * FROM stock ORDER BY $field $sort";
    }
    else{
      $sql1 = "SELECT * FROM stock where audit='$selected_auditfilter' ORDER BY $field $sort";
    }
    

  }
  else {
    if ($selected_auditfilter=="none") {
      $sql1 = "SELECT * FROM stock where category='$selected_filter' ORDER BY $field $sort";
    }
    else{
      $sql1 = "SELECT * FROM stock where audit='$selected_auditfilter' and category='$selected_filter' ORDER BY $field $sort";
    }
    
  }

  $result1 = $conn->query($sql1);

  $row_cnt = $result1->num_rows;
  echo "<br>";
  echo "<b><span style='color:red'>Total ".$row_cnt." devices</span></b>";
  //$result = mysql_query($sql) or die(mysql_error());

        //  $result = $conn->query($sql);
  ?>
          <div id="alldevices"> 
          <table align="right" class="table table-bordered" border='1'>
          <tr>
          <th>Serial No</th>
          <th>Item Description</th>
          <th>IP Address</th>
          <th>MAC Address</th>
          <th>Location</th>
          <th>Room</th>
          <th>Assigned Staff</th>
          <th>Category</th>
          <th>Audited</th>
          <th>Last Audited On</th>
          <th>Score</th>
          </tr>
  <?php

  while($row = mysqli_fetch_array($result1))
  {
  echo "<tbody>";  
  echo "<tr>";
  echo "<td>" . $row['serial_no'] . "</td>";
  echo "<td>" . $row['item_name'] . "</td>";
  echo "<td>" . $row['ip_add'] . "</td>";
  echo "<td>" . $row['mac_add'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['room'] . "</td>";
  echo "<td>" . $row['staff'] . "</td>";
  echo "<td>" . $row['category'] . "</td>";
  echo "<td>" . $row['audit'] . "</td>";
  echo "<td>" . $row['last_audit'] . "</td>";
  echo "<td>" . $row['score'] . "</td>";

  //session_start();

  $_SESSION['origserial']=$row['serial_no'];
  //echo "<td><a id='updatelink' href='updatedev.php?serial_no=".$row['serial_no']."'>Update</a></td>";
  //$_SESSION['serno1']=$row['serial_no'];
  ?>
  
  <td><a id="updatelink" href="updatedev.php?serial_no1=<?php echo $row['serial_no'] ?>&item_name=<?php echo $row['item_name'] ?>&ip_add=<?php echo $row['ip_add'] ?>&mac_add=<?php echo $row['mac_add'] ?>
    &location=<?php echo $row['location'] ?>&room=<?php echo $row['room'] ?>&staff=<?php echo $row['staff'] ?>&category=<?php echo $row['category'] ?>&manufacturer=<?php echo $row['manufacturer'] ?>
    &availability=<?php echo $row['availability'] ?>&score=<?php echo $row['score'] ?>">Update</a></td>



  <?php
  //$_SESSION['origserial']=$row['serial_no'];
  echo "</tr>";
  echo "</tbody>";
  }
  echo "</table>";
  echo "</div>";
  
  //echo $_SESSION['serno1'];
  //echo "Total ".$row_cnt." devices";
  echo "<script>
  $('#updatelink').click(function() {
      $.ajax({
          url: this.href
      });
  });
  </script>";
?>

  

  
    </div>
                        
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://www.nyu.edu/students/student-information-and-resources/career-development-and-jobs.html">2017 © Wasserman Inventory Management System</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="script/jquery-1.10.2.min.js"></script>
    <script src="script/jquery-migrate-1.2.1.min.js"></script>
    <script src="script/jquery-ui.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/bootstrap-hover-dropdown.js"></script>
    <script src="script/html5shiv.js"></script>
    <script src="script/respond.min.js"></script>
    <script src="script/jquery.metisMenu.js"></script>
    <script src="script/jquery.slimscroll.js"></script>
    <script src="script/jquery.cookie.js"></script>
    <script src="script/icheck.min.js"></script>
    <script src="script/custom.min.js"></script>
    <script src="script/jquery.news-ticker.js"></script>
    <script src="script/jquery.menu.js"></script>
    <script src="script/pace.min.js"></script>
    <script src="script/holder.js"></script>
    <script src="script/responsive-tabs.js"></script>
    <script src="script/jquery.flot.js"></script>
    <script src="script/jquery.flot.categories.js"></script>
    <script src="script/jquery.flot.pie.js"></script>
    <script src="script/jquery.flot.tooltip.js"></script>
    <script src="script/jquery.flot.resize.js"></script>
    <script src="script/jquery.flot.fillbetween.js"></script>
    <script src="script/jquery.flot.stack.js"></script>
    <script src="script/jquery.flot.spline.js"></script>
    <script src="script/zabuto_calendar.min.js"></script>
    <script src="script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="script/highcharts.js"></script>
    <script src="script/data.js"></script>
    <script src="script/drilldown.js"></script>
    <script src="script/exporting.js"></script>
    <script src="script/highcharts-more.js"></script>
    <script src="script/charts-highchart-pie.js"></script>
    <script src="script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
