<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\JobUser;

class CandidateController extends Controller{
    public $draw;
    public $start;
    public $length;
    public $search;
    public $order;
    public $columns;
    public $assignedJobs;
    public $orderByColumn;
    public $orderByDirection;
    public $columnNameWithValueToSearch=array();
    public $mensajes=array();

    private $selectables = [
        "job_to_apply" => "Búsqueda",
        "country" => "País",
        "province" => "Provincia",
        "city" => "Ciudad"
    ];
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
        $this->setValues($request);
        $this->setColumnToOrderBy();
        $this->setAssignedJobs();
        $this->setColumnNameWithValueToSearch();
        $basicQuery = Candidate::select('*')->whereIn('job_id', $this->assignedJobs);
        $recordsTotal = $this->countRows($basicQuery);
        $finalQuery = $this->applyWhereStatements($basicQuery);
        $recordsFiltered = $this->countRows($finalQuery);
        $results = $finalQuery->orderby($this->orderByColumn, $this->orderByDirection)->offset($this->start)->limit($this->length)->get();

        $response = array(
            "columns" => $this->columns,
            "draw" => intval($this->draw),
            "start" => $this->start,
            "length" => $this->length,
            "search" => $this->search,
            "order" => $this->order,
            "iTotalRecords" => $recordsTotal,
            "iTotalDisplayRecords" => $recordsFiltered,
            "iDisplayLength" => $this->countRows($finalQuery),
            "recordsTotal" => $recordsTotal,
            "recordsFiltered" => $recordsFiltered,
            "aaData" => $this->prepareResults($results),
            "selectInfo" => $this->getSelectInfo(),
            "orden" => $this->orden,
            "asdfasdf" => $this->columnNameWithValueToSearch,
            "mensajes" => $this->mensajes
        );
        echo json_encode($response);
        exit;
    }

    private function setValues($request){
        $this->draw = $request->get('draw');
        $this->start = $request->get('start');
        $this->length = $request->get('length');
        $this->search = $request->get('search');
        $this->order = $request->get('order');
        $this->columns = $request->get('columns');
    }

    private function setAssignedJobs(){
        $this->assignedJobs = JobUser::select('job_id')
            ->where('user_id', auth()->user()->id)->get()->pluck('job_id');
    }

    private function setColumnToOrderBy(){
        $this->orderByColumn = $this->columns[$this->order[0]['column']]['data'];
        $this->orderByDirection = $this->order[0]['dir'];
    }

    public function setColumnNameWithValueToSearch(){
        $this->columnNameWithValueToSearch["job_id"] = $this->getColumnValue("job_id");
        $this->columnNameWithValueToSearch["job_to_apply"] = $this->getColumnValue("job_to_apply");
        $this->columnNameWithValueToSearch["country"] = $this->getColumnValue("country");
        $this->columnNameWithValueToSearch["province"] = $this->getColumnValue("province");
        $this->columnNameWithValueToSearch["city"] = $this->getColumnValue("city");
        $this->columnNameWithValueToSearch["download_status"] = $this->getColumnValue("download_status");
        $this->columnNameWithValueToSearch["created_at"] = $this->getColumnValue("created_at");
    }

    public function getColumnValue($columnName){
        foreach($this->columns as $column){
            if($column["data"] == $columnName){
                if($columnName == "created_at"){
                    return json_decode($column["search"]["value"], true);
                }
                return $column["search"]["value"];
            }
        }
        return null;
    }

    public function applyWhereStatements($basicQuery){
        if($this->columnNameWithValueToSearch["job_id"]){
            $this->mensajes["job_id"]="pasé por job_id";
            $basicQuery->where("job_id", $this->columnNameWithValueToSearch["job_id"]);
        }
        if($this->columnNameWithValueToSearch["job_to_apply"]){
            $this->mensajes["job_to_apply"]="pasé por job_to_apply";
            $basicQuery->where("job_to_apply", $this->columnNameWithValueToSearch["job_to_apply"]);
        }
        if($this->columnNameWithValueToSearch["country"]){
            $this->mensajes["country"]="pasé por country";
            $basicQuery->where("country", $this->columnNameWithValueToSearch["country"]);
        }
        if($this->columnNameWithValueToSearch["province"]){
            $this->mensajes["province"]="pasé por province";
            $basicQuery->where("province", $this->columnNameWithValueToSearch["province"]);
        }
        if($this->columnNameWithValueToSearch["city"]){
            $this->mensajes["city"]="pasé por city";
            $basicQuery->where("city", $this->columnNameWithValueToSearch["city"]);
        }
        if($this->columnNameWithValueToSearch["download_status"]){
            $this->mensajes["download_status"]="pasé por download_status, VALOR:  ".$this->columnNameWithValueToSearch["download_status"];
            if($this->columnNameWithValueToSearch["download_status"] == 'SI'){
                $basicQuery->where("download_status", 1);
            }else{
                $basicQuery->where("download_status", 0);
            }
        }
        if($this->columnNameWithValueToSearch["created_at"]){
            $from = $this->columnNameWithValueToSearch["created_at"]["valFrom"];
            $to = $this->columnNameWithValueToSearch["created_at"]["valTo"];
            if($from && $to){
                $basicQuery
                    ->whereDate('created_at', '>=', date("Y-m-d", strtotime($from)))
                    ->whereDate('created_at', '<', date("Y-m-d", strtotime($to)));
            } else if($from){
                $this->mensajes["created_at"]= $from;
                $basicQuery->whereDate('created_at', '>=', date("Y-m-d", strtotime($from)));
            } else if($to){
                $this->mensajes["created_at"]= $to;
                $basicQuery->whereDate('created_at', '<', date("Y-m-d", strtotime($to)));
            }
        }
        if($this->search["value"]){
            $this->mensajes["search"]="pasé por search y el valor es: ".$this->search["value"];
            $basicQuery->where(function ($query) {
                $query->where('created_at', 'like', '%'.$this->search["value"].'%')
                ->orWhere('job_id', 'like', '%'.$this->search["value"].'%')
                ->orWhere('job_to_apply', 'like', '%'.$this->search["value"].'%')
                ->orWhere('fullName', 'like', '%'.$this->search["value"].'%')
                ->orWhere('country', 'like', '%'.$this->search["value"].'%')
                ->orWhere('province', 'like', '%'.$this->search["value"].'%')
                ->orWhere('city', 'like', '%'.$this->search["value"].'%');
            });
        }
        return $basicQuery;
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
                "downloaded_at"=> $record->downloaded_at
            );
                
        }
        return $results;
    }

    public function countRows($query){
        return intval($query->count());
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
    
    public function getCandidatesExcel(Request $request){ 
        $this->setValues($request);
        $this->setColumnToOrderBy();
        $this->setAssignedJobs();
        $this->setColumnNameWithValueToSearch();
        $basicQuery = Candidate::whereIn('job_id', $this->assignedJobs);
        $finalQuery = $this->applyWhereStatements($basicQuery);
          
        $result = $finalQuery->orderby($this->orderByColumn, $this->orderByDirection)->get([
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
        ])->toArray();
        
        $finalQuery->update(['download_status' => 1,'downloaded_by'=>auth()->user()->email, 'downloaded_at'=>now()]);

        return $result;
    }

    public function deleteCandidates(Request $request){
        $this->setValues($request);
        $this->setColumnToOrderBy();
        $this->setAssignedJobs();
        $this->setColumnNameWithValueToSearch();
        $basicQuery = Candidate::whereIn('job_id', $this->assignedJobs);
        $finalQuery = $this->applyWhereStatements($basicQuery);
        $finalQuery->delete();
        return ["success"=> true];
    }
}
