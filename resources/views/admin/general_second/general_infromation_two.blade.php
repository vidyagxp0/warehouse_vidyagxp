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
  <div class="tab active" data-tab="4">General Imformation</div>
  <div class="tab" data-tab="5">Calibration Information</div>
  <div class="tab" data-tab="3">Quality Control</div>
  <div class="tab" data-tab="2">Audit and Compliance</div>
  <div class="tab" data-tab="5">System-Generated Data</div>
</div>

<form id="form">
  <div class="tab-content active" id="tab-1"> 
    <div class="card-body p-0">
        {{-- <x-search-form /> --}}
        <button type="button" class="btn btn-sm btn-outline-primary cuModalBtn" data-bs-toggle="modal" data-bs-target="#cuModal">Add New</button>


        <div class="table-responsive--sm table-responsive">
            <table class="table table--light">
                <thead>
                    <tr>
                        <th>@lang('Calibration Transaction ID')</th>
                        <th>@lang('Calibration Session ID')</th>
                        
                        
                        <!-- <th>@lang('Net Weight')</th>
                        <th>@lang('Packaging Information')</th> -->
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse($newexpMaterial as $new) --}}
                    <tr>
                        <td>TXN00123</td> <!-- Calibration Transaction ID -->
                        <td>WS001</td> <!-- Calibration Session ID -->
                    </tr>
                    <tr>
                        <td>TXN00456</td>
                        <td>WS002</td>
                    </tr>
                    <tr>
                        <td>TXN00789</td>
                        <td>WS003</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
</div>
<div class="tab-content" id="tab-2">
    <div class="card-body p-0">

        <button type="button" class="btn btn-sm btn-outline-primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModaltwo">Add New</button>

        <div class="table-responsive--sm table-responsive">
            <table class="table table--light">
                <thead>
                    <tr>
                        <th>@lang('Electronic Record Signatures')</th>
                        <th>@lang('Audit Log ID')</th>
                        
                        
                        <!-- <th>@lang('Net Weight')</th>
                        <th>@lang('Packaging Information')</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Signed by User001</td> <!-- Electronic Record Signatures -->
                        <td>AL12345</td> <!-- Audit Log ID -->
                    </tr>
                    <tr>
                        <td>Signed by User002</td>
                        <td>AL67890</td>
                    </tr>
                    <tr>
                        <td>Signed by User003</td>
                        <td>AL11223</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="tab-content" id="tab-3">
    <div class="card-body p-0">
        {{-- <x-search-form /> --}}
        <button type="button" class="btn btn-sm btn-outline-primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModalthree">Add New</button>


        <div class="table-responsive--sm table-responsive">
            <table class="table table--light">
                <thead>
                    <tr>
                        <th>@lang('QC/QA Approval Signature/ID')</th>
                        <th>@lang('Calibration SOP Version')</th>
                        <th>@lang('Deviation Notes')</th>
                        <th>@lang('Calibration Log Entry ID')</th>
                        
                        
                        <!-- <th>@lang('Net Weight')</th>
                        <th>@lang('Packaging Information')</th> -->
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse($newexpMaterial as $new) --}}
                    <tr>
                        <td>Signed by User001</td> <!-- QC/QA Approval Signature/ID -->
                        <td>SOP v1.0</td> <!-- Calibration SOP Version -->
                        <td>No deviations</td> <!-- Deviation Notes -->
                        <td>CL00123</td> <!-- Calibration Log Entry ID -->
                    </tr>
                    <tr>
                        <td>Signed by User002</td>
                        <td>SOP v2.1</td>
                        <td>Minor deviation observed</td>
                        <td>CL00456</td>
                    </tr>
                    <tr>
                        <td>Signed by User003</td>
                        <td>SOP v3.0</td>
                        <td>Requires further review</td>
                        <td>CL00789</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>

</div>
<div class="tab-content" id="tab-4">
    <div class="card-body p-0">
    <button type="button" class="btn btn-sm btn-outline-primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModalfour">Add New</button>
    <div class="table-responsive--sm table-responsive">
        <table class="table table--light">
            <thead>
                <tr>
                    <th>@lang('S.N.')</th>
                    <th>@lang('Balance/Scale ID')</th>
                    <th>@lang('Balance Model')</th>
                    <th>@lang('Balance Serial Number')</th>
                    <th>@lang('Calibration Date')</th>
                    <th>@lang('Calibration Due Date')</th>
                    <th>@lang('Operator Name/ID')</th>
                    <th>@lang('Location')</th> 
                </tr>
            </thead>
            <tbody>
                {{-- @forelse($newexpMaterial as $new) --}}
                <tr>
                    <td>1</td>
                    <td>BLN-1001</td>
                    <td>Mettler Toledo XS204</td>
                    <td>MT-XS204-001</td>
                    <td>2023-09-01</td>
                    <td>2024-09-01</td>
                    <td>John Doe / OP1234</td>
                    <td>Lab Room 1, Bench A</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>BLN-1002</td>
                    <td>Sartorius Cubis MSA225S</td>
                    <td>SAR-MSA225-789</td>
                    <td>2023-08-15</td>
                    <td>2024-08-15</td>
                    <td>Jane Smith / OP5678</td>
                    <td>Lab Room 2, Bench C</td>
                </tr>
            </tbody>
        </table>
        
    </div>
</div>
</div>
<div class="tab-content" id="tab-5">
    <div class="card-body p-0">
        {{-- <div class="tab-content" id="tab-4"> --}}
    <button type="button" class="btn btn-sm btn-outline-primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModalfive">Add New</button>
    <div class="table-responsive--sm table-responsive">
        <table class="table table--light">
            <thead>
                <tr>
                    <th>@lang('Calibration Transaction ID')</th>
                    <th>@lang('Calibration Session ID')</th>
                    
                    
                    <!-- <th>@lang('Net Weight')</th>
                    <th>@lang('Packaging Information')</th> -->
                </tr>
            </thead>
            <tbody>
                {{-- @forelse($newexpMaterial as $new) --}}
                <tr>
                    <td>TXN00123</td> <!-- Calibration Transaction ID -->
                    <td>WS001</td> <!-- Calibration Session ID -->
                </tr>
                <tr>
                    <td>TXN00456</td>
                    <td>WS002</td>
                </tr>
                <tr>
                    <td>TXN00789</td>
                    <td>WS003</td>
                </tr>
            
            </tbody>
        </table>
        
    </div>
</div>    

</div>
<div class="tab-content" id="tab-6">
    <div class="card-body p-0">
            <button type="button" class="btn btn-sm btn-outline-primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModalsix">Add New</button>
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
    <button type="button" class="btn btn-sm btn-outline-primary cuModaltwoBtn" data-bs-toggle="modal" data-bs-target="#cuModalseven">Add New</button>
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
                <h5 class="modal-title">Quality Control</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.newexp.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>@lang('Calibration Transaction ID')</label>
                        <input type="text" name="target_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Calibration Session ID')</label>
                        <input type="text" name="actual_weight" class="form-control" required>
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

<!-- Modal 2: Material Information Modal -->
<div id="cuModaltwo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cuModaltwoLabel" aria-hidden="true">
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

<div id="cuModalthree" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="cuModaltwoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">System Generated Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.newexp.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>@lang('QC/QA Approval Signature/ID')</label>
                        <input type="text" name="target_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Calibration SOP Version')</label>
                        <input type="text" name="actual_weight" class="form-control" required>
                    </div>
                     <div class="form-group">
                        <label>@lang('Deviation Notes')</label>
                        <input type="text" name="target_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Calibration Log Entry ID')</label>
                        <input type="text" name="actual_weight" class="form-control" required>
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
                        <label>@lang('Balance/Scale ID')</label>
                        <input type="text" name="production_order_iD" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Balance Model')</label>
                        <input type="text" name="product_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Batch/Lot Number')</label>
                        <input type="text" name="generic_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Balance Serial Number')</label>
                        <input type="text" name="product_code" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Calibration Date')</label>
                        <input type="text" name="batch_no" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Calibration Due Date')</label>
                        <input type="text" name="production_quality" class="form-control" required>
                    </div>
               
                <div class="form-group">
                    <label>@lang('Operator Name/ID')</label>
                    <input type="date" name="production_date" class="form-control" required>
                </div>

        
        <div class="form-group">
            <label>@lang('Location')</label>
            <input type="date" name="expected_date" class="form-control" required>
        </div>
        {{--
        <div class="form-group">
            <label>@lang('Production Line')</label>
            <input type="text" name="production_line" class="form-control" required>
        </div>
    
    <div class="form-group">
        <label>@lang('Production Suite')</label>
        <input type="text" name="production_suite" class="form-control" required>
    </div> --}}
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
                <h5 class="modal-title">Calibration Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.newexp.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>@lang('Calibration Transaction ID')</label>
                        <input type="text" name="target_weight" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>@lang('Calibration Session ID')</label>
                        <input type="text" name="actual_weight" class="form-control" required>
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
        <button type="button" class="btn btn-sm btn-outline-primary cuModalBtn" data-modal_title="@lang('Add New General Information')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
    @endcan

@endpush --}}