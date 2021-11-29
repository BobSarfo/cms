


        <div class="card">
    <div class="card-header">
        <div class="card-title">                                
        <div class="d-flex overflow-auto h-55px">
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary me-6 active" href="profile">Overview</a>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item">
                <a class="nav-link text-active-primary me-6" href="changeuserdetails">Change User Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-active-primary me-6" href="changepassword">Change Password</a>
            </li>
            <!--end::Nav item-->
        </ul>
    </div>
        </div>
        <div class="card-toolbar"> 

        </div>
    </div>

    
    <div class=" column-responsive card-body pt-3">
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
                    </tr>
                    <tr>
                        <th  class="text-gray-400 "><?= __('Department') ?></th>
                        <td  class="text-gray-800" ><?= h($department) ?></td>
                    </tr>
                    <tr>
                        <th class="text-gray-400 "><?= __('Created') ?></th>
                        <td class="text-gray-800"><?= h($user->created) ?></td>
                    </tr>
                    <tr>
                        <th class="text-gray-400 "><?= __('Modified') ?></th>
                        <td class="text-gray-800"><?= h($user->modified) ?></td>
                    </tr>
                </table>
                </div>
            </div>
         </div>
        </div>
</div>