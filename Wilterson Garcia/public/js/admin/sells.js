$(document).ready(function () {
    $('#sells-table').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false,

        "language": {
            "url": 'https://cdn.datatables.net/plug-ins/1.10.15/i18n/Portuguese.json'
        },

        columnDefs: [
            {targets: 0, orderable: false},
            {targets: 1, orderable: false},
            {targets: 2, orderable: false},
            {targets: 3, orderable: false},
            {targets: 4, orderable: false}
        ]
    });
});
