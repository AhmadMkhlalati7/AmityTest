<?php
namespace App\Http\Controllers;

use App\Http\Requests\ApplyRequest;
use App\Repositories\StudentRepository;
use App\Repositories\ProgramRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Validation\ValidationException;

class StudentProgramController extends Controller
{
    protected $studentRepository;
    protected $programRepository;

    public function __construct(StudentRepository $studentRepository, ProgramRepository $programRepository)
    {
        $this->studentRepository = $studentRepository;
        $this->programRepository = $programRepository;
    }

    public function create()
    {
        $programs = $this->programRepository->all();
        return view('welcome', compact('programs'));
    }

    public function store(ApplyRequest $request)
    {
        $validated = $request->validated();

        try {
            $student = $this->studentRepository->createOrUpdate($validated);

            $this->studentRepository->attachPrograms($student, $validated['programs']);

            Toastr::success('Application Stored successfully.');
            return redirect()->back();
        }
        catch (\Exception $e) {
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }
}
