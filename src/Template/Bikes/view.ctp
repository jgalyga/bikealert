<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bike'), ['action' => 'edit', $bike->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bike'), ['action' => 'delete', $bike->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bike->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bikes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bike'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bikes view large-9 medium-8 columns content">
    <h3><?= h($bike->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $bike->has('user') ? $this->Html->link($bike->user->id, ['controller' => 'Users', 'action' => 'view', $bike->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($bike->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Brand') ?></th>
            <td><?= h($bike->brand) ?></td>
        </tr>
        <tr>
            <th><?= __('Model') ?></th>
            <td><?= h($bike->model) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($bike->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($bike->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($bike->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($bike->description)); ?>
    </div>
</div>
