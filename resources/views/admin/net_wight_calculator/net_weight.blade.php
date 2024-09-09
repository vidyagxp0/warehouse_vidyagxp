@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light">
                            <thead>
                                <tr>
                                    <th colspan="15" style="text-align: center; background-color: blueviolet;">
                                        @lang('Material / Product Information')</th>
                                    <th colspan="11" style="text-align: center; background-color: green;">
                                        @lang('GRN Information')</th>
                                    <th colspan="7" style="text-align: center; background-color: brown;">
                                        @lang('Weighing Information')</th>
                                    <th colspan="7" style="text-align: center; background-color: orange;">
                                        @lang('Quality Control (QC) Information')</th>
                                    <th colspan="7" style="text-align: center; background-color: grey;">
                                        @lang('Material / Product Information')</th>
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
                                    <th>Handling Unit Number</th>
                                    <th>Temperature Requirements</th>
                                    <th>Dispensing Order Number</th>
                                    <th>Dispensing Quantity</th>
                                    <th>Dispensed By</th>
                                    <th>Date of Dispensing</th>

                                </tr>
                                <tr>
                                    <td>Acetone</td>
                                    <td>AC-001</td>
                                    <td>2024-01-01</td>
                                    <td>2026-01-01</td>
                                    <td>AR12345</td>
                                    <td>LN123</td>
                                    <td>1000 L</td>
                                    <td>980 L</td>
                                    <td>1020 kg</td>
                                    <td>20 kg</td>
                                    <td>2024-02-01</td>
                                    <td>John Doe</td>
                                    <td>WS001</td>
                                    <td>±0.5%</td>
                                    <td>$50</td>
                                    <td>GRN12345</td>
                                    <td>2024-02-05</td>
                                    <td>ABC Supplies</td>
                                    <td>SUP123</td>
                                    <td>PO98765</td>
                                    <td>DN123456</td>
                                    <td>Warehouse 1</td>
                                    <td>Jane Smith</td>
                                    <td>Mark Taylor</td>
                                    <td>2024-02-10</td>
                                    <td>Approved</td>
                                    <td>2024-02-01</td>
                                    <td>John Doe</td>
                                    <td>WS001</td>
                                    <td>1020 kg</td>
                                    <td>20 kg</td>
                                    <td>1000 kg</td>
                                    <td>±0.5%</td>
                                    <td>Passed</td>
                                    <td>No Issues</td>
                                    <td>QC123</td>
                                    <td>Yes</td>
                                    <td>5 L</td>
                                    <td>Pass</td>
                                    <td>Anna Lee</td>
                                    <td>Bin 12</td>
                                    <td>HU123456</td>
                                    <td>15°C</td>
                                    <td>DO45678</td>
                                    <td>500 L</td>
                                    <td>Lisa Brown</td>
                                    <td>2024-02-15</td>
                                </tr>
                                <tr>
                                    <td>Ethyl Alcohol</td>
                                    <td>EA-002</td>
                                    <td>2023-12-10</td>
                                    <td>2025-12-10</td>
                                    <td>AR12346</td>
                                    <td>LN124</td>
                                    <td>2000 L</td>
                                    <td>1900 L</td>
                                    <td>2050 kg</td>
                                    <td>50 kg</td>
                                    <td>2024-01-15</td>
                                    <td>Jane Smith</td>
                                    <td>WS002</td>
                                    <td>±0.3%</td>
                                    <td>$60</td>
                                    <td>GRN12346</td>
                                    <td>2024-01-20</td>
                                    <td>XYZ Traders</td>
                                    <td>SUP124</td>
                                    <td>PO98766</td>
                                    <td>DN123457</td>
                                    <td>Warehouse 2</td>
                                    <td>Mark Taylor</td>
                                    <td>John Doe</td>
                                    <td>2024-01-25</td>
                                    <td>Pending</td>
                                    <td>2024-01-15</td>
                                    <td>Jane Smith</td>
                                    <td>WS002</td>
                                    <td>2050 kg</td>
                                    <td>50 kg</td>
                                    <td>2000 kg</td>
                                    <td>±0.3%</td>
                                    <td>Failed</td>
                                    <td>Contamination</td>
                                    <td>QC124</td>
                                    <td>No</td>
                                    <td>N/A</td>
                                    <td>Fail</td>
                                    <td>Mark Lee</td>
                                    <td>Bin 15</td>
                                    <td>HU123457</td>
                                    <td>18°C</td>
                                    <td>DO45679</td>
                                    <td>1000 L</td>
                                    <td>John White</td>
                                    <td>2024-01-30</td>
                                </tr>
                                <tr>
                                    <td>Hydrogen Peroxide</td>
                                    <td>HP-003</td>
                                    <td>2024-03-01</td>
                                    <td>2026-03-01</td>
                                    <td>AR12347</td>
                                    <td>LN125</td>
                                    <td>1500 L</td>
                                    <td>1480 L</td>
                                    <td>1540 kg</td>
                                    <td>40 kg</td>
                                    <td>2024-03-10</td>
                                    <td>Mark Taylor</td>
                                    <td>WS003</td>
                                    <td>±0.7%</td>
                                    <td>$70</td>
                                    <td>GRN12347</td>
                                    <td>2024-03-15</td>
                                    <td>PQR Chemicals</td>
                                    <td>SUP125</td>
                                    <td>PO98767</td>
                                    <td>DN123458</td>
                                    <td>Warehouse 3</td>
                                    <td>John Doe</td>
                                    <td>Lisa Brown</td>
                                    <td>2024-03-20</td>
                                    <td>Approved</td>
                                    <td>2024-03-10</td>
                                    <td>Mark Taylor</td>
                                    <td>WS003</td>
                                    <td>1540 kg</td>
                                    <td>40 kg</td>
                                    <td>1500 kg</td>
                                    <td>±0.7%</td>
                                    <td>Passed</td>
                                    <td>No Issues</td>
                                    <td>QC125</td>
                                    <td>Yes</td>
                                    <td>8 L</td>
                                    <td>Pass</td>
                                    <td>Anna Lee</td>
                                    <td>Bin 10</td>
                                    <td>HU123458</td>
                                    <td>10°C</td>
                                    <td>DO45680</td>
                                    <td>750 L</td>
                                    <td>Mark Taylor</td>
                                    <td>2024-03-25</td>
                                </tr>
                                <tr>
                                    <td>Sodium Chloride</td>
                                    <td>SC-004</td>
                                    <td>2024-04-05</td>
                                    <td>2026-04-05</td>
                                    <td>AR12348</td>
                                    <td>LN126</td>
                                    <td>3000 kg</td>
                                    <td>2900 kg</td>
                                    <td>3100 kg</td>
                                    <td>100 kg</td>
                                    <td>2024-04-15</td>
                                    <td>Jane Smith</td>
                                    <td>WS004</td>
                                    <td>±0.4%</td>
                                    <td>$25</td>
                                    <td>GRN12348</td>
                                    <td>2024-04-20</td>
                                    <td>DEF Industries</td>
                                    <td>SUP126</td>
                                    <td>PO98768</td>
                                    <td>DN123459</td>
                                    <td>Warehouse 4</td>
                                    <td>Lisa Brown</td>
                                    <td>John Doe</td>
                                    <td>2024-04-25</td>
                                    <td>Approved</td>
                                    <td>2024-04-15</td>
                                    <td>Jane Smith</td>
                                    <td>WS004</td>
                                    <td>3100 kg</td>
                                    <td>100 kg</td>
                                    <td>3000 kg</td>
                                    <td>±0.4%</td>
                                    <td>Passed</td>
                                    <td>No Issues</td>
                                    <td>QC126</td>
                                    <td>Yes</td>
                                    <td>10 kg</td>
                                    <td>Pass</td>
                                    <td>Mark Lee</td>
                                    <td>Bin 20</td>
                                    <td>HU123459</td>
                                    <td>Room Temp</td>
                                    <td>DO45681</td>
                                    <td>1500 kg</td>
                                    <td>Jane Doe</td>
                                    <td>2024-04-30</td>
                                </tr>
                                <tr>
                                    <td>Benzene</td>
                                    <td>BZ-005</td>
                                    <td>2024-05-01</td>
                                    <td>2026-05-01</td>
                                    <td>AR12349</td>
                                    <td>LN127</td>
                                    <td>500 L</td>
                                    <td>480 L</td>
                                    <td>520 kg</td>
                                    <td>40 kg</td>
                                    <td>2024-05-10</td>
                                    <td>Mark Taylor</td>
                                    <td>WS005</td>
                                    <td>±0.6%</td>
                                    <td>$45</td>
                                    <td>GRN12349</td>
                                    <td>2024-05-15</td>
                                    <td>GHI Distributors</td>
                                    <td>SUP127</td>
                                    <td>PO98769</td>
                                    <td>DN123460</td>
                                    <td>Warehouse 5</td>
                                    <td>Jane Smith</td>
                                    <td>Mark Lee</td>
                                    <td>2024-05-20</td>
                                    <td>Pending</td>
                                    <td>2024-05-10</td>
                                    <td>Mark Taylor</td>
                                    <td>WS005</td>
                                    <td>520 kg</td>
                                    <td>40 kg</td>
                                    <td>480 kg</td>
                                    <td>±0.6%</td>
                                    <td>Failed</td>
                                    <td>Leak Detected</td>
                                    <td>QC127</td>
                                    <td>No</td>
                                    <td>N/A</td>
                                    <td>Fail</td>
                                    <td>John Doe</td>
                                    <td>Bin 30</td>
                                    <td>HU123460</td>
                                    <td>18°C</td>
                                    <td>DO45682</td>
                                    <td>300 L</td>
                                    <td>Jane Smith</td>
                                    <td>2024-05-25</td>
                                </tr>
                                <tr>
                                    <td>Sulfuric Acid</td>
                                    <td>SA-006</td>
                                    <td>2024-06-01</td>
                                    <td>2026-06-01</td>
                                    <td>AR12350</td>
                                    <td>LN128</td>
                                    <td>2500 L</td>
                                    <td>2450 L</td>
                                    <td>2600 kg</td>
                                    <td>100 kg</td>
                                    <td>2024-06-05</td>
                                    <td>Jane Smith</td>
                                    <td>WS006</td>
                                    <td>±0.8%</td>
                                    <td>$65</td>
                                    <td>GRN12350</td>
                                    <td>2024-06-10</td>
                                    <td>JKL Chemicals</td>
                                    <td>SUP128</td>
                                    <td>PO98770</td>
                                    <td>DN123461</td>
                                    <td>Warehouse 6</td>
                                    <td>Mark Taylor</td>
                                    <td>Lisa Brown</td>
                                    <td>2024-06-15</td>
                                    <td>Approved</td>
                                    <td>2024-06-05</td>
                                    <td>Jane Smith</td>
                                    <td>WS006</td>
                                    <td>2600 kg</td>
                                    <td>100 kg</td>
                                    <td>2500 kg</td>
                                    <td>±0.8%</td>
                                    <td>Passed</td>
                                    <td>No Issues</td>
                                    <td>QC128</td>
                                    <td>Yes</td>
                                    <td>6 L</td>
                                    <td>Pass</td>
                                    <td>Anna Lee</td>
                                    <td>Bin 25</td>
                                    <td>HU123461</td>
                                    <td>12°C</td>
                                    <td>DO45683</td>
                                    <td>1250 L</td>
                                    <td>Mark Lee</td>
                                    <td>2024-06-20</td>
                                </tr>
                                <tr>
                                    <td>Hydrochloric Acid</td>
                                    <td>HA-007</td>
                                    <td>2024-07-01</td>
                                    <td>2026-07-01</td>
                                    <td>AR12351</td>
                                    <td>LN129</td>
                                    <td>1000 L</td>
                                    <td>980 L</td>
                                    <td>1040 kg</td>
                                    <td>60 kg</td>
                                    <td>2024-07-05</td>
                                    <td>Mark Lee</td>
                                    <td>WS007</td>
                                    <td>±0.5%</td>
                                    <td>$55</td>
                                    <td>GRN12351</td>
                                    <td>2024-07-10</td>
                                    <td>MNO Supplies</td>
                                    <td>SUP129</td>
                                    <td>PO98771</td>
                                    <td>DN123462</td>
                                    <td>Warehouse 7</td>
                                    <td>Jane Doe</td>
                                    <td>Mark Taylor</td>
                                    <td>2024-07-15</td>
                                    <td>Pending</td>
                                    <td>2024-07-05</td>
                                    <td>Mark Lee</td>
                                    <td>WS007</td>
                                    <td>1040 kg</td>
                                    <td>60 kg</td>
                                    <td>980 kg</td>
                                    <td>±0.5%</td>
                                    <td>Passed</td>
                                    <td>No Issues</td>
                                    <td>QC129</td>
                                    <td>Yes</td>
                                    <td>4 L</td>
                                    <td>Pass</td>
                                    <td>Jane Smith</td>
                                    <td>Bin 18</td>
                                    <td>HU123462</td>
                                    <td>Room Temp</td>
                                    <td>DO45684</td>
                                    <td>500 L</td>
                                    <td>Lisa Brown</td>
                                    <td>2024-07-20</td>
                                </tr>
                                <tr>
                                    <td>Ammonia</td>
                                    <td>AM-008</td>
                                    <td>2024-08-01</td>
                                    <td>2026-08-01</td>
                                    <td>AR12352</td>
                                    <td>LN130</td>
                                    <td>750 L</td>
                                    <td>730 L</td>
                                    <td>780 kg</td>
                                    <td>30 kg</td>
                                    <td>2024-08-05</td>
                                    <td>Jane Doe</td>
                                    <td>WS008</td>
                                    <td>±0.9%</td>
                                    <td>$40</td>
                                    <td>GRN12352</td>
                                    <td>2024-08-10</td>
                                    <td>PQR Enterprises</td>
                                    <td>SUP130</td>
                                    <td>PO98772</td>
                                    <td>DN123463</td>
                                    <td>Warehouse 8</td>
                                    <td>Lisa Brown</td>
                                    <td>John Doe</td>
                                    <td>2024-08-15</td>
                                    <td>Approved</td>
                                    <td>2024-08-05</td>
                                    <td>Jane Doe</td>
                                    <td>WS008</td>
                                    <td>780 kg</td>
                                    <td>30 kg</td>
                                    <td>750 kg</td>
                                    <td>±0.9%</td>
                                    <td>Passed</td>
                                    <td>No Issues</td>
                                    <td>QC130</td>
                                    <td>Yes</td>
                                    <td>3 L</td>
                                    <td>Pass</td>
                                    <td>Mark Lee</td>
                                    <td>Bin 22</td>
                                    <td>HU123463</td>
                                    <td>14°C</td>
                                    <td>DO45685</td>
                                    <td>375 L</td>
                                    <td>Anna Lee</td>
                                    <td>2024-08-20</td>
                                </tr>

<!-- More rows with similar structure -->


                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- card end -->
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
                                            <td> <input class="inpt" type="text"/> </td>
                                            <td> <input class="inpt" type="text"/> </td>
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
                                        <td> <input class="inpt" type="text"/> </td>
                                        <td> <input class="inpt" type="text"/> </td>
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
                                    Material / Product Information
                                <button class="xyz" type="button" name="details" id="Details-add-4">+</button>
                                </label>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Details-table-4">
                                        <thead>
                                            <tr style="background-color: #4634ff; color: white;">
                                                <th style="font-weight: bold;">Storage Bin/Location</th>
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
                    <button type="button" class="btn btn-primary">Save changes</button>
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
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="text" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
                        '<td><input class="inpt" type="date" name="details[' + serialNumber + '][ApprovedBy]"></td>' +
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

                var tableBody = $('#Details-table tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
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
            $('#Details-add-2').click(function(e) {
                function generateTableRow(serialNumber) {
                    var html = '';
                    html += '<tr>' +
                        '<td><input class="inpt" type="date" name="serial[]" value=""></td>' +
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

                var tableBody = $('#Details-table-2 tbody');
                var rowCount = tableBody.children('tr').length;
                var newRow = generateTableRow(rowCount + 1);
                tableBody.append(newRow);
            });
        });
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
