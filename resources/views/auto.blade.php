@include('layouts.master')
@include('menu')
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="post">
                    @csrf
                    <h1>Auto adatainak felvétele</h1><br>
                    <label for="rendszam">Rendszám:</label>
                    <input type="text" name="rendszam" id="rendszam"><br>
                    @error('rendszam')
                    <div class="alert alert-danger">
                        {{ $message }}<br>
                    </div>
                    @enderror
                    <label for="tipus">Típus</label>
                    <input type="text" name="tipus" id="tipus"><br>
                    @error('tipus')
                    <div class="alert alert-danger">
                        {{ $message }}<br>
                    </div>
                    @enderror
                    <label for="szin">Szín</label>
                    <input type="text" name="szin" id="szin"><br>
                    @error('szin')
                    <div class="alert alert-danger">
                        {{ $message }}<br>
                    </div>
                    @enderror
                    <button type="submit" class="bg-primary">Beküldés</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>