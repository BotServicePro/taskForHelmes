<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;
use App\Models\Record;

class SectorController extends Controller
{
    function buildTree($data) {
        $result = [];
    
        $getParent = array_filter($data, function($val) use (&$data) {
            $result = false;
    
            if ($val['parentId'] === null) {
                $result = true;
            }
            
            return $result;
        });


        foreach ($getParent as $parent) {
            $result[] = $this->prepareChildren($parent, $data);
        }

        return $result;
    }

    function prepareChildren($parent, $data) {
        
        $parent['children'] = [];

        
        $children = array_filter($data, function($value) use ($parent) {
            $parentId = $parent['id'];
            return $value['parentId'] === $parentId;
        });
        
        $sortChildren = array_values($children);
    
        foreach ($sortChildren as $childrenValue) {
            $parent['children'][] = $this->prepareChildren($childrenValue, $data);
        }

        return $parent;
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $sectorsData = Sector::all()->toArray();
        $sectorsTree = $this->buildTree($sectorsData);
   
        $sessionData['name'] = $request->session()->get('name')[0] ?? null;
        $sessionData['sectors'] = $request->session()->get('sectors')[0] ?? null;
        $sessionData['terms'] = $request->session()->get('terms')[0] ?? null;  

        return view('site.index', compact('sessionData', 'sectorsTree'));
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'sectors' => 'required|nullable',
            'name' => 'required|string|max:25',
            'terms' => 'required|int',
        ]);

        $request->session()->pull('sectors', $data['sectors']);
        $request->session()->pull('name', $data['name']);
        $request->session()->pull('terms', $data['terms']);

        $request->session()->push('sectors', $data['sectors']);
        $request->session()->push('name', $data['name']);
        $request->session()->push('terms', $data['terms']);
        
        $newRecord = new Record();
    
        $newRecord->fill($data);
        $newRecord->sectorIds = $data['sectors'];

        $newRecord->save();
        
        flash('Saved')->success();
        return redirect(route('showSectors'));
    }
}
