<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\Package;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class PackageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packageList=Package::all();
        return view('admin.packages',compact('packageList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.package_create');
    }

    /**
     * Store a newly created resource in storage. POST
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'package_name'=>'required|string|unique:packages,package_name',
            'entry_amount'=>'required|numeric|unique:packages,entry_amount',
            'direct_income'=>'required|numeric',
            'levels'=>'required|numeric',
            'rewards'=>'required|boolean'
        ]);

        $package=new Package();
        $package->package_name=$request->package_name;
        $package->entry_amount=$request->entry_amount;
        $package->direct_income=$request->direct_income;
        $package->levels=$request->levels;
        $package->rewards=$request->rewards;
        if($package->save())
        myhelper::showMessage("Package created successfully");
        else
        myhelper::showMessage("Unable to create package please try after some time.",true);

        return redirect()->back();


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
        $package=Package::find($id);
        return view('admin.package_create',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $package=Package::find($id);
        if($package)
        {

            $this->validate($request,[
                'package_name'=>'required|string|unique:packages,package_name,'.$id,
                'entry_amount'=>'required|numeric|unique:packages,entry_amount,'.$id,
                'direct_income'=>'required|numeric',
                'levels'=>'required|numeric',
                'rewards'=>'required|boolean'
            ]);

            $package->package_name=$request->package_name;
            $package->entry_amount=$request->entry_amount;
            $package->direct_income=$request->direct_income;
            $package->levels=$request->levels;
            $package->rewards=$request->rewards;
            if($package->save())
            {
                myhelper::showMessage('Package updated successfully.');
            }
            else
            {
                myhelper::showMessage('Unable to update the package, Please try after some time.',true);
            }

            return redirect()->route('package.index');

        }
        else
        {
            myhelper::showMessage('Invalid package, Please try after some time.',true);
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function changePackageStatus($id)
    {
        try {
            $package_id = Crypt::decrypt($id);

            $package=Package::find($package_id);
            if($package)
            {
                $package->is_disabled=!$package->is_disabled;
                $package->save();
                myhelper::showMessage('Package status changed successfully');

            }
            else
            {
                myhelper::showMessage('Invalid package. Please try with a valid package.',true);
            }


        } catch (Exception $e) {
            myhelper::showMessage($e->getMessage(),true);
        }

        return redirect()->back();

    }
}
