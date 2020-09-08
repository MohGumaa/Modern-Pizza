@extends ('layouts.layout')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="type">Choose Pizza Type:</label>
            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base">Choose Base Type:</label>
            <select name="base" id="base">
                <option value="chessy crust">Chessy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
            </select>
            <input type="submit" value="Order Pizza">
        </form>
    </div>  
@endsection
