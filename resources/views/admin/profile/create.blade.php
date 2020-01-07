<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MyProfile</title>

        </head>
        <body>
            @extends('layouts.admin')
            
            @section('title', 'Myプロフィール画面')
            
            @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Myプロフィール</h1>
                    </div>
                </div>
            </div>
            @endsection
        </body>
</html>