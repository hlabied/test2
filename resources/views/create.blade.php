<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>


  <h3>Create Page</h3>
  <h2>Locale : {{ __('messages.Hello') }}</h2>
</head>
<body>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <form  action="/personnes/add/store" method="post">
  {{ csrf_field() }}

  <label for="">Nom</label>
  <input type="text" name="nom" value=""> <br>

    <label for="">Prenom</label>
    <input type="text" name="prenom" value=""> <br>

      <label for="">Age</label>
      <input type="text" name="age" value=""> <br>


    <button type="submit" name="button">Create Nouveau Personne</button>
  </form>
</body>
</html>