<div class="container-xl font-kecil">
    <div class="row">
        <input type="text" class="hilang" id="mode" name="mode" value="<?= isset($mode) ? $mode : ''; ?>">
        <div class="col-12">
            <div class="mb-1 row">
                <label class="col-3 col-form-label">Nama Customer</label>
                <div class="col">
                    <div class="col input-group mb-0">
                        <input type="text" class="form-control font-kecil" id="carinamacustomere" name="carinamacustomere" placeholder="Nama Customer">
                        <a href="#" id="carinamacustomerx" class=" btn font-kecil bg-success text-white" type="button">Cari!</a>
                    </div>
                </div>
            </div>
            <hr class="small p-0 m-1">
            <div class="mb-1 row">
                <div id="table-default" class="table-responsive mb-1">
                    <table class="table datatable6 table-hover" id="cobasisip">
                        <thead style="background-color: blue !important">
                            <tr>
                                <th>Nama Customer</th>
                                <th>Alamat</th>
                                <th>Pilih</th>
                            </tr>
                        </thead>
                        <tbody class="table-tbody" id="body-table" style="font-size: 13px !important;">
                            <tr>
                                <td colspan="3" class="text-center">No Data / Cari dahulu data</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer font-kecil">
    <button type="button" class="btn me-auto btn-sm btn-flat btn-danger" id="kosongkancustomer">Kosongkan Customer</button>
    <button type="button" class="btn btn-sm btn-flat text-black" data-bs-dismiss="modal" id="butbatal">Batal</button>
</div>
<script>
    $(document).ready(function() {
        $("#carinamacustomere").focus();
    })
    $("#carinamacustomere").on('keyup', function(e) {
        if (e.key === 'Enter' || e.keyCode === 13) {
            $("#carinamacustomerx").click();
        }
    });
    $("#carinamacustomerx").click(function() {
        if ($("#carinamacustomere").val() == '') {
            pesan('Isi dahulu keyword pencarian customer', 'info');
            return;
        }
        $.ajax({
            dataType: "json",
            type: "POST",
            url: base_url + 'po/getcustomerbyname',
            data: {
                data: $("#carinamacustomere").val(),
            },
            beforeSend: function(data){
                $("#carinamacustomerx").html('Loading..');
            },
            success: function(data) {
                $("#carinamacustomerx").html('Cari!');
                $("#body-table").html(data.datagroup).show();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                $("#carinamacustomerx").html('Cari!');
                console.log(xhr.status);
                console.log(thrownError);
            }
        })
    })
    $(document).on('click', "#pilihcustomer", function() {
        $.ajax({
            dataType: "json",
            type: "POST",
            url: base_url + "ib/updatecustomer",
            data: {
                id: $("#id_header").val(),
                rel: $(this).attr('rel'),
                // ket: $("#catatan").val()
            },
            success: function(data) {
                // alert('berhasil');
                var xid = $("#mode").val();
                var jadi = xid=='' ? 'dataib' : xid;
                window.location.href = base_url + "ib/"+jadi+"/" + $("#id_header").val();
                $("#butbatal").click();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        })
    })
    $("#kosongkancustomer").click(function() {
        $.ajax({
            dataType: "json",
            type: "POST",
            url: base_url + "ib/updatecustomer",
            data: {
                id: $("#id_header").val(),
                rel: 'NULL',
                // ket: $("#catatan").val()
            },
            success: function(data) {
                // alert('berhasil');
                var xid = $("#mode").val();
                var jadi = xid=='' ? 'dataib' : xid;
                window.location.href = base_url + "ib/"+jadi+"/" + $("#id_header").val();
                $("#butbatal").click();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        })
    })
</script>