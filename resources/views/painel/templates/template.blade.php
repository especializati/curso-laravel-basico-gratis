<!DOCTYPE html>
<html>
    <head>
        <title>{{$title or 'Painel Curso'}}</title>
        
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <link rel="stylesheet" href="{{url('assets/painel/css/style.css')}}">
    </head>
    <body>
        
        <div class="container">
            @yield('content')
        </div>

    </body>
</html>