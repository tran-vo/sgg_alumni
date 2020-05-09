<?php

namespace App\Http\Middleware;


use App\Models\User as AppUser;
use App\User;
use Closure;
use App\Models\Permission;
use App\Models\PermissionUser;
use App\Models\RoleUser as AppRoleUser;
use App\RoleUser;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class PermissionAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->check())
        {            
            $url = Route::getFacadeRoot()->current()->uri();
            //dd($url);

            // TODO KIỂM TRA QUYỀN TRONG BẢNG permission_users trước xem có route được cấp thêm không
            $permission_user = PermissionUser
                ::join('routes','permission_users.route_id','=','routes.route_id')
                ->where('permission_users.user_id','=',Auth::user()->user_id)
                ->get();
            // dd($permission_user);
            if(isset($permission_user))     // TODO Nếu có thì chạy các route được ưu tiên đó trước
            {
                $result = collect($permission_user);
                $plucked = $result->pluck('route_link');
    
                $sum = $plucked->all();
                $i = 0;
                $arrayLength = count($sum);
                while ($i < $arrayLength) {
                    // echo $sum[$i] ."<br />";
                    if($url == $sum[$i])
                    {
                        return $next($request);
                    }
                    $i++;
                }
                // TODO Sau khi chạy xong các Route ưu tiên trong bảng permission_users thì
                // TODO Mới chạy các route trong phân quyền theo Role của bảng permissionss
                $role = AppRoleUser::where('user_id','=',Auth::user()->user_id)->get();
                // dd($role);
                if(!isset($role))
                {
                    return redirect()->route('error_role');
                }
                foreach($role as $r)
                {
                    $role_id=  $r['role_id'];
                    // die();
                    // $role_id = $role->role_id;      // 1: Admin
                    // dd($role_id);
                    $permission = Permission::join('routes','permissions.route_id','=','routes.route_id')
                        ->where('role_id','=',$role_id)
                        ->get();
                    // echo $permission;
                    // $result = collect($permission);
                    // $plucked = $result->pluck('route_link');

                    // $sum = $plucked->all();
                    // $i = 0;
                    // $arrayLength = count($sum);
                    // while ($i < $arrayLength) {
                    //     // echo $sum[$i] ."<br />";
                    //     if($url == $sum[$i])
                    //     {
                    //         return $next($request);
                    //     }
                    //     $i++;
                    // }
                    foreach ($permission as $key => $value) {
                        // echo $permission;
                        // die();
                        if($url == $value->route_link)
                        {
                            return $next($request);
                        }
                    }
                }
                // die();
                return redirect('error');
            }else{
                $role = AppRoleUser::where('user_id','=',Auth::user()->user_id)->first();
                // dd($role);
                if(!isset($role))
                {
                    return redirect()->route('error_role');
                }
                $role_id = $role->role_id;      // 1: Admin
                // dd($role_id);
                $permission = Permission
                    ::join('routes','permissions.route_id','=','routes.route_id')
                    ->where('role_id','=',$role_id)
                    ->get();
                
                $result = collect($permission);
                $plucked = $result->pluck('route_link');

                $sum = $plucked->all();
                $i = 0;
                $arrayLength = count($sum);
                while ($i < $arrayLength) {
                    // echo $sum[$i] ."<br />";
                    if($url == $sum[$i])
                    {
                        return $next($request);
                    }
                    $i++;
                }
                return redirect('error');
            }
        }
        else
        {
            return redirect()->route('login');
        }
    }
}
