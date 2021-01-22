<?php

namespace App\Imports;

use App\Models\Candidate;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CandidateImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Candidate([
            "id" => $row['id'],
            "job_to_apply" => $row['job_to_apply'],
            "fullName" => $row['fullName'],
            "dni" => $row['dni'],
            "birthday" => $row['birthday'],
            "email" => $row['email'],
            "linkedin" => $row['linkedin'],
            "country" => $row['country'],
            "province" => $row['province'],
            "city" => $row['city'],
            "education_level" => $row['education_level'],
            "education_status" => $row['education_status'],
            "career" => $row['career'],
            "created_at" => $row['created_at']
        ]);
    }
}
