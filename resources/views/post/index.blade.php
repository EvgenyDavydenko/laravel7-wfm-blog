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
            @foreach($posts as $post)
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-header"><?=$post['title']?></div>
                    <div class="card-body"><?=$post['content']?></div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>

    

    
</body>
</html>

