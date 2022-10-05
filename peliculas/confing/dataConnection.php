<?php 
class Conexion
{
    public function  conectar (){
    

        $enlace = mysqli_connect('sql521.main-hosting.eu' , 'u413489667_equipoCuatro' ,'@equipoCuatro202240' , 'u413489667_equipoCuatro' , );
        if($enlace){
echo  "conexión correcta a la base  de datos, si pude mamá";
        }
        return $enlace;
    }

}  

?>