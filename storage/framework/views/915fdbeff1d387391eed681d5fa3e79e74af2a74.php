
<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light">
                            <thead>
                                <tr>
                                    <th><?php echo app('translator')->get('S.N.'); ?></th>
                                    <th><?php echo app('translator')->get('Production Order ID'); ?></th>
                                    <th><?php echo app('translator')->get('Product Name'); ?></th>
                                    <th><?php echo app('translator')->get('Generic Name'); ?></th>
                                    <th><?php echo app('translator')->get('Product Code'); ?></th>
                                    <th><?php echo app('translator')->get('Batch Number'); ?></th>
                                    <th><?php echo app('translator')->get('Production Quantity'); ?></th>
                                    <th><?php echo app('translator')->get('Production Date'); ?></th>
                                    <th><?php echo app('translator')->get('Expected Completion Date'); ?></th>
                                    <th><?php echo app('translator')->get('Vendor Status'); ?></th>
                                    <th><?php echo app('translator')->get('Production Line'); ?></th>
                                    <th><?php echo app('translator')->get('Production Suite'); ?></th>

                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>1</td>
                                    <td>PO12345</td>
                                    <td>Amoxicillin Capsules</td>
                                    <td>Amoxicillin</td>
                                    <td>PRD001</td>
                                    <td>BATCH20230901</td>
                                    <td>50,000</td>
                                    <td>2023-09-01</td>
                                    <td>2023-09-15</td>
                                    <td>Approved</td>
                                    <td>Line 1</td>
                                    <td>Suite A</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>PO12346</td>
                                    <td>Ibuprofen Tablets</td>
                                    <td>Ibuprofen</td>
                                    <td>PRD002</td>
                                    <td>BATCH20230902</td>
                                    <td>100,000</td>
                                    <td>2023-09-02</td>
                                    <td>2023-09-17</td>
                                    <td>Approved</td>
                                    <td>Line 2</td>
                                    <td>Suite B</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>PO12347</td>
                                    <td>Paracetamol Syrup</td>
                                    <td>Paracetamol</td>
                                    <td>PRD003</td>
                                    <td>BATCH20230903</td>
                                    <td>75,000</td>
                                    <td>2023-09-03</td>
                                    <td>2023-09-18</td>
                                    <td>Approved</td>
                                    <td>Line 1</td>
                                    <td>Suite C</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>PO12348</td>
                                    <td>Metformin Tablets</td>
                                    <td>Metformin</td>
                                    <td>PRD004</td>
                                    <td>BATCH20230904</td>
                                    <td>120,000</td>
                                    <td>2023-09-04</td>
                                    <td>2023-09-20</td>
                                    <td>Approved</td>
                                    <td>Line 3</td>
                                    <td>Suite D</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>PO12349</td>
                                    <td>Cetirizine Tablets</td>
                                    <td>Cetirizine</td>
                                    <td>PRD005</td>
                                    <td>BATCH20230905</td>
                                    <td>80,000</td>
                                    <td>2023-09-05</td>
                                    <td>2023-09-21</td>
                                    <td>Approved</td>
                                    <td>Line 2</td>
                                    <td>Suite B</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>PO12350</td>
                                    <td>Losartan Tablets</td>
                                    <td>Losartan</td>
                                    <td>PRD006</td>
                                    <td>BATCH20230906</td>
                                    <td>90,000</td>
                                    <td>2023-09-06</td>
                                    <td>2023-09-22</td>
                                    <td>Approved</td>
                                    <td>Line 4</td>
                                    <td>Suite A</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>PO12351</td>
                                    <td>Vitamin D3 Drops</td>
                                    <td>Cholecalciferol</td>
                                    <td>PRD007</td>
                                    <td>BATCH20230907</td>
                                    <td>55,000</td>
                                    <td>2023-09-07</td>
                                    <td>2023-09-23</td>
                                    <td>Approved</td>
                                    <td>Line 3</td>
                                    <td>Suite E</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>PO12352</td>
                                    <td>Clopidogrel Tablets</td>
                                    <td>Clopidogrel</td>
                                    <td>PRD008</td>
                                    <td>BATCH20230908</td>
                                    <td>110,000</td>
                                    <td>2023-09-08</td>
                                    <td>2023-09-24</td>
                                    <td>Approved</td>
                                    <td>Line 1</td>
                                    <td>Suite F</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>PO12353</td>
                                    <td>Ciprofloxacin Tablets</td>
                                    <td>Ciprofloxacin</td>
                                    <td>PRD009</td>
                                    <td>BATCH20230909</td>
                                    <td>95,000</td>
                                    <td>2023-09-09</td>
                                    <td>2023-09-25</td>
                                    <td>Approved</td>
                                    <td>Line 5</td>
                                    <td>Suite G</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>PO12354</td>
                                    <td>Simvastatin Tablets</td>
                                    <td>Simvastatin</td>
                                    <td>PRD010</td>
                                    <td>BATCH20230910</td>
                                    <td>130,000</td>
                                    <td>2023-09-10</td>
                                    <td>2023-09-26</td>
                                    <td>Approved</td>
                                    <td>Line 2</td>
                                    <td>Suite A</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>PO12355</td>
                                    <td>Omeprazole Capsules</td>
                                    <td>Omeprazole</td>
                                    <td>PRD011</td>
                                    <td>BATCH20230911</td>
                                    <td>70,000</td>
                                    <td>2023-09-11</td>
                                    <td>2023-09-27</td>
                                    <td>Approved</td>
                                    <td>Line 1</td>
                                    <td>Suite D</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>PO12356</td>
                                    <td>Atorvastatin Tablets</td>
                                    <td>Atorvastatin</td>
                                    <td>PRD012</td>
                                    <td>BATCH20230912</td>
                                    <td>140,000</td>
                                    <td>2023-09-12</td>
                                    <td>2023-09-28</td>
                                    <td>Approved</td>
                                    <td>Line 4</td>
                                    <td>Suite E</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>PO12357</td>
                                    <td>Levothyroxine Tablets</td>
                                    <td>Levothyroxine</td>
                                    <td>PRD013</td>
                                    <td>BATCH20230913</td>
                                    <td>160,000</td>
                                    <td>2023-09-13</td>
                                    <td>2023-09-29</td>
                                    <td>Approved</td>
                                    <td>Line 3</td>
                                    <td>Suite B</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>PO12358</td>
                                    <td>Glimepiride Tablets</td>
                                    <td>Glimepiride</td>
                                    <td>PRD014</td>
                                    <td>BATCH20230914</td>
                                    <td>60,000</td>
                                    <td>2023-09-14</td>
                                    <td>2023-09-30</td>
                                    <td>Approved</td>
                                    <td>Line 1</td>
                                    <td>Suite C</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>PO12359</td>
                                    <td>Furosemide Tablets</td>
                                    <td>Furosemide</td>
                                    <td>PRD015</td>
                                    <td>BATCH20230915</td>
                                    <td>85,000</td>
                                    <td>2023-09-15</td>
                                    <td>2023-10-01</td>
                                    <td>Approved</td>
                                    <td>Line 2</td>
                                    <td>Suite F</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>PO12360</td>
                                    <td>Metoprolol Tablets</td>
                                    <td>Metoprolol</td>
                                    <td>PRD016</td>
                                    <td>BATCH20230916</td>
                                    <td>115,000</td>
                                    <td>2023-09-16</td>
                                    <td>2023-10-02</td>
                                    <td>Approved</td>
                                    <td>Line 4</td>
                                    <td>Suite A</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>PO12361</td>
                                    <td>Warfarin Tablets</td>
                                    <td>Warfarin</td>
                                    <td>PRD017</td>
                                    <td>BATCH20230917</td>
                                    <td>90,000</td>
                                    <td>2023-09-17</td>
                                    <td>2023-10-03</td>
                                    <td>Approved</td>
                                    <td>Line 3</td>
                                    <td>Suite C</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>PO12362</td>
                                    <td>Amlodipine Tablets</td>
                                    <td>Amlodipine</td>
                                    <td>PRD018</td>
                                    <td>BATCH20230918</td>
                                    <td>105,000</td>
                                    <td>2023-09-18</td>
                                    <td>2023-10-04</td>
                                    <td>Approved</td>
                                    <td>Line 5</td>
                                    <td>Suite D</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>PO12363</td>
                                    <td>Spironolactone Tablets</td>
                                    <td>Spironolactone</td>
                                    <td>PRD019</td>
                                    <td>BATCH20230919</td>
                                    <td>95,000</td>
                                    <td>2023-09-19</td>
                                    <td>2023-10-05</td>
                                    <td>Approved</td>
                                    <td>Line 2</td>
                                    <td>Suite G</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>PO12364</td>
                                    <td>Prednisone Tablets</td>
                                    <td>Prednisone</td>
                                    <td>PRD020</td>
                                    <td>BATCH20230920</td>
                                    <td>120,000</td>
                                    <td>2023-09-20</td>
                                    <td>2023-10-06</td>
                                    <td>Approved</td>
                                    <td>Line 4</td>
                                    <td>Suite B</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                
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
                    <h5 class="modal-title"><span class="type"></span> <span><?php echo app('translator')->get('Add New Expirey'); ?></span></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.newexp.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Production Order ID'); ?></label>
                            <input type="text" name="production_order_iD" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Product Name'); ?></label>
                            <input type="text" name="product_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Generic Name'); ?></label>
                            <input type="text" name="generic_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Product Code'); ?></label>
                            <input type="text" name="product_code" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Batch Number'); ?></label>
                            <input type="text" name="batch_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Production Quantity'); ?></label>
                            <input type="text" name="production_quality" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('Production Date'); ?></label>
                            <input type="date" name="production_date" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label><?php echo app('translator')->get('Expected Completion Date'); ?></label>
                            <input type="date" name="expected_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Vendor Status'); ?></label>
                            <input type="text" name="Vendor_Status" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Production Line'); ?></label>
                            <input type="text" name="production_line" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label><?php echo app('translator')->get('Production Suite'); ?></label>
                            <input type="text" name="production_suite" class="form-control" required>
                        </div>
                    </div>
                    <?php $hasPermission = App\Models\Role::hasPermission('admin.product.category.store')  ? 1 : 0;
            if($hasPermission == 1): ?>
                        <div class="modal-footer">
                            <button type="#" class="btn btn--primary h-45 w-100"><?php echo app('translator')->get('Submit'); ?></button>
                        </div>
                    <?php endif ?>
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
                    <h5 class="modal-title" id="csvImportModalLabel"><?php echo app('translator')->get('Import CSV Data'); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="importForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Choose CSV File'); ?></label>
                            <input type="file" id="csvFile" class="form-control-file" accept=".csv" required>
                        </div>
                    </form>
                    <p><?php echo app('translator')->get('Upload a CSV file to import data into the table.'); ?></p>
                    <p id="importSuccessMessage" style="display:none; color: green;"><?php echo app('translator')->get('Data imported successfully.'); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('Cancel'); ?></button>
                    <button type="button" class="btn btn-primary" onclick="importCSV()"><?php echo app('translator')->get('Import'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Message -->
    <div id="importSuccessMessage" class="alert alert-success" style="display: none;">
        <?php echo app('translator')->get('CSV file imported successfully!'); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
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
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.search-form','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('search-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php $hasPermission = App\Models\Role::hasPermission('admin.newexp.store')  ? 1 : 0;
            if($hasPermission == 1): ?>
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="<?php echo app('translator')->get('Add New Product Planning'); ?>">
            <i class="las la-plus"></i><?php echo app('translator')->get('Add New'); ?>
        </button>
        <button type="button" class="btn btn-sm btn-outline--primary" onclick="window.print()">
            <i class="las la-print"></i> <?php echo app('translator')->get('Print'); ?>
        </button>
        <button type="button" class="btn btn-sm btn-outline--primary" onclick="exportToCSV()" data-toggle="modal"
            data-target="#csvExportModal">
            <i class="las la-file-export"></i> <?php echo app('translator')->get('Export CSV'); ?>
        </button>
        <button type="button" class="btn btn-sm btn-outline--primary" data-toggle="modal" data-target="#csvImportModal">
            <i class="las la-cloud-upload-alt"></i> <?php echo app('translator')->get('Import CSV'); ?>
        </button>
    <?php endif ?>
<?php $__env->stopPush(); ?>

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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\warehouse_vidyagxp\resources\views/admin/production_planning/product_planning.blade.php ENDPATH**/ ?>