<?php
namespace SilverStripe\MultiForm\Tests;

use SilverStripe\Dev\TestOnly;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\MultiForm\Models\MultiFormStep;

/**
 * @package multiform
 * @subpackage tests
 */
class MultiFormTestStepTwo extends MultiFormStep implements TestOnly
{
    public static $next_steps = MultiFormTestStepThree::class;

    public function getFields()
    {
        return new FieldList(
            new TextareaField('Comments', 'Tell us a bit about yourself...')
        );
    }
}
