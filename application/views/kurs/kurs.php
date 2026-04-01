<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="page-header d-print-none m-2">
  <div class="container-xl">
    <div class="row g-0 d-flex align-items-between">
      <div class="col-md-6">
        <h2 class="page-title p-2">
          <div>Kurs</div>
        </h2>
      </div>
      <div class="col-md-6" style="text-align: right;">
        <a href="<?= base_url() ?>" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i><span class="ml-1">Kembali</span></a>
      </div>
    </div>
  </div>
</div>
<div class="page-body mt-0">
  <div class="container-xl">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-5">
            <div class="card btn-flat">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                  <li class="nav-item">
                    <a href="#tabs-home-5" class="nav-link font-bold text-teal active" data-bs-toggle="tab">Kurs BI</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tabs-profile-5" class="nav-link font-bold text-cyan" data-bs-toggle="tab">Kurs KMK</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="#tabs-activity-5" class="nav-link" data-bs-toggle="tab">Activity</a>
                  </li> -->
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tabs-home-5">
                    <div class="font-bold">Kurs BI Rate</div>
                    <table id="tabelrate" class="table table-hover table-bordered cell-border mt-1" style="width: 100% !important; border-collapse: collapse;"> <!-- table order-column table-hover table-bordered cell-border -->
                      <thead>
                        <tr>
                          <th>Periode</th>
                          <th>USD</th>
                          <th>JPY</th>
                          <th>EUR</th>
                        </tr>
                      </thead>
                      <tbody class="table-tbody" id="body-table" style="font-size: 13px !important; width: 100% !important;">
                      
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane" id="tabs-profile-5">
                    <div class="font-bold">Kurs KMK</div>
                    <table id="tabelkmk" class="table table-hover table-bordered cell-border mt-1" style="width: 100% !important; border-collapse: collapse;"> <!-- table order-column table-hover table-bordered cell-border -->
                      <thead>
                        <tr>
                          <th>Tanggal</th>
                          <th>USD</th>
                          <th>JPY</th>
                          <th>EUR</th>
                        </tr>
                      </thead>
                      <tbody class="table-tbody" id="body-table" style="font-size: 13px !important; width: 100% !important;">
                      
                      </tbody>
                    </table>
                  </div>
                  <!-- <div class="tab-pane" id="tabs-activity-5">
                    <h4>Activity tab</h4>
                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi sit mauris accumsan nibh habitant senectus</div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-7 bg-cyan-lt"></div>
        </div>
      </div>
    </div>
  </div>
</div>