<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActorsValueChainRole $actorsValueChainRole
 */
?>

<div class="flex-lg-row-fluid order-2 order-lg-1 mb-10 mb-lg-0">
    <div class="card card-flush pt-3 mb-5 mb-xl-10">

        <div class="card-header">
            <div class="card-title">                
                    <h2 class="fw-bolder">Actors Value Chain Roles</h2>
            </div>
            <div class="card-toolbar"> 
                <?= $this->Html->link(__('Edit Actors Value Chain Role'), ['action' => 'edit', $actorsValueChainRole->value_chain_role_id], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Form->postLink(__('Delete Actors Value Chain Role'), ['action' => 'delete', $actorsValueChainRole->value_chain_role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $actorsValueChainRole->value_chain_role_id), 'class' => ' btn btn-light-danger mx-2']) ?>
                <?= $this->Html->link(__('List Actors Value Chain Roles'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Html->link(__('New Actors Value Chain Role'), ['action' => 'add'], ['class' => 'btn btn-light-primary mx-2']) ?>
                            </div>
        </div>
        <div class="card-body pt-3">
            <div class="actorsValueChainRoles ">
                <h3><?= h($actorsValueChainRole->Array) ?></h3>
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                                                                                                    <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Actor') ?></th>
                        <td  class="text-gray-800"><?= $actorsValueChainRole->has('actor') ? $this->Html->link($actorsValueChainRole->actor->name, ['controller' => 'Actors', 'action' => 'view', $actorsValueChainRole->actor->id]) : '' ?></td>
                    </tr>
                                                                                                        <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Value Chain Role') ?></th>
                        <td  class="text-gray-800"><?= $actorsValueChainRole->has('value_chain_role') ? $this->Html->link($actorsValueChainRole->value_chain_role->name, ['controller' => 'ValueChainRoles', 'action' => 'view', $actorsValueChainRole->value_chain_role->id]) : '' ?></td>
                    </tr>
                                                                                                                                                                                    </table>
                </div>
                </div>
                                                                        </div>
        </div>
    </div>
</div>