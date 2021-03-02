<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Tambah Barang
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_index();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=base_index();?>tambah-barang">Tambah Barang</a></li>
        <li class="active">Tambah Tambah Barang</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-solid box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tambah Tambah Barang</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>

                <div class="box-body">

                    <table class="table table-bordered" id="crud_table">
                        <tr>
                            <th>Item</th>
                            <th>Unit</th>
                            <th>QTY</th>
                            <th>Remarks</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            <td contenteditable="true" class="item_name"></td>
                            <td contenteditable="true" class="item_unit"></td>
                            <td contenteditable="true" class="item_qty"></td>
                            <td contenteditable="true" class="item_remark"></td>
                            <td></td>
                        </tr>
                    </table>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <a class="btn btn-success" href="#" id="tambahbaris" role="button"><i class="fa fa-plus"></i>
                                Tambah Baris</a>
                                <button class="btn btn-primary pull-right" type="button" id="barang_detail"
                            role="button">Simpan</button>
                        </div>

                    </div>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a href="<?=base_index();?>tambah-barang" class="btn btn-warning"><i
                                class="fa fa-step-backward"></i> Kembali</a>
                        
                    </div>
                    <hr>





                </div>
            </div>
        </div>
    </div>

</section><!-- /.content -->
<script>
$(document).ready(function() {

    var count = 1;
    $('#tambahbaris').click(function() {
        count = count + 1;
        var html_code = "<tr id='row" + count + "'>";
        html_code += "<td contenteditable='true' class='item'></td>";
        html_code += "<td contenteditable='true' class='unit'></td>";
        html_code += "<td contenteditable='true' class='qty'></td>";
        html_code += "<td contenteditable='true' class='remark' ></td>";
        html_code += "<td><button type='button' name='remove' data-row='row" + count +
            "' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></button></td>";
        html_code += "</tr>";
        $('#crud_table').append(html_code);
    });

    $(document).on('click', '.remove', function() {
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });

    $("#barang_detail").click(function(event) {
        /*awal insert data detail muatan LTL*/
        var item = [];
        var unit = [];
        var qty = [];
        var remark = [];
        $('.item_name').each(function() {
            item.push($(this).text());
        });
        $('.item_unit').each(function() {
            unit.push($(this).text());
        });
        $('.item_qty').each(function() {
            qty.push($(this).text());
        });
        $('.item_remark').each(function() {
            remark.push($(this).text());
        });
        $.ajax({
            url: "<?=base_admin()?>modul/tambah_barang/tambah_barangaction.php?act=in",
            method: "POST",
            data: {
                item: item,
                unit: unit,
                qty: qty,
                remark: remark
            },
            success: function(data) {
                //alert(data);
                $("td[contentEditable='true']").text("");
                for (var i = 2; i <= count; i++) {
                    $('tr#row' + i + '').remove();
                }
                $('.nav-tabs a[href="#remark"]').tab('show');
            }
        });
        /*akhir insert data detail muatan LTL*/

    });

    $('#unit').select2({
        placeholder: 'Pilih Satuan',
        // language: {
        //     noResults: function() {
        //         return `<button style="width: 100%" type="button"
        //     class="btn btn-primary" 
        //     onClick='tambah()'>+ Tambah</button>
        //     </li>`;
        //     }
        // },
        ajax: {
            url: url,
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: data
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        }
    });
});


    

</script>