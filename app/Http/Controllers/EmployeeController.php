<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
       $employees = Employee::simplePaginate('4');
        return view('index',compact('employees'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'age' => 'required|numeric',
        'city' => 'required'       
    ]);
    
  Employee::create([
     'name' => $request->name,
     'email' => $request->email,
     'age' => $request->age,
     'city' => $request->city
  ]);

    return redirect()->route('index')->with('success','Employee Created Successfully.....!!!');
    }

    public function edit($id){
        $employee = Employee::find($id);
        return view('edit', compact('employee'));
    }

    public function update(Request $request,$id){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'city' => 'required'       
        ]);
        
       

      Employee::where('id',$id)->update([
         'name' => $request->name,
         'email' => $request->email,
         'age' => $request->age,
         'city' => $request->city
      ]);
    
        return redirect()->route('index')->with('success','Employee Updated Successfully.....!!!');
        }

        public function delete($id){
            $employee = Employee::find($id);
            $employee->delete();
            if($employee) {
                $employee->delete();
                return redirect()->route('index')->with('success', 'Employee Deleted Successfully.....!!!');
            }
        
            return redirect()->route('index')->with('error', 'Employee not found.');
        
          
        }

}
