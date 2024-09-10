@extends('admin.layouts.app')
@section('panel')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light">
                            <thead>
                                <tr>
                                    <th>@lang('S.N.')</th>
                                    <th>@lang('Production Order ID')</th>
                                    <th>@lang('Product Name')</th>
                                    <th>@lang('Generic Name')</th>
                                    <th>@lang('Product Code')</th>
                                    <th>@lang('Batch Number')</th>
                                    <th>@lang('Production Quantity')</th>
                                    <th>@lang('Production Date')</th>
                                    <th>@lang('Expected Completion Date')</th>
                                    <th>@lang('Vendor Status')</th>
                                    <th>@lang('Production Line')</th>
                                    <th>@lang('Production Suite')</th>
                                    <th>@lang('Raw Materials List')</th>
                                    <th>@lang('Action')</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse($newProd_planning as $new)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $new->production_order_id }}</td>
                                        <td>{{ $new->product_name }}</td>
                                        <td>{{ $new->generic_name }}</td>
                                        <td>{{ $new->product_code }}</td>
                                        <td>{{ $new->batch_no }}</td>
                                        <td>{{ $new->production_quantity }}</td>
                                        <td>{{ $new->production_date }}</td>
                                        <td>{{ $new->expected_com_date }}</td>
                                        <td>{{ $new->vendor_status }}</td>
                                        <td>{{ $new->production_line }}</td>
                                        <td>{{ $new->production_suite }}</td>
                                        <td>{{ $new->raw_materials_list }}</td>

                                        <td>
                                            <div class="button--group">

                                                <button type="button" class="btn btn-sm btn-outline-primary cuModalBtn"
                                                    data-resource="{{ $new }}"
                                                    data-modal_title="@lang('Edit Expiry Material')" data-has_status="1">
                                                    <i class="glyphicon glyphicon-pencil"></i>@lang('Edit')
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-danger deleteBtn"
                                                    data-id="{{ $new->id }}">
                                                    <i class="glyphicon glyphicon-trash"></i> @lang('Delete')
                                                </button>
                                                {{-- <button type="button" class="btn btn-sm btn-outline-danger deleteBtn"
                                                    data-id="{{ $new->id }}">
                                                    <i class="glyphicon glyphicon-trash"></i> @lang('Delete')
                                                </button> --}}
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
                        <!-- Confirmation delete Modal -->
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
                                        url: '{{ route('admin.production_planning.delete', ['id' => '__id__']) }}'
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

    {{-- <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">@lang('Confirm Delete')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @lang('Are you sure you want to delete this record?')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Cancel')</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">@lang('Delete')</button>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <script>
        let deleteId = null;

        $(document).on('click', '.deleteBtn', function() {
            deleteId = $(this).data('id'); // Store the ID of the row to be deleted
            $('#deleteModal').modal('show'); // Show the confirmation modal
        });

        $('#confirmDelete').click(function() {
            if (deleteId) {
                $.ajax({
                    url: '{{ route('admin.production_planning.delete', ':id') }}'.replace(':id',
                    deleteId), // Adjust the URL based on your route setup
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                        _method: DELETE // Laravel CSRF token for security
                    },
                    success: function(response) {
                        if (response.success) {
                            location.reload(); // Reload the page or update the table dynamically
                        } else {
                            alert('Failed to delete the record');
                        }
                    }
                });
            }
            $('#deleteModal').modal('hide'); // Hide the confirmation modal
        });
    </script> --}}
    {{-- <script>
        let deleteId = null;
    
        $(document).on('click', '.deleteBtn', function () {
            deleteId = $(this).data('id');  // Store the ID of the row to be deleted
            $('#deleteModal').modal('show'); // Show the confirmation modal
        });
    
        $('#confirmDelete').click(function () {
            if (deleteId) {
                $.ajax({
                    url: '{{ route("admin.production_planning.delete", ":id") }}'.replace(':id', deleteId),   // Adjust the URL based on your route setup
                    type: 'POST',  // POST request as the form is using a spoofed DELETE method
                    data: {
                        _token: '{{ csrf_token() }}',  // Laravel CSRF token for security
                        _method: 'DELETE'  // Spoof the DELETE request
                    },
                    success: function (response) {
                        if (response.success) {
                            location.reload();  // Reload the page or update the table dynamically
                        } else {
                            alert('Failed to delete the record');
                        }
                    }
                });
            }
            $('#deleteModal').modal('hide');  // Hide the confirmation modal
        });
    </script> --}}



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
                    <h5 class="modal-title"><span class="type"></span> <span>@lang('Add New Production Planning')</span></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form action="{{ route('admin.production_planning.storeProduction_planningg') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>@lang('Production Order ID')</label>
                            <input type="text" name="production_order_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Product Name')</label>
                            <input type="text" name="product_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>@lang('Generic Name')</label>
                            <input type="text" name="generic_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>@lang('Product Code')</label>
                            <input type="text" name="product_code" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>@lang('Batch Number')</label>
                            <input type="text" name="batch_no" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>@lang('Production Quantity')</label>
                            <input type="text" name="production_quality" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>@lang('Production Date')</label>
                            <input type="date" name="production_date" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>@lang('Expected Completion Date')</label>
                            <input type="date" name="expected_com_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>@lang('Vendor Status')</label>
                            <input type="text" name="vendor_status" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>@lang('Production Line')</label>
                            <input type="text" name="production_line" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>@lang('Production Suite')</label>
                            <input type="text" name="production_suite" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>@lang('Raw Materials List')</label>
                            <input type="text" name="raw_materials_list" class="form-control">
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Product Planning')">
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
