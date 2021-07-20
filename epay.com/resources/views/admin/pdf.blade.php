<!DOCTYPE html>
<html>
<body>
    <table>
    <div class="card-body">
				<span class="login100-form-title" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
        Customer Profile
					</span>

        <table border="0" style="width: 100%">
        <tr>
            <td>Id</td>
            <td>Username</td>
            <td>Name</td>
            <td>Type</td>
            <td>Action</td>
        </tr>
        <tr><td><br></td></tr>

        @foreach($data as $key=>$cData)
       <tr>
            <td>{{$key+1}}</td>
            <td>{{$cData->userId}}</td>
            <td>{{$cData->username}}</td>
            <td>{{$cData->name}}</td>
            <td>{{$cData->type}}</td>
     
            </tr>
            @endforeach
    </table>
</body>

</html>