        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">

        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $post->slug) }}">

        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control">{{ old('content', $post->content)}}</textarea>

        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach ($categories as $title => $id)
                <option {{ $post->category && $post->category_id == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>

        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $post->description) }}</textarea>

        <label for="posted">Posted</label>
        <select name="posted" id="posted" class="form-control">
            <option {{ $post->posted && $post->posted == 'yes' ? 'selected' : '' }} value="yes">Yes</option>
            <option {{ $post->posted && $post->posted == 'not' ? 'selected' : '' }} value="not">Not</option>
        </select>

        @if (isset($task) && $task == 'edit')
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        @endif