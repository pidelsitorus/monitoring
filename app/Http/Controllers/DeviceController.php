<?php
 
namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
 
class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $device = Device::orderBy('created_at', 'DESC')->get();
 
        return view('devices.index', compact('device'));
    }
    public function edit(string $id)
    {
        $device = Device::findOrFail($id);
 
        return view('devices.edit', compact('device'));
    }

    public function show(string $id)
    {
        $device = Device::findOrFail($id);
        return view('devices.show', compact('device'));
    }

    public function update(Request $request, string $id)
    {
        $product = Device::findOrFail($id);
 
        $product->update($request->all());
 
        return redirect()->route('devices')->with('success', 'Pasien updated successfully');
    }

    public function destroy(string $id)
    {
        $device = Device::findOrFail($id);
 
        $device->delete();
 
        return redirect()->route('devices')->with('success', 'Pasien deleted successfully');
    }

    public function data()
    {
        $device = Device::orderBy('created_at', 'DESC')->get();
 
        return view('devices.data', compact('device'));
    }
}