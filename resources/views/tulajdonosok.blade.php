@include('layouts.master')
@include('menu')
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulajdonosok</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST">
                    @csrf
                    <h1>Tulajdonos adatai</h1>
                    <label for="nev">Tulajdonos neve: </label>
                    <input type="text" name="nev" id="nev"><br>
                    @error('nev')
                    <div class="alert alert-danger">
                        {{ $message }}<br>
                    </div>
                    @enderror
                    <label for="tulajdonkez">Tulajdonjog kezdete: </label>
                    <input type="date" name="tulajdonkez" id="tulajdonkez"><br>
                    @error('tulajdonkez')
                    <div class="alert alert-danger">
                        {{ $message }}<br>
                    </div>
                    @enderror
                    <label for="tulajdonveg">Tulajdonjog vége: </label>
                    <input type="date" name="tulajdonveg" id="tulajdoonveg"><br>
                    @error('tulajdoonveg')
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