$(document).ready(function() {
    $('#tableDT').DataTable({
        ordering: true,
        serverSide: true,
        processing: true,
        ajax:{
            'url': $('#table-url').val(),
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '10px', orderable: false, searchable: false},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
});