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
                                    <th>@lang('S.N.')</th>
                                    <th>@lang('Material')</th>
                                    <th>@lang('Catefory')</th>
                                    <th>@lang('Expiry Date')</th>
                                    <th>@lang('Quantity')</th>
                                    <th>@lang('Status')</th>
                                    <th>@lang('UOM')</th>
                                    <th>@lang('Vendor Site')</th>
                                    <th>@lang('Manufacturer')</th>
                                    <th>@lang('Vendor Status')</th>
                                    <th>@lang('Last Audit Date')</th>
                                    <th>@lang('Quality Issues Reported')</th>
                                    <th>@lang('Supporting Documents')</th>
                                    <th>@lang('Deviation ID')</th>
                                    <th>@lang('Attachment File')</th>


                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($newexpMaterial as $new) --}}
                                <tr>
                                    <td>1</td>
                                    <td>Paracetamol</td>
                                    <td>Active Pharmaceutical Ingredient (API)</td>
                                    <td>2025-08-15</td>
                                    <td>10,000</td>
                                    <td>Approved</td>
                                    <td>KG</td>
                                    <td>ABC Pharma Ltd.</td>
                                    <td>XYZ Pharma Inc.</td>
                                    <td>Approved</td>
                                    <td>2024-05-01</td>
                                    <td>No</td>
                                    <td><a href="#">View COA</a></td>
                                    <td>DEV00123</td>
                                    <td><a href="#">Attachment1.pdf</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Aspirin</td>
                                    <td>Finished Product</td>
                                    <td>2024-12-31</td>
                                    <td>5,000</td>
                                    <td>Approved</td>
                                    <td>Boxes</td>
                                    <td>Global Pharmaceuticals</td>
                                    <td>ABC Manufacturing Co.</td>
                                    <td>Pending</td>
                                    <td>2023-11-20</td>
                                    <td>Yes</td>
                                    <td><a href="#">View Batch Report</a></td>
                                    <td>DEV00345</td>
                                    <td><a href="#">Attachment2.pdf</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ibuprofen</td>
                                    <td>API</td>
                                    <td>2026-03-01</td>
                                    <td>7,500</td>
                                    <td>Approved</td>
                                    <td>KG</td>
                                    <td>HealthCare Ltd.</td>
                                    <td>Global Med Co.</td>
                                    <td>Approved</td>
                                    <td>2024-06-15</td>
                                    <td>No</td>
                                    <td><a href="#">View COA</a></td>
                                    <td>DEV00456</td>
                                    <td><a href="#">Attachment3.pdf</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Amoxicillin</td>
                                    <td>Finished Product</td>
                                    <td>2024-10-10</td>
                                    <td>12,000</td>
                                    <td>Approved</td>
                                    <td>Boxes</td>
                                    <td>Med Life Pharma</td>
                                    <td>PharmaTech Inc.</td>
                                    <td>Approved</td>
                                    <td>2023-12-12</td>
                                    <td>No</td>
                                    <td><a href="#">View Batch Report</a></td>
                                    <td>DEV00267</td>
                                    <td><a href="#">Attachment4.pdf</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Cetirizine</td>
                                    <td>Finished Product</td>
                                    <td>2025-02-28</td>
                                    <td>6,500</td>
                                    <td>Approved</td>
                                    <td>Boxes</td>
                                    <td>Quick Pharma</td>
                                    <td>Wellness Pharma Ltd.</td>
                                    <td>Approved</td>
                                    <td>2024-01-25</td>
                                    <td>No</td>
                                    <td><a href="#">View Batch Report</a></td>
                                    <td>DEV00378</td>
                                    <td><a href="#">Attachment5.pdf</a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Metformin</td>
                                    <td>API</td>
                                    <td>2026-12-01</td>
                                    <td>15,000</td>
                                    <td>Approved</td>
                                    <td>KG</td>
                                    <td>Future Pharma Ltd.</td>
                                    <td>Advanced Med Inc.</td>
                                    <td>Pending</td>
                                    <td>2024-02-18</td>
                                    <td>Yes</td>
                                    <td><a href="#">View COA</a></td>
                                    <td>DEV00489</td>
                                    <td><a href="#">Attachment6.pdf</a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Losartan</td>
                                    <td>Finished Product</td>
                                    <td>2025-07-22</td>
                                    <td>4,500</td>
                                    <td>Approved</td>
                                    <td>Boxes</td>
                                    <td>LifeScience Pharma</td>
                                    <td>Care Health Co.</td>
                                    <td>Approved</td>
                                    <td>2024-03-10</td>
                                    <td>No</td>
                                    <td><a href="#">View Batch Report</a></td>
                                    <td>DEV00231</td>
                                    <td><a href="#">Attachment7.pdf</a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Vitamin D3</td>
                                    <td>API</td>
                                    <td>2025-09-14</td>
                                    <td>3,200</td>
                                    <td>Approved</td>
                                    <td>KG</td>
                                    <td>Sunrise Pharma</td>
                                    <td>Wellmed Industries</td>
                                    <td>Pending</td>
                                    <td>2023-10-05</td>
                                    <td>Yes</td>
                                    <td><a href="#">View COA</a></td>
                                    <td>DEV00543</td>
                                    <td><a href="#">Attachment8.pdf</a></td>
                                </tr>

                                <tr>
                                    <td>9</td>
                                    <td>Paracetamol</td>
                                    <td>Active Pharmaceutical Ingredient (API)</td>
                                    <td>2025-08-15</td>
                                    <td>10,000</td>
                                    <td>Approved</td>
                                    <td>KG</td>
                                    <td>ABC Pharma Ltd.</td>
                                    <td>XYZ Pharma Inc.</td>
                                    <td>Approved</td>
                                    <td>2024-05-01</td>
                                    <td>No</td>
                                    <td><a href="#">View COA</a></td>
                                    <td>DEV00123</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Aspirin</td>
                                    <td>Finished Product</td>
                                    <td>2024-12-31</td>
                                    <td>5,000</td>
                                    <td>Approved</td>
                                    <td>Boxes</td>
                                    <td>Global Pharmaceuticals</td>
                                    <td>ABC Manufacturing Co.</td>
                                    <td>Pending</td>
                                    <td>2023-11-20</td>
                                    <td>Yes</td>
                                    <td><a href="#">View Batch Report</a></td>
                                    <td>DEV00345</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- @if ($categories->hasPages())
                <div class="card-footer py-4">
                    @php echo  paginateLinks($categories) @endphp
                </div>
            @endif --}}
            </div><!-- card end -->
        </div>
    </div>


    <!--Add Modal -->
    <style>
        .modal-dialog {
            max-width: 800px;
        }
    </style>
    <!--Add Modal -->
    <style>
        .modal-dialog {
            max-width: 800px;
        }
    </style>
    <div id="cuModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="type"></span> <span>@lang('Add New Expirey')</span></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form action="{{ route('admin.newexp.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>@lang('Material')</label>
                            <input type="text" name="Material" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Catefory')</label>
                            <input type="text" name="Catefory" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Quantity ')</label>
                            <input type="text" name="Quantity" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('UOM')</label>
                            <input type="text" name="UOM" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Vendor')</label>
                            <input type="text" name="vendor" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Vendor Site')</label>
                            <input type="text" name="vendor_site" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Manufacturer')</label>
                            <input type="text" name="Manufacturer" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label>@lang('Manufacturer Site')</label>
                            <input type="text" name="Manufacturer_Site" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Vendor Status')</label>
                            <input type="text" name="Vendor_Status" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Last Audit Date')</label>
                            <input type="date" name="last_Audit_Date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Quality Issues Reported')</label>
                            <input type="text" name="quality_issues_reported" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Supporting Documents')</label>
                            <input type="text" name="supporting_documents" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Deviation ID')</label>
                            <input type="text" name="deviation_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Attachment File')</label>
                            <input type="file" name="attachment" class="form-control" required>
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
    <!-- CSV Import Modal -->
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

    <!-- Success Message -->
    <div id="importSuccessMessage" class="alert alert-success" style="display: none;">
        @lang('CSV file imported successfully!')
    </div>
@endsection

@push('breadcrumb-plugins')
    <x-search-form />
    @can('admin.newexp.store')
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New AVL')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
        <button type="button" class="btn btn-sm btn-outline--primary" onclick="window.print()">
            <i class="las la-print"></i> @lang('Print')
        </button>
        <button type="button" class="btn btn-sm btn-outline--primary" onclick="exportToCSV()" data-toggle="modal"
            data-target="#csvExportModal">
            <i class="las la-file-export"></i> @lang('Export CSV')
        </button>
        <button type="button" class="btn btn-sm btn-outline--primary" data-toggle="modal" data-target="#csvImportModal">
            <i class="las la-cloud-upload-alt"></i> @lang('Import CSV')
        </button>
    @endcan
@endpush

<!-- Bootstrap CSS -->
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
