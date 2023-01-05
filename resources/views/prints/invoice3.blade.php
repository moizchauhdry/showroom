<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle Sale Invoice - 0{{$invoice->id}} </title>
    <style>
        body {
            font-family: 'Archivo Narrow', sans-serif;
            font-size: 12px
        }

        * {
            box-sizing: border-box;
        }

        .row {
            margin-left: -5px;
            margin-right: -5px;
        }

        .column {
            float: left;
            width: 50%;
            padding: 5px;
        }

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            border: 1px solid #8a8a8a;
        }

        .bb-25 {
            border-bottom: 1px solid black;
            padding-left: 15px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="row">
        <div style="float: left">
            <h4>Logo</h4>
        </div>
        <div style="float: right">
            <table style="font-size:8px">
                <tr>
                    <td style="padding:5px">DATE</td>
                    <td style="padding-left:5px; padding-right:15px">04-01-2022</td>
                </tr>
                <tr>
                    <td style="padding:5px">DAY</td>
                    <td style="padding-left:5px; padding-right:15px">Monday</td>
                </tr>
            </table>
        </div>
    </div>

    <div style="text-align:center">
        <span>Toyota Walton Motors</span> <br>
        <span>21-B Walton, Near Packages Mall, Lahore</span>
        <h2 style="text-transform: uppercase;">SALE RECIEPT</h2>
    </div>

    <div>
        <div style="float: left;width: 100%; margin-bottom: 10px;">
            <div style="float: left;width: 50%;">
                <div style="float: left;">I am:</div>
                <div style="float: left;width: 93%;margin-left: 10px;" class="bb-25">Muhammad Moiz Akhtar</div>
            </div>
            <div style="float: left;width: 50%;">
                <div style="float: left;">Father Name:</div>
                <div style="float: left;width: 87%;margin-left: 10px;" class="bb-25">Muhammad Akhtar</div>
            </div>
        </div>

        <div style="float: left;width: 100%; margin-bottom: 10px;">
            <div style="float: left;width: 50%;">
                <div style="float: left;">Phone:</div>
                <div style="float: left;width: 91%;margin-left: 10px;" class="bb-25">0320-4650584</div>
            </div>
            <div style="float: left;width: 50%;">
                <div style="float: left;">CNIC:</div>
                <div style="float: left;width: 93%;margin-left: 10px;" class="bb-25">35202-454545487-1</div>
            </div>
        </div>

        <div style="float: left;width: 100%; margin-bottom: 10px;">
            <div style="float: left;">Permanent Address:</div>
            <div style="float: left;width: 100%;margin-left: 10px;" class="bb-25">178 J Block Sabzazar Scheme Multan
                Road, Lahore.</div>
        </div>
    </div>
</body>

</html>
