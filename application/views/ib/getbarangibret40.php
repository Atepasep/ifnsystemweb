<div class="container-xl font-kecil">
    <div id="section1" class="d-flex flex-column justify-content-center align-items-center">
        <div class=""><h3>Pilih Asal Data Return Barang</h3></div>
        <div class="form-selectgroup">
            <label class="form-selectgroup-item">
                <input type="radio" name="icons" value="dariinvoice" id="dariinvoice" class="form-selectgroup-input">
                <span class="form-selectgroup-label p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" id="daripo" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-invoice mr-2"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" /><path d="M9 7l1 0" /><path d="M9 13l6 0" /><path d="M13 17l2 0" /></svg>
                    Dari Invoice</span>
            </label>
            <label class="form-selectgroup-item">
                <input type="radio" name="icons" value="daripo" class="form-selectgroup-input" checked>
                <span class="form-selectgroup-label p-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-maximize mr-2"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 8v-2a2 2 0 0 1 2 -2h2" /><path d="M4 16v2a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v2" /><path d="M16 20h2a2 2 0 0 0 2 -2v-2" /></svg>
                    P/O (Free Input)</span>
            </label>
        </div>
        <div class="pt-5 w-100 text-center">
            <hr class="m-1">
            <a href="#" class="btn btn-primary btn-flat" id="next1">Next <i class="fa fa-arrow-right ml-2"></i></a>
        </div>
    </div>
    <div class="row hilang" id="sectionpo">
        <div class="card card-active">
            <div class="card-body p-2">
                <h4 class="mb-2">Form Input</h4>
                <div id="form-cari">
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
                <div id="form-hasilcari" class="hilang">
                    <hr class="m-1">
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">SKU</label>
                        <div class="col mb-1">
                            <input type="text" class="hilang" name="idbarang" id="idbarang">
                            <input type="text" class="hilang" name="po" id="po">
                            <input type="text" class="hilang" name="item" id="item">
                            <input type="text" class="hilang" name="dis" id="dis">
                            <input type="text" class="hilang" name="dln" id="dln">
                            <input type="text" class="hilang" name="identristok" id="identristok">
                            <input type="text" name="sku" id="sku" class="form-control btn-flat font-bold font-kecil" value="" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Spek Barang</label>
                        <div class="col mb-1">
                            <!-- <input type="text" name="spek" id="spek" class="form-control btn-flat font-bold font-kecil" value=""> -->
                            <textarea name="spek" id="spek" class="form-control btn-flat font-kecil"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Color</label>
                        <div class="col mb-1">
                            <input type="text" name="color" id="color" class="form-control btn-flat font-kecil" value="" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Stok/Grade</label>
                        <div class="col mb-1">
                            <select name="stok" id="stok" class="form-control form-select btn-flat font-kecil">
                                <option value="0">Non Grade</option>
                                <option value="1">Grade A</option>
                                <option value="2">Grade B</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">No Bale</label>
                        <div class="col mb-1">
                            <input type="text" name="nobale" id="nobale" class="form-control btn-flat font-kecil" value="">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Satuan</label>
                        <div class="col mb-1">
                            <select name="id_satuan" id="id_satuan" class="form-control form-select btn-flat font-kecil">
                                <option value="">Pilih Satuan</option>
                                <option value="21">Pcs</option>
                                <option value="22">Kgs</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Pcs</label>
                        <div class="col mb-1">
                            <input type="text" name="pcs" id="pcs" class="form-control btn-flat font-bold font-kecil inputangka text-right" value="">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Kgs</label>
                        <div class="col mb-1">
                            <input type="text" name="kgs" id="kgs" class="form-control btn-flat font-bold font-kecil inputangka text-right" value="">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Harga Satuan</label>   
                        <div class="col mb-1">
                            <input type="text" name="harga_satuan" id="harga_satuan" class="form-control btn-flat font-bold font-kecil inputangka text-right" value="">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-3 col-form-label font-kecil font-bold">Keterangan</label>
                        <div class="col mb-1">
                            <input type="text" name="ket" id="ket" class="form-control btn-flat font-bold font-kecil" value="">
                        </div>
                    </div>
                    <hr class="m-1">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-ghost-danger btn-flat" id="resetinputstok">Reset</a>
                        <a href="#" class="btn btn-sm btn-success btn-flat" id="simpaninputstok">Simpan</a>
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
        <div class="text-right mt-1" id="tombolsimpandanrefresh">
            <hr class="m-1 w-100">
            <a href="#" class="btn btn-sm btn-success btn-flat" id="simpandanrefresh">Keluar dan Refresh</a>
        </div>
    </div>
    <div id="sectioninvoice" class="row hilang">
        <input type="text" class="form-control font-kecil hilang" id="id_buyer" name="id_buyer" placeholder="ID Customer" value="<?= $header['id']; ?>">
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
        <div class="card card-active mb-1" id="cariinv">
            <div class="card-body p-2">
                <div class="input-group">
                    <input type="text" class="form-control font-kecil btn-flat text-uppercase" id="keywordinputinvoice" placeholder="Search for Invoice…">
                    <button class="btn btn-blue btn-flat font-kecil" type="button" id="cariinputinvoice">Cari !</button>
                    <button href="#" class="hilang" id="caribarangdouble" data-bs-target="#modal-large" data-bs-toggle="modal" data-title="Pilih">caribarang</button>
                </div>
            </div>
        </div>
        <div class="col-12" id="tabelcariinvoice">
            <div id="table-default" class="table-responsive mb-1">
                <table class="table datatable" id="cobasisip">
                    <thead style="background-color: blue !important">
                        <tr>
                            <th>No </th>
                            <th>Customer</th>
                            <th>Tanggal</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody class="table-tbody" id="body-table-pilihinv" style="font-size: 13px !important;">
                        <tr>
                            <td colspan="4" class="text-center">-- Cari Invoice --</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 hilang" id="tabelinvoice">
            <div id="table-default" class="table-responsive mb-1">
                <table class="table datatable" id="cobasisip">
                    <thead style="background-color: blue !important">
                        <tr>
                            <th>SKU</th>
                            <th>Spec</th>
                            <th>Pcs</th>
                            <th>Kgs</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody class="table-tbody" id="body-table-invoice" style="font-size: 13px !important;">
                        <tr>
                            <td colspan="5" class="text-center">-- Data Kosong --</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr class="m-1">
            <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-ghost-danger btn-flat" id="resetinputinvoice">Reset</a>
                <a href="#" class="btn btn-sm btn-success btn-flat" id="simpaninputinvoice">Simpan</a>
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
                $("#section1").addClass('hilang');
                $("#sectioninvoice").removeClass('hilang');
                $("#keywordinputinvoice").focus();
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
    $("#resetinputstok").click(function(){
        $("#po").val('');
        $("#item").val('');
        $("#dis").val('');
        $("#sku").val('');
        $("#spek").val('');
        $("#color").val('');
        $("#pcs").val('');
        $("#kgs").val('');
        $("#nobale").val('');
        $("#keywordinputstok").val('');
        $("#keywordinputstok").focus();
        $("#form-hasilcari").addClass('hilang');
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
            url: base_url + "ib/adddetailibret",
            data: {
                id: $("#id_header").val(),
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
                $("#resetinputstok").click();
                pesan('Data berhasil di simpan !','info');
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
    $("#keywordinputinvoice").on('keyup', function(e) {
        if (e.key === 'Enter' || e.keyCode === 13) {
            $("#keywordinputinvoice").click();
        }
    });
    $(document).off().on('click','#keywordinputinvoice',function(){
        var isi = $("#keywordinputinvoice").val().trim();
        if(isi==''){
            pesan('keyword harus di isi !','error');
            return false;
        }else{
            if(isi.length >= 4){
                $.ajax({
                    dataType: "json",
                    type: "POST",
                    url: base_url + "ib/cariinvreturn",
                    data: {
                        key: $("#keywordinputinvoice").val(),
                        buy: $("#id_buyer").val()
                    },
                    beforeSend: function(){
                        $("#cariinputinvoice").html('Loading');
                    },
                    success: function(data) {
                        $("#cariinputinvoice").html('Cari!');
                        // if(data.jmlrek == 1){
                        //     alert('Invoice ada !');
                        // }else{
                            // alert('Invoice ada Banyak !');
                            $("#cariinv").addClass('hilang');
                            $("#body-table-pilihinv").html(data.datagroup).show();
                        // }
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
    $(document).on('click','#pilihbr',function(){
        $.ajax({
            dataType: "json",
            type: "POST",
            url: base_url + "ib/carinomorinv",
            data: {
                key: $(this).attr('rel'),
            },
            beforeSend: function(){
                $("#cariinputinv").html('Loading');
            },
            success: function(data) {
                $("#cariinputinv").html('Cari!');
                $("#cariinv").addClass('hilang');
                $("#tabelcariinvoice").addClass('hilang');
                $("#tabelinvoice").removeClass('hilang');
                $("#body-table-invoice").html(data.datagroup).show();
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    })
    $("#resetinputinvoice").click(function(){
        $("#resetinputinvoice").html('Loading ...');
        window.location.href = base_url + "ib/isidokbc/" + $("#id_header").val()+'/1';
    });
    $("#simpaninputinvoice").click(function(){
        var text = [];
        // var text2 = [];
        for (let i = 1; i < 1000; i++) {
            if($("#cekbok"+i).is(":checked")){
                text.push($("#cekbok"+i).attr('rel'));
                // text2.push($("#input"+i).val());
            }
        }
        var idhead = $("#id_header").val();
        if(text.length > 0){
            console.log(text);
            $.ajax({
                dataType: "json",
                type: "POST",
                url: base_url + "ib/simpaninvoicereturn",
                data: {
                    id: $("#id_header").val(),
                    invasal: text,
                },
                beforeSend: function(){
                    $("#simpaninputinvoice").html('Loading ...');
                },
                success: function (data) {
                    // alert(data);
                    // $('#modal-large-loading').modal('hide');
                    // $("#jumlahcif"+iddetail).text(data['cif']);
                    // $("#tomboleditbcasal"+iddetail).removeClass('btn-success');
                    // $("#tomboleditbcasal"+iddetail).addClass('btn-primary');
                    window.location.reload();
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError);
                },
            });
        }
    });
</script>