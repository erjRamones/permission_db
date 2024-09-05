<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Interface\Service\EmployeeServiceInterface;

class EmployeeController extends Controller
{
    private $employeeService;

    public function __construct(EmployeeServiceInterface $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        return $this->employeeService->findEmployees();
    }

    public function store(EmployeeStoreRequest $request)
    {
        return $this->employeeService->createEmployee($request);
    }

    public function show(int $id)
    {
        return $this->employeeService->findEmlpoyeeById($id);
    }

    public function update(EmployeeUpdateRequest $request, int $id)
    {
        return $this->employeeService->updateEmployee($request, $id);
    }

    public function destroy(int $id)
    {
        return $this->employeeService->deleteEmployee($id);
    }
}
