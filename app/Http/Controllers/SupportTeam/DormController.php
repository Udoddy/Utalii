<?php

namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Qs;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dorm\DormCreate;
use App\Http\Requests\Dorm\DormUpdate;
use App\Repositories\DormRepo;
use App\Models\Category;

class DormController extends Controller
{
    protected  $dorm;

    public function __construct(DormRepo $dorm)
    {
        $this->middleware('teamSA', ['except' => ['destroy',] ]);
        $this->middleware('super_admin', ['only' => ['destroy',] ]);

        $this->dorm = $dorm;
    }

    public function index()
    {
        $categories = Category::all();
        $d['dorms'] = $this->dorm->getAll();
        return view('pages.support_team.dorms.index', [
            'dorms' => $d['dorms'],
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
        $d['dorm'] = $this->dorm->find($id);

        return view('pages.support_team.dorms.show', $d);
    }

    public function store(DormCreate $req)
    {
        $data = $req->only(['name', 'description', 'category', 'location']);

        // Upload and store the image
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = $image->getClientOriginalName(); // Use the original file name
            $image->storeAs('public/images/Places', $imageName);
            $data['image'] = $imageName;
        }

        $this->dorm->create($data);

        return Qs::jsonStoreOk();
    }


    public function edit($id)
    {
        $d['dorm'] = $dorm = $this->dorm->find($id);

        return !is_null($dorm) ? view('pages.support_team.dorms.edit', $d)
            : Qs::goWithDanger('dorms.index');
    }

    public function update(DormUpdate $req, $id)
    {
        $data = $req->only(['name', 'description']);
        $this->dorm->update($id, $data);

        return Qs::jsonUpdateOk();
    }

    public function destroy($id)
    {
        $this->dorm->find($id)->delete();
        return back()->with('flash_success', __('msg.delete_ok'));
    }
}
