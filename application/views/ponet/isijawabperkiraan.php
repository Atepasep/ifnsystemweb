<div class="container-xl">
    <input type="text" class="hilang" name="id_hikiai" id="id_hikiai" value="<?= $id_hikiai ?>">
    <input type="text" class="hilang" name="id_hikiai_detail" id="id_hikiai_detail" value="<?= $id_hikiai_detail ?>">
    <div class="row mt-1">
        <label class="col-4 col-form-label">PO</label>
        <div class="col">
            <input type="text" name="po" id="po" class="form-control font-kecil">
        </div>
    </div>
    <div class="row mt-1">
        <label class="col-4 col-form-label">Item</label>
        <div class="col">
            <input type="text" name="item" id="item" class="form-control font-kecil">
        </div>
    </div>
    <div class="row mt-1">
        <label class="col-4 col-form-label">Dis</label>
        <div class="col">
            <input type="text" name="dis" id="dis" class="form-control font-kecil">
        </div>
    </div>
    <div class="row mt-1">
        <label class="col-4 col-form-label">Instruksi No</label>
        <div class="col">
            <input type="text" name="insno" id="insno" class="form-control font-kecil">
        </div>
    </div>
    <div class="row mt-1">
        <label class="col-4 col-form-label">Pcs</label>
        <div class="col">
            <input type="text" name="pcs" id="pcs" class="form-control font-kecil inputangka text-end">
        </div>
    </div>
    <div class="row mt-1">
        <label class="col-4 col-form-label">Kgs (hitung PONET)</label>
        <div class="col">
            <input type="text" name="kgs" id="kgs" class="form-control font-kecil inputangka text-end">
        </div>
    </div>
    <div class="row mt-1">
        <label class="col-4 col-form-label">Mach Net</label>
        <div class="col">
            <select name="machno" id="machno" class="form-control form-select font-kecil">
                <option value="">-- Pilih Mesin --</option>
                <?php foreach($datamesin->result_array() as $msn): ?>
                    <option value="<?= $msn['mach_no'] ?>"><?= $msn['mach_no'].' -'.$msn['specifik'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="row mt-1">
        <label class="col-4 col-form-label">Tgl Produksi Net (Estimasi)</label>
        <div class="col">
            <div class="input-icon mb-2">
                <input class="form-control font-kecil" placeholder="Pilih Tanggal" id="tgl_mulai" value="<?= date('d-m-Y') ?>" readonly/>
                <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                </span>
            </div>
        </div>
        <div class="col">
            <div class="input-icon mb-2">
                <input class="form-control font-kecil" placeholder="Pilih Tanggal" id="tgl_akhir" value="<?= date('d-m-Y') ?>" readonly/>
                <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                </span>
            </div>
        </div>
    </div>
    <div class="row mt-1">
        <label class="col-4 col-form-label">Tgl FN - Gudang (Estimasi)</label>
        <div class="col">
            <div class="input-icon mb-2">
                <input class="form-control font-kecil" placeholder="Pilih Tanggal" id="tgl_kirim_gudang" value="<?= date('d-m-Y') ?>" readonly/>
                <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" /><path d="M16 3v4" /><path d="M8 3v4" /><path d="M4 11h16" /><path d="M11 15h1" /><path d="M12 15v3" /></svg>
                </span>
            </div>
        </div>
        <div class="col">
            
        </div>
    </div>
    <hr class="m-1">
    <div class="text-end">
        <a href="#" class="btn btn-sm btn-primary" id="simpanjawab">Simpan</a>
        <a href="#" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Batal</a>
    </div>
</div>
<script>
    const picker = new Litepicker({
        element: $('#tgl_mulai')[0], // Extract the raw DOM element from jQuery object
        // singleMode: false,
        numberOfMonths: 1,
        numberOfColumns: 1,
        format: 'DD-MM-YYYY',
        buttonText: {
    			previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                    nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
                },
        setup: (picker) => {
            picker.on('before:show', () => {
            // Wait for next tick to let Litepicker compute default absolute position
            setTimeout(() => {
                const ui = picker.ui;
                const inputHeight = picker.triggerElement.offsetHeight;
                const pickerHeight = ui.offsetHeight;
                
                // Parse current top and subtract heights to move it above the input
                let currentTop = parseInt(ui.style.top, 10) || 0;
                ui.style.top = `${currentTop - pickerHeight - inputHeight - 8}px`; // 8px for extra spacing
            }, 0);
            });
        }
    });
    const pickero = new Litepicker({
        element: $('#tgl_akhir')[0], // Extract the raw DOM element from jQuery object
        // singleMode: false,
        numberOfMonths: 1,
        numberOfColumns: 1,
        format: 'DD-MM-YYYY',
        buttonText: {
    			previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                    nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
                },
        setup: (pickero) => {
            pickero.on('before:show', () => {
            // Wait for next tick to let Litepicker compute default absolute position
            setTimeout(() => {
                const ui = pickero.ui;
                const inputHeight = pickero.triggerElement.offsetHeight;
                const pickerHeight = ui.offsetHeight;
                
                // Parse current top and subtract heights to move it above the input
                let currentTop = parseInt(ui.style.top, 10) || 0;
                ui.style.top = `${currentTop - pickerHeight - inputHeight - 8}px`; // 8px for extra spacing
            }, 0);
            });
        }
    });
    const pickers = new Litepicker({
        element: $('#tgl_kirim_gudang')[0], // Extract the raw DOM element from jQuery object
        // singleMode: false,
        numberOfMonths: 1,
        numberOfColumns: 1,
        format: 'DD-MM-YYYY',
        buttonText: {
    			previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                    nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
                },
        setup: (pickers) => {
            pickers.on('before:show', () => {
            // Wait for next tick to let Litepicker compute default absolute position
            setTimeout(() => {
                const ui = pickers.ui;
                const inputHeight = pickers.triggerElement.offsetHeight;
                const pickerHeight = ui.offsetHeight;
                
                // Parse current top and subtract heights to move it above the input
                let currentTop = parseInt(ui.style.top, 10) || 0;
                ui.style.top = `${currentTop - pickerHeight - inputHeight - 8}px`; // 8px for extra spacing
            }, 0);
            });
        }
    });
    $("#simpanjawab").click(function(){
        if($("#po").val()==''){
            alert('PO Harus di isi !');
            return false;
        }
        if($("#item").val()==''){
            alert('Item Harus di isi !');
            return false;
        }
        if($("#pcs").val()=='' || $("#pcs").val()=='0' || $("#pcs").val()=='-'){
            alert('Pcs Harus di isi !');
            return false;
        }
        if($("#kgs").val()=='' || $("#kgs").val()=='0' || $("#kgs").val()=='-'){
            alert('Kgs Harus di isi !');
            return false;
        }
        if($("#machno").val()==''){
            alert('Mesin harus di isi !');
            return false;
        }
        $.ajax({
            type: "POST",
            url: base_url + "ponet/simpanjawabperkiraan",
            data: {
                idhik: $("#id_hikiai").val(),
                idhikdet: $("#id_hikiai_detail").val(),
                po: $("#po").val(),
                item: $("#item").val(),
                dis: $("#dis").val(),
                insno: $("#insno").val(),
                pcs: $("#pcs").val(),
                kgs: $("#kgs").val(),
                machno: $("#machno").val(),
                tgl_mulai: $("#tgl_mulai").val(),
                tgl_akhir: $("#tgl_akhir").val(),
                tgl_gudang: $("#tgl_kirim_gudang").val()
            },
            success: function (data) {
                window.location.href = base_url+'ponet/isiperkiraanhikiai/'+$("#id_hikiai").val();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            },
        });
    })
</script>