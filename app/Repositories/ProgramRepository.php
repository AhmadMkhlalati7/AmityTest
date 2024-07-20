<?php


namespace App\Repositories;

use App\Models\Program;
use App\Http\Resources\ProgramResource;
use Illuminate\Database\Eloquent\Collection;
use DataTables;
use Illuminate\Http\JsonResponse;

class ProgramRepository {
    public function all(): Collection
    {
        return Program::all();
    }

    public function create(array $data): Program
    {
        return Program::create($data);
    }

    public function update(array $data, $id): Program
    {
        $program = Program::find($id);
        $program->update($data);
        return $program;
    }

    public function delete($id): bool
    {
        return Program::destroy($id);
    }

    public function find($id): ?Program
    {
        return Program::find($id);
    }

    public function data_table(): JsonResponse
    {
        $data = $this->all();
            return DataTables::of(ProgramResource::collection($data))
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="edit btn btn-primary btn-sm editProgram">Edit</a>';
                    $btn .= ' <a href="javascript:void(0)" data-id="'.$row->id.'" class="btn btn-danger btn-sm deleteProgram">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}
