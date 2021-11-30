<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EnterpriseCommodity $enterpriseCommodity
 */
?>

<div class="flex-lg-row-fluid order-2 order-lg-1 mb-10 mb-lg-0">
    <div class="card card-flush pt-3 mb-5 mb-xl-10">

        <div class="card-header">
            <div class="card-title">                
                    <h2 class="fw-bolder">Enterprise Commodities</h2>
            </div>
            <div class="card-toolbar"> 
                <?= $this->Html->link(__('Edit Enterprise Commodity'), ['action' => 'edit', $enterpriseCommodity->commodity_id], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Form->postLink(__('Delete Enterprise Commodity'), ['action' => 'delete', $enterpriseCommodity->commodity_id], ['confirm' => __('Are you sure you want to delete # {0}?', $enterpriseCommodity->commodity_id), 'class' => ' btn btn-light-danger mx-2']) ?>
                <?= $this->Html->link(__('List Enterprise Commodities'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Html->link(__('New Enterprise Commodity'), ['action' => 'add'], ['class' => 'btn btn-light-primary mx-2']) ?>
                            </div>
        </div>
        <div class="card-body pt-3">
            <div class="enterpriseCommodities ">
                <h3><?= h($enterpriseCommodity->Array) ?></h3>
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                                                                                                    <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Enterprise') ?></th>
                        <td  class="text-gray-800"><?= $enterpriseCommodity->has('enterprise') ? $this->Html->link($enterpriseCommodity->enterprise->name, ['controller' => 'Enterprises', 'action' => 'view', $enterpriseCommodity->enterprise->id]) : '' ?></td>
                    </tr>
                                                                                                        <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Commodity') ?></th>
                        <td  class="text-gray-800"><?= $enterpriseCommodity->has('commodity') ? $this->Html->link($enterpriseCommodity->commodity->name, ['controller' => 'Commodities', 'action' => 'view', $enterpriseCommodity->commodity->id]) : '' ?></td>
                    </tr>
                                                                                                                                                                                    </table>
                </div>
                </div>
                                                                        </div>
        </div>
    </div>
</div>