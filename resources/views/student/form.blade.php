<div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Entrez un nom"
        name="name" required value="{{ $student->name ?? old('name') }}">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrez un email"
        name="email" required value="{{ $student->email ?? old('email') }}">
</div>
<div class="form-group">
    <label for="phone">Telephone</label>
    <input type="text" class="form-control" id="phone" aria-describedby="emailHelp"
        placeholder="Entrez un numero de telephone" name="phone" required
        value="{{ $student->phone ?? old('phone') }}">
</div>
<div class="form-group">
    <label for="birthdate">Date Naissance</label>
    <input type="date" class="form-control" id="birthdate" aria-describedby="emailHelp" placeholder="Date naissance"
        name="birthdate" required value="{{ $student->birthdate ?? old('birthdate') }}">
</div>
<div class="form-group">
    <label for="filiere_id">Filiere</label>
    <select name="filiere_id" id="filiere_id" class="form-control" required>
        @foreach ($filieres as $item)
            <option value="{{ $item->id }}"
                {{ isset($student) && $item->id == $student->filiere_id ? 'selected' : '' }}>
                {{ $item->name }}</option>
        @endforeach
    </select>
</div>
