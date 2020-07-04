<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/vue-airbnb-style-datepicker@2.1.0/dist/vue-airbnb-style-datepicker.min.css">
        <title>app Ice Cream from Puglia</title>

        
    </head>
    <body>
        <div class="content">
            <div id="app">
                
                <br>
                <order></order>
                
            </div>
        </div>
        
        <script type="application/javascript" src="{{ mix('js/app.js') }}"></script>    


    </body>
</html>
