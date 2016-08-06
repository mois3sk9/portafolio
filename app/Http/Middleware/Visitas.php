<?php

namespace App\Http\Middleware;

use Closure;
use App\Visitas as VisitasModel;

class Visitas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        $visita = new VisitasModel();
        $ipYaNosVisito = VisitasModel::where('ip', $this->getIpAddress())->first();
        //si la ip ya nos habia visitado anteriormente aumentamos la cantidad de visitas
        if($ipYaNosVisito != null) {
           $ip = $this->getIpAddress();
           //$ipYaNosVisito->ip =$ip;
           $ipYaNosVisito->increment('cantidad');
           $ipYaNosVisito->save();
            
        } else {//si no nos habia visitado simplemente la guardamos
           
            $visita->ip  = $this->getIpAddress();
            $visita->save();

        }
       
       // echo "hola mundo";
       
        return $next($request);
    }

    public function getIpAddress() {
        
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
        }

        return (string)$ipAddress;

    }
}
