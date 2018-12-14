<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Store $store
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Store'), ['action' => 'edit', $store->id_store]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Store'), ['action' => 'delete', $store->id_store], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id_store)]) ?> </li>
        <li><?= $this->Html->link(__('List Stores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Store'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="stores view large-9 medium-8 columns content">
    <h3><?= h($store->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($store->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($store->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Store') ?></th>
            <td><?= $this->Number->format($store->id_store) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Open Time') ?></th>
            <td><?= h($store->open_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Close Time') ?></th>
            <td><?= h($store->close_time) ?></td>
        </tr>
    </table>
</div>
