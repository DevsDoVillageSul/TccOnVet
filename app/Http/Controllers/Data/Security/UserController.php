<?php

namespace App\Http\Controllers\Data\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Exception;

class UserController extends Controller
{
    protected $model = User::class;
    public function save(Request $request)
    {
        //Precisa fazer a validação do e-mail  duplicado (já existente na tabela)
        try {
            $user = $this->model::findOrNew($request->id);
            $user->name = $request->name;
            $user->jobtitle = $request->jobtitle;
            $user->role_id  = $request->role_id;
            $user->home_id  = $request->home_id;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->cellphone = $request->cellphone;
            $user->active = $request->ativo ?? 0;

            if($request->password != "") {
                $user->password = bcrypt($request->password);
            }


            $user->save();
            return $user;
        } catch (Exception $ex) {
            return response()->json([
                'message' => 'Ocorreu um Erro ao salvar o Usuário',
                'exception' => $ex->getMessage()
            ], 404);
        }
    }
}
