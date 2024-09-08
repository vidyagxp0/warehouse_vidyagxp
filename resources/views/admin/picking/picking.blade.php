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
                                    <th>@lang('Order ID')</th>
                                    <th>@lang('Product Code')</th>
                                    <th>@lang('Batch Number')</th>
                                    <th>@lang('Quantity to Pick')</th>
                                    <th>@lang('Pick Location')</th>
                                    <th>@lang('Picker ID')</th>
                                    <th>@lang('Picking Status')</th>
                                    <th>@lang('File Attachment')</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($newexpMaterial as $new) --}}
                                <tr>
                                    <td>ORD12345</td>
                                    <td>PRD001</td>
                                    <td>BATCH6789</td>
                                    <td>100</td>
                                    <td>Aisle 5, Shelf 3</td>
                                    <td>PICK001</td>
                                    <td>In Progress</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD67890</td>
                                    <td>PRD002</td>
                                    <td>BATCH5432</td>
                                    <td>50</td>
                                    <td>Aisle 2, Shelf 1</td>
                                    <td>PICK002</td>
                                    <td>Completed</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34567</td>
                                    <td>PRD003</td>
                                    <td>BATCH1122</td>
                                    <td>75</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD37890</td>
                                    <td>PRD004</td>
                                    <td>BATCH1122</td>
                                    <td>80</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12345</td>
                                    <td>PRD005</td>
                                    <td>BATCH1122</td>
                                    <td>80</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34567</td>
                                    <td>PRD006</td>
                                    <td>BATCH1122</td>
                                    <td>85</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34567</td>
                                    <td>PRD007</td>
                                    <td>BATCH1122</td>
                                    <td>69</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34562</td>
                                    <td>PRD008</td>
                                    <td>BATCH1122</td>
                                    <td>69</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34562</td>
                                    <td>PRD009</td>
                                    <td>BATCH1122</td>
                                    <td>69</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34562</td>
                                    <td>PRD010</td>
                                    <td>BATCH1122</td>
                                    <td>69</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34562</td>
                                    <td>PRD011</td>
                                    <td>BATCH1122</td>
                                    <td>69</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34562</td>
                                    <td>PRD011</td>
                                    <td>BATCH1122</td>
                                    <td>69</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34562</td>
                                    <td>PRD012</td>
                                    <td>BATCH1122</td>
                                    <td>69</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34562</td>
                                    <td>PRD013</td>
                                    <td>BATCH1122</td>
                                    <td>69</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34562</td>
                                    <td>PRD014</td>
                                    <td>BATCH1122</td>
                                    <td>69</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>ORD34562</td>
                                    <td>PRD015</td>
                                    <td>BATCH1122</td>
                                    <td>69</td>
                                    <td>Aisle 7, Shelf 4</td>
                                    <td>PICK003</td>
                                    <td>Pending</td>
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
                            <label>@lang('Order ID')</label>
                            <input type="text" name="order_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Product Code')</label>
                            <input type="text" name="production_code_picking" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Batch Number')</label>
                            <input type="text" name="batch_number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Quantity to Pick')</label>
                            <input type="text" name="quantity_pick" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Pick Location')</label>
                            <input type="text" name="pick_location" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Picker ID')</label>
                            <input type="text" name="pick_id" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Picking Status')</label>
                            <input type="text" name="picking_status" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('File Attachment')</label>
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Picking')">
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
