<?php

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\utils;

class JSON
{
    public static function createSerializer(): \JMS\Serializer\Serializer
    {
        return \JMS\Serializer\SerializerBuilder::create()
            ->configureHandlers(function (\JMS\Serializer\Handler\HandlerRegistry $registry) {
                $registry->registerSubscribingHandler(new MixedJSONHandler());
                $registry->registerSubscribingHandler(new EnumHandler());
            })
            ->addDefaultHandlers()->build();
    }
}