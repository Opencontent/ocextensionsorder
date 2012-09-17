<?php

class OCExtensionsOrder
{
    function OCExtensionsOrder()
    {
    }

    function operatorList()
    {
        return array( 'extensions_order' );
    }

    function namedParameterPerOperator()
    {
        return true;
    }

    function namedParameterList()
    {
        return array( 'extensions_order' => array( 'extensions_array' => array( 'type' => 'array',
                                                          'required' => true,
                                                          'default' => array() ) ) );
    }

    function modify( $tpl, $operatorName, $operatorParameters, &$rootNamespace, &$currentNamespace, &$operatorValue, &$namedParameters )
    {        
        switch ( $operatorName )
        {
            case 'extensions_order':
            {
                $operatorValue = eZExtension::extensionOrdering( $namedParameters['extensions_array'] );
            } break;
        }
    }
}

?>