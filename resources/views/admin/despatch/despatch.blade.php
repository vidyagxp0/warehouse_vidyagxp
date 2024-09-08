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
                                <tr>
                                    <th>@lang('Despatch ID')</th>
                                    <th>@lang('Product Name')</th>
                                    <th>@lang('Batch Number')</th>
                                    <th>@lang('Quantity')</th>
                                    <th>@lang('Dispatch Date')</th>
                                    <th>@lang('Transport Mode')</th>
                                    <th>@lang('Tracking Number')</th>
                                    <th>@lang('Despatch Status')</th>
                                    <th>@lang('Attachment File')</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DS001</td>
                                    <td>Product A</td>
                                    <td>BATCH6789</td>
                                    <td>100</td>
                                    <td>2024-08-15</td>
                                    <td>Air</td>
                                    <td>TRACK123456</td>
                                    <td>Shipped</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS002</td>
                                    <td>Product B</td>
                                    <td>BATCH5432</td>
                                    <td>200</td>
                                    <td>2024-07-10</td>
                                    <td>Sea</td>
                                    <td>TRACK789012</td>
                                    <td>In Transit</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS003</td>
                                    <td>Product C</td>
                                    <td>BATCH1122</td>
                                    <td>150</td>
                                    <td>2023-06-05</td>
                                    <td>Land</td>
                                    <td>TRACK345678</td>
                                    <td>Delivered</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <!-- New rows with different dates -->
                                <tr>
                                    <td>DS008</td>
                                    <td>Product H</td>
                                    <td>BATCH1234</td>
                                    <td>180</td>
                                    <td>2024-09-01</td>
                                    <td>Air</td>
                                    <td>TRACK456789</td>
                                    <td>Shipped</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS009</td>
                                    <td>Product I</td>
                                    <td>BATCH5678</td>
                                    <td>120</td>
                                    <td>2024-09-05</td>
                                    <td>Sea</td>
                                    <td>TRACK123789</td>
                                    <td>In Transit</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS010</td>
                                    <td>Product J</td>
                                    <td>BATCH9012</td>
                                    <td>170</td>
                                    <td>2024-09-10</td>
                                    <td>Land</td>
                                    <td>TRACK987654</td>
                                    <td>Delivered</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS011</td>
                                    <td>Product K</td>
                                    <td>BATCH3456</td>
                                    <td>130</td>
                                    <td>2024-09-15</td>
                                    <td>Air</td>
                                    <td>TRACK567890</td>
                                    <td>Shipped</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS012</td>
                                    <td>Product L</td>
                                    <td>BATCH7890</td>
                                    <td>200</td>
                                    <td>2024-09-20</td>
                                    <td>Sea</td>
                                    <td>TRACK678901</td>
                                    <td>In Transit</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS013</td>
                                    <td>Product M</td>
                                    <td>BATCH2345</td>
                                    <td>160</td>
                                    <td>2024-09-25</td>
                                    <td>Land</td>
                                    <td>TRACK789012</td>
                                    <td>Delivered</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS014</td>
                                    <td>Product N</td>
                                    <td>BATCH3457</td>
                                    <td>140</td>
                                    <td>2024-10-01</td>
                                    <td>Air</td>
                                    <td>TRACK890123</td>
                                    <td>Shipped</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS015</td>
                                    <td>Product O</td>
                                    <td>BATCH4568</td>
                                    <td>180</td>
                                    <td>2024-10-05</td>
                                    <td>Sea</td>
                                    <td>TRACK901234</td>
                                    <td>In Transit</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS016</td>
                                    <td>Product P</td>
                                    <td>BATCH5679</td>
                                    <td>170</td>
                                    <td>2024-10-10</td>
                                    <td>Land</td>
                                    <td>TRACK123456</td>
                                    <td>Delivered</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS017</td>
                                    <td>Product Q</td>
                                    <td>BATCH6780</td>
                                    <td>190</td>
                                    <td>2024-10-15</td>
                                    <td>Air</td>
                                    <td>TRACK234567</td>
                                    <td>Shipped</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS018</td>
                                    <td>Product R</td>
                                    <td>BATCH7891</td>
                                    <td>210</td>
                                    <td>2024-10-20</td>
                                    <td>Sea</td>
                                    <td>TRACK345678</td>
                                    <td>In Transit</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS019</td>
                                    <td>Product S</td>
                                    <td>BATCH8902</td>
                                    <td>160</td>
                                    <td>2024-10-25</td>
                                    <td>Land</td>
                                    <td>TRACK456789</td>
                                    <td>Delivered</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS020</td>
                                    <td>Product T</td>
                                    <td>BATCH9013</td>
                                    <td>180</td>
                                    <td>2024-11-01</td>
                                    <td>Air</td>
                                    <td>TRACK567890</td>
                                    <td>Shipped</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS021</td>
                                    <td>Product U</td>
                                    <td>BATCH0124</td>
                                    <td>200</td>
                                    <td>2024-11-05</td>
                                    <td>Sea</td>
                                    <td>TRACK678901</td>
                                    <td>In Transit</td>
                                    <td>Attachment.png</td>
                                </tr>
                                <tr>
                                    <td>DS022</td>
                                    <td>Product V</td>
                                    <td>BATCH1235</td>
                                    <td>190</td>
                                    <td>2024-11-10</td>
                                    <td>Land</td>
                                    <td>TRACK789012</td>
                                    <td>Delivered</td>
                                    <td>Attachment.png</td>
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
                <form action="{{ route('admin.newexp.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <!-- Form fields -->
                        <div class="form-group">
                            <label>@lang('Despatch ID')</label>
                            <input type="text" name="despatch_id" class="form-control" required>
                        </div>
                        <!-- Additional form fields... -->

                        <div class="form-group">
                            <label>@lang('Product Name')</label>
                            <input type="text" name="actual_weight" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Batch Number')</label>
                            <input type="text" name="actual_weight" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Quantity')</label>
                            <input type="text" name="tolerance_range" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Dispatch Date')</label>
                            <input type="date" name="weighing_scale_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Transport Mode')</label>
                            <input type="text" name="weighing_location" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Tracking Number')</label>
                            <input type="text" name="environment_condition" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Despatch Status')</label>
                            <input type="text" name="environment_condition" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Attachment')</label><br>
                            <input type="file" name="attachment" class="form-control-file" required>
                        </div>
                    </div>

                    @can('admin.newexp.store')
                        <div class="modal-footer">
                            <button type="submit" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Despatch')">
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
