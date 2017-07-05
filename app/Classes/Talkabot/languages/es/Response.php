<?php

namespace Talkabot\languages\es;

use Talkabot\languages\ResponseOption;

class Response extends \Talkabot\languages\Response
{

    /**
     * Response constructor.
     */
    public function __construct()
    {
    }

    protected function setUpLanguage()
    {

        $aux = new ResponseOption();
        $aux
            ->addAnalysis( "(hola)" )
            ->addResponse( "Hola" )
            ->setRepeatResponse( true )
            ->addResponse( "Emmm, hola")
            ->addResponse( "Eres insistente ¿No?")
            ->addResponse( "Emmm, ¿De nuevo?")
        ;

        $this->responses[] = $aux;

        $aux = new ResponseOption();
        $aux
            ->addAnalysis( "(como)(esta|estas|encuentras)(?)" )
            ->addAnalysis( "(que)(tal)(?)" )
            ->addAnalysis( "(que)(tal)(esta|estas)(?)" )
            ->addResponse( "Bien gracias" )
            ->addResponse( "Perfectamente" )
            ->addResponse( "Genial" )
            ->setRepeatResponse( true )
            ->addResponse( "Ya te dije")
            ->addResponse( "Eres insistente ¿No?")
            ->addResponse( "Emmm, ¿De nuevo?")
        ;

        $this->responses[] = $aux;
    }
}