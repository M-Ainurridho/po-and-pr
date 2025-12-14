<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Purchase Requisition</title>

    <!-- Boxicons v2 -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-xs bg-red-200/75 p-2">
    <!-- Vendor Info, Item Weight, Purchase Order Number -->
    <div class="top flex justify-between">
        <div class="vendor w-1/4">
            <div class="flex flex-col gap-y-0.5">
                <div class="flex justify-between">
                    <label for="vendor">Requester</label>
                    <div class="w-1/2 flex gap-x-1">
                        <select id="access" name="access" class="border border-gray-400 bg-white rounded-xs w-1/2">
                            <option value="user" selected>User</option>
                        </select>
                        <input type="text" id="it-code" name="it-code" class="border border-gray-400 bg-white rounded-xs w-1/2" value="IT-502">
                    </div>
                </div>
                <div class="flex justify-between">
                    <label for="requester-name">Requester Name</label>
                    <input type="text" id="requester-name" name="requester-name" class="border border-gray-400 bg-white rounded-xs min-w-1/2" value="Yonnatan">
                </div>
                <div class="flex justify-between">
                    <label for="branch">Branch</label>
                    <select name="branch" id="" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                        <option value="main">Main</option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="flex justify-between">
                    <label for="department">Department</label>
                    <select name="department" id="" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                        <option value="it">IT Department</option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="flex items-center gap-x-1">
                    <input type="checkbox" id="email" name="email" class="border rounded-xs">Send E-mail if PO or GRPO is added
                </div>
                <div class="flex justify-between">
                    <label for="email">E-mail Address</label>
                    <input type="text" id="email" name="email" class="border border-gray-400 bg-gray-200 rounded-xs min-w-1/2">
                </div>
            </div>
        </div>

        <div class="po-details w-1/3 flex justify-end">
            <div class="w-2/3 flex flex-col gap-y-0.5">
                <div class="flex justify-between">
                    <div class="w-1/2 flex gap-1 justify-between">
                        <label for="po-no">No.</label>
                        <input type="text" id="po-no" class="border border-gray-400 bg-gray-200 rounded-xs w-20 me-1" value="PO-25" disabled>
                    </div>
                    <input type="text" class="border border-gray-400 bg-gray-200 rounded-xs min-w-1/2" value="2504443" disabled>
                </div>
                <div class="flex justify-between">
                    <label for="status">Status</label>
                    <input type="text" id="status" name="status" class="border border-gray-400 bg-gray-200 rounded-xs min-w-1/2" value="Open" disabled>
                </div>
                <div class="flex justify-between">
                    <label for="date-req-approval">Date Request Approval</label>
                    <input type="date" id="date-req-approval" name="date-req-approval" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
                <div class="flex justify-between">
                    <label for="valid-until">Valid Until</label>
                    <input type="date" id="valid-until" name="valid-until" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
                <div class="flex justify-between">
                    <label for="document-date">Document Date</label>
                    <input type="date" id="document-date" name="document-date" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
                <div class="flex justify-between">
                    <label for="required-date">Required Date</label>
                    <input type="date" id="required-date" name="required-date" class="border border-gray-400 bg-white rounded-xs min-w-1/2">
                </div>
            </div>

        </div>
    </div>

    <div class="middle mt-5">
        <div class="flex ms-5">
            <button class="border border-b-0 border-gray-400 bg-white px-10">Contents</button>
            <button class="border border-b-0 border-gray-400 bg-gray-200 px-10">Attachments</button>
        </div>

        <div class="w-full border border-gray-400 px-2 py-4">
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
            <div class="w-full overflow-x-auto">
                <table class="table-auto mt-1 bg-white">
                    <thead>
                        <tr class="bg-gray-200">
                            <td class="border border-gray-400 px-1 truncate">#</td>
                            <td class="border border-gray-400 px-1 truncate">Item No.</td>
                            <td class="border border-gray-400 px-1 truncate">Item Description</td>
                            <td class="border border-gray-400 px-1 truncate">Item Details</td>
                            <td class="border border-gray-400 px-1 truncate">Vendor</td>
                            <td class="border border-gray-400 px-1 truncate">Required Qty.</td>
                            <td class="border border-gray-400 px-1 truncate">Allocation</td>
                            <td class="border border-gray-400 px-1 truncate">UoM Name</td>
                            <td class="border border-gray-400 px-1 truncate">Project</td>
                            <td class="border border-gray-400 px-1 truncate">APP Budgeting</td>
                            <td class="border border-gray-400 px-1 truncate">Divisi</td>
                            <td class="border border-gray-400 px-1 truncate">Department</td>
                            <td class="border border-gray-400 px-1 truncate">Discount %</td>
                            <td class="border border-gray-400 px-1 truncate">Info Price</td>
                            <td class="border border-gray-400 px-1 truncate">Remarks</td>
                            <td class="border border-gray-400 px-1 truncate">Required Date</td>
                            <td class="border border-gray-400 px-1 truncate">Tax Code</td>
                            <td class="border border-gray-400 px-1 truncate">Total (LC)</td>
                            <td class="border border-gray-400 px-1 truncate">Reorder Point</td>
                            <td class="border border-gray-400 px-1 truncate">Lot No.</td>
                            <td class="border border-gray-400 px-1 truncate">Maximum Inventory</td>
                            <td class="border border-gray-400 px-1 truncate">Comodity</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-400 px-1 truncate bg-gray-200">1</td>
                            <td class="border border-gray-400 px-1 truncate">INVENTORY</td>
                            <td class="border border-gray-400 px-1 truncate">CONVERTER HDMI TO FO</td>
                            <td class="border border-gray-400 px-1 truncate">CONVERTER HDMI TO FO</td>
                            <td class="border border-gray-400 px-1 truncate text-end">2</td>
                            <td class="border border-gray-400 px-1 truncate">Ea</td>
                            <td class="border border-gray-400 px-1 truncate">No</td>
                            <td class="border border-gray-400 px-1 truncate text-end">IDR 850.000,00</td>
                            <td class="border border-gray-400 px-1 truncate text-end">0.00</td>
                            <td class="border border-gray-400 px-1 truncate">IN0%</td>
                            <td class="border border-gray-400 px-1 truncate text-end">IDR 1.750.000,00</td>
                            <td class="border border-gray-400 px-1 truncate text-end"></td>
                            <td class="border border-gray-400 px-1 truncate text-end"></td>
                            <td class="border border-gray-400 px-1 truncate text-end"></td>
                            <td class="border border-gray-400 px-1 truncate text-end"></td>
                            <td class="border border-gray-400 px-1 truncate text-end"></td>
                            <td class="border border-gray-400 px-1 truncate text-end"></td>
                            <td class="border border-gray-400 px-1 truncate text-end"></td>
                            <td class="border border-gray-400 px-1 truncate text-end"></td>
                            <td class="border border-gray-400 px-1 truncate text-end"></td>
                            <td class="border border-gray-400 px-1 truncate text-end"></td>
                            <td class="border border-gray-400 px-1 truncate text-end"></td>
                        </tr>

                        @for ($i = 0; $i <= 15; $i++)
                            <tr>
                            <td class="border border-gray-400 h-4 bg-gray-200"></td>
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
            </div>
        </div>
    </div>
    </div>

    <div class="bottom mt-1 flex justify-between">
        <!-- MODAL BUTTON -->
        <button id="modal-btn" class="bg-neutral-100 border border-neutral-200 shadow p-2 rounded hover:shadow hover:shadow-black duration-100">Klik Sementara untuk modal</button>
    </div>


    <!-- MODAL -->
    <div id="modal" class="hidden fixed top-0 left-0 right-0 bottom-0">
        <div class="flex items-center justify-center h-full px-20">
            <div class="bg-white p-1 w-full border-t-4 border-t-blue-500">
                <header class="flex justify-between items-center p-1">
                    <h4>List of Items</h4>
                    <i id="modal-close" class='bx bx-x text-lg cursor-pointer'></i>
                </header>

                <div class="bg-red-100 p-1 h-auto">
                    <div class="text-[10px] flex gap-x-4 items-center my-1">
                        <p>Find</p>
                        <input type="text" class="border border-gray-400 rounded-xs w-40 bg-white focus:outline-none">
                    </div>

                    <!-- Table untuk detail barang -->
                    <div class="w-full h-96 overflow-auto">
                        <table class="table-auto mt-1 bg-white">
                            <thead>
                                <tr class="bg-gray-200">
                                    <td class="border border-gray-400 px-1 truncate">#</td>
                                    <td class="border border-gray-400 px-1 truncate">Item No.</td>
                                    <td class="border border-gray-400 px-1 truncate">Item Description</td>
                                    <td class="border border-gray-400 px-1 truncate">Item Details</td>
                                    <td class="border border-gray-400 px-1 truncate">Vendor</td>
                                    <td class="border border-gray-400 px-1 truncate">Required Qty.</td>
                                    <td class="border border-gray-400 px-1 truncate">Allocation</td>
                                    <td class="border border-gray-400 px-1 truncate">UoM Name</td>
                                    <td class="border border-gray-400 px-1 truncate">Project</td>
                                    <td class="border border-gray-400 px-1 truncate">APP Budgeting</td>
                                    <td class="border border-gray-400 px-1 truncate">Divisi</td>
                                    <td class="border border-gray-400 px-1 truncate">Department</td>
                                    <td class="border border-gray-400 px-1 truncate">Discount %</td>
                                    <td class="border border-gray-400 px-1 truncate">Info Price</td>
                                    <td class="border border-gray-400 px-1 truncate">Remarks</td>
                                    <td class="border border-gray-400 px-1 truncate">Required Date</td>
                                    <td class="border border-gray-400 px-1 truncate">Tax Code</td>
                                    <td class="border border-gray-400 px-1 truncate">Total (LC)</td>
                                    <td class="border border-gray-400 px-1 truncate">Reorder Point</td>
                                    <td class="border border-gray-400 px-1 truncate">Lot No.</td>
                                    <td class="border border-gray-400 px-1 truncate">Maximum Inventory</td>
                                    <td class="border border-gray-400 px-1 truncate">Comodity</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-400 px-1 truncate bg-gray-200">1</td>
                                    <td class="border border-gray-400 px-1 truncate">INVENTORY</td>
                                    <td class="border border-gray-400 px-1 truncate">CONVERTER HDMI TO FO</td>
                                    <td class="border border-gray-400 px-1 truncate">CONVERTER HDMI TO FO</td>
                                    <td class="border border-gray-400 px-1 truncate text-end">2</td>
                                    <td class="border border-gray-400 px-1 truncate">Ea</td>
                                    <td class="border border-gray-400 px-1 truncate">No</td>
                                    <td class="border border-gray-400 px-1 truncate text-end">IDR 850.000,00</td>
                                    <td class="border border-gray-400 px-1 truncate text-end">0.00</td>
                                    <td class="border border-gray-400 px-1 truncate">IN0%</td>
                                    <td class="border border-gray-400 px-1 truncate text-end">IDR 1.750.000,00</td>
                                    <td class="border border-gray-400 px-1 truncate text-end"></td>
                                    <td class="border border-gray-400 px-1 truncate text-end"></td>
                                    <td class="border border-gray-400 px-1 truncate text-end"></td>
                                    <td class="border border-gray-400 px-1 truncate text-end"></td>
                                    <td class="border border-gray-400 px-1 truncate text-end"></td>
                                    <td class="border border-gray-400 px-1 truncate text-end"></td>
                                    <td class="border border-gray-400 px-1 truncate text-end"></td>
                                    <td class="border border-gray-400 px-1 truncate text-end"></td>
                                    <td class="border border-gray-400 px-1 truncate text-end"></td>
                                    <td class="border border-gray-400 px-1 truncate text-end"></td>
                                    <td class="border border-gray-400 px-1 truncate text-end"></td>
                                </tr>

                                @for ($i = 0; $i <= 100; $i++)
                                    <tr>
                                    <td class="border border-gray-400 h-4 bg-gray-200"></td>
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
                    </div>

                    <div class="mt-2">
                        <button type="button" class="bg-blue-500 text-white p-1 px-5 rounded-xs me-1">Choose</button>
                        <button type="button" class="bg-gray-600 text-white p-1 px-5 rounded-xs">Cancel</button>
                        <button type="button" class="bg-gray-600 text-white p-1 px-5 rounded-xs">New</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        // Button untuk mentriger modal agar muncul
        const modalBtn = document.querySelector("#modal-btn");
        modalBtn.addEventListener("click", () => {
            const modal = document.querySelector("#modal");
            modal.classList.toggle("hidden");
        });

        // Button untuk menutup modal
        const btnClose = document.querySelector("#modal-close");
        btnClose.addEventListener("click", () => {
            const modal = document.querySelector("#modal");
            modal.classList.toggle("hidden");
        });
    </script>
</body>

</html>