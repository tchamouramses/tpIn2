<div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Entrez un nom"
        name="name" required>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" aria-describedby="emailHelp"
        placeholder="Entrez un numero de telephone" name="description" required>
</div>
<div class="form-group">
    <label for="filiere_id">Filiere</label>
    <select name="filiere_id" id="filiere_id" class="form-control" required>
        @foreach ($filieres as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>
