<tr>
    <td><strong>{{ $product->id }}</strong></td>
    <td>
        @if(strtolower($product->batch_status) == 'under_quarantine' || strtolower($product->batch_status) == 'under quarantine')
            <span class="badge" style="background-color: #fef3c7; color: #d97706; border: 1px solid #fde68a; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Under Quarantine</span>
        @elseif(strtolower($product->batch_status) == 'approved' || strtolower($product->batch_status) == 'ok')
            <span class="badge" style="background-color: #dcfce7; color: #16a34a; border: 1px solid #bbf7d0; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Approved</span>
        @elseif(strtolower($product->batch_status) == 'rejected')
            <span class="badge" style="background-color: #fee2e2; color: #dc2626; border: 1px solid #fecaca; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">Rejected</span>
        @else
            <span class="badge" style="background-color: #f1f5f9; color: #475569; border: 1px solid #e2e8f0; padding: 6px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">{{ $product->batch_status }}</span>
        @endif
    </td>
    <td>{{ $product->item_code }}</td>
    <td>{{ $product->item_name }}</td>
    <td>{{ $product->location_code }}</td>
    <td>{{ $product->store }}</td>
    <td>{{ $product->grn_batch_id }}</td>
    <td>{{ $product->arn_id }}</td>
    <td>{{ $product->container_no }}</td>
    <td>{{ $product->brand_name }}</td>
    <td>{{ $product->unit }}</td>
    <td>{{ $product->quantity_of_product }}</td>
    <td>{{ $product->weightPerPackage }}</td>
    <td>{{ $product->totalWeight }}</td>
    <td>{{ $product->item_description }}</td>
    <td>{{ $product->batch_no }}</td>
    <td>{{ $product->uom_branch }}</td>
    <td>{{ $product->mfg_dt }}</td>
    <td>{{ $product->exp_dt }}</td>
    <td>{{ $product->pack_size }}</td>
    <td>{{ $product->count_no }}</td>
    <td>{{ $product->rec_qty }}</td>
    <td>{{ $product->manufacturer }}</td>
    <td>{{ $product->supplier }}</td>
    <td>{{ $product->grn_no }}</td>
    <td>{{ $product->grn_date }}</td>
    <td>{{ $product->format_no }}</td>
    <td style="min-width: 220px; text-align: center; vertical-align: middle;">
        <div style="background: white; padding: 6px 12px; border-radius: 6px; display: inline-block; box-shadow: 0 1px 4px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
            <img style="max-height: 40px; display: block; margin: 0 auto;" src="data:image/png;base64,{{ DNS1D::getBarcodePNG($product->bar_code, 'C39') }}" alt="barcode">
            <span style="display: block; color: #64748b; font-size: 11px; font-weight: 600; margin-top: 4px; font-family: monospace;">{{ $product->bar_code }}</span>
        </div>
    </td>
    <td>
        <form action="{{ route('print', $product->id) }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-sm btn-primary px-3 py-1.5" style="border-radius: 6px; font-weight: 600; font-size: 13px; display: inline-flex; align-items: center; gap: 5px;">
                <i class="las la-print"></i> Show Label
            </button>
        </form>
    </td>
</tr>
