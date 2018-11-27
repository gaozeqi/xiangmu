<?php

namespace App\Http\Controllers\admin\twotype;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Twotype;
use App\Model\Admin\Onetype;
use DB;
class TwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $res = Onetype::where('status','1')->get();
        $path = Twotype::all();
        return view('admin.twotype.twolist',[
            'title'=>'二级类别显示页面',
            'res'=>$res,
            'path'=>$path
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $res = Onetype::where('status','1')->get();
        return view('admin.twotype.add1',[
            'title'=>'二级类别添加页面',
            'res'=>$res
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $res = $request->except('_token');
        try{
            $data = Twotype::create($res);
            if($data){
                return redirect('/admin/twotype')->with('success','添加成功');
            }

        }catch(\Exception $e){

            return back()->with('error','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $res = Onetype::where('status','1')->get();
        $path = Onetype::find($id);
        return view('admin.twotype.add',[
            'title'=>'二级类别添加页面',
            'res'=>$res,
            'path'=>$path
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $res = Onetype::where('status','1')->get();
        $path = Twotype::find($id);
        return view('admin.twotype.edit',[
            'title'=>'分类修改页面',
            'res'=>$res,
            'path'=>$path
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $res = $request->except('_token','profile','_method');
        // dd($res,$id);
        // exit;
        //数据表修改数据
        try{

            $data = twotype::where('id', $id)->update($res);
            if($data){
                return redirect('/admin/twotype')->with('success','修改成功');
            }

        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $data = Twotype::destroy($id);
            //$da = Thrtype::where('tid','=',$id)->delete();
            if($data){
                return redirect('/admin/twotype')->with('success','删除成功');
            }

        }catch(\Exception $e){

            return back()->with('error','删除失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function statusajax(Request $request)
    {
        $id = $request->ids;
        $res=[];
        $sta = $request->sta;
        if($sta == 1){
            $res['status'] = '0';
        }else{
            $res['status'] = '1';
        }
        $data = Twotype::where('id',$id)->update($res);
        if($data){
            if($res['status'] == '0'){
                echo 0;
            }else{
                echo 1;
            }
        } else {
            echo 2;
        }
    }
}
