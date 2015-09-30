<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        .thumb {
            margin-bottom: 30px;
        }
    </style>

</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Thumbnail Gallery</h1>
            </div>



            @foreach($medias as $media)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="{{$media->med_link}}" alt="">
                </a>
                <h4>{{$media->med_title}}</h4>
                <p>{{$media->med_desc}}</p>
                <input type="text" value="{{$media->med_link}}">
            </div>
            @endforeach

        </div>

    </div>
    <!-- /.container -->

   <!-- jQuery -->
   <script src="{{URL::to('js/jquery.js')}}"></script>
   <!-- Bootstrap Core JavaScript -->
   <script src="{{URL::to('js/bootstrap.min.js')}}"></script>

</body>

</html>