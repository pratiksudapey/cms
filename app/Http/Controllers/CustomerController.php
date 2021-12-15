<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Service;
// use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view("customer.index", compact("customer"), ['customers' => DB::table('customers')->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();
        return view("customer.create", compact("service"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_name' => ['required', 'max:255'],
            'company_name' => ['required', 'max:255'],
            'address' => ['required', 'in:English,Nepali'],
            'phone_number' => ['required', 'numeric'],
            'email' => ['required', 'email'],
          ]);
          if ($validator->fails()) {
                  return redirect(route('customer.create'))
                    ->withErrors($validator)
                    ->withInput();
          }
        $customer = new Customer();
        $customer->customer_name = $request->customer_name;
        $customer->company_name = $request->company_name;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->save();
        return redirect()->back();

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
        return view("customer.edit");
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
        $validator = Validator::make($request->all(), [
            'customer_name' => ['required', 'max:255'],
            'company_name' => ['required', 'max:255'],
            'address' => ['required', 'in:English,Nepali'],
            'phone_number' => ['required', 'numeric'],
            'email' => ['required', 'email'],
          ]);
          if ($validator->fails()) {
                  return redirect(route('customer.create'))
                    ->withErrors($validator)
                    ->withInput();
          }
        $customer = Customer::find($id);
        $customer->customer_name = $request->customer_name;
        $customer->company_name = $request->company_name;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customer.index')
            ->with('success', 'Customer deleted successfully');
    }
}
