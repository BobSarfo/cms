<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enterprise $enterprise
 */
?>

<div class="flex-lg-row-fluid order-2 order-lg-1 mb-10 mb-lg-0">
    <div class="card card-flush pt-3 mb-5 mb-xl-10">

        <div class="card-header">
            <div class="card-title">                
                    <h2 class="fw-bolder">Enterprises</h2>
            </div>
            <div class="card-toolbar"> 
                <?= $this->Html->link(__('Edit Enterprise'), ['action' => 'edit', $enterprise->id], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Form->postLink(__('Delete Enterprise'), ['action' => 'delete', $enterprise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enterprise->id), 'class' => ' btn btn-light-danger mx-2']) ?>
                <?= $this->Html->link(__('List Enterprises'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Html->link(__('New Enterprise'), ['action' => 'add'], ['class' => 'btn btn-light-primary mx-2']) ?>
                            </div>
        </div>
        <div class="card-body pt-3">
            <div class="enterprises ">
                <h3><?= h($enterprise->name) ?></h3>
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                                                                                <tr>
                        <th  class="text-gray-400 "><?= __('Name') ?></th>
                        <td  class="text-gray-800" ><?= h($enterprise->name) ?></td>
                    </tr > 
                                                                                                            <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Enterprise Type') ?></th>
                        <td  class="text-gray-800"><?= $enterprise->has('enterprise_type') ? $this->Html->link($enterprise->enterprise_type->name, ['controller' => 'EnterpriseTypes', 'action' => 'view', $enterprise->enterprise_type->id]) : '' ?></td>
                    </tr>
                                                                                                        <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Community') ?></th>
                        <td  class="text-gray-800"><?= $enterprise->has('community') ? $this->Html->link($enterprise->community->name, ['controller' => 'Communities', 'action' => 'view', $enterprise->community->id]) : '' ?></td>
                    </tr>
                                                                                    <tr>
                        <th  class="text-gray-400 "><?= __('Suburb') ?></th>
                        <td  class="text-gray-800" ><?= h($enterprise->suburb) ?></td>
                    </tr > 
                                                                                        <tr>
                        <th  class="text-gray-400 "><?= __('Phone') ?></th>
                        <td  class="text-gray-800" ><?= h($enterprise->phone) ?></td>
                    </tr > 
                                                                                        <tr>
                        <th  class="text-gray-400 "><?= __('Email') ?></th>
                        <td  class="text-gray-800" ><?= h($enterprise->email) ?></td>
                    </tr > 
                                                                                        <tr>
                        <th  class="text-gray-400 "><?= __('RegistrationNo') ?></th>
                        <td  class="text-gray-800" ><?= h($enterprise->registrationNo) ?></td>
                    </tr > 
                                                                                        <tr>
                        <th  class="text-gray-400 "><?= __('Other Phone') ?></th>
                        <td  class="text-gray-800" ><?= h($enterprise->other_phone) ?></td>
                    </tr > 
                                                                                                                                                                    <tr>
                        <th class="text-gray-400 "><?= __('Id') ?></th>
                        <td class="text-gray-800"><?= $this->Number->format($enterprise->id) ?></td>
                    </tr>
                                            <tr>
                        <th class="text-gray-400 "><?= __('Number Of Employees') ?></th>
                        <td class="text-gray-800"><?= $this->Number->format($enterprise->number_of_employees) ?></td>
                    </tr>
                                                                                                                    <tr>
                        <th class="text-gray-400 "><?= __('Date Of Establishment') ?></th>
                        <td class="text-gray-800"><?= h($enterprise->date_of_establishment) ?></td>
                    </tr>
                                            <tr>
                        <th class="text-gray-400 "><?= __('Created') ?></th>
                        <td class="text-gray-800"><?= h($enterprise->created) ?></td>
                    </tr>
                                            <tr>
                        <th class="text-gray-400 "><?= __('Modified') ?></th>
                        <td class="text-gray-800"><?= h($enterprise->modified) ?></td>
                    </tr>
                                                                                        </table>
                </div>
                </div>
                                                                                                                                        <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                        <h5 class="mb-4"><?= __('Related Actors') ?></h5>
                        <?php if (!empty($enterprise->actors)) : ?>
                            <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                            
                                <tr class="border-bottom border-gray-200 text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th class="min-w-125px"><?= __('#') ?></th>
                                                                        <th class="min-w-125px"><?= __('Name') ?></th>
                                                                        <th class="min-w-125px"><?= __('Date Of Birth') ?></th>
                                                                        <th class="min-w-125px"><?= __('Phone') ?></th>
                                                                        <th class="min-w-125px"><?= __('Other Phone') ?></th>
                                                                        <th class="min-w-125px"><?= __('Suburb') ?></th>
                                                                        <th class="min-w-125px"><?= __('Registed With RGD') ?></th>
                                                                        <th class="min-w-125px"><?= __('Registed With Assembly') ?></th>
                                                                        <th class="min-w-125px"><?= __('Other Related Activity') ?></th>
                                                                        <th class="min-w-125px"><?= __('Additional Comments') ?></th>
                                                                        <th class="text-end min-w-125px actions"><?= __('Actions') ?></th>
                                </tr>
                                <?php $i = 0?>
                                <?php foreach ($enterprise->actors as $actors) : ?>
                                <tr>
                                    <td><?= h(++$i) ?></td>
                                    <td><?= h($actors->name) ?></td>
                                    <td><?= h($actors->date_of_birth) ?></td>
                                    <td><?= h($actors->phone) ?></td>
                                    <td><?= h($actors->other_phone) ?></td>
                                    <td><?= h($actors->suburb) ?></td>
                                    <td><?= h($actors->registed_with_RGD) ?></td>
                                    <td><?= h($actors->registed_with_Assembly) ?></td>
                                    <td><?= h($actors->other_related_activity) ?></td>
                                    <td><?= h($actors->additional_comments) ?></td>
                                    <td class="text-end min-w-125px actions">
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black"></path>
                                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-200px py-4" data-kt-menu="true" style="">
                                            <!--begin::Menu item-->
                                            
                                            <div class="menu-item px-3"> 
                                                <?= $this->Html->link(__('View'), ['controller' => 'Actors', 'action' => 'view', $actors->id]) ?>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'Actors', 'action' => 'edit', $actors->id]) ?>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Actors', 'action' => 'delete', $actors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actors->id)]) ?>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Action-->
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>