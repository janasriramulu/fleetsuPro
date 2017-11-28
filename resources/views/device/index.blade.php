<!-- index.blade.php -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Index Page</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('js/fleetsu.js
        ')}}"></script>
    </head>
    <body>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Device Label</th>
                        <th>Last Reported</th>
                        <th colspan="2">Status</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </body>
</html>