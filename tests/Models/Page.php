<?php

namespace Rennokki\Befriended\Test\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rennokki\Befriended\Contracts\Blocking;
use Rennokki\Befriended\Contracts\Following;
use Rennokki\Befriended\Contracts\Liking;
use Rennokki\Befriended\Scopes\BlockFilterable;
use Rennokki\Befriended\Scopes\FollowFilterable;
use Rennokki\Befriended\Scopes\LikeFilterable;
use Rennokki\Befriended\Traits\CanBeBlocked;
use Rennokki\Befriended\Traits\CanBeFollowed;
use Rennokki\Befriended\Traits\CanBeLiked;
use Rennokki\Befriended\Traits\CanBlock;
use Rennokki\Befriended\Traits\CanFollow;
use Rennokki\Befriended\Traits\CanLike;

class Page extends Model implements Blocking, Following, Liking
{
    use BlockFilterable;
    use CanBeBlocked;
    use CanBeFollowed;
    use CanBeLiked;
    use CanBlock;
    use CanFollow;
    use CanLike;
    use FollowFilterable;
    use HasFactory;
    use LikeFilterable;

    protected $fillable = [
        'name',
    ];
}
