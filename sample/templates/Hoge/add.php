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
            <?= $this->Html->link(__('List Hoge'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="hoge form content">
            <?= $this->Form->create($hoge) ?>
            <fieldset>
                <legend><?= __('Add Hoge') ?></legend>
                <?php
                    echo $this->Form->control('hoge');
                    echo $this->Form->control('password');
                    echo $this->Form->control('textarea');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
