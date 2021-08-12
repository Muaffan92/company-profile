<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Admin | Login</title>

    <!-- STYLE -->
    <link rel="stylesheet" href="<?= base_url('css/style2.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>">
</head>

<body class="bg-primary pt-4 pb-4 d-flex align-items-center">
    <div class="w-100 h-100">
        <a href="<?= base_url('Home') ?>" class="btn position-absolute top-0 end-0 btn-close p-3"></a>

        <div class="d-flex align-items-center justify-content-center">
            <div class="bg-white rounded-4 p-4 w-25">
                <div class="d-flex align-items-center mb-3">
                    <a href="<?= base_url('Home') ?>" class="btn text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </a>
                    <div class="fs-1 text-primary">
                        |
                    </div>
                    <div class="p-2 fw-bold fs-2 text-primary">
                        Sign In
                    </div>
                </div>

                <?= session()->getFlashdata('message'); ?>

                <form action="<?= base_url('BaseCamp/login') ?>" method="POST" class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        <div class="invalid-feedback">
                            Form tidak boleh kosong!
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Passowrd</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <div class="invalid-feedback">
                            Form tidak boleh kosong!
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>

    <script>
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