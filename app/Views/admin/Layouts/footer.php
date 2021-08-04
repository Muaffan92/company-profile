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