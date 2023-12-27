<?php

namespace App\Repositories;

use App\Models\Dorm;

class DormRepo
{

    public function create($data)
    {
        $dorm = Dorm::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'category_id' => $data['category'],
            'location' => $data['location'],
            'image' => $data['image'],
        ]);

        return $dorm;
        // return Dorm::create($data);
    }

    public function getAll($order = 'name')
    {
        return Dorm::orderBy($order)->get();
    }

    public function getDorm($data)
    {
        return Dorm::where($data)->get();
    }

    public function update($id, $data)
    {
        return Dorm::find($id)->update($data);
    }

    public function find($id)
    {
        return Dorm::find($id);
    }


}
