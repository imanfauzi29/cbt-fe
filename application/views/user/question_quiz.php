<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-content">
                <div style="display: none;">
                    <h3 class="font-bold no-margins">
                        Kerjakan soal dibawah ini dari untuk nomor 1 sampai dengan 10!
                    </h3>
                </div>
                <p>
                    <h4>1. She _____ her dog everyday</h4>
                </p>
            </div>

            <?php $option = ["a","b","c","d","e"]; for ($i = 0; $i < count($option); $i++) {
                echo '<div class="ibox-content">
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" ><label class="form-check-label"> ' . $option[$i] .'. To feed</label>
                        </div>
                    </div>
                </div>
            </div>';
            } ?>
        </div>
    </div>
</div>