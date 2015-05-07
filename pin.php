<!DOCTYPE html>
<html>
<head>
	<title>pin interest sharing </title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://apis.google.com/js/client:platform.js" async defer></script>
<script src = "https://plus.google.com/js/client:plusone.js"></script>
<style type="text/css">
	.add{
		  width: 100%;
  border: medium none;
  font-family: raleway;
  font-weight: bold;
  font-size: 14px;
  color: rgb(225, 73, 8);
  padding-top: 10px;
  padding-bottom: 10px;
  background: none 0% 0% repeat scroll transparent;
	}
	

@media screen and (max-width: 768px) {
	
  .modal__inner {
    width: 90%;
    height: 90%;
    box-sizing: border-box;
  }
}


/* Other
 * =============================== */
body {
  padding: 1%;
  font: 1/1.5em sans-serif;
  text-align: center;
}

.btn {
  cursor: pointer;
  background: #27ae60;
  display: inline-block;
  padding: .5em 1em;
  color: #fff;
  border-radius: 3px;
}

.btn:hover,
.btn:focus {
  background: #2ecc71;
}

.btn:active {
  background: #27ae60;
  box-shadow: 0 1px 2px rgba(0,0,0, .2) inset;
}

.btn--blue {
  background: #2980b9;
}

.btn--blue:hover,
.btn--blue:focus {
  background: #3498db;
}

.btn--blue:active {
  background: #2980b9;
}

p img {
  max-width: 200px;
  height: auto;
  float: left;
  margin: 0 1em 1em 0;
}

#btn{
  margin-top:50px;
  margin-left:200px;
}
#inner{
  width:400px;
  height:200px;
  background:#FFF;
  margin:0 auto;
  box-shadow: 10px 10px 5px #F05B5B;
}
#popup{
  width:100%;
  height:800px;
  position: absolute;
  top:0px;
  left:0px;
  background:rgba(120,120,120,0.7);
  display:none;
  
}
#inner{
    cursor:pointer;
}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">

</head>
<body>

<script type="text/javascript">
	
	function signinCallback(authResult) {
  if (authResult['status']['signed_in']) {
  	console.log(authResult);
    // Update the app to reflect a signed in user
    // Hide the sign-in button now that the user is authorized, for example:
    document.getElementById('signinButton').setAttribute('style', 'display: none');
      
        $('#change').html("user is now logged in");
        // Send the code to the server



  } else {
    // Update the app to reflect a signed out user
    // Possible error values:
    //   "user_signed_out" - User is signed-out
    //   "access_denied" - User denied access to your app
    //   "immediate_failed" - Could not automatically log in the user
    console.log('Sign-in state: ' + authResult['error']);
  }
}
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=271577596358928";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="row">

<br >
    <button id="btn" class="btn btn-danger" >Click here for the pop up </button>
</div>
<div class="row" style="margin-top:50px">
<div class="col-sm-4">
  <img src="P1.jpg" width="200">
  <br/>
  <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a><br/>
<div class="fb-share-button" data-href="http://www.scriblur.com/cyc/productpage.php?id=1" data-layout="button"></div>
<br/>
<span class="btn btn-info"  id="close_it">ADD to BAG</span>


<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
</div>
<div class="col-sm-4">
   <img src="P2.jpg" width="200"><br/>

   <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a><br/>
<div class="fb-share-button" data-href="http://www.scriblur.com/cyc/productpage.php?id=2" data-layout="button"></div>
<br/>
<span class="btn btn-info"  id="close_it">ADD to BAG</span>


</div>
<div class="col-sm-4">
<img src="P3.jpg" width="200"><br/>
<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a><br/>
<div class="fb-share-button" data-href="http://www.scriblur.com/cyc/productpage.php?id=1" data-layout="button"></div>
<br/>
<span class="btn btn-info"  id="close_it">ADD to BAG</span>
</div>
</div>
<div class="row">

  <span id="signinButton">
  <span
    class="g-signin"
    data-callback="signinCallback"
    data-clientid="712930552403-4b2m7v3o9fbpuqdbpdubpjg1nsmlrkaj.apps.googleusercontent.com"
    data-cookiepolicy="single_host_origin"
    data-requestvisibleactions="http://schema.org/AddAction"
    data-scope="https://www.googleapis.com/auth/plus.login">
  </span>
</span>
  <div id="change">

  </div>
  <div id="results"></div>

</div>
<script type="text/javascript">
	function click(){
		alert("nil is here");
		setTimeout(function() { close(); }, 5000);
	}
	function close(){
		alert("close after 5 second");
	}
	$("#close_it").click(function(){
		$( "#dialog" ).dialog();
		$( "#dialog" ).delay(5000).dialog();
    //setTimeout($('#dialog').dialog("close"),5000);

    //$("body").delay(5000).removeClass("modal-open");

$(".no-close").fadeOut(5000, function() {
    $(".no-close").css("display","none");
});
$(".ui-dialog-titlebar-close").fadeOut(5000, function() {
    $(".ui-dialog-titlebar-close").css("display","none");
});

    
});
</script>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>


    <div id="popup">
      <div id="inner" style="padding-top:50px">
        <div id="cross" style="margin-left:360px">&#x2716;</div>
        <p style="text-align:center">Your message goes here </p>
      </div>
      
    </div>

 <script>
 $("#btn").click(function(){
 	//alert('clicked');
        $("#popup").fadeIn();
      window.setTimeout( close, 5000 );
    });
 $("#inner").click(function(){
        $("#popup").fadeOut("1000");
    });

function close(){
     $("#popup").fadeOut("1000");
}

  </script>
</body>
</html>
