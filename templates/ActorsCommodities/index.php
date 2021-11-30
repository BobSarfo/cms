<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActorsCommodity[]|\Cake\Collection\CollectionInterface $actorsCommodities
 */
?>
<div id="kt_content_container" class="container-xxl">

	<div class="card">
       


    <!--begin::Card header-->        
        <h3 class="card-header border-0 pt-6"><?= __('Actors Commodities') ?></h3>
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
                                                <th><?= $this->Paginator->sort('actor_id') ?></th>
                                                <th><?= $this->Paginator->sort('commodity_id') ?></th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-bold">
                    <?php foreach ($actorsCommodities as $actorsCommodity): ?>
                    <tr>
                    <td><?= $actorsCommodity->has('actor') ? $this->Html->link($actorsCommodity->actor->name, ['controller' => 'Actors', 'action' => 'view', $actorsCommodity->actor->id]) : '' ?></td>
                    <td><?= $actorsCommodity->has('commodity') ? $this->Html->link($actorsCommodity->commodity->name, ['controller' => 'Commodities', 'action' => 'view', $actorsCommodity->commodity->id]) : '' ?></td>
<!--begin::Action=-->
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
