@extends('admin_panel.layout.master')
@section('page_title', 'Messages')
@section('messages_menu_active', 'active')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contact messages</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    {{-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                                style="text-decoration: none; ">Dashboard</a></li>
                        <li class="breadcrumb-item active">Messages</li>
                    </ol> --}}
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All messages</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Query Type</th>
                                        <th>subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach ($all_messages as $data)
                                        <tr>
                                            <td>
                                                {{ $sl++ }}
                                            </td>

                                            <td>
                                                {{ $data->name }}
                                            </td>
                                            <td>
                                                <a href="tel:{{ $data->phone }}"
                                                    class="btn btn-link btn-link-primary text-lowercase p-0"
                                                    style="text-decoration: none;color:rgb(0, 0, 0);">{{ $data->phone }}</a>
                                            </td>

                                            <td>
                                                <a href="mailto:{{ $data->email }}"
                                                    class="btn btn-link btn-link-primary text-lowercase p-0"
                                                    style="text-decoration: none;color:rgb(0, 0, 0);">{{ $data->email }}</a>
                                            </td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->type_of_query }}</td>
                                            <td>{{ $data->subject }}</td>
                                            <td>
                                                <span title="{{ $data->message }}"
                                                    class="text-truncate table-truncate d-inline-block">
                                                    {{ $data->message }}</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.messages.destroy', $data->id) }}"
                                                    onclick="return confirm('Are you sure you want to delete?');"
                                                    type="button" class="btn btn-danger btn-sm">

                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach


                                    {{-- </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sl.</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Action</th>

                                    </tr>
                                </tfoot> --}}
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
    @if (Session::has('message'))
        <script>
            var message = {!! json_encode(Session::get('message')) !!};
            toastr.success(message, {
                timeOut: 5000
            });
        </script>
    @endif

@endsection
