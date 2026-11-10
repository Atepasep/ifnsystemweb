<div class="container-xl font-kecil">
    <div class="row" id="sectionpo">
        <div class="card card-activex">
            <div class="card-body p-2">
                <h4 class="mb-2">Form Input</h4>
                <div id="form-cari" class="hilang">
                    <hr class="m-1">
                    <div class="d-flex justify-content-between m-2 hilang">
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="cariidbarang" name="radios-filter">
                            <span class="form-check-label font-kecil font-bold">ID Barang</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="caripo" name="radios-filter">
                            <span class="form-check-label font-kecil font-bold">PO / Insno</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="carispek" name="radios-filter">
                            <span class="form-check-label font-kecil font-bold">Spek Barang</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="carinobale" name="radios-filter">
                            <span class="form-check-label font-kecil font-bold">Bale</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="carinobc" name="radios-filter">
                            <span class="form-check-label font-kecil font-bold">Nomor BC</span>
                        </label>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control font-kecil btn-flat text-uppercase" id="keywordinputstok" placeholder="Search for P/O…">
                        <button class="btn btn-blue btn-flat font-kecil" type="button" id="cariinputstok">Cari !</button>
                        <button href="#" class="hilang" id="caribarangdouble" data-bs-target="#modal-large" data-bs-toggle="modal" data-title="Pilih">caribarang</button>
                    </div>
                </div>
                <div id="form-hasilcari" class="">
                    <hr class="m-1">
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">SKU</label>
                        <div class="col mb-1">
                            <input type="text" class="hilang" name="idbarang" id="idbarang" value="<?= $datadetail['id_barang'] ?>">
                            <input type="text" class="hilang" name="po" id="po" value="<?= $datadetail['po'] ?>">
                            <input type="text" class="hilang" name="item" id="item" value="<?= $datadetail['item'] ?>">
                            <input type="text" class="hilang" name="dis" id="dis" value="<?= $datadetail['dis'] ?>">
                            <input type="text" class="hilang" name="dln" id="dln">
                            <input type="text" class="hilang" name="identristok" id="identristok" value="<?= $datadetail['id']  ?>">
                            <input type="text" name="sku" id="sku" class="form-control btn-flat font-bold font-kecil" value="<?= $datadetail['sku'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Spek Barang</label>
                        <div class="col mb-1">
                            <!-- <input type="text" name="spek" id="spek" class="form-control btn-flat font-bold font-kecil" value=""> -->
                            <textarea name="spek" id="spek" class="form-control btn-flat font-kecil"><?= $datadetail['spekpo'] ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Color</label>
                        <div class="col mb-1">
                            <input type="text" name="color" id="color" class="form-control btn-flat font-kecil" value="<?= $datadetail['color'] ?>" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Stok/Grade</label>
                        <div class="col mb-1">
                            <select name="stok" id="stok" class="form-control form-select btn-flat font-kecil">
                                <option value="0" <?= $datadetail['stok']=='0' ? 'selected' : ''; ?>>Non Grade</option>
                                <option value="1" <?= $datadetail['stok']=='1' ? 'selected' : ''; ?>>Grade A</option>
                                <option value="2" <?= $datadetail['stok']=='2' ? 'selected' : ''; ?>>Grade B</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">No Bale</label>
                        <div class="col mb-1">
                            <input type="text" name="nobale" id="nobale" class="form-control btn-flat font-kecil" value="<?= $datadetail['nobale'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Satuan</label>
                        <div class="col mb-1">
                            <select name="id_satuan" id="id_satuan" class="form-control form-select btn-flat font-kecil">
                                <option value="">Pilih Satuan</option>
                                <option value="21" <?= $datadetail['id_satuan']==21 ? 'selected' : ''; ?>>Pcs</option>
                                <option value="22" <?= $datadetail['id_satuan']==22 ? 'selected' : ''; ?>>Kgs</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Pcs</label>
                        <div class="col mb-1">
                            <input type="text" name="pcs" id="pcs" class="form-control btn-flat font-bold font-kecil inputangka text-right" value="<?= rupiah($datadetail['pcs'],2) ?>">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Kgs</label>
                        <div class="col mb-1">
                            <input type="text" name="kgs" id="kgs" class="form-control btn-flat font-bold font-kecil inputangka text-right" value="<?= rupiah($datadetail['kgs'],2) ?>">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Harga Satuan</label>   
                        <div class="col mb-1">
                            <input type="text" name="harga_satuan" id="harga_satuan" class="form-control btn-flat font-bold font-kecil inputangka text-right" value="<?= rupiah($datadetail['harga_satuan'],2) ?>">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Keterangan</label>
                        <div class="col mb-1">
                            <input type="text" name="ket" id="ket" class="form-control btn-flat font-bold font-kecil" value="<?= $datadetail['keterangan'] ?>">
                        </div>
                    </div>
                    <hr class="m-1">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-danger btn-ghost-danger btn-flat" data-dismiss="modal" id="keluarmodal">Batal</a>
                        <a href="#" class="btn btn-sm btn-success btn-flat" id="simpaninputstok">Simpan & Refresh</a>
                        <a href="#" class="btn btn-sm btn-info btn-flat hilang" id="updateinputstok">Update</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="table-caripo" class="table-responsive my-2 mb-3 hilang">
            <table class="table datatable table-hover" id="cobasisip">
                <thead style="background-color: blue !important">
                    <tr>
                        <th>SKU</th>
                        <th>Spek Barang</th>
                        <th>Bale No</th>
                        <th>Kgs</th>
                        <th>Ket</th>
                    </tr>
                </thead>
                <tbody class="table-tbody" id="body-tabledet" style="font-size: 13px !important;">
                </tbody>
            </table>
        </div>
        <div class="text-right mt-1 hilang" id="tombolsimpandanrefresh">
            <hr class="m-1 w-100">
            <a href="#" class="btn btn-sm btn-success btn-flat" id="simpandanrefresh">Keluar dan Refresh</a>
        </div>
    </div>

    <div id="sectioninvoice" class="row hilang">
        <div class="row mt-1 mb-1">
            <label class="col-4 col-form-label font-bold">Nama Pemasok</label>
            <div class="col">
                <input type="text" class="form-control font-kecil"aria-label="Text input with dropdown" placeholder="Nama Customer" value="<?= $header['nama_customer']; ?>">
            </div>

        </div>
        <div class="row mb-1">
            <label class="col-4 col-form-label font-bold">Alamat</label>
            <div class="col">
                <textarea class="form-control font-kecil"><?= $header['alamat']; ?></textarea>
            </div>
        </div>
        <div class="col-12">
            <div id="table-default" class="table-responsive mb-1">
                <table class="table datatable" id="cobasisip">
                    <thead style="background-color: blue !important">
                        <tr>
                            <th>No PO</th>
                            <th>Nama Barang</th>
                            <th>PO Qty</th>
                            <th>PO Terima</th>
                            <th>Sisa</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody class="table-tbody" id="body-table" style="font-size: 13px !important;">
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer font-kecil hilang">
    <a href="#" class="btn btn-sm btn-primary" id="simpanbarang">Simpan Barang</a>
</div>
<script>
    $(".inputangka").on("change click keyup input paste", function (event) {
        $(this).val(function (index, value) {
            return value
                .replace(/(?!\.)\D/g, "")
                .replace(/(?<=\..*)\./g, "")
                .replace(/(?<=\.\d\d).*/g, "")
                .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                .replace(/(?<=\..*)\,/g, "");
        });
    });
    $("#next1").click(function(){
        var selectedValue = $('input[name="icons"]:checked').val();
        if (selectedValue) {
            if(selectedValue=='daripo'){
                $("#section1").addClass('hilang');
                $("#sectionpo").removeClass('hilang');
                $("#keywordinputstok").focus();
            }else{
                // $("#section1").addClass('hilang');
                // $("#sectioninvoice").removeClass('hilang');
                pesan('Fasilitas belum ada !','info');
                return false;
            }
        } else {
            alert("Pilih Salah Satu");
        }
    });
     $("#keywordinputstok").on('keyup', function(e) {
        if (e.key === 'Enter' || e.keyCode === 13) {
            $("#cariinputstok").click();
        }
    });
    $("#simpandanrefresh").click(function(){
        $("#simpandanrefresh").html('Loading ...');
        window.location.href = base_url + "ib/isidokbc/" + $("#id_header").val()+'/1';
    });
    $(document).off().on('click','#cariinputstok',function(){
        var isi = $("#keywordinputstok").val().trim();
        if(isi==''){
            pesan('keyword harus di isi !','error');
            return false;
        }else{
            if(isi.length >= 4){
                $.ajax({
                    dataType: "json",
                    type: "POST",
                    url: base_url + "ib/cariporeturn",
                    data: {
                        key: $("#keywordinputstok").val()
                    },
                    beforeSend: function(){
                        $("#cariinputstok").html('Loading');
                    },
                    success: function(data) {
                        $("#cariinputstok").html('Cari!');
                        if(data.jmlrek == 1){
                            $("#form-hasilcari").removeClass('hilang');
                            $("#po").val(data.datagroup['po']);
                            $("#item").val(data.datagroup['item']);
                            $("#dis").val(data.datagroup['dis']);
                            $("#sku").val(data.datagroup['sku']);
                            $("#spek").val(data.datagroup['spek']);
                            $("#color").val(data.datagroup['color']);
                        }else{
                            $("#table-caripo").removeClass('hilang');
                            $("#body-tabledet").html(data.datagroup).show();
                        }
                        // window.location.href = base_url + "ib/dataib/" + $("#id_header").val();
                        // $("#butbatal").click();
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });
            }else{
                pesan('Keyword minimal 4 huruf atau lebih','info');
                return false;
            }
        }
    })
    $("#keluarmodal").click(function(){
        $('#modal-large').modal('hide');
    })
    $("#simpaninputstok").click(function(){
        // alert($("#id_header").val());
        if($("#po").val()==''){
            pesan('Pilih data PO dahulu !','info');
            return false;
        }
        if($("#id_satuan").val()==''){
            pesan('Pilih Satuan dahulu !','info');
            return false;
        }
        // if($("#nobale").val()==''){
        //     pesan('Nomor Bale Harus di Isi !','info');
        //     return false;
        // }
        if($("#pcs").val()=='' || $("#kgs").val()==''){
            pesan('Pcs/Kgs Harus di Isi !','info');
            return false;
        }
        $.ajax({
            dataType: "json",
            type: "POST",
            url: base_url + "ib/editdetailibret",
            data: {
                id: $("#id_header").val(),
                iddet: $("#identristok").val(),
                po: $("#po").val(),
                item: $("#item").val(),
                dis: $("#dis").val(),
                id_satuan: $("#id_satuan").val(),
                nobale: $("#nobale").val(),
                stok: $("#stok").val(),
                pcs: $("#pcs").val(),
                kgs: $("#kgs").val(),
                harga_satuan: $("#harga_satuan").val(),
                keterangan: $("#ket").val()   
            },
            success: function(data) {
                // alert('berhasil');
                $("#keluarmodal").click();
                pesan('Data berhasil di Update !','info');
                // window.location.href = base_url + "ib/isidokbc/" + $("#id_header").val()+'/1';
                // $("#butbatal").click();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        })
    })
    $(document).on('click','#pilihpo',function(){
        $.ajax({
            dataType: "json",
            type: "POST",
            url: base_url + "ib/cariporeturndis",
            data: {
                po: $(this).attr('rel'),
                item: $(this).attr('rel2'),
                dis: $(this).attr('rel3'),
            },
            beforeSend: function(){
                $("#cariinputstok").html('Loading');
            },
            success: function(data) {
                $("#cariinputstok").html('Cari!');
                if(data.jmlrek == 1){
                    $("#form-hasilcari").removeClass('hilang');
                    $("#po").val(data.datagroup['po']);
                    $("#item").val(data.datagroup['item']);
                    $("#dis").val(data.datagroup['dis']);
                    $("#sku").val(data.datagroup['sku']);
                    $("#spek").val(data.datagroup['spek']);
                    $("#color").val(data.datagroup['color']);
                }else{
                    $("#body-tabledet").html(data.datagroup).show();
                }
                $("#table-caripo").addClass('hilang');
                // window.location.href = base_url + "ib/dataib/" + $("#id_header").val();
                // $("#butbatal").click();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    })
    $("#simpanbarang").click(function(){
        var text = [];
        for (let i = 1; i < 1000; i++) {
            if($("#cekbok"+i).is(":checked")){
                text.push($("#cekbok"+i).attr('rel'));
            }
        }
        if(text.length > 0){
            $.ajax({
                dataType: "json",
                type: "POST",
                url: base_url + "ib/adddetailibret",
                data: {
                    id: $("#id_header").val(),
                    po: $("#po").val(),
                    item: $("#item").val(),
                    dis: $("#dis").val(),
                    id_satuan: 22,
                    nobale: $("#nobale").val(),
                    stok: $("#stok").val(),
                    pcs: $("#pcs").val(),
                    kgs: $("#kgs").val(),
                    keterangan: $("#ket").val()
                },
                success: function(data) {
                    // alert('berhasil');
                    window.location.href = base_url + "ib/dataibret40/" + $("#id_header").val();
                    // $("#butbatal").click();
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError);
                }
            })
        }else{
            pesan('Tidak ada data yang dipilih','info');
            window.location.reload();
        }
    })
</script>