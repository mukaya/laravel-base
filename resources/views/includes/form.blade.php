@csrf
<div class="form-group">
<input type="text" class="form-control" name="name" id="name" placeholder="Your name" value="{{old('name') ?? $client->name}}"/>
</div>
@error('name')
<div class="alert alert-danger">
    {{ $errors->first('name')}}
</div>
@enderror
<div class="form-group">
    <input type="email" class="form-control" name="email" id="email" placeholder="Your email" value="{{old('email') ?? $client->email}}"/>
</div>
@error('email')
    <div class="alert alert-danger">
        {{$errors->first('email')}}
    </div>
@enderror
<div class="from-group">
    <select class="custom-select" name="status">
        <option selected>Le status du client</option>
        <option value="1">Actif</option>
        <option value="2">Inactif</option>
      </select>
</div><br/>
<div class="from-group">
    <select class="custom-select" name="entreprise_id">
            <option selected>Le nom de votre entreprise</option>
        @foreach ($entreprises as $entreprise)
            <option value="{{$entreprise->id}}">{{$entreprise->name}}</option>
        @endforeach
      </select>
</div><br/>
