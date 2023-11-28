@extends('admin_panel.layout.master')
@section('page_title', 'Products')
@section('products_menu_active', 'active')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title">Products List</h5>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-info" href="{{ route('admin.products.create') }}"
                                    role="button">Create new</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach ($products as $data)
                                        <tr>
                                            <td>
                                                {{ $sl++ }}
                                            </td>

                                            <td>
                                                {{ $data->name }}
                                            </td>
                                            <td>

                                                @if ($data->image)
                                                    <img src="{{ asset($data->image) }}" class="" alt=""
                                                        height="60">
                                                @endif

                                            </td>
                                            <td>

                                                <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="{{ route('admin.products.edit', $data->id) }}" type="button"
                                                    class="btn btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <a href="{{ route('admin.products.destroy', $data->id) }}"
                                                    onclick="return confirm('Are you sure you want to delete?');"
                                                    type="button" class="btn btn-danger">

                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>

        </div>
        <!-- /.container-fluid -->
    </section>

@endsection

@section('custom_js')
    <script>
        $(function() {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                //   "buttons": ["csv", "excel"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
