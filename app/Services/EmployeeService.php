<?php

namespace App\Services;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Collection;

class EmployeeService
{
    /**
     * Get all employees.
     *
     * @return Collection
     */
    public function getAllEmployees(): Collection
    {
        return Employee::all();
    }

    /**
     * Create a new employee.
     *
     * @param array $data
     * @return Employee
     */
    public function createEmployee(array $data): Employee
    {
        return Employee::create($data);
    }

    /**
     * Get an employee by ID.
     *
     * @param int $id
     * @return Employee
     */
    public function getEmployeeById(int $id): Employee
    {
        return Employee::findOrFail($id);
    }

    /**
     * Update an existing employee.
     *
     * @param int $id
     * @param array $data
     * @return Employee
     */
    public function updateEmployee(int $id, array $data): Employee
    {
        $employee = Employee::findOrFail($id);
        $employee->update($data);
        return $employee;
    }

    /**
     * Delete an employee by ID.
     *
     * @param int $id
     * @return void
     */
    public function deleteEmployee(int $id): void
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
    }
}
