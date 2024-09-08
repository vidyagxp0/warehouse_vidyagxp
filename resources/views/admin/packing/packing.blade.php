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
                                    <th>@lang('Packing Date')</th>
                                    <th>@lang('Packaging Type')</th>
                                    <th>@lang('Packing Instructions')</th>
                                    <th>@lang('Shipping Label')</th>
                                    <th>@lang('Attachment')</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($newexpMaterial as $new) --}}
                                <tr>
                                    <td>ORD12345</td>
                                    <td>PRD001</td>
                                    <td>BATCH6789</td>
                                    <td>2024-09-07</td>
                                    <td>Box</td>
                                    <td>Fragile - Handle with Care</td>
                                    <td>Label#12345</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12346</td>
                                    <td>PRD002</td>
                                    <td>BATCH6790</td>
                                    <td>2024-09-08</td>
                                    <td>Bag</td>
                                    <td>Keep Dry</td>
                                    <td>Label#12346</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12347</td>
                                    <td>PRD003</td>
                                    <td>BATCH6791</td>
                                    <td>2024-09-09</td>
                                    <td>Box</td>
                                    <td>Handle with Care</td>
                                    <td>Label#12347</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12348</td>
                                    <td>PRD004</td>
                                    <td>BATCH6792</td>
                                    <td>2024-09-10</td>
                                    <td>Box</td>
                                    <td>Keep Upright</td>
                                    <td>Label#12348</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12349</td>
                                    <td>PRD005</td>
                                    <td>BATCH6793</td>
                                    <td>2024-09-11</td>
                                    <td>Bag</td>
                                    <td>Fragile - Handle with Care</td>
                                    <td>Label#12349</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12350</td>
                                    <td>PRD006</td>
                                    <td>BATCH6794</td>
                                    <td>2024-09-12</td>
                                    <td>Box</td>
                                    <td>Keep Dry</td>
                                    <td>Label#12350</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12351</td>
                                    <td>PRD007</td>
                                    <td>BATCH6795</td>
                                    <td>2024-09-13</td>
                                    <td>Box</td>
                                    <td>Fragile - Handle with Care</td>
                                    <td>Label#12351</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12352</td>
                                    <td>PRD008</td>
                                    <td>BATCH6796</td>
                                    <td>2024-09-14</td>
                                    <td>Bag</td>
                                    <td>Keep Upright</td>
                                    <td>Label#12352</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12353</td>
                                    <td>PRD009</td>
                                    <td>BATCH6797</td>
                                    <td>2024-09-15</td>
                                    <td>Box</td>
                                    <td>Handle with Care</td>
                                    <td>Label#12353</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12354</td>
                                    <td>PRD010</td>
                                    <td>BATCH6798</td>
                                    <td>2024-09-16</td>
                                    <td>Bag</td>
                                    <td>Fragile - Keep Dry</td>
                                    <td>Label#12354</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12355</td>
                                    <td>PRD011</td>
                                    <td>BATCH6799</td>
                                    <td>2024-09-17</td>
                                    <td>Box</td>
                                    <td>Keep Upright</td>
                                    <td>Label#12355</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12356</td>
                                    <td>PRD012</td>
                                    <td>BATCH6800</td>
                                    <td>2024-09-18</td>
                                    <td>Bag</td>
                                    <td>Fragile - Handle with Care</td>
                                    <td>Label#12356</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12357</td>
                                    <td>PRD013</td>
                                    <td>BATCH6801</td>
                                    <td>2024-09-19</td>
                                    <td>Box</td>
                                    <td>Keep Dry</td>
                                    <td>Label#12357</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12358</td>
                                    <td>PRD014</td>
                                    <td>BATCH6802</td>
                                    <td>2024-09-20</td>
                                    <td>Box</td>
                                    <td>Handle with Care</td>
                                    <td>Label#12358</td>
                                    <td>file.png</td>
                                </tr>
                                <tr>
                                    <td>ORD12359</td>
                                    <td>PRD015</td>
                                    <td>BATCH6803</td>
                                    <td>2024-09-21</td>
                                    <td>Bag</td>
                                    <td>Fragile - Keep Dry</td>
                                    <td>Label#12359</td>
                                    <td>file.png</td>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Cancel')</button>
                    <button type="button" class="btn btn-primary" onclick="importCSV()">@lang('Import')</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Message Modal -->
    <div class="modal fade" id="importSuccessModal" tabindex="-1" role="dialog" aria-labelledby="importSuccessModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importSuccessModalLabel">@lang('Success')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @lang('CSV file imported successfully!')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">@lang('Close')</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('breadcrumb-plugins')
    <x-search-form />
    @can('admin.newexp.store')
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Packing')">
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
    // Function to import CSV data
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

            let tableRows = '';
            rows.forEach(row => {
                tableRows += `<tr>${row.map(cell => `<td>${cell}</td>`).join('')}</tr>`;
            });

            $('table tbody').html(tableRows);

            // Close import modal and show success message modal
            $('#csvImportModal').modal('hide');
            $('#importSuccessModal').modal('show');

            // Redirect after showing success message
            setTimeout(function() {
                window.location.href = '/admin/avl/despatch';
            }, 2000); // Adjust the delay (in milliseconds) if needed
        };
        reader.readAsText(file);
    }

    // Function to export table data to CSV
    function exportToCSV() {
        const rows = Array.from(document.querySelectorAll('table tr'));
        const csvContent = rows.map(row => {
            const cells = Array.from(row.querySelectorAll('td, th'))
                .map(cell => `"${cell.textContent.replace(/"/g, '""')}"`)
                .join(',');
            return cells;
        }).join('\n');

        const blob = new Blob([csvContent], {
            type: 'text/csv;charset=utf-8;'
        });
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.setAttribute('href', url);
        link.setAttribute('download', 'table_data.csv');
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
</script>
