
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
                                    <th><?php echo app('translator')->get('Warehouse ID'); ?></th>
                                    <th><?php echo app('translator')->get('Location ID'); ?></th>
                                    <th><?php echo app('translator')->get('Rack ID'); ?></th>
                                    <th><?php echo app('translator')->get('Bin ID'); ?></th>
                                    <th><?php echo app('translator')->get('Product Name'); ?></th>
                                    <th><?php echo app('translator')->get('Product Code'); ?></th>
                                    <th><?php echo app('translator')->get('MFG Date'); ?></th>
                                    <th><?php echo app('translator')->get('Expiry Date'); ?></th>
                                    <th><?php echo app('translator')->get('Location'); ?></th>
                                    <th><?php echo app('translator')->get('File Attachment'); ?></th>

                                    <th><?php echo app('translator')->get('Status'); ?></th>

                                    <th><?php echo app('translator')->get('Action'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>WH001</td>
                                    <td>LOC001</td>
                                    <td>RACK01</td>
                                    <td>BIN001</td>
                                    <td>Product A</td>
                                    <td>PROD001</td>
                                    <td>2023-01-15</td>
                                    <td>2025-01-15</td>
                                    <td>Warehouse A</td>
                                    <td>attachment0.png</td>
                                    <td>Approved</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>WH002</td>
                                    <td>LOC002</td>
                                    <td>RACK02</td>
                                    <td>BIN002</td>
                                    <td>Product B</td>
                                    <td>PROD002</td>
                                    <td>2023-02-20</td>
                                    <td>2024-12-20</td>
                                    <td>Warehouse B</td>
                                    <td>attachment1.png</td>
                                    <td>Under Test</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>WH003</td>
                                    <td>LOC003</td>
                                    <td>RACK03</td>
                                    <td>BIN003</td>
                                    <td>Product C</td>
                                    <td>PROD003</td>
                                    <td>2023-03-25</td>
                                    <td>2025-03-25</td>
                                    <td>Warehouse C</td>
                                    <td>attachment3.png</td>
                                    <td>Rejected</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>WH004</td>
                                    <td>LOC004</td>
                                    <td>RACK04</td>
                                    <td>BIN004</td>
                                    <td>Product D</td>
                                    <td>PROD004</td>
                                    <td>2023-04-30</td>
                                    <td>2025-04-30</td>
                                    <td>Warehouse D</td>
                                    <td>attachment2.png</td>
                                    <td>Approved</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>WH005</td>
                                    <td>LOC005</td>
                                    <td>RACK05</td>
                                    <td>BIN005</td>
                                    <td>Product E</td>
                                    <td>PROD005</td>
                                    <td>2023-05-10</td>
                                    <td>2024-05-10</td>
                                    <td>Warehouse E</td>
                                    <td>attachment4.png</td>
                                    <td>Under Test</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>WH006</td>
                                    <td>LOC006</td>
                                    <td>RACK06</td>
                                    <td>BIN006</td>
                                    <td>Product F</td>
                                    <td>PROD006</td>
                                    <td>2023-06-15</td>
                                    <td>2025-06-15</td>
                                    <td>Warehouse F</td>
                                    <td>attachment5.png</td>
                                    <td>Rejected</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>WH007</td>
                                    <td>LOC007</td>
                                    <td>RACK07</td>
                                    <td>BIN007</td>
                                    <td>Product G</td>
                                    <td>PROD007</td>
                                    <td>2023-07-20</td>
                                    <td>2024-07-20</td>
                                    <td>Warehouse G</td>
                                    <td>attachment6.png</td>
                                    <td>Approved</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>WH008</td>
                                    <td>LOC008</td>
                                    <td>RACK08</td>
                                    <td>BIN008</td>
                                    <td>Product H</td>
                                    <td>PROD008</td>
                                    <td>2023-08-25</td>
                                    <td>2025-08-25</td>
                                    <td>Warehouse H</td>
                                    <td>attachment7.png</td>
                                    <td>Under Test</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>WH009</td>
                                    <td>LOC009</td>
                                    <td>RACK09</td>
                                    <td>BIN009</td>
                                    <td>Product I</td>
                                    <td>PROD009</td>
                                    <td>2023-09-30</td>
                                    <td>2024-09-30</td>
                                    <td>Warehouse I</td>
                                    <td>attachment8.png</td>
                                    <td>Rejected</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>WH010</td>
                                    <td>LOC010</td>
                                    <td>RACK10</td>
                                    <td>BIN010</td>
                                    <td>Product J</td>
                                    <td>PROD010</td>
                                    <td>2023-10-05</td>
                                    <td>2025-10-05</td>
                                    <td>Warehouse J</td>
                                    <td>attachment9.png</td>
                                    <td>Approved</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>WH011</td>
                                    <td>LOC011</td>
                                    <td>RACK11</td>
                                    <td>BIN011</td>
                                    <td>Product K</td>
                                    <td>PROD011</td>
                                    <td>2023-11-10</td>
                                    <td>2024-11-10</td>
                                    <td>Warehouse K</td>
                                    <td>attachment10.png</td>
                                    <td>Under Test</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>WH012</td>
                                    <td>LOC012</td>
                                    <td>RACK12</td>
                                    <td>BIN012</td>
                                    <td>Product L</td>
                                    <td>PROD012</td>
                                    <td>2023-12-15</td>
                                    <td>2025-12-15</td>
                                    <td>Warehouse L</td>
                                    <td>attachment11.png</td>
                                    <td>Rejected</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>WH013</td>
                                    <td>LOC013</td>
                                    <td>RACK13</td>
                                    <td>BIN013</td>
                                    <td>Product M</td>
                                    <td>PROD013</td>
                                    <td>2024-01-20</td>
                                    <td>2025-01-20</td>
                                    <td>Warehouse M</td>
                                    <td>attachment12.png</td>
                                    <td>Approved</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>WH014</td>
                                    <td>LOC014</td>
                                    <td>RACK14</td>
                                    <td>BIN014</td>
                                    <td>Product N</td>
                                    <td>PROD014</td>
                                    <td>2024-02-25</td>
                                    <td>2025-02-25</td>
                                    <td>Warehouse N</td>
                                    <td>attachment13.png</td>
                                    <td>Under Test</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>WH015</td>
                                    <td>LOC015</td>
                                    <td>RACK15</td>
                                    <td>BIN015</td>
                                    <td>Product O</td>
                                    <td>PROD015</td>
                                    <td>2024-03-30</td>
                                    <td>2025-03-30</td>
                                    <td>Warehouse O</td>
                                    <td>attachment14.png</td>
                                    <td>Rejected</td>
                                    <td>
                                        <a href="https://app.sketchup.com/share/tc/asia/S859gxjPVz4?stoken=cX3LcI2iFMrK0HpdvoJuri7BGLHqrd0UrMhv2mmuQm6rXs4Yhx0kteG_whRcynCW&source=web"
                                            target="_blank" style="text-decoration: none; border: none;">
                                            <i class="fas fa-eye" style="color:#eb7f00"></i>
                                        </a>
                                    </td>
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
    <div id="cuModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="type"></span> <span><?php echo app('translator')->get('Add New Expirey'); ?></span></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form id="dataForm" action="<?php echo e(route('admin.newexp.store')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Warehouse ID'); ?></label>
                            <input type="text" name="warehouse_id" id="warehouse_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Location ID'); ?></label>
                            <input type="text" name="location_id" id="location_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Rack ID'); ?></label>
                            <input type="text" name="rack_id" id="rack_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Bin ID'); ?></label>
                            <input type="text" name="bin_id" id="bin_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Product Name'); ?></label>
                            <input type="text" name="product_name" id="product_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Product Code'); ?></label>
                            <input type="text" name="product_code" id="product_code" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('MFG Date'); ?></label>
                            <input type="date" name="mfg_date" id="mfg_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Expiry Date'); ?></label>
                            <input type="date" name="expiry_date" id="expiry_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Location'); ?></label>
                            <input type="text" name="location" id="location" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Status'); ?></label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="Approved"><?php echo app('translator')->get('Approved'); ?></option>
                                <option value="Under Test"><?php echo app('translator')->get('Under Test'); ?></option>
                                <option value="Rejected"><?php echo app('translator')->get('Rejected'); ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('File Attachment'); ?></label>
                            <input type="file" name="file_attachment" id="file_attachment" class="form-control">
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="<?php echo app('translator')->get('Add New Storage'); ?>">
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\warehouse_vidyagxp\resources\views/admin/storage/storage.blade.php ENDPATH**/ ?>