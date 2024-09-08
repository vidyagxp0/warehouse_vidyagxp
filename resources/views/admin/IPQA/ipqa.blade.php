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
                                    <th>@lang('Material Code')</th>
                                    <th>@lang('Material Description')</th>
                                    <th>@lang('Batch/Lot Number')</th>
                                    <th>@lang('Quantity')</th>
                                    <th>@lang('Storage Location')</th>
                                    <th>@lang('Manufacturing Date')</th>
                                    <th>@lang('Expiry Date')</th>
                                    <th>@lang('File Attachment')</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($newexpMaterial as $new) --}}
                                <tr>
                                    <td>1</td>
                                    <td>API12345</td>
                                    <td>Active Pharmaceutical Ingredient (API) - Paracetamol</td>
                                    <td>BATCH20230904</td>
                                    <td>5000</td>
                                    <td>Warehouse Zone 3, Shelf B12</td>
                                    <td>2023-08-10</td>
                                    <td>2025-08-10</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2023-08-15</td>
                                    <td>2026-09-16</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2023-09-15</td>
                                    <td>2026-10-25</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2024-11-15</td>
                                    <td>2026-08-28</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2024-05-14</td>
                                    <td>2025-07-15</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2024-09-27</td>
                                    <td>2025-11-15</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2024-03-01</td>
                                    <td>2026-07-15</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2024-05-10</td>
                                    <td>2026-07-15</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2024-08-05</td>
                                    <td>2026-09-15</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2023-07-01</td>
                                    <td>2026-08-02</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2023-09-14</td>
                                    <td>2026-11-15</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2023-07-03</td>
                                    <td>2026-09-15</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2023-07-15</td>
                                    <td>2026-07-15</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2023-07-15</td>
                                    <td>2026-07-16</td>
                                    <td>attachment.png</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>EXC00234</td>
                                    <td>Excipient - Microcrystalline Cellulose</td>
                                    <td>EXC-20230820</td>
                                    <td>3000</td>
                                    <td>Warehouse Zone 1, Rack D4</td>
                                    <td>2023-07-15</td>
                                    <td>2026-07-19</td>
                                    <td>attachment.png</td>
                                </tr>
                                <td>
                                    {{-- @if (\Carbon\Carbon::parse($new->expiry)->isPast() || \Carbon\Carbon::parse($new->expiry)->isToday())
                                            <span style="color: red; font-size: 20px;">●</span>
                                            @else

                                                <span style="color: green; font-size: 20px;">●</span>
                                            @endif --}}
                                </td>

                                <td>
                                    {{-- <div class="button--group">

                                                {{-- <button type="button" class="btn btn-sm btn-outline-primary cuModalBtn"
                                                    data-resource="" data-modal_title="@lang('Edit Expiry Material')"
                                                    data-has_status="1">
                                                    <i class="la la-pencil"></i>@lang('Edit')
                                                </button> --}}

                                    {{-- @can('admin.newexp.delete')
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-danger @if ($new->products_count) disabled @endif confirmationBtn"
                                                        data-question="@lang('Are you sure to delete this category?')"
                                                        data-action="{{ route('admin.newexp.delete', $new->id) }}">
                                                        <i class="la la-trash"></i>@lang('Delete')
                                                    </button>
                                                @endcan
                                            </div> --}}
                                </td>
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
                    <h5 class="modal-title"><span class="type"></span> <span>@lang('Add New Expirey')</span></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form action="{{ route('admin.newexp.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>@lang('Material Code')</label>
                            <input type="text" name="production_order_iD" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Material Description')</label>
                            <input type="text" name="product_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Batch/Lot Number')</label>
                            <input type="text" name="generic_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Quantity')</label>
                            <input type="text" name="product_code" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Storage Location')</label>
                            <input type="text" name="batch_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Manufacturing Date')</label>
                            <input type="text" name="production_quality" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Expiry Date')</label>
                            <input type="date" name="production_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('File Attachment')</label>
                            <input type="file" name="attachment" class="form-control" required>
                        </div>


                        {{-- <div class="form-group">
                <label>@lang('Expected Completion Date')</label>
                <input type="date" name="expected_date" class="form-control" required>
            </div>
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New IPQA')">
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
