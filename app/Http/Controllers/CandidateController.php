<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Candidate;
class CandidateController extends Controller
{
    public function index(Request $request)
    {

        $candidates = Candidate::all();
        return $candidates;
    }
    public function getCandidates(Request $request){
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->get('search');
        $order = $request->get('order');
        $columns = $request->get('columns');
        
        $columnToOrder = $order[0]['column'];
        $typeOfOrder = $order[0]['dir'];
        $columnName = $columns[$columnToOrder]['data'];
        
        $records = Candidate::all();
        $data_arr = array();
        foreach($records as $record){
            $data_arr[] = array(
                "id" => $record->id,
                "fullName" => $record->fullName,
                "dni" => $record->dni,
                "birthday" => $record->birthday,
                "email" => $record->email,
                "linkedin" => $record->linkedin,
                "country" => $record->country,
                "province" => $record->province,
                "city" => $record->city,
                "education_level" => $record->education_level,
                "education_status" => $record->education_status,
                "career" => $record->career,
                "job_to_apply" => $record->job_to_apply,
                "created_at" => $record->created_at
            );
        }
        $response = array(
            "candidates"=>Schema::getColumnListing('candidates'),
            "draw" => intval($draw),
            "search" => $search,
            "start" => $start,
            "length" => $length,
            "order" => $order,
            "columns" => $columns,
            "iTotalRecords" => $this->countAllRows(),
            "iTotalDisplayRecords" => count($records),
            "aaData" => $records
        );
        echo json_encode($response);
        exit;
    }
    public function countAllRows(){
        return Candidate::select('count(*) as allcount')->count();
    }


    public function searchCandidates($column, $order, $start, $length, $valueToSearch){
        $records = Candidate::select('*')
                    ->where('id', 'like', '%'.$valueToSearch.'%');
        $columnsNames = Schema::getColumnListing('candidates');
        for ($i = 1; $i < count($columnsNames); ++$i){
            $records->orWhere($columnsNames[$i], 'like', '%'.$valueToSearch.'%');
        }
        /*$records->orderby($column, $order)
            ->skip($start)
            ->take($length)
            ->get();*/
        return $records->get();
    }
}