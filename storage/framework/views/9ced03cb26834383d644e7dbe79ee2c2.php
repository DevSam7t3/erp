
<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container gap-2">
        <div class="gap-2">
            <div class="row gap-2 mb-2  ">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/account-dashboard" class="col bg-blue-500 px-2 py-4 rounded text-center dash-link">
                    <img style="width: 50px" src="/assets/images/icons/accounting.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Accounting')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/hrm-dashboard" class="col bg-blue-500 px-2 py-4 rounded text-center dash-link">
                    <img style="width: 50px" src="/assets/images/icons/hrm.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('HRM')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/crm-dashboard" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/crm.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('CRM')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/project-dashboard" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/project.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Project')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/pos-dashboard" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/pos.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('POS')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/employee" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/employes.png" alt="">
                    <h5 style="color: #656565 !important" class="text-gray-700 m-0 fs-6">
                        <?php echo e(__('Employee Setup')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/event" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/event.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Event Setup')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/meeting" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/meeting.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Meeting')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/account-assets" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/asset.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Asset Setup')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/budget" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/budget.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Budget Planner')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/goal" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/financial-goal.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Financial Goal')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/taxes" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/accounting-setup.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Accounting Setup')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/print-setting" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/print-setting.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Print Setting')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/leads" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/leads.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Leads')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/deals" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/deals.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Deals')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/contract" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/contract.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Contract')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/pipelines" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/crm-system-setup.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('CRM System Setup')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/projects" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/projects.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Projects')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/taskboard/list" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/tasks.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Tasks')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/timesheet-list" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/time-sheet.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('TimeSheet')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/bugs-report/list" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/bugs.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Bugs')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/calendar/all" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/task-calender.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Task Calendar')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/time-tracker" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/tracker.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Tracker')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/project_report" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/project-report.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Project Report')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/users" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/users.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Users')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/roles" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/roles.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Roles')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/clients" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/clients.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Clients')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/productservice" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/products.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Product & Services')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/productstock" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/product-stock.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Product Stock')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/warehouse" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/warehouse.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Warehouse')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/purchase" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/purchase.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Purchase')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/pos" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/add-pos.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Add POS')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/report/pos" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/pos-report.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('POS Report')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/warehouse-transfer" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/transfer.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Transfer')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/zoom-meeting" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/zoom-meeting.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Zoom Meetings')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/chats" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/messenger.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Messenger')); ?></h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/notification-templates" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/notifications.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('Notification Template')); ?></h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/settings" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/system-settings.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6"><?php echo e(__('System Settings')); ?></h5>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\erp\resources\views/gridView.blade.php ENDPATH**/ ?>