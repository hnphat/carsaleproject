let url_base = window.location.pathname;
let xeTable = $('#xeTable').DataTable({
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
        {   
            "data": null,
            render: function(data, type, row) {                           
                if (row.hinhAnh) {
                   return `<img class='picmini' src='./upload/xe/${row.hinhAnh}' alt='name'/>`;
                } else {
                    return "";
                }
            } 
        },
        { "data": "dongXe" },
        { "data": "loaiXe" },
        { "data": "hopSo" },
        { "data": "nhienLieu" },
        { "data": "choNgoi" },
        { "data": "giaBan" },
        {   
            "data": null,
            render: function(data, type, row) {                           
                return "Xem";
            } 
        },
        {   
            "data": null,
            render: function(data, type, row) {                           
                return "Xe mới";
            } 
        },
        {   
            "data": null,
            render: function(data, type, row) {                           
                return "Khuyến mãi";
            } 
        },
        {   
            "data": null,
            render: function(data, type, row) {                           
                return "Hiển thị";
            } 
        },
        {   
            "data": null,
            render: function(data, type, row) {                           
                return "Vị trí";
            } 
        },
        {
            "data": null,
            render: function(data, type, row) {                           
                return "<button id='getXe' data-id='"+row.id+"' class='btn btn-success btn-sm'><span class='fa fa-edit'></span></button>" + "&nbsp;" +
                "<button id='deleteXe' data-id='"+row.id+"' class='btn btn-warning btn-sm'><span class='fa fa-minus-circle'></span></button>";     
            }
        }
    ]
});
xeTable.on('order.dt search.dt', function () {
    xeTable.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
        xeTable.cell(cell).invalidate('dom');
    } );
} ).draw();

// $("#taoTinXe").click(function(){   
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $("#addTinXeForm").one("submit", submitFormFunction);
//     function submitFormFunction(e) {
//         e.preventDefault();   
//         var formData = new FormData(this);
//         $.ajax({
//             type:'POST',
//             url: url_base + "/post",
//             data: formData,
//             cache: false,
//             contentType: false,
//             processData: false,
//             beforeSend: function () {
//                 $("#taoTinXe").attr('disabled', true).html("Đang thêm mới...");
//             },
//             success: (response) => {
//                 console.log(response);
//                 if (response.code == 200) {
//                     this.reset();
//                     Swal.fire("Thông báo", response.message, response.type);
//                 } else {
//                     Swal.fire("Thông báo", response.message, response.type);
//                 }
//                 $("#taoTinXe").attr('disabled', false).html("Thêm");
//             },
//             error: function(response){
//                 console.log(response);
//                 $("#taoTinXe").attr('disabled', false).html("Thêm");
//             }
//         });
//     }
// });

// $(document).on('click','#deleteTinXe', function(){
//     let id = $(this).data('id');
//     let token = $('meta[name="csrf-token"]').attr('content');
//     if (confirm("Bạn có chắc muốn xoá?")) {
//         $.ajax({
//             url: url_base + "/delete",
//             type: "post",
//             dataType: "json",
//             data: {
//                 "_token": token,
//                 "id": id
//             },
//             success: function(response) {   
//                if (response.code == 200) {
//                 Swal.fire("Thông báo", response.message, response.type);
//                 tinXeTable.ajax.reload();
//                } else {
//                 Swal.fire("Thông báo", response.message, response.type);
//                }
              
//             },
//             error: function(response) {
//                Swal.fire("Thông báo", response.responseJSON.message, "error");
//             }
//         });
//     } 
// });

// $(document).on('click','#getEditTinXe', function(){
//     let idtinxe = $(this).data('id');
//     open(url_base + "/getedit/" + idtinxe,'_blank');
// });

// $("#capNhatTinXe").click(function(){   
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $("#editTinXeForm").one("submit", submitFormFunction);
//     function submitFormFunction(e) {
//         e.preventDefault();   
//         var formData = new FormData(this);
//         $.ajax({
//             type:'POST',
//             url: url_base + "/postedit",
//             data: formData,
//             cache: false,
//             contentType: false,
//             processData: false,
//             beforeSend: function () {
//                 $("#capNhatTinXe").attr('disabled', true).html("Đang cập nhật...");
//             },
//             success: (response) => {
//                 console.log(response);
//                 Swal.fire("Thông báo", response.message, response.type);
//                 $("#capNhatTinXe").attr('disabled', false).html("Cập nhật");
//                 if (response.code == 200) {
//                     setTimeout(() => {
//                         location.reload();
//                     }, 3000);
//                 }
//             },
//             error: function(response){
//                 console.log(response);
//                 $("#capNhatTinXe").attr('disabled', false).html("Cập nhật");
//             }
//         });
//     }
// });