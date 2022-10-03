<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportRecords;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Record;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = Record::paginate(5);
        return view('admin.records',['records'=>$data]);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
         return view('admin.addRecord');
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        //Record::create($request->all()); -- shortcut of getting the data
        

        $request->validate([
            'RefNum'=>'integer|required',
            'Date'=>'date|required',
            'Name'=>'string|required',
            'City'=>'string|required',
            'Province'=>'string|required',
            'NameOfDeceased'=>'string|required',
            'Nationality'=>'string|required',
            'Age'=>'numeric|min:1|max:150',
            'Sex'=>'string|required',
            'DateOfDeath'=>'date|required',
            'CauseOfDeath'=>'string|required',
            'NameOfCemetery'=>'string|required',
            'Infectious'=>'string|required',
            'Embalmed'=>'string|required',
            'DispositionOfRemains'=>'string|required',
            'Amount'=>'integer|required',
            'CollectingOfficer'=>'string|required'
        ]);
            $query = DB::table('records')->insert([

            'RefNum'=>$request->input('RefNum'),
            'Date'=>$request->input('Date'),
            'Name'=>$request->input('Name'),
            'City'=>$request->input('City'),
            'Province'=>$request->input('Province'),
            'NameOfDeceased'=>$request->input('NameOfDeceased'),
            'Nationality'=>$request->input('Nationality'),
            'Age'=>$request->input('Age'),
            'Sex'=>$request->input('Sex'),
            'DateOfDeath'=>$request->input('DateOfDeath'),
            'CauseOfDeath'=>$request->input('CauseOfDeath'),
            'NameOfCemetery'=>$request->input('NameOfCemetery'),
            'Infectious'=>$request->input('Infectious'),
            'Embalmed'=>$request->input('Embalmed'),
            'DispositionOfRemains'=>$request->input('DispositionOfRemains'),
            'Amount'=>$request->input('Amount'),
            'CollectingOfficer'=>$request->input('CollectingOfficer'),
            // 'created_at'=>  \Carbon\Carbon::now(), # new \Datetime()
            // 'updated_at' => \Carbon\Carbon::now(),  # new \Datetime()
        ]);
        if($query){
            return redirect()->route('records')->with('success','Record has been successfully added!');
        }else{
            return back()->with('fail','Record has not been  added!');
        }
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
    public function exportRecords(Request $request){
        return Excel::download(new ExportRecords, 'Burial Permit Record.xlsx');
    }
}
