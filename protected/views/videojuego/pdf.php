<!--?php 

$html = <<<HERE
        <table-->
            
                Nombre: 
                $model->Nombre_vj
            
                Plataforma:
                $data->codPlat->Nombre_Plat
            
                Compañia:
                $data->codComp->Nombre_Comp
            
        
HERE;

$mpdf = new mPDF('utf-8','LETTER','','',15,15,25,12,5,7);

$mpdf->WriteHTML($html);
$mpdf->Output(.$model->Nombre_vj.'pdf','I');
exit;
?>