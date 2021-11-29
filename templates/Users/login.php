<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<?= $this->Form->create() ?>
								<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
                                    <img alt="Logo" src="/img/shama-logo.png" class=" mb-3 -h-50px h-lg-60px" />
									<img alt="Logo" src="/img/giz.jpeg" class=" mb-3 -h-50px h-lg-60px" />
                                    
									<?= $this->Flash->render() ?>
									<h1 class="text-dark mb-3">Sign In to Shama Agribusiness Database</h1>
								</div>
								<!--begin::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-5">
									<!--begin::Label-->									
									<?= $this->Form->control('username', ['required' => true]) ?>
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Wrapper-->
									
       								 <?= $this->Form->control('password', ['required' => true]) ?>		
									
									<a class="underline text-sm text-primary mt-2 hover:text-gray-900" href="/users/reset">
                       					Forgot your password?'
                    				</a>
								</div>
								<div class="fv-row mb-10">
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center">
									<!--begin::Submit button-->

									<?= $this->Form->submit(__('Login'),['class'=>'btn btn-lg btn-primary w-100 mb-5']) ?>
									<!--end::Submit button-->									
								</div>
								<!--end::Actions-->
							
							
							<?= $this->Form->end() ?>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
						<!--begin::Links-->
						<div class="d-flex flex-center fw-bold fs-6">
							<a href="https://shamadistrict.gov.gh" class="text-muted text-hover-primary px-2" target="_blank">About Shama</a>
							<a href="https://lgs.gov.gh" class="text-muted text-hover-primary px-2" target="_blank">Local Government</a>
						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="/shama/webroot/js/plugins.bundle.js"></script>
		<script src="/shama/webroot/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="/shama/webroot/js/general.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>