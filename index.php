<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Harvard College Film Festival 2013 : Official Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the official website of the student-founded Harvard College Film Festive 2013">

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/stylesheet.css" rel="stylesheet">
  </head>

  <body>
  	
  	<header>
  		<img id="logo" src="/img/logo.png">
  		<br><br>
  		<h1>the stories we tell.</h1>
  	</header>
  	

  	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
	    <div class="container">
	 
	      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
	      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>
	 
			
	      <!-- Everything you want hidden at 940px or less, place within here -->
	      <div class="nav-collapse collapse">
	        <!-- .nav, .navbar-search, .navbar-form, etc -->
		        <ul class="nav">
					<li class="active"><a href="#festival">Festival</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#board">Boardmembers</a></li>
					<li><a href="#submission">Submissions</a></li>
				</ul>
	      </div>
	 
	    </div>
	  </div>
	</div>

	<div id="date">Nov 8-10</div>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="/js/countdown.js"></script>	
  	<script type="text/javascript">
	$(function() {
	    $('.countdown').countdown({
	        date: "November 8, 2013 00:00:00",
	        render: function(data) {
            $(this.el).html("<table align=\"center\"><tr class=\"nums\"><td>" + this.leadingZeros(data.days, 3) + " </td><td>" + this.leadingZeros(data.hours, 0) + " </td><td>" + this.leadingZeros(data.min, 2) + " </td><td>" + this.leadingZeros(data.sec, 2) + "</td></tr><tr class=\"units\"><td>days</td><td>hours</td><td>mins</td><td>secs</td></tr></table>");
          	}
	    });
	});
	</script>

	<div class="countdown"></div>


	<div class="section" id="festival">
		<h2>Festival Details</h2>
	</div>

	<div class+"section" id="about">
		<h2>About the Festival</h2>
	</div>

	<div class="section" id="board">
		<h2>Meet the Board</h2>
	</div>

	<div class="submissions">
		<h2>How to Submit</h2>	
	</div>

	<footer>
		&copy; 2013 Harvard College Film Festival
	</footer>

  	<script src="/js/bootstrap.js"></script>
  </body>
</html>