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
