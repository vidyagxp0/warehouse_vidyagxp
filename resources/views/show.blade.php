@extends('admin.layouts.app')
@section('panel')
<style>
    /* Gradient Background for the main container */
    .show-barcode-container {
        background: #f8fafc;
        min-height: calc(100vh - 120px);
        padding: 30px 20px;
    }

    /* Premium Header Card */
    .header-card {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: white;
        border-radius: 12px;
        padding: 24px 32px;
        margin-bottom: 24px;
        box-shadow: 0 4px 20px rgba(15, 23, 42, 0.08);
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }
    .header-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 60%);
        pointer-events: none;
    }
    .header-title-section {
        flex-grow: 1;
    }
    .header-title-section h1 {
        font-size: 24px;
        font-weight: 700;
        margin: 0;
        letter-spacing: 0.5px;
        color: #f8fafc;
    }
    .header-title-section p {
        margin: 6px 0 0 0;
        opacity: 0.8;
        font-size: 13px;
        color: #cbd5e1;
    }
    .header-logo-section {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 180px;
    }
    .header-logo-section img {
        height: 180px;
        width: auto;
        object-fit: contain;
        filter: drop-shadow(0 2px 10px rgba(255, 255, 255, 0.2));
    }

    /* Main Content Card */
    .content-card {
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.03);
        padding: 24px;
        margin-bottom: 24px;
        border: 1px solid #e2e8f0;
    }
    
    .card-header-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
        flex-wrap: wrap;
        gap: 16px;
    }
    
    .card-header-actions h3 {
        font-size: 18px;
        font-weight: 600;
        color: #0f172a;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .card-header-actions h3::before {
        content: '';
        display: inline-block;
        width: 4px;
        height: 18px;
        background: #3b82f6;
        border-radius: 2px;
    }

    /* Scanner Input Box */
    .scanner-box {
        display: flex;
        align-items: center;
        gap: 12px;
        background: #f1f5f9;
        border: 1px solid #cbd5e1;
        padding: 8px 16px;
        border-radius: 8px;
        transition: all 0.25s ease;
    }
    .scanner-box:focus-within {
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        background: white;
    }
    .scanner-box label {
        font-size: 13px;
        font-weight: 700;
        color: #475569;
        margin: 0;
        white-space: nowrap;
    }
    .scanner-box input {
        border: none;
        background: transparent;
        outline: none;
        color: #0f172a;
        font-weight: 600;
        font-size: 14px;
        width: 220px;
    }

    /* Table Container & Scrollbar Styling */
    .table-container {
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #e2e8f0;
        box-shadow: 0 1px 3px rgba(0,0,0,0.01);
    }
    .table_responsive {
        width: 100%;
        max-height: 500px;
        overflow-x: auto;
        overflow-y: auto;
    }
    
    /* Elegant Custom Scrollbar */
    .table_responsive::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }
    .table_responsive::-webkit-scrollbar-track {
        background: #f8fafc;
    }
    .table_responsive::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 4px;
    }
    .table_responsive::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }

    /* Modern Table Styling */
    table.custom-table {
        width: 100%;
        border-collapse: collapse;
        margin: 0;
    }
    table.custom-table th {
        background: #f8fafc;
        color: #475569;
        font-weight: 600;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 14px 16px;
        border-bottom: 2px solid #e2e8f0;
        white-space: nowrap;
        position: sticky;
        top: 0;
        z-index: 10;
        box-shadow: inset 0 -1px 0 #e2e8f0;
    }
    table.custom-table td {
        padding: 14px 16px;
        border-bottom: 1px solid #e2e8f0;
        color: #334155;
        font-size: 13.5px;
        vertical-align: middle;
        white-space: nowrap;
    }
    table.custom-table tbody tr {
        transition: background-color 0.2s ease;
    }
    table.custom-table tbody tr:hover {
        background-color: #f8fafc;
    }
</style>

<div class="show-barcode-container">
    <div class="container-fluid">
        <!-- Header Section -->
        <div class="header-card">
            <div class="header-title-section">
                <h1>Warehouse and Labeling Management</h1>
                <p>Verify, scan, and print labels instantly</p>
            </div>
            <div class="header-logo-section">
                <img src="https://vidyagxp.com/vidhyaGxp.png" alt="VidyaGxP Logo">
            </div>
        </div>

        <!-- Table and Scanner Section -->
        <div class="content-card">
            <div class="card-header-actions">
                <div>
                    <h3>List of Products</h3>
                </div>
                <div class="scanner-box">
                    <label for="QrScanner"><i class="las la-barcode fs-16 align-middle mr-1"></i> Enter Barcode No.</label>
                    <input type="text" name="qr_scanner" id="QrScanner" placeholder="Scan/Type and Press Enter..." autofocus />
                </div>
            </div>

            <div class="table-container">
                <div class="table_responsive">
                    <table class="table custom-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Batch Status</th>
                                <th>Item Code</th>
                                <th>Item Name</th>
                                <th>Location Code</th>
                                <th>Store</th>
                                <th>GRN Batch Id</th>
                                <th>ARN Id</th>
                                <th>Total Container</th>
                                <th>Brand Name</th>
                                <th>Unit</th>
                                <th>Quantity</th>
                                <th>Weight Per Package</th>
                                <th>Total Weight</th>
                                <th>Item Description</th>
                                <th>Batch/No:</th>
                                <th>UOM</th>
                                <th>Mfg. DT</th>
                                <th>Exp. DT</th>
                                <th>Pack. Size</th>
                                <th>Container No.</th>
                                <th>Rec Qty</th>
                                <th>Manufacturer</th>
                                <th>Supplier</th>
                                <th>GRN No.</th>
                                <th>GRN Date</th>
                                <th>Format No.</th>
                                <th style="min-width: 220px; text-align: center;">Bar-Code</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="productList">
                            @foreach($products as $product)
                                @include('comps.barcode_row', ['product' => $product])
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"></script>
<script>
    $(document).ready(function() {
        $('#QrScanner').change(async function() {
            let barCode = $(this).val();
            if(!barCode.trim()) return;

            $(this).attr('disabled', true);

            const data = { barCode: barCode };

            try {
                console.log('Scanning barcode:', data);
                const res = await axios.post("{{ url('/api/product/barcode') }}", data);
                if (res.data.status === 'ok') {
                    $('#productList').prepend(res.data.body);
                    // Add highlight animation effect to the first row
                    $('#productList tr:first').css('background-color', '#eff6ff');
                    setTimeout(() => {
                        $('#productList tr:first').css('background-color', '');
                    }, 2000);
                } else {
                    alert(res.data.message || 'Product not found');
                }
            } catch (err) {
                alert(err.message);
                console.log('error', err.message);
            }

            $(this).attr('disabled', false);
            $(this).val('');
            $(this).focus();
        });
    });
</script>
@endsection
