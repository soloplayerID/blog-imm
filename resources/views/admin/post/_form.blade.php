@csrf
<div class="form-group">
  <label for="">judul</label>
  <input type="text" value="{{ old('judul', $post->judul) }}" class="form-control {{ $errors->has('judul') ? 'is-invalid' : '' }}" name="judul">
  @if ($errors->has('judul'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('judul') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <label for="">nama kategori</label>
  <select class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}" name="category_id">
    <option hidden>Pilih category</option>
    @foreach ($category as $result)
      <option value="{{$result->id}}"
        @if ($post->category_id == $result->id)
          selected
        @endif
        >{{$result->name}}</option>
    @endforeach
  </select>
  @if ($errors->has('category_id'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('category_id') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <label for="">konten</label>
  <!-- <textarea name="content" id="content" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" rows="12" cols="100">{{ old('content', $post->content) }}</textarea> -->
  <textarea name="content" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}"id="description-textarea" rows="12" placeholder="tulis konten disini">{{ old('content', $post->content) }}</textarea>
  @if ($errors->has('content'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('content') }}</strong>
    </div>
  @endif
</div>
<div class="form-group">
  <label>pilih Tag</label>
  <select class="form-control select2 {{ $errors->has('tag') ? 'is-invalid' : '' }}" name="tag[]" multiple="">
    <option hidden>Pilih category</option>
    @foreach ($tag as $result)
      <option value="{{$result->id}}"
        @foreach ($post->tag as $key)
          @if ($result->id == $key->id)
              selected
          @endif
        @endforeach
        >{{$result->name}}</option>
    @endforeach
  </select>
  @if ($errors->has('tag'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('tag') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <label for="">tumbnail</label><br>
  <small class="text-muted">foto saat ini</small><br>
  @if($post->image)
 <img src="{{asset($post->image)}}" width="96px"/>
 @endif
 <br><br>
  <input type="file" name="image" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}">
  <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
  @if ($errors->has('image'))
    <div class="invalid-feedback">
      <strong>{{ $errors->first('image') }}</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <button class="btn btn-primary btn-block">{{ $buttonText }}</button>
</div>

<script src="https://cdn.tiny.cloud/1/pg3fky343apvcvvf1kmfbj3co3vxw1fvbffzl91m3vurmz2g/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>

tinymce.init({
      selector: '#description-textarea',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      plugins: [
          "advlist autolink lists link image charmap preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code",
          "insertdatetime media save table directionality",
          "paste textpattern"
      ],
      toolbar: "insertfile undo redo | formatselect styleselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | fullscreen code",
      toolbar_mode: 'floating',
    });
</script>
