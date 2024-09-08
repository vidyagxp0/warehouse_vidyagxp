




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
                                    <th>@lang('Material')</th>
                                    <th>@lang('Catefory')</th>
                                    <th>@lang('Expiry Date')</th>
                                    <th>@lang('Quantity')</th>
                                    <th>@lang('Status')</th>
                                    <th>@lang('UOM')</th>
                                    <th>@lang('Vendor Site')</th>
                                    <th>@lang('Manufacturer')</th>
                                    <th>@lang('Vendor Status')</th>
                                    <th>@lang('Last Audit Date')</th>
                                    <th>@lang('Quality Issues Reported')</th>
                                    <th>@lang('Supporting Documents')</th>
                                    <th>@lang('Deviation ID')</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($newexpMaterial as $new) --}}
                                <tr>
                                    <td>1</td>
                                    <td>Paracetamol</td>
                                    <td>Active Pharmaceutical Ingredient (API)</td>
                                    <td>2025-08-15</td>
                                    <td>10,000</td>
                                    <td>Approved</td>
                                    <td>KG</td>
                                    <td>ABC Pharma Ltd.</td>
                                    <td>XYZ Pharma Inc.</td>
                                    <td>Approved</td>
                                    <td>2024-05-01</td>
                                    <td>No</td>
                                    <td><a href="#">View COA</a></td>
                                    <td>DEV00123</td>
                                    <td><a href="#">Attachment1.pdf</a></td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Aspirin</td>
                                    <td>Finished Product</td>
                                    <td>2024-12-31</td>
                                    <td>5,000</td>
                                    <td>Approved</td>
                                    <td>Boxes</td>
                                    <td>Global Pharmaceuticals</td>
                                    <td>ABC Manufacturing Co.</td>
                                    <td>Pending</td>
                                    <td>2023-11-20</td>
                                    <td>Yes</td>
                                    <td><a href="#">View Batch Report</a></td>
                                    <td>DEV00345</td>
                                    <td><a href="#">Attachment2.pdf</a></td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Ibuprofen</td>
                                    <td>API</td>
                                    <td>2026-03-01</td>
                                    <td>7,500</td>
                                    <td>Approved</td>
                                    <td>KG</td>
                                    <td>HealthCare Ltd.</td>
                                    <td>Global Med Co.</td>
                                    <td>Approved</td>
                                    <td>2024-06-15</td>
                                    <td>No</td>
                                    <td><a href="#">View COA</a></td>
                                    <td>DEV00456</td>
                                    <td><a href="#">Attachment3.pdf</a></td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>Amoxicillin</td>
                                    <td>Finished Product</td>
                                    <td>2024-10-10</td>
                                    <td>12,000</td>
                                    <td>Approved</td>
                                    <td>Boxes</td>
                                    <td>Med Life Pharma</td>
                                    <td>PharmaTech Inc.</td>
                                    <td>Approved</td>
                                    <td>2023-12-12</td>
                                    <td>No</td>
                                    <td><a href="#">View Batch Report</a></td>
                                    <td>DEV00267</td>
                                    <td><a href="#">Attachment4.pdf</a></td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>Cetirizine</td>
                                    <td>Finished Product</td>
                                    <td>2025-02-28</td>
                                    <td>6,500</td>
                                    <td>Approved</td>
                                    <td>Boxes</td>
                                    <td>Quick Pharma</td>
                                    <td>Wellness Pharma Ltd.</td>
                                    <td>Approved</td>
                                    <td>2024-01-25</td>
                                    <td>No</td>
                                    <td><a href="#">View Batch Report</a></td>
                                    <td>DEV00378</td>
                                    <td><a href="#">Attachment5.pdf</a></td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>Metformin</td>
                                    <td>API</td>
                                    <td>2026-12-01</td>
                                    <td>15,000</td>
                                    <td>Approved</td>
                                    <td>KG</td>
                                    <td>Future Pharma Ltd.</td>
                                    <td>Advanced Med Inc.</td>
                                    <td>Pending</td>
                                    <td>2024-02-18</td>
                                    <td>Yes</td>
                                    <td><a href="#">View COA</a></td>
                                    <td>DEV00489</td>
                                    <td><a href="#">Attachment6.pdf</a></td>
                                  </tr>
                                  <tr>
                                    <td>7</td>
                                    <td>Losartan</td>
                                    <td>Finished Product</td>
                                    <td>2025-07-22</td>
                                    <td>4,500</td>
                                    <td>Approved</td>
                                    <td>Boxes</td>
                                    <td>LifeScience Pharma</td>
                                    <td>Care Health Co.</td>
                                    <td>Approved</td>
                                    <td>2024-03-10</td>
                                    <td>No</td>
                                    <td><a href="#">View Batch Report</a></td>
                                    <td>DEV00231</td>
                                    <td><a href="#">Attachment7.pdf</a></td>
                                  </tr>
                                  <tr>
                                    <td>8</td>
                                    <td>Vitamin D3</td>
                                    <td>API</td>
                                    <td>2025-09-14</td>
                                    <td>3,200</td>
                                    <td>Approved</td>
                                    <td>KG</td>
                                    <td>Sunrise Pharma</td>
                                    <td>Wellmed Industries</td>
                                    <td>Pending</td>
                                    <td>2023-10-05</td>
                                    <td>Yes</td>
                                    <td><a href="#">View COA</a></td>
                                    <td>DEV00543</td>
                                    <td><a href="#">Attachment8.pdf</a></td>
                                  </tr>

                                <tr>
                                    <td>9</td>
                                    <td>Paracetamol</td>
                                    <td>Active Pharmaceutical Ingredient (API)</td>
                                    <td>2025-08-15</td>
                                    <td>10,000</td>
                                    <td>Approved</td>
                                    <td>KG</td>
                                    <td>ABC Pharma Ltd.</td>
                                    <td>XYZ Pharma Inc.</td>
                                    <td>Approved</td>
                                    <td>2024-05-01</td>
                                    <td>No</td>
                                    <td><a href="#">View COA</a></td>
                                    <td>DEV00123</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Aspirin</td>
                                    <td>Finished Product</td>
                                    <td>2024-12-31</td>
                                    <td>5,000</td>
                                    <td>Approved</td>
                                    <td>Boxes</td>
                                    <td>Global Pharmaceuticals</td>
                                    <td>ABC Manufacturing Co.</td>
                                    <td>Pending</td>
                                    <td>2023-11-20</td>
                                    <td>Yes</td>
                                    <td><a href="#">View Batch Report</a></td>
                                    <td>DEV00345</td>
                                </tr>
                                <td>
                                    {{-- @if (\Carbon\Carbon::parse($new->expiry)->isPast() || \Carbon\Carbon::parse($new->expiry)->isToday())
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
                                {{-- <tr>
                                        <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                    </tr> --}}
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
        .modal-dialog {
            max-width: 800px;
        }
    </style>
    <div id="cuModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
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
                            <label>@lang('Material')</label>
                            <input type="text" name="Material" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Catefory')</label>
                            <input type="text" name="Catefory" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Quantity ')</label>
                            <input type="text" name="Quantity" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('UOM')</label>
                            <input type="text" name="UOM" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Vendor')</label>
                            <input type="text" name="vendor" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Vendor Site')</label>
                            <input type="text" name="vendor_site" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Manufacturer')</label>
                            <input type="text" name="location" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label>@lang('Manufacturer Site')</label>
                            <input type="text" name="location" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Vendor Status')</label>
                            <input type="text" name="location" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Last Audit Date')</label>
                            <input type="text" name="location" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Quality Issues Reported')</label>
                            <input type="text" name="location" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>@lang('Supporting Documents')</label>
                            <input type="text" name="location" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>@lang('Deviation ID')</label>
                            <input type="text" name="location" class="form-control" required>
                        </div>
                    </div>
                    @can('admin.product.category.store')
                        <div class="modal-footer">
                            <button type="#" class="btn btn--primary h-45 w-100">@lang('Submit')</button>
                        </div>
                    @endcan
                </form>
            </div>
        </div>

    </div>

    </form>
    </div>
    </div>
    </div>

    <!-- Success Message -->
    <div id="importSuccessMessage" class="alert alert-success" style="display: none;">
        @lang('CSV file imported successfully!')
    </div>
@endsection

@push('breadcrumb-plugins')
    <x-search-form />
    @can('admin.newexp.store')
        <button type="button" class="btn btn-sm btn-outline--primary cuModalBtn" data-modal_title="@lang('Add New AVL')">
            <i class="las la-plus"></i>@lang('Add New')
        </button>
        <button type="button" class="btn btn-sm btn-outline--primary" onclick="window.print()">
            <i class="las la-print"></i> @lang('Print')
        </button>
    @endcan --}}
@endpush
