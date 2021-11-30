<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EnterpriseCommodity $enterpriseCommodity
 * @var \Cake\Collection\CollectionInterface|string[] $enterprises
 * @var \Cake\Collection\CollectionInterface|string[] $commodities
 */
?>

<div class="card">
    <div class="card-header">
        <div class="card-title">                                
            <legend  class="fw-bolder"><?= __('Add Enterprise Commodity') ?></legend>
        </div>
        <div class="card-toolbar"> 

                        <?= $this->Html->link(__('List Enterprise Commodities'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
        </div>
    </div>

    <div class="column-responsive card-body">
        <div class="table align-middle table-row-dashed fs-6 gy-4">
            <?= $this->Form->create($enterpriseCommodity) ?>
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
