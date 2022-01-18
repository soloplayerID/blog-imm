@csrf
<div class="form-group">
  <label for="">nama kategori</label>
  <input type="text" value="{{ old('name', $tag->name) }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name">
  @if ($errors->has('name'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('name') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <button class="btn btn-primary btn-block">{{ $buttonText }}</button>
</div>
