<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Product;
class SupplierController extends Controller
{
    public function vendors()
    {     
        $vendors = Vendor::orderBy('created_at', 'desc')->get();
        return view('backend.admin.supplier.list', compact('vendors'));
    }

    public function vendorApproved($id)
    {
        $vendor = Vendor::find($id);
        $vendor->is_approved = 1;
        $vendor->save();
        return redirect()->back()->with('success', 'vendor has been approved');
    }
    public function vendorPending($id)
    {
        $vendor = Vendor::find($id);
        $vendor->is_approved = 0;
        $vendor->save();
        return redirect()->back()->with('success', 'vendor has been pending');
    }
    public function vendorProducts()
    {    
        $products =  Product::with('category', 'color', 'size')->get();
        return view('backend.admin.supplier.products', compact('products'));
    }
    
    public function vendorProductApproved($id)
    {
        $product = Product::find($id);
        $product->status = 1;
        $product->save();
        return redirect()->back()->withSuccess('Product has been approved');
    }
    public function vendorProductPending($id)
    {
        $product = Product::find($id);
        $product->status = 0;
        $product->save();
        return redirect()->back()->withSuccess('Product has been pending');
    }
}
