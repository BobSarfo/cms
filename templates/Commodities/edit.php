<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commodity $commodity
 * @var string[]|\Cake\Collection\CollectionInterface $actors
 * @var string[]|\Cake\Collection\CollectionInterface $organisations
 */
?>

<div class="card">
    <div class="card-header">
        <div class="card-title">                                
            <legend  class="fw-bolder"><?= __('Edit Commodity') ?></legend>
        </div>
        <div class="card-toolbar"> 

                        <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commodity->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commodity->id), 'class' => 'btn btn-light-primary mx-2']
            ) ?>
                        <?= $this->Html->link(__('List Commodities'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
        </div>
    </div>

    <div class="column-responsive card-body">
        <div class="table align-middle table-row-dashed fs-6 gy-4">
            <?= $this->Form->create($commodity) ?>
            <fieldset>
                <?php
                                        echo $this->Form->control('name');
                    echo $this->Form->control('actors._ids', ['options' => $actors]);
                    echo $this->Form->control('organisations._ids', ['options' => $organisations]);
                                    ?>
            </fieldset>
        </div>
        <div class="card-footer d-flex justify-content-end pt-5 pb-0">
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-active-primary btn-primary  ']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
