<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hoge[]|\Cake\Collection\CollectionInterface $hoge
 */
?>
<div class="hoge index content">
    <?= $this->Html->link(__('New Hoge'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Hoge') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('hoge') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hoge as $hoge): ?>
                <tr>
                    <td><?= $this->Number->format($hoge->id) ?></td>
                    <td><?= h($hoge->hoge) ?></td>
                    <td><?= h($hoge->password) ?></td>
                    <td><?= h($hoge->updated) ?></td>
                    <td><?= h($hoge->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $hoge->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hoge->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hoge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hoge->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
