<?php
namespace App\Http\Controllers;
use App\Models\Zoom;
use Carbon\Carbon;
use Illuminate\Http\Request;
class ZoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $zoom=Zoom::latest('id_zoom')->get();
        return view('admin.zoom.index')->with(compact('zoom'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.zoom.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $zoom=$request->all();
        $zoom['created_at']=Carbon::now('Asia/Ho_Chi_Minh');
        Zoom::create($zoom);
        toastr()->success('Thêm lớp thành công');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $zoom=Zoom::find($id);
        return view('admin.zoom.edit')->with(compact('zoom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $zoom=Zoom::find($id);
        $zoom['updated_at']=Carbon::now('Asia/Ho_Chi_Minh');
        $zoom->update($request->all());
        return redirect('admin/zoom');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $zoom=Zoom::find($id);
        $zoom->delete();
        toastr()->success('Xóa lớp thành công');
        return back();
    }
}
