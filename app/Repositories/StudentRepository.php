<?php
namespace App\Repositories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Collection;
use DataTables;
use App\Models\Student;
use Illuminate\Http\JsonResponse;

class StudentRepository
{
    public function createOrUpdate(array $data): Student
    {
        return Student::updateOrCreate(['email' => $data['email']], $data);
    }

    public function findByEmail(string $email): ?Student
    {
        return Student::where('email', $email)->first();
    }

    public function attachPrograms(Student $student,  $programIds): void
    {
        $student->programs()->syncWithoutDetaching($programIds);
    }

    public function data_table() : JsonResponse {
        $data = Student::with('programs')->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('programs', function($row) {
                return $row->programs->pluck('name')->join(', ');
            })
            ->make(true);
        }
}
