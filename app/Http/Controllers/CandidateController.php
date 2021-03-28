<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\JobOpening;

use App\Exports\CandidateExport;
use App\Imports\CandidateImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\JobUser;
class CandidateController extends Controller
{

    private $labels = [
        "id" => "ID",
        "created_at" => "Fecha de Aplicación",
        "job_id"=>"ID de la Búsqueda",
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
        "open_answer_1" => "Respuesta Abierta 1",
        "open_answer_2" => "Respuesta Abierta 2",
        "multiple_choice_1_a" => "Respuesta Selección 1",
        "multiple_choice_2_a" => "Respuesta Selección 2",
        "checkbox_1_a_op_1" => "Respuesta Checkbox 1 Opcion 1",
        "checkbox_1_a_op_2" => "Respuesta Checkbox 1 Opcion 2",
        "checkbox_1_a_op_3" => "Respuesta Checkbox 1 Opcion 3",
        "checkbox_2_a_op_1" => "Respuesta Checkbox 2 Opcion 1",
        "checkbox_2_a_op_2" => "Respuesta Checkbox 2 Opcion 2",
        "checkbox_2_a_op_3" => "Respuesta Checkbox 2 Opcion 3",
        "download_status" => "Descargado",
        "downloaded_by" =>"Descargado por",
        "downloaded_at" =>"Fecha de Descarga"
    ];

    private $selectables = [
        "job_id"=>"ID de la Búsqueda",
        "job_to_apply" => "Búsqueda",
        "country" => "País",
        "province" => "Provincia",
        "city" => "Ciudad"
    ];
    public $assignedJobs;
    public $valueToSearch;
    private $orden = [
        "id",
        "created_at",
        "job_id",
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
        "open_answer_1",
        "open_answer_2",
        "multiple_choice_1_a",
        "multiple_choice_2_a",
        "checkbox_1_a_op_1",
        "checkbox_1_a_op_2",
        "checkbox_1_a_op_3",
        "checkbox_2_a_op_1",
        "checkbox_2_a_op_2",
        "checkbox_2_a_op_3",
        "download_status",
        "downloaded_by",
        "downloaded_at" 
        
    ];
    
    public function getCandidates(Request $request){
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->get('search');
        $order = $request->get('order');
        $columns = $request->get('columns');
        $this->valueToSearch= $search['value'];
        $columnToOrder = $order[0]['column'];
        $typeOfOrder = $order[0]['dir'];
        $columnName = $columns[$columnToOrder]['data'];
        $this->assignedJobs = JobUser::select('job_id')
            ->where('user_id', auth()->user()->id)->get()->pluck('job_id');
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
            "iTotalDisplayRecords" => $this->countSearchRows($columnName, $typeOfOrder, $start, $length),
            "aaData" => $data_arr,
            "selectInfo" => $this->getSelectInfo(),
            "orden" => $this->orden,
            "assignedJobs" => $this->assignedJobs
        );
        echo json_encode($response);
        exit;
    }



    public function countAllRows(){
        return Candidate::select('count(*) as allcount')
            ->whereIn('job_id', $this->assignedJobs)->count();
    }
    
    public function countSearchRows(){
        $records = Candidate::select('*')
            ->whereIn('job_id', $this->assignedJobs)
            ->where(function ($query) {
                $query->where('created_at', 'like', '%'.$this->valueToSearch.'%')
                ->orWhere('job_id', 'like', '%'.$this->valueToSearch.'%')
                ->orWhere('job_to_apply', 'like', '%'.$this->valueToSearch.'%')
                ->orWhere('fullName', 'like', '%'.$this->valueToSearch.'%')
                ->orWhere('country', 'like', '%'.$this->valueToSearch.'%')
                ->orWhere('province', 'like', '%'.$this->valueToSearch.'%')
                ->orWhere('city', 'like', '%'.$this->valueToSearch.'%');
                });
        return $records->count();
    }



    public function searchCandidates($column, $order, $start, $length, $valueToSearch){
        $records = Candidate::select('*')
        ->whereIn('job_id', $this->assignedJobs)
        ->where(function ($query) {
            $query->where('created_at', 'like', '%'.$this->valueToSearch.'%')
            ->orWhere('job_id', 'like', '%'.$this->valueToSearch.'%')
            ->orWhere('job_to_apply', 'like', '%'.$this->valueToSearch.'%')
            ->orWhere('fullName', 'like', '%'.$this->valueToSearch.'%')
            ->orWhere('country', 'like', '%'.$this->valueToSearch.'%')
            ->orWhere('province', 'like', '%'.$this->valueToSearch.'%')
            ->orWhere('city', 'like', '%'.$this->valueToSearch.'%');
            });
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
            $obj->selectOptions = Candidate::select($key)
                ->whereIn('job_id', $this->assignedJobs)->groupBy($key)->get();
            $infoArray[$key]=$obj;
            
        }
        return $infoArray;
    }
    public function prepareResults($records){
        $results = array();
        foreach($records as $record){
            $results[] = array(
                "id" => $record->id,
                "created_at" => date( 'd-m-Y H:i:s', strtotime( $record->created_at)),
                "fullName" => $record->fullName,
                "dni" => $record->dni,
                "birthday" => date( 'd-m-Y', strtotime( $record->birthday)),
                "email" => $record->email,
                "linkedin" => $record->linkedin,
                "country" => $record->country,
                "province" => $record->province,
                "city" => $record->city,
                "education_level" => $record->education_level,
                "education_status" => $record->education_status,
                "career" => $record->career,
                "job_id" => $record->job_id,
                "job_to_apply" => $record->job_to_apply,
                "open_answer_1"=> $record->open_answer_1,
                "open_answer_2"=> $record->open_answer_2,
                "multiple_choice_1_a"=> $record->multiple_choice_1_a,
                "multiple_choice_2_a"=> $record->multiple_choice_2_a,
                "checkbox_1_a_op_1"=> $record->checkbox_1_a_op_1,
                "checkbox_1_a_op_2"=> $record->checkbox_1_a_op_2,
                "checkbox_1_a_op_3"=> $record->checkbox_1_a_op_3,
                "checkbox_2_a_op_1"=> $record->checkbox_2_a_op_1,
                "checkbox_2_a_op_2"=> $record->checkbox_2_a_op_2,
                "checkbox_2_a_op_3"=> $record->checkbox_2_a_op_3, 
                "download_status"=> $record->download_status,
                "downloaded_by"=> $record->downloaded_by,
                "downloaded_at"=> $record->downloaded_at,     
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
        $records = Candidate::select('*')->whereIn('job_id', $this->assignedJobs);
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
        $this->assignedJobs = JobUser::select('job_id')
            ->where('user_id', auth()->user()->id)->get()->pluck('job_id');
        $search = $request->get('search');
        $order = $request->get('order');
        $columns = $request->get('columns');

        $columnIndex = $order[0]['column'];
        $typeOfOrder = $order[0]['dir'];
        $columnName = $columns[$columnIndex]['data'];

        $records = Candidate::where('id', 'like', '%'.$search["value"].'%')
            ->whereIn('job_id', $this->assignedJobs);
        $columnsNames = Schema::getColumnListing('candidates');
        for ($i = 1; $i < count($columnsNames); ++$i){
            $records->orWhere($columnsNames[$i], 'like', '%'.$search["value"].'%');
        }
        $records->update(['download_status' => true,'downloaded_by'=>auth()->user()->name, 'downloaded_at'=>now()]);
        return $records->orderby($columnName, $typeOfOrder)->get([
            'id as ID',
            'created_at as Fecha_de_Aplicacion',
            'job_id as ID_de_la_Busqueda',
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
            'career as Titulo_Universitario',
            'open_answer_1 as Respuesta_Abierta_1',
            'open_answer_2 as Respuesta_Abierta_2',
            'multiple_choice_1_a as Respuesta_Selección_1',
            'multiple_choice_2_a as Respuesta_Selección_2',
            'checkbox_1_a_op_1 as Respuesta_Checkbox_1_Opcion_1',
            'checkbox_1_a_op_2 as Respuesta_Checkbox_1_Opcion_2',
            'checkbox_1_a_op_3 as Respuesta_Checkbox_1_Opcion_3',
            'checkbox_2_a_op_1 as Respuesta_Checkbox_2_Opcion_1',
            'checkbox_2_a_op_2 as Respuesta_Checkbox_2_Opcion_2',
            'checkbox_2_a_op_3 as Respuesta_Checkbox_2_Opcion_3',
            'download_status',
            'downloaded_by',
            'downloaded_at' 

            
            ])
        ->toArray();
    }
    public function deleteCandidates($job_id, $from, $to){
        //Candidate::where('job_id', $job_id)->whereRaw('DATE(created_at) = ?', [$today])->get();
        return Candidate::where('job_id', $job_id)
            ->whereIn('job_id', $this->assignedJobs)
            ->whereRaw('DATE(created_at) >= ?', [$from])
            ->whereRaw('DATE(created_at) <= ?', [$to])
            ->get();
    }
    /*public function import() 
    {
        Excel::import(new CandidateImport,request()->file('file'));
             
        return back();
    }*/
}