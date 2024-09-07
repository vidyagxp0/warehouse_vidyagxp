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
                                </tr>
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
        .modal-dialog{
            max-width: 800px;
        }
    </style>
    <div id="cuModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog"  role="document">
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
    </div>
    @can('admin.product.category.store')
    <div class="modal-footer">
        <button type="submit" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
    </div>
@endcan
        </div>
    </div>

    </div>
   
    </form>
    </div>
    </div>
    </div>





    <x-confirmation-modal />
@endsection

@push('breadcrumb-plugins')
    <x-search-form />
    @can('admin.newexp.store')
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Recieving')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
    @endcan
    {{-- @can('')
        <button type="button" class="btn btn-sm btn-outline--info importBtn">
            <i class="las la-cloud-upload-alt"></i>@lang('Import CSV')
        </button>
    @endcan --}}
@endpush