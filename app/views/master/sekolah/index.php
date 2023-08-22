<!--begin::Content-->
<div class="col-xl-16 mt-5">
    <div class="card card-flush h-xl-100">
        <div class="card-header pt-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-dark">Data Sekolah</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6"></span>
            </h3>
            <div class="card-toolbar">
                <div class="d-flex flex-stack flex-wrap gap-4">
                    <div class="d-flex align-items-center fw-bold">
                        <div class="text-muted fs-7 me-2">Status</div>
                        <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto"
                            data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px"
                            data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                            <option></option>
                            <option value="Show All" selected="selected">Show All
                            </option>
                            <option value="In Stock">TK</option>
                            <option value="Out of Stock">SD</option>
                            <option value="Low Stock">SMP</option>
                        </select>
                    </div>
                    <div>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                            title="Type in a name">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table align-middle table-row-dashed fs-6 gy-3" id="myTable">
                <!--begin::Modal - Invite Friends-->
                <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog mw-450px">
                        <div class="modal-content">
                            <div class="modal-header pb-0 border-0 justify-content-end">
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <div class="modal-body scroll-y mx-2 mx-xl-10 pt-0 pb-5">
                                <div class="text-left mb-13">
                                    <h3 class="mb-3">Tambah Data Sekolah</h3>
                                </div>

                                <div class="modal-body">
                                    <form enctype="multipart/form-data" action="<?= BASEURL; ?>/sekolah/tambah"
                                        method="post">
                                        <input type="hidden" name="id" id="id">

                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="" required />
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Type</label>
                                                <input type="text" class="form-control" id="type" name="type" placeholder="" required />
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" placeholder="" required />
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Quota</label>
                                                <input type="text" class="form-control" id="quota" name="quota" placeholder="" required />
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="" required />
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Website</label>
                                                <input type="text" class="form-control" id="website" name="website" placeholder="" required />
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Latitude</label>
                                                <input type="text" class="form-control" id="latitude" name="latitude" placeholder="" required />
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Longitude</label>
                                                <input type="text" class="form-control" id="longtitude" name="longtitude" placeholder="" required />
                                            </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success"
                                        data-bs-dismiss="modal">Tambah</button>
                                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- <thead> -->
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Address</th>
                    <th>Quota</th>
                    <th>Phone</th>
                    <th>Website</th>
                    <th>Latitude</th>
                    <th>Longtitude</th>
                  </tr>
                </thead>
                    </tr>
                <!-- </thead> -->
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($data['sekolah'] as $sekolah): ?>
                    <tr>
                      <td>
                        <?= $i++; ?>
                      </td>
                      <td>
                        <?= $sekolah['name'] ?>
                      </td>
                      <td>
                        <?= $sekolah['type'] ?>
                      </td>
                      <td>
                        <?= $sekolah['address'] ?>
                      </td>
                      <td>
                        <?= $sekolah['quota'] ?>
                      </td>
                      <td>
                        <?= $sekolah['phone'] ?>
                      </td>
                      <td>
                        <?= $sekolah['website'] ?>
                      </td>
                      <td>
                        <?= $sekolah['latitude'] ?>
                      </td>
                      <td>
                        <?= $sekolah['longtitude'] ?>
                      </td>
                      <td>
                        <a href="<?= BASEURL; ?>/sekolah/ubah/<?= $sekolah['id'] ?>" data-bs-toggle="modal"
                          data-bs-target="#exampleModalLong" class="tampilModalUbah" data-id="<?= $sekolah['id']; ?>">
                          <button class="button-arounder">
                            <span class="material-symbols-outlined"> edit </span>
                          </button>
                        </a>
                        <a href="<?= BASEURL; ?>/sekolah/hapus/<?= $sekolah['id'] ?>"
                          onclick="return confirm ('Hapus data?') ">
                          <button class="button-arounder">
                            <span class="material-symbols-outlined"> delete </span>
                          </button>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>



<!--end::Content wrapper-->