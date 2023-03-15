<div class="row">
    <div class="col-md-12">
        @if (session('messages'))
            <div class="alert alert-success" role="alert">
                {{ session('messages') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Category
                    <a href="{{ route('admin.category.create') }}" class="btn btn-success text-white btn-sm float-end">Add
                        Category</a>
                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <body>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status === '1' ? 'Hidden' : 'Visible' }}</td>
                                <td>
                                    <a href="{{ route('admin.category.edit', ['category_id' => $category->id]) }}"
                                        class="btn btn-sm btn-primary text-white">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger text-white">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </body>
                </table>
                <div>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
