<?php 
  session_start();
if (isset($_SESSION['admiSsn'])) {
 
}else{
  header('location:../../index.php');
}
  require_once('../../configs/dbConfig.php');
  require_once('../../controllers/functions.php');
  
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php titlePrefix();?>Register Doctor</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Link to the datepicker resource -->
  <link rel="stylesheet" type="text/css" href="../../resources/datepicker/datepicker.css">
  <script src="../../resources/datepicker/datepicker.js"></script>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

<!-- Favicon Link-->
<link rel="shortcut icon" href="../../assets/favicon.ico" type="image/x-icon"/>

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>K</b>MRS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Kenya</b>MRS</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['adminUsername'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
          
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['adminUsername'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Registry</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Register Doctor</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Register Patient</a></li><li><a href="registerHealthFacility.php"><i class="fa fa-circle-o"></i> Register Hospital</a></li><li><a href="#"><i class="fa fa-circle-o"></i> Register Manufacturer</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Add Medicine</a></li>
          </ul>
        </li>

        


        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Fill Visit</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Fill Diagnosis</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Fill Prescription</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Fill Billing</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Fill Payment</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Visits History</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Diagnosis</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Prescriptions</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Bills</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Payments</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Appointments</span>
            
          </a>
        </li>

        <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        
        
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kenya MRS Dashboard
        <small>transforming healthcare</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Register Doctor</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">

    <form class="well form-horizontal" action="" method="POST"  id="frmRegisterDoc" name="frmRegisterDoc" method="POST">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Doctor Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">ID</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
  <input  name="txtDoctID" id="txtDoctID" placeholder="National ID" required="" class="form-control" autofocus="autofocus"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >First Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="txtFname" id="txtFname" required="" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="txtLname" id="txtLname" required="" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Date Of Birth</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="txtDOB" id="txtDOB" required="" placeholder="Date Of Birth" class="form-control datepicker"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group"> 
  <label class="col-md-4 control-label">Gender</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="cmbGender" id="cmbGender" class="form-control selectpicker">
      <option value="">Select Gender</option>
      <?php 
        $sql="SELECT `Gender_id`, `Gender_name` FROM `Gender` ";
        $query_run=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($query_run)) {
          $genderId=$row['Gender_id'];
          $genderName=$row['Gender_name'];
          ?>
          <option value="<?php echo $genderId;?>"><?php echo $genderName;?></option>
          <?php
        }
      ?> 
      
    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Phone Number</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="txtPhone" id="txtPhone" required="" placeholder="Phone Number" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Email Address</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="txtEmail" id="txtEmail" required="" placeholder="Email Address" class="form-control"  type="email">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Postal Address</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <textarea name="txtPostalAddress" id="txtPostalAddress" required="" placeholder="Postal Address" class="form-control"></textarea>
    </div>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">City / Town</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="txtCity" id="txtCity" class="form-control selectpicker">
      <option value="">Select City/Town</option>
      <?php 
        $sql="SELECT `Postal_Code`, `City_Name` FROM `City` ORDER BY City.City_Name ";
        $query_run=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($query_run)) {
          $cityCode=$row['Postal_Code'];
          $cityName=$row['City_Name'];
          ?>
          <option value="<?php echo $cityCode;?>"><?php echo $cityName;?></option>
          <?php
        }
      ?> 
      
    </select>
  </div>
</div>
</div>


  <div class="form-group"> 
  <label class="col-md-4 control-label">Department</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="cmbDepartment" id="cmbDepartment" class="form-control selectpicker">
      <option value="">Select Department</option>
      <?php 
        $sql="SELECT `Dept_Id`, `Dept_Name` FROM `Departments`ORDER BY Departments.Dept_Name ";
        $query_run=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($query_run)) {
          $deptId=$row['Dept_Id'];
          $deptName=$row['Dept_Name'];
          ?>
          <option value="<?php echo $deptId;?>"><?php echo $deptName;?></option>
          <?php
        }
      ?> 
      
    </select>
  </div>
</div>
</div>
  



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-success" name="btnAddDoctor" id="btnAddDoctor" onclick="return getFormdata()">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>

<!-- Paragraph to output the success message -->
<p id="msg"></p>

<!-- Footer element -->
</form>
</div>
    </div><!-- /.container -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">

    <strong><?php 
          include_once('../../views/footer.php');
            ?>.</strong> 
  </footer>

  
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<!-- Jquery script to ajax the user inputs  -->
          <script type="text/javascript">
          /*Function to get user inputs. Called when user click submit button*/
    function getFormdata()
    {
      var txtDoctID=document.getElementById('txtDoctID').value;
      var txtFname=document.getElementById('txtFname').value;
      var txtLname=document.getElementById('txtLname').value;
      var txtDOB=document.getElementById('txtDOB').value;
      var cmbGender=document.getElementById('cmbGender').value;
      var txtPhone=document.getElementById('txtPhone').value;
      var txtEmail=document.getElementById('txtEmail').value;
      var txtPostalAddress=document.getElementById('txtPostalAddress').value;
      var txtCity=document.getElementById('txtCity').value;
      var cmbDepartment=document.getElementById('cmbDepartment').value;
      var dataString='txtDoctID='+ txtDoctID+'&txtFname='+txtFname+'&txtLname='+txtLname+'&txtDOB='+txtDOB+'&cmbGender='+cmbGender+'&txtPhone='+txtPhone+'&txtEmail='+txtEmail+'&txtPostalAddress='+txtPostalAddress+'&txtCity='+txtCity+'&cmbDepartment='+cmbDepartment;

      /*Ajaxing the user inputs to be process by php*/
      $.ajax({
        type:"POST",
        url:"../../controllers/admin/processRegisterDoctor.php",
        data:dataString,
        cache:false,
        success:function(html){
         /* Echo the php success feedback to the paragraph id msg*/
          $('#msg').html(html);
        }
      });
      return false;
    }
  </script>
        <!-- End of Jquery Script to ajax user inputs -->