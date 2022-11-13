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
                margin:5px;
                padding:5px;
            }
            table{
                width: 100%;
                border: 1px solid #ccc;
            }
            table th{
                text-align:left;
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
            <a href="{{ route('file-import-page') }}">
                <h2>Import Excel File </h2>
            </a>    
            <table>
                <thead>
                    <th>Due Amount</th>
                    <th>Paid Amount</th>
                    <th>Concession Amount</th>
                    <th>Scholarship Amount</th>
                    <th>WriteOff Amount</th>
                    <th>Adjusted Amount</th>
                    <th>Refund Amount</th>
                    <th>Fund Transfer Amount</th>
                </thead>
                <tbody>
                    @if(count($data)==0)
                    <tr>
                        <td colspan='8'>No record found</td>
                    </tr>
                    @else
                    @foreach($data as $res)
                    <tr>
                        <td>{{$res->due_amount}}</td>
                        <td>{{$res->paid_amount}}</td>
                        <td>{{$res->concession_amount}}</td>
                        <td>{{$res->scholarship_amount}}</td>
                        <td>{{$res->write_off_amount}}</td>
                        <td>{{$res->adjusted_amount}}</td>
                        <td>{{$res->refund_amount}}</td>
                        <td>{{$res->fund_transfer_amount}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </body>
</html>
