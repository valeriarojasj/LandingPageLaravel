<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Candidate;

use App\Exports\CandidateExport;
use App\Imports\CandidateImport;
use Maatwebsite\Excel\Facades\Excel;

class CandidateController extends Controller
{

    private $labels = [
        "id" => "ID",
        "created_at" => "Fecha de Aplicación",
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
        "career" => "Título Universitario"
        
    ];
    private $selectables = [
        "job_to_apply" => "Búsqueda",
        "country" => "País",
        "province" => "Provincia",
        "city" => "Ciudad"
    ];
    private $orden = [
        "id",
        "created_at",
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
        "career"
        
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
            "columns" => $columns,
            "draw" => intval($draw),
            "start" => $start,
            "length" => $length,
            "search" => $search,
            "order" => $order,
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
        foreach($this->selectables as $key => $value){
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
                "created_at" => $record->created_at = date('d-m-Y H:i:s'),
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
                "job_to_apply" => $record->job_to_apply
                
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

    /*public function importExportView()
    {
       return view('import');
    }*/
    public function export() 
    {
        return Excel::download(new CandidateExport, 'candidates.xlsx');
    }
    public function getCandidatesExcel(Request $request){
        $search = $request->get('search');
        $order = $request->get('order');
        $columns = $request->get('columns');

        $columnIndex = $order[0]['column'];
        $typeOfOrder = $order[0]['dir'];
        $columnName = $columns[$columnIndex]['data'];

        $records = Candidate::where('id', 'like', '%'.$search["value"].'%');
        $columnsNames = Schema::getColumnListing('candidates');
        for ($i = 1; $i < count($columnsNames); ++$i){
            $records->orWhere($columnsNames[$i], 'like', '%'.$search["value"].'%');
        }
        return $records->orderby($columnName, $typeOfOrder)->get([
            'id as ID',
            'created_at as Fecha_de_Aplicacion',
            'job_to_apply as Busqueda',
            'fullName as Nombre_Completo',
            'dni as DNI',
            'birthday as Fecha_de_Nacimiento',
            'email as Email',
            'linkedin as Linkedin',
            'country as Pais',
            'province as Provincia',
            'city as Ciudad',
            'education_level as Nivel_Educativo',
            'education_status as Status_Estudios',
            'career as Titulo_Universitario'
            
            ])
        ->toArray();
    }
    /*public function import() 
    {
        Excel::import(new CandidateImport,request()->file('file'));
             
        return back();
    }*/
}