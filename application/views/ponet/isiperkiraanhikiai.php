<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-header d-print-none m-2">
    <div class="container-xl d-flex justify-content-between">
        <h2 class="page-title p-2">
            Isi Perkiraan Produksi
        </h2>
        <div class="col-md-6" style="text-align: right;">
            <a href="<?= base_url().'ponet/jawabhikiai' ?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i><span class="ml-1">Kembali</span></a>
        </div>
    </div>
</div>
<div class="page-body mt-0">
    <div class="container-xl">
        <div class="card">
            <div class="card-body p-2">
                <div class="row">
                    <div class="col-6">
                        <table id="tabelnya" class="table table-hover table-bordered cell-border mt-0 mb-0" style="width: 100% !important; border-collapse: collapse;"> <!-- table order-column table-hover table-bordered cell-border -->
                            <tbody class="table-tbody" id="body-table" style="font-size: 13px !important; width: 100% !important;">
                                <tr>
                                    <td class="font-kecil">Kode/Tgl</td>
                                    <td class="font-kecil"><?= $data['kode'].' ('.tglmysql($data['tgl_hikiai']).') ' ?></td>
                                </tr>
                                <tr>
                                    <td class="font-kecil">Nomor</td>
                                    <td class="font-kecil font-bold"><?= $data['nomor'] ?></td>
                                </tr>
                                <tr>
                                    <td class="font-kecil">Customer</td>
                                    <td class="font-kecil text-green"><?= $data['nama_customer'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <span class="font-kecil text-black font-bold">Jumlah Total Item : <?= rupiah($data['jml_item'],0) ?></span>
                    </div>
                    <div class="col-6">
                        <h5 class="m-0 bg-red-lt p-1"><span class="text-black">Remark</span></h5>
                        <table id="tabelnya" class="table table-hover table-bordered cell-border mt-0 mb-0" style="width: 100% !important; border-collapse: collapse;"> <!-- table order-column table-hover table-bordered cell-border -->
                            <tbody class="table-tbody" id="body-table" style="font-size: 13px !important; width: 100% !important;">
                                <tr>
                                    <td class="font-kecil line-11" style="white-space: pre-line;"><span class="font-bold"><?= $data['remark_1'] ?></span><br><hr class="m-0 mt-1"><span class="font-10"><?= $data['remark_teks_1'] ?></span></td>
                                    <td class="font-kecil line-11" style="white-space: pre-line;"><span class="font-bold"><?= $data['remark_2'] ?></span><br><hr class="m-0 mt-1"><span class="font-10"><?= $data['remark_teks_2'] ?></span></td>
                                    <td class="font-kecil line-11" style="white-space: pre-line;"><span class="font-bold"><?= $data['remark_3'] ?></span><br><hr class="m-0 mt-1"><span class="font-10"><?= $data['remark_teks_3'] ?></span></td>
                                    <td class="font-kecil line-11" style="white-space: pre-line;"><span class="font-bold"><?= $data['remark_4'] ?></span><br><hr class="m-0 mt-1"><span class="font-10"><?= $data['remark_teks_4'] ?></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h5 class="m-0 bg-primary-lt p-1 mt-2"><span class="text-black">Data Detail Hikiai</span></h5>
                <table id="tabelnya" class="table table-hover table-bordered cell-border mt-0 mb-0" style="width: 100% !important; border-collapse: collapse;"> <!-- table order-column table-hover table-bordered cell-border -->
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Spesifikasi</th>
                            <th>Unit</th>
                            <th>Pcs</th>
                            <th>Kgs</th>
                            <!-- <th>Status</th> -->
                            <th>Act</th>
                        </tr>
                    </thead>
                    <tbody class="table-tbody" id="body-table" style="font-size: 13px !important; width: 100% !important;">
                       <?php $jmlrek = 0; $jmlpcs=0; $jmlkgs=0; foreach($datadetail->result_array() as $det): $jmlrek++; $jmlpcs += $det['pcs']; $jmlkgs += $det['kgs']; ?>
                            <tr>
                                <td class="text-center font-bold">#<?= $det['item'] ?></td>
                                <td class=""><?= $det['spesifikasi'] ?></td>
                                <td class=""><?= $det['kodesatuan'] ?></td>
                                <td class="text-end"><?= rupiah($det['pcs'],0) ?></td>
                                <td class="text-end"><?= rupiah($det['kgs'],2) ?></td>
                                <td class="font-kecil text-center">
                                    <a href="#" class="btn btn-sm btn-primary">Tambah Perkiraan</a>
                                </td>
                            </tr>
                            <tr class="font-kecil">
                                <td class="text-end font-bold bg-cyan-lt">Hasil</td>
                                <td class="bg-cyan-lt" colspan="5">
                                    <table class="table table-hover table-bordered cell-border mt-0 mb-0" style="width: 100% !important; border-collapse: collapse;">
                                        <thead>
                                            <tr>
                                                <th>PO</th>
                                                <th>Item</th>
                                                <th>Dis</th>
                                                <th>Pcs</th>
                                                <th>No Machine</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Act</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td>XXX</td>
                                            <td>XXX</td>
                                            <td>XXX</td>
                                            <td>XXX</td>
                                            <td>XXX</td>
                                            <td>XXX</td>
                                            <td>XXX</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>