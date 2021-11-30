<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="flex-lg-row-fluid order-2 order-lg-1 mb-10 mb-lg-0">
    <div class="card card-flush pt-3 mb-5 mb-xl-10">

        <div class="card-header">
            <div class="card-title">                
                    <h2 class="fw-bolder">Users</h2>
            </div>
            <div class="card-toolbar"> 
                <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'btn btn-light-primary mx-2']) ?>
                            </div>
        </div>
        <div class="card-body pt-3">
            <div class="users ">
                <h3><?= h($user->name) ?></h3>
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                                                                                <tr>
                        <th  class="text-gray-400 "><?= __('Name') ?></th>
                        <td  class="text-gray-800" ><?= h($user->name) ?></td>
                    </tr > 
                                                                                        <tr>
                        <th  class="text-gray-400 "><?= __('Username') ?></th>
                        <td  class="text-gray-800" ><?= h($user->username) ?></td>
                    </tr > 
                                                                                                            <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Department') ?></th>
                        <td  class="text-gray-800"><?= $user->has('department') ? $this->Html->link($user->department->name, ['controller' => 'Departments', 'action' => 'view', $user->department->id]) : '' ?></td>
                    </tr>
                                                                                                        <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Role') ?></th>
                        <td  class="text-gray-800"><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                    </tr>
                                                                                                                                                                <tr>
                        <th class="text-gray-400 "><?= __('Id') ?></th>
                        <td class="text-gray-800"><?= $this->Number->format($user->id) ?></td>
                    </tr>
                                                                                                                    <tr>
                        <th class="text-gray-400 "><?= __('Created') ?></th>
                        <td class="text-gray-800"><?= h($user->created) ?></td>
                    </tr>
                                            <tr>
                        <th class="text-gray-400 "><?= __('Modified') ?></th>
                        <td class="text-gray-800"><?= h($user->modified) ?></td>
                    </tr>
                                                                                                                    <tr>
                        <th  class="text-gray-400 "><?= __('Isreset') ?></th>
                        <td  class="text-gray-800"><?= $user->isreset ? __('Yes') : __('No'); ?></td>
                    </tr>
                                                                </table>
                </div>
                </div>
                                                                        </div>
        </div>
    </div>
</div>