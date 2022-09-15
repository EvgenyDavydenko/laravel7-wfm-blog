<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col mb-4">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post.index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="{{ route('post.index') }}">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            </nav>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-header"><?=$post['title']?></div>
                    <div class="card-body"><?=$post['content']?></div>
                </div>
            </div>
            @endforeach
        </div>
        
        {{ $posts->appends(['search'=>request()->search])->links() }}
    
    </div>

    

    
</body>
</html>

