<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Barcode Print</title>
    <link rel="icon" href="{{ asset('assets\icon\logovidyagxp.png.png') }}" type="image/x-icon">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <style type="text/css">
        body {
            font-size: small;
            line-height: 1.4;

        }

        p {
            margin: 0;
        }

        .performance-facts {
            font-size: 12px;
            /* border: 1px 1px 0px 1px solid black; */
            /* margin: 30px; */
            float: left;
            width: 100%;
            height: 100%
            ;

            /* padding: 0.5rem; */

            table {
                border-collapse: collapse;
            }
        }

        .performance-facts__title {
            font-weight: bold;
            font-size: 1rem;
            margin: 0 0 0.25rem 0;
        }

        .performance-facts__header {
            border-top: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
            width: 100%;
            height: 70px;
            padding-bottom: 2px;

            p {
                margin: 0;
            }
        }

        .performance-facts__table {
            width: 100%;




        }


        .performance-facts__table--small {
            @extend .performance-facts__table;
            border-bottom: 1px solid #999;

        }

        .text-center {
            text-align: center;
        }

        .thick-end {
            border-bottom: 10px solid black;
        }

        .thin-end {
            border-bottom: 1px solid black;
        }

        .logo {
            height: 130px;
            width: 130px;
        }

        .logo-img img {
            height: 70px;
            width: 70px;

        }

        .heading-header {
            position: absolute;
            top: 4%;
            left: 22%;
            text-align: center;
            font-weight: bold;
            font-size: 12px;
            color: rgb(11, 5, 176)
        }

        .logo-image {
            position: absolute;
            top: 0%;
            left: 78%;
        }

        .border {
            border-bottom: 2px solid;
        }

        /* ----------------fghfgh--------------- */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

         .logo img {
            height: 80px;
            width: auto;
            margin-bottom: -10px;

        }

        .heading {
            flex-grow: 1;
            text-align: center;
            font-weight: bold;
            font-size: 30px;
            margin-bottom: -10px;
        }
        .info,
        .services,
        .total {
            margin-bottom: 20px;
        }

        .info table,
        .services table {
            width: 100%;
            border-collapse: collapse;
        }

        .info table td,
        .services table td {
            padding: 6px;
            border-bottom: 1px solid #5f5c5c;
        }

        .info tr {
            padding-left: 10px;
        }
        .label-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .label-header img {
            max-width: 100px;
            margin-bottom: 10px;
        }

        .label-container {
            width: 665px;
            margin: auto;
            padding: 8px; /* Adjust as needed */
            /* padding: 0px !important; */
            /* margin-top: 10px; */
            /* margin-bottom: 40px; */

            background-color: #ffffff;
            page-break-after: always; /* New rule for printing */
        }

        .label-table {
            width: 100%;
            border-collapse: collapse;
        }

        .label-table th,
        .label-table td {
            border: 2px solid #000;
            padding: 8px;
            text-align: left;
            font-size: 14px;
        }
                .label-table th {
            background-color: #fefeff;
        }




@media print {
    .label-container {
        page-break-after: always; /* Ensure it works in print mode */
    }
}

.image_head {
    display: flex;
    margin-bottom: -30px;

    justify-content: space-between;
    align-items: center;
    padding: 10px;
    margin-left: 8px;
}
.logo {
    flex: 0 0 auto; /* Do not grow or shrink */
}

.heading {
    flex-grow: 1;
    text-align: center;
    font-weight: bold;
    font-size: 20px;
}

/* Ensure the logo images are correctly sized and aligned */
.logo img {
    height: 110px; /* Adjust based on your needs */
    width: auto;
    margin-left:15px;
    margin-top: 10px;
}
.logoV img {
    height: 50px; /* Adjust based on your needs */
    width: 130px;
    margin-left:15px;
}
#custom-padding{
    padding:none;
    /* flex-shrink: 2; */
}
    </style>
</head>

<body>


    <section class="performance-facts">
            <div class="label-container">
           <button onclick="printLabel()" class="btn btn-primary" id="printButton">Print</button>

            <script>
                            function printLabel() {
                                window.print();
                            }

                            // Add a media query for print to hide the print button
                            window.onbeforeprint = function() {
                                document.getElementById('printButton').style.display = 'none';
                            };
                            window.onafterprint = function() {
                                document.getElementById('printButton').style.display = 'block';
                            };
            </script>

        <style>
@media print {
    #printButton {
        display: none;
    }
}
</style>


    <section class="performance-facts">
          <div class="label-container">
                @foreach ($product->containers as $container)
            {{-- <div class="mheadall">
                   <div class="image_head">
                    <div class="logo">
                        <img src="http://www.agio-pharma.com/wp-content/uploads/2019/10/logo-agio.png" alt="VidhyaGxp Logo">
                    </div>
                    <div  class="heading">
                    Warehouse and Labeling Management
                    </div>
                    <div class="logoV">
                        <img src="https://vidyagxp.com/vidhyaGxp.png" alt="Other Logo">
                    </div>
                </div>
            </div> --}}

                <div class="label-container">

                    <table class="label-table">
                        <tr>
                            {{--  <td colspan="1" style="width: 23% " ><div class="logo" id=custom-padding>
                                <img src="/assets/barcode/New_logo-agio.png" alt="VidhyaGxp Logo">
                            </div> </td>  --}}
                            <td colspan="2" > <div class="heading">
                    Warehouse and Labeling Management
                    </div> </td>
                            <td  colspan="1"> <div class="logoV">
                                <img src="/assets/barcode/New_vidyaGxp_logo.png" alt="Other Logo">
                            </div> </td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong>Id :&nbsp;</strong> {{ $product->id }}</td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong>Batch Status :&nbsp;<strong>  {{ $product->batch_status }} </td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong>Warehouse Id :&nbsp;<strong>  {{ $product->warehouse_id }} </td>
                        </tr> <tr>
                            <td colspan="4"><strong>Aisle Id :&nbsp;<strong>  {{ $product->aisle_id }} </td>
                        </tr> <tr>
                            <td colspan="4"><strong>Rack Id :&nbsp;<strong>  {{ $product->rackid }} </td>
                        </tr> <tr>
                            <td colspan="4"><strong>Bin Id :&nbsp;<strong>  {{ $product->binid }} </td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Item Code :&nbsp;</strong>{{ $product->item_code }}</td>
                            <td colspan="2"><strong>Item Name :&nbsp;</strong> {{ $product->item_name}}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Location Code :&nbsp;</strong>{{ $product->location_code }}</td>
                            <td colspan="2"><strong>Store :&nbsp;</strong> {{ $product->store }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>GRN Batch Id :&nbsp;</strong> {{ $product->grn_batch_id }}</td>
                            <td colspan="2"><strong>ARN Id :&nbsp;</strong> {{ $product->arn_id }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Total Container :&nbsp;</strong>{{ $product->container_no }}</td>
                            <td colspan="2"><strong>Container Status :&nbsp;</strong>{{ $container->status }}</td>
                        </tr>

                        <tr>
                            {{-- <td><strong> Total Weight :&nbsp;</strong></td> --}}
                            {{-- <td><strong>Unit :&nbsp;</strong> fdg</td> --}}
                            <td colspan="2"><strong>weight Per Package :&nbsp;</strong>{{ $product->weightPerPackage }}</td>

                            <td colspan="2"><strong>Quantity of Product :&nbsp;</strong>{{ $product->quantity_of_product }}</td>
                        </tr>
                        <tr>
                        <td  colspan="2"><strong>Unit :&nbsp;</strong>{{ $product->unit }}</td>

                            <td colspan="2"><strong>Total Weight :&nbsp;</strong> {{ $product->totalWeight }}</td>
                        </tr>

                        <tr>
                            <td colspan="4"><strong>Brand Name :&nbsp;</strong>{{ $product->brand_name }}</td>

                        </tr>

                        <tr>
                            <td colspan="4"><strong>Manufacturer :&nbsp;</strong> {{ $product->manufacturer }}</td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong>Supplier :&nbsp;</strong>{{ $product->supplier }}</td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong>Description :&nbsp;</strong>{{ $product->item_description }}</td>
                        </tr>

                        <tr>
                            <td colspan="2"><strong>Batch/No :&nbsp;</strong> {{ $product->batch_no }}</td>
                            <td colspan="2"><strong>UOM :&nbsp;</strong>{{ $product->unit }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Mfg.DT. :&nbsp;</strong>{{ $product->mfg_dt }}</td>
                            <td colspan="2"><strong>Exp.DT. :&nbsp;</strong>{{ $product->exp_dt }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Container no :&nbsp;</strong>{{ $loop->index + 1 }} /{{ $product->container_no }}</td>
                            <td colspan="2"><strong>Pack. Size :&nbsp;</strong>{{ $product->pack_size }}</td>
                        </tr>
                        {{-- <tr>
                            <td><strong>Manufacturer :&nbsp;</strong> 40</td>
                            <td><strong>Supplier :&nbsp;</strong> 2000.00 KG</td>
                        </tr> --}}
                        <tr>
                            <td colspan="2"><strong>GRN No :&nbsp;</strong>{{ $product->grn_no }}</td>
                            <td colspan="2"><strong>GRN Date :&nbsp;</strong> {{ $product->grn_date }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><strong>Format No :&nbsp;</strong>{{ $product->format_no }} </td>
                            <td colspan="2"><strong>Rec Qty :&nbsp;</strong>{{ $product->rec_qty }}</td>
                        </tr>

                        <tr>
                                <td colspan="4" style="width: 150px; height: 50px;">
                                <strong>Barcode :&nbsp;</strong>
                                <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($product->bar_code, 'C39') }}" alt="barcode"/>
                        </td>

                        </tr>
                    </table>
                    <br>
                    <br>
                </div>
    @endforeach
</section>
</body>

</html>
