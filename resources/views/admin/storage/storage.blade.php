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
                                    <th>@lang('S.N.')</th>
                                    <th>@lang('Product Name')</th>
                                    <th>@lang('Product Code')</th>
                                    <th>@lang('Expiry Date')</th>
                                    <th>@lang('Location')</th>
                                    <th>@lang('Status')</th>
                                    {{-- <th>@lang('Action')</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($newexpMaterial as $new) --}}
                                       <tr>
            <td>1</td>
            <td>Widget A</td>
            <td>PRD001</td>
            <td>2025-12-31</td>
            <td>Aisle 1, Shelf 2</td>
            <td>In Stock</td>
            {{-- <td><button>Edit</button> <button>Delete</button></td> --}}
        </tr>
        <tr>
            <td>2</td>
            <td>Gadget B</td>
            <td>PRD002</td>
            <td>2024-09-15</td>
            <td>Aisle 3, Shelf 4</td>
            <td>Low Stock</td>
            {{-- <td><button>Edit</button> <button>Delete</button></td> --}}
        </tr>
        <tr>
            <td>3</td>
            <td>Tool C</td>
            <td>PRD003</td>
            <td>2023-11-10</td>
            <td>Aisle 5, Shelf 1</td>
            <td>Expired</td>
            {{-- <td><button>Edit</button> <button>Delete</button></td> --}}
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
                            <input type="text" name="production_code" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Batch Number')</label>
                            <input type="text" name="batch_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Quantity in Stock')</label>
                            <input type="text" name="quality_in_stock" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Storage Location')</label>
                            <input type="text" name="storage_location" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Temperature Requirement')</label>
                            <input type="text" name="temperature_requirment" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Expiry Date')</label>
                            <input type="date" name="expire_date" class="form-control" required>
                        </div>
                   
                    <div class="form-group">
                        <label>@lang('Handling Instructions')</label>
                        <input type="date" name="handling_instruction" class="form-control" required>
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Storage')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
    @endcan
    {{-- @can('')
        <button type="button" class="btn btn-sm btn-outline--info importBtn">
            <i class="las la-cloud-upload-alt"></i>@lang('Import CSV')
        </button>
    @endcan --}}
@endpush