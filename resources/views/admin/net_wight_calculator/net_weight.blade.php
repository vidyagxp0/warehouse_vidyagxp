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
                                        <tr>
                                            <td>Acetone</td>
                                            <td>AC-001</td>
                                            <td>01-01-2024</td>
                                            <td>01-01-2026</td>
                                            <td>AR12345</td>
                                            <td>LN123</td>
                                            <td>1000</td>
                                            <td>100</td>
                                            <td>100</td>
                                            <td>20</td>
                                            <td>80</td>
                                            <td>L</td>
                                            <td>01-01-2024</td>
                                            <td>John Doe</td>
                                            <td>WS001</td>
                                            <td>±0.5%</td>
                                            <td>$50</td>
                                            <td>GRN12345</td>
                                            <td>05-02-2024</td>
                                            <td>ABC Supplies</td>
                                            <td>SUP123</td>
                                            <td>PO98765</td>
                                            <td>DN123456</td>
                                            <td>Warehouse 1</td>
                                            <td>Jane Smith</td>
                                            <td>Mark Taylor</td>
                                            <td>10-02-2024</td>
                                            <td>Approved</td>
                                            <td>01-02-2024</td>
                                            <td>John Doe</td>
                                            <td>WS001</td>
                                            <td>Calibrated</td>
                                            <td>1020</td>
                                            <td>20</td>
                                            <td>1000</td>
                                            <td>±0.5%</td>
                                            <td>Passed</td>
                                            <td>No Issues</td>
                                            <td>QC123</td>
                                            <td>Yes</td>
                                            <td>5</td>
                                            <td>Pass</td>
                                            <td>Annaee</td>
                                            <td>Bin 12</td>
                                            <td>PEL-2024-A01</td>
                                            <td>HU123456</td>
                                            <td>15°C</td>
                                            <td>DO45678</td>
                                            <td>500</td>
                                            <td>Lisa Brown</td>
                                            <td>15-02-2024</td>
                                            <td><button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms"><i class="fa fa-bars"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Ethyl Alcohol</td>
                                            <td>EA-002</td>
                                            <td>10-12-2023</td>
                                            <td>10-12-2025</td>
                                            <td>AR12346</td>
                                            <td>LN124</td>
                                            <td>2000</td>
                                            <td>1900</td>
                                            <td>2050</td>
                                            <td>50</td>
                                            <td>2000</td>
                                            <td>L</td>
                                            <td>15-01-2024</td>
                                            <td>Jane Smith</td>
                                            <td>WS002</td>
                                            <td>±0.3%</td>
                                            <td>$60</td>
                                            <td>GRN12346</td>
                                            <td>20-01-2024</td>
                                            <td>XYZ Traders</td>
                                            <td>SUP124</td>
                                            <td>PO98766</td>
                                            <td>DN123457</td>
                                            <td>Warehouse 2</td>
                                            <td>Mark Taylor</td>
                                            <td>John Doe</td>
                                            <td>25-01-2024</td>
                                            <td>Pending</td>
                                            <td>15-01-2024</td>
                                            <td>Jane Smith</td>
                                            <td>WS002</td>
                                            <td>Calibrated</td>
                                            <td>2050</td>
                                            <td>50</td>
                                            <td>2000</td>
                                            <td>±0.3%</td>
                                            <td>Failed</td>
                                            <td>Contamination</td>
                                            <td>QC124</td>
                                            <td>No</td>
                                            <td>N/A</td>
                                            <td>Fail</td>
                                            <td>Mark Lee</td>
                                            <td>Bin 15</td>
                                            <td>PEL-2024-A04</td>
                                            <td>HU123457</td>
                                            <td>18°C</td>
                                            <td>DO45679</td>
                                            <td>1000</td>
                                            <td>John White</td>
                                            <td>30-01-2024</td>
                                            <td><button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms"><i class="fa fa-bars"></i></button></td>

                                        </tr>
                                        <tr>
                                            <td>Hydrogen Peroxide</td>
                                            <td>HP-003</td>
                                            <td>01-03-2024</td>
                                            <td>01-03-2026</td>
                                            <td>AR12347</td>
                                            <td>LN125</td>
                                            <td>1500</td>
                                            <td>1480</td>
                                            <td>1540</td>
                                            <td>40</td>
                                            <td>1500</td>
                                            <td>L</td>
                                            <td>10-03-2024</td>
                                            <td>Mark Taylor</td>
                                            <td>WS003</td>
                                            <td>±0.7%</td>
                                            <td>$70</td>
                                            <td>GRN12347</td>
                                            <td>15-03-2024</td>
                                            <td>PQR Chemicals</td>
                                            <td>SUP125</td>
                                            <td>PO98767</td>
                                            <td>DN123458</td>
                                            <td>Warehouse 3</td>
                                            <td>John Doe</td>
                                            <td>Lisa Brown</td>
                                            <td>20-03-2024</td>
                                            <td>Approved</td>
                                            <td>10-03-2024</td>
                                            <td>Mark Taylor</td>
                                            <td>WS003</td>
                                            <td>Calibrated</td>
                                            <td>1540</td>
                                            <td>40</td>
                                            <td>1500</td>
                                            <td>±0.7%</td>
                                            <td>Passed</td>
                                            <td>No Issues</td>
                                            <td>QC125</td>
                                            <td>Yes</td>
                                            <td>8</td>
                                            <td>Pass</td>
                                            <td>Annaee</td>
                                            <td>Bin 10</td>
                                            <td>PEL-2024-A03</td>
                                            <td>HU123458</td>
                                            <td>10°C</td>
                                            <td>DO45680</td>
                                            <td>750</td>
                                            <td>Mark Taylor</td>
                                            <td>25-03-2024</td>
                                            <td><button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms"><i class="fa fa-bars"></i></button></td>

                                        </tr>
                                        <tr>
                                            <td>Sodium Chloride</td>
                                            <td>SC-004</td>
                                            <td>05-04-2024</td>
                                            <td>05-04-2026</td>
                                            <td>AR12348</td>
                                            <td>LN126</td>
                                            <td>3000</td>
                                            <td>2900</td>
                                            <td>3100</td>
                                            <td>100</td>
                                            <td>3000</td>
                                            <td>kg</td>
                                            <td>15-04-2024</td>
                                            <td>Jane Smith</td>
                                            <td>WS004</td>
                                            <td>±0.4%</td>
                                            <td>$25</td>
                                            <td>GRN12348</td>
                                            <td>20-04-2024</td>
                                            <td>DEF Industries</td>
                                            <td>SUP126</td>
                                            <td>PO98768</td>
                                            <td>DN123459</td>
                                            <td>Warehouse 4</td>
                                            <td>Lisa Brown</td>
                                            <td>John Doe</td>
                                            <td>25-04-2024</td>
                                            <td>Approved</td>
                                            <td>15-04-2024</td>
                                            <td>Jane Smith</td>
                                            <td>WS004</td>
                                            <td>Calibrated</td>
                                            <td>3100</td>
                                            <td>100</td>
                                            <td>3000</td>
                                            <td>±0.4%</td>
                                            <td>Passed</td>
                                            <td>No Issues</td>
                                            <td>QC126</td>
                                            <td>Yes</td>
                                            <td>10</td>
                                            <td>Pass</td>
                                            <td>Mark Lee</td>
                                            <td>Bin 20</td>
                                            <td>PEL-2024-A02</td>
                                            <td>HU123459</td>
                                            <td>Room Temp</td>
                                            <td>DO45681</td>
                                            <td>1500</td>
                                            <td>Jane Doe</td>
                                            <td>30-04-2024</td>
                                            <td><button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms"><i class="fa fa-bars"></i></button></td>

                                        </tr>
                                        <tr>
                                            <td>Benzene</td>
                                            <td>BZ-005</td>
                                            <td>01-05-2024</td>
                                            <td>01-05-2026</td>
                                            <td>AR12349</td>
                                            <td>LN127</td>
                                            <td>500</td>
                                            <td>480</td>
                                            <td>520</td>
                                            <td>40</td>
                                            <td>480</td>
                                            <td>L</td>
                                            <td>10-05-2024</td>
                                            <td>John Doe</td>
                                            <td>WS005</td>
                                            <td>±0.6%</td>
                                            <td>$80</td>
                                            <td>GRN12349</td>
                                            <td>15-05-2024</td>
                                            <td>GHI Chemicals</td>
                                            <td>SUP127</td>
                                            <td>PO98769</td>
                                            <td>DN123460</td>
                                            <td>Warehouse 5</td>
                                            <td>Jane Smith</td>
                                            <td>Mark Taylor</td>
                                            <td>20-05-2024</td>
                                            <td>Pending</td>
                                            <td>10-05-2024</td>
                                            <td>John Doe</td>
                                            <td>WS005</td>
                                            <td>Calibrated</td>
                                            <td>520</td>
                                            <td>40</td>
                                            <td>480</td>
                                            <td>±0.6%</td>
                                            <td>Failed</td>
                                            <td>Contamination</td>
                                            <td>QC127</td>
                                            <td>No</td>
                                            <td>N/A</td>
                                            <td>Fail</td>
                                            <td>Annaee</td>
                                            <td>Bin 25</td>
                                            <td>PEL-2024-A05</td>
                                            <td>HU123460</td>
                                            <td>22°C</td>
                                            <td>DO45682</td>
                                            <td>200</td>
                                            <td>Mark Lee</td>
                                            <td>30-05-2024</td>
                                            <td><button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms"><i class="fa fa-bars"></i></button></td>

                                        </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
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
                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms">Deviation</button>
                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms">OOS/OOL/OOT</button>
                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms">Root Cause Analysis</button>
                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms">CAPA</button>
                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qms">Risk Assesment</button>
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
                        <form action="" method="POST"></form>
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
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="date"/> </td>
                                            <td> <input class="inpt" type="date"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" id="gross" oninput="calculateNetWeight()" type="text"/> </td>    
                                            <td> <input class="inpt" id="tare" oninput="calculateNetWeight()" type="text"/> </td>
                                            <td> <input class="inpt" id="net" type="text" readonly/> </td>
                                            <td> <select class="inpt" name="" id=""> 
                                                <option value="">--Select--</option>
                                                <option value="kg">kg</option>
                                                <option value="g">g</option>
                                                <option value="mg">mg</option>
                                                <option value="µg">µg</option>
                                                <option value="L">L</option>
                                                <option value="mL">mL</option>
                                                <option value="U">U</option>
                                            </select> </td>
                                            <td> <input class="inpt" type="date"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
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
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="date"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="date"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
                                          
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
                                        <td> <input class="inpt" type="date"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" id="gross-1" oninput="calculateNetWeightdata()" type="text"/> </td>
                                        <td> <input class="inpt" id="tare-1" oninput="calculateNetWeightdata()" type="text"/> </td>
                                        <td> <input class="inpt" id="net-data" readonly type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
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
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
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
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a href="/admin/avl/net_weight"><button type="button" class="btn btn-primary">Save changes</button></a>
                </div>
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
                '<td><input class="inpt" type="text" name="serial[]" value=""></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber +
                '][ListOfImpactingDocument]"></td>' +
                '<td><input class="inpt" type="date" name="details[' + serialNumber + '][PreparedBy]"></td>' +
                '<td><input class="inpt" type="date" name="details[' + serialNumber + '][CheckedBy]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                '<td><input class="inpt gross" type="text" /> </td>' +    
                '<td><input class="inpt tare" type="text" /></td>' +
                '<td><input class="inpt net" type="text" readonly /></td>' +
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
                        '<td><input class="inpt" type="text" name="serial[]" value=""></td>' +
                        '<td><input class="inpt" type="date" name="details[' + serialNumber + '][PreparedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][CheckedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="date" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
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
                    '<td><input class="inpt" type="date" name="serial[]" value=""></td>' +
                    '<td><input class="inpt" type="text" name="details[' + serialNumber + '][PreparedBy]"></td>' +
                    '<td><input class="inpt" type="text" name="details[' + serialNumber + '][CheckedBy]"></td>' +
                    '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                    '<td><input class="inpt gross" type="text"  name="details[' + serialNumber + '][GrossWeight]"></td>' +
                    '<td><input class="inpt tare" type="text"  oninput="calculateNetWeight(this)" name="details[' + serialNumber + '][TareWeight]"></td>' +
                    '<td><input class="inpt net" type="text" readonly name="details[' + serialNumber + '][NetWeight]"></td>' +
                    '<td><input class="inpt" type="text" name="details[' + serialNumber + '][Other]"></td>' +
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
                        '<td><input class="inpt" type="text" name="serial[]" value=""></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][PreparedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][CheckedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
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
                        '<td><input class="inpt" type="text" name="serial[]" value=""></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][PreparedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][CheckedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
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
