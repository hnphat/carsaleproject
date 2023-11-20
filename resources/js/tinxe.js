let url_base = window.location.pathname;
let tinXeTable = $('#tinXeTable').DataTable({
    // paging: false,    use to show all data
    responsive: true,
    dom: 'Blfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ],
    ajax: url_base + "/getdata",
    "columnDefs": [ {
        "searchable": false,
        "orderable": false,
        "targets": 0
    } ],
    "order": [
        [ 0, 'desc' ]
    ],
    lengthMenu:  [5, 10, 25, 50, 75, 100 ],
    columns: [
        { "data": null },
        { "data": "name" },
        { "data": "slugName" },
        { "data": "hinhAnh" },
        { "data": "moTa" },
        {   
            "data": null,
            render: function(data, type, row) {                           
                if (row.thuThap) {
                    return "<strong class='text-success'>Có</strong>"
                } else {
                    return "<strong class='text-danger'>Không</strong>"
                }
            } 
        },
        {   
            "data": null,
            render: function(data, type, row) {                           
                if (row.quangCaoRamdom) {
                    return "<strong class='text-success'>Có</strong>"
                } else {
                    return "<strong class='text-danger'>Không</strong>"
                }
            } 
        },
        { "data": "thongSoKyThuat" },
        {
            "data": null,
            render: function(data, type, row) {                           
                return "<button id='getEditTinXe' data-id='"+row.id+"' class='btn btn-success btn-sm'><span class='fa fa-edit'></span></button>" + "&nbsp;" +
                "<button id='deleteTinXe' data-id='"+row.id+"' class='btn btn-warning btn-sm'><span class='fa fa-minus-circle'></span></button>";     
            }
        }
    ]
});
tinXeTable.on('order.dt search.dt', function () {
    tinXeTable.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
        tinXeTable.cell(cell).invalidate('dom');
    } );
} ).draw();

$(document).on('click','#deleteTinXe', function(){
    let id = $(this).data('id');
    let token = $('meta[name="csrf-token"]').attr('content');
    if (confirm("Bạn có chắc muốn xoá?")) {
        $.ajax({
            url: url_base + "/delete",
            type: "post",
            dataType: "json",
            data: {
                "_token": token,
                "id": id
            },
            success: function(response) {   
               Swal.fire("Thông báo", response.message, response.type);
               dongXeTable.ajax.reload();
            },
            error: function(response) {
               Swal.fire("Thông báo", response.responseJSON.message, "error");
            }
        });
    } 
});