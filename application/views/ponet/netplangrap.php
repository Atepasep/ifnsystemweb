<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-header d-print-none m-2">
    <div class="container-xl d-flex justify-content-between">
        <h2 class="page-title p-2">
            NET PLANNING
        </h2>
        <div class="col-md-6" style="text-align: right;">
            <a href="<?= base_url().'ponet/view/'.$this->uri->segment(3) ?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i><span class="ml-1">Kembali</span></a>
        </div>
    </div>
</div>
<div class="page-body mt-0">
    <div class="container-xl">
        <div class="card">
            <div class="card-body p-2">
                <div class="row">
                    <div class="col-12">
                        <div class="card btn-flat">
                            <div class="card-body p-2">
                                <h3 class="mb-1">Machine Info</h3>
                                <hr class="m-0">
                                <div class="row">
                                    <input type="text" class="hilang" id="nomormesin" name="nomormesin" value="<?= $this->uri->segment(4) ?>">
                                    <input type="text" class="hilang" id="kodeponet" name="kodeponet" value="<?= $this->uri->segment(3) ?>">
                                    <input type="text" class="hilang" id="minid" name="minid" value="<?= $maxrek['minid'] ?>">
                                    <input type="text" class="hilang" id="maxid" name="maxid" value="<?= $maxrek['maxid'] ?>">
                                    <?php $lokasi = isset($data['lokasi']) ? substr($data['lokasi'],0,3) : '';  ?>
                                    <div class="col-1 text-center">
                                        <div class="bg-red-lt mb-1 mt-1"><?= $lokasi ?></div>
                                        <input type="text" id="captnomormesin" class="form-control text-center font-bold" style="font-size: 17px;" value="<?= $this->uri->segment(4) ?>">
                                    </div>
                                    <div class="col-4">
                                        <table class="table table-bordered m-0 mt-1 mb-1">
                                            <thead class="bg-primary-lt">
                                                <!-- <tr>
                                                    <th class="text-center text-black" colspan="2"></th>
                                                </tr> -->
                                            </thead>
                                            <tbody class="table-tbody">
                                                <tr>
                                                    <td class="font-kecil">Spek</td>
                                                    <?php $machname = isset($data['mach_name']) ? $data['mach_name'] : '';  ?>
                                                    <td class="font-kecil"><?= $machname ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-kecil">Kode </td>
                                                    <?php $kodefix = isset($data['kode_fix']) ? $data['kode_fix'] : '';  ?>
                                                    <td class="font-kecil"><?= $kodefix ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-kecil">Model </td>
                                                    <?php $model = isset($data['model']) ? $data['model'] : '';  ?>
                                                    <td class="font-kecil"><?= $model ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-kecil">Seri </td>
                                                    <?php $serial = isset($data['serial']) ? $data['serial'] : '';  ?>
                                                    <td class="font-kecil"><?= $serial ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-kecil">Tgl IN </td>
                                                    <?php $tgmasuk = isset($data['tglmasuk']) ? tgl_indo($data['tglmasuk']) : '';  ?>
                                                    <td class="font-kecil"><?= $tgmasuk ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-3 text-center">
                                        <?php 
                                            $filefoto = isset($data['filefoto']) ? $data['filefoto'] : '';  
                                            $foto = FCPATH.'assets/image/dokmesin/foto/'.trim($filefoto); 
                                            $inifoto = base_url().'assets/image/dokmesin/foto/005f.jpg';
                                            if(trim($filefoto) !=''){
                                                if(file_exists($foto)){
                                                    $inifoto = base_url().'assets/image/dokmesin/foto/'.trim($filefoto);
                                                }
                                            }
                                                
                                        ?>
                                        <img src="<?= $inifoto ?>" alt="TES" style="width:181px;object-fit: cover;" class="mt-2">
                                    </div>
                                    <div class="col-4 d-flex ms-auto flex-column" style="margin-top: auto;">
                                        <div class="text-center pt-2">
                                            <button class="btn btn-sm btn-primary" id="firstrec">First</button>
                                            <button class="btn btn-sm btn-primary" id="prevrec">Prev</button>
                                            <button class="btn btn-sm btn-primary" id="nextrec">Next</button>
                                            <button class="btn btn-sm btn-primary" id="lastrec">Last</button>
                                            <a href="<?= base_url().'ponet/caripo' ?>" class="btn btn-sm btn-teal text-white disabled" id="caridatapo" data-bs-toggle="modal" data-bs-target="#modal-large-loading" data-title="Cari Data PO">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 10a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                                Cari Data
                                            </a>
                                        </div>
                                        <div class="bg-red mt-1">
                                            <a href="<?= base_url().'ponet/netplan/'.$plan ?>" class="btn btn-sm btn-yellow w-100 text-black"><i class="fa fa-list-alt mr-2" aria-hidden="true"></i>List Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <!-- <h3 class="mb-1">List Instruksi</h3>
                        <hr class="m-0"> -->
                        <div class="overflow-auto">
                            <table id="tabelnya" class="table order-column table-hover table-bordered mt-2 nowrap" style="width: 100% !important; border-collapse: collapse;">
                                <thead class="sticky-top">
                                    <tr class="sticky-top text-left">
                                        <th class="text-center">Plan</th>
                                        <th class="text-center">SKU</th>
                                        <th class="text-center">Ins</th>
                                        <th class="text-center">Stat PP</th>
                                        <th class="text-center">Stat NT</th>
                                        <th class="text-center">X</th>
                                        <th class="" colspan="4">01-XXXX</th>
                                        <th class="" colspan="4">02-XXXX</th>
                                        <th class="" colspan="4">03-XXXX</th>
                                        <th class="" colspan="4">04-XXXX</th>
                                        <th class="" colspan="4">05-XXXX</th>
                                        <th class="" colspan="4">06-XXXX</th>
                                        <th class="" colspan="4">07-XXXX</th>
                                        <th class="" colspan="4">08-XXXX</th>
                                        <th class="" colspan="4">09-XXXX</th>
                                        <th class="" colspan="4">10-XXXX</th>
                                        <th class="" colspan="4">11-XXXX</th>
                                        <th class="" colspan="4">12-XXXX</th>
                                    </tr>
                                </thead>
                                <tbody class="table-tbody" id="body-table" style="font-size: 13px !important;">
                                    <?php if($master->num_rows() > 0): ?>
                                        <?php foreach($master->result_array() as $mst): ?>
                                        <?php $statpo = $mst['stat_po']!=1 ? 'text-pink' : ''; ?>
                                        <?php $statdesc = trim($mst['descx'])=='' ? '' : (trim($mst['descx'])=='FINISHED' ? '<span class="badge bg-blue text-blue-fg">'.$mst['descx'].'</span>' : '<span class="badge bg-orange text-black">'.$mst['descx'].'</span>') ?>
                                        <?php $statdescn = trim($mst['descn'])=='' ? '' : (trim($mst['descn'])=='FINISHED' ? '<span class="badge bg-blue text-blue-fg">'.$mst['descn'].'</span>' : '<span class="badge bg-orange text-black">'.$mst['descn'].'</span>') ?>
                                            <tr>
                                                <td class="font-kecil <?= $statpo ?>"><?= $mst['dateplan'] ?></td>
                                                <td class="font-kecil"><?= viewsku($mst['po'],$mst['item'],$mst['dis']) ?></td>
                                                <td class="font-kecil"><?= $mst['insno'] ?></td>
                                                <td class="font-kecil"><?= $statdesc ?></td>
                                                <td class="font-kecil"><?= $statdescn ?></td>   
                                                <?php $persen1 = ceil(date('d', strtotime($mst['dateplan']))/7.75)*1; ?>
                                                <?php $bulan = date('m', strtotime($mst['dateplan']))*4; ?>
                                                <?php $tglakhir = date('Y-m-d', strtotime($mst['dateplan'].'+ '.$mst['day'].' days')) ?>
                                                <?php $persen2 = ceil(date('d', strtotime($tglakhir))/7.75)*1; ?>
                                                <?php $bulan2 = date('m', strtotime($tglakhir))*4; ?>
                                                <?php $awal = ($persen1+$bulan)-4;  ?>
                                                <?php $akhir = ($persen2+$bulan2)-4;  ?>
                                                <td class="text-center font-kecil"><?= $mst['day'] ?></td>
                                                <?php for ($y=1; $y <= 48 ; $y++) {  ?>
                                                    <td title="Mg <?= $y%4==0 ? 4 : $y%4 ?> Th XXXX" style="<?= $awal == $y ? 'background-color : green; border-right-color : green;' : ''; ?><?= $akhir == $y ? 'background-color : green; border-right-color : green;' : ''; ?>"></td>
                                                <?php } ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="17" class="text-center">Fetching Data</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>