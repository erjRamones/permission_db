<?php

namespace App\Repository;
use App\Interface\Repository\EmployeeRepositoryInterface;
use App\Models\Employee;
use Illuminate\Http\Response;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function findByMany()
    {
        return Employee::paginate(10);
    }

    public function findByOneId(int $id)
    {
        return Employee::findOrFail($id);
    }

    public function create(object $payload)
    {
        $employee = new Employee();
        $employee->sss_no = $payload->sss_no;
        $employee->phic_no = $payload->phic_no;
        $employee->tin_no = $payload->tin_no;
        $employee->date_hired = $payload->date_hired;
        $employee->date_resigned = $payload->date_resigned;
        $employee->personality_id = $payload->personality_id;
        $employee->save();

        return $employee->fresh();
    }

    public function update(object $payload, int $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->sss_no = $payload->sss_no;
        $employee->phic_no = $payload->phic_no;
        $employee->tin_no = $payload->tin_no;
        $employee->date_hired = $payload->date_hired;
        $employee->date_resigned = $payload->date_resigned;
        $employee->personality_id = $payload->personality_id;
        $employee->save();

        return $employee->fresh();
    }

    public function delete(int $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return response()->json([
            'message' => 'success'
        ], Response::HTTP_OK);
    }
}
