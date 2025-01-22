<?php

namespace App\Http\Controllers;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('company')->paginate(10);
        return view('employees.index', ['employees' => $employees]);
    }

    public function create()
    {
        $companies = Company::all();
        return view('employees.create', compact('companies'));
    }

    public function store(EmployeeRequest $request)
    {
        // Validation is already handled by EmployeeRequest
        $validated = $request->validated();

        // Create the employee
        Employee::create($validated);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $companies = Company::all();
        return view('employees.edit', compact('employee', 'companies'));
    }

    public function update(EmployeeRequest $request, $id)
    {
        $employee = Employee::findOrFail($id);

        // Validation already handled by EmployeeRequest
        $validated = $request->validated();

        // Update the employee
        $employee->update($validated);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
