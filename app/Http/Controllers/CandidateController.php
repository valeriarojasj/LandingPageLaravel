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
      
        $searchRecords = $this->searchCandidates($columnName, $typeOfOrder, $start, $length, $search['value']);
        $data_arr = array();
        foreach($searchRecords as $record){
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
            "draw" => intval($draw),
            "iTotalRecords" => $this->countAllRows(),
            "iTotalDisplayRecords" => $this->countSearchRows($columnName, $typeOfOrder, $start, $length, $search['value']),
            "aaData" => $data_arr
        );
        echo json_encode($response);
        exit;
    }



    public function countAllRows(){
        return Candidate::select('count(*) as allcount')->count();
    }

    public function countSearchRows($column, $order, $start, $length, $valueToSearch){
        $columnsNames = Schema::getColumnListing('candidates');
        $records = Candidate::select('*')
                    ->where('id', 'like', '%'.$valueToSearch.'%');
        for ($i = 1; $i < count($columnsNames); ++$i){
            $records->orWhere($columnsNames[$i], 'like', '%'.$valueToSearch.'%');
        }
        return $records->count();
    }


    public function searchCandidates($column, $order, $start, $length, $valueToSearch){
        $records = Candidate::select('*')
                    ->where('id', 'like', '%'.$valueToSearch.'%');
        $columnsNames = Schema::getColumnListing('candidates');
        for ($i = 1; $i < count($columnsNames); ++$i){
            $records->orWhere($columnsNames[$i], 'like', '%'.$valueToSearch.'%');
        }
        return $records->orderby($column, $order)
            ->skip($start)
            ->take($length)
            ->get();
    }

}