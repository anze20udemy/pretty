<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>

        .add_image{
            margin-top: 15px;
            margin-bottom: 15px;
        }

    </style>
</head>
<body>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 add_image">

                        <a href="{{url('thumbnail/create')}}" class="btn btn-primary">Upload new Image</a>
                        
                    </div>

                </div>
                <div class="row">
                    @foreach($thumbnails as $thumbnail)
                    <div class="col-md-6">

                        <label for="">Original: </label>
                        <img src="thumbnails/{{$thumbnail->image}}" alt="">

                        <label for="">Resize: </label>
                        <img src="thumbnailsthumb_{{$thumbnail->image}}"/ alt="">


                    </div>
                        @endforeach

                </div>

            </div>

</body>
</html>