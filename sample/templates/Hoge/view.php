<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hoge $hoge
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Hoge'), ['action' => 'edit', $hoge->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hoge'), ['action' => 'delete', $hoge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hoge->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Hoge'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hoge'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hoge view content">
            <h3><?= h($hoge->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Hoge') ?></th>
                    <td><?= h($hoge->hoge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($hoge->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($hoge->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($hoge->updated) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($hoge->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Textarea') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($hoge->textarea)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
