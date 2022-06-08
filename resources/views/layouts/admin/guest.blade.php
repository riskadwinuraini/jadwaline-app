
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - JadwaLine</title>
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css')}}">
    
    <link rel="shortcut icon" href="{{ asset('admin/images/Logo_J.png" type="image/x-icon')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/app.css')}}">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="/admin/js/feather-icons/feather.min.js"></script>
    <script src="/admin/js/app.js"></script>
    
    <script src="/admin/js/main.js"></script>
</body>

</html>
