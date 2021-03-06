<?php

namespace App\Http\Controllers\Admin\onetype;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Onetype;
use App\Model\Admin\Twotype;
use DB;
class OneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $res = Onetype::all();
        return view('admin.onetype.onelist',[
            'title'=>'一级类别显示页面',
            'res'=>$res
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
        return view('admin.onetype.add',['title'=>'一级类别添加页面']);
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
            $data = Onetype::create($res);
            if($data){
                return redirect('/admin/onetype')->with('success','添加成功');
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
        $res = Onetype::where('id',$id)->first();
        return view('admin.onetype.edit',[
            'title'=>'一级类别的修改页面',
            'res'=>$res
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
        //数据表修改数据
        try{

            $data = Onetype::where('id', $id)->update($res);

            if($data){
                return redirect('/admin/onetype')->with('success','修改成功');
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
            $data = Onetype::destroy($id);
            $da = Twotype::where('oid','=',$id)->delete();
            if($data){
                return redirect('/admin/onetype')->with('success','删除成功');
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
        $data = Onetype::where('id',$id)->update($res);
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
