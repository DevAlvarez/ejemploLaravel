@csrf

<label for="">Título</label><br><br>
<input class="form-control" type="text" name="title" value="{{ old('title', $category->title) }}"><br><br>

<label for="">Slug</label><br><br>
<input class="form-control" type="text" name="slug" value="{{ old('slug', $category->slug) }}"><br><br>

<button class="btn btn-success mt-3" type="submit">Enviar</button><br><br>
