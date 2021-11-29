<div class="card">
    <div class="card-header">
        <div class="card-title">                                
        <div class="d-flex overflow-auto h-55px">
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary me-6 " href="profile">Overview</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary me-6" href="changeuserdetails">Change User Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-active-primary me-6 active" href="changepassword">Change Password</a>
            </li>
            <!--end::Nav item-->
        </ul>
    </div>
        </div>
        <div class="card-toolbar"> 

        </div>
    </div>

    <div class="column-responsive card-body">
        <div class="table align-middle table-row-dashed fs-6 gy-4">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('password');
                    echo $this->Form->control('retype_password',['type'=>'password']);        
                ?>
            </fieldset>
        </div>
        <div class="card-footer d-flex justify-content-end pt-5 pb-0">
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-active-primary btn-primary  ']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>