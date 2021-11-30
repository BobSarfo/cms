<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organisation[]|\Cake\Collection\CollectionInterface $organisations
 */
?>
<div id="kt_content_container" class="container-xxl">

	<div class="card">
       


    <!--begin::Card header-->        
        <h3 class="card-header border-0 pt-6"><?= __('Organisations') ?></h3>
		<div class = "card-header border-0 pt-0">
			<!--begin::Card title-->
			<div class="card-title">
				<!--begin::Search-->
				<div class="d-flex align-items-center position-relative my-1">
					<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
					<span class="svg-icon svg-icon-1 position-absolute ms-6">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
							<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
					<input type="text" data-kt-subscription-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Subscriptions" />
				</div>
				<!--end::Search-->
			</div>
			<!--begin::Card title-->
			<!--begin::Card toolbar-->
			<div class="card-toolbar">
				<!--begin::Toolbar-->
				<div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
					<!--begin::Export-->
					<!--end::Export-->
					<!--begin::Add subscription-->
					<span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                    </svg>
                     <?= $this->Html->link(__('New Organisation'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
   					</span>
					<!--end::Add subscription-->
				</div>
				<!--end::Toolbar-->
				<!--begin::Group actions-->
				<div class="d-flex justify-content-end align-items-center d-none" data-kt-subscription-table-toolbar="selected">
					<div class="fw-bolder me-5">
					<span class="me-2" data-kt-subscription-table-select="selected_count"></span>Selected</div>
					<button type="button" class="btn btn-danger" data-kt-subscription-table-select="delete_selected">Delete Selected</button>
				</div>
				<!--end::Group actions-->
			</div>
			<!--end::Card toolbar-->
		</div>
		<!--end::Card header-->
   
        <div class="card-body pt-0">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-2" id="kt_subscriptions_table">
                <thead>
                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                <th><?= $this->Paginator->sort('id') ?></th>
                                                <th><?= $this->Paginator->sort('name') ?></th>
                                                <th><?= $this->Paginator->sort('community_id') ?></th>
                                                <th><?= $this->Paginator->sort('created') ?></th>
                                                <th><?= $this->Paginator->sort('modified') ?></th>
                                                <th class="actions text-end"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-bold">
                    <?php foreach ($organisations as $organisation): ?>
                    <tr>
                                                                                                                                                                                                                                                                                                                <td><?= $this->Number->format($organisation->id) ?></td>
                                                                                                                                                                                                                                                                                                                                                                        <td><?= h($organisation->name) ?></td>
                                                                                                                                                                                                                                                        <td><?= $organisation->has('community') ? $this->Html->link($organisation->community->name, ['controller' => 'Communities', 'action' => 'view', $organisation->community->id]) : '' ?></td>
                                                                                                                                                                                                                                                                                                                                                                                                                                <td><?= h($organisation->created) ?></td>
                                                                                                                                                                                                                                                                                                                                                                        <td><?= h($organisation->modified) ?></td>
                                                                                                                                        <!--begin::Action=-->
                        <td class="text-end">
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon--></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-2" data-kt-menu="true">
                                <!--begin::Menu item-->
                                
                                
                                <div class="menu-item px-3">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $organisation->id],['class'=>'menu-link px-3']) ?>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $organisation->id],['class'=>'menu-link px-3']) ?>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item badge-light-danger px-3   ">
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $organisation->id], ['class'=>'menu-link px-3','confirm' => __('Are you sure you want to delete # {0}?', $organisation->id)]) ?>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                        <!--end::Action=-->
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-body paginator ">
            <ul class="pagination">
                <div class="mx-1">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                </div>
                <div class="mx-1">
                <?= $this->Paginator->prev('< ' . __('previous'),['class' => ' btn btn-sm btn-light-primary']) ?>
                </div>
                <div class="mx-1">
                <?= $this->Paginator->numbers() ?>
                <div class="mx-1">
                <?= $this->Paginator->next(__('next') . ' >',['class' => ' btn btn-sm btn-light-primary']) ?>
                </div>
                <div class="mx-1">
                <?= $this->Paginator->last(__('last') . ' >>',['class' => ' btn btn-sm btn-light-primary'] )?>
                </div>
            </ul>
            <p><?= $this->Paginator->counter(__('Page  of , showing  record(s) out of  total')) ?></p>
        </div>
    </div>
</div>
