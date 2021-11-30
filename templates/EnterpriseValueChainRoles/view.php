<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EnterpriseValueChainRole $enterpriseValueChainRole
 */
?>

<div class="flex-lg-row-fluid order-2 order-lg-1 mb-10 mb-lg-0">
    <div class="card card-flush pt-3 mb-5 mb-xl-10">

        <div class="card-header">
            <div class="card-title">                
                    <h2 class="fw-bolder">Enterprise Value Chain Roles</h2>
            </div>
            <div class="card-toolbar"> 
                <?= $this->Html->link(__('Edit Enterprise Value Chain Role'), ['action' => 'edit', $enterpriseValueChainRole->value_chain_role_id], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Form->postLink(__('Delete Enterprise Value Chain Role'), ['action' => 'delete', $enterpriseValueChainRole->value_chain_role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $enterpriseValueChainRole->value_chain_role_id), 'class' => ' btn btn-light-danger mx-2']) ?>
                <?= $this->Html->link(__('List Enterprise Value Chain Roles'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Html->link(__('New Enterprise Value Chain Role'), ['action' => 'add'], ['class' => 'btn btn-light-primary mx-2']) ?>
                            </div>
        </div>
        <div class="card-body pt-3">
            <div class="enterpriseValueChainRoles ">
                <h3><?= h($enterpriseValueChainRole->Array) ?></h3>
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                                                                                                    <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Enterprise') ?></th>
                        <td  class="text-gray-800"><?= $enterpriseValueChainRole->has('enterprise') ? $this->Html->link($enterpriseValueChainRole->enterprise->name, ['controller' => 'Enterprises', 'action' => 'view', $enterpriseValueChainRole->enterprise->id]) : '' ?></td>
                    </tr>
                                                                                                        <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Value Chain Role') ?></th>
                        <td  class="text-gray-800"><?= $enterpriseValueChainRole->has('value_chain_role') ? $this->Html->link($enterpriseValueChainRole->value_chain_role->name, ['controller' => 'ValueChainRoles', 'action' => 'view', $enterpriseValueChainRole->value_chain_role->id]) : '' ?></td>
                    </tr>
                                                                                                                                                                                    </table>
                </div>
                </div>
                                                                        </div>
        </div>
    </div>
</div>