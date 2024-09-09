@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light">
                            <thead>
                                {{-- @forelse($newexpMaterial as $new) --}}
                                <table class="table table--light">
                                    <thead>
                                        {{-- @forelse($newexpMaterial as $new) --}}
                                        <tr>
                                            <th>@lang('Analysis ID')</th>
                                            <th>@lang('Product Name')</th>
                                            <th>@lang('Batch Number')</th>
                                            <th>@lang('Date of Analysis')</th>
                                            <th>@lang('Analysis Type')</th>
                                            <th>@lang('Testing Method')</th>
                                            <th>@lang('Result Status')</th>
                                            <th>@lang('Attachment')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ANAL001</td>
                                            <td>Product A</td>
                                            <td>BATCH6789</td>
                                            <td>2024-08-15</td>
                                            <td>Chemical Analysis</td>
                                            <td>Spectroscopy</td>
                                            <td>Passed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL002</td>
                                            <td>Product B</td>
                                            <td>BATCH5432</td>
                                            <td>2024-07-10</td>
                                            <td>Microbiological Testing</td>
                                            <td>Plate Count</td>
                                            <td>Failed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL003</td>
                                            <td>Product C</td>
                                            <td>BATCH1122</td>
                                            <td>2023-06-05</td>
                                            <td>Physical Testing</td>
                                            <td>Hardness Test</td>
                                            <td>Passed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL004</td>
                                            <td>Product D</td>
                                            <td>BATCH2233</td>
                                            <td>2024-05-20</td>
                                            <td>Chemical Analysis</td>
                                            <td>Titration</td>
                                            <td>Passed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL005</td>
                                            <td>Product E</td>
                                            <td>BATCH3344</td>
                                            <td>2024-01-12</td>
                                            <td>Microbiological Testing</td>
                                            <td>Gram Staining</td>
                                            <td>Failed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL006</td>
                                            <td>Product F</td>
                                            <td>BATCH4455</td>
                                            <td>2023-12-22</td>
                                            <td>Physical Testing</td>
                                            <td>Hardness Test</td>
                                            <td>Passed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL007</td>
                                            <td>Product G</td>
                                            <td>BATCH5566</td>
                                            <td>2024-06-15</td>
                                            <td>Chemical Analysis</td>
                                            <td>pH Test</td>
                                            <td>Passed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL008</td>
                                            <td>Product H</td>
                                            <td>BATCH6677</td>
                                            <td>2023-09-30</td>
                                            <td>Microbiological Testing</td>
                                            <td>Agar Test</td>
                                            <td>Failed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL009</td>
                                            <td>Product I</td>
                                            <td>BATCH7788</td>
                                            <td>2024-03-10</td>
                                            <td>Physical Testing</td>
                                            <td>Hardness Test</td>
                                            <td>Passed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL010</td>
                                            <td>Product J</td>
                                            <td>BATCH8899</td>
                                            <td>2024-02-28</td>
                                            <td>Chemical Analysis</td>
                                            <td>Spectroscopy</td>
                                            <td>Failed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL011</td>
                                            <td>Product K</td>
                                            <td>BATCH9900</td>
                                            <td>2024-08-12</td>
                                            <td>Microbiological Testing</td>
                                            <td>Plate Count</td>
                                            <td>Passed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL012</td>
                                            <td>Product L</td>
                                            <td>BATCH1010</td>
                                            <td>2023-11-18</td>
                                            <td>Physical Testing</td>
                                            <td>Hardness Test</td>
                                            <td>Failed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL013</td>
                                            <td>Product M</td>
                                            <td>BATCH1112</td>
                                            <td>2024-07-25</td>
                                            <td>Chemical Analysis</td>
                                            <td>pH Test</td>
                                            <td>Passed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL014</td>
                                            <td>Product N</td>
                                            <td>BATCH1314</td>
                                            <td>2023-08-14</td>
                                            <td>Microbiological Testing</td>
                                            <td>Agar Test</td>
                                            <td>Failed</td>
                                            <td>Attachment.file</td>
                                        </tr>
                                        <tr>
                                            <td>ANAL015</td>
                                            <td>Product O</td>
                                            <td>BATCH1516</td>
                                            <td>2024-09-10</td>
                                            <td>Physical Testing</td>
                                            <td>Hardness Test</td>
                                            <td>Passed</td>
                                            <td>Attachment.file</td>
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
                        <div class="form-group">
                            <label>@lang('Analysis ID')</label>
                            <input type="text" name="target_weight" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Product Name')</label>
                            <input type="text" name="actual_weight" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Date of Analysis')</label>
                            <input type="text" name="tolerance_range" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Analysis Type')</label>
                            <input type="date" name="weighing_scale_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Testing Method')</label>
                            <input type="text" name="weighing_location" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Result Status')</label>
                            <input type="text" name="environment_condition" class="form-control" required>
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
    <x-search-form />
    @can('admin.newexp.store')
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Analysis')">
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
