<?php

namespace App\Http\Controllers;

use App\Helper;
use App\Models\Import;
use App\Models\Lead;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $imports = Import::paginate(25);

        return view('imports.imports', compact('imports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('imports.create_import');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|max:255',
            'file' => 'required|max:200|mimes:csv,xlsx,xls'
        ]);
        $path = $request->file('file')->store('imports');

        $pathParts = explode('/', $path);

        Import::create([
            'name' => $request->input('name'),
            'file' => end($pathParts)
        ]);

        return redirect()->route('imports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function getComplete($id)
    {
        return view('imports.imports_complete');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $import = Import::where('id', $id)->first();

        $headers = [];

        $file = fopen(storage_path('app/imports/' . $import->file), 'r');
        // Detect delimiter
        $firstRowRaw = fgets($file);

        $delimiter = Helper::detectDelimiter($firstRowRaw);
        rewind($file); // Reset file pointer to make sure fgetcsv() starts at first line

        $firstRow = fgetcsv($file, 999, $delimiter);

        foreach ($firstRow as $column) {
            $headers[] = $column;
        }

        return view('imports.import_edit', compact('headers', 'import'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $import = Import::where('id', $id)->first();

        $file = fopen(storage_path('app/imports/' . $import->file), 'r');

        // Detect delimiter
        $rawHeaderRow = fgets($file);
        $delimiter = Helper::detectDelimiter($rawHeaderRow);

        $rows = [];

        while ($row = fgetcsv($file, 10000, $delimiter)) {
            $rows[] = [
                'vorname' => isset($request->vorname) ?  $row[$request->vorname] : '',
                'nachname' => isset($request->nachname) ?  $row[$request->nachname] : '',
                'handy_nummer' => isset($request->handy_nummer) ? $row[$request->handy_nummer] : '',
                'adresse' => isset($request->adresse) ?  $row[$request->adresse] : '',
                'haus_nummer' => isset($request->haus_nummer) ?  (string)$row[$request->haus_nummer] : '',
                'plz' => isset($request->plz) ? $row[$request->plz] : '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }


        foreach (array_chunk($rows, 1000) as $t) {
            Lead::insert($t);
        }
        // $import->update(['status' => 'completed']);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
