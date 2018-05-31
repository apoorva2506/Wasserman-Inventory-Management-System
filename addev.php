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

  <style>
    
    label{
    display:inline-block;
    width:145px;
    font-weight: bold;
}
  </style>
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
                    <li class="active"><a href="addev.php"><i class="fa fa-desktop fa-fw">
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
                    <li><a href="updatealldevs.php"><i class="fa fa-file-o fa-fw">
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

                           <?php
        session_start();
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

        ?>
        <p>Please enter the device details below :</p><br>
        <form action="addev.php" method="post">
          <label>Device's serial number: </label><input type="text" name="snos" required><br><br>
          <label>Item Name :</label> <input type="text" name="item_name"><br><br>
          <label>IP Address : </label><input type="text" name="ipadd" ><br><br>
          <label>Mac Address : </label><input type="text" name="macadd"><br><br>
          <label>Location : </label>
          <select name="loc">
            <option value="wasserman_main">Wasserman Main</option>
              <option value="Brooklyn">Brooklyn</option>
            <option value="Sps">SPS</option>
              <option value="Off-campus">Off-Campus</option>
            </select>
          <br><br>


          <label>Room : </label>
          <select name="room">
            <option value="Front_Desk">Front Desk</option>
            <option value="Presentation_Area">Presentation Area</option>
            <option value="Lab">Lab</option>
            <option value="Dexters_office">Dexter's Office</option>
            <option value="Top_shelf_storage">Top Shelf, Storage</option>
            <option value="Rack_A">Rack A, Storage</option>
              <option value="Rack_B">Rack B, Storage</option>
              <option value="Rack_C">Rack C, Storage</option>
              <option value="Pres_Room_A">Pres Room A</option>
              <option value="Pres_Room_B">Pres Room B</option>
              <option value="Conference_Room_A">Conference Room A</option>
              <option value="Student_Employment">Student Employment</option>
            </select>
          <br><br>

          <label>Staff Name: </label>
          <?php
          $sql1 = "SELECT * FROM wasserman_staff";
          $result1 = $conn->query($sql1);
          echo "<select name='staff'>";
        while ($row = $result1->fetch_assoc()) {
            echo "<option value='" . $row['name'] ."'>" . $row['name']."</option>";
            //echo "<option value='checkout'>" . $row['name']."</option>";
        }
        echo "</select><br><br>";
          ?>

          <label>Category : </label>
          <?php
          $sql1 = "SELECT * FROM category";
          $result1 = $conn->query($sql1);
          echo "<select name='category'>";
        while ($row = $result1->fetch_assoc()) {
            echo "<option value='" . $row['category_name'] ."'>" . $row['category_name']."</option>";
            //echo "<option value='checkout'>" . $row['name']."</option>";
        }
        echo "</select><br><br>";
          ?>

          <label>Manufacturer :</label>
          <select name="manu">
            <option value="apple">Apple</option>
            <option value="dell">Dell</option>
            <option value="asus">Asus</option>
            <option value="lg">LG</option>
            <option value="lenovo">Lenovo</option>
            <option value="sharp">Sharp</option>
          </select><br><br>

          <label>Availability : </label>
          <select name="avail">
            <option value="available">Available</option>
            <option value="in-use">In-Use</option>
          </select><br><br>

          <label>  Score :</label>
          <select name="score">
            <option value="1: Good condition/Waranty">1: Good condition/Waranty</option>
            <option value="2: Good Condition/No Warranty">2: Good Condition/No Warranty</option>
            <option value="3: New equipment">3: New equipment</option>
            <option value="4: Needs replacement">4: Needs replacement</option>
            <option value="5: Disposed AM">5: Disposed AM</option>
            <option value="6: Salvage parts">6: Salvage parts</option>
            </select>
          <br><br>

          <label>PO : </label><input type="text" name="po" ><br><br>
          <label>Purchase Date : </label><input type="date" name="purchase_date" ><br><br>
          <label>Tagged Date : </label><input type="date" name="tagged_date" ><br><br>
          <label>Last Inventory : </label><input type="date" name="last_inv" ><br><br>
          <label>Item Cost : </label><input type="text" name="item_cost" ><br><br>
          <label>Fund : </label><input type="text" name="fund" ><br><br>
          <label>Account : </label><input type="text" name="account" ><br><br>
           <label>Org : </label><input type="text" name="org" ><br><br>
           <label>Prog : </label><input type="text" name="prog" ><br><br>
           <label>Project : </label><input type="text" name="project" ><br><br>
           <label>Chart Cost : </label><input type="text" name="chart_cost" ><br><br>
           <label>Comments : </label><input type="text" name="comments" ><br><br>
           

          <form action="add_success.php" method="post">
          <input type="submit" name="add_success" value="Submit">
          </form>
          </html>

          <?php
            if(isset($_POST['add_success']))
          {
              //$sql_ins = "INSERT INTO survey (serial_no, item_name, ip_add, mac_add, location, staff,category, manufacturer, availability)
            //  VALUES ('".$_POST["snos"]."','".$_POST["item_name"]."','".$_POST["ipadd"]."','".$_POST['macadd']."','".$_POST['loc']."','".$_POST['staff']."','".$_POST['category']."','".$_POST['manu']."')";
            $sql_ins = "INSERT INTO stock (serial_no, item_name, ip_add,mac_add,location,room,staff,category,manufacturer,availability,score,PO,purchase_date,tagged_date,
            last_inventory,item_cost,Fund,account, org, prog,project,chart_cost,comments)
            VALUES ('".$_POST["snos"]."',
            '".$_POST["item_name"]."',
            '".$_POST["ipadd"]."',
            '".$_POST["macadd"]."',
            '".$_POST["loc"]."',
            '".$_POST["room"]."',
            '".$_POST["staff"]."',
            '".$_POST["category"]."',
            '".$_POST["manu"]."',
            '".$_POST["avail"]."',
            '".$_POST["score"]."',
            '".$_POST["po"]."',
            '".$_POST["purchase_date"]."',
            '".$_POST["tagged_date"]."',
            '".$_POST["last_inv"]."',
            '".$_POST["item_cost"]."',
            '".$_POST["fund"]."',
            '".$_POST["account"]."',
            '".$_POST["org"]."',
            '".$_POST["prog"]."',
            '".$_POST["project"]."',
            '".$_POST["chart_cost"]."',
            '".$_POST['comments']."')";
              $res1 = $conn->query($sql_ins);

              echo '<script language="javascript">';
              echo 'alert("Added successfully"); location.href="index.php"';
              echo '</script>';
          }
          ?>
          <br><br>  <a href="index.php"> Back</a>
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
