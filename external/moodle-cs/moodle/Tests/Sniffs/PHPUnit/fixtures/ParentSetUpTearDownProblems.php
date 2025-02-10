<?php
defined('MOODLE_INTERNAL') || die(); // Make this always the 1st line in all CS fixtures.

class no_statement_setup_teardown_test extends Something {
    public function setUp(): void {

    }
    public function tearDown(): void {
        // This is not an statement.
    }
    public static function setUpBeforeClass(): void {
        /** This is not an statement */
    }
    public static function tearDownAfterClass(): void {
    }
}

class duplicate_and_incorrct_setup_teardown_test extends Something {
    public function setUp(): void {
        parent::setUp();
        parent::setUp();
        parent::tearDown(); // This is wrong.
        parent::anotherMethodOk();
    }
    public function tearDown(): void {
        parent::tearDown();
        parent::tearDown();
        parent::anotherMethodOk();
        parent::setUp(); // This is wrong.
    }
    public static function setUpBeforeClass(): void {
        parent::tearDownAfterClass(); // This is wrong.
        parent::setUpBeforeClass();
        parent::anotherMethodOk();
        parent::setUpBeforeClass();
    }
    public static function tearDownAfterClass(): void {
        parent::anotherMethodOk();
        parent::tearDownAfterClass();
        parent::tearDownAfterClass();
        parent::setUpBeforeClass(); // This is wrong.
    }
}

class best_insertion_setup_teardown_test extends Something {
    public function setUp(): void {

        // This is a comment.

        global $CFG, $CFG2,
               $CFG3, CFG4;

        require(
            'somefile.php'
        );

        // Another comment.
        global $USER;

        include_once('somefile.php');
    }
    public function tearDown(): void {
        // This is a comment.

        global $CFG;

        require('somefile.php');
    }
    public static function setUpBeforeClass(): void {
        $a = 3;

        // This is a comment.

        global $CFG;

        require('somefile.php');

        // Another comment.
        global $USER;

        include('somefile.php');
    }
    public static function tearDownAfterClass(): void {
        $a = 3:
        // This is a comment.
        global $CFG;
        require('somefile.php');
    }
}

class empty_setup_teardown_test extends Something {
    public function setUp(): void {}
    public function tearDown(): void {}
    public static function setUpBeforeClass(): void {}
    public static function tearDownAfterClass(): void {  } // Same line.
}
