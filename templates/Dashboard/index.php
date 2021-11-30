<?php 
?>

<div class="">
	<!--begin::Mixed Widget 2-->
	<div class="card card-xxl-stretch">
		<!--begin::Header-->
		<div class="card-header border-0 bg-danger py-5">
			<h3 class="card-title fw-bolder text-white">Statistics</h3>
			<div class="card-toolbar">
				
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body p-0">
			<!--begin::Chart-->
			<div class="mixed-widget-2-chart h-100 d-inline-block card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 200px"></div>
			<!--end::Chart-->
			<!--begin::Stats-->
			<div class="card-p mt-n20 position-relative">
				<!--begin::Row-->
				<div class="row g-0">
					<!--begin::Col-->
					<div class=" d-flex justify-content-between col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
						<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
						<div>	
							<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
									<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
									<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
									<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<a href="#" class="text-warning fw-bold fs-6">Total Agriculture Value Chain Actors</a>
						</div>
						<div class="d-flex align-items-center mr-25">
							<a href="#" class="text-warning fw-bold fs-6 mt-2"><h1  class="text-warning"><?= h($actorCount) ?></h1></a>
						</div>
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class=" d-flex justify-content-between col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
						<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
						<div>	
							<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
									<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
									<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
									<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<a href="#" class="text-warning fw-bold fs-6">Total Enterprises</a>
						</div>
						<div class="d-flex align-items-center mr-25">
							<a href="#" class="text-warning fw-bold fs-6 mt-2"><h1  class="text-warning"><?= h($enterpriseCount) ?></h1></a>
						</div>
					</div>
					<!--end::Col-->
					
				</div>
				<!--end::Row-->
				<!--begin::Row-->
				<div class="row g-0">
					<!--begin::Col-->
					<div class="d-flex justify-content-between col bg-light-success px-6 py-8 rounded-2 me-7">
						<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
						<div>	
							<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
									<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<a href="#" class="text-primary fw-bold fs-6 mt-2">Total Organisations (FBOs and Associations)</a>
						</div>
						<div class="d-flex align-items-center mr-25">					
							<a href="#" class="text-primary fw-bold fs-6 mt-2"><h1  class="text-primary"><?= h($organisationCount) ?></h1></a>
						</div>
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="d-flex justify-content-between col bg-light-success px-6 py-8 rounded-2 me-7">
						<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
						<div>	
							<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
									<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<a href="#" class="text-primary fw-bold fs-6 mt-2"> Women Agri Value Chain Actors</a>
						</div>
						<div class="d-flex align-items-center mr-25">							
							<a href="#" class="text-primary fw-bold fs-6 mt-2"><h1  class="text-primary"><?= h($womenActors) ?></h1></a>
						</div>
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="d-flex justify-content-between col bg-light-success px-6 py-8 rounded-2 me-7">
						<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
						<div>	
							<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
									<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<a href="#" class="text-primary fw-bold fs-6 mt-2">Women Led Business</a>
						</div>
						<div class="d-flex align-items-center mr-25">							
							<a href="#" class="text-primary fw-bold fs-6 mt-2"><h1 class="text-primary"><?= h($womenEnterprises) ?></h1></a>
						</div>
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Stats-->
		</div>
		<!--end::Body-->
	</div>
	<!--end::Mixed Widget 2-->
</div>