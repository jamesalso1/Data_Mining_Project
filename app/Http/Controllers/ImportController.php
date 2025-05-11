<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('admin.import.index');
    }
    public function readFileExcel($file)
    {
        $filePath = public_path('uploads/' . $file);
        if (!file_exists($filePath)) {
            return response()->json(['error' => 'File not found'], 404);
        }

        $fileContent = file_get_contents($filePath);
        if ($fileContent === false) {
            return response()->json(['error' => 'Unable to read file'], 500);
        }


        return response()->json(['success' => 'File read successfully']);
    }
    public function post(Request $request)
    {
        $data = $request->all();
        if($data['file'] == null){
            return response()->json(['error' => 'File is required'], 422);
        }
        else{
            $file = $data['file'];
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
            $data['file'] = $fileName;
            $this->readFileExcel($fileName);
            return response()->json(['success' => 'File uploaded successfully']);
        }
    }

}
