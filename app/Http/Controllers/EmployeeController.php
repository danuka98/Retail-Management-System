<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view ('Employee.show',compact('employee'));
        //return Employee::all();
        //dd($request->all());
        //return view('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employee::create($request->all());
        return redirect()->back();
        
        /* $employee = new employee;
        $employee->first_name = request('fname');
        $employee->last_name = request('lname');
        $employee->nic = request('nic');
        $employee->phone = request('phone');
        $employee->birthday = request('birthday');
        $employee->address = request('address');
        $employee->target = request('target');
        $employee->salary = request('salary');
        $employee->salary_type = request('salary_type');
        $employee->commission = request('commission');
        $employee->joined_date = request('joined_date');

        $employee->save();
        return redirect()->back(); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit( $emp_id)
    {
        $employee = Employee::find($emp_id);
        return view('Employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //$employee = Employee::findOrFail($emp_id);
        $employee->fname = $request->input('fname');
        $employee->lname = $request->input('lname');
        $employee->nic = $request->input('nic');
        $employee->address = $request->input('address');
        $employee->mobile = $request->input('mobile');
        $employee->home = $request->input('home');
        $employee->birthday = $request->input('birthday');
        $employee->joined_date = $request->input('joined_date');
        $employee->target = $request->input('target');
        $employee->salary = $request->input('salary');
        $employee->salary_type = $request->input('salary_type');
        $employee->commission = $request->input('commission');

        $employee->save();
        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($emp_id)
    {
        $employee = Employee::findOrFail($emp_id);
        $employee->delete();
        return redirect()->back();
    }
}