<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Test'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Test'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="test view content">

            <h3><?= h($test->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('NAME') ?></th>
                    <td><?= h($test->NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kana') ?></th>
                    <td><?= h($test->kana) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tell') ?></th>
                    <td><?= h($test->tell) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mail') ?></th>
                    <td><?= h($test->mail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($test->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($test->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Toi') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($test->toi)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
