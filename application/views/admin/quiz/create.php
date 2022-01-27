<div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>Import Soal</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#" class="dropdown-item">Config option 1</a>
                    </li>
                    <li><a href="#" class="dropdown-item">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload File</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul>
                            <li>Soal yang di import berbentuk excel atau csv</li>
                            <li>Soal yang di import hanya bisa pilihan ganda</li>
                            <li>whatever....</li>
                        </ul>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="row">

        <div class="col-md-4">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Data whatever...</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#" class="dropdown-item">Config option 1</a>
                            </li>
                            <li><a href="#" class="dropdown-item">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <ul>
                        <li>Bobot soal</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="ibox ">
                <div class="d-flex justify-content-between align-items-center px-3 ibox-title">
                    <h5>Soal 1</h5>
                    <button class="btn btn-primary btn-sm">Buat Soal</button>
                </div>
                <div class="ibox-content">
                    <form>
                        <div class="mb-5">
                            <textarea id="editor"></textarea>
                            <div class="my-3">
                                <label for="formFile" class="form-label">Upload Audio (Optional)</label>
                                <input class="form-control" type="file" id="formFile">
                                <small id="emailHelp" class="form-text">Upload file audio</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="option_1" class="form-label col-sm-1">Option A</label>
                            <div class="col-sm-11">
                                <div class="input-group m-b">
                                    <input type="text" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-addon">
                                            <input type="radio" name="option[]" id="option_1">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="option_1" class="form-label col-sm-1">Option B</label>
                            <div class="col-sm-11">
                                <div class="input-group m-b">
                                    <input type="text" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-addon">
                                            <input type="radio" name="option[]" id="option_3">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="option_1" class="form-label col-sm-1">Option C</label>
                            <div class="col-sm-11">
                                <div class="input-group m-b">
                                    <input type="text" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-addon">
                                            <input type="radio" name="option[]" id="option_4">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="option_1" class="form-label col-sm-1">Option D</label>
                            <div class="col-sm-11">
                                <div class="input-group m-b">
                                    <input type="text" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-addon">
                                            <input type="radio" name="option[]" id="option_5">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="option_1" class="form-label col-sm-1">Option E</label>
                            <div class="col-sm-11">
                                <div class="input-group m-b">
                                    <input type="text" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-addon">
                                            <input type="radio" name="option[]" id="option_2">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        </div>
    </div>
</div>