<?php
namespace App\Traits;
use App\Models\promotores;
use App\Models\estados;
use App\Models\distribuidores;
use App\Models\avales;
use App\Models\valeras;
use App\Models\User;
use App\Models\documentos;
use App\Models\historial;
use App\Models\cliente_vales;
use App\Models\monto_capital;
use App\Models\mensajes;
use App\Models\prestamos_valesdet;
use App\Models\prestamos_valesenc;
use App\Models\tipo_distribuidor;
use App\Models\distribuidores_valeras;
use Illuminate\Support\Facades\Request;
use DB;

trait ValeTraits{
 
    public  function obtenerpromotores(){
        $varpromotor = promotores::join('tblempleados','tblpromotores.idempleado','=','tblempleados.id')
        ->join("users", "tblpromotores.idusuario", "=", "users.id")
        ->select('tblpromotores.id',
            'tblempleados.id as idempleado',
            'users.id as idempleados',
            DB::raw('CONCAT(tblempleados.primer_nombre," ",tblempleados.segundo_nombre," ",tblempleados.apellido_paterno," ",tblempleados.apellido_materno) AS Nombre'),
            'users.name as usuario')
        ->get();
        return $varpromotor;
        }


        public  function obtenerestados(){
            $varestado = estados::select('tblestados.id','tblestados.nombre')
            ->get();
            return $varestado;
            }
            public  function iddistribuidor(){
                $vardistribuidor = distribuidores::latest('id')->first();
                return $vardistribuidor;
            }


            public  function idultimoaval(){
                $varavales = avales::latest('id')->first();
                return $varavales;
            }

            public function obtenerdistribuidores(){
                $vardistribuidores = distribuidores::join('tbltipo_distribuidor','tbldistribuidores.tipo_distribuidor','=','tbltipo_distribuidor.id')
                ->select(
                'tbldistribuidores.id', 
                'tbldistribuidores.primer_nombre',
                'tbldistribuidores.segundo_nombre',
                'tbldistribuidores.apellido_paterno', 
                'tbldistribuidores.apellido_materno', 
                'tbldistribuidores.fecha_nacimiento', 
                'tbldistribuidores.curp', 
                'tbldistribuidores.rfc', 
                'tbldistribuidores.sexo', 
                'tbldistribuidores.estado_civil', 
                'tbldistribuidores.telefono', 
                'tbldistribuidores.idsucursal', 
                'tbldistribuidores.idpromotor', 
                'tbldistribuidores.calle', 
                'tbldistribuidores.colonia', 
                'tbldistribuidores.numero_interior', 
                'tbldistribuidores.numero_exterior', 
                'tbldistribuidores.codigo_postal', 
                'tbldistribuidores.idciudad', 
                'tbldistribuidores.lugar_empleo', 
                'tbldistribuidores.puesto_empleo', 
                'tbldistribuidores.salario_mensual', 
                'tbldistribuidores.antiguedad', 
                'tbldistribuidores.telefono_empresa', 
                'tbldistribuidores.direccion_empresa', 
                'tbldistribuidores.egreso_fijomensual', 
                'tbldistribuidores.idestado',
                'tbldistribuidores.estado_captura',
                'tbldistribuidores.tipo_distribuidor',
                'tbltipo_distribuidor.nombre',
                'tbldistribuidores.status')
                ->get();
                return $vardistribuidores;
            }

            public function docAval(int $iddistribuidor){
                $idavalterminaproceso =avales::join('tbldocumentacion','tblavales.id','=','tbldocumentacion.id_tipo')
                ->select(          
                    'tbldocumentacion.id as idreferenciaaval',
                    'tbldocumentacion.id_tipo as idaval', 
                    'tbldocumentacion.identificacion_oficial as identificacion_oficial',
                    'tbldocumentacion.comprobante_domicilio as comprobante_domicilio',
                    'tbldocumentacion.comprobante_ingresos as comprobante_ingresos',
                    'tbldocumentacion.solicitud_credito as solicitud_credito',
                    'tbldocumentacion.autorizacion_buro as autorizacion_buro',
                    'tbldocumentacion.verificacion_domicilio as verificacion_domicilio')
                ->where('tblavales.iddistribuidor','=',$iddistribuidor)
                ->get();
                return $idavalterminaproceso;
            }

            public function obteneravala_termina_proceso(int $iddistribuidor){
                $docuAval =avales::select('tblavales.id' )
                ->where('tblavales.iddistribuidor','=',$iddistribuidor)
                ->get();
                return $docuAval;
            }

        public function obtenerdatosfase1(int $id) {
            $vardistribuidores = distribuidores::join('tblconyuges','tbldistribuidores.id','=','tblconyuges.iddistribuidor')
                ->join('tblreferencias','tbldistribuidores.id','=','tblreferencias.iddistribuidor')
                ->select(
                'tbldistribuidores.id as id_distribuidor', 
                'tbldistribuidores.primer_nombre as distribuidor_primer_nombre',
                'tbldistribuidores.segundo_nombre as distribuidor_segundo_nombre',
                'tbldistribuidores.apellido_paterno as distribuidor_apellido_paterno', 
                'tbldistribuidores.apellido_materno as distribuidor_apellido_materno', 
                'tbldistribuidores.fecha_nacimiento as distribuidor_fecha', 
                'tbldistribuidores.curp as distribuidor_curp', 
                'tbldistribuidores.rfc as distribuidor_rfc', 
                'tbldistribuidores.sexo as distribuidor_sexo', 
                'tbldistribuidores.estado_civil as distribuidor_estado_civil', 
                'tbldistribuidores.telefono as distribuidor_telefono', 
                'tbldistribuidores.idsucursal as distribuidor_idsucursal', 
                'tbldistribuidores.idpromotor as distribuidor_idpromotor', 
                'tbldistribuidores.calle as distribuidor_calle', 
                'tbldistribuidores.colonia as distribuidor_colonia', 
                'tbldistribuidores.numero_interior as distribuidor_numero_interior', 
                'tbldistribuidores.numero_exterior as distrbuidor_numero_exterior', 
                'tbldistribuidores.codigo_postal as distribuidor_codigo_postal', 
                'tbldistribuidores.idciudad as distribuidor_idciudad', 
                'tbldistribuidores.lugar_empleo as distribuidor_lugar_empleo', 
                'tbldistribuidores.puesto_empleo as distribuidor_puesto_empleo', 
                'tbldistribuidores.salario_mensual as distribuidor_salario_mensual', 
                'tbldistribuidores.antiguedad as distribuidor_antiguedad', 
                'tbldistribuidores.telefono_empresa as distribuidor_telefono', 
                'tbldistribuidores.direccion_empresa as distribuidor_direccion_empresa', 
                'tbldistribuidores.egreso_fijomensual as distribuidor_egreso_mensual', 
                'tbldistribuidores.idestado as distribuidor_idestado',
                'tbldistribuidores.estado_captura as distribuior_estado_captura',
                'tbldistribuidores.tipo_distribuidor as tipodis',
                'tbldistribuidores.capital',
                'tbldistribuidores.capital_autorizado',

                'tblconyuges.id as conyuid',
                'tblconyuges.primer_nombre as conyu_primer_nombre',
                'tblconyuges.segundo_nombre as conyu_segundo_nombre',
                'tblconyuges.apellido_paterno as conyu_apellido_paterno',
                'tblconyuges.apellido_materno as conyu_apellido_materno',
                'tblconyuges.fecha_nacimiento as conyu_fecha_nacimiento',
                'tblconyuges.curp as conyu_curp',
                'tblconyuges.rfc as conyu_rfc',
                'tblconyuges.sexo as coyu_sexo',
                'tblconyuges.telefono as conyu_telefono',
                'tblconyuges.lugar_empleo as conyu_lugar_empleo',
                'tblconyuges.puesto_empleo as conyu_puesto_empleo',
                'tblconyuges.salario_mensual as conyu_salario_mensual',
                'tblconyuges.telefono_empresa as conyu_telefono_empresa',
                'tblconyuges.direccion_empresa as conyu_direccion_empresa',
                'tblconyuges.egreso_fijomensual as conyu_egreso_fijo_mensual',
                'tblconyuges.antiguedad as conyu_antiguedad',

                'tblreferencias.id as idrefe',
                'tblreferencias.primer_nombre as refe_primer_nombre',
                'tblreferencias.segundo_nombre as refe_segundo_nombre',
                'tblreferencias.apellido_paterno as refe_apellido_paterno',
                'tblreferencias.apellido_materno as refe_apellido_materno',
                'tblreferencias.fecha_nacimiento as refe_fecha_nacimiento',
                'tblreferencias.curp as refe_curp',
                'tblreferencias.rfc as refe_rfc',
                'tblreferencias.sexo as refe_sexo',
                'tblreferencias.estado_civil as refe_estado_civil',
                'tblreferencias.telefono as refe_telefono',
                'tblreferencias.calle as refe_calle',
                'tblreferencias.colonia as refe_colonia',
                'tblreferencias.numero_interior as refe_numero_interior',
                'tblreferencias.numero_exterior as refe_numero_exterior',
                'tblreferencias.codigo_postal as refe_codigo_postal',
                'tblreferencias.idciudad as ciudad')
                ->where('tbldistribuidores.id','=',$id)
                ->get();
                return $vardistribuidores;
        }

        public function obteneravalactualiza(int $iddistribuidor){
            $idavalterminaproceso =avales::select(
            'tblavales.id',
            'tblavales.iddistribuidor',
            'tblavales.primer_nombre',
            'tblavales.segundo_nombre',
            'tblavales.apellido_paterno',
            'tblavales.apellido_materno',
            'tblavales.fecha_nacimiento',
            'tblavales.curp', 
            'tblavales.rfc', 
            'tblavales.sexo',
            'tblavales.estado_civil',
            'tblavales.telefono', 
            'tblavales.calle', 
            'tblavales.colonia',
            'tblavales.numero_interior',
            'tblavales.numero_exterior',
            'tblavales.codigo_postal',
            'tblavales.idciudad', 
            'tblavales.lugar_empleo',
            'tblavales.puesto_empleo',
            'tblavales.salario_mensual', 
            'tblavales.antiguedad',
            'tblavales.telefono_empresa',
            'tblavales.direccion_empresa', 
            'tblavales.egreso_fijomensual')
            ->where('tblavales.iddistribuidor','=',$iddistribuidor)
            ->get();
            return $idavalterminaproceso;
        }

        public function obtenerDocumentosDis(int $iddistribuidor){
            $disDoc =documentos::select(
            'tbldocumentacion.id')
            ->where('tbldocumentacion.id_tipo','=',$iddistribuidor)
            ->get();
            return $disDoc;
        }

        public function obtenerDocumentosAval(int $idaval){
            $avalDoc =documentos::select(
            'tbldocumentacion.id')
            ->where('tbldocumentacion.id_tipo','=',$idaval)
            ->get();
            return $avalDoc;
        }

        public function obtenerAval(int $iddistribuidor){
            $disDoc =avales::select(
            'tblavales.id')
            ->where('tblavales.iddistribuidor','=',$iddistribuidor)
            ->get();
            return $disDoc;
        }


        public function mostrardocumentacion(int $id){
            $idavalterminaproceso =documentos::select(
            'tbldocumentacion.id',
            'tbldocumentacion.Tipo',
            'tbldocumentacion.id_tipo',
            'tbldocumentacion.identificacion_oficial',
            'tbldocumentacion.comprobante_domicilio',
            'tbldocumentacion.comprobante_ingresos',
            'tbldocumentacion.solicitud_credito',
            'tbldocumentacion.autorizacion_buro',
            'tbldocumentacion.verificacion_domicilio')
            ->where('tbldocumentacion.id_tipo','=',$id)
            ->get();
            return $idavalterminaproceso;
        }

        public function obtenertipo_distribuidor(){
            $vartipodis =tipo_distribuidor::select(
                'tbltipo_distribuidor.id',
                'tbltipo_distribuidor.nombre',
                'tbltipo_distribuidor.descripcion',
                'monto_minimo',
                'monto_maximo')
                ->get();
                return $vartipodis;
        }

        public function obtenermesacred(){
           $sql = 'select tbldistribuidores.id ,tbldistribuidores.status, CONCAT(tbldistribuidores.primer_nombre," ",tbldistribuidores.segundo_nombre," ",tbldistribuidores.apellido_paterno," ",tbldistribuidores.apellido_materno) AS nombre, tbldistribuidores.capital, tbldistribuidores.idsucursal, tblsucursales.nombre as nombresuc  from tbldistribuidores inner join tblsucursales  on tbldistribuidores.idsucursal = tblsucursales.id  where status in("pro_rev","pro_dic");';
           $varmesadecred = DB::select($sql);
           return collect($varmesadecred);
        }

        public function obtenercfredvalidado(){
            $varmesadecred = distribuidores::join('tblsucursales','tbldistribuidores.idsucursal','tblsucursales.id')
            ->select(
             'tbldistribuidores.id',
             'tbldistribuidores.status',
             DB::raw('CONCAT(tbldistribuidores.primer_nombre," ",tbldistribuidores.segundo_nombre," ",tbldistribuidores.apellido_paterno," ",tbldistribuidores.apellido_materno) AS nombre'),
             'tbldistribuidores.capital',
             'tbldistribuidores.idsucursal',
             'tbldistribuidores.capital_autorizado',
             'tblsucursales.nombre as nombresuc')
            ->where('tbldistribuidores.status','=','pro_val')
            ->get();
            return $varmesadecred;
        }

        public function obtener_cred_rev_dic(){
            $sql = 'select distri.id, CONCAT(distri.primer_nombre," ",distri.segundo_nombre," ",distri.apellido_paterno," ",distri.apellido_materno) as nombre, suc.nombre as nombre_suc, distri.capital,distri.status  from tbldistribuidores distri inner join tblsucursales suc on suc.id = distri.idsucursal where status in("pro_rev","pro_dic");';
            $varmesacred = DB::select($sql);
             return collect($varmesacred);
        }

        public function obtenersolicitud(int $id) {
            $vardistribuidores = distribuidores::join('tblconyuges','tbldistribuidores.id','=','tblconyuges.iddistribuidor')
                ->join('tblreferencias','tbldistribuidores.id','=','tblreferencias.iddistribuidor')
                ->join('tblsucursales','tbldistribuidores.idsucursal','=','tblsucursales.id')
                ->join('tblpromotores','tbldistribuidores.idpromotor','=','tblpromotores.id')
                ->join('tblempleados','tblpromotores.idempleado','=','tblempleados.id')
                ->join('tblciudades','tbldistribuidores.idciudad','=','tblciudades.id')
                ->select(
                'tbldistribuidores.id as id_distribuidor', 
                DB::raw('CONCAT(tbldistribuidores.primer_nombre," ",tbldistribuidores.segundo_nombre," ",tbldistribuidores.apellido_paterno," ",tbldistribuidores.apellido_materno) as nombre'),
                'tbldistribuidores.fecha_nacimiento as distribuidor_fecha', 
                'tbldistribuidores.curp as distribuidor_curp', 
                'tbldistribuidores.rfc as distribuidor_rfc', 
                'tbldistribuidores.sexo as distribuidor_sexo', 
                'tbldistribuidores.estado_civil as distribuidor_estado_civil', 
                'tbldistribuidores.telefono as distribuidor_telefono', 
                'tbldistribuidores.idsucursal as distribuidor_idsucursal', 
                'tbldistribuidores.idpromotor as distribuidor_idpromotor', 
                'tbldistribuidores.calle as distribuidor_calle', 
                'tbldistribuidores.colonia as distribuidor_colonia', 
                'tbldistribuidores.numero_interior as distribuidor_numero_interior', 
                'tbldistribuidores.numero_exterior as distrbuidor_numero_exterior', 
                'tbldistribuidores.codigo_postal as distribuidor_codigo_postal', 
                'tbldistribuidores.idciudad as distribuidor_idciudad', 
                'tbldistribuidores.lugar_empleo as distribuidor_lugar_empleo', 
                'tbldistribuidores.puesto_empleo as distribuidor_puesto_empleo', 
                'tbldistribuidores.salario_mensual as distribuidor_salario_mensual', 
                'tbldistribuidores.antiguedad as distribuidor_antiguedad', 
                'tbldistribuidores.telefono_empresa as distribuidor_telefono', 
                'tbldistribuidores.direccion_empresa as distribuidor_direccion_empresa', 
                'tbldistribuidores.egreso_fijomensual as distribuidor_egreso_mensual', 
                'tbldistribuidores.idestado as distribuidor_idestado',
                'tblsucursales.nombre as sucursal',
                'tbldistribuidores.estado_captura as distribuior_estado_captura',
                'tbldistribuidores.tipo_distribuidor as tipodis',
                DB::raw('CONCAT(tblempleados.primer_nombre," ",tblempleados.segundo_nombre," ",tblempleados.apellido_paterno," ",tblempleados.apellido_materno) promotor'),
                'tblciudades.nombre as ciudaddistribuidor',

                'tblconyuges.id as conyuid',
                DB::raw('CONCAT(tblconyuges.primer_nombre," ",tblconyuges.segundo_nombre," ",tblconyuges.apellido_paterno," ",tblconyuges.apellido_materno) as nombrec'),
                'tblconyuges.fecha_nacimiento as conyu_fecha_nacimiento',
                'tblconyuges.curp as conyu_curp',
                'tblconyuges.rfc as conyu_rfc',
                'tblconyuges.sexo as coyu_sexo',
                'tblconyuges.telefono as conyu_telefono',
                'tblconyuges.lugar_empleo as conyu_lugar_empleo',
                'tblconyuges.puesto_empleo as conyu_puesto_empleo',
                'tblconyuges.salario_mensual as conyu_salario_mensual',
                'tblconyuges.telefono_empresa as conyu_telefono_empresa',
                'tblconyuges.direccion_empresa as conyu_direccion_empresa',
                'tblconyuges.egreso_fijomensual as conyu_egreso_fijo_mensual',
                'tblconyuges.antiguedad as conyu_antiguedad',

                'tblreferencias.id as idrefe',
                DB::raw('CONCAT(tblreferencias.primer_nombre," ",tblreferencias.segundo_nombre," ",tblreferencias.apellido_paterno," ",tblreferencias.apellido_materno) as nombrer'),
                'tblreferencias.fecha_nacimiento as refe_fecha_nacimiento',
                'tblreferencias.curp as refe_curp',
                'tblreferencias.rfc as refe_rfc',
                'tblreferencias.sexo as refe_sexo',
                'tblreferencias.estado_civil as refe_estado_civil',
                'tblreferencias.telefono as refe_telefono',
                'tblreferencias.calle as refe_calle',
                'tblreferencias.colonia as refe_colonia',
                'tblreferencias.numero_interior as refe_numero_interior',
                'tblreferencias.numero_exterior as refe_numero_exterior',
                'tblreferencias.codigo_postal as refe_codigo_postal',
                'tblreferencias.idciudad as ciudad')
                ->where('tbldistribuidores.id','=',$id)
                ->get();
                return $vardistribuidores;
        }

        public function solicitudaval(int $iddistribuidor){
            $idavalterminaproceso =avales::select(
            'tblavales.id',
            'tblavales.iddistribuidor',
             DB::raw('CONCAT(tblavales.primer_nombre," ",tblavales.segundo_nombre," ",tblavales.apellido_paterno," ",tblavales.apellido_materno) as nombrea'),
            'tblavales.fecha_nacimiento',
            'tblavales.curp', 
            'tblavales.rfc', 
            'tblavales.sexo',
            'tblavales.estado_civil',
            'tblavales.telefono', 
            'tblavales.calle', 
            'tblavales.colonia',
            'tblavales.numero_interior',
            'tblavales.numero_exterior',
            'tblavales.codigo_postal',
            'tblavales.idciudad', 
            'tblavales.lugar_empleo',
            'tblavales.puesto_empleo',
            'tblavales.salario_mensual', 
            'tblavales.antiguedad',
            'tblavales.telefono_empresa',
            'tblavales.direccion_empresa', 
            'tblavales.egreso_fijomensual')
            ->where('tblavales.iddistribuidor','=',$iddistribuidor)
            ->get();
            return $idavalterminaproceso;
        }

        public function obtenerhistorial(int $iddistribuidor){
            $varhistorial = historial::select(
                'tblhistorial.id',
                'tblhistorial.iddistribuidor',
                'tblhistorial.status',
                'tblhistorial.descripcion_status',
                'tblhistorial.created_at as fecha_creacion',
                'tblhistorial.updated_at as fecha_actualizacion')
                ->where('tblhistorial.iddistribuidor','=',$iddistribuidor)
                ->get();
                return $varhistorial;

        }

        public function obtener_mensajes(int $iddistribuidor){

        $varobtenermensajes = mensajes::select('tblmensajes_interacciones.id', 'tblmensajes_interacciones.iddistribuidor','tblmensajes_interacciones.texto','tblmensajes_interacciones.tipo_usuario','tblmensajes_interacciones.turno')
        ->where('tblmensajes_interacciones.iddistribuidor','=',$iddistribuidor)
        ->get();
        return $varobtenermensajes;

        }

        public function obtenerturno(int $iddistribuidor){
            $varturno = mensajes::select(
             'tblmensajes_interacciones.id',   
            'tblmensajes_interacciones.tipo_usuario',
            'tblmensajes_interacciones.turno')
            ->where('tblmensajes_interacciones.iddistribuidor','=',$iddistribuidor)
            ->orderby('tblmensajes_interacciones.id','desc')
            ->limit(1)
            ->get();
            return $varturno;
        }

    public function obtenermensajesnoleidosxusuario(int $idusuario){
        $varnoti = mensajes::select(
            'tblmensajes_interacciones.id',   
           'tblmensajes_interacciones.tipo_usuario',
           'tblmensajes_interacciones.turno',
           'tblmensajes_interacciones.status',
           'tblmensajes_interacciones.texto',
           'tblmensajes_interacciones.iddistribuidor',
           'tblmensajes_interacciones.created_at')
           ->where('tblmensajes_interacciones.idusuario','!=',$idusuario)
           ->orderby('tblmensajes_interacciones.id','desc')
           ->get();
           return $varnoti;
    }

    public  function obtenerusuariosxname(string $usuario){
        $varuser  = User::select('users.id','users.name' )
        ->where('users.name','=',$usuario)
        ->get();
        return $varuser;
    }

   public function obtenerstockvaleras(){
    $sql ="select distinct(v.idsucursal) ,s.nombre, count(case v.status_valera  = 'I'  when 'Error' THEN 1 else NULL end)
    as disponibles,
    count(case v.status_valera  = 'A'  when 'Error' THEN 1 else NULL end)
    as nodisponibles 
    from tblvaleras v INNER JOIN tblsucursales s on v.idsucursal = s.id 
    group by v.idsucursal,s.nombre;";
    $stokvales = DB::select($sql);
    return collect($stokvales);
   }

   public function obtenersucursalporusuariologueado(int $idusario){
    $varsucursal = user::join('tblempleados','users.idempleado','tblempleados.id')
    ->select('users.id as id_usuario' ,'tblempleados.id as id_empleado','tblempleados.idsucursal as id_sucursal')
    ->where('users.id','=',$idusario)
    ->get();
    return  $varsucursal;
   }

   public function obtenerdisxsucursal(int $idsuc){
    $condiciones = [
        // ['tbldistribuidores.idsucursal','=',$idsuc],
        ['tbldistribuidores.status','=','pro_val']
    ];
    $vardistribuidoresxsuc = distribuidores::select('tbldistribuidores.id','tbldistribuidores.primer_nombre','tbldistribuidores.segundo_nombre','tbldistribuidores.apellido_paterno','tbldistribuidores.apellido_materno')
    ->where($condiciones)
    ->get();
    return $vardistribuidoresxsuc;
   }

   public function obtenervalerasXsuc(int $idsuc){
    $condiciones = [
        ['tblvaleras.idsucursal','=',$idsuc],
        ['tblvaleras.status_valera','=','A']
    ];
    $varvalerasxsuc = valeras::select('tblvaleras.id as folio_valera','tblvaleras.folio_inicio','tblvaleras.folio_fin')
    ->where($condiciones)
    ->get();
    return  $varvalerasxsuc;

   }


public function validavalexdistribudor(int $iddistribuidor)
{
    $condiciones = [
        ['tbldistribuidor_valeras.iddistribuidor','=',$iddistribuidor],
        ['tblvaleras.status_valera','=','A']
    ];

    $vardatosvalidafolio = distribuidores_valeras::join('tblvaleras', 'tbldistribuidor_valeras.idvalera','tblvaleras.id')
    ->join('tbldistribuidores','tbldistribuidor_valeras.iddistribuidor','tbldistribuidores.id')
    ->select('tblvaleras.id as folio_valera','tblvaleras.folio_inicio','tblvaleras.folio_fin','tbldistribuidores.capital')
    ->where($condiciones)
    ->get();
    return $vardatosvalidafolio;
}



public  function idultimocliente(){
   $sql="select id from tblclientes_vales order by id desc limit 1 ";
   $stokvales = DB::select($sql);
   return collect($stokvales);
}

public  function idultimoprestamoenc(){
    $sql="select id,pagoxplazototalredondeado from tblprestamos_valesenc order by id desc limit 1  ";
   $stokvales = DB::select($sql);
   return collect($stokvales);
}

public function obtenerinteresmensualxcapital(int $capital){
$interes = monto_capital::select('tblmontos_capital.id','tblmontos_capital.porciento_interes')
->where('tblmontos_capital.cantidad', '=',$capital)
->get();
return $interes;
}


public function obtenerclientetablaamortizacion(int $idcliente){
    $clienteamortizacion = cliente_vales::select(
    'tblclientes_vales.id',
    'tblclientes_vales.iddistribuidor',
    'tblclientes_vales.Nombre_completo',
    'tblclientes_vales.telefono',
    'tblclientes_vales.direccion')
    ->where('tblclientes_vales.id', '=',$idcliente)
    ->get();
    return  $clienteamortizacion;
}


public function obtenereclienteamortizaciondet(int $idprestamovale){
    $prestamovaleenc = prestamos_valesdet::select('tblprestamos_valesdet.idprestamo_vales',
    'tblprestamos_valesdet.plazos',
    'tblprestamos_valesdet.fecha_pago',
    'tblprestamos_valesdet.pago_quincenal',
    'tblprestamos_valesdet.coberturax_plazo',
    'tblprestamos_valesdet.pago_total',
    'tblprestamos_valesdet.saldo_nuevo')
    ->where('tblprestamos_valesdet.idprestamo_vales', '=',$idprestamovale)
    ->get();
    return $prestamovaleenc;

}

public function validarfoliovale(int $foliovale){
    $prestamovaleenc = prestamos_valesenc::select('tblprestamos_valesenc.id','tblprestamos_valesenc.folio_vale')
    ->where('tblprestamos_valesenc.folio_vale', '=',$foliovale)
    ->get();
    return $prestamovaleenc;
}

public function obtenermontos_capital(){
    $montosvales = monto_capital::select('tblmontos_capital.id','tblmontos_capital.cantidad')
    ->get();
return $montosvales;
}

}




