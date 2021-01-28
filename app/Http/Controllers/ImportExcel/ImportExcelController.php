<?php

namespace App\Http\Controllers\ImportExcel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\ImportCampus;
use App\Imports\ImportFaculty;
use App\Imports\ImportProgram;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use App\Campus;
use App\Faculty;
use App\Program;

class ImportExcelController extends Controller
{
    //
    public function index () 
    {
        $program = Program::orderBy('created_at', 'DESC')->get();
        $faculty = Faculty::orderBy('created_at', 'DESC')->get();
        $campus = Campus::orderBy('created_at', 'DESC')->get();
        return view('import_excel.index', compact('campus', 'faculty', 'program'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);
        Excel::import(new ImportCampus, request()->file('import_file'));
        return back()->with('success', 'Campus imported successfully.');
    }

    public function import1(Request $request)
    {
        $request->validate([
            'import_file_1' => 'required'
        ]);
        Excel::import(new ImportFaculty, request()->file('import_file_1'));
        return back()->with('success', 'Campus imported successfully.');
    }

    public function import2(Request $request)
    {
        $request->validate([
            'import_file_2' => 'required'
        ]);
        Excel::import(new ImportProgram, request()->file('import_file_2'));
        return back()->with('success', 'Campus imported successfully.');
    }
}
