<button class="btn btn-primary mb-3" data-href="/admin/complement/create">Tambah Data</button>
<div class="ibox ">
    <div class="ibox-title">
        <h5>Border Table </h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>name</th>
                    <th>Number Quest</th>
                    <th>Type Question</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $value): ?>
                <tr>
                    <td><?=$value->name ?></td>
                    <td><?=$value->number_of_quest ?></td>
                    <td><?=$value->type_question ?></td>
                    <td>action</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>