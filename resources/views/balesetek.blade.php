@include('layouts.master')
@include('menu')
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baleset</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    @csrf
                    <h1>Baleset rogzitese</h1>
                    <label for="balesetido">Baleset ideje: </label>
                    <input type="date" name="balesetido" id="balesetido"><br>
                    @error('balesetido')
                    <div class="alert alert-danger">
                        {{ $message }}<br>
                    </div>
                    @enderror
                    <label for="serules">Baleset leirasa: </label>
                    <textarea type="text" name="serules" id="serules"></textarea><br>
                    @error('serules')
                    <div class="alert alert-danger">
                        {{ $message }}<br>
                    </div>
                    @enderror
                    <button type="submit" class="bg-danger">Beküldés</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>