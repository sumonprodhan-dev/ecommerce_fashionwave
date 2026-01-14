@extends('dashboard.layouts.app')

@section('content')
    <div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>Category List</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Categories</li>
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
                            <h4>All Categories</h4>
                            <a href="{{ url('/admin/category/create') }}" class="btn btn-blue">+ Add New Category</a>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>SL</th>
                                        <th>Icon</th>
                                        <th>Name (EN)</th>
                                        <th>Name (GN)</th>
                                        <th>Slug</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Ekhane Loop hobe (Example deya holo) --}}
                                    @foreach($categories as $key => $category)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/category/'.$category->image) }}" border="0" width="60" height="40" style="object-fit: contain;" alt="brand">
                                        </td>
                                        <td>{{ $category->en_name }}</td>
                                        <td>{{ $category->gn_name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                            
                                            <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete-confirm" ><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
        var form =  $(this).closest("form"); 
        event.preventDefault(); 

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
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