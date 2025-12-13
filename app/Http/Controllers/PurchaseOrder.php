<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseOrder extends Controller
{
    /**
     * index
     * 
     * Halaman akan menampilkan semua list purchase order
     */
    public function index() {}

    /**
     * create
     * 
     * Halaman untuk membuat purchase order baru
     */
    public function create()
    {
        $datas = [
            [
                "item_no" => "OFFICE INVENTORY",
                "item_desc" => "Convenrter HDMI to FO",
                "item_detail" => "Convenrter HDMI to FO",
                "quantity" => 2,
                "uom_name" => "Ea",
                "inventory_uom" => "No",
                "unit_price" => "850.000,00",
                "discount" => "0.00",
                "tax_code" => "IN0%",
                "total_lc" => "1.870.000,00"
            ],
            [
                "item_no" => "JS. PENGIRIMAN",
                "item_desc" => "JS. PENGIRIMAN",
                "item_detail" => "",
                "quantity" => 1,
                "uom_name" => "",
                "inventory_uom" => "No",
                "unit_price" => "31.500,00",
                "discount" => "0.00",
                "tax_code" => "IN0%",
                "total_lc" => "31.500,00"
            ],
            [
                "item_no" => "JS. ASURANSI PENGIRIMAN",
                "item_desc" => "JS. ASURANSI PENGIRIMAN",
                "item_detail" => "",
                "quantity" => 1,
                "uom_name" => "",
                "inventory_uom" => "No",
                "unit_price" => "17.600,00",
                "discount" => "0.00",
                "tax_code" => "IN0%",
                "total_lc" => "17.600,00"
            ],
            [
                "item_no" => "JS. LAYANAN",
                "item_desc" => "JS. LAYANAN (SERVICE FEE)",
                "item_detail" => "",
                "quantity" => 1,
                "uom_name" => "",
                "inventory_uom" => "No",
                "unit_price" => "2.500,00",
                "discount" => "0.00",
                "tax_code" => "IN0%",
                "total_lc" => "2.500,00"
            ]
        ];

        return view("po.create", compact("datas"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
