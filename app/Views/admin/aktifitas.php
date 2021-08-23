<div class="mt-5 pt-4 d-flex align-items-center">
    <div class="p-2 fw-bold fs-4 text-dark ps-5">
        Aktifitas
    </div>
</div>

<div class="mt-4 bg-white p-4 text-dark">
    <div class="table-responsive">
        <table class="table-sm table table-hover text-capitalize" id="aktifitas">
            <thead>
                <tr>
                    <th>tanggal</th>
                    <th>username</th>
                    <th>ket</th>
                </tr>
            </thead>
            <tbody class="fs-6"></tbody>
        </table>
    </div>
</div>

<?= view('admin/Layouts/footer') ?>

<script>
    $('#aktifitas').DataTable({
        order: [
            [0, 'desc']
        ],
        processing: true,
        serverSide: true,
        ajax: {
            url: '<?= base_url('Camp/select_aktifitas') ?>',
            type: 'POST'
        },
    });
</script>