@extends('layouts.backend')
@section('css_after')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
@endsection

@section('content')

<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">team</h3>
            <a href="{{ route('team.create') }}" class="btn btn-sm btn-outline-secondary">
                Add team
            </a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full fs-sm" id="team">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Designation</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
    <!-- END Dynamic Table Full -->

    <!-- END Dynamic Table with Export Buttons -->

@endsection
@section('js_after')
<script>
    $(document).ready(function() {
        $('#team').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "{{ route('team.index') }}",
                "type": "GET",
                "dataType": "json",
                "beforeSend": function(request){
                    request.setRequestHeader("Accept","application/json")
                    request.setRequestHeader("Content-Type","application/json")
                }
            },
            "columns": [{
                    "data": "name"
                },
                {
                    "data": "image"
                },
                {
                    "data": "designation"
                },
                {
                    "data": "description"
                },
                {
                    "data": "action"
                },
            ]
        });
    });
</script>
@endsection