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
                                    <th>@lang('Product Code')</th>
                                    <th>@lang('Batch Number')</th>
                                    <th>@lang('Current Stock Level')</th>
                                    <th>@lang('Reorder Level')</th>
                                    <th>@lang('Reorder Quantity')</th>
                                    <th>@lang('Last Stock Check Date')</th>
                                    <th>@lang('Expiry Date')</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($newexpMaterial as $new) --}}
               <tr>
            <td>PRD001</td>
            <td>BATCH6789</td>
            <td>150</td>
            <td>50</td>
            <td>200</td>
            <td>2024-08-15</td>
            <td>2025-12-31</td>
        </tr>
        <tr>
            <td>PRD002</td>
            <td>BATCH5432</td>
            <td>20</td>
            <td>30</td>
            <td>100</td>
            <td>2024-07-10</td>
            <td>2024-11-15</td>
        </tr>
        <tr>
            <td>PRD003</td>
            <td>BATCH1122</td>
            <td>0</td>
            <td>20</td>
            <td>50</td>
            <td>2023-06-05</td>
            <td>2023-09-10</td>
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
                            <label>@lang('Product Code')</label>
                            <input type="text" name="product_code_invent" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Batch Number')</label>
                            <input type="text" name="batch_no_invent" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Current Stock Level')</label>
                            <input type="text" name="current_stock_level" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Reorder Level')</label>
                            <input type="text" name="recorder_level" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Reorder Quantity')</label>
                            <input type="text" name="recorder_quantity" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Last Stock Check Date')</label>
                            <input type="date" name="last_stock_check_date" class="form-control" required>
                        </div>
                   
                    <div class="form-group">
                        <label>@lang('Expiry Date')</label>
                        <input type="date" name="expiry_invent" class="form-control" required>
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Inventory Management')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
    @endcan
    {{-- @can('')
        <button type="button" class="btn btn-sm btn-outline--info importBtn">
            <i class="las la-cloud-upload-alt"></i>@lang('Import CSV')
        </button>
    @endcan --}}
@endpush