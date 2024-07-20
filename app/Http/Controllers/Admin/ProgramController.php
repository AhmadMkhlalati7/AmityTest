<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ProgramRepository;
use App\Http\Resources\ProgramResource;
use Brian2694\Toastr\Facades\Toastr;

class ProgramController extends Controller
{
    private $programRepository;

    public function __construct(ProgramRepository $programRepository)
    {
        $this->programRepository = $programRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {

            return $this->programRepository->data_table();
        }

        return view('admin.program.index');
    }

    public function store(Request $request)
    {
        $programId = $request->program_id;
        $data = $request->only(['name']);

        if ($programId) {
            $program = $this->programRepository->update($data, $programId);
        } else {
            $program = $this->programRepository->create($data);
        }
        Toastr::success('Program saved successfully!');


        return response()->json([ 'program' => new ProgramResource($program)]);
    }

    public function edit($id)
    {
        $program = $this->programRepository->find($id);
        return response()->json(new ProgramResource($program));
    }

    public function destroy($id)
    {
        $this->programRepository->delete($id);
        Toastr::success('Program deleted successfully!');

        return response()->json();
    }
}
