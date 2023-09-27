<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailbox</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    @include('partials.admin.navbar')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactMails as $mail)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$mail->name}}</td>
                    <td>{{$mail->email}}</td>
                    <td>{{$mail->subject}}</td>
                    <td>{{$mail->message}}</td>
                </tr>             
            @endforeach
        </tbody>
    </table>
</body>

</html>
