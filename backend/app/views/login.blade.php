<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Remuneracion</title>
  <!-- bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />
  <!-- RTL support - for demo only -->
  <script src="js/demo-rtl.js"></script>
		<!-- 
	If you need RTL support just include here RTL CSS file <link rel="stylesheet" type="text/css" href="css/libs/bootstrap-rtl.min.css" />
	And add "rtl" class to <body> element - e.g. <body class="rtl"> 
-->
<!-- libraries -->
<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css" />
<!-- global styles -->
<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css" />
<!-- this page specific styles -->
<!-- google font libraries -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
<!-- Favicon -->
<link type="image/x-icon" href="favicon.png" rel="shortcut icon" />
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
       <![endif]-->
   </head>

   <body id="login-page" style="background: white;">
      <header class="navbar" id="header-navbar" style="min-height:90px">
        <div class="container">
          <a  id="logo" class="navbar-brand">
              <img src="/img/banner_superior.png" alt="" class="normal-logo" style="height:46px" />
          </a>
        </div>
      </header>   
      <div class="container">
         <div class="row">
            <div class="col-xs-8" align="center" style="margin-top: 120px;">
              <img src="/img/baner.png" alt="" class="img-responsive">
            </div>    
            <div class="col-xs-4">
               <div id="login-box" style="margin-top: 200px;">
                  <div id="login-box-holder">
                     <div class="row">
                        <div class="col-xs-12">
                           <header id="login-header" style="font-size:10px;" >
                              <div id="login-logo" >
                                 Bienvenido
                             </div>
                         </header>
                          <form action="api/sesion/login" method="post">
                            <div id="login-box-inner">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" type="text" name="username" placeholder="Usuario">
                              </div>
                              <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                  <input type="password" name="password" class="form-control" placeholder="Contraseña">
                              </div>
                              <div class="row">
                                  <label style="color:red;vertical-align:middle" for="datos" class="col col-lg-12">
                                     @if ($errors->any())
                                     <div class="alert alert-danger" style="border-radius:0px;">{[ $errors->first() ]}</div>
                                     @endif
                                 </label>
                              </div>

                          
                            </div>
                            <footer style="background:#EEEEEE;padding-bottom:10px;">
                                <div class="row">
                                  <div class="col-xs-offset-8 col-xs-4">
                                   <button type="submit" class="btn btn-success" style="background: #9D1434;border-color: #9D1434">Entrar</button>
                                  </div>
                                </div>
                             </footer>
                        </form>
           </div>
       </div>
   </div>
</div>
</div>
</div>
</div>


    <footer id="footer-bar" class="row">
        <p id="footer-copyright" class="col-xs-12">
          D.R. © Copyright {[Date('Y')]}. Derechos Reservados. Publigraphics S.A. de C.V.
        </p>
    </footer>

<!-- global scripts -->
<script src="js/demo-skin-changer.js"></script>
<!-- only for demo -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.nanoscroller.min.js"></script>
<script src="js/demo.js"></script>
<!-- only for demo -->
<!-- this page specific scripts -->
<!-- theme scripts -->
<script src="js/scripts.js"></script>
<!-- this page specific inline scripts -->
</body>

</html>
