<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <script type="text/javascript">
      function filter(){
        var category = document.getElementById('category').value;
        if(category){
          window.location.href = "/home/"+category;
        }
        else{
          window.location.href = "/";
        }
      }
    </script>
</head>
<body>

<!-- navigarion bar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Blog Application</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      @if(Auth::check())
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/addpost">Add Post</a>
      </li>
      <li class="nav-item">
        <a href="/logout" class="btn btn-danger">Logout</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="/login">Login</a>
      </li>
      @endif
    </ul>
  </div>
</nav>

<!-- /navigation bar -->

<!-- post list -->

<section class="mt-5">
  <div class="container">
      <select class="form-control mt-3" id="category" name="postCategory" onchange="filter()">
          <option value="">Filter by Category</option>
          <option  value="Finance" @if($cat == "Finance") selected @endif>Finance</option>
          <option value="Technology" @if($cat == "Technology") selected @endif>Technology</option>
          <option value="Food" @if($cat == "Food") selected @endif>Food</option>
          <option value="Travel" @if($cat == "Travel") selected @endif>Travel</option>
          <option value="Sports" @if($cat == "Sports") selected @endif>Sports</option>
        </select>
    @foreach($posts as $row)
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title">
                <h5>{{$row->post_title}}</h5>
                <p class="text-secondary"><i>{{$row->post_category}}</i></p>
                <p>{{$row->post_content}}</p>
            </div>
        </div>
    </div>
    @endforeach

<!-- pagination -->

    <div class="d-flex justify-content-center mt-5">
    @if ($posts->lastPage() > 1)
        <nav aria-label="Page navigation">
            <ul class="pagination">
                @if($posts->currentPage() != 1 && $posts->lastPage() >= 5)
                <li class="page-item">
                    <a class="page-link" href="{{ $posts->url($posts->url(1)) }}" aria-label="Previous">
                        <span aria-hidden="true">First</span>
                    </a>
                </li>
                @endif
                @if($posts->currentPage() != 1)
                <li class="page-item">
                  <a class="page-link" href="{{ $posts->url($posts->currentPage()-1) }}" aria-label="Previous">
                        <span aria-hidden="true">&#x3C;</span>
                  </a>
                </li>
                @endif
                @for($i = max($posts->currentPage()-2, 1); $i <= min(max($posts->currentPage()-2, 1)+4,$posts->lastPage()); $i++)
                @if($posts->currentPage() == $i)
                <li class="page-item active">
                @else
                <li class="page-item">
                @endif
                    <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                </li>
                @endfor
                @if ($posts->currentPage() != $posts->lastPage())
                <li class="page-item">
                    <a class="page-link" href="{{ $posts->url($posts->currentPage()+1) }}" aria-label="Next">
                        <span aria-hidden="true">&#x3E;</span>
                    </a>
                </li>
                @endif
                @if ($posts->currentPage() != $posts->lastPage() && $posts->lastPage() >= 5)
                <li class="page-item">
                    <a class="page-link" href="{{ $posts->url($posts->lastPage()) }}" aria-label="Next">
                        <span aria-hidden="true">Last</span>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        @endif
      </div>
<!-- /pagination -->
  </div>
</section>

<!-- /post list -->



   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
</body>
</html>