
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
                                    <th><?php echo app('translator')->get('Product Name'); ?></th>
                                    <th><?php echo app('translator')->get('Product Code'); ?></th>
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
                                    <td>Aisle 1, Shelf 2</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Gadget B</td>
                                    <td>PRD002</td>
                                    <td>2024-09-15</td>
                                    <td>Aisle 3, Shelf 4</td>
                                    <td>Low Stock</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tool C</td>
                                    <td>PRD003</td>
                                    <td>2023-11-10</td>
                                    <td>Aisle 5, Shelf 1</td>
                                    <td>Expired</td>
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
                    Calibration Of Weighing Balance
                    <!-- <h5 class="modal-title" id="modalTitle">Weighing and Dispensing</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Tab Container -->
                    <div class="tab-container">
                        <!-- Tab buttons -->
                        <div class="tabs">
                            <button class="tab-btn" onclick="openTab(event, 'tab1')">General Information</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab2')">Calibration Information</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab3')">Qauality Assurance</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab4')">Audit And Compliance</button>
                            <button class="tab-btn" onclick="openTab(event, 'tab5')">System-Generated Data</button>
                            
                            
                            <!-- <button class="tab-btn" onclick="openTab(event, 'tab8')">Tab 7</button> -->
                        </div>
                        <form action="" method="POST"></form>
                        <?php echo csrf_field(); ?>
                        <!-- Tab content -->
                        <div id="tab1" class="tab-content">
                            <!-- <h2>Tab 1 Content</h2> -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Balance/Scale Id</label>
                                    <input type="text" class="form-control" id="balance_id" name="balance_id">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Balance Model</label>
                                    <input type="email" class="form-control" id="balance_model" name="balance_model">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Balance Serial Number</label>
                                    <input type="text" class="form-control" id="bal_sel_number" name="bal_sel_number">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Calibration Date</label>
                                    <input type="date" class="form-control" id="cal_date" name="cal_date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Calibrationi Due Date</label>
                                    <input type="text" class="form-control" id="cal_due_date" name="cal_due_date">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Operator Name/ID</label>
                                    <input type="date" class="form-control" id="operator_name" name="operator_name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Location</label>
                                    <input type="text" class="form-control" id="location" name="location">
                                </div>
                            </div>

                        </div>
                        <div id="tab2" class="tab-content" style="display:none;">
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Calibration Method</label>
                                    <input type="text" class="form-control" id="Calibration_method"
                                        name="Calibration_method">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Calibration Certificate Number</label>
                                    <input type="email" class="form-control" id="cali_certificate_number"
                                        name="cali_certificate_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Standard Weight Used</label>
                                    <input type="text" class="form-control" id="standard_weight"
                                        name="standard_weight">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Standard Weight ID</label>
                                    <input type="email" class="form-control" id="standard_weight_id"
                                        name="standard_weight_id">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Standard Weight Class</label>
                                    <input type="text" class="form-control" id="standard_weight_class"
                                        name="standard_weight_class">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Applied Weight Value</label>
                                    <input type="email" class="form-control" id="standard_weight_value"
                                        name="standard_weight_value">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Measured Weight Value</label>
                                    <input type="text" class="form-control" id="measured_weight_value"
                                        name="measured_weight_value">
                                </div>
                                <div class="col-md-6">
                                    <label for="email1" class="label-top">Tolerance Range</label>
                                    <input type="email" class="form-control" id="tolerance_range"
                                        name="tolerance_range">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Calibration Result (Pass/Fail)</label>
                                    
                                    <select name="result" id="">
                                        <option value="pass">Pass</option>
                                        <option value="fail">NO</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Adjustment Made (Yes/No)</label>
                                    
                                    <select name="" id="">
                                        <option value="yes">Yes</option>
                                        <option value="no">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Environmental Conditions</label>
                                    <input type="text" class="form-control" id="environmental_con"
                                        name="environmental_con">
                                </div>
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Calibration Frequency</label>
                                    <input type="text" class="form-control" id="calibration_fre"
                                        name="calibration_fre">
                                </div>
                            </div>
                            
                        </div>
                        <div id="tab3" class="tab-content" style="display:none;">
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">QC/QA Approval Signature/ID</label>
                                    <input type="text" class="form-control" id="signature" name="signature">
                                </div>
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Calibration SOP Version</label>
                                    <input type="text" class="form-control" id="calibration_version"
                                        name="calibration_version">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Deviation Notes</label>
                                    <input type="text" class="form-control" id="deviation_notes"
                                        name="deviation_notes">
                                </div>
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Calibration Log Entry ID</label>
                                    <input type="text" class="form-control" id="calibration_log_entry"
                                        name="calibration_log_entry">
                                </div>
                            </div>
                            
                        </div>
                        <div id="tab4" class="tab-content" style="display:none;">
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Electronic Record Signatures</label>
                                    <input type="text" class="form-control" id="electronic_record"
                                        name="electronic_record">
                                </div>
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Audit Log ID</label>
                                    <input type="text" class="form-control" id="audit_log_id" name="audit_log_id">
                                </div>
                            </div>
                            
                        </div>
                        <div id="tab5" class="tab-content" style="display:none;">
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Calibration Transaction ID</label>
                                    <input type="text" class="form-control" id="calibration_transaction_id"
                                        name="calibration_transaction_id">
                                </div>
                                <div class="col-md-6">
                                    <label for="name1" class="label-top">Calibration Session ID</label>
                                    <input type="text" class="form-control" id="calibration_session_id"
                                        name="calibration_session_id">
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/admin/avl/weighing_general_info" class="btn btn-primary">Save changes</a>
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-bs-toggle="modal"
            data-bs-target="#cuModal">
            <i class="las la-plus"></i><?php echo app('translator')->get('Add New'); ?>
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
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementsByClassName("tab-btn")[0].click();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('style'); ?>
    <style>
        .label-top {
            display: block;
            margin-bottom: 5px;
            /* Adjust space between label and input field */
        }

        .form-control {
            margin-bottom: 15px;
            /* Adds some space between input fields */
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
            font-size: 15px;
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
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\warehouse_vidyagxp\resources\views/admin/general_second/general_infromation_two.blade.php ENDPATH**/ ?>