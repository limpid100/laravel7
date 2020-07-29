<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Digest
 *
 * @property int $id
 * @property int $book_id 所属书目ID
 * @property string $content 书摘内容
 * @property int $status 状态 1正常 2屏蔽
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Book $book
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Digest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Digest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Digest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Digest whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Digest whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Digest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Digest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Digest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Digest whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Digest extends Model
{
    //

    public function book(){
        return $this->belongsTo('App\Book');
    }
}
