@extends('dashboard.layouts.app')

@push('title')
    Tag List
@endpush

@push('styles')
@endpush

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__content__left">
                            <div class="breadcrumb__title">
                                <h2>Tag List</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tags</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="gallery__area bg-style">
                        <div class="gallery__content">
                            <div class="d-flex justify-content-between mb-4">
                                <h4>All Tags</h4>
                                <a href="{{ route('admin.tag.create') }}" class="btn btn-blue">+ Add New Tag</a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th>SL</th>
                                            <th>Tag Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tags as $key => $tag)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $tag->name }}</td>
                                                <td>{{ $tag->slug }}</td>
                                                <td class="text-center">
                                                    <span
                                                        class="text-white p-2 badge {{ $tag->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                                        {{ ucfirst($tag->status) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2 justify-content-center">
                                                        <a href="{{ route('admin.tag.edit', $tag->id) }}"
                                                            class="btn btn-info btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <form action="{{ route('admin.tag.delete', $tag->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('get')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm delete-confirm">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <div>
                                                <h4 class="text-center">No Tag Found</h4>
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="mt-4">
                                {{ $tags->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.delete-confirm').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "Tag and its relations might be affected!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@endpush
