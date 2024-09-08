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
                                    <th>@lang('Receiving Order ID')</th>
                                    <th>@lang('Supplier Name')</th>
                                    <th>@lang('Product Code')</th>
                                    <th>@lang('Batch Number')</th>
                                    <th>@lang('Quantity Received')</th>
                                    <th>@lang('UOM')</th>
                                    <th>@lang('Manufacturing Date')</th>
                                    <th>@lang('Expiry Date')</th>
                                    <th>@lang('Storage Location')</th>
                                    <th>@lang('Location ID')</th>
                                    <th>@lang('Rack Id')</th>
                                    <th>@lang('Quality Check Status')</th>
                                    <th>@lang('Attachment')</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Supplier A</td>
                                    <td>PRD001</td>
                                    <td>Batch001</td>
                                    <td>100</td>
                                    <td>KG</td>
                                    <td>2023-01-01</td>
                                    <td>2025-12-31</td>
                                    <td>Warehouse 1, Aisle 3</td>
                                    <td>LOC001</td>
                                    <td>RACK001</td>
                                    <td>Passed</td>
                                    <td>attachment0.jpg</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Supplier B</td>
                                    <td>PRD002</td>
                                    <td>Batch002</td>
                                    <td>50</td>
                                    <td>KG</td>
                                    <td>2023-02-01</td>
                                    <td>2024-11-15</td>
                                    <td>Warehouse 2, Aisle 1</td>
                                    <td>LOC002</td>
                                    <td>RACK002</td>
                                    <td>Failed</td>
                                    <td>attachment1.jpg</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Supplier C</td>
                                    <td>PRD003</td>
                                    <td>Batch003</td>
                                    <td>75</td>
                                    <td>KG</td>
                                    <td>2023-03-10</td>
                                    <td>2023-09-10</td>
                                    <td>Warehouse 3, Aisle 5</td>
                                    <td>LOC003</td>
                                    <td>RACK003</td>
                                    <td>Pending</td>
                                    <td>attachment2.jpg</td>
                                </tr>
                            <tbody>
                                <tr>
                                    <td>4</td>
                                    <td>Supplier D</td>
                                    <td>PRD004</td>
                                    <td>Batch004</td>
                                    <td>200</td>
                                    <td>KG</td>
                                    <td>2023-04-15</td>
                                    <td>2024-06-30</td>
                                    <td>Warehouse 1, Aisle 4</td>
                                    <td>LOC004</td>
                                    <td>RACK004</td>
                                    <td>Passed</td>
                                    <td>attachment3.jpg</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Supplier E</td>
                                    <td>PRD005</td>
                                    <td>Batch005</td>
                                    <td>150</td>
                                    <td>KG</td>
                                    <td>2023-05-20</td>
                                    <td>2025-02-28</td>
                                    <td>Warehouse 2, Aisle 2</td>
                                    <td>LOC005</td>
                                    <td>RACK005</td>
                                    <td>Passed</td>
                                    <td>attachment4.jpg</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Supplier F</td>
                                    <td>PRD006</td>
                                    <td>Batch006</td>
                                    <td>120</td>
                                    <td>KG</td>
                                    <td>2023-06-10</td>
                                    <td>2024-03-15</td>
                                    <td>Warehouse 3, Aisle 2</td>
                                    <td>LOC006</td>
                                    <td>RACK006</td>
                                    <td>Failed</td>
                                    <td>attachment5.jpg</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Supplier G</td>
                                    <td>PRD007</td>
                                    <td>Batch007</td>
                                    <td>90</td>
                                    <td>KG</td>
                                    <td>2023-07-25</td>
                                    <td>2024-08-31</td>
                                    <td>Warehouse 1, Aisle 6</td>
                                    <td>LOC007</td>
                                    <td>RACK007</td>
                                    <td>Pending</td>
                                    <td>attachment6.jpg</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Supplier H</td>
                                    <td>PRD008</td>
                                    <td>Batch008</td>
                                    <td>250</td>
                                    <td>KG</td>
                                    <td>2023-08-30</td>
                                    <td>2025-01-10</td>
                                    <td>Warehouse 2, Aisle 3</td>
                                    <td>LOC008</td>
                                    <td>RACK008</td>
                                    <td>Passed</td>
                                    <td>attachment7.png</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Supplier I</td>
                                    <td>PRD009</td>
                                    <td>Batch009</td>
                                    <td>80</td>
                                    <td>KG</td>
                                    <td>2023-09-15</td>
                                    <td>2024-10-05</td>
                                    <td>Warehouse 3, Aisle 4</td>
                                    <td>LOC009</td>
                                    <td>RACK009</td>
                                    <td>Failed</td>
                                    <td>attachment7.png</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Supplier J</td>
                                    <td>PRD010</td>
                                    <td>Batch010</td>
                                    <td>110</td>
                                    <td>KG</td>
                                    <td>2023-10-05</td>
                                    <td>2024-12-20</td>
                                    <td>Warehouse 1, Aisle 7</td>
                                    <td>LOC010</td>
                                    <td>RACK010</td>
                                    <td>Pending</td>
                                    <td>attachment8.png</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Supplier K</td>
                                    <td>PRD011</td>
                                    <td>Batch011</td>
                                    <td>130</td>
                                    <td>KG</td>
                                    <td>2023-11-01</td>
                                    <td>2025-03-25</td>
                                    <td>Warehouse 2, Aisle 4</td>
                                    <td>LOC011</td>
                                    <td>RACK011</td>
                                    <td>Passed</td>
                                    <td>attachment9.png</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Supplier L</td>
                                    <td>PRD012</td>
                                    <td>Batch012</td>
                                    <td>70</td>
                                    <td>KG</td>
                                    <td>2023-12-15</td>
                                    <td>2024-11-30</td>
                                    <td>Warehouse 3, Aisle 6</td>
                                    <td>LOC012</td>
                                    <td>RACK012</td>
                                    <td>Passed</td>
                                    <td>attachment10.png</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Supplier M</td>
                                    <td>PRD013</td>
                                    <td>Batch013</td>
                                    <td>140</td>
                                    <td>KG</td>
                                    <td>2024-01-20</td>
                                    <td>2025-04-15</td>
                                    <td>Warehouse 1, Aisle 8</td>
                                    <td>LOC013</td>
                                    <td>RACK013</td>
                                    <td>Failed</td>
                                    <td>attachment11.png</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Supplier N</td>
                                    <td>PRD014</td>
                                    <td>Batch014</td>
                                    <td>180</td>
                                    <td>KG</td>
                                    <td>2024-02-25</td>
                                    <td>2025-06-30</td>
                                    <td>Warehouse 2, Aisle 5</td>
                                    <td>LOC014</td>
                                    <td>RACK014</td>
                                    <td>Pending</td>
                                    <td>attachment12.png</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Supplier O</td>
                                    <td>PRD015</td>
                                    <td>Batch015</td>
                                    <td>160</td>
                                    <td>KG</td>
                                    <td>2024-03-10</td>
                                    <td>2025-07-20</td>
                                    <td>Warehouse 3, Aisle 7</td>
                                    <td>LOC015</td>
                                    <td>RACK015</td>
                                    <td>Passed</td>
                                    <td>attachment13.png</td>
                                </tr>
                            </tbody>

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
                            <label>@lang('Receiving Order ID')</label>
                            <input type="text" name="recieving_order" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Supplier Name')</label>
                            <input type="text" name="suppliew_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Product Code')</label>
                            <input type="text" name="product_code_recieving" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Batch Number')</label>
                            <input type="text" name="batch_no_recieving" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Quantity Received')</label>
                            <input type="text" name="quantity_review" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('UOM')</label>
                            <input type="text" name="uom" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Manudacturing Date')</label>
                            <input type="date" name="manufacturing_recieving" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Expiry Date')</label>
                            <input type="date" name="expiry_recieving" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Storage Location')</label>
                            <input type="text" name="storage_location_recieving" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label>@lang('Location ID')</label>
                            <input type="date" name="location_id_recieving" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Rack Id')</label>
                            <input type="text" name="rack_id" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Quality Check Status')</label>
                            <input type="text" name="quality_check_status_rec" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label>@lang('File Attachment')</label>
                            <input type="file" name="file_attachment" class="form-control" required>
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
