<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enterprise $enterprise
 * @var string[]|\Cake\Collection\CollectionInterface $enterpriseTypes
 * @var string[]|\Cake\Collection\CollectionInterface $communities
 * @var string[]|\Cake\Collection\CollectionInterface $actors
 */
?>

<div class="card">
    <div class="card-header">
        <div class="card-title">                                
            <legend  class="fw-bolder"><?= __('Edit Enterprise') ?></legend>
        </div>
        <div class="card-toolbar"> 

                        <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $enterprise->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $enterprise->id), 'class' => 'btn btn-light-danger mx-2']
            ) ?>
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
