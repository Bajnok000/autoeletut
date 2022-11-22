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
                <form method="POST">
                    <label for="rendszam">Rendszám:</label>
                    <input type="text" name="rendszam" id="rendszam"><br>
                    <label for="tipus">Típus</label>
                    <input type="text" name="tipus" id="tipus"><br>
                    <label for="szin">Szín</label>
                    <input type="text" name="szin" id="szin"><br>
                    <button type="submit" class="bg-warning">Beküldés</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>