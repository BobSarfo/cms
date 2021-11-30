<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActorsValueChainRole $actorsValueChainRole
 * @var \Cake\Collection\CollectionInterface|string[] $actors
 * @var \Cake\Collection\CollectionInterface|string[] $valueChainRoles
 */
?>

<div class="card">
    <div class="card-header">
        <div class="card-title">                                
            <legend  class="fw-bolder"><?= __('Add Actors Value Chain Role') ?></legend>
        </div>
        <div class="card-toolbar"> 

                        <?= $this->Html->link(__('List Actors Value Chain Roles'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
        </div>
    </div>

    <div class="column-responsive card-body">
        <div class="table align-middle table-row-dashed fs-6 gy-4">
            <?= $this->Form->create($actorsValueChainRole) ?>
            <fieldset>
                <?php
                                    ?>
            </fieldset>
        </div>
        <div class="card-footer d-flex justify-content-end pt-5 pb-0">
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-active-primary btn-primary  ']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
