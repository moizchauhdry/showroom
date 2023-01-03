<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicle Sale Invoice - 0{{$invoice->id}} </title>
    <style>
        h5,
        table,
        th,
        td {
            font-family: 'Archivo Narrow', sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: left;
            vertical-align: top;
            border: 1px solid #8a8a8a;
            /* padding: 0.3em; */
            caption-side: bottom;
            font-size: 12px;
            text-wrap: inherit;
        }

        th {
            font-weight: bolder;
            text-align: center;
        }

        /* caption {
            padding: 0.3em;
        } */

        .heading {
            text-transform: uppercase;
            background-color: #8a8a8a;
            padding: 5px;
            color: whitesmoke;
        }
    </style>
</head>

<body>
    <table style="border:none;">
        <tr>
            <td style="width:50%" style="border:none;font-size:7px;text-align:left;">
                <p>Vehicle Sale Invoice</p>
            </td>
            <td style="width:50%" style="border:none;font-size:7px;text-align:right;">
                <div>{{ $invoice->created_at }}</div>
                <div>151 G Block Sabzazar</div>
                <div>Multan Road Lahore</div>
                <div>Punjab,Pakistan</div>
            </td>
        </tr>
    </table>
    <h5 style="text-align:center; text-transform:uppercase"> Vehicle Sale Invoice </h5>
    <table style="margin-bottom: 30px;">
        <tr>
            <td style="padding: 10px" width="50%">
                <strong>Invoice Number</strong>: 0{{ $invoice->id}}<br>
                <strong>Invoice Date</strong> : {{ $invoice->created_at }}<br>
            </td>

            <td style="padding: 10px" width="50%">
            </td>
        </tr>
        <tr>
            <td style="padding: 10px" width="50%">
                <strong class="heading">Seller Information</strong><br><br>
                <strong>Name : </strong>{{ $invoice->s_name}}<br>
                <strong>Father : </strong>{{$invoice->s_father}}<br>
                <strong>CNIC : </strong>{{ $invoice->s_cnic}}<br>
                <strong>Phone : </strong>{{ $invoice->s_phone}}<br>
                <strong>Address : </strong>{{$invoice->s_address}}
            </td>
            <td style="padding: 10px" width="50%">
                <strong class="heading">Buyer Information</strong><br><br>
                <strong>Name : </strong>{{ $invoice->b_name}}<br>
                <strong>Father : </strong>{{$invoice->b_father}}<br>
                <strong>CNIC : </strong>{{ $invoice->b_cnic}}<br>
                <strong>Phone : </strong>{{ $invoice->b_phone}}<br>
                <strong>Address : </strong>{{$invoice->b_address}}
            </td>
        </tr>
        <tr>
            <td style="padding: 10px" colspan="2">
                <strong class="heading">Vehicle Information</strong><br><br>
                <strong>Registration No : </strong>{{ $invoice->reg_no}}<br>
                <strong>Chassis No : </strong> {{$invoice->chassis_no}}<br>
                <strong>Engine No : </strong> {{$invoice->engine_no}}<br>
                <strong>Mark : </strong>{{ $invoice->mark}}<br>
                <strong>Horsepower : </strong>{{ $invoice->hp}}<br>
                <strong>Model : </strong>{{$invoice->model}}<br>
                <strong>Kota : </strong>{{$invoice->kota}}<br>
                <strong>Post Office : </strong>{{$invoice->post_office}}<br>
                <strong>Original Registration Book : </strong>{{$invoice->reg_book}}<br>
                <strong>Original File : </strong>{{$invoice->reg_file}}<br>
                <strong>Total File Pages : </strong>{{$invoice->file_pg}}<br>
                <strong>Computerized Number Plate : </strong>{{$invoice->no_plate}}<br>
                <strong>Car Color : </strong>{{$invoice->car_color}}<br>
                <strong>Amount (Digits) : </strong>{{$invoice->amount}}<br>
                <strong>Amount (Words) : </strong>{{$invoice->amount_words}}<br>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px" width="50%">
                <strong class="heading">Seller Witness</strong><br><br>
                <strong>Name</strong> : {{ $invoice->w1_name}}<br>
                <strong>Father:</strong> {{$invoice->w1_father}}<br>
                <strong>Phone</strong> : {{ $invoice->w1_phone}}<br>
                <strong>Address</strong> : {{$invoice->w1_address}}
            </td>
            <td style="padding: 10px" width="50%">
                <strong class="heading">Buyer Witness</strong><br><br>
                <strong>Name</strong> : {{ $invoice->w2_name}}<br>
                <strong>Father:</strong> {{$invoice->w2_father}}<br>
                <strong>Phone</strong> : {{ $invoice->w2_phone}}<br>
                <strong>Address</strong> : {{$invoice->w2_address}}
            </td>
        </tr>
        <tr>
            <td style="padding: 10px; text-align:center">
                <strong>Amount</strong>
            </td>
            <td style="padding: 10px; text-align:center">
                <strong style="font-size: 16px">{{number_format($invoice->amount)}} Rs </strong> <br>
                <strong>({{$invoice->amount_words}})</strong>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px;padding-bottom:30px">
                <strong>Seller Signature</strong> : <br>
            </td>
            <td style="padding: 10px;padding-bottom:30px">
                <strong>Buyer Signature</strong> : <br>
            </td>
        </tr>
    </table>

    <footer style="text-align: center;font-size:10px">
        <span>Copyright © 2023-2024. All Rights Reserved.</span> <br>
        <span>Designed & Developed By Moiz Chauhdry</span>
    </footer>
</body>

</html>
