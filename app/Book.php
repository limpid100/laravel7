<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Book
 *
 * @property int $id
 * @property string $name 书名
 * @property int $sort 排序
 * @property int $status 状态 1正常 2屏蔽
 * @property string $author 作者
 * @property string $user 添加用户
 * @property int $clicks 点击量
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Digest[] $digests
 * @property-read int|null $digests_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereClicks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Book whereUser($value)
 * @mixin \Eloquent
 */
class Book extends Model
{
    //
    protected $guarded = [];

    public function digests()
    {
        return $this->hasMany('App\Digest');
    }
}
