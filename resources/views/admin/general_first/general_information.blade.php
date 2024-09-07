@extends('admin.layouts.app')
@section('panel')
<style>
    body {
      font-family: Arial, sans-serif;
    }

    .tab-container {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      background-color: #f1f1f1;
    }

    .tab {
      padding: 10px 20px;
      cursor: pointer;
      border: 1px solid #ccc;
      border-bottom: none;
      background-color: #f9f9f9;
    }

    .tab.active {
      background-color: white;
      border-bottom: 2px solid #4634ff;
    }

    .tab-content {
      display: none;
      padding: 20px;
      border: 1px solid #ccc;
      background-color: white;
    }

    .tab-content.active {
      display: block;
    }
  </style>

<div class="tab-container">
  <div class="tab active" data-tab="1">General Imformation</div>
  <div class="tab" data-tab="2">Material Information</div>
  <div class="tab" data-tab="3">Dispensing Information</div>
  <div class="tab" data-tab="4">Quality Control</div>
  <div class="tab" data-tab="5">Audit and Compliance</div>
  <div class="tab" data-tab="6">Inventory and Logistics</div>
  <div class="tab" data-tab="7">System-Generated Data</div>
</div>

<form id="form">
  <div class="tab-content active" id="tab-1">
    <div class="card-body p-0">
        <div class="table-responsive--sm table-responsive">
            <table class="table table--light">
                <thead>
                    <tr>
                        <th>@lang('Receiving Order ID')</th>
                        <th>@lang('Supplier Name')</th>
                        <th>@lang('Product Code')</th>
                        <th>@lang('Batch Number')</th>
                        <th>@lang('Quantity Received')</th>
                        <th>@lang('UOM')</th>
                        <th>@lang('Manufacturing Date')</th>
                        <th>@lang('Expiry Date')</th>
                        <th>@lang('Storage Location')</th>
                        <th>@lang('Location ID')</th>
                        <th>@lang('Rack Id')</th>
                        <th>@lang('Quality Check Status')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Supplier A</td>
                        <td>PRD001</td>
                        <td>Batch001</td>
                        <td>100</td>
                        <td>KG</td>
                        <td>2023-01-01</td>
                        <td>2025-12-31</td>
                        <td>Warehouse 1, Aisle 3</td>
                        <td>LOC001</td>
                        <td>RACK001</td>
                        <td>Passed</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Supplier B</td>
                        <td>PRD002</td>
                        <td>Batch002</td>
                        <td>50</td>
                        <td>KG</td>
                        <td>2023-02-01</td>
                        <td>2024-11-15</td>
                        <td>Warehouse 2, Aisle 1</td>
                        <td>LOC002</td>
                        <td>RACK002</td>
                        <td>Failed</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Supplier C</td>
                        <td>PRD003</td>
                        <td>Batch003</td>
                        <td>75</td>
                        <td>KG</td>
                        <td>2023-03-10</td>
                        <td>2023-09-10</td>
                        <td>Warehouse 3, Aisle 5</td>
                        <td>LOC003</td>
                        <td>RACK003</td>
                        <td>Pending</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
  </div>
  <div class="tab-content" id="tab-2">
    <h3>Tab 2 Content</h3>
    <input type="text" name="field2" placeholder="Field for Tab 2">
  </div>
  <div class="tab-content" id="tab-3">
    <h3>Tab 3 Content</h3>
    <input type="text" name="field3" placeholder="Field for Tab 3">
  </div>
  <div class="tab-content" id="tab-4">
    <h3>Tab 4 Content</h3>
    <input type="text" name="field4" placeholder="Field for Tab 4">
  </div>
  <div class="tab-content" id="tab-5">
    <h3>Tab 5 Content</h3>
    <input type="text" name="field5" placeholder="Field for Tab 5">
  </div>
  <div class="tab-content" id="tab-6">
    <h3>Tab 6 Content</h3>
    <input type="text" name="field6" placeholder="Field for Tab 6">
  </div>
  <div class="tab-content" id="tab-7">
    <h3>Tab 7 Content</h3>
    <input type="text" name="field7" placeholder="Field for Tab 7">
  </div>

  <button type="submit">Submit Form</button>
</form>

<script>
  const tabs = document.querySelectorAll('.tab');
  const tabContents = document.querySelectorAll('.tab-content');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Remove active class from all tabs and content
      tabs.forEach(t => t.classList.remove('active'));
      tabContents.forEach(tc => tc.classList.remove('active'));

      // Add active class to the clicked tab and corresponding content
      tab.classList.add('active');
      document.getElementById('tab-' + tab.dataset.tab).classList.add('active');
    });
  });
</script>

@endsection

@push('breadcrumb-plugins')
    <x-search-form />
    @can('admin.newexp.store')
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New General Information')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
    @endcan
    {{-- @can('')
        <button type="button" class="btn btn-sm btn-outline--info importBtn">
            <i class="las la-cloud-upload-alt"></i>@lang('Import CSV')
        </button>
    @endcan --}}
@endpush