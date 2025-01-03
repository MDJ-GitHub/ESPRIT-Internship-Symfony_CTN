<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Mouvement extends \App\Entity\Mouvement implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'archived' => [parent::class, 'archived', null],
        "\0".parent::class."\0".'datedeb' => [parent::class, 'datedeb', null],
        "\0".parent::class."\0".'datedebc' => [parent::class, 'datedebc', null],
        "\0".parent::class."\0".'dateemb' => [parent::class, 'dateemb', null],
        "\0".parent::class."\0".'dateembc' => [parent::class, 'dateembc', null],
        "\0".parent::class."\0".'etat' => [parent::class, 'etat', null],
        "\0".parent::class."\0".'evaluation' => [parent::class, 'evaluation', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'matriculep' => [parent::class, 'matriculep', null],
        "\0".parent::class."\0".'portdep' => [parent::class, 'portdep', null],
        "\0".parent::class."\0".'portdes' => [parent::class, 'portdes', null],
        "\0".parent::class."\0".'situation' => [parent::class, 'situation', null],
        'archived' => [parent::class, 'archived', null],
        'datedeb' => [parent::class, 'datedeb', null],
        'datedebc' => [parent::class, 'datedebc', null],
        'dateemb' => [parent::class, 'dateemb', null],
        'dateembc' => [parent::class, 'dateembc', null],
        'etat' => [parent::class, 'etat', null],
        'evaluation' => [parent::class, 'evaluation', null],
        'id' => [parent::class, 'id', null],
        'matriculep' => [parent::class, 'matriculep', null],
        'portdep' => [parent::class, 'portdep', null],
        'portdes' => [parent::class, 'portdes', null],
        'situation' => [parent::class, 'situation', null],
    ];

    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        if ($cloner !== null) {
            return;
        }

        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
