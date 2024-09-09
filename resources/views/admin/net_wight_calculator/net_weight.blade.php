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
                                    <th colspan="7" style="text-align: center; background-color: pink;">
                                        @lang('Weighing Information')</th>
                                    <th colspan="7" style="text-align: center; background-color: orange;">
                                        @lang('Quality Control (QC) Information')</th>
                                    <th colspan="7" style="text-align: center; background-color: grey;">
                                        @lang('Material / Product Information')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Material Name</th>
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
                                    {{-- <button type="button" name="details" id="Details-add">+</button> --}}
                                </label>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Details-table">
                                        <thead>
                                            <tr>
                                                <th>Material Name</th>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Material A</td>
                                                <td>MAT001</td>
                                                <td>2023-06-15</td>
                                                <td>2025-06-15</td>
                                                <td>AR001</td>
                                                <td>LOT001</td>
                                                <td>500</td>
                                                <td>490</td>
                                                <td>510 kg</td>
                                                <td>5 kg</td>
                                                <td>2024-09-01</td>
                                                <td>John Doe</td>
                                                <td>WS001</td>
                                                <td>±2%</td>
                                                <td>$10</td>
                                            </tr>
                                            <tr>
                                                <td>Material B</td>
                                                <td>MAT002</td>
                                                <td>2022-12-01</td>
                                                <td>2024-12-01</td>
                                                <td>AR002</td>
                                                <td>LOT002</td>
                                                <td>1000</td>
                                                <td>980</td>
                                                <td>1020 kg</td>
                                                <td>8 kg</td>
                                                <td>2024-08-28</td>
                                                <td>Jane Smith</td>
                                                <td>WS002</td>
                                                <td>±1%</td>
                                                <td>$12</td>
                                            </tr>
                                            <tr>
                                                <td>Material C</td>
                                                <td>MAT003</td>
                                                <td>2023-03-22</td>
                                                <td>2025-03-22</td>
                                                <td>AR003</td>
                                                <td>LOT003</td>
                                                <td>750</td>
                                                <td>740</td>
                                                <td>760 kg</td>
                                                <td>7 kg</td>
                                                <td>2024-09-02</td>
                                                <td>Mike Johnson</td>
                                                <td>WS003</td>
                                                <td>±3%</td>
                                                <td>$15</td>
                                            </tr>
                                            <tr>

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
                                    {{-- <button type="button" name="details" id="Details-add">+</button> --}}
                                </label>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Details-table">
                                        <thead>
                                            <tr>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
                                    {{-- <button type="button" name="details" id="Details-add">+</button> --}}
                                </label>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Details-table">
                                        <thead>
                                            <tr>
                                                <th>Weighing Date</th>
                                                <th>Weighed By</th>
                                                <th>Weighing Scale ID</th>
                                                <th>Gross Weight</th>
                                                <th>Tare Weight</th>
                                                <th>Net Weight</th>
                                                <th>Weight Tolerance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
                                    {{-- <button type="button" name="details" id="Details-add">+</button> --}}
                                </label>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Details-table">
                                        <thead>
                                            <tr>
                                                <th>QC Status</th>
                                                <th>QC Remarks</th>
                                                <th>QC Batch Number</th>
                                                <th>Sample Taken</th>
                                                <th>Sample Quantity</th>
                                                <th>Test Results</th>
                                                <th>QC Approved By</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
                                    {{-- <button type="button" name="details" id="Details-add">+</button> --}}
                                </label>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="Details-table">
                                        <thead>
                                            <tr>
                                                <th>Storage Bin/Location</th>
                                                <th>Handling Unit Number</th>
                                                <th>Temperature Requirements</th>
                                                <th>Dispensing Order Number</th>
                                                <th>Dispensing Quantity</th>
                                                <th>Dispensed By</th>
                                                <th>Date of Dispensing</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
