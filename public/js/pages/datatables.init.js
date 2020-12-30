$(document).ready(function () {
    $("#datatable").DataTable(), $("#datatable-buttons").DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "colvis"]
    }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")
});

$(document).ready(function () {
    $('.datatablesortid').DataTable({
        "order": [
            [0, "desc"]
        ],
        "columnDefs": [{
            "targets": [0],
            "visible": false,
            "searchable": false
        }]
    });
});

$(document).ready(function () {
    $('.datatablesdash').DataTable({
        "paging": false,
        "bFilter": false,
        "info": false
    });
});
