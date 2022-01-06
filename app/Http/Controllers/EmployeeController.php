<?php

namespace App\Http\Controllers;
use App\Models\Employee;
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
       $employees = Employee::paginate(3);

       return view('all_emp', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_emp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employeeData = $request->validate([
            'name' => 'required',
            'email' =>  ['required', 'string', 'email', 'max:255', 'unique:users'],
            'age' => 'required',
            'salary' => 'required'
        ]);
    
        Employee::create($employeeData);
        return redirect('employees')->with('success', 'Employee create successfully.');
    
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
        $employee = Employee::findOrFail($id);

        return view('edit_emp', compact('employee'));
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
        $employeeData = $request->validate([
        'name' => 'required',
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'age' => 'required',
        'salary' => 'required'
    ]);

    $employee = Employee::findOrFail($id);
    $employee->name = $request->name;
    $employee->email = $request->email;
    $employee->age = $request->age;
    $employee->salary = $request->salary;
    $employee->save();

    return redirect('employees')->with("success", "Employees' details are updated successfully.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect('employees')
            ->with("success", "Employee deleted successfully.");
    }
}
