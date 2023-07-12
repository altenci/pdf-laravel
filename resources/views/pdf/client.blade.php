<!DOCTYPE html>
<html>
<head>
    <title>Client Summary</title>
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif';
            font-size: 10pt;
        }

        h1 {
            font-size: 22pt;
        }

        table {
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #777;
            padding: 2px;
        }
    </style>
</head>
<body>
    <p style="text-align: center; margin-bottom: 18pt">
        <img src="{{public_path('images/axisbanklogo.png')}}" style="width: 200px;" alt=""> <br>
        {{-- <strong style="font-size: 16pt">MDC Banking, Inc.</strong> <br> --}}
        158-C Ramoy Street, Talipapa<br>
        Caloocan City, Metro Manila <br>
        Tel. No.: (033) 320-5425 · (049) 545-6758
    </p>

    <p style="margin-top: 4px;">
        <strong>Name:</strong> {{ $client->first_name }} {{$client->middle_name}} {{$client->last_name}} <br>
        <strong>Address:</strong> {{ $client->address }} <br>
        <strong>Phone:</strong> {{ $client->phone_number }} <br>
    </p>
    
    <h1 style="margin-bottom: 2px;">Client Summary</h1>
    <hr>

    <table style="width: 100%">
        <thead>
            <tr style="background-color: #efefef">
                <th>Date</th>
                <th>Deposit</th>
                <th>Withdrawal</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="3">Beginning Balance</td>
                <td style="text-align: right">{{number_format($client->initial_deposit,2)}}</td>
            </tr>
            <?php $bal = $client->initial_deposit; ?>
            @foreach($client->transactions as $txn)
            <tr>
                <td>{{$txn->date}}</td>
                <td style="text-align: right">{{$txn->deposit ? number_format($txn->amount, 2): ''}}</td>
                <td style="text-align: right">{{!$txn->deposit ? number_format($txn->amount, 2): ''}}</td>
                <td style="text-align: right">{{ number_format($bal += $txn->deposit ? $txn->amount : (0-$txn->amount), 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>