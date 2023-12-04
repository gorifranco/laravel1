<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<form method="post" action="{{ route('autors.edit') }}">
    <div class="container mt-5 p-5 border border-black">
        <div class="row">
            <div class="col-md-12">
                <label for="input_nom_autor" class="form-label">Nom de l'autor</label>
                <input type="text" class="form-control" id="input_nom_autor" value="{{$autor -> NOM_AUT}}" name="NOM_AUT" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="input_nom_autor" class="form-label">Nom de l'autor</label>
                <input type="text" class="form-control" id="input_nom_autor" value="{{$autor -> FK_NACIONALITAT}}" required>
            </div>
        </div>
    </div>
    <div class="row text-center"><input type="submit" class="btn btn-primary"></div>
</form>

</body>
</html>
