<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Candidate;
class CandidateController extends Controller
{

    private $labels = [
        "id" => "ID",
        "job_to_apply" => "Búsqueda",
        "fullName" => "Nombre Completo",
        "dni" => "DNI",
        "birthday" => "Fecha de Nacimiento",
        "email" => "Email",
        "linkedin" => "Linkedin",
        "country" => "País",
        "province" => "Provincia",
        "city" => "Ciudad",
        "education_level" => "Nivel Educativo",
        "education_status" => "Status Estudios",
        "career" => "Título Universitario",
        "created_at" => "Fecha de Aplicación"
    ];
    private $orden = [
        "id",
        "job_to_apply",
        "fullName",
        "dni",
        "birthday",
        "email",
        "linkedin",
        "country",
        "province",
        "city",
        "education_level",
        "education_status",
        "career",
        "created_at"
    ];
    
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
        
        $searchRecordByColumn = $this->searchToArray($columns);
        if(empty($searchRecordByColumn)){
            $searchRecords = $this->searchCandidates($columnName, $typeOfOrder, $start, $length, $search['value']);
        }else{
            $searchRecords = $this->searchCandidatesBySelectOption($searchRecordByColumn, $columnName, $typeOfOrder, $start, $length);
        }
        
        $data_arr = $this->prepareResults($searchRecords);
        $response = array(
            "columns" => $searchRecordByColumn,
            "draw" => intval($draw),
            "iTotalRecords" => $this->countAllRows(),
            "iTotalDisplayRecords" => $this->countSearchRows($columnName, $typeOfOrder, $start, $length, $search['value']),
            "aaData" => $data_arr,
            "selectInfo" => $this->getSelectInfo(),
            "orden" => $this->orden
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
    public function getSelectInfo(){
        $infoArray=array();
        foreach($this->labels as $key => $value){
            $obj = new class{};
            $obj->name = $key;
            $obj->label = $value;
            $obj->selectOptions = Candidate::select($key)->groupBy($key)->get();
            $infoArray[$key]=$obj;
        }
        return $infoArray;
    }
    public function prepareResults($records){
        $results = array();
        foreach($records as $record){
            $results[] = array(
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
        return $results;
    }
    public function searchToArray($columns){
        $searchValues = array();
        foreach($columns as $column){
            if($column["search"]["value"]){
                $searchValues[$column["data"]] = $column["search"]["value"];
            }
        }
        return $searchValues;
    }
    public function searchCandidatesBySelectOption($columns, $columnToOrder, $order, $start, $length){
        $records = Candidate::select('*');
        foreach($columns as $column=>$value){
            $records->where($column, $value);
        };
        return $records->orderby($columnToOrder, $order)
        ->skip($start)
        ->take($length)
        ->get();
    }

}