<?php
class Header
  {
    public function init_header(){
	  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chatbox||Welcome Page</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<style type="text/css">
			.post{
				background-color: #fff;
			}
			.Username{
				background-color: #007bff;
			}
			a{
				color:#fff;
			}
		</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow p-3">
  <a class="navbar-brand" href="#" title="Site that releases Happiness" ><img src="1.png" height="50px"  title="C8H11NO2"/>Chatbox</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" ria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Friends</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Chatnow
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Online list</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Chat</a>
          <a class="dropdown-item" href="#">Private message</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Notification</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-4" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <li class="nav-item">
        <a class="nav-link" href="#">Log out</a>
      </li>
  </div>
</nav>

<!-- POSTS from all users -->
<div id="post" class="post container" align="center">
	<div>What's on your mind?</div>
	<form method="POST">
		<div class="form-group">
    	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write Something" name="content"></textarea>
  		</div>
    	<button type="submit" class="btn btn-success" name="post">Post</button>
	</form>

	<!-- Database for post -->

</div>
<!-- For showing Posts -->
<div class="container">
	
</div>


</body>
</html>
<?php
}
}
$Searchq= new Header();
$Searchq->init_header();


