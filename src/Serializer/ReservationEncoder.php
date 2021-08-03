<?php

namespace App\Serializer;

use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;

class ReservationEncoder implements EncoderInterface, DecoderInterface
{
    public const FORMAT = 'json';

    public function encode($data, $format, array $context = [])
    {
        // TODO: return your encoded data
        return 'yaml' === $format;
    }

    public function supportsEncoding($format): bool
    {
        return self::FORMAT === $format;
    }

    public function decode($data, $format, array $context = [])
    {
        // TODO: return your decoded data
        return 'yaml' === $format;
    }

    public function supportsDecoding($format): bool
    {
        return self::FORMAT === $format;
    }
}
