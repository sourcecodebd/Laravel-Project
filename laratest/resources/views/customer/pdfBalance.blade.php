<div style="background-color:rgba(205, 217, 224, 0.808);">

<h1 style="color: green">Customer Balance Details <br> <div style="color:red">{{ session('username') }}</div> </h1>

    <br><br>
    {{session('msg')}}

    <center>
        <div style="color: red;
                    font-size:30px;
                    font-family: Arial, Helvetica, sans-serif;"><strong><span style="color:darkblue">E</span><span style="color:green">-Pay</span></strong>
        </div>
        <h2 style="font-family: Arial, Helvetica, sans-serif;">All Transactions of last 7 Days</h2>
    </center>
 
    <br><br>

<div style="
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    font-family: Arial, Helvetica, sans-serif;
    font-size:10px;
	border: 2px solid white;
	background-color: white;">

    <table width=100% border="1" style="text-align:center">

        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
            <th>Card Number</th>
            <th>Bank Name</th>
            <th>Added Amount</th>
            <th>Deducted Amount</th>
            <th>Balance</th>
            <th>Created At</th>
            <th>Updated At</th>

        </tr>

            @foreach ($balance as $i)
            <tr>
                <td>{{$i['id']}}</td>
                <td>{{$i->username}}</td>
                <td>{{$i['email']}}</td>
                <td>{{$i['card_no']}}</td>
                <td>{{$i['bank_name']}}</td>
                <td>{{$i['added']}}</td>
                <td>{{$i['transferred']}}</td>
                <td>{{$i['balance']}}</td>
                <td>{{$i['created_at']}}</td>
                <td>{{$i['updated_at']}}</td>
            </tr>
            @endforeach     
    </table>
</div>

<div style="font-family: Arial, Helvetica, sans-serif; margin-left: 620px">
<h3 style="margin:0%"><br>Regards,<br> 
{{session('username')}}</h3>
</div>

<h3 style="color: darkblue; text-align: center"> Home | Customer Balance </h3>
</div>