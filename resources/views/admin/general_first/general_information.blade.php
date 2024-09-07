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

    .btn-sm{
        margin-left: 90%;
        margin-bottom: 20px;
        border: 1px solid#4634ff;
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
        {{-- <x-search-form /> --}}
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-bs-toggle="modal" data-bs-target="#cuModal">Add New</button>


        <div class="table-responsive--sm table-responsive">
            <table class="table table--light">
                <thead>
                    <tr>
                        <th>@lang('Batch/Lot Number')</th>
                        <th>@lang('Product /Material Name')</th>
                        <th>@lang('Production Order Number')</th>
                        <th>@lang('Weighing Date and Time')</th>
                        <th>@lang('Operator Name/ID')</th>
                      
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse($newexpMaterial as $new) --}}
                        <tr>
                    <td>BATCH6789</td>
                    <td>Product A</td>
                    <td>PO123456</td>
                    <td>2024-08-15 14:30</td>
                    <td>John Doe / OP001</td>
                    </tr>
                    <tr>
                    <td>BATCH5432</td>
                    <td>Product B</td>
                    <td>PO789012</td>
                    <td>2024-07-10 10:00</td>
                    <td>Jane Smith / OP002</td>
                    </tr>
                    <tr>
                    <td>BATCH1122</td>
                    <td>Product C</td>
                    <td>PO345678</td>
                    <td>2023-06-05 09:45</td>
                    <td>Mark Brown / OP003</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
</div>
<div class="tab-content" id="tab-2">
    <div class="card-body p-0">

        <button type="button" class="btn btn-sm btn-outline--primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModaltwo">Add New</button>

        <div class="table-responsive--sm table-responsive">
            <table class="table table--light">
                <thead>
                    <tr>
                        <th>@lang('Batch/Lot Number')</th>
                        <th>@lang('Product /Material Name')</th>
                        <th>@lang('Production Order Number')</th>
                        <th>@lang('Weighing Date and Time')</th>
                        <th>@lang('Operator Name/ID')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BATCH6789</td>
                        <td>Product A</td>
                        <td>PO123456</td>
                        <td>2024-08-15 14:30</td>
                        <td>John Doe / OP001</td>
                    </tr>
                    <tr>
                        <td>BATCH5432</td>
                        <td>Product B</td>
                        <td>PO789012</td>
                        <td>2024-07-10 10:00</td>
                        <td>Jane Smith / OP002</td>
                    </tr>
                    <tr>
                        <td>BATCH1122</td>
                        <td>Product C</td>
                        <td>PO345678</td>
                        <td>2023-06-05 09:45</td>
                        <td>Mark Brown / OP003</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="tab-content" id="tab-3">
    <div class="card-body p-0">
        {{-- <x-search-form /> --}}
        <button type="button" class="btn btn-sm btn-outline--primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModalthree">Add New</button>


        <div class="table-responsive--sm table-responsive">
            <table class="table table--light">
                <thead>
                    <tr>
                        <th>@lang('Dispensing Container ID')</th>
                        <th>@lang('Dispensed Quantity')</th>
                        <th>@lang('Container Type')</th>
                        <th>@lang('Container Weight (Tare)')</th>
                        <th>@lang('Net Weight')</th>
                        <th>@lang('Packaging Information')</th>
                      
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse($newexpMaterial as $new) --}}
                    <tr>
                        <td>100 kg</td> <!-- Dispensing Container ID -->
                        <td>98 kg</td> <!-- Dispensed Quantity -->
                        <td>±2 kg</td> <!-- Container Type -->
                        <td>WS1234 / Calibrated</td> <!-- Container Weight (Tare) -->
                        <td>Room 101</td> <!-- Net Weight -->
                        <td>23°C, 50% Humidity</td> <!-- Packaging Information -->
                    </tr>
                    <tr>
                        <td>200 kg</td>
                        <td>198 kg</td>
                        <td>±3 kg</td>
                        <td>WS5678 / Calibrated</td>
                        <td>Room 102</td>
                        <td>25°C, 45% Humidity</td>
                    </tr>
                    <tr>
                        <td>150 kg</td>
                        <td>149 kg</td>
                        <td>±2 kg</td>
                        <td>WS9101 / Not Calibrated</td>
                        <td>Room 103</td>
                        <td>22°C, 55% Humidity</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>

</div>
<div class="tab-content" id="tab-4">
    <div class="card-body p-0">
    <button type="button" class="btn btn-sm btn-outline--primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModalfour">Add New</button>
    <div class="table-responsive--sm table-responsive">
        <table class="table table--light">
            <thead>
                <tr>
                    <th>@lang('Sample Taken (Yes/No)')</th>
                    <th>@lang('QC Release Status')</th>
                    <th>@lang('Deviation Notes')</th>
                    <th>@lang('Approval Signature/ID')</th>
                    <!-- <th>@lang('Net Weight')</th>
                    <th>@lang('Packaging Information')</th> -->
                </tr>
            </thead>
            <tbody>
                {{-- @forelse($newexpMaterial as $new) --}}
                <tr>
                    <td>Yes</td> <!-- Sample Taken (Yes/No) -->
                    <td>Released</td> <!-- QC Release Status -->
                    <td>No deviations</td> <!-- Deviation Notes -->
                    <td>Signature001</td> <!-- Approval Signature/ID -->
                </tr>
                <tr>
                    <td>No</td>
                    <td>Pending</td>
                    <td>Requires re-check</td>
                    <td>Signature002</td>
                </tr>
                <tr>
                    <td>Yes</td>
                    <td>Released</td>
                    <td>Minor deviation observed</td>
                    <td>Signature003</td>
                </tr>
            
            </tbody>
        </table>
        
    </div>
</div>
</div>
<div class="tab-content" id="tab-5">
    <div class="card-body p-0">
        {{-- <div class="tab-content" id="tab-4"> --}}
    <button type="button" class="btn btn-sm btn-outline--primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModalfive">Add New</button>
    <div class="table-responsive--sm table-responsive">
        <table class="table table--light">
            <thead>
                <tr>
                    <th>@lang('Electronic Record Signatures')</th>
                    <th>@lang('Audit Log ID')</th>
                    <th>@lang('SOP Version')</th>
                    <th>@lang('Regulatory Compliance Codes')</th>
                    <!-- <th>@lang('Net Weight')</th>
                    <th>@lang('Packaging Information')</th> -->
                </tr>
            </thead>
            <tbody>
                {{-- @forelse($newexpMaterial as $new) --}}
                <tr>
                    <td>Yes</td> <!-- Electronic Record Signatures -->
                    <td>AL123456</td> <!-- Audit Log ID -->
                    <td>SOP v1.0</td> <!-- SOP Version -->
                    <td>RC001</td> <!-- Regulatory Compliance Codes -->
                </tr>
                <tr>
                    <td>No</td>
                    <td>AL654321</td>
                    <td>SOP v2.1</td>
                    <td>RC002</td>
                </tr>
                <tr>
                    <td>Yes</td>
                    <td>AL987654</td>
                    <td>SOP v3.5</td>
                    <td>RC003</td>
                </tr>
            
            </tbody>
        </table>
        
    </div>
</div>    

</div>
<div class="tab-content" id="tab-6">
    <div class="card-body p-0">
            <button type="button" class="btn btn-sm btn-outline--primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModalsix">Add New</button>
    <div class="table-responsive--sm table-responsive">
        <table class="table table--light">
            <thead>
                <tr>
                    <th>@lang('Inventory Status')</th>
                    <th>@lang('Warehouse/Storage Location')</th>
                    <th>@lang('Reorder Level')</th>
                    <th>@lang('Expiry Date')</th>
                    <!-- <th>@lang('Net Weight')</th>
                    <th>@lang('Packaging Information')</th> -->
                </tr>
            </thead>
            <tbody>
                {{-- @forelse($newexpMaterial as $new) --}}
                <tr>
                    <td>In Stock</td> <!-- Inventory Status -->
                    <td>Warehouse A - Shelf 5</td> <!-- Warehouse/Storage Location -->
                    <td>50 units</td> <!-- Reorder Level -->
                    <td>2024-12-31</td> <!-- Expiry Date -->
                </tr>
                <tr>
                    <td>Out of Stock</td>
                    <td>Warehouse B - Shelf 2</td>
                    <td>100 units</td>
                    <td>2025-03-15</td>
                </tr>
                <tr>
                    <td>In Stock</td>
                    <td>Warehouse C - Shelf 1</td>
                    <td>30 units</td>
                    <td>2024-09-30</td>
                </tr>
            
            </tbody>
        </table>
        
    </div>
</div>  
</div>
<div class="tab-content" id="tab-7">
    <div class="card-body p-0">
    <button type="button" class="btn btn-sm btn-outline--primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModalseven">Add New</button>
    <div class="table-responsive--sm table-responsive">
        <table class="table table--light">
            <thead>
                <tr>
                    <th>@lang('Transaction ID')</th>
                    <th>@lang('Weighing Session ID')</th>
                    <th>@lang('Barcode/QR Code')</th>
                    
                    <!-- <th>@lang('Net Weight')</th>
                    <th>@lang('Packaging Information')</th> -->
                </tr>
            </thead>
            <tbody>
                {{-- @forelse($newexpMaterial as $new) --}}
                <tr>
                    <td>TXN00123</td> <!-- Transaction ID -->
                    <td>WS001</td> <!-- Weighing Session ID -->
                    <td>123456789012 (QR)</td> <!-- Barcode/QR Code -->
                </tr>
                <tr>
                    <td>TXN00456</td>
                    <td>WS002</td>
                    <td>987654321098 (QR)</td>
                </tr>
                <tr>
                    <td>TXN00789</td>
                    <td>WS003</td>
                    <td>564738291034 (QR)</td>
                </tr>
            
            </tbody>
        </table>
        
    </div>
</div>   

</div>
<!-- Modal 1: General Information Modal -->
<div id="cuModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">General Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.newexp.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>@lang('Batch/Lot Number')</label>
                        <input type="text" name="batch_no_gen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Product /Material Name')</label>
                        <input type="text" name="product_material_gen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Production Order Number')</label>
                        <input type="text" name="product_order_no_gen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Weighing Date and Time')</label>
                        <input type="date" name="weight_date_time" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Operator Name/ID')</label>
                        <input type="text" name="operator_name" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">@lang('Save')</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('Close')</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal 2: Material Information Modal -->
<div id="cuModaltwo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cuModaltwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Material Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.newexp.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>@lang('Batch/Lot Number')</label>
                        <input type="text" name="batch_no_gen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Product /Material Name')</label>
                        <input type="text" name="product_material_gen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Production Order Number')</label>
                        <input type="text" name="product_order_no_gen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Weighing Date and Time')</label>
                        <input type="date" name="weight_date_time" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Operator Name/ID')</label>
                        <input type="text" name="operator_name" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">@lang('Save')</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('Close')</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="cuModalthree" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cuModaltwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Dispensing Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.newexp.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>@lang('Dispensing Container ID')</label>
                        <input type="text" name="target_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Dispensed Quantity')</label>
                        <input type="text" name="actual_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Container Type')</label>
                        <input type="text" name="tolerance_range" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Container Weight (Tare)')</label>
                        <input type="date" name="weighing_scale_id" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Net Weight')</label>
                        <input type="text" name="weighing_location" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Packaging Information')</label>
                        <input type="text" name="environment_condition" class="form-control" required>
                    </div>
                   
</div>
@can('admin.product.category.store')
<div class="modal-footer">
    <button type="submit" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
</div>
@endcan
    </div>
</div>

</div>

</form>
        </div>
    </div>
</div>

<div id="cuModalfour" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cuModaltwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Quality Control</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.newexp.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>@lang('Sample Taken (Yes/No)')</label>
                        <input type="text" name="target_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('QC Release Status')</label>
                        <input type="text" name="actual_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Deviation Notes')</label>
                        <input type="text" name="tolerance_range" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Approval Signature/ID')</label>
                        <input type="date" name="weighing_scale_id" class="form-control" required>
                    </div>
                   
                   
</div>
@can('admin.product.category.store')
<div class="modal-footer">
    <button type="submit" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
</div>
@endcan
    </div>
</div>

</div>

</form>
        </div>
    </div>
</div>

<div id="cuModalfive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cuModaltwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Audit and Compliance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.newexp.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>@lang('Electronic Record Signatures')</label>
                        <input type="text" name="target_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Audit Log ID')</label>
                        <input type="text" name="actual_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('SOP Version')</label>
                        <input type="text" name="tolerance_range" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Regulatory Compliance Codes')</label>
                        <input type="date" name="weighing_scale_id" class="form-control" required>
                    </div>
                   
                   
</div>
@can('admin.product.category.store')
<div class="modal-footer">
    <button type="submit" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
</div>
@endcan
    </div>
</div>

</div>

</form>
        </div>
    </div>
</div>

<div id="cuModalsix" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cuModaltwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Inventory and Logistics</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.newexp.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>@lang('Inventory Status')</label>
                        <input type="text" name="target_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Warehouse/Storage Location')</label>
                        <input type="text" name="actual_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Reorder Level')</label>
                        <input type="text" name="tolerance_range" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Expiry Date')</label>
                        <input type="date" name="weighing_scale_id" class="form-control" required>
                    </div>
                   
                   
</div>
@can('admin.product.category.store')
<div class="modal-footer">
    <button type="submit" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
</div>
@endcan
    </div>
</div>

</div>

</form>
        </div>
    </div>
</div>

<div id="cuModalseven" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cuModaltwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">System-Generated Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.newexp.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>@lang('Transaction ID')</label>
                        <input type="text" name="target_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Weighing Session ID')</label>
                        <input type="text" name="actual_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Barcode/QR Code')</label>
                        <input type="text" name="tolerance_range" class="form-control" required>
                    </div>
                  
                   
                   
</div>
@can('admin.product.category.store')
<div class="modal-footer">
    <button type="submit" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
</div>
@endcan
    </div>
</div>

</div>

</form>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<script>
document.querySelectorAll('.tab').forEach(tab => {
  tab.addEventListener('click', function() {
    // Remove 'active' class from all tabs and tab contents
    document.querySelectorAll('.tab').forEach(item => item.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

    // Add 'active' class to the clicked tab and its corresponding content
    this.classList.add('active');
    const tabId = this.getAttribute('data-tab');
    document.getElementById(`tab-${tabId}`).classList.add('active');
  });
});

</script>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (include Popper.js for Bootstrap 5) -->


@endsection

{{-- @push('breadcrumb-plugins')
    <x-search-form />
    @can('admin.newexp.store')
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New General Information')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
    @endcan

@endpush --}}