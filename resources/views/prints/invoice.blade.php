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
            font-size: 10px
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

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
        }

        .border-bottom {
            border-bottom: 1px solid black;
            width: 100%
        }

        .border-none {
            border-bottom: 5px solid white;
        }

        .dynamic {
            padding-left: 10px;
            font-size: 14px
        }

        .border {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="row">
        <div style="float: left">
            <img src="{{asset('images/logo.png')}}" alt="" style="width:100px">
        </div>
        <div style="float: right">
            <table style="font-size:8px">
                <tr>
                    <td class="border" style="padding:5px">DATE</td>
                    <td class="border" style="padding-left:5px; padding-right:15px">{{$invoice->created_at->format('F d,
                        Y')}}</td>
                </tr>
                <tr>
                    <td class="border" style="padding:5px">DAY</td>
                    <td class="border" style="padding-left:5px; padding-right:15px">
                        {{$invoice->created_at->format('l')}}</td>
                </tr>
            </table>
        </div>
    </div>

    <div style="text-align:center">
        <span>PAK MOTORS</span> <br>
        <span>11-H1 Main Sabzazar Lahore. Ph: 042-32186645</span>
        <h2 style="text-transform: uppercase;">SALE RECIEPT</h2>
    </div>

    <div>
        <table>
            <tr>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">I am:</span>
                        <span class="dynamic">{{$invoice->s_name}}</span>
                    </div>
                </td>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Father:</span>
                        <span class="dynamic">{{$invoice->s_father}}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Phone:</span>
                        <span class="dynamic">{{$invoice->s_phone}}</span>
                    </div>
                </td>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">CNIC:</span>
                        <span class="dynamic">{{$invoice->s_cnic}}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px" colspan="2">
                    <div class="border-bottom">
                        <span class="border-none">Permanent Address:</span>
                        <span class="dynamic">{{$invoice->s_address}}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Car Registration #:</span>
                        <span class="dynamic">{{$invoice->reg_no}}</span>
                    </div>
                </td>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Chassis #:</span>
                        <span class="dynamic">{{$invoice->chassis_no}}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Engine #:</span>
                        <span class="dynamic">{{$invoice->engine_no}}</span>
                    </div>
                </td>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Car Color:</span>
                        <span class="dynamic">{{$invoice->car_color}}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Mark:</span>
                        <span class="dynamic">{{$invoice->mark}}</span>
                    </div>
                </td>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Power:</span>
                        <span class="dynamic">{{$invoice->hp}}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Model:</span>
                        <span class="dynamic">{{$invoice->model}}</span>
                    </div>
                </td>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Quota:</span>
                        <span class="dynamic">{{$invoice->kota}}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Post Office:</span>
                        <span class="dynamic">{{$invoice->post_office}}</span>
                    </div>
                </td>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Number Plate:</span>
                        <span class="dynamic">{{$invoice->no_plate}}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px" colspan="2">
                    <div class="border-bottom">
                        <span class="border-none">SPECIAL NOTE:</span>
                        <span class="dynamic">ALL DOCUMENTS GIVEN EXCISE TOKEN COMPLETE - 2023</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">To Mr:</span>
                        <span class="dynamic">{{$invoice->b_name}}</span>
                    </div>
                </td>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Father Name:</span>
                        <span class="dynamic">{{$invoice->b_father}}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Phone:</span>
                        <span class="dynamic">{{$invoice->b_phone}}</span>
                    </div>
                </td>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">CNIC:</span>
                        <span class="dynamic">{{$invoice->b_cnic}}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px" colspan="2">
                    <div class="border-bottom">
                        <span class="border-none">Permanent Address:</span>
                        <span class="dynamic">{{$invoice->b_address}}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Advance(Cheque/Cash):</span>
                        <span class="dynamic">NIL</span>
                    </div>
                </td>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Amount:</span>
                        <span class="dynamic">Rs {{$invoice->amount}}/-</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px">
                    <div class="border-bottom">
                        <span class="border-none">Remaining Amount:</span>
                        <span class="dynamic">NIL</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding:5px" colspan="2">
                    Has received and hand over the vehicle along with all original documents with the buyer, I (seller)
                    will be responsible,
                    if vehicle will be used in any legal activities and offense like theft, shortage of installment’s
                    etc. Instead of
                    showroom. Therefore, the has been written in the presence of the witness to verify at the time of
                    need. Buyer must
                    transfer car registration to their number in 15 days. Otherwise show room will not responsible
                </td>
            </tr>
            <tr>
                <td style="padding:5px" colspan="2"><strong>BUYER AGREEMENT:</strong></td>
            </tr>
            <tr>
                <td style="padding:5px" colspan="2">
                    I am buying this car with consolation and I have received original registration book, original file,
                    and biometric.
                    Seller will be responsible if any discrepancy/fault/fraud will be found in the document instead of
                    the showroom. I shall
                    be responsible from today.
                </td>
            </tr>
        </table>

        <div style="padding:10px">
            <div class="row">
                <div class="column">
                    <h4>SELLER:</h4>
                    <table>
                        <tr>
                            <td class="border" style="padding:5px">SIGNATURE:</td>
                            <td class="border" style="padding-left:150px;padding-bottom:40px"></td>
                        </tr>
                        <tr>
                            <td class="border" style="padding:5px">THUMB:</td>
                            <td class="border" style="padding-left:150px;padding-bottom:65px"></td>
                        </tr>
                        <tr>
                            <td class="border" style="padding:5px">CONTACT:</td>
                            <td class="border" style="padding-left:5px;padding-bottom:5px">{{$invoice->s_phone}}</td>
                        </tr>
                    </table>
                </div>
                <div class="column">
                    <h4>BUYER:</h4>
                    <table>
                        <tr>
                            <td class="border" style="padding:5px">SIGNATURE:</td>
                            <td class="border" style="padding-left:150px;padding-bottom:40px"></td>
                        </tr>
                        <tr>
                            <td class="border" style="padding:5px">THUMB:</td>
                            <td class="border" style="padding-left:150px;padding-bottom:65px"></td>
                        </tr>
                        <tr>
                            <td class="border" style="padding:5px">CONTACT:</td>
                            <td class="border" style="padding-left:5px;padding-bottom:5px">{{$invoice->b_phone}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <h4>SELLER WITNESS:</h4>
                    <table>
                        <tr>
                            <td class="border" style="padding:6px">NAME:</td>
                            <td class="border" style="padding:6px">{{$invoice->w1_name}}</td>
                        </tr>
                        <tr>
                            <td class="border" style="padding:6px">ADDRESS:</td>
                            <td class="border" style="padding:6px">{{$invoice->w1_address}}</td>
                        </tr>
                        <tr>
                            <td class="border" style="padding:6px">CONTACT:</td>
                            <td class="border" style="padding:6px">{{$invoice->w1_phone}}</td>
                        </tr>
                    </table>
                </div>
                <div class="column">
                    <h4>BUYER WITNESS:</h4>
                    <table>
                        <tr>
                            <td class="border" style="padding:6px">NAME:</td>
                            <td class="border" style="padding:6px">{{$invoice->w2_name}}</td>
                        </tr>
                        <tr>
                            <td class="border" style="padding:6px">ADDRESS:</td>
                            <td class="border" style="padding:6px">{{$invoice->w2_address}}</td>
                        </tr>
                        <tr>
                            <td class="border" style="padding:6px">CONTACT:</td>
                            <td class="border" style="padding:6px">{{$invoice->w2_phone}}</td>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
