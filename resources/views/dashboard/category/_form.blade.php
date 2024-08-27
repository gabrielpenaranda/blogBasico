        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title', $category->title) }}">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" value="{{ old('slug', $category->slug) }}">

        