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
                                    <th>@lang('Category')</th>
                                    <th>@lang('Expiry Date')</th>
                                    <th>@lang('Quantity')</th>
                                    <th>@lang('Status')</th>
                                    <th>@lang('UOM')</th>
                                    <th>@lang('Vendor')</th>
                                    <th>@lang('Vendor Site')</th>
                                    <th>@lang('Manufacturer')</th>
                                    <th>@lang('Manufacturer Site')</th>
                                    <th>@lang('Vendor Status')</th>
                                    <th>@lang('Last Audit Date')</th>
                                    <th>@lang('Quality Issues Reported')</th>
                                    <th>@lang('Supporting Documents')</th>
                                    <th>@lang('Deviation ID')</th>
                                    <th>@lang('Attachment File')</th>
                                     <th>@lang('Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($newavl as $new)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $new->material }}</td>
                                    <td>{{ $new->catefory }}</td>
                                    <td>{{ $new->expiry_date }}</td>
                                    <td>{{ $new->quantity }}</td>
                                    <td>{{ $new->statusavl}}</td>
                                    <td>{{ $new->uom }}</td>
                                    <td>{{ $new->vendor }}</td>
                                    <td>{{ $new->vendor_site }}</td>
                                    <td>{{ $new->manufacturer }}</td>
                                    <td>{{ $new->manufacturer_site }}</td>
                                    <td>{{ $new->vendor_status }}</td>
                                    {{-- <td>{{ $new->product_code }}</td> --}}
                                    <td>{{ $new->last_audit_date }}</td>
                                    <td>{{ $new->quality_issues_reported }}</td>
                                    <td>{{ $new->supporting_documents }}</td>
                                    <td>{{ $new->deviation_id }}</td>
                                    <td>{{ $new->attachment }}</td>
                                   <td>
                                        <div class="button--group">

                                            <button type="button" class="btn btn-sm btn-outline-primary cuModalBtn"
                                                data-resource="{{ $new }}" data-modal_title="@lang('Edit Expiry Material')"
                                                data-has_status="1">
                                                <i class="glyphicon glyphicon-pencil"></i>@lang('Edit')
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-danger deleteBtn"
                                            data-id="{{ $new->id }}">
                                            <i class="glyphicon glyphicon-trash"></i> @lang('Delete')
                                           </button>

                                            {{-- @can('admin.avl.delete')
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger @if ($new->products_count) disabled @endif confirmationBtn"
                                                    data-question="@lang('Are you sure to delete this category?')"
                                                    data-action="{{ route('admin.avl.delete', $new->id) }}">
                                                    <i class="la la-trash"></i>@lang('Delete')
                                                </button>
                                            @endcan --}}
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                         <!-- Confirmation Modal -->
                         <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                         aria-labelledby="deleteModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="deleteModalLabel">@lang('Delete Confirmation')</h5>
                                     <button type="button" class="close" data-dismiss="modal"
                                         aria-label="@lang('Close')">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     @lang('Are you sure you want to delete this record?')
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary"
                                         data-dismiss="modal">@lang('Cancel')</button>
                                     <button type="button" class="btn btn-danger"
                                         id="confirmDelete">@lang('Delete')</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <script>
                         $(document).ready(function() {
                             let deleteId; // Variable to store the ID of the record to delete

                             // When the delete button is clicked, open the modal
                             $('.deleteBtn').on('click', function() {
                                 deleteId = $(this).data('id'); // Get the ID of the record to delete
                                 $('#deleteModal').modal('show'); // Show the delete confirmation modal
                             });

                             // When the delete is confirmed
                             $('#confirmDelete').on('click', function() {
                                 $.ajax({
                                     url: '{{ route('admin.avl.delete', ['id' => '__id__']) }}'
                                         .replace('__id__', deleteId), // Update with the dynamic ID
                                     type: 'POST',
                                     data: {
                                         _token: '{{ csrf_token() }}',
                                         _method: 'POST'
                                     },
                                     success: function(response) {
                                         if (response.success) {
                                             // Remove the row from the table
                                             $('button[data-id="' + deleteId + '"]').closest('tr').remove();
                                             $('#deleteModal').modal('hide');
                                         } else {
                                             alert('@lang('Error deleting record.')');
                                         }
                                     },
                                     error: function() {
                                         alert('@lang('Error deleting record.')');
                                     }
                                 });
                             });
                         });
                     </script>
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
                <form action="{{ route('admin.avl.storeAvl') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>@lang('Material')</label>
                            <input type="text" name="material" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Category')</label>
                            <input type="text" name="catefory" class="form-control" >
                        </div>  
                        <div class="form-group">
                            <label>@lang('Expiry Date')</label>
                            <input type="date" name="expiry_date" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>@lang('Quantity ')</label>
                            <input type="text" name="quantity" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>@lang('Status')</label>
                            <input type="text" name="status_avl" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>@lang('UOM')</label>
                            <input type="text" name="uom" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>@lang('Vendor')</label>
                            <input type="text" name="vendor" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>@lang('Vendor Site')</label>
                            <input type="text" name="vendor_site" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>@lang('Manufacturer')</label>
                            <input type="text" name="manufacturer" class="form-control" >
                        </div>


                        <div class="form-group">
                            <label>@lang('Manufacturer Site')</label>
                            <input type="text" name="manufacturer_site" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>@lang('Vendor Status')</label>
                            <input type="text" name="vendor_status" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>@lang('Last Audit Date')</label>
                            <input type="date" name="last_audit_date" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>@lang('Quality Issues Reported')</label>
                            <input type="text" name="quality_issues_reported" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label>@lang('Supporting Documents')</label>
                            <input type="text" name="supporting_documents" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>@lang('Deviation ID')</label>
                            <input type="text" name="deviation_id" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>@lang('Attachment File')</label>
                            <input type="file" name="attachment" class="form-control" >
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

    // function exportToCSV() {
    //     const table = document.querySelector('table');
    //     const rows = Array.from(table.querySelectorAll('tr')).map(row =>
    //         Array.from(row.querySelectorAll('th, td')).map(cell => cell.textContent).join(',')
    //     );

    //     const csvContent = "data:text/csv;charset=utf-8," + rows.join("\n");
    //     const encodedUri = encodeURI(csvContent);
    //     const link = document.createElement("a");
    //     link.setAttribute("href", encodedUri);
    //     link.setAttribute("download", "table_data.csv");
    //     document.body.appendChild(link);
    //     link.click();
    // }
    function exportToCSV() {
    const table = document.querySelector('table');
    const rows = Array.from(table.querySelectorAll('tr')).map(row => {
        // For header row, get all th elements except the last one (Action)
        if (row.querySelectorAll('th').length > 0) {
            return Array.from(row.querySelectorAll('th')).slice(0, -1).map(cell => cell.textContent).join(',');
        } else {
            // For data row, get all td elements except the last one (Action)
            return Array.from(row.querySelectorAll('td')).slice(0, -1).map(cell => cell.textContent).join(',');
        }
    });

    const csvContent = "data:text/csv;charset=utf-8," + rows.join("\n");
    const encodedUri = encodeURI(csvContent);
    const link = document.createElement("a");
    link.setAttribute("href", encodedUri);
    link.setAttribute("download", "table_data.csv");
    document.body.appendChild(link);
    link.click();
}

</script>
