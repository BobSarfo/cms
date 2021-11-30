<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor $actor
 */
?>
<?php 
$session=$this ->request->getSession();        
$loggedin_user_role=$session->read('auth-role');
?>
<div class="flex-lg-row-fluid order-2 order-lg-1 mb-10 mb-lg-0">
    <div class="card card-flush pt-3 mb-5 mb-xl-10">

        <div class="card-header">
            <div class="card-title">                
                    <h2 class="fw-bolder">Actors</h2>
            </div>
            <div class="card-toolbar"> 
                <?= $this->Html->link(__('List Actors'), ['action' => 'index'], ['class' => 'btn btn-light-primary mx-2']) ?>
                
                <?php if($loggedin_user_role==="admin" ): ?>
                <?= $this->Html->link(__('Edit Actor'), ['action' => 'edit', $actor->id], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?php if($loggedin_user_role==="super" ): ?>
                <?= $this->Form->postLink(__('Delete Actor'), ['action' => 'delete', $actor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actor->id), 'class' => ' btn btn-light-danger mx-2']) ?>
                <?php endif ?>
                <?= $this->Html->link(__('New Actor'), ['action' => 'add'], ['class' => 'btn btn-light-primary mx-2']) ?>
                <?php endif ?>
            </div>
        </div>
        <div class="card-body pt-3">
            <div class="actors ">
                <h3><?= h($actor->name) ?></h3>
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                    <tr>
                        <th  class="text-gray-400 "><?= __('Name') ?></th>
                        <td  class="text-gray-800" ><?= h($actor->name) ?></td>
                    </tr > 
                    <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Sex') ?></th>
                        <td  class="text-gray-800"><?= $actor->has('sex') ? $this->Html->link($actor->sex->name, ['controller' => 'Sexes', 'action' => 'view', $actor->sex->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Disability') ?></th>
                        <td  class="text-gray-800"><?= $actor->has('disability') ? $this->Html->link($actor->disability->name, ['controller' => 'Disabilities', 'action' => 'view', $actor->disability->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Sector') ?></th>
                        <td  class="text-gray-800"><?= $actor->has('sector') ? $this->Html->link($actor->sector->name, ['controller' => 'Sectors', 'action' => 'view', $actor->sector->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th  class="text-gray-400 "><?= __('Phone') ?></th>
                        <td  class="text-gray-800" ><?= h($actor->phone) ?></td>
                    </tr > 
                    <tr>
                        <th  class="text-gray-400 "><?= __('Other Phone') ?></th>
                        <td  class="text-gray-800" ><?= h($actor->other_phone) ?></td>
                    </tr > 
                    <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Community') ?></th>
                        <td  class="text-gray-800"><?= $actor->has('community') ? $this->Html->link($actor->community->name, ['controller' => 'Communities', 'action' => 'view', $actor->community->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th  class="text-gray-400 "><?= __('Suburb') ?></th>
                        <td  class="text-gray-800" ><?= h($actor->suburb) ?></td>
                    </tr > 
                    <tr>
                        <th  class="text-gray-400 min-w-175px w-250px "><?= __('Production Scale') ?></th>
                        <td  class="text-gray-800"><?= $actor->has('production_scale') ? $this->Html->link($actor->production_scale->name, ['controller' => 'ProductionScales', 'action' => 'view', $actor->production_scale->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th  class="text-gray-400 "><?= __('Other Related Activity') ?></th>
                        <td  class="text-gray-800" ><?= h($actor->other_related_activity) ?></td>
                    </tr > 
                    <tr>
                        <th  class="text-gray-400 "><?= __('Additional Comments') ?></th>
                        <td  class="text-gray-800" ><?= h($actor->additional_comments) ?></td>
                    </tr > 
                    <tr>
                        <th class="text-gray-400 "><?= __('Date Of Birth') ?></th>
                        <td class="text-gray-800"><?= h($actor->date_of_birth) ?></td>
                    </tr>
                                            <tr>
                        <th class="text-gray-400 "><?= __('Created') ?></th>
                        <td class="text-gray-800"><?= h($actor->created) ?></td>
                    </tr>
                                            <tr>
                        <th class="text-gray-400 "><?= __('Modified') ?></th>
                        <td class="text-gray-800"><?= h($actor->modified) ?></td>
                    </tr>
                                                                                                                    <tr>
                        <th  class="text-gray-400 "><?= __('Registed With RGD') ?></th>
                        <td  class="text-gray-800"><?= $actor->registed_with_RGD ? __('Yes') : __('No'); ?></td>
                    </tr>
                                            <tr>
                        <th  class="text-gray-400 "><?= __('Registed With Assembly') ?></th>
                        <td  class="text-gray-800"><?= $actor->registed_with_Assembly ? __('Yes') : __('No'); ?></td>
                    </tr>
                </table>
                </div>
                </div>
                                                                                                                                        <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                        <h5 class="mb-4"><?= __('Related Commodities') ?></h5>
                        <?php $j=0 ?>
                        <?php if (!empty($actor->commodities)) : ?>
                            <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0" id="kt_subscriptions_table">
                            
                                <tr class="border-bottom border-gray-200 text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px"><?= __(++$j) ?></th>
                                    <th class="min-w-125px"><?= __('Name') ?></th>
                                    
                                    <?php if($loggedin_user_role==="super" ||$loggedin_user_role==="admin"): ?>

                                        <th class="text-end min-w-125px actions"><?= __('Actions') ?></th>
                                    <?php endif ?>
                                </tr>
                                <?php foreach ($actor->commodities as $commodities) : ?>
                                <tr>
                                    <td><?= h($commodities->name) ?></td>
                                    
                                <?php if($loggedin_user_role==="super" ||$loggedin_user_role==="admin"): ?>
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
                                                <?= $this->Html->link(__('View'), ['controller' => 'Commodities', 'action' => 'view', $commodities->id]) ?>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <?php if($loggedin_user_role==="super" ||$loggedin_user_role==="admin"): ?>
                                            <div class="menu-item px-3">
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'Commodities', 'action' => 'edit', $commodities->id]) ?>
                                            </div>
                                            <?php endif ?>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                             <?php if($loggedin_user_role==="super" ): ?>

                                            <div class="menu-item px-3">
                                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commodities', 'action' => 'delete', $commodities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commodities->id)]) ?>
                                            </div>
                                            <!--end::Menu item-->
                                            <?php endif ?>
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Action-->
                                    </td>
                                    <?php endif ?>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                        <h5 class="mb-4"><?= __('Related Enterprises') ?></h5>
                        <?php if (!empty($actor->enterprises)) : ?>
                            <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0" id="kt_subscriptions_table">
                            
                                <tr class="border-bottom border-gray-200 text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px"><?= __('#') ?></th>
                                    <th class="min-w-125px"><?= __('Name') ?></th>
                                    <th class="min-w-125px"><?= __('Enterprise Type Id') ?></th>
                                    <th class="min-w-125px"><?= __('Community Id') ?></th>
                                    <th class="min-w-125px"><?= __('Suburb') ?></th>
                                    <th class="min-w-125px"><?= __('Date Of Establishment') ?></th>
                                    <th class="min-w-125px"><?= __('Phone') ?></th>
                                    <th class="min-w-125px"><?= __('Number Of Employees') ?></th>
                                    <th class="min-w-125px"><?= __('Email') ?></th>
                                    <th class="min-w-125px"><?= __('RegistrationNo') ?></th>
                                    <th class="min-w-125px"><?= __('Created') ?></th>
                                    <th class="min-w-125px"><?= __('Modified') ?></th>
                                    <th class="min-w-125px"><?= __('Other Phone') ?></th>
                                    <th class="text-end min-w-125px actions"><?= __('Actions') ?></th>
                                </tr>
                                <?php $i = 0?>
                                <?php foreach ($actor->enterprises as $enterprises) : ?>
                                <tr>
                                    <td><?= h(++$i) ?></td>
                                    <td><?= h($enterprises->name) ?></td>
                                    <td><?= h($enterprises->enterprise_type_id) ?></td>
                                    <td><?= h($enterprises->community_id) ?></td>
                                    <td><?= h($enterprises->suburb) ?></td>
                                    <td><?= h($enterprises->date_of_establishment) ?></td>
                                    <td><?= h($enterprises->phone) ?></td>
                                    <td><?= h($enterprises->number_of_employees) ?></td>
                                    <td><?= h($enterprises->email) ?></td>
                                    <td><?= h($enterprises->registrationNo) ?></td>
                                    <td><?= h($enterprises->created) ?></td>
                                    <td><?= h($enterprises->modified) ?></td>
                                    <td><?= h($enterprises->other_phone) ?></td>
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
                                                <?= $this->Html->link(__('View'), ['controller' => 'Enterprises', 'action' => 'view', $enterprises->id]) ?>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <?php if($loggedin_user_role==="admin"||$loggedin_user_role==="super" ): ?>    
                                            <div class="menu-item px-3">
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'Enterprises', 'action' => 'edit', $enterprises->id]) ?>
                                            </div>
                                            <?php endif?>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            

                                            <?php if($loggedin_user_role==="super" ): ?>    
                                            <div class="menu-item px-3">
                                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enterprises', 'action' => 'delete', $enterprises->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enterprises->id)]) ?>
                                            </div>
                                            <?php endif?>
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
                                                                                                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                        <h5 class="mb-4"><?= __('Related Organisations') ?></h5>
                        <?php if (!empty($actor->organisations)) : ?>
                            <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">

                                <tr class="border-bottom border-gray-200 text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                                        <th class="min-w-125px"><?= __('#') ?></th>
                                                                        <th class="min-w-125px"><?= __('Name') ?></th>
                                                                        <th class="min-w-125px"><?= __('Community Id') ?></th>
                                                                        <th class="min-w-125px"><?= __('Created') ?></th>
                                                                        <th class="min-w-125px"><?= __('Modified') ?></th>
                                                                        <th class="text-end min-w-125px actions"><?= __('Actions') ?></th>
                                </tr>
                                <?php $k=0?>
                                <?php foreach ($actor->organisations as $organisations) : ?>
                                <tr>
                                                                        <td><?= h(++$k) ?></td>
                                                                        <td><?= h($organisations->name) ?></td>
                                                                        <td><?= h($organisations->community_id) ?></td>
                                                                        <td><?= h($organisations->created) ?></td>
                                                                        <td><?= h($organisations->modified) ?></td>
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
                                                <?= $this->Html->link(__('View'), ['controller' => 'Organisations', 'action' => 'view', $organisations->id]) ?>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <?php if($loggedin_user_role==="admin"||$loggedin_user_role==="super" ): ?>    

                                            <div class="menu-item px-3">
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'Organisations', 'action' => 'edit', $organisations->id]) ?>
                                            </div>
                                            <?php endif?>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <?php if($loggedin_user_role==="super" ): ?>    
                                                <div class="menu-item px-3">
                                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Organisations', 'action' => 'delete', $organisations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organisations->id)]) ?>
                                                </div>
                                            <?php endif?>
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
                <div class="d-flex flex-wrap py-5">
                    <!--begin::Row-->
                    <div class="table-responsive">
                        <h5 class="mb-4"><?= __('Related Value Chain Roles') ?></h5>
                        <?php if (!empty($actor->value_chain_roles)) : ?>
                            <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0">
                            
                                <tr class="border-bottom border-gray-200 text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px"><?= __('#') ?></th>
                                    <th class="min-w-125px"><?= __('Name') ?></th>
                                    <th class="text-end min-w-125px actions"><?= __('Actions') ?></th>
                                </tr>
                                <?php $l = 0?>
                                <?php foreach ($actor->value_chain_roles as $valueChainRoles) : ?>
                                <tr>  
                                    <td><?= h(++$l) ?></td>
                                    <td><?= h($valueChainRoles->name) ?></td>
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
                                                <?= $this->Html->link(__('View'), ['controller' => 'ValueChainRoles', 'action' => 'view', $valueChainRoles->id]) ?>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item--> 
                                            <?php if($loggedin_user_role==="admin"||$loggedin_user_role==="super" ): ?>    

                                            <div class="menu-item px-3">
                                                <?= $this->Html->link(__('Edit'), ['controller' => 'ValueChainRoles', 'action' => 'edit', $valueChainRoles->id]) ?>
                                            </div>
                                            <?php endif ?>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <?php if($loggedin_user_role==="super" ): ?>    
                                                
                                                <div class="menu-item px-3">
                                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ValueChainRoles', 'action' => 'delete', $valueChainRoles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $valueChainRoles->id)]) ?>
                                                </div>
                                            <?php endif ?>
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