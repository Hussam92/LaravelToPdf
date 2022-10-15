<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Name</th>
        <th>Birthday</th>
        <th>Age</th>

    </tr>
    </thead>
    // table of users with name
    <tbody>
    <!-- laravel table of users with name -->
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->birthday }}</td>
            <td>{{ $user->age }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
