<?php

namespace MoodleHQ\MoodleCS\moodle\Tests\Sniffs\PHPUnit;

class class_only {
    /**
     * Thing to do.
     *
     * @var string
     */
    protected string $thing;

    /**
     * Other thing to do
     *
     * @var string
     */
    protected string $otherthing;

    /**
     * Moodle prefers int
     *
     * @var integer
     */
    protected int $moodleprefersint;

    /**
     * Multiple vars are not accepted.
     *
     * @var int
     * @var string
     */
    protected int|string $multiplevars;

    /**
     * Union types are supported.
     *
     * @var int|string
     */
    protected int|string $uniontypes;

    /**
     * Docblock followed by an attribute is fine.
     *
     * @var int
     */
    #[Example()]
    protected int  $attributeafterdocblock;

    // @var int Wrong comment type
    protected int $wrongcommenttype;

    protected int $docblockmissing;

    /**
     * See tag also specified.
     *
     * @var int
     * @see Example
     */
    protected int $seetag;

    /**
     * See tag empty.
     *
     * @var int
     * @see
     */
    protected int $seetagempty;

    /**
     * See tag but no var.
     *
     * @see Something
     */
    protected int $seetagnovar;

    /**
     * Other tag (not supported).
     *
     * @var string
     * @deprecated Since 4.4.0
     */
    protected string $hasothertag;

    /**
     * Var tag must be first.
     *
     * @see Something
     * @var array
     */
    protected array $vartagfirst;
}
