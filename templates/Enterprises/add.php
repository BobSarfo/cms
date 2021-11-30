<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enterprise $enterprise
 * @var \Cake\Collection\CollectionInterface|string[] $enterpriseTypes
 * @var \Cake\Collection\CollectionInterface|string[] $communities
 * @var \Cake\Collection\CollectionInterface|string[] $actors
 */
?>

<div class="card">
    <div class="card-header">
        <div class="card-title">                                
            <legend  class="fw-bolder"><?= __('Add Enterprise') ?></legend>
        </div>
        <div class="card-toolbar"> 

                        <?= $this->Html->link(__('List Enterprises'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
        </div>
    </div>

    <div class="column-responsive card-body">
        <div class="table align-middle table-row-dashed fs-6 gy-4">
            <?= $this->Form->create($enterprise) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('enterprise_type_id', ['options' => $enterpriseTypes, 'empty' => true]);
                    echo $this->Form->control('community_id', ['options' => $communities, 'empty' => true]);
                    echo $this->Form->control('suburb');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('other_phone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('number_of_employees');
                    echo $this->Form->control('registrationNo');
                    echo $this->Form->control('registed_with_RGD');
                    echo $this->Form->control('registed_with_Assembly');
                    echo $this->Form->control('date_of_establishment', ['empty' => true]);
                    echo $this->Form->control('actors._ids', ['options' => $actors]);
                ?>
            </fieldset>
        </div>
        <div class="card-footer d-flex justify-content-end pt-5 pb-0">
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-active-primary btn-primary  ']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
