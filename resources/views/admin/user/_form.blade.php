@csrf
<div class="form-group">
  <label for="">nama</label>
  <input type="text" value="{{ old('name', $user->name) }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name">
  @if ($errors->has('name'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('name') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <label for="">deskripsi</label>
  <!-- <input type="text" value="{{ old('deskripsi', $user->deskripsi) }}" class="form-control {{ $errors->has('deskripsi') ? 'is-invalid' : '' }}" name="deskripsi"> -->
  <textarea name="deskripsi" class="form-control {{ $errors->has('deskripsi') ? 'is-invalid' : '' }}" rows="12" placeholder="Textarea">{{ old('deskripsi', $user->deskripsi) }}</textarea>
  @if ($errors->has('deskripsi'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('deskripsi') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <label for="">instagram</label>
  <input type="text" value="{{ old('instagram', $user->instagram) }}" class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" name="instagram">
  @if ($errors->has('instagram'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('instagram') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <label for="">email</label>
  <input type="email" value="{{ old('email', $user->email) }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" {{$user->email ? 'readonly' : ''}}>
  @if ($errors->has('email'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('email') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <label for="">password</label>
  <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password">
  @if ($errors->has('password'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('password') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <label>hak akses</label>
  <select class="form-control" name="type_user">
    <optgroup label="select type">
      <option value="1"@if ($user->type_user == 1)
        selected
      @endif>Administrator</option>
      <option value="0" @if ($user->type_user == 0)
        selected
      @endif>Penulis</option>
    </optgroup>
  </select>
  @if ($errors->has('type_user'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('type_user') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <button class="btn btn-primary btn-block">{{ $buttonText }}</button>
</div>
