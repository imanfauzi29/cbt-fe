<div class="ibox ">
    <div class="d-flex justify-content-between align-items-center px-3 ibox-title">
        <h5>Soal 1</h5>
        <button class="btn btn-primary btn-sm">Buat Soal</button>
    </div>
    <div class="ibox-content">
        <form>
            <?php if (!isset($config['only_options'])) : ?>
                <div class="mb-5">
                    <textarea id="editor"></textarea>
                    <?php if (isset($config['complement'])) : ?>
                        <div class="text-info"><i class="fa fa-info-circle"></i> Gunakan ? untuk membuat __ (underscore)</div>
                    <?php endif ?>
                </div>
            <?php endif; ?>
            <?php foreach (["a", "b", "c", "d"] as $option) : ?>
                <div class="row mb-3">
                    <label for="option_<?= $option ?>" class="form-label col-sm-1">Option <?= strtoupper($option) ?></label>
                    <div class="col-sm-11">
                        <div class="input-group m-b">
                            <input type="text" class="form-control">
                            <div class="input-group-prepend">
                                <span class="input-group-addon">
                                    <input type="radio" name="option[<?= $option ?>]" id="option_<?= $option ?>">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </form>
        <div class="text-info"><i class="fa fa-info-circle"></i> Centang option di kanan untuk soal yang benar!</div>
        <div class="row mt-5">
            <div class="col-md-12">
                <nav aria-label="...">
                    <ul class="pagination d-flex justify-content-between">
                        <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-chevron-circle-left"></i> Soal Sebelumnya</button>
                        <div class="d-flex gap-1">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </div>
                        <button class="btn btn-primary btn-sm" type="submit">Soal Berikutnya <i class="fa fa-chevron-circle-right"></i></button>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>