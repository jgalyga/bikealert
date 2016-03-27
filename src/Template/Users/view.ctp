<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bikes'), ['controller' => 'Bikes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bike'), ['controller' => 'Bikes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bikes') ?></h4>
        <?php if (!empty($user->bikes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Brand') ?></th>
                <th><?= __('Model') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->bikes as $bikes): ?>
            <tr>
                <td><?= h($bikes->id) ?></td>
                <td><?= h($bikes->user_id) ?></td>
                <td><?= h($bikes->name) ?></td>
                <td><?= h($bikes->brand) ?></td>
                <td><?= h($bikes->model) ?></td>
                <td><?= h($bikes->description) ?></td>
                <td><?= h($bikes->created) ?></td>
                <td><?= h($bikes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bikes', 'action' => 'view', $bikes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bikes', 'action' => 'edit', $bikes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bikes', 'action' => 'delete', $bikes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bikes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
