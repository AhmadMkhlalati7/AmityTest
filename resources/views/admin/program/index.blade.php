@extends('layouts.app')
@section('content')
<div class="container mt-5 card">
    <div class="card-body">
    <h2 class="mb-4">Programs Table</h2>
    <a class="btn btn-success mb-3" href="javascript:void(0)" id="createNewProgram"> Create New Program</a>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="programForm" name="programForm" class="form-horizontal">
                   <input type="hidden" name="program_id" id="program_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12 my-2">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10 my-2">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script type="text/javascript">
  $(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('programs.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#createNewProgram').click(function () {
        $('#saveBtn').val("create-program");
        $('#program_id').val('');
        $('#programForm').trigger("reset");
        $('#modelHeading').html("Create New Program");
        $('#ajaxModel').modal('show');
    });

    $('body').on('click', '.editProgram', function () {
      var program_id = $(this).data('id');
      $.get("{{ route('programs.index') }}" +'/' + program_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Program");
          $('#saveBtn').val("edit-program");
          $('#ajaxModel').modal('show');
          $('#program_id').val(data.id);
          $('#name').val(data.name);
      })
   });

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
        $.ajax({
          data: $('#programForm').serialize(),
          url: "{{ route('programs.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {

              $('#programForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
              $('#saveBtn').html('Save Changes');

          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });

    });

    $('body').on('click', '.deleteProgram', function () {

        var program_id = $(this).data("id");
        confirm("Are You sure want to delete !");

        $.ajax({
            type: "DELETE",
            url: "{{ route('programs.store') }}"+'/'+program_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

  });
</script>
@endsection
