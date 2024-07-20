<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use DataTables;
use App\Repositories\StudentRepository;

class StudentController extends Controller
{
    private $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            return $this->studentRepository->data_table();
        }

        return view('admin.student.index');
    }
}
