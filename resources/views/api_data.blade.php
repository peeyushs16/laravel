<h2>API Data</h2>
<br/>
<br/>
<br/>
<br/>

<table border="1" cellspacing="1" cellpadding="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Avtar</th>
        </tr>
</thead>
<tbody>
    @foreach($collection as $user)
        <tr>
            <th>{{$user['id']}}</th>
            <th>{{$user['first_name']}}</th>
            <th>{{$user['email']}}</th>
            <th><img src="{{$user['avatar']}}" /></th>
        </tr>
    @endforeach
</tbody>
</table>