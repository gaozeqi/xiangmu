<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Model\Admin\User;
use Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
      $res = User::all();


         return view('admin.user.index',
            [
                'title'=>'用户浏览',
                'res'=>$res,
                'request'=>$request
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
        return view('admin.user.add',['title'=>'用户添加页面']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //表单验证
       $this->validate($request, [
            'username' => 'required|regex:/^\w{6,16}$/',
            'password' => 'required|regex:/^\S{6,12}$/',
            'phone'=>'regex:/^1[3456789]\d{9}$/',
            'photo'=>'required',
            'email'=>'email'
        ],[
            'username.required' => '用户名不能为空',
            'username.regex'=>'用户名格式不正确',
            'password.required'  => '密码不能为空',
            'password.regex'  => '密码格式不正确',
            'phone.regex'=>'手机号码格式不正确',
            'email.email'=>'邮箱格式不正确',
            'photo.required'=>'请上传图片'
        ]);

        //表单添加页传过来的数据  剔除
        $res = $request->except('_token','photo');
        //上传头像
        if($request->hasFile('photo')){
            //自定义名字
            $name = rand(111,999).time();

            //获取后缀
            $suffix = $request->file('photo')->getClientOriginalExtension();

            $request->file('photo')->move('./uploads',$name.'.'.$suffix);

            $res['photo'] = '/uploads/'.$name.'.'.$suffix;

        }

        //加密密码
        // $res['password'] = encrypt($request->password);
        $res['password'] = Hash::make($request->password);



        //存数据

       try{


            $data = User::create($res);
            if($data){
                return redirect('/admin/user')->with('success','添加成功');
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
         $res = User::find($id);

        return view('admin.user.edit',[
            'title'=>'用户的修改页面',
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
        //表单验证
       $this->validate($request, [
            'username' => 'required|regex:/^\w{6,16}$/',
            'phone'=>'regex:/^1[3456789]\d{9}$/',
            'photo'=>'required',
            'email'=>'email'
        ],[
            'username.required' => '用户名不能为空',
            'username.regex'=>'用户名格式不正确',
            'phone.regex'=>'手机号码格式不正确',
            'email.email'=>'邮箱格式不正确',
            'photo.required'=>'请上传图片'
        ]);

        $res = $request->except('_token','photo','_method');
        if($request->hasFile('photo')){
            //自定义名字
            $name = rand(111,999).time();

            //获取后缀
            $suffix = $request->file('photo')->getClientOriginalExtension();

            $request->file('photo')->move('./uploads',$name.'.'.$suffix);

            $res['photo'] = '/uploads/'.$name.'.'.$suffix;

        }
        //数据表修改数据
        try{


            $data = User::where('uid', $id)->update($res);
            if($data){
                return redirect('/admin/user')->with('success','修改成功');
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
        //差一个删除头像
         try{

            $res = User::destroy($id);

            if($res){
                return redirect('/admin/user')->with('success','删除成功');
            }

        }catch(\Exception $e){

            return back()->with('error','删除失败');
        }
    }
}
