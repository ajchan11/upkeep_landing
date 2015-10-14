<head>
	<title>UpKeep Maintenance Management | Mobile CMMS EAM</title>
	<meta charset="UTF-8">
	<meta name="description" content="UpKeep Maintenance Management is the only mobile-first Enterprise Asset Management / CMMS tool in the market. We hope to enable your business with the full potential of the mobile device and bring the beautiful and elegantly designed software to the enterprise sector while designing for ease of use and user flow.">
	<meta name="keywords" content="Upkeep,maintenance,management,cmms,eam, enterprise, asset,management,mobile">
	<meta name="author" content="Ryan Chan">
	<meta name="apple-itunes-app" content="app-id=921799415"/>
</head>


<?php include("header.php"); ?>

<style type="text/css">
	/*1280 x 720 for homepage only/---*/
 	@media screen and (min-width: 1280px) and (min-height: 720px){

footer {
  position: relative;
}
}
</style>
<body>
	<div class="row pages">
		<div class="col-sm-2"></div>
		<div class="col-sm-8 row pages text-center animated fadeIn">
				<img src="img/header_doodle.png" alt="header" class="text-center img-header"/>
		</div>
		<div class="col-sm-2"></div>
	</div>

	<div class="row pages">
		<div class="col-sm-2"></div>
		<div class="col-sm-4 text-center animated fadeInLeft">
				<h3 class="text-center"> Your Work, Your Way</h3>
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rutrum rhoncus consectetur. Morbi ante nunc, scelerisque at ipsum quis, maximus mattis urna. Etiam cursus euismod eros. Nunc eget nulla et felis rhoncus pulvinar. Maecenas iaculis et augue id elementum. Ut sed pharetra diam. Sed condimentum ultricies neque, nec placerat ligula euismod ut.</p>
		</div>
		<div class="col-sm-4 text-center animated fadeInRight">
			<h4 class="text-center">Login to UpKeep</h4>
			<div class="login-body mt-30">
          <form name="loginForm" ng-submit="login();">
            <div class="row">
            	<div class="col-xs-2"></div>
              <div class="col-xs-8">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" ng-model="login.username" value="" required>
                  </div>
              	</div>
              </div>
              <div class="col-xs-2"></div>
            </div>
            <div class="row">
            	<div class="col-xs-2"></div>
              <div class="col-xs-8">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" ng-model="login.password" value="" required>
                  </div>
                </div>
              </div>
              <div class="col-xs-2"></div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 ">
              	<br/>
                <a class="text-info" href="#" ui-sref="login.reset-password">Reset your password?</a>
              </div>
            </div>
            <div class="row mt-30">
              <div class="col-xs-12">
              	<br/>
                <button class="btn" ng-class="{'btn-grey':loading, 'btn-turquoise':!loading}">[[loading?'Logging you in..': 'LOGIN']]
                </button><span class="spin loading" ng-if="loading"></span>
              </div>
            </div>
          </form>
            <div class="hr mt-20"></div>
            <div class="row mt-30">
              <div class="col-xs-12">
              	<br/>
                <a class="btn btn-primary" ng-click="useAsGuest();">Use as Guest</a>

                <span class="btn btn-info" ui-sref-opts="{ reload: true }" ng-class="{'hidden':settings.useAsGuestLoading}" ui-sref="login.signup">Free Sign Up</span>
                <span ng-if="settings.useAsGuestLoading" class="spin loading"></span>
              </div>
            </div>
        </div>
      </div>
		</div>
		<div class="col-sm-2"></div>
	</div>

	<div class="row pages">
		<div class="col-sm-2"></div>
		<div class="col-sm-4 text-center">
			<img src="img/sec1-doodle.png" alt="section1" class="text-center img-sec1"/>
		</div>
		<div class="col-sm-4 text-sec1">
			<h4 class="text-center"> Manage your assets and work orders at the tip of your fingers</h4>
			<p class="text-left"> Mauris malesuada vehicula commodo. Nulla vel volutpat massa. Donec ut elementum augue. Praesent dapibus ornare risus eget placerat. Donec id purus ut arcu molestie iaculis ac rutrum sem. Praesent vehicula sem eu tincidunt pulvinar. Praesent diam lorem, aliquet et turpis vitae, efficitur mollis justo.</p>
		</div>
		<div class="col-sm-2"></div>
	</div>

	<div class="row pages">
		<div class="col-sm-2"></div>
		<div class="col-sm-4 text-sec2">
			<h4 class="text-center"> Work together with your entire team</h4>
			<p class="text-left"> Mauris malesuada vehicula commodo. Nulla vel volutpat massa. Donec ut elementum augue. Praesent dapibus ornare risus eget placerat. Donec id purus ut arcu molestie iaculis ac rutrum sem. Praesent vehicula sem eu tincidunt pulvinar. Praesent diam lorem, aliquet et turpis vitae, efficitur mollis justo.</p>
		</div>
		<div class="col-sm-4 text-center">
			<img src="img/sec2-doodle.png" alt="section2" class="text-center img-sec2"/>
		</div>
		<div class="col-sm-2"></div>
	</div>

	<div class="row pages">
		<div class="col-sm-2"></div>
		<div class="col-sm-4 text-center">
			<img src="img/sec3-doodle.png" alt="section3" class="text-center img-sec3"/>
		</div>
		<div class="col-sm-4 text-sec3">
			<h4 class="text-center"> Keep your Data</h4>
			<p class="text-left"> Mauris malesuada vehicula commodo. Nulla vel volutpat massa. Donec ut elementum augue. Praesent dapibus ornare risus eget placerat. Donec id purus ut arcu molestie iaculis ac rutrum sem. Praesent vehicula sem eu tincidunt pulvinar. Praesent diam lorem, aliquet et turpis vitae, efficitur mollis justo.</p>
		</div>
		<div class="col-sm-2"></div>
	</div>



<?php include("footer.php"); ?>
</body>	