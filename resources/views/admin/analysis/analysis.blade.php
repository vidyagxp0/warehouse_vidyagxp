@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light">
                            <thead>
                                {{-- @forelse($newexpMaterial as $new) --}}
              <tr>
            <th>@lang('Analysis ID')</th>
            <th>@lang('Product Name')</th>
            <th>@lang('Batch Number')</th>
            <th>@lang('Date of Analysis')</th>
            <th>@lang('Analysis Type')</th>
            <th>@lang('Testing Method')</th>
            <th>@lang('Result Status')</th>
        </tr>
    </thead>
    <tbody>
          <tr>
            <td>ANAL001</td>
            <td>Product A</td>
            <td>BATCH6789</td>
            <td>2024-08-15</td>
            <td>Chemical Analysis</td>
            <td>Spectroscopy</td>
            <td>Passed</td>
        </tr>
        <tr>
            <td>ANAL002</td>
            <td>Product B</td>
            <td>BATCH5432</td>
            <td>2024-07-10</td>
            <td>Microbiological Testing</td>
            <td>Plate Count</td>
            <td>Failed</td>
        </tr>
        <tr>
            <td>ANAL003</td>
            <td>Product C</td>
            <td>BATCH1122</td>
            <td>2023-06-05</td>
            <td>Physical Testing</td>
            <td>Hardness Test</td>
            <td>Passed</td>
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
                            <label>@lang('Analysis ID')</label>
                            <input type="text" name="target_weight" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Product Name')</label>
                            <input type="text" name="actual_weight" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Date of Analysis')</label>
                            <input type="text" name="tolerance_range" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Analysis Type')</label>
                            <input type="date" name="weighing_scale_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Testing Method')</label>
                            <input type="text" name="weighing_location" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Result Status')</label>
                            <input type="text" name="environment_condition" class="form-control" required>
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
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New Analysis')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
    @endcan
    {{-- @can('')
        <button type="button" class="btn btn-sm btn-outline--info importBtn">
            <i class="las la-cloud-upload-alt"></i>@lang('Import CSV')
        </button>
    @endcan --}}
@endpush