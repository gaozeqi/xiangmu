<?php

namespace App\model\admin;

use Illuminate\Database\Eloquent\Model;

class Twotype extends Model
{
    //
    protected $table = 'twotype';

    protected $primaryKey = 'id';

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 不可被批量赋值的属性。
     *
     * @var array
     */
    protected $guarded = [];
}
