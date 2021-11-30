<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor $actor
 * @var string[]|\Cake\Collection\CollectionInterface $sexes
 * @var string[]|\Cake\Collection\CollectionInterface $disabilities
 * @var string[]|\Cake\Collection\CollectionInterface $sectors
 * @var string[]|\Cake\Collection\CollectionInterface $communities
 * @var string[]|\Cake\Collection\CollectionInterface $productionScales
 * @var string[]|\Cake\Collection\CollectionInterface $commodities
 * @var string[]|\Cake\Collection\CollectionInterface $enterprises
 * @var string[]|\Cake\Collection\CollectionInterface $organisations
 * @var string[]|\Cake\Collection\CollectionInterface $valueChainRoles
 */
?>

<div class="card">
    <div class="card-header">
        <div class="card-title">                                
            <legend  class="fw-bolder"><?= __('Edit Actor') ?></legend>
        </div>
        <div class="card-toolbar"> 

            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actor->id), 'class' => 'btn btn-light-primary mx-2']
            )?>
        <?= $this->Html->link(__('List Actors'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
        </div>
    </div>

    <div class="column-responsive card-body">
        <div class="table align-middle table-row-dashed fs-6 gy-4">
            <?= $this->Form->create($actor) ?>
            <fieldset>
                <?php
                                        echo $this->Form->control('name');
                    echo $this->Form->control('date_of_birth', ['empty' => true]);
                    echo $this->Form->control('sex_id', ['options' => $sexes, 'empty' => true]);
                    echo $this->Form->control('disability_id', ['options' => $disabilities, 'empty' => true]);
                    echo $this->Form->control('sector_id', ['options' => $sectors, 'empty' => true]);
                    echo $this->Form->control('phone');
                    echo $this->Form->control('other_phone');
                    echo $this->Form->control('community_id', ['options' => $communities, 'empty' => true]);
                    echo $this->Form->control('suburb');
                    echo $this->Form->control('registed_with_RGD');
                    echo $this->Form->control('registed_with_Assembly');
                    echo $this->Form->control('production_scale_id', ['options' => $productionScales, 'empty' => true]);
                    echo $this->Form->control('other_related_activity');
                    echo $this->Form->control('additional_comments');
                    echo $this->Form->control('commodities._ids', ['options' => $commodities]);
                    echo $this->Form->control('enterprises._ids', ['options' => $enterprises]);
                    echo $this->Form->control('organisations._ids', ['options' => $organisations]);
                    echo $this->Form->control('value_chain_roles._ids', ['options' => $valueChainRoles]);
                                    ?>
            </fieldset>
        </div>
        <div class="card-footer d-flex justify-content-end pt-5 pb-0">
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-active-primary btn-primary  ']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
