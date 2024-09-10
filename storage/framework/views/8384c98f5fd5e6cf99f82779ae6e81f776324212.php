
<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light">
                            <thead>
                                <tr>
                                    <th><?php echo app('translator')->get('Batch/Lot Number'); ?></th>
                                    <th><?php echo app('translator')->get('Material Name'); ?></th>
                                    <th><?php echo app('translator')->get('Dispensing Container ID'); ?></th>
                                    <th><?php echo app('translator')->get('Expiry Date'); ?></th>
                                    <th><?php echo app('translator')->get('Location'); ?></th>
                                    <th><?php echo app('translator')->get('Status'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Widget A</td>
                                    <td>PRD001</td>
                                    <td>2025-12-31</td>
                                    <td>Reck 2</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Gadget B</td>
                                    <td>PRD002</td>
                                    <td>2024-09-15</td>
                                    <td>Reck 4</td>
                                    <td>Low Stock</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tool C</td>
                                    <td>PRD003</td>
                                    <td>2023-11-10</td>
                                    <td>Reck 1</td>
                                    <td>In stock</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Tool A</td>
                                    <td>PRD004</td>
                                    <td>2023-12-08</td>
                                    <td>Reck 8</td>
                                    <td>Expired</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Gadget C</td>
                                    <td>PRD005</td>
                                    <td>2024-01-10</td>
                                    <td>Reck 12</td>
                                    <td>Expired</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Tool C</td>
                                    <td>PRD006</td>
                                    <td>2024-08-28</td>
                                    <td>Reck 12</td>
                                    <td>Low Stock</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Gadget H</td>
                                    <td>PRD007</td>
                                    <td>2025-01-12</td>
                                    <td>Reck 22</td>
                                    <td>In Stock</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- card end -->
        </div>
    </div>

    <!-- Add Modal -->
    <div id="cuModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                Weighing and Dispensing
                    <!-- <h5 class="modal-title" id="modalTitle">Weighing and Dispensing</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Tab Container -->
                    <div class="tab-container">
                        <!-- Tab buttons -->
                        <div class="tabs">
                            <button class="tab-btn" onclick="openTab(event, 'tab1')">General Information</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab2')">Material Information</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab3')">Weighing Information</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab4')">Dispensing Information</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab5')">Quality Control</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab6')">Audit and Compliance</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab7')">Inventory and Logistics</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab8')">System-Generated Data</button>
                        </div>
                        <form action="admin.newexp.store" method="POST"></form>
                        <?php echo csrf_field(); ?>
                        <!-- Tab content -->
                        <div id="tab1" class="tab-content">
                            <!-- <h2>Tab 1 Content</h2> -->
                            <div class="row mb-3">
                            <div class="col-md-6">
                                    <label for="name1" class="label-top">Batch/Lot Number</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Product/Material Name</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Production Order Number</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Weighing Date and Time</label>
                                    <input type="datetime-local" class="form-control" id="email1" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Operator Name/ID</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                            </div>

                        </div>
                        <div id="tab2" class="tab-content" style="display:none;">
                            <!-- <h2>Tab 2 Content</h2> -->
                            <div class="row mb-3">
                            <div class="col-md-6">
                                    <label for="name1" class="label-top">Material Name</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Material Code/ID</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Material Grade</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Supplier Name</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Material Lot/Batch Number</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-content" style="display:none;">
                            <!-- <h2>Tab 3 Content</h2> -->
                            <div class="row mb-3">
                            <div class="col-md-6">
                                    <label for="name1" class="label-top">Target Weight</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Actual Weight</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Tolerance Range</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Weighing Scale ID/Calibration</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Weighing Room/Location</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Environmental Conditions</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tab-content" style="display:none;">
                            <!-- <h2>Tab 4 Content</h2> -->
                            <div class="row mb-3">
                            <div class="col-md-6">
                                    <label for="name1" class="label-top">Dispensing Container ID</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Dispensed Quantity</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Container Type</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Container Weight (Tare)</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Net Weight</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Packaging Information</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                            </div>
                        </div>
                        <div id="tab5" class="tab-content" style="display:none;">
                            <!-- <h2>Tab 5 Content</h2> -->
                            <div class="row mb-3">
                            <div class="col-md-6">
                                    <label for="name1" class="label-top">Sample Taken</label>
                                    <select class="col-md-12" name="" id="">
                                        <option value="">--Select--</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">QC Release Status</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Deviation Notes</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Approval Signature/ID</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                            </div>
                        </div>
                        <div id="tab6" class="tab-content" style="display:none;">
                            <!-- <h2>Tab 6 Content</h2> -->
                            <div class="row mb-3">
                            <div class="col-md-6">
                                    <label for="name1" class="label-top">Electronic Record Signatures</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Audit Log ID</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">SOP Version</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Regulatory Compliance Codes</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                            </div>
                        </div>
                        <div id="tab7" class="tab-content" style="display:none;">
                            <!-- <h2>Tab 7 Content</h2> -->
                            <div class="row mb-3">
                            <div class="col-md-6">
                                    <label for="name1" class="label-top">Inventory Status</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Warehouse/Storage Location</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Reorder Level</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Expiry Date</label>
                                    <input type="date" class="form-control" id="email1" name="email">
                                </div>
                            </div>
                        </div>
                        <div id="tab8" class="tab-content" style="display:none;">
                            <!-- <h2>Tab 8 Content</h2> -->
                            <div class="row mb-3">
                            <div class="col-md-6">
                                    <label for="name1" class="label-top">Transaction ID</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Weighing Session ID</label>
                                    <input type="text" class="form-control" id="email1" name="email">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Barcode/QR Code</label>
                                    <input type="text" class="form-control" id="name1" name="name">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/admin/avl/weighing_dispensing" class="btn btn-primary">Save changes</a>
                </div>
                </form>
            </div>
        </div>
    </div>
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
    <?php if (isset($component)) { $__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b = $component; } ?>
<?php $component = App\View\Components\ConfirmationModal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('confirmation-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ConfirmationModal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b)): ?>
<?php $component = $__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b; ?>
<?php unset($__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
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
        <button type="button" class="btn btn-sm btn-outline-primary cuModalBtn" data-bs-toggle="modal" data-bs-target="#cuModal">
            <i class="las la-plus"></i><?php echo app('translator')->get('Add New'); ?>
        </button>
        <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.print()">
            <i class="las la-print"></i> <?php echo app('translator')->get('Print'); ?>
        </button>
        <button type="button" class="btn btn-sm btn-outline-primary" onclick="exportToCSV()" data-toggle="modal"
            data-target="#csvExportModal">
            <i class="las la-file-export"></i> <?php echo app('translator')->get('Export CSV'); ?>
        </button>
        <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#csvImportModal">
            <i class="las la-cloud-upload-alt"></i> <?php echo app('translator')->get('Import CSV'); ?>
        </button>
    <?php endif ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
<script>
    function openTab(evt, tabId) {
        const tabContent = document.getElementsByClassName("tab-content");
        for (let i = 0; i < tabContent.length; i++) {
            tabContent[i].style.display = "none";
        }

        const tabButtons = document.getElementsByClassName("tab-btn");
        for (let i = 0; i < tabButtons.length; i++) {
            tabButtons[i].classList.remove("active");
        }

        document.getElementById(tabId).style.display = "block";
        evt.currentTarget.classList.add("active");
    }

    // Automatically open the first tab when the modal is shown
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementsByClassName("tab-btn")[0].click();
    });
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style'); ?>
<style>
  .label-top {
    display: block;
    margin-bottom: 5px; /* Adjust space between label and input field */
}

.form-control {
    margin-bottom: 15px; /* Adds some space between input fields */
}

.row .col-md-6 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
    .modal-dialog {
        max-width: 1200px;
    }

    .tab-container {
        width: 100%;
        margin: 20px auto;
        text-align: center;
    }

    .tabs {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .tab-btn {
        padding: 10px 20px;
        margin: 0 5px;
        border: 2px solid #4634ff;
        background-color: white;
        cursor: pointer;
        border-radius: 25px;
        outline: none;
        transition: background-color 0.3s;
        font-size: 12px;
    }

    .tab-btn:hover {
        background-color: #4634ff;
        color: white;
    }

    .tab-btn.active {
        background-color: #4634ff;
        color: white;
    }

    .tab-content {
        display: none;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    .abc{
        margin-bottom: 15px;
    }
</style>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\warehouse_vidyagxp\resources\views/admin/general_first/general_information.blade.php ENDPATH**/ ?>