<div class="col-md-12">
    <?php $this->load->view('components/import_soal.php') ?>
</div>

<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
        <?php $this->load->view('components/pagination_soal.php') ?>
        </div>
        <div class="col-md-8">
        <?php $this->load->view('components/soal_box.php', $config) ?>
        </div>
    </div>
</div>