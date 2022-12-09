@extends('base')
@section('contenu')
    <form>
    <ul>
        <li>Titre du sujet : <input type="text" alt="Sujet de base"></li>
        <li>1er message :  <textarea class="textarea" alt="BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla"></textarea></li>
        <li>Tag :<input type="text" alt="Test"></li>
        <li>Groupe :
            <select>
                <option></option>
                <option></option>
                <option></option>
                <option></option>

            </select>
        </li>

    </ul>
        <button>Créer le sujet</button>
    </form>




@endsection
