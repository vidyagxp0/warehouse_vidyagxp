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
                                    <th>@lang('Production Order ID')</th>
                                    <th>@lang('Product Name')</th>
                                    <th>@lang('Generic Name')</th>
                                    <th>@lang('Product Code')</th>
                                    <th>@lang('Batch Number')</th>
                                    <th>@lang('Production Quantity')</th>
                                    <th>@lang('Production Date')</th>
                                    <th>@lang('Expected Completion Date')</th>
                                    <th>@lang('Production Line')</th>
                                    <th>@lang('Production Suite')</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($newexpMaterial as $new) --}}
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
                                    <td>Line 2</td>
                                    <td>Suite B</td>
                                </tr>
                                        <td>
                                            {{-- @if(\Carbon\Carbon::parse($new->expiry)->isPast() || \Carbon\Carbon::parse($new->expiry)->isToday())
                                            <span style="color: red; font-size: 20px;">●</span> 
                                            @else
                                                
                                                <span style="color: green; font-size: 20px;">●</span> 
                                            @endif --}}
                                        </td>
    
    
                                        <td>
                                            {{-- <div class="button--group">
    
                                                {{-- <button type="button" class="btn btn-sm btn-outline-primary cuModalBtn"
                                                    data-resource="" data-modal_title="@lang('Edit Expiry Material')"
                                                    data-has_status="1">
                                                    <i class="la la-pencil"></i>@lang('Edit')
                                                </button> --}}
    
                                                {{-- @can('admin.newexp.delete')
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-danger @if ($new->products_count) disabled @endif confirmationBtn"
                                                        data-question="@lang('Are you sure to delete this category?')"
                                                        data-action="{{ route('admin.newexp.delete', $new->id) }}">
                                                        <i class="la la-trash"></i>@lang('Delete')
                                                    </button>
                                                @endcan
                                            </div> --}} 
                                        </td>
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
                            <label>@lang('Production Order ID')</label>
                            <input type="text" name="production_order_iD" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Product Name')</label>
                            <input type="text" name="product_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Generic Name')</label>
                            <input type="text" name="generic_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Product Code')</label>
                            <input type="text" name="product_code" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Batch Number')</label>
                            <input type="text" name="batch_no" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Production Quantity')</label>
                            <input type="text" name="production_quality" class="form-control" required>
                        </div>
                   
                    <div class="form-group">
                        <label>@lang('Production Date')</label>
                        <input type="date" name="production_date" class="form-control" required>
                    </div>

            
            <div class="form-group">
                <label>@lang('Expected Completion Date')</label>
                <input type="date" name="expected_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label>@lang('Production Line')</label>
                <input type="text" name="production_line" class="form-control" required>
            </div>
        
        <div class="form-group">
            <label>@lang('Production Suite')</label>
            <input type="text" name="production_suite" class="form-control" required>
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Production Planning')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
    @endcan
    {{-- @can('')
        <button type="button" class="btn btn-sm btn-outline--info importBtn">
            <i class="las la-cloud-upload-alt"></i>@lang('Import CSV')
        </button>
    @endcan --}}
@endpush