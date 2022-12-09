<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1er projet en AP - </title>
    <link href={{ url ("css/bulma.min.css") }}>
    @yield('css')
</head>

<body>
{{--  L'entete et le pied des pages du forum ( meta donnee, conditions, menu et logo)  --}}
<div class="container">

<img src="img/placeholder.png" alt="Logo du site" class="is-left">
<h1 class="is-right">Le petit forum du Lycée Merleau-Ponty </h1>

</div>

<table class="navbar">
    <tr class="navbar-start">
    <td class="navbar-item is-bordered" ><a href="{{url  ('accueil')}}">Accueil</a></td> {{-- Aller vers l'accueil --}}
    <td class="navbar-item is-bordered"><a href="{{url  ('forum')}}">Forum</a></td> {{-- Aller vers le forum   --}}
    <td class="navbar-item is-bordered"><a href="{{url ('mesforum')}}">Mes Forums</a></td> {{-- Aller vers mes propres forums --}}
    <td class="navbar-item is-bordered"><a href="{{url ('compte')}}">Mon compte</a></td> {{-- Aller vers mon compte --}}
    <td class="navbar-item is-bordered"><a href="{{url ('parametre')}}">Paramétre</a></td> {{-- Aller vers les parametres  --}}
    </tr>
</table>
@yield('contenu')
<br>
<footer>Site crée par Charlie LABAT au sein des projets BTS SIO du Lycée Merleau-Ponty  </footer>
</body>

</html>
