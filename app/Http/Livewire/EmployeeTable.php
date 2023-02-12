<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Employee;

class EmployeeTable extends DataTableComponent
{
    protected $model = Employee::class;
    // public $showButtonOnHeader = true;
    // public $showFilterOnHeader = true;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
             ->setDefaultSort('employees.created_at', 'desc')
            //  ->setQueryStringStatus(false)
             ->setSearchEnabled();
    }

    public function columns(): array
    {
        return [
            // Column::make("Id", "id")->sortable(),
            Column::make("First name","firstname")
                    ->searchable(),
            Column::make("Last name", "lastname")
                    ->searchable(),
            Column::make("Email", "email"),
            Column::make("Phone Number", "phone"),
            Column::make("Compagny", "compagny.name"),
            Column::make("Create Date", "created_at")->sortable(),
        ];
    }
}
