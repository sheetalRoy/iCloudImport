<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .container{
                padding:10px;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .input-container{
               padding:5px;
               margin-top:10px;
            }
            .button{
                height:30px;
                width: 150px;
                background-color:green;
                color:#fff;
                cursor: pointer;
                border-radius: 8px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Import Excel File </h2>
            <a href="{{ route('report') }}">
                <h2>Report</h2>
            </a>
            <div class="flex-center position-ref full-height">
            
            <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="custom-file text-left">
                        <input type="file" name="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="input-container">
                        <button class="button">Import data</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
