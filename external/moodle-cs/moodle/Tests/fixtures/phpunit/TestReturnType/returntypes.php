// phpcs:set moodle.PHPUnit.TestCaseProvider autofixStaticProviders true
<?php
defined('MOODLE_INTERNAL') || die(); // Make this always the 1st line in all CS fixtures.

class complex_provider_test extends base_test {
    public function test_one() {
        // Nothing to test.
    }

    public function test_two(): void {
        // Nothing to test.
    }

    public function test_three(): array {
        // Nothing to test.
        return [];
    }

    public function not_a_test(): void {
        // Nothing to test.
    }

    public function not_a_test_without_return_type() {
        // Nothing to test.
    }

    public function test_with_a_return() {
        // Nothing to test.
        return [];
    }

    public function test_with_another_return() {
        // Nothing to test.
        return
            [];
    }

    public function test_with_empty_return() {
        // Nothing to test.
        return
            ;
    }
}

class some_other_class extends some_class {
}

class yet_other_class {
    public function test_not_a_test() {
        // Not a test.
    }
}
