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
                                    <th>@lang('Quantity to Pick')</th>
                                    <th>@lang('Pick Location')</th>
                                    <th>@lang('Picker ID')</th>
                                    <th>@lang('Picking Status')</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($newexpMaterial as $new) --}}
                                    <tr>
                                        <td>ORD12345</td>
                                        <td>PRD001</td>
                                        <td>BATCH6789</td>
                                        <td>100</td>
                                        <td>Aisle 5, Shelf 3</td>
                                        <td>PICK001</td>
                                        <td>In Progress</td>
                                    </tr>
                                    <tr>
                                        <td>ORD67890</td>
                                        <td>PRD002</td>
                                        <td>BATCH5432</td>
                                        <td>50</td>
                                        <td>Aisle 2, Shelf 1</td>
                                        <td>PICK002</td>
                                        <td>Completed</td>
                                    </tr>
                                    <tr>
                                        <td>ORD34567</td>
                                        <td>PRD003</td>
                                        <td>BATCH1122</td>
                                        <td>75</td>
                                        <td>Aisle 7, Shelf 4</td>
                                        <td>PICK003</td>
                                        <td>Pending</td>
                                    </tr>
                                {{-- @empty --}}
                                    <tr>
                                        <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                    </tr>
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
                            <label>@lang('Order ID')</label>
                            <input type="text" name="order_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Product Code')</label>
                            <input type="text" name="production_code_picking" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Batch Number')</label>
                            <input type="text" name="batch_number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Quantity to Pick')</label>
                            <input type="text" name="quantity_pick" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Pick Location')</label>
                            <input type="text" name="pick_location" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Picker ID')</label>
                            <input type="text" name="pick_id" class="form-control" required>
                        </div>
                   
                    <div class="form-group">
                        <label>@lang('Picking Status')</label>
                        <input type="text" name="picking_status" class="form-control" required>
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Picking')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
    @endcan
    {{-- @can('')
        <button type="button" class="btn btn-sm btn-outline--info importBtn">
            <i class="las la-cloud-upload-alt"></i>@lang('Import CSV')
        </button>
    @endcan --}}
@endpush