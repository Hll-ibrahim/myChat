<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
</head>
<body class="antialiased">
    <div class="container mt-4">
        <div>
            <form action="{{route('create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="text" name="content" class="form-control" autocomplete="off" >
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </div>
            </form>
            <a href="{{route('logOut')}}" class="btn btn-danger">Çıkış Yap</a>
        </div>
        @foreach($messages as $message)
            @if($message->user_id ==1)
                <div class="card ml-5 my-5">
                    <div class="card-header text-white bg-primary">
                        blue
                    </div>
                    <div class="card-body">
                        {{$message->content}}
                    </div>
                    <div class="card-footer text-secondary">
                        {{$message->created_at}}
                    </div>
                </div>
            @else
                <div class="card mr-5 my-5">
                    <div class="card-header text-white bg-danger">
                        red
                    </div>
                    <div class="card-body">
                        {{$message->content}}
                    </div>
                    <div class="card-footer text-secondary">
                        {{$message->created_at}}
                    </div>
                </div>
            @endif

        @endforeach
    </div>
</body>
</html>
