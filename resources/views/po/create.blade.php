<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Purchase Order</title>

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-xs bg-red-200/75 p-2">
    <!-- Vendor Info, Item Weight, Purchase Order Number -->
    <div class="top flex justify-between">
        <div class="vendor w-1/3">
            <div class="w-2/3 flex flex-col gap-y-0.5">
                <div class="flex justify-between">
                    <label for="vendor">Vendor</label>
                    <input type="text" id="vendor" name="vendor" class="border border-gray-400 bg-gray-200 rounded-xs min-w-1/2" value="VLO001044" disabled>
                </div>
                <div class="flex justify-between">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="border border-gray-400 bg-gray-200 rounded-xs min-w-1/2" value="SHOPEE" disabled>
                </div>
                <div class="flex justify-between relative">
                    <label for="cp">Contact Person</label>
                    <select name="currency-options" id="" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <button class="w-4 h-4 border border-gray-400 bg-gray-200 rounded-full text-[8px] absolute -right-4 top-0.5">II</button>
                </div>
                <div class="flex justify-between">
                    <label for="vendor-ref">Vendor Ref. No.</label>
                    <input type="text" id="vendor-ref" name="vendor-ref" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>

                <select name="currency-options" id="" class="border border-gray-400 bg-white rounded-xs w-fit">
                    <option value="local">Local Currency</option>
                    <option value="foreign">Foreign Currency</option>
                </select>
            </div>
        </div>

        <div class="dimensions w-1/3 flex justify-center">
            <div class="w-2/3 flex flex-col gap-y-1">
                <div class="flex justify-between">
                    <label for="origin">Origin</label>
                    <input type="text" id="origin" name="origin" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
                <div class="flex justify-between">
                    <label for="term">Term</label>
                    <input type="text" id="term" name="term" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
                <div class="flex justify-between">
                    <label for="shipping-method">Shipping Method</label>
                    <select name="currency-options" id="" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="flex justify-between">
                    <label for="weight">Weight</label>
                    <input type="text" id="weight" name="weight" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
                <div class="flex justify-between">
                    <label for="dimension">Dimension</label>
                    <input type="text" id="dimension" name="dimension" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
            </div>
        </div>

        <div class="po-details w-1/3 flex justify-end">
            <div class="w-2/3 flex flex-col gap-y-0.5">
                <div class="flex justify-between">
                    <div class="w-1/2 flex gap-1 justify-between">
                        <label for="origin">No.</label>
                        <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs w-20 me-1" value="PO-25" disabled>
                    </div>
                    <div class="w-1/2 flex gap-1">
                        <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs w-2/3" value="2504443" disabled>
                        <span>-</span>
                        <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs w-1/3" value="0" disabled>
                    </div>
                </div>
                <div class="flex justify-between">
                    <label for="status">Status</label>
                    <input type="text" id="status" name="status" class="border border-gray-400 bg-gray-200 rounded-xs min-w-1/2" value="Open" disabled>
                </div>
                <div class="flex justify-between">
                    <label for="post-date">Posting Date</label>
                    <input type="date" id="post-date" name="post-date" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
                <div class="flex justify-between">
                    <label for="delivery-date">Delivery Date</label>
                    <input type="date" id="delivery-date" name="delivery-date" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
                <div class="flex justify-between">
                    <label for="document-date">Document Date</label>
                    <input type="date" id="document-date" name="document-date" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
                <div class="flex justify-between">
                    <label for="acquisition-date">Acquisition PR Date</label>
                    <input type="date" id="acquisition-date" name="acquisition-date" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
            </div>

        </div>
    </div>

    <div class="middle mt-5">
        <div class="flex ms-5">
            <button class="border border-gray-400 bg-white px-10">Contents</button>
            <button class="border border-gray-400 bg-gray-200 px-10">Logistics</button>
            <button class="border border-gray-400 bg-gray-200 px-10">Accounting</button>
            <button class="border border-gray-400 bg-gray-200 px-10">Attachments</button>
        </div>

        <fieldset class="border border-gray-400 px-2 py-4">
            <div class="flex justify-between">
                <div class="flex gap-x-6">
                    <label for="item-service-type">Item/Service Type</label>
                    <input type="text" id="item-service-type" class="border border-gray-400 bg-gray-200 rounded-xs" disabled value="Item">
                </div>
                <div class="flex gap-x-6">
                    <label for="summary-type">Summary Type</label>
                    <select name="summary-type" id="summary-type" class="border border-gray-400 bg-white rounded-xs">
                        <option value="no-summary">No Summary</option>
                    </select>
                </div>
            </div>

            <!-- Table untuk detail barang -->
            <table class="table-auto w-full mt-1 bg-white">
                <thead>
                    <tr class="bg-gray-200">
                        <td class="border border-gray-400 px-1">#</td>
                        <td class="border border-gray-400 px-1">Item No.</td>
                        <td class="border border-gray-400 px-1">Item Description</td>
                        <td class="border border-gray-400 px-1">Item Details</td>
                        <td class="border border-gray-400 px-1">Quantity</td>
                        <td class="border border-gray-400 px-1">UoM Name</td>
                        <td class="border border-gray-400 px-1">Inventory UoM</td>
                        <td class="border border-gray-400 px-1">Unit Price</td>
                        <td class="border border-gray-400 px-1">Discount %</td>
                        <td class="border border-gray-400 px-1">Tax Code</td>
                        <td class="border border-gray-400 px-1">Total (LC)</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $index => $data)
                    <tr>
                        <td class="border border-gray-400 px-1">{{ $index+1 }}</td>
                        <td class="border border-gray-400 px-1">{{ $data['item_no'] }}</td>
                        <td class="border border-gray-400 px-1">{{ $data['item_desc'] }}</td>
                        <td class="border border-gray-400 px-1">{{ $data['item_detail'] }}</td>
                        <td class="border border-gray-400 px-1 text-end">{{ $data['quantity'] }}</td>
                        <td class="border border-gray-400 px-1">{{ $data['uom_name'] }}</td>
                        <td class="border border-gray-400 px-1">{{ $data['inventory_uom'] }}</td>
                        <td class="border border-gray-400 px-1 text-end">IDR {{ $data['unit_price'] }}</td>
                        <td class="border border-gray-400 px-1 text-end">{{ $data['discount'] }}</td>
                        <td class="border border-gray-400 px-1">{{ $data['tax_code'] }}</td>
                        <td class="border border-gray-400 px-1 text-end">IDR {{ $data['total_lc'] }}</td>
                    </tr>
                    @endforeach

                    @for ($i = 0; $i <= 5; $i++)
                        <tr>
                        <td class="border border-gray-400 h-4"></td>
                        <td class="border border-gray-400 h-4"></td>
                        <td class="border border-gray-400 h-4"></td>
                        <td class="border border-gray-400 h-4"></td>
                        <td class="border border-gray-400 h-4"></td>
                        <td class="border border-gray-400 h-4"></td>
                        <td class="border border-gray-400 h-4"></td>
                        <td class="border border-gray-400 h-4"></td>
                        <td class="border border-gray-400 h-4"></td>
                        <td class="border border-gray-400 h-4"></td>
                        <td class="border border-gray-400 h-4"></td>
                        </tr>
                        @endfor
                </tbody>
            </table>
        </fieldset>
    </div>

    <div class="bottom mt-1 flex justify-between">
        <div class="w-1/5">
            <div class="flex flex-col gap-[1px]">
                <div class="flex justify-between">
                    <p><strong>Requester</strong></p>
                    <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs" value="Yonnatan" disabled readonly>
                </div>

                <div class="flex justify-between">
                    <p>Owner</p>
                    <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs" value="Azzahra, Gisha" disabled readonly>
                </div>
            </div>

            <div class="flex justify-between mt-18">
                <p>Remarks</p>
                <textarea name="" id="" class="border border-gray-400 bg-white" rows="5" style="resize: none;"></textarea>
            </div>

            <div class="mt-2">
                <button type="button" class="bg-blue-500 text-white p-1 px-10 rounded-xs me-1">OK</button>
                <button type="button" class="bg-gray-600 text-white p-1 px-10 rounded-xs">Cancel</button>
            </div>
        </div>

        <div class="w-1/5 flex flex-col justify-between">
            <div class="flex flex-col gap-[1px]">
                <div class="flex justify-between">
                    <p>Total Before Discount</p>
                    <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs text-end pe1" value="IDR 1,750,000.00" disabled readonly>
                </div>
                <div class="flex justify-between">
                    <p>Discount</p>
                    <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs text-end pe1" disabled readonly>
                </div>
                <div class="flex justify-between">
                    <p>Freight</p>
                    <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs text-end pe1" disabled readonly>
                </div>
                <div class="flex justify-between">
                    <p>Rounding</p>
                    <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs text-end pe1" disabled readonly>
                </div>
                <div class="flex justify-between">
                    <p>Tax</p>
                    <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs text-end pe1" disabled readonly>
                </div>
                <div class="flex justify-between">
                    <p>Tax Payment Due</p>
                    <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs text-end pe1" disabled readonly>
                </div>
            </div>

            <div class="text-end">
                <button class="bg-neutral-200 text-white p-1 px-10 rounded-xs me-1" disabled>Copy From</button>
                <button class="bg-gray-600 text-white p-1 px-10 rounded-xs">Copy To</button>
            </div>
        </div>
    </div>
</body>

</html>