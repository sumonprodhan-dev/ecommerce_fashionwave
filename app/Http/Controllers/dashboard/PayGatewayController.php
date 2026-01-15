<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Gateway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PayGatewayController extends Controller
{
    public function edit($id = null) {

        $gateways = Gateway::all();
        return view('dashboard.pages.payment.edit', compact('gateways'));
    }


    public function update(Request $request, $id)
    {
        $gateway = Gateway::findOrFail($id);

        $imageName = $gateway->image;
        if ($request->hasFile('image')) {
            $path = public_path('uploads/gateways/');
            if ($gateway->image && file_exists($path . $gateway->image)) {
                unlink($path . $gateway->image);
            }
            $imageName = time() . '_' . $gateway->slug . '.' . $request->image->extension();
            $request->image->move($path, $imageName);
        }

        $gateway->image = $imageName;
        $gateway->status = $request->status;

        if ($gateway->slug !== 'cash-on-delivery') {
            $gateway->credentials = [
                'key_one' => $request->key_one,
                'key_two' => $request->key_two,
                'mode'    => $request->mode,
            ];
        } else {
            $gateway->credentials = []; 
        }

        $gateway->save();

        return redirect()->back()->with('success', $gateway->name . ' updated successfully!');
    }
}
