<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActorsCommodity $actorsCommodity
 */
?>

<div class="flex-lg-row-fluid order-2 order-lg-1 mb-10 mb-lg-0">
    <div class="card card-flush pt-3 mb-5 mb-xl-10">

        <div class="card-header">
            <div class="card-title">                
                    <h2 class="fw-bolder">Actors Commodities</h2>
            </div>
            <div class="card-toolbar"> 
                <?= $this->Html->link(__('Edit Actors Commodity'), ['action' => 'edit', $actorsCommodity->actor_id], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Form->postLink(__('Delete Actors Commodity'), ['action' => 'delete', $actorsCommodity->actor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $actorsCommodity->actor_id), 'class' => ' btn btn-light-danger mx-2']) ?>
                <?= $this->Html->link(__('List Actors Commodities'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Html->link(__('New Actors Commodity'), ['action' => 'add'], ['class' => 'btn btn-light-primary mx-2']) ?>
                            </div>
        </div>
        <div class="card-body pt-3">
            <div class="actorsCommodities ">
                <h3><?= h($actorsCommodity->Array) ?></h3>
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                                                                                                    <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Actor') ?></th>
                        <td  class="text-gray-800"><?= $actorsCommodity->has('actor') ? $this->Html->link($actorsCommodity->actor->name, ['controller' => 'Actors', 'action' => 'view', $actorsCommodity->actor->id]) : '' ?></td>
                    </tr>
                                                                                                        <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Commodity') ?></th>
                        <td  class="text-gray-800"><?= $actorsCommodity->has('commodity') ? $this->Html->link($actorsCommodity->commodity->name, ['controller' => 'Commodities', 'action' => 'view', $actorsCommodity->commodity->id]) : '' ?></td>
                    </tr>
                                                                                                                                                                                    </table>
                </div>
                </div>
                                                                        </div>
        </div>
    </div>
</div>