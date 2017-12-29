<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FleetsuLib;
use App\Device;
use Session;

define("ONEDAY", 86400);

class DeviceApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) 
    {
        $devices = Device::all()->toArray();
        $timeZone = $request->input('timeZone');
        foreach($devices as &$device) {
            $device['status'] = ((time() - strtotime($device['last_reported'])) > ONEDAY) ? 0 : 1;
            $device['last_reported'] = FleetsuLib::formatDateTime($device['last_reported'], $timeZone);
        }
        return $devices;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $device = new Device;
        $device->device_id = FleetsuLib::uuid();        //uniqid();
        $device->device_label = $request->device_label;
        $device->last_reported = date("Y-m-d H:i:s",time());
        $device->save();        
        return ['device_id' => $device->device_id];
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*device_id
        device_label
        last_reported
        created_at
        updated_at*/
        
        $device = Device::find($id);
        $device->last_reported = date("Y-m-d H:i:s",time());
        $device->save();        
        return ['device_id' => $device->device_id];
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
