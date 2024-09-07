
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Packing')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
    @endcan
    {{-- @can('')
        <button type="button" class="btn btn-sm btn-outline--info importBtn">
            <i class="las la-cloud-upload-alt"></i>@lang('Import CSV')
        </button>
    @endcan --}}
@endpush