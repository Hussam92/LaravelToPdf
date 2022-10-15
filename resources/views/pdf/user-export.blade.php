<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<table class="table table-bordered">
    <thead>
    <tr>
        <td><b>Name</b></td>
        <td><b>E-Mail</b></td>
        <td><b>Registered at</b></td>
        <td><b>E-mail validated at</b></td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            {{$name}}
        </td>
        <td>
            {{$email}}
        </td>
        <td>
            {{$created_at}}
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
