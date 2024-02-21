@extends('layouts.admin')
@section('page-title')
    {{ __('Dashboard') }}
@endsection
@section('content')
    <div class="container gap-2">
        <div class="gap-2">
            <div class="row gap-2 mb-2  ">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/account-dashboard" class="col bg-blue-500 px-2 py-4 rounded text-center dash-link">
                    <img style="width: 50px" src="/assets/images/icons/accounting.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Accounting') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/hrm-dashboard" class="col bg-blue-500 px-2 py-4 rounded text-center dash-link">
                    <img style="width: 50px" src="/assets/images/icons/hrm.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('HRM') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/crm-dashboard" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/crm.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('CRM') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/project-dashboard" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/project.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Project') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/pos-dashboard" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/pos.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('POS') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/employee" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/employes.png" alt="">
                    <h5 style="color: #656565 !important" class="text-gray-700 m-0 fs-6">
                        {{ __('Employee Setup') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/event" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/event.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Event Setup') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/meeting" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/meeting.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Meeting') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/account-assets" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/asset.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Asset Setup') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/budget" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/budget.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Budget Planner') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/goal" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/financial-goal.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Financial Goal') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/taxes" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/accounting-setup.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Accounting Setup') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/print-setting" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/print-setting.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Print Setting') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/leads" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/leads.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Leads') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/deals" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/deals.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Deals') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/contract" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/contract.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Contract') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/pipelines" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/crm-system-setup.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('CRM System Setup') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/projects" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/projects.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Projects') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/taskboard/list" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/tasks.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Tasks') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/timesheet-list" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/time-sheet.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('TimeSheet') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/bugs-report/list" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/bugs.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Bugs') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/calendar/all" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/task-calender.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Task Calendar') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/time-tracker" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/tracker.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Tracker') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/project_report" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/project-report.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Project Report') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/users" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/users.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Users') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/roles" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/roles.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Roles') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/clients" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/clients.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Clients') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/productservice" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/products.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Product & Services') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/productstock" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/product-stock.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Product Stock') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/warehouse" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/warehouse.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Warehouse') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/purchase" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/purchase.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Purchase') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/pos" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/add-pos.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Add POS') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/report/pos" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/pos-report.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('POS Report') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/warehouse-transfer" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/transfer.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Transfer') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/zoom-meeting" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/zoom-meeting.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Zoom Meetings') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/chats" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/messenger.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Messenger') }}</h5>
                </a>
            </div>
            <div class="row gap-2 mb-2 dash-item">
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/notification-templates" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/notifications.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('Notification Template') }}</h5>
                </a>
                <a style="background: #FFFFFF; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 1rem;  "
                    href="/settings" class="col bg-blue-500 px-2 py-4 rounded text-center">
                    <img style="width: 50px" src="/assets/images/icons/system-settings.png" alt="">
                    <h5 style="color: #656565 !important" class="m-0 fs-6">{{ __('System Settings') }}</h5>
                </a>
            </div>
        </div>
    </div>
@endsection
