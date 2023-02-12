<table class="table table-bordered">
    <thead>
        <tr>
            <th>N°</th>
            <th>First name</th>
            <th>Last name</th>
            <th>email</th>
            <th>Phone Number</th>
            <th>Compagny</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employe)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$employe->firstname}}</td>
            <td>{{$employe->lastname}}</td>
            <td>{{$employe->email}}</td>
            <td>{{$employe->phone}}</td>
            <td>{{$employe->compagny->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>