@extends('base')
@section('contenu')
    <header class="card">
        <a class="button is-primary" href={{ url ('creersujet') }} >Créer un forum</a>
    </header>
  <table>
      <tr>
        <th>Nom Forum</th>
          <th>Dernier message</th>
          <th>Date Dernier message</th>
          <th>Créé par </th>
      </tr>
      @foreach($forums as $forum)
      <tr>
          <td> {{--$forum->titreForum--}}</td>
          <td> {{--$forum->description--}}</td>
          <td> 31/02/2023</td>
          <td> Admin </td>
      </tr>
      @endforeach
  </table>





@endsection
