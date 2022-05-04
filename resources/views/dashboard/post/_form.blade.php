@csrf

<label for="">Título</label><br><br>
<input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}"><br><br>

<label for="">Slug</label><br><br>
<input type="text" class="form-control" name="slug" value="{{ old('slug', $post->slug) }}"><br><br>

<label for="">Categoría</label><br><br>
<select class="form-control" name="category_id"><br><br>
    <option value=""></option>
    @foreach ($categories as $title => $id)
        <option {{ old('category_id', "$post->category_id") == $id ? 'selected' : '' }} value="{{ $id }}">
            {{ $title }}</option>
    @endforeach
</select><br><br>

<label for="">Posteado</label><br><br>
<select class="form-control" name="posted">
    <option {{ old('posted', $post->posted) == 'not' ? 'selected' : '' }} value="not">No</option>
    <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">Si</option>
</select><br><br>

<label for="">Contenido</label><br><br>
<textarea class="form-control" name="content"> {{ old('content', $post->content) }}</textarea><br><br>

<label for="">Descripción</label><br><br>
<textarea class="form-control" name="description">{{ old('description', $post->description) }}</textarea><br><br>

@if (isset($task) && $task == 'edit')
    <label for="">Imagen</label>
    <input type="file" name="image">
@endif

<button type="submit" class="btn btn-success mt-3">Enviar</button>
