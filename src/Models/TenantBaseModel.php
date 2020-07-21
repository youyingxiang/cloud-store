<?php
/**
 * Created by PhpStorm.
 * User: youxingxiang
 * Date: 2020/7/21
 * Time: 7:52 PM
 */
namespace Dcat\Admin\Models;
use Illuminate\Database\Eloquent\Model;
use Spatie\Multitenancy\Models\Concerns\UsesTenantConnection;

class TenantBaseModel extends Model
{
    use UsesTenantConnection;
}
