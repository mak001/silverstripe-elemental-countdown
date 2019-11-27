<?php

namespace Dynamic\Elements\CountDown\Tests;

use Dynamic\Elements\CountDown\Elements\ElementCountDown;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\FieldList;
use SilverStripe\View\ArrayData;

/**
 * Class ElementCountDownTest
 * @package Dynamic\Elements\Tests
 */
class ElementCountDownTest extends SapphireTest
{
    /**
     * @var string
     */
    protected static $fixture_file = '../fixtures.yml';

    /**
     *
     */
    public function testGetSummary()
    {
        /** @var ElementCountDown $endonly  */
        $endonly = $this->objFromFixture(ElementCountDown::class, 'endonly');
        $end = $endonly->dbObject('End');
        $this->assertEquals($endonly->getSummary(), "Count down to {$end->Date()} {$end->Time()}");

        /** @var ElementCountDown $timezone  */
        $timezone = $this->objFromFixture(ElementCountDown::class, 'timezone');
        $end = $timezone->dbObject('End');
        $tz = $timezone->dbObject('Timezone');
        $this->assertEquals($timezone->getSummary(), "Count down to {$end->Date()} {$end->Time()} {$tz}");
    }

    public function testGetCMSFields()
    {
        /** @var ElementCountDown $element */
        $element = $this->objFromFixture(ElementCountDown::class, 'endonly');
        $this->assertInstanceOf(FieldList::class, $element->getCMSFields());
    }

    /**
     *
     */
    public function testGetType()
    {
        /** @var ElementCountDown $element */
        $element = $this->objFromFixture(ElementCountDown::class, 'endonly');
        $this->assertEquals($element->getType(), 'Countdown');
    }

    /**
     *
     */
    public function testValidate()
    {
        /** @var ElementCountDown $element */
        $element = $this->objFromFixture(ElementCountDown::class, 'endonly');
        $this->assertTrue($element->validate()->isValid());
    }

    /**
     *
     */
    public function testGetClientConfig()
    {
        /** @var ElementCountDown $element */
        $element = $this->objFromFixture(ElementCountDown::class, 'endonly');
        $this->assertInstanceOf(ArrayData::class, $element->getClientConfig());
    }

    /**
     *
     */
    public function testEncodeArrayValues()
    {
        /** @var ElementCountDown $element */
        $element = $this->objFromFixture(ElementCountDown::class, 'elapse');
        $config = $element->getClientConfig();

        $this->assertEquals(json_decode($config->getField('End')), $element->End);
        $this->assertEquals(json_decode($config->getField('Elapse')), $element->Elapse);
    }
}
