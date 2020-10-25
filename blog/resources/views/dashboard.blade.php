<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Blog Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>
<body>

<!-- navigarion bar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">Hii, {{Auth::user()->name}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item ml-3 mr-3">
        <a class="nav-link" href="/addpost">Add Post</a>
      </li>
      <li class="nav-item">
        <a href="/logout" class="btn btn-danger">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<!-- /navigation bar -->

<!-- post list -->

<section class="mt-5">
  <div class="container">
    <table class="table table-dark">
  <thead>
    <tr class="text-uppercase">
      <th scope="col">Post Title</th>
      <th scope="col">Post Content</th>
      <th scope="col">Post Category</th>
      <th scope="col">Created Date</th>
      <th scope="col">Last Modified Date</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bp as $row)
    <tr>
      <td>{{$row->post_title}}</td>
      <td>{{strlen($row->post_content) > 100 ? substr($row->post_content,0, 100).'. . .' : $row->post_content }}</td>
      <td>{{$row->post_category}}</td>
      <td>{{$row->created_at}}</td>
      <td>{{$row->updated_at}}</td>
      <td><a href="/updatepost/{{$row->id}}" class="btn btn-success">Update</a></td>
      <td><a href="/deletepost/{{$row->id}}" class="btn btn-danger">Delete</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
  </div>
</section>

<!-- /post list -->
   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
</body>
</html>