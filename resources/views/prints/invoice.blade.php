<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .dynamic-text {
            border-bottom: 2px solid black !important;
            padding-left: 20px;
            padding-right: 20px;
            margin-left: 5px
        }
    </style>
</head>

<body>
    <div class="container py-4">
        <div class="col-md-8 offset-md-2">
            <div class="card p-5">
                <h5 class="text-center border p-2 mb-4 bg-light">Car Sale & Purchase - Invoice #{{$invoice->id}}</h5>
                <p>Date: <span class="dynamic-text">{{$invoice->created_at}}</span>
                </p> <br>
                <p>I, <span class="dynamic-text" style="padding-right: 20%">{{$invoice->s_name}}</span> Father <span
                        class="dynamic-text" style="padding-right: 20%">{{$invoice->s_name}}</span></p>
                <p>Address <span class="dynamic-text" style="padding-right: 50%">{{$invoice->s_name}}</span>
                </p>
                <p>do hereby sell the following vehicle:</p>
                <p>Year <span class="dynamic-text">{{$invoice->s_name}}</span></p>
                <p>Make <span class="dynamic-text">{{$invoice->s_name}}</span></p>
                <p>Model <span class="dynamic-text">{{$invoice->s_name}}</span></p>
                <p>Vehicle Identification Number (VIN) <span class="dynamic-text">{{$invoice->s_name}}</span></p>
                <p>Odometer Reading: <span class="dynamic-text">{{$invoice->s_name}}</span></p>
                <p>To, (Name of Purchaser) <span class="dynamic-text"
                        style="padding-right: 40%">{{$invoice->s_name}}</span></p>
                <p>(Address) <span class="dynamic-text" style="padding-right: 50%">{{$invoice->s_name}}</span>
                </p>
                <p>on (date of sale) <span class="dynamic-text">{{$invoice->s_name}}</span> for the amount of Rs
                    <span class="dynamic-text">{{$invoice->s_name}}</span>
                </p>
                <p>which has been recieved in full.</p>
            </div>
        </div>

        <footer class="text-center mt-2" style="font-size: 10px">
            <div>Copyright © 2023-2024. All rights reserved.</div>
            <div>Designed & Developed By Moiz Chauhdry</div>
        </footer>
    </div>

    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</body>

</html>
