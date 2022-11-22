@include('layouts.master')
@include('menu')
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balesetek</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="post">
                    <h1>Baleset adatai</h1><br>
                    <label for="nev">Tulajdonos neve: </label>
                    <input type="text" name="nev" id="nev"><br>
                    <label for="tulajdonkez">Tulajdonjog kezdete: </label>
                    <input type="date" name="tulajdonkez" id="tulajdonkez"><br>
                    <label for="tulajdonveg">Tulajdonjog vége: </label>
                    <input type="date" name="tulajdonveg" id="tulajdoonveg"><br>
                    <button type="submit" class="bg-light">Beküldés</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>