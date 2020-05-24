<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
      <li class="heading"><?= __('Actions') ?></li>
      <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
      <!-- <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li> -->
      <!-- <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li> -->
  </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
<?= $this->Form->create() ?>
  <fieldset>
    <legend><?= __('ログイン') ?></legend>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('password') ?>
  </fieldset>
<?= $this->Form->button('ログイン') ?>
<?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>

<?= $this->Form->end() ?>
</div>
