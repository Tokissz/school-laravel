@include('backend.back-header')

<div class="container-fluid px-4">
    <h1 class="mt-4">Post</h1>
    <a href="/create" class="btn btn-md btn-primary">Add new Post</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="show/{{ $post->id }}" class="btn btn-success">Show</a>
                        <a href="edit/{{ $post->id }}" class="btn btn-info">Edit</a>
                        <a href="delete/{{ $post->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</div>
@include('backend.back-script')
