<div>
    <h2>Listado</h2>

    @foreach ($posts as $p)

        <div class="card card-white mt-2">
            <h3>
                {{ $p->title }}
            </h3>
            <a href="{{ route("blog.show", $p->id) }}">Ir</a>
            <p>{{ $p->description }}</p>
        </div>
    @endforeach

    <br>
    {{ $posts->links() }}
</div>