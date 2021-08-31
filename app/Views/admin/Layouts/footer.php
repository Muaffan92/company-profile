<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">User <?= session()->get('username') ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Camp/update_user') ?>" method="POST" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4 col-12">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= session()->get('username') ?>" required>
                        <div class="invalid-feedback">
                            Form tidak boleh kosong
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= session()->get('name') ?>" required>
                        <div class="invalid-feedback">
                            Form tidak boleh kosong
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <div class="invalid-feedback">
                            Form tidak boleh kosong
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script src="<?= base_url('js/jquery-3.5.1.js'); ?>"></script>
<script src="<?= base_url('js/javascript.js'); ?>"></script>
<script src="<?= base_url('js/sweetalert.min.js'); ?>"></script>
<script src="<?= base_url('fontawesome/js/all.min.js'); ?>"></script>
<script src="<?= base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('DataTables/DataTables-1.10.24/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('DataTables/DataTables-1.10.24/js/dataTables.bootstrap4.min.js'); ?>"></script>

<script>
    $(document).ready(function() {
        $('#datatables').DataTable({
            "processing": true,
        });

        $('#datatables1').DataTable({
            "processing": true,
        });
    });

    // MENAMBAHKAN CLASS ACTIVE PADA LIST ITEM YANG DI PILIH
    let list = document.querySelectorAll('.list');

    for (let i = 0; i < list.length; i++) {
        list[i].onclick = function() {
            let j = 0;

            while (j < list.length) {
                $(list[j++]).removeClass('active');
            }

            $(list[i]).addClass('active');
        }
    }

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</body>

</html>