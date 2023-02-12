<?php

namespace App\Exports;

use App\Models\Employee;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;

class EmployeesExport implements FromView, WithTitle, ShouldAutoSize, WithEvents
{
    // public array $columns;


    // public function __construct( array $columns)
    // {
    //     $this->columns = $columns;
    // }


    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     return Employee::all();
    // }

    public function view(): View
    {
        return view('exports.employee', ['employees' => Employee::orderBy('created_at','desc')->with('compagny')->get()]);
    }

    public function title(): string
    {
        return 'Employee List';
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
}
