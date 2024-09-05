        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $category->title) }}">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $category->slug) }}">

        