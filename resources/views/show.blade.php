<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Document</title>
</head>
<body>


<h2>Page Index</h2>


<div class="langsection" style="background:#ccc">


  <form class="" action="/language" method="post">

  {{ csrf_field() }}
  <select class="" name="locale">
    <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
    <option value="fr" {{ App::getLocale() == 'fr' ? ' selected' : '' }}>Français</option>
    <input type="submit" name="" value="Choose">

  </select>
  </form>

  <!-- <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown button
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="/lang/en">English</a>
      <a class="dropdown-item" href="/lang/fr">Francais</a>

    </div>
  </div> -->

  </p>
    {{ __('messages.Hello') }}
    <br>
    {{ trans('messages.How are you ?') }}

  </p>


</div>


<a href="/personnes/add">Create Nouveau Personne</a>


<ul>
@foreach($personnes as $personne)
  <li>

<h3>{{ $personne->nom  }}<h3>
<h4>{{ $personne->prenom  }}<h4>
<h5>{{ $personne->age  }}<h5>


  </li>

@endforeach
</ul>


<script src="{{ asset('js/app.js') }}">

</script>
</body>
</html>
