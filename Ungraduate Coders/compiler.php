<?php
session_start();
if(isset($_SESSION['username'])){

}else{
  header("location:signin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Compiler</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- <style>
		body {
  background-color:#17a2b8	;
}
	</style> -->
</head>
<body class="d-flex flex-column h-100">
	<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary  fixed-top navbar-dark bg-info">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <span class="text-danger " class="abc"><img src="edu_img/logo1.jpeg" alt="logo" style="height: 50px; border-radius: 50%;"> ungraduate</span>_coders</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse active" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                  <!--<a class="nav-link active text-danger" aria-current="page" href="logout.php" >-->
                  <!--     <i class="fa fa-home" aria-hidden="true"></i>  -->
                  <!--    logout</a>  -->
                        <a href="logout.php"><button type="button" class="btn btn-outline-danger">Logout</button></a>
              </div>
            </div>
          </nav>
    </header>
<main class="flex-shrink-0">
  <div class="container" style="margin-top: 7rem;">
    <center>
    	<h1 class="mt-5">Practice here</h1>
    	<p class="lead"><b>Online compiler for HTML,CSS & JS</b></p>
    
    </center>
  </div>
</main>
<section>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-xs-12">
			<div class="card bg-dark text-white">
			  <div class="card-header">
			    HTML Code <button type="button" id="btn" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Copy Code" style="float: right;" onclick="copyHtml()">Copy</button>
			  </div>
			  <div class="card-body">
			    <textarea id="htmlCode" class="form-control" 
            oninput="showPreview()" rows="8"></textarea>
			  </div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12">
			<div class="card bg-dark text-white">
			  <div class="card-header">
			    CSS Code <button type="button" id="btn" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Copy Code" style="float: right;" onclick="copyCss()">Copy</button>
			  </div>
			  <div class="card-body">
			    <textarea id="cssCode" class="form-control" 
            oninput="showPreview()" rows="8"></textarea>
			  </div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-xs-12">
			<div class="card bg-dark text-white">
			  <div class="card-header">
			    JS Code <button type="button" id="btn" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Copy Code" style="float: right;" onclick="copyJs()">Copy</button>
			  </div>
			  <div class="card-body">
			    <textarea id="jsCode" class="form-control" 
            oninput="showPreview()" rows="8"></textarea>	
			  </div>
			</div>
		</div>
		
	</div>
</div>
</section>
<section style="padding-top:30px; padding-bottom: 10px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12">
			<div class="card border-dark">
			  <div class="card-header bg-dark text-white">
			    Output
			  </div>
			  <div class="card-body">
			    <iframe id="preview-window" style="width:100%;"></iframe>
			  </div>
			</div>
		</div>
		</div>
	</div>
</section>
<footer class="footer mt-auto ">
  <!-- <div class="container">
    <span class="text-muted">© 2023 Ungraduate_Coders . All rights reserved.</span>
  </div> -->
  <!-- Copyright -->
  <div class="text-center p-3 bg-info">
	ungraduate_coders<br>
	© 2023 Copyright: All rights reserved.<br>
	<a href="https://www.facebook.com/kunjeshyadav.kunjeshyadav?mibextid=ZbWKwL" target="blank"><i
		class="fa-brands fa-facebook"></i></a>
	<a href="https://instagram.com/ungraduate_bihari?igshid=OTk0YzhjMDVlZA==" target="_blank"><i
		class="fa-brands fa-instagram"></i></a>
	<a href="https://github.com/Ydv-Kunjesh" target="_blank"><i class="fa-brands fa-github"></i></a>
	<a href="https://www.linkedin.com/in/kunjesh-ydv-6a2179252/" target="_blank"><i
		class="fa-brands fa-linkedin-in"></i></a>
  </div>
  <!-- Copyright -->
</footer>
<script type="text/javascript">
	function showPreview(){
  var htmlCode = document.getElementById("htmlCode").value;
  var cssCode = "<style>"+document.getElementById("cssCode").value+"</style>";
  var jsCode = ""+document.getElementById("jsCode").value+"";
  var frame = document.getElementById("preview-window").contentWindow.document;
  frame.open();
  frame.write(htmlCode+cssCode+jsCode);
  frame.close();
}
</script>
<script type="text/javascript">

	function copyHtml(){
		document.getElementById('htmlCode').select();
		document.execCommand('copy');
		alert("copied");
	
	}
	function copyCss(){
	  document.getElementById('cssCode').select();
		document.execCommand('copy');
		alert("copied");
	}
	function copyJs(){
	    
		document.getElementById('jsCode').select();
		document.execCommand('copy');
		alert("copied");
	}
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

</body>
</html>