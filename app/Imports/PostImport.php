<?php

namespace App\Imports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PostImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Post([
            "title" => $row["title"],
            "description" => $row["description"],
            "status" => $row["status"],
            "created_user_id" => $row["created_user_id"],
            "updated_user_id" => $row["updated_user_id"],
        ]);
    }
}
