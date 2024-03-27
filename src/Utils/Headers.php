<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Speakeasy\SpeakeasyClientSDK\Utils;

use ReflectionProperty;

class Headers
{
    /**
     * @param mixed $headers
     * @param array<string,array<string,array<string,string>>> $globals
     * @return array<string,string>
     */
    public function parseHeaders(mixed $headers, array $globals): array
    {
        $out = [];

        if ($headers === null) {
            return $out;
        }

        foreach ($headers as $field => $value) {
            $value = populateGlobal($value, 'header', $field, $globals);
            if ($value === null) {
                continue;
            }

            $metadata = $this->parseHeaderMetadata(new ReflectionProperty($headers::class, $field));
            if ($metadata === null) {
                continue;
            }

            $value = $this->serializeHeader($metadata, $value);

            if (empty($value)) {
                continue;
            }

            $out[$metadata->name] = $value;
        }

        return $out;
    }

    private function serializeHeader(ParamsMetadata $metadata, mixed $value): string
    {
        switch (gettype($value)) {
            case 'object':
                $items = [];

                foreach ($value as $field => $fieldValue) { /** @phpstan-ignore-line */
                    if ($fieldValue === null) {
                        continue;
                    }

                    $fieldMetadata = $this->parseHeaderMetadata(new ReflectionProperty($value::class, $field));
                    if ($fieldMetadata === null || empty($fieldMetadata->name)) {
                        continue;
                    }

                    if ($metadata->explode) {
                        $items[] = $fieldMetadata->name . '=' . valToString($fieldValue);
                    } else {
                        $items[] = $fieldMetadata->name;
                        $items[] = valToString($fieldValue);
                    }
                }

                return implode(',', $items);
            case 'array':
                if (array_is_list($value)) {
                    return implode(',', array_map(fn ($v) => valToString($v), $value));
                } else {
                    $items = [];

                    foreach ($value as $field => $fieldValue) {
                        if ($fieldValue === null) {
                            continue;
                        }

                        if ($metadata->explode) {
                            $items[] = $field . '=' . valToString($fieldValue);
                        } else {
                            $items[] = $field;
                            $items[] = valToString($fieldValue);
                        }
                    }

                    return implode(',', $items);
                }
            default:
                return valToString($value);
        }
    }

    private function parseHeaderMetadata(ReflectionProperty $property): ParamsMetadata|null
    {
        $metadataStr = SpeakeasyMetadata::find($property->getAttributes(SpeakeasyMetadata::class), 'header');
        if ($metadataStr === null) {
            return null;
        }

        $metadata = ParamsMetadata::parse($metadataStr);
        if ($metadata === null) {
            return null;
        }

        return $metadata;
    }
}
