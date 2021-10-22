<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
</head>
<body style="width: 50%; margin: 0 auto">



<form action="{{ route('pin_policy.store_pin') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="setPin">Set Pin</label>
        <input type="text" class="form-control" name="pin" id="setPin">
    </div>


    <div class="form-group">
        <label for="setPinConfirmation">Retype Pin</label>
        <input type="text" class="form-control" name="pin_confirmation" id="setPinConfirmation">
    </div>

    <button type="submit">Submit</button>

</form>
</body>
</html>
