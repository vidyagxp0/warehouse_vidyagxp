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
                                    <th>@lang('Product Code')</th>
                                    <th>@lang('Batch Number')</th>
                                    <th>@lang('Current Stock Level')</th>
                                    <th>@lang('Reorder Level')</th>
                                    <th>@lang('Reorder Quantity')</th>
                                    <th>@lang('Last Stock Check Date')</th>
                                    <th>@lang('Expiry Date')</th>
                                    <th>@lang('Attachment File')</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($newexpMaterial as $new) --}}
                                <tr>
                                    <td>PRD001</td>
                                    <td>BATCH6789</td>
                                    <td>150</td>
                                    <td>50</td>
                                    <td>200</td>
                                    <td>2024-08-15</td>
                                    <td>2025-12-31</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD002</td>
                                    <td>BATCH5432</td>
                                    <td>20</td>
                                    <td>30</td>
                                    <td>100</td>
                                    <td>2024-07-10</td>
                                    <td>2024-11-15</td>
                                    <td>Attacment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD003</td>
                                    <td>BATCH1122</td>
                                    <td>0</td>
                                    <td>20</td>
                                    <td>50</td>
                                    <td>2023-06-05</td>
                                    <td>2023-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD004</td>
                                    <td>BATCH1123</td>
                                    <td>0</td>
                                    <td>20</td>
                                    <td>50</td>
                                    <td>2023-06-06</td>
                                    <td>2023-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD005</td>
                                    <td>BATCH1123</td>
                                    <td>0</td>
                                    <td>20</td>
                                    <td>50</td>
                                    <td>2023-06-06</td>
                                    <td>2023-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD006</td>
                                    <td>BATCH1123</td>
                                    <td>0</td>
                                    <td>20</td>
                                    <td>50</td>
                                    <td>2023-06-06</td>
                                    <td>2023-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD007</td>
                                    <td>BATCH1123</td>
                                    <td>0</td>
                                    <td>20</td>
                                    <td>50</td>
                                    <td>2023-06-06</td>
                                    <td>2023-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD008</td>
                                    <td>BATCH1123</td>
                                    <td>0</td>
                                    <td>20</td>
                                    <td>50</td>
                                    <td>2023-06-06</td>
                                    <td>2023-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD009</td>
                                    <td>BATCH1123</td>
                                    <td>0</td>
                                    <td>20</td>
                                    <td>50</td>
                                    <td>2023-06-06</td>
                                    <td>2023-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD0010</td>
                                    <td>BATCH1123</td>
                                    <td>0</td>
                                    <td>20</td>
                                    <td>50</td>
                                    <td>2023-06-06</td>
                                    <td>2023-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD0011</td>
                                    <td>BATCH1123</td>
                                    <td>0</td>
                                    <td>20</td>
                                    <td>50</td>
                                    <td>2023-06-06</td>
                                    <td>2023-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD0012</td>
                                    <td>BATCH11124</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>20</td>
                                    <td>2024-06-06</td>
                                    <td>2025-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD0013</td>
                                    <td>BATCH1125</td>
                                    <td>0</td>
                                    <td>20</td>
                                    <td>40</td>
                                    <td>2023-06-06</td>
                                    <td>2024-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD0014</td>
                                    <td>BATCH1126</td>
                                    <td>0</td>
                                    <td>40</td>
                                    <td>50</td>
                                    <td>2024-06-06</td>
                                    <td>2025-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>PRD0015</td>
                                    <td>BATCH1127</td>
                                    <td>0</td>
                                    <td>40</td>
                                    <td>50</td>
                                    <td>2024-06-06</td>
                                    <td>2025-09-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                {{-- @empty --}}
                                {{-- <tr>
                                        <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                    </tr> --}}
                                {{-- @endforelse --}}
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
    <div id="cuModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="type"></span> <span>@lang('Add New Expiry')</span></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form action="{{ route('admin.newexp.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <!-- Form Fields -->
                        <div class="form-group">
                            <label>@lang('Order ID')</label>
                            <input type="text" name="order_id_packing" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Product Code')</label>
                            <input type="text" name="production_code_packing" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Batch Number')</label>
                            <input type="text" name="batch_number_packing" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Quantity Packed')</label>
                            <input type="text" name="quality_pack" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Packing Date')</label>
                            <input type="date" name="packing_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Packaging Type')</label>
                            <input type="text" name="packing_type" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Packing Instructions')</label>
                            <input type="text" name="packing_instruction" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Shipping Label')</label>
                            <input type="text" name="shipping_label" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Attachment')</label><br>
                            <input type="file" name="attachment" class="form-control-file" required>
                        </div>
                    </div>
                    @can('admin.product.category.store')
                        <div class="modal-footer">
                            <button type="#" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
                        </div>
                    @endcan
                </form>
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
    <div class="row mb-3">
        <div class="col-md-12">
            <select name="result" id="">
                <option value="">--Filter--</option>
                <option value="Approved">Approved</option>
                <option value="Under-test">Under-test</option>
                <option value="Rejected">Rejected</option>
                <option value="Under-retest">Under-retest</option>
            </select>
        </div>

    </div>
    <x-search-form />
    @can('admin.newexp.store')
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Inventory Management')">
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
