<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:0px;
            width:700px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:700px;
        }
        td, tr, th{
            padding:2px;
            border:1px solid #333;
            width:100px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>

@foreach($sales as $SAL)
@if($id == $SAL->Nota_ID)

<body>
    <div class="container">
        <table>
            <caption>
                Invoice 
            </caption>
            <thead>
                <tr>
                    <th colspan="4">Invoice <strong>#{{ $SAL->Nota_ID }}</strong></th>
                    <th>{{ $SAL->Nota_Date }}</th>
                </tr>
                <tr>
                    <td colspan="3">
                        <h4>Office : </h4>
                        <p>Salsa's Penjualan.<br>
                            Jl Sembarang Nomor 100<br>
                            Pasuruan<br>
                            081122223333<br>
                            salsa_penjualan@office.com
                        </p>
                    </td>
                    <td colspan="2">
                        <h4>Customer : </h4>
                        @foreach($customer as $CUS)
                        @if (($SAL->Customer_ID) == ($CUS->Customer_ID))
                        <p>
                        {{ $CUS->First_Name }} {{ $CUS->Last_Name }}<br>
                        {{ $CUS->Phone }}<br>
                        {{ $CUS->Email }} <br>
                        {{ $CUS->Street }} , {{ $CUS->City }}<br>
                        {{ $CUS->State }} , {{ $CUS->Zip_Code }}
                        </p>
                        @endif
                        @endforeach
                    </td>
                </tr>

                <tr>
                    @foreach($user as $USE)
                    @if (($SAL->User_ID) == ($USE->User_ID))
                    <th colspan="4">Employee : <strong> {{ $USE->First_Name }} {{ $USE->Last_Name }}</strong></th>
                    <th>#{{ $USE->User_ID }}</th>
                    @endif
                    @endforeach

                </tr>

            </thead>
            <tbody>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Discount</th>
                    <th>Price</th>
                    <th>Tota Price</th>
                </tr>

                @foreach ($salesdetail as $DET)
                @foreach ($product as $PRO)
                @if ( ($SAL->Nota_ID) == ($DET->Nota_ID) )
                @if ( ($DET->Product_ID) == ($PRO->Product_ID) )

                <tr>
                    <td>{{ $PRO->Product_Name }}</td>
                    <td>{{ $DET->Quantity }}</td>
                    <td>Rp. {{ number_format($DET->Discount) }}</td>
                    <td>Rp. {{ number_format($DET->Selling_Price) }}</td>
                    <td>Rp. {{ number_format($DET->Total_Price) }}</td>
                </tr>
                @endif
                @endif
                @endforeach
                @endforeach                
                
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">Tax</th>
                    <td align="center">10%</td>
                </tr>

                <tr>
                    <th colspan="4">Total Payment</th>
                    <td>Rp {{ number_format($SAL->Total_Payment) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

@endif
@endforeach

</html>