@extends('admin.layouts.app')
@section('panel')
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10">
                <form action="{{ route('admin.net_weight.net_weight_show') }}">
                <div class="card-body p-0 ">
                    <div class="table-responsive--sm table-responsive" style="height: 550px;">
                        <table class="table table--light">
                            <thead>
                                <tr>
                                    <th colspan="17" style="text-align: center; background-color: blueviolet;">
                                        @lang('Material / Product Information')</th>
                                    <th colspan="11" style="text-align: center; background-color: green;">
                                        @lang('GRN Information')</th>
                                    <th colspan="8" style="text-align: center; background-color: brown;">
                                        @lang('Weighing Information')</th>
                                    <th colspan="7" style="text-align: center; background-color: orange;">
                                        @lang('Quality Control (QC) Information')</th>
                                    <th colspan="8" style="text-align: center; background-color: grey;">
                                        @lang('Storage and Dispensing Information')</th>
                                        <th style="text-align: center; background-color: #6C4E31;">
                                        @lang('Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="font-weight: bold;">Material Name</th>
                                    <th>Material Code</th>
                                    <th>Mfg Date</th>
                                    <th>Exp Date</th>
                                    <th>AR Number</th>
                                    <th>Lot Number</th>
                                    <th>Ordered Qty</th>
                                    <th>Received Qty</th>
                                    <th>Gross Weight</th>
                                    <th>Tare Weight</th>
                                    <th>Net Weight</th>
                                    <th>UOM</th>
                                    <th>Weighing Date</th>
                                    <th>Weighed By</th>
                                    <th>Weighing Scale ID</th>
                                    <th>Weight Tolerance</th>
                                    <th>Price per Unit</th>
                                    {{-- ---------------- --}}
                                    <th>GRN Number</th>
                                    <th>GRN Date</th>
                                    <th>Supplier Name</th>
                                    <th>Supplier ID</th>
                                    <th>Purchase Order Number</th>
                                    <th>Delivery Note Number</th>
                                    <th>Warehouse Location</th>
                                    <th>Received By</th>
                                    <th>Authorized By</th>
                                    <th>Delivery Date</th>
                                    <th>GRN Status</th>

                                    {{-- ------------------- --}}
                                    <th>Weighing Date</th>
                                    <th>Weighed By</th>
                                    <th>Weighing Scale ID</th>
                                    <th>Calibration Status</th>
                                    <th>Gross Weight</th>
                                    <th>Tare Weight</th>
                                    <th>Net Weight</th>
                                    <th>Weight Tolerance</th>
                                    {{-- --------------------------- --}}

                                    <th>QC Status</th>
                                    <th>QC Remarks</th>
                                    <th>QC Batch Number</th>
                                    <th>Sample Taken</th>
                                    <th>Sample Quantity</th>
                                    <th>Test Results</th>
                                    <th>QC Approved By</th>

                                    {{-- ----------------------- --}}

                                    <th>Storage Bin/Location</th>
                                    <th>Pellets Id                   </th>
                                    <th>Handling Unit Number</th>
                                    <th>Temperature Requirements</th>
                                    <th>Dispensing Order Number</th>
                                    <th>Dispensing Quantity</th>
                                    <th>Dispensed By</th>
                                    <th>Date of Dispensing</th>
                                    <th></th>

                                </tr>
                                
                                
                                @foreach ($combined_data as $data)

                                <tr>
                                                    <td>{{ $data['material_name'] ?? '' }}</td>
                                                    <td>{{ $data['material_code'] ?? '' }}</td>
                                                    <td>{{ $data['mfg_date'] ?? '' }}</td>
                                                    <td>{{ $data['exp_date'] ?? '' }}</td>
                                                    <td>{{ $data['ar_number'] ?? '' }}</td>
                                                    <td>{{ $data['lot_number'] ?? '' }}</td>
                                                    <td>{{ $data['order_qty'] ?? '' }}</td>
                                                    <td>{{ $data['received_qty'] ?? '' }}</td>
                                                    <td>{{ $data['gross_weight'] ?? '' }}</td>
                                                    <td>{{ $data['tare_weight'] ?? '' }}</td>
                                                    <td>{{ $data['net_weight'] ?? '' }}</td>
                                                    <td>{{ $data['uom'] ?? '' }}</td>
                                                    <td>{{ $data['weight_date'] ?? '' }}</td>
                                                    <td>{{ $data['weight_by'] ?? '' }}</td>
                                                    <td>{{ $data['sacle_id'] ?? '' }}</td>
                                                    <td>{{ $data['weight_tolerance'] ?? '' }}</td>
                                                    <td>{{ $data['price_unit'] ?? '' }}</td>
                                       
                                                    <td>{{ $data['grn_number'] ?? '' }}</td>
                                                    <td>{{ $data['grn_date'] ?? '' }}</td>
                                                    <td>{{ $data['supplier_name'] ?? '' }}</td>
                                                    <td>{{ $data['supplier_id'] ?? '' }}</td>
                                                    <td>{{ $data['purchase_order_number'] ?? '' }}</td>
                                                    <td>{{ $data['delivery_note'] ?? '' }}</td>
                                                    <td>{{ $data['warehouse_location'] ?? '' }}</td>
                                                    <td>{{ $data['recieved_by'] ?? '' }}</td>
                                                    <td>{{ $data['authorized'] ?? '' }}</td>
                                                    <td>{{ $data['delivery_date'] ?? '' }}</td>
                                                    <td>{{ $data['grn_status'] ?? '' }}</td>
                                
                                                    <td>{{ $data['weighing_date'] ?? '' }}</td>
                                                    <td>{{ $data['weighed_by'] ?? '' }}</td>
                                                    <td>{{ $data['weighing_scale_id'] ?? '' }}</td>
                                                    <td>{{ $data['calibration_status'] ?? '' }}</td>
                                                    <td>{{ $data['gross_weight'] ?? '' }}</td>
                                                    <td>{{ $data['tare_weight'] ?? '' }}</td>
                                                    <td>{{ $data['net_weight'] ?? '' }}</td>
                                                    <td>{{ $data['weight_tolerance'] ?? '' }}</td>
                                    
                                                    <td>{{ $data['qc_status'] ?? '' }}</td>
                                                    <td>{{ $data['qc_remark'] ?? '' }}</td>
                                                    <td>{{ $data['qc_batch_number'] ?? '' }}</td>
                                                    <td>{{ $data['sample_taken'] ?? '' }}</td>
                                                    <td>{{ $data['sample_quanity'] ?? '' }}</td>
                                                    <td>{{ $data['test_result'] ?? '' }}</td>
                                                    <td>{{ $data['qc_app_by'] ?? '' }}</td>
                                      
                                                    <td>{{ $data['storage_bin_location'] ?? '' }}</td>
                                                    <td>{{ $data['pellets_id'] ?? '' }}</td>
                                                    <td>{{ $data['handling_unit_number'] ?? '' }}</td>
                                                    <td>{{ $data['temprature_requirements'] ?? '' }}</td>
                                                    <td>{{ $data['dispensing_number'] ?? '' }}</td>
                                                    <td>{{ $data['dispensing_quanitity'] ?? '' }}</td>
                                                    <td>{{ $data['dispensed_by'] ?? '' }}</td>
                                                    <td>{{ $data['date_of_dispensing'] ?? '' }}</td>
                                                </tr>
                                                       @endforeach
                                                 

                            </tbody>
                        </table>
                    </div>
                </div>
                </form>
            </div><!-- card end -->
        </div>
    </div>

<!-- ----------------QMS------------------- -->

<style>
      #qms>div>div {
            margin-left: -173px !important;
            width: 148% !important;
        }
</style>

<div id="qms" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title">QMS</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="d-flex justify-content-around flex-wrap my-5">
                <a href="https://sym.vidyagxp.com/rcms/qms-dashboard" target="_blank"><button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms">Deviation</button></a>
                <a href="https://sym.vidyagxp.com/rcms/qms-dashboard" target="_blank"><button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms">OOS/OOL/OOT</button></a>
                <a href="https://sym.vidyagxp.com/rcms/qms-dashboard" target="_blank"><button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms">Root Cause Analysis</button></a>
                <a href="https://sym.vidyagxp.com/rcms/qms-dashboard" target="_blank"><button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms">CAPA</button></a>
                <a href="https://sym.vidyagxp.com/rcms/qms-dashboard" target="_blank"><button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms">Risk Assesment</button></a>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <!-- Add Modal -->
    <div id="cuModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Net Weight Calculator
                    <!-- <h5 class="modal-title" id="modalTitle">Weighing and Dispensing</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <style>
                    .xyz{
                        background-color: green;
                        border-radius: 20px;
                        color: white;
                    }
                </style>
                <div class="modal-body">
                    <!-- Tab Container -->
                    <div class="tab-container">
                        <!-- Tab buttons -->
                        <div class="tabs">
                            <button class="tab-btn" onclick="openTab(event, 'tab1')">Material / Product Information</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab2')">GRN Information</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab3')">Weighing Information</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab4')">Quality Control (QC)
                                Information</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab5')">Storage & Dispensing
                                Information</button>
                        </div>
                <form action="{{ route('admin.net_weight.net_weight_store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Tab content -->
                        <div id="tab1" class="tab-content">
                            <!-- <h2>Tab 1 Content</h2> -->
                            <div class="group-input">
                                <label for="audit-agenda-grid">
                                    Material / Product Information
                                    <button class="xyz" type="button" name="details" id="Details-add">+</button> 
                                </label>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Details-table">
                                        <thead>
                                            <tr style="background-color: #4634ff; color: white;">
                                                <th style="font-weight: bold;">Material Name</th>
                                                <th>Material Code</th>
                                                <th>Mfg Date</th>
                                                <th>Exp Date</th>
                                                <th>AR Number</th>
                                                <th>Lot Number</th>
                                                <th>Ordered Qty</th>
                                                <th>Received Qty</th>
                                                <th>Gross Weight</th>
                                                <th>Tare Weight</th>
                                                <th>Net Weight</th>
                                                <th>UOM</th>
                                                <th>Weighing Date</th>
                                                <th>Weighed By</th>
                                                <th>Weighing Scale ID</th>
                                                <th>Weight Tolerance</th>
                                                <th>Price per Unit</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td> <input class="inpt" type="text" name="details[0][material_name]"/> </td>
                                            <td> <input class="inpt" type="text" name="details[0][material_code]"/> </td>
                                            <td> <input class="inpt" type="date" name="details[0][mfg_date]"/> </td>
                                            <td> <input class="inpt" type="date" name="details[0][exp_date]"/> </td>
                                            <td> <input class="inpt" type="text" name="details[0][ar_number]"/> </td>
                                            <td> <input class="inpt" type="text" name="details[0][lot_number]"/> </td>
                                            <td> <input class="inpt" type="text" name="details[0][order_qty]"/> </td>
                                            <td> <input class="inpt" type="text" name="details[0][received_qty]"/> </td>
                                            <td> <input class="inpt" id="gross" oninput="calculateNetWeight()" type="text" name="details[0][gross_weight]"/> </td>    
                                            <td> <input class="inpt" id="tare" oninput="calculateNetWeight()" type="text" name="details[0][tare_weight]"/> </td>
                                            <td> <input class="inpt" id="net" type="text" name="details[0][net_weight]" readonly/> </td>
                                            <td> <select class="inpt" name="details[0][uom]"> 
                                                <option value="">--Select--</option>
                                                <option value="kg">kg</option>
                                                <option value="g">g</option>
                                                <option value="mg">mg</option>
                                                <option value="µg">µg</option>
                                                <option value="L">L</option>
                                                <option value="mL">mL</option>
                                                <option value="U">U</option>
                                            </select> </td>
                                            <td> <input class="inpt" type="date" name="details[0][weight_date]"/> </td>
                                            <td> <input class="inpt" type="text" name="details[0][weight_by]"/> </td>
                                            <td> <input class="inpt" type="text" name="details[0][sacle_id]"/> </td>
                                            <td> <input class="inpt" type="text" name="details[0][weight_tolerance]"/> </td>
                                            <td> <input class="inpt" type="text" name="details[0][price_unit]"/> </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                        <div id="tab2" class="tab-content" style="display:none;">
                            <!-- <h2>Tab 2 Content</h2> -->

                            <div class="group-input">
                                <label for="audit-agenda-grid">
                                    GRN Information
                                    <button class="xyz" type="button" name="details" id="Details-add-1">+</button>
                                </label>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Details-table-1">
                                        <thead>
                                            <tr style="background-color: #4634ff; color: white;">
                                                <th style="font-weight: bold;">GRN Number</th>
                                                <th>GRN Date</th>
                                                <th>Supplier Name</th>
                                                <th>Supplier ID</th>
                                                <th>Purchase Order Number</th>
                                                <th>Delivery Note Number</th>
                                                <th>Warehouse Location</th>
                                                <th>Received By</th>
                                                <th>Authorized By</th>
                                                <th>Delivery Date</th>
                                                <th>GRN Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td> <input class="inpt" type="text" name="grn_info[0][grn_number]"/> </td>
                                            <td> <input class="inpt" type="date" name="grn_info[0][grn_date]"/> </td>
                                            <td> <input class="inpt" type="text" name="grn_info[0][supplier_name]"/> </td>
                                            <td> <input class="inpt" type="text" name="grn_info[0][supplier_id]"/> </td>
                                            <td> <input class="inpt" type="text" name="grn_info[0][purchase_order_number]"/> </td>
                                            <td> <input class="inpt" type="text" name="grn_info[0][delivery_note]"/> </td>
                                            <td> <input class="inpt" type="text" name="grn_info[0][warehouse_location]"/> </td>
                                            <td> <input class="inpt" type="text" name="grn_info[0][recieved_by]"/> </td>
                                            <td> <input class="inpt" type="text" name="grn_info[0][authorized]"/> </td>
                                            <td> <input class="inpt" type="date" name="grn_info[0][delivery_date]"/> </td>
                                            <td> <input class="inpt" type="text" name="grn_info[0][grn_status]"/> </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-content" style="display:none;">
                            <!-- <h2>Tab 3 Content</h2> -->
                            <div class="group-input">
                                <label for="audit-agenda-grid">
                                    Weighing Information
                                    <button class="xyz" type="button" name="details" id="Details-add-2">+</button> 
                                </label>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Details-table-2">
                                        <thead>
                                            <tr style="background-color: #4634ff; color: white;">
                                                <th style="font-weight: bold;">Weighing Date</th>
                                                <th>Weighed By</th>
                                                <th>Weighing Scale ID</th>
                                                <th>Calibration Status</th>
                                                <th>Gross Weight</th>
                                                <th>Tare Weight</th>
                                                <th>Net Weight</th>
                                                <th>Weight Tolerance</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <td> <input class="inpt" type="date" name="weighting_info[0][weighing_date]"/> </td>
                                        <td> <input class="inpt" type="text" name="weighting_info[0][weighed_by]"/> </td>
                                        <td> <input class="inpt" type="text" name="weighting_info[0][weighing_scale_id]"/> </td>
                                        <td> <select class="inpt" name="weighting_info[0][calibration_status]"> 
                                                <option value="">--Select--</option>
                                                <option value="Calibrated">Calibrated</option>
                                                <option value="Not Calibrated">Not Calibrated</option>
                                            </select> </td>
                                            <td> <input class="inpt" id="gross-1" oninput="calculateNetWeightdata()" type="text" name="weighting_info[0][gross_weight]"/> </td>
                                            <td> <input class="inpt" id="tare-1" oninput="calculateNetWeightdata()" type="text" name="weighting_info[0][tare_weight]"/> </td>
                                            <td> <input class="inpt" id="net-data" readonly type="text" name="weighting_info[0][net_weight]"/> </td>
                                        <td> <input class="inpt" type="text" name="weighting_info[0][weight_tolerance]"/> </td>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tab-content" style="display:none;">
                            <!-- <h2>Tab 4 Content</h2> -->
                            <div class="group-input">
                                <label for="audit-agenda-grid">
                                    Quality Control (QC) Information
                                    <button class="xyz" type="button" name="details" id="Details-add-3">+</button>
                                </label>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Details-table-3">
                                        <thead>
                                            <tr style="background-color: #4634ff; color: white;">
                                                <th style="font-weight: bold;">QC Status</th>
                                                <th>QC Remarks</th>
                                                <th>QC Batch Number</th>
                                                <th>Sample Taken</th>
                                                <th>Sample Quantity</th>
                                                <th>Test Results</th>
                                                <th>QC Approved By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <td> <input class="inpt" type="text" name="quality_control[0][qc_status]"/> </td>
                                        <td> <input class="inpt" type="text" name="quality_control[0][qc_remark]"/> </td>
                                        <td> <input class="inpt" type="text" name="quality_control[0][qc_batch_number]"/> </td>
                                        <td> <input class="inpt" type="text" name="quality_control[0][sample_taken]"/> </td>
                                        <td> <input class="inpt" type="text" name="quality_control[0][sample_quanity]"/> </td>
                                        <td> <input class="inpt" type="text" name="quality_control[0][test_result]"/> </td>
                                        <td> <input class="inpt" type="text" name="quality_control[0][qc_app_by]"/> </td>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab5" class="tab-content" style="display:none;">
                            <!-- <h2>Tab 5 Content</h2> -->
                            <div class="group-input">
                                <label for="audit-agenda-grid">
                                    Storage and Dispensing Information
                                <button class="xyz" type="button" name="details" id="Details-add-4">+</button>
                                </label>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Details-table-4">
                                        <thead>
                                            <tr style="background-color: #4634ff; color: white;">
                                                <th style="font-weight: bold;">Storage Bin/Location</th>
                                                <th>Pallets Id</th>
                                                <th>Handling Unit Number</th>
                                                <th>Temperature Requirements</th>
                                                <th>Dispensing Order Number</th>
                                                <th>Dispensing Quantity</th>
                                                <th>Dispensed By</th>
                                                <th>Date of Dispensing</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <td> <input class="inpt" type="text" name="storage_des[0][storage_bin_location]"/> </td>
                                        <td> <input class="inpt" type="text" name="storage_des[0][pellets_id]"/> </td>
                                        <td> <input class="inpt" type="text" name="storage_des[0][handling_unit_number]"/> </td>
                                        <td> <input class="inpt" type="text" name="storage_des[0][temprature_requirements]"/> </td>
                                        <td> <input class="inpt" type="text" name="storage_des[0][dispensing_number]"/> </td>
                                        <td> <input class="inpt" type="text" name="storage_des[0][dispensing_quanitity]"/> </td>
                                        <td> <input class="inpt" type="text" name="storage_des[0][dispensed_by]"/> </td>
                                        <td> <input class="inpt" type="text" name="storage_des[0][date_of_dispensing]"/> </td>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="csvImportModal" tabindex="-1" role="dialog" aria-labelledby="csvImportModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="csvImportModalLabel">@lang('Import CSV Data')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="importForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>@lang('Choose CSV File')</label>
                            <input type="file" id="csvFile" class="form-control-file" accept=".csv" required>
                        </div>
                    </form>
                    <p>@lang('Upload a CSV file to import data into the table.')</p>
                    <p id="importSuccessMessage" style="display:none; color: green;">@lang('Data imported successfully.')</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Cancel')</button>
                    <button type="button" class="btn btn-primary" onclick="importCSV()">@lang('Import')</button>
                </div>
            </div>
        </div>
    </div>
    <x-confirmation-modal />
@endsection

@push('breadcrumb-plugins')
    <x-search-form />
    @can('admin.newexp.store')
        <button type="button" class="btn btn-sm btn-outline-primary cuModalBtn" data-bs-toggle="modal"
            data-bs-target="#cuModal">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
        <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.print()">
            <i class="las la-print"></i> @lang('Print')
        </button>
        <button type="button" class="btn btn-sm btn-outline-primary" onclick="exportToCSV()" data-toggle="modal"
            data-target="#csvExportModal">
            <i class="las la-file-export"></i> @lang('Export CSV')
        </button>
        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#csvImportModal">
            <i class="las la-cloud-upload-alt"></i> @lang('Import CSV')
        </button>
    @endcan
@endpush

@push('script')
    <script>
        function openTab(evt, tabId) {
            const tabContent = document.getElementsByClassName("tab-content");
            for (let i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = "none";
            }

            const tabButtons = document.getElementsByClassName("tab-btn");
            for (let i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove("active");
            }

            document.getElementById(tabId).style.display = "block";
            evt.currentTarget.classList.add("active");
        }

        // Automatically open the first tab when the modal is shown
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementsByClassName("tab-btn")[0].click();
        });
    </script>
@endpush

@push('style')
    <style>
        .label-top {
            display: block;
            margin-bottom: 5px;
            /* Adjust space between label and input field */
        }
        .inpt{
            border: none;
        }

        .form-control {
            margin-bottom: 15px;
            /* Adds some space between input fields */
        }

        .row .col-md-6 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .modal-dialog {
            max-width: 1200px;
        }

        .tab-container {
            width: 100%;
            margin: 20px auto;
            text-align: center;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .tab-btn {
            padding: 10px 20px;
            margin: 0 5px;
            border: 2px solid #4634ff;
            background-color: white;
            cursor: pointer;
            border-radius: 25px;
            outline: none;
            transition: background-color 0.3s;
            font-size: 12px;
        }

        .tab-btn:hover {
            background-color: #4634ff;
            color: white;
        }

        .tab-btn.active {
            background-color: #4634ff;
            color: white;
        }

        .tab-content {
            display: none;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .abc {
            margin-bottom: 15px;
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
$(document).ready(function() {
    $('#Details-add').click(function(e) {
        function generateTableRow(serialNumber) {
            var html = '';
            html += '<tr>' +
                '<td><input class="inpt" type="text" name="serial[' + serialNumber +'][material_name]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber +
                '][material_code]"></td>' +
                '<td><input class="inpt" type="date" name="details[' + serialNumber + '][mfg_date]"></td>' +
                '<td><input class="inpt" type="date" name="details[' + serialNumber + '][exp_date]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ar_number]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][lot_number]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][order_qty]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][received_qty]"></td>' +
                '<td><input class="inpt gross" type="text" name="details[' + serialNumber + '][gross_weight]"/> </td>' +    
                '<td><input class="inpt tare" type="text" name="details[' + serialNumber + '][tare_weight]"/></td>' +
                '<td><input class="inpt net" type="text" name="details[' + serialNumber + '][uom]" readonly /></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                '<td><input class="inpt" type="date" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                '<td><button style="background-color: red; color: white;" type="button" class="removeRowBtn">Remove</button></td>' +
                '</tr>';

            return html;
        }

        var tableBody = $('#Details-table tbody');
        var rowCount = tableBody.children('tr').length;
        var newRow = generateTableRow(rowCount + 1);
        tableBody.append(newRow);
    });

    // Use event delegation to handle the input changes
    $('#Details-table').on('input', '.gross, .tare', function() {
        var $row = $(this).closest('tr');
        var grossWeight = parseFloat($row.find('.gross').val()) || 0;
        var tareWeight = parseFloat($row.find('.tare').val()) || 0;
        var netWeight = grossWeight - tareWeight;
        $row.find('.net').val(netWeight);
    });
});
</script>

        <script>
        $(document).ready(function() {
            $('#Details-add-1').click(function(e) {
                function generateTableRow(serialNumber) {
                    var html = '';
                    html += '<tr>' +
                        '<td><input class="inpt" type="text" name="grn_info[' + serialNumber + '][grn_number]"></td>' +
                        '<td><input class="inpt" type="date" name="grn_info[' + serialNumber + '][grn_date]"></td>' +
                        '<td><input class="inpt" type="text" name="grn_info[' + serialNumber + '][supplier_name]"></td>' +
                        '<td><input class="inpt" type="text" name="grn_info[' + serialNumber + '][supplier_id]"></td>' +
                        '<td><input class="inpt" type="text" name="grn_info[' + serialNumber + '][purchase_order_number]"></td>' +
                        '<td><input class="inpt" type="text" name="grn_info[' + serialNumber + '][delivery_note]"></td>' +
                        '<td><input class="inpt" type="text" name="grn_info[' + serialNumber + '][warehouse_location]"></td>' +
                        '<td><input class="inpt" type="text" name="grn_info[' + serialNumber + '][recieved_by]"></td>' +
                        '<td><input class="inpt" type="text" name="grn_info[' + serialNumber + '][authorized]"></td>' +
                        '<td><input class="inpt" type="date" name="grn_info[' + serialNumber + '][delivery_date]"></td>' +
                        '<td><input class="inpt" type="text" name="grn_info[' + serialNumber + '][grn_status]"></td>' +
                        '<td><button style="background-color: red; color: white;" type="text" class="removeRowBtn" >Remove</button></td>' +
                        '</tr>';

                    // for (var i = 0; i < users.length; i++) {
                    //     html += '<option value="' + users[i].id + '">' + users[i].name + '</option>';
                    // }

                    // html += '</select></td>' +

                    '</tr>';

                    return html;
                }

                var tableBody = $('#Details-table-1 tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
    </script>
   <script>
    $(document).ready(function() {
        // Add new row on button click
        $('#Details-add-2').click(function(e) {
            e.preventDefault(); // Prevent default button action

            // Function to generate new table row
            function generateTableRow(serialNumber) {
                var html = '';
                html += '<tr>' +
                    '<td><input class="inpt" type="date" name="weighting_info[' + serialNumber + '][weighing_date]" value=""></td>' +
                    '<td><input class="inpt" type="text" name="weighting_info[' + serialNumber + '][weighed_by]"></td>' +
                    '<td><input class="inpt" type="text" name="weighting_info[' + serialNumber + '][weighing_scale_id]"></td>' +
                    '<td><select class="inpt" name="weighting_info[0][calibration_status]"> <option value="">--Select--</option> <option value="Calibrated">Calibrated</option> <option value="Not Calibrated">Not Calibrated</option> </select></td>' +
                    '<td><input class="inpt gross" type="text"  name="weighting_info[' + serialNumber + '][GrossWeight]"></td>' +
                    '<td><input class="inpt tare" type="text"  oninput="calculateNetWeight(this)" name="weighting_info[' + serialNumber + '][TareWeight]"></td>' +
                    '<td><input class="inpt net" type="text" readonly name="weighting_info[' + serialNumber + '][NetWeight]"></td>' +
                    '<td><input class="inpt" type="text" name="weighting_info[' + serialNumber + '][Other]"></td>' +
                    '<td><button style="background-color: red; color: white;" type="button" class="removeRowBtn" >Remove</button></td>' +
                    '</tr>';
                return html;
            }

            // Append new row to table body
            var tableBody = $('#Details-table-2 tbody');
            var rowCount = tableBody.children('tr').length;
            var newRow = generateTableRow(rowCount + 1);
            tableBody.append(newRow);
        });

        // Event delegation for calculating net weight on dynamically added rows
        $('#Details-table-2').on('input', '.gross, .tare', function() {
            var $row = $(this).closest('tr');
            var grossWeight = parseFloat($row.find('.gross').val()) || 0;
            var tareWeight = parseFloat($row.find('.tare').val()) || 0;
            var netWeight = grossWeight - tareWeight;
            $row.find('.net').val(netWeight);
        });

        // Event delegation for removing rows
        $('#Details-table-2').on('click', '.removeRowBtn', function() {
            $(this).closest('tr').remove();
        });
    });

    // Function to calculate net weight
    function calculateNetWeight(element) {
        var $row = $(element).closest('tr');
        var grossWeight = parseFloat($row.find('.gross').val()) || 0;
        var tareWeight = parseFloat($row.find('.tare').val()) || 0;
        var netWeight = grossWeight - tareWeight;
        $row.find('.net').val(netWeight);
    }
</script>

      <script>
        $(document).ready(function() {
            $('#Details-add-3').click(function(e) {
                function generateTableRow(serialNumber) {
                    var html = '';
                    html += '<tr>' +
                        '<td><input class="inpt" type="text" name="qualit_control[' + serialNumber + '][qc_status]" value=""></td>' +
                        '<td><input class="inpt" type="text" name="qualit_control[' + serialNumber + '][qc_remark]"></td>' +
                        '<td><input class="inpt" type="text" name="qualit_control[' + serialNumber + '][qc_batch_number]"></td>' +
                        '<td><input class="inpt" type="text" name="qualit_control[' + serialNumber + '][sample_taken]"></td>' +
                        '<td><input class="inpt" type="text" name="qualit_control[' + serialNumber + '][sample_quanity]"></td>' +
                        '<td><input class="inpt" type="text" name="qualit_control[' + serialNumber + '][test_result]"></td>' +
                        '<td><input class="inpt" type="text" name="qualit_control[' + serialNumber + '][qc_app_by]"></td>' +
                        '<td><button style="background-color: red; color: white;" type="text" class="removeRowBtn" >Remove</button></td>' +
                        '</tr>';

                    // for (var i = 0; i < users.length; i++) {
                    //     html += '<option value="' + users[i].id + '">' + users[i].name + '</option>';
                    // }

                    // html += '</select></td>' +

                    '</tr>';

                    return html;
                }

                var tableBody = $('#Details-table-3 tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
    </script>
          <script>
        $(document).ready(function() {
            $('#Details-add-4').click(function(e) {
                function generateTableRow(serialNumber) {
                    var html = '';
                    html += '<tr>' +
                        '<td><input class="inpt" type="text" name="storage_des[' + serialNumber + '][storage_bin_location]" value=""></td>' +
                        '<td><input class="inpt" type="text" name="storage_des[' + serialNumber + '][pellets_id]"></td>' +
                        '<td><input class="inpt" type="text" name="storage_des[' + serialNumber + '][handling_unit_number]"></td>' +
                        '<td><input class="inpt" type="text" name="storage_des[' + serialNumber + '][temprature_requirements]"></td>' +
                        '<td><input class="inpt" type="text" name="storage_des[' + serialNumber + '][dispensing_number]"></td>' +
                        '<td><input class="inpt" type="text" name="storage_des[' + serialNumber + '][dispensing_quanitity]"></td>' +
                        '<td><input class="inpt" type="text" name="storage_des[' + serialNumber + '][dispensed_by]"></td>' +
                        '<td><input class="inpt" type="text" name="storage_des[' + serialNumber + '][date_of_dispensing]"></td>' +
                        '<td><button style="background-color: red; color: white;" type="text" class="removeRowBtn" >Remove</button></td>' +
                        '</tr>';

                    // for (var i = 0; i < users.length; i++) {
                    //     html += '<option value="' + users[i].id + '">' + users[i].name + '</option>';
                    // }

                    // html += '</select></td>' +

                    '</tr>';

                    return html;
                }

                var tableBody = $('#Details-table-4 tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
    </script>
        <script>
        function calculateNetWeight() {
            let grossWeight = parseFloat(document.getElementById('gross').value) || 0;
            let tareWeight = parseFloat(document.getElementById('tare').value) || 0;
            let netWeight = grossWeight - tareWeight;
            document.getElementById('net').value = netWeight;
        }
    </script>
           <script>
        function calculateNetWeightdata() {
            let grossWeight = parseFloat(document.getElementById('gross-1').value) || 0;
            let tareWeight = parseFloat(document.getElementById('tare-1').value) || 0;
            let netWeight = grossWeight - tareWeight;
            document.getElementById('net-data').value = netWeight;
        }
    </script>
<script>
        $(document).on('click', '.removeRowBtn', function() {
            $(this).closest('tr').remove();
        })
    </script>
    <script>
        function importCSV() {
            const fileInput = document.getElementById('csvFile');
            const file = fileInput.files[0];

            if (!file) {
                alert('Please select a CSV file.');
                return;
            }

            const reader = new FileReader();
            reader.onload = function(event) {
                const csvData = event.target.result;
                const rows = csvData.split('\n').map(row => row.split(','));

                // Assuming the first row is the header row
                const tableBody = document.querySelector('table tbody');
                tableBody.innerHTML = ''; // Clear existing rows

                // Add new rows to the table
                rows.forEach((row, index) => {
                    if (index === 0) return; // Skip header row
                    if (row.length === 0) return; // Skip empty rows

                    const tr = document.createElement('tr');
                    row.forEach(cell => {
                        const td = document.createElement('td');
                        td.textContent = cell;
                        tr.appendChild(td);
                    });
                    tableBody.appendChild(tr);
                });

                // Show success message
                const successMessage = document.getElementById('importSuccessMessage');
                successMessage.style.display = 'block';

                // Hide modal after import
                $('#csvImportModal').modal('hide');
            };

            reader.readAsText(file);
        }

        function exportToCSV() {
            const table = document.querySelector('table');
            const rows = Array.from(table.querySelectorAll('tr')).map(row =>
                Array.from(row.querySelectorAll('th, td')).map(cell => cell.textContent).join(',')
            );

            const csvContent = "data:text/csv;charset=utf-8," + rows.join("\n");
            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "table_data.csv");
            document.body.appendChild(link);
            link.click();
        }
    </script>
@endpush
