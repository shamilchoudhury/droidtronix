<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Error | Page not Found</title>

	<style>
		body {
		  background: #008B8B;
		  color: #fff;
		  font-family: "Lucida Console", Monaco, monospace;
		  line-height: 1.5;
		}

		a {
		  color: #fff;
		  text-decoration: none;
		  border-bottom: solid 2px;
		}

		@media (min-width: 640px) {
		  body {
		    background-size: cover;
		    background-repeat: no-repeat;
		    background-position: center;
		    min-height: 100vh;
		  }

		  .content {
		    width: 500px;
		    height: 300px;
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		    -webkit-transform: translate(-50%, -50%);
		    -ms-transform: translate(-50%, -50%);
		    background-color: #333;
		    padding: 45px 20px 20px;
		    box-sizing: border-box;
		    box-shadow: 0 0 25px rgba(0, 0, 0, .5);
		    border-radius: 5px 5px 0 0;
		  }

		  .browser-bar {
		    background: #f9f9f3;
		    position: absolute;
		    top: 0;
		    left: 0;
		    right: 0;
		    padding: 5px;
		    overflow: hidden;
		    border-radius: 5px 5px 0 0;
		  }

		  .button {
		    display: inline-block;
		    float: left;
		    border-radius: 50%;
		    width: 15px;
		    height: 15px;
		    margin-right: 5px;
		  }

		  .close {
		    background: #fc635d;
		  }

		  .min {
		    background: #fdbc40;
		  }

		  .max {
		    background: #34c84a;
		  }
		}
	</style>

</head>
<body>
	<div class="content">
		<div class="browser-bar">
			<span class="close button"></span>
			<span class="min button"></span>
			<span class="max button"></span>
		</div>
		<div class="text"></div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="{{ asset('js/typed.js') }}"></script>
	<script>
		$(function() {
		    $('.text').typed({
		        strings: [
		            "^1000 <h3>Dude! It looks like you're lost.</h3> <br /> ^1000" +
		            "Sorry about that. <br /> ^1000" +
		            "Let us try and help. <br /> ^1000" +
		            "Go back <a href='/'>home</a> and start over."
		        ],
		        typeSpeed: 0,
		        showCursor: false
		    });
		});
	</script>
</body>
</html>
