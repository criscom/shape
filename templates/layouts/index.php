<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Theme Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/navbar-static-top.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">
    <div class="section-header">
      <div class="container">
        <div class="logo-collapse">
          <div class="logo logobar">
            <a class="navbar-brand" href="#"><img title="Anton Paar" src="http://www.anton-paar.com/typo3conf/ext/theme_antonpaar/Resources/Public/Template/img/logo-anton-paar.png" alt="Anton Paar"></a>
          </div>
          <div class="header-search header-right">
            <form class="searchform" action="" method="get">
              <div class="search-visible">
                <label class="search-text">Suche</label>
                <button type="button" class="btn btn-mini" data-toggle="collapse" data-target="#search">Open</button>
              </div>
              <div class="search-toggle collapse" id="search">
              <input>
              <button type="button" class="btn btn-mini">Go</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">Project name</a> -->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Startseite</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Branchen <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Medizintechnik</a></li>
                    <li><a href="#">Luft- und Raumfahrt</a></li>
                    <li><a href="#">Schienenfahrzeuge</a></li>
                    <li><a href="#">Messtechnik</a></li>
                    <li><a href="#">Information und Kommunikation</a></li>
                    <li><a href="#">Gehäuse- und Maschinenbau</a></li>
                  </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">
      <!-- Partials section -->
asdfasdf
      <f:if condition="{layout} == 1">
      <f:render partial="TwoTimesOne.html" arguments="{contentImage:contentImage, contentBelowImage:contentBelowImage, contentMain:contentMain}" />
      </f:if>

      <f:if condition="{layout} == 2">
      <f:render partial="TwoTimesOne.html" arguments="{contentImage:contentImage, contentBelowImage:contentBelowImage, contentMain:contentMain}" />
      </f:if>

      <!-- Partials section END --> 

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <script src="../js/transition.js"></script>
  </body>
</html>
