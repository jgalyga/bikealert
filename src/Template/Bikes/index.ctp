<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title m-b-20 pull-left">Moje rowery</h4>
        <a href="" class="pull-right btn btn-primary"> Dodaj rower</a>
       </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <div class="p-20">
                <table class="table table-hover mails m-0 table table-actions-bar">
                    <thead>
                    <tr>
                        <th>Id</th>

                        <th>Nazwa</th>
                        <th>Status</th>
                        <th>Data rejestracji</th>
                        <th>Data modyfikacii</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($bikes as $bike): ?>
                        <tr>
                            <td><?= $this->Number->format($bike->id) ?></td>
                            <td><b><?= h($bike->name) ?></b></td>
                            <td><span class="label label-warning">In-progress</span></td>

                            <td><?= h($bike->created) ?></td>
                            <td><?= h($bike->modified) ?></td>
                            <td>
                                <?= $this->Form->postLink('<i class="md md-close"></i>', ['action' => 'delete', $bike->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bike->id), 'class'=> 'table-action-btn', 'escape' => false]) ?>
                                <?= $this->Html->link('<i class="md md-edit"></i>', ['action' => 'edit', $bike->id], ['class'=> 'table-action-btn', 'escape' => false]) ?>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>